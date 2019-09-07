@extends('layouts.admin_master')


@section('content')







<div class="row">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
    @endif
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                    <div>
                            <h4 class="card-title">Administrators<a href="{{ route('admins.create') }}" class="btn btn-flat btn-sm btn-success float-right">Add Admin</a></h4>
                        </div>
                <div class="d-md-flex align-items-center">
                  
                </div>
                <div class="table-responsive">
                    <table class="table no-wrap v-middle">
                        <thead>
                            <tr class="border-0">
                                <th class="border-0 text-uppercase font-weight-bold">No.</th>
                                <th class="border-0 text-uppercase font-weight-bold">Name</th>
                                <th class="border-0 text-uppercase font-weight-bold">Email</th>
                                <th class="border-0 text-uppercase font-weight-bold">Roles</th>
                                <th class="border-0 text-uppercase font-weight-bold">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $user)
                            <tr>
                              <td>{{ ++$i }}</td>
                              <td>{{ $user->name }}</td>
                              <td>{{ $user->email }}</td>
                              <td>
                                @if(!empty($user->getRoleNames()))
                                  @foreach($user->getRoleNames() as $v)
                                     <label class="badge badge-dark">{{ $v }}</label>
                                  @endforeach
                                @endif
                              </td>
                              <td>
                                 <a class="btn btn-sm btn-info" href="{{ route('admins.show',$user->id) }}">Show</a>
                                 <a class="btn btn-sm btn-primary" href="{{ route('admins.edit',$user->id) }}">Edit</a>
                                  {!! Form::open(['method' => 'DELETE','route' => ['admins.destroy', $user->id],'style'=>'display:inline']) !!}
                                      {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
                                  {!! Form::close() !!}
                              </td>
                            </tr>
                           @endforeach
                        </tbody>
                    </table>
                    {!! $data->render() !!}
                  </div>
            </div>
        </div>
    </div>
</div>

@endsection