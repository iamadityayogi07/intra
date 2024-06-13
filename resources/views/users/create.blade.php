@extends('super-admin.layout.app')
@section('content')


<div class="container">
    <div class="row mb-8">
        <div class="col-md-12">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4">
                <div>
                    <h2>Users</h2>
                </div>
                <div>
                    <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
                </div>
            </div>
        </div>
    </div>

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="row">
        <div class="col-xl-12 col-12 mb-5">
            <div class="card h-100 card-lg">
                <div class="card-body p-0">
                    {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control', 'required' => 'required')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Email:</strong>
                                {!! Form::email('email', null, array('placeholder' => 'Email','class' => 'form-control', 'required' => 'required')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Phone:</strong>
                                {!! Form::text('phone', null, array('placeholder' => 'Phone','class' => 'form-control only_numeric', 'required' => 'required', 'minlength' => '10', 'maxlength' => '10')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Password:</strong>
                                {!! Form::password('password', array('id'=>'password','placeholder' => 'Password','class' => 'form-control', 'required' => 'required')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Confirm Password:</strong>
                                {!! Form::password('confirm-password', array('id'=>'confirm_password','placeholder' => 'Confirm Password','class' => 'form-control', 'required' => 'required')) !!}
                                <small style="color:red;" id="pass-error-msg"></small>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Role:</strong>
                                {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','id'=>'role_id', 'required' => 'required')) !!}
                            </div>
                        </div>
                        <!-- //aditya -->
                        <div class="agent-only d-none">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Basic pay:</strong>
                                    <input type="text" name="basic_pay" id="basic_pay" class="form-control allow_decimal">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Monthly target:</strong>
                                    <input type="text" name="monthly_target" id="monthly_target" class="form-control allow_decimal">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Extra income per order:</strong>
                                    <input type="text" name="extra_per_order" id="extra_per_order" class="form-control allow_decimal">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Incentive (%):</strong>
                                    <input type="text" name="incentive" id="incentive" class="form-control allow_decimal">
                                </div>
                            </div>
                        </div>
                        <!-- //aditya -->
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" id="submitBtn" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection