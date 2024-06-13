<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\Shop;
use Helper;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('super-admin.index');
    }

    function get_data_by_id(Request $request)
    {
        if (!empty($request->id) && !empty($request->table) && !empty($request->column_name)) {
            if ($request->table == "sub_categories") {
                $all = "all";
            } else {
                $all = null;
            }
            $data = Helper::get_data_query($request->table, array($request->column_name => $request->id), 'id', 'desc', $all);
            // print_r($data);die;
            return response(['data' => $data]);
        } else {
            return 0;
        }
    }
}
