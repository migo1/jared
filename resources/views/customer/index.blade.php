@extends('layouts.admin_master')

@section('content')
<div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                        <div>
                                <h4 class="card-title">Customers </h4>
                            </div>
                    <div class="d-md-flex align-items-center">
                      
                    </div>
                    <div class="table-responsive">
                        <table class="table no-wrap v-middle">
                            <thead>
                                <tr class="border-0">
                                    <th class="border-0 text-uppercase font-weight-bold">No.</th>
                                    <th class="border-0 text-uppercase font-weight-bold">Customer id</th>
                                    <th class="border-0 text-uppercase font-weight-bold">Name</th>
                                    <th class="border-0 text-uppercase font-weight-bold">Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($customers as $customer)
                                <tr >
                                <td >{{++$i}}</td>
                                <td>{{$customer->id}}</td>
                                <td >{{$customer->name}}</td>
                                <td>{{$customer->email}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$customers->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection