@extends('super-admin.layout.app')
@section('content')


<div class="container">
    <div class="row mb-8">
        <div class="col-md-12">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4">
                <div>
                    <h2>Role Management</h2>
                    <!-- breacrumb -->
                    <!-- <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="index.php" class="text-inherit">Role Management</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Drivers</li>
                        </ol>
                    </nav> -->
                </div>
                <div>
                    @can('role-create')
                    <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a>
                    @endcan
                </div>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-xl-12 col-12 mb-5">
            <div class="card h-100 card-lg">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table id="myTable" class="table table-centered table-hover table-borderless mb-0 table-with-checkbox text-nowrap">
                            <thead class="bg-light">
                                <tr>
                                    <th width="30%">No</th>
                                    <th width="40%">Name</th>
                                    <th width="30%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $key => $role)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
                                        @can('role-edit')
                                        <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                                        @endcan
                                        @can('role-delete')
                                        {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                        @endcan
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{!! $roles->render() !!}

@endsection