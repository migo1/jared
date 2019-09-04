@extends('layouts.master')

@section('content')
 
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                    <div>
                            <h4 class="card-title">Car Models </h4>
                        </div>
                <div class="d-md-flex align-items-center">
                   
                </div>
                <div class="table-responsive">
                    <table class="table no-wrap v-middle">
                        <thead>
                            <tr class="border-0">
                                <th class="border-0">No.</th>
                                <th class="border-0">Car Model</th>
                                <th class="border-0">Number Plate</th>
                                <th class="border-0">Price per day</th>
                                <th class="border-0">Car Status</th>
                                <th class="border-0">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($carmodel as $carmodels)
                                
                            <tr>
                            <td>{{++$i}}</td>
                                <td>
                                    <div class="d-flex no-block align-items-center">
                                            @php
                                            $pic_url =  asset('./assets/images/users/noimage.jpg');
                                            if($carmodels->photo){
                                                $pic_url =  "/public/cover_images/".$carmodels->photo;
                                           }
                      
                                        @endphp
                                        <div class="mr-2"><img src="{{ $pic_url }}" class="rounded-circle" width="45" /></div>
                                        <div class="">
                                        <h5 class="mb-0 font-16 font-medium">{{ $carmodels->carmake->make }}</h5><span>{{ $carmodels->model }}</span></div>
                                    </div>
                                </td>
                            <td>{{ $carmodels->number_plate }}</td>
                                <td>{{ $carmodels->price }}</td>
                            <td>{{ $carmodels->descriptions }}</td>
                               {{-- <td><i class="fa fa-circle text-orange" data-toggle="tooltip" data-placement="top" title="In Progress"></i></td>--}}

                                <td>
                                    <a href="/models/{{$carmodels->id}}" class="btn btn-dark btn-flat btn-sm">Rent</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$carmodel->links()}}
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="add_car_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add New Car Model</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form  method="POST" action="{{ route('car_models.store')}}" enctype="multipart/form-data">
            <div class="modal-body">
              @csrf
              @include('car_model.create')
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary btn-sm btn-flat" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary btn-sm btn-flat">Add Car</button>
            </div>
            </form>
          </div>
        </div>
      </div>
@endsection