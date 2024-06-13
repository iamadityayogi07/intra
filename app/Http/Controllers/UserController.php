<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Order;
use App\Models\MonthlyReport;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;
use Carbon\Carbon;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = User::orderBy('id', 'DESC')->get();
        return view('users.index', compact('data'));
    }

    public function user_index(Request $request)
    {
        //get count
        $roles = ['agent', 'driver'];
        $data = User::whereHas('roles', function ($query) use ($roles) {
            $query->whereIn('name', $roles);
        })->paginate(5);
        return view('users.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name', 'name')->all();
        return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        $input['role_name'] = $request->input('roles')[0];
        $input['password'] = Hash::make($input['password']);

        //check for agent
        $input['basic_pay'] = 0;
        $input['monthly_target'] = 0;
        $input['extra_per_order'] = 0;
        $input['incentive'] = 0;
        if ($request->input('roles')[0] == "Agent") {
            $input['basic_pay'] = $request->basic_pay;
            $input['monthly_target'] = $request->monthly_target;
            $input['extra_per_order'] = $request->extra_per_order;
            $input['incentive'] = $request->incentive;
        }
        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')
            ->with('success', 'User created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        // print_r($user->extra_per_order);die;
        $fromDate = date('Y-m-d 00:00:01');
        $fromDate1 = date('Y-m-' . '01 00:00:01');
        $toDate = date('Y-m-d 23:23:59');

        $todays_order = Order::where('user_id', $id)
            ->whereBetween('created_at', [$fromDate, $toDate])
            ->where('status', 3)
            ->sum('total_price');

        $this_month_order = Order::where('user_id', $id)
            ->whereBetween('created_at', [$fromDate1, $toDate])
            ->where('status', 3)
            ->sum('total_price');

        $agent_month_incentive = Order::where('user_id', $id)
            ->whereBetween('created_at', [$fromDate1, $toDate])
            ->where('status', 3)
            ->sum('agent_incentive');

        $agent_today_incentive = Order::where('user_id', $id)
            ->whereBetween('created_at', [$fromDate, $toDate])
            ->where('status', 3)
            ->sum('agent_incentive');
        $over_achieved_target = 0;
        $monthly_incentive = 0;
        $remaining_month_target = $this_month_order <= $user->monthly_target ? ($user->monthly_target - $this_month_order) : 0.00;
        if ($this_month_order >= $user->monthly_target) {
            $over_achieved_target = $this_month_order - $user->monthly_target;
            $monthly_incentive = ($over_achieved_target * $user->incentive) / 100;
        }

        $basic_pay = $user->basic_pay;
        $monthly_target = $user->monthly_target;
        if ($this_month_order < $user->monthly_target) {
            $unit = $basic_pay / $user->monthly_target;
            $basic_pay = $this_month_order * $unit;
        }

        return view('users.show', compact('monthly_target', 'basic_pay', 'monthly_incentive', 'over_achieved_target', 'remaining_month_target', 'user', 'todays_order', 'this_month_order', 'agent_month_incentive', 'agent_today_incentive'));
    }

    public function report_filter(Request $request)
    {
        $date = $request->formattedDate;
        $id = $request->user_id;
        $user = User::find($id);
        // Get the current year and month using Carbon
        $currentYearMonth = Carbon::now()->format('Y-m');
        // Check if the selected date is the same month and year as the current date
        if ($date === $currentYearMonth) {
            // print_r($user->extra_per_order);die;
            $fromDate = date('Y-m-d 00:00:01');
            $fromDate1 = date('Y-m-' . '01 00:00:01');
            $toDate = date('Y-m-d 23:23:59');

            $todays_order = Order::where('user_id', $id)
                ->whereBetween('created_at', [$fromDate, $toDate])
                ->where('status', 3)
                ->sum('total_price');

            $this_month_order = Order::where('user_id', $id)
                ->whereBetween('created_at', [$fromDate1, $toDate])
                ->where('status', 3)
                ->sum('total_price');

            $agent_month_incentive = Order::where('user_id', $id)
                ->whereBetween('created_at', [$fromDate1, $toDate])
                ->where('status', 3)
                ->sum('agent_incentive');

            $agent_today_incentive = Order::where('user_id', $id)
                ->whereBetween('created_at', [$fromDate, $toDate])
                ->where('status', 3)
                ->sum('agent_incentive');
            $over_achieved_target = 0;
            $monthly_incentive = 0;
            $remaining_month_target = $this_month_order <= $user->monthly_target ? ($user->monthly_target - $this_month_order) : 0.00;
            if ($this_month_order >= $user->monthly_target) {
                $over_achieved_target = $this_month_order - $user->monthly_target;
                $monthly_incentive = ($over_achieved_target * $user->incentive) / 100;
            }

            $basic_pay = $user->basic_pay;
            if ($this_month_order < $user->monthly_target) {
                $unit = $basic_pay / $user->monthly_target;
                $basic_pay = $this_month_order * $unit;
            }

            $arr['monthly_target'] = $user->monthly_target;
            $arr['remaining_month_target'] = $remaining_month_target;
            $arr['this_month_order'] = $this_month_order;
            $arr['todays_order'] = $todays_order;
            $arr['agent_today_incentive'] = $agent_today_incentive;
            $arr['agent_month_incentive'] = $agent_month_incentive;
            $arr['over_achieved_target'] = $over_achieved_target;
            $arr['basic_pay'] = $basic_pay;
            $arr['monthly_incentive'] = $monthly_incentive;
            $arr['success'] = true;
        } else {
            $report_data = MonthlyReport::where('month_year', $date)
                ->where('user_id', $user->id)
                ->first();
            if (!empty($report_data)) {
                $arr['monthly_target'] = $report_data->total_monthly_target;
                $arr['remaining_month_target'] = $report_data->remaining_monthly_target;
                $arr['this_month_order'] = $report_data->monthly_target_achieved;
                $arr['todays_order'] = 0;
                $arr['agent_today_incentive'] = 0;
                $arr['agent_month_incentive'] = $report_data->monthly_orders_incentive;
                $arr['over_achieved_target'] = $report_data->over_achieved_target;
                $arr['basic_pay'] = $report_data->basic_pay;
                $arr['monthly_incentive'] = $report_data->monthly_target_incentive;
                $arr['success'] = true;
            } else {
                $arr['success'] = false;
            }
        }
        return response()->json($arr);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();

        return view('users.edit', compact('user', 'roles', 'userRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'same:confirm-password',
            // 'roles' => 'required'
        ]);

        // print_r($request->input('roles'));die;
        $input = $request->all();
        // $input['roles'] = $request->input('roles')[0];
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = Arr::except($input, array('password'));
        }
        // $input['role_name'] = $request->input('roles')[0];
        //check for agent
        if (!empty($request->basic_pay)) {
            $input['basic_pay'] = $request->basic_pay;
            $input['monthly_target'] = $request->monthly_target;
            $input['extra_per_order'] = $request->extra_per_order;
            $input['incentive'] = $request->incentive;
        }
        $user = User::find($id);
        $user->update($input);
        // DB::table('model_has_roles')->where('model_id', $id)->delete();

        // $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')
            ->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully');
    }
}
