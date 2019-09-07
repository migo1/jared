@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                    <div>
                            <h4 class="card-title">Your Car Rental History</h4>
                        </div>
                <div class="d-md-flex align-items-center">
                  
                </div>
                <div class="table-responsive">
                    <table class="table no-wrap v-middle">
                        <thead>
                            <tr class="border-0">
                                <th class="border-0 text-uppercase font-weight-bold">No.</th>
                                <th class="border-0 text-uppercase font-weight-bold">Car rented</th>
                                <th class="border-0 text-uppercase font-weight-bold">pickup date</th>
                                <th class="border-0 text-uppercase font-weight-bold">return date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rents as $rent)
                            <tr>
                            <td class="font-weight-bold">{{++$i}}</td>
                            <td class="font-weight-bold">{{$rent->carmodels->model}}</td>
                            <td class="font-weight-bold">{{ $rent->rent_date }}</td>
                            <td class="font-weight-bold">{{ $rent->return_date }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$rents->links()}}
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection