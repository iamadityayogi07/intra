@extends('super-admin.layout.app')
@section('content')


<div class="container">
  <div class="row mb-8">
    <div class="col-md-12">
      <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4">
        <div>
          <h2>All Users</h2>
        </div>
        <div>
          @can('user-create')
          <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
          @endcan
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    @if (session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
    @endif

    <div class="col-xl-12 col-12 mb-5">
      <div class="card h-100 card-lg">
        <div class="card-body p-0">
          <table class="table table-bordered">
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Roles</th>
              <th width="280px">Action</th>
            </tr>
            @php $i =0; @endphp
            @foreach ($data as $key => $user)
            <tr>
              <td>{{ ++$i }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->phone }}</td>
              <td>
                @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $v)
                <label class="">{{ $v }}</label>
                @endforeach
                @endif
              </td>
              <td>
                <a class="btn btn-info d-none" href="{{ route('users.show',$user->id) }}">Show</a>
                @can('user-edit')
                @if($user->phone != '7566623666')
                <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                @endif
                @endcan
                @can('user-delete')
                {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:none','onsubmit' => "return confirm('Are you sure you want to delete?')"]) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                @endcan
                {!! Form::close() !!}
              </td>
            </tr>
            @endforeach
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection