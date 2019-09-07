@extends('layouts.admin_master')


@section('content')




<div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                        <div>
                                <h4 class="card-title">Roles<a href="{{ route('roles.create') }}" class="btn btn-flat btn-sm btn-success float-right" >Create New</a></h4>
                            </div>
                    <div class="d-md-flex align-items-center">
                      
                    </div>
                    <div class="table-responsive">
                        <table class="table no-wrap v-middle">
                            <thead>
                                <tr class="border-0">
                                    <th class="border-0 text-uppercase font-weight-bold">No.</th>
                                    <th class="border-0 text-uppercase font-weight-bold">Role</th>
                                    <th class="border-0 text-uppercase font-weight-bold">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach ($roles as $key => $role)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $role->name }}</td>
                                        <td>
                                            <a class="btn btn-sm btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
                                            @can('role-edit')
                                                <a class="btn btn-sm btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                                            @endcan
                                            @can('role-delete')
                                                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                                    {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
                                                {!! Form::close() !!}
                                            @endcan
                                        </td>
                                    </tr>
                                    @endforeach
                            </tbody>
                        </table>
                        {!! $roles->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection