@extends('super-admin.layout.app')
@section('content')

<div class="container">
    <div class="row mb-8">
        <div class="col-md-12">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4">
                <div>
                    <h2>Show roles</h2>
                </div>
                <div>
                    <a class="btn btn-success" href="{{ route('roles.index') }}"> Back</a>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xl-12 col-12 mb-5">
            <div class="card h-100 card-lg">
                <div class="card-body p-0">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $role->name }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Permissions:</strong>
                            @if(!empty($rolePermissions))
                            @foreach($rolePermissions as $v)
                            <label class="label label-success">{{ $v->name }},</label>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection