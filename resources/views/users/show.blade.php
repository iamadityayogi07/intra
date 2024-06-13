@extends('super-admin.layout.app')
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.css" rel="stylesheet" type="text/css" />
@section('content')

<?php

use Illuminate\Support\Facades\Session;

if (!empty(Session::get('flash_status'))) {
?>
    <input type="hidden" id="msg_check" value="<?= Session::get('flash_status'); ?>" data-msg="<?= Session::get('flash_msg'); ?>">
<?php
    Session::pull('flash_status');
    Session::pull('flash_msg');
}
?>
<section class="container">
    <div class="row mb-4">
        <div class="col-md-12">
            <div class="d-md-flex justify-content-between align-items-center">
                <div>
                    <h3>This Month's Payout</h3>
                </div>
                <div>
                    <a class="btn btn-primary" href="{{ route('home') }}"> Back</a>
                </div>
            </div>
        </div>
    </div>
    <!-- table -->
    <div class="table-responsive-xl mb-6 mb-lg-0">
        <div class="row pb-3 pb-lg-0">
            <h3>Month and year</h3>
            <div class="ui calendar" id="example7">
                <div class="ui input left icon">
                    <i class="time icon"></i>
                    <input class="form-control" type="text" id="date_picker" placeholder="Time">
                </div>
            </div>
            <input type="hidden" name="user_id" id="user_id" value="{{$user->id}}">

            <div class="col-lg-4 col-12 mb-6">
                <div class="card h-100 card-lg">
                    <div class="card-body p-6">
                        <div class="d-flex justify-content-between align-items-center mb-6">
                            <div>
                                <h4 class="mb-0 fs-5">Total Monthly Target</h4>
                            </div>
                            <div class="icon-shape icon-md bg-light-danger text-dark-danger rounded-circle">
                                <i class="bi bi-currency-rupee fs-5"></i>
                            </div>
                        </div>
                        <div class="lh-1">
                            <h1 class="mb-2 fw-bold fs-2">Rs. <span id="monthly_target">{{$monthly_target}}</span></h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12 mb-6">
                <div class="card h-100 card-lg">
                    <div class="card-body p-6">
                        <div class="d-flex justify-content-between align-items-center mb-6">
                            <div>
                                <h4 class="mb-0 fs-5">Remaining Monthly Target</h4>
                            </div>
                            <div class="icon-shape icon-md bg-light-warning text-dark-warning rounded-circle">
                                <i class="bi bi-currency-rupee fs-5"></i>
                            </div>
                        </div>
                        <div class="lh-1">
                            <h1 class="mb-2 fw-bold fs-2">Rs. <span id="remaining_month_target">{{ $remaining_month_target}}</span></h1>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 mb-6">
                <div class="card h-100 card-lg">
                    <div class="card-body p-6">
                        <div class="d-flex justify-content-between align-items-center mb-6">
                            <div>
                                <h4 class="mb-0 fs-5">Total Monthly Target Achieved</h4>
                            </div>
                            <div class="icon-shape icon-md bg-light-success text-dark-success rounded-circle">
                                <i class="bi bi-currency-rupee fs-5"></i>
                            </div>
                        </div>
                        <div class="lh-1">
                            <h1 class="mb-2 fw-bold fs-2">Rs. <span id="this_month_order">{{$this_month_order}}</span></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 mb-6">
                <div class="card h-100 card-lg">
                    <div class="card-body p-6">
                        <div class="d-flex justify-content-between align-items-center mb-6">
                            <div>
                                <h4 class="mb-0 fs-5">Todays Target Done</h4>
                            </div>
                            <div class="icon-shape icon-md bg-light-success text-dark-success rounded-circle">
                                <i class="bi bi-currency-rupee fs-5"></i>
                            </div>
                        </div>
                        <div class="lh-1">
                            <h1 class="mb-2 fw-bold fs-2">Rs. <span id="todays_order">{{$todays_order}}</span></h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12 mb-6">
                <div class="card h-100 card-lg">
                    <div class="card-body p-6">
                        <div class="d-flex justify-content-between align-items-center mb-6">
                            <div>
                                <h4 class="mb-0 fs-5">Todays Per Orders Incentive</h4>
                            </div>
                            <div class="icon-shape icon-md bg-light-success text-dark-success rounded-circle">
                                <i class="bi bi-currency-rupee fs-5"></i>
                            </div>
                        </div>
                        <div class="lh-1">
                            <h1 class="mb-2 fw-bold fs-2">Rs. <span id="agent_today_incentive">{{$agent_today_incentive}}</span></h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12 mb-6">
                <div class="card h-100 card-lg">
                    <div class="card-body p-6">
                        <div class="d-flex justify-content-between align-items-center mb-6">
                            <div>
                                <h4 class="mb-0 fs-5">Monthly Orders Incentive</h4>
                            </div>
                            <div class="icon-shape icon-md bg-light-success text-dark-success rounded-circle">
                                <i class="bi bi-currency-rupee fs-5"></i>
                            </div>
                        </div>
                        <div class="lh-1">
                            <h1 class="mb-2 fw-bold fs-2">Rs. <span class="agent_month_incentive">{{$agent_month_incentive}}</span></h1>
                        </div>
                    </div>
                </div>
            </div>

            @if($over_achieved_target > 0)
            <div class="col-lg-4 col-12 mb-6">
                <div class="card h-100 card-lg">
                    <div class="card-body p-6">
                        <div class="d-flex justify-content-between align-items-center mb-6">
                            <div>
                                <h4 class="mb-0 fs-5">Over Achived Target</h4>
                            </div>
                            <div class="icon-shape icon-md bg-light-success text-dark-success rounded-circle">
                                <i class="bi bi-currency-rupee fs-5"></i>
                            </div>
                        </div>
                        <div class="lh-1">
                            <h1 class="mb-2 fw-bold fs-2">Rs. <span id="over_achieved_target">{{$over_achieved_target}}</span></h1>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>

    <!-- row -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-12 mb-6">
            <div class="card h-100 card-lg">
                <!-- heading -->
                <div class="p-6">
                    <h1>Salary</h1>
                    <h3 class="mb-0 fs-5">Basic Pay : <span id="basic_pay">{{$basic_pay}}</span></h3>
                    <h3 class="mb-0 fs-5">Monthly Per Order Incentive : <span class="agent_month_incentive">{{$agent_month_incentive}}</span></h3>
                    <h3 class="mb-0 fs-5">Monthly Target Incentive : <span id="monthly_incentive">{{$monthly_incentive}}</span></h3>
                    <h3 class="mb-0 fs-5">Total Salary : <span id="total_salary">{{number_format(($basic_pay + $agent_month_incentive + $monthly_incentive),2,'.','')}}</span></h3>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection