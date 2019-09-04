@extends('layouts.master')

@section('content')
                

<div class="row">
    <div class="col-5 align-self-center">
        <h4 class="page-title">Rent</h4>

    </div>
</div>
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            @php
                            $pic_url =  asset('./assets/images/users/noimage.jpg');
                            if($model->photo){
                                $pic_url =  "/public/cover_images/".$model->photo;
                           }
      
                        @endphp
                            <div class="card-body">
                                <center class="mt-4"> <img src="{{ $pic_url }}" class="rounded-circle" width="150" />
                                <h4 class="card-title mt-2">{{ $model->model }}</h4>
                                    <h6 class="card-subtitle">{{ $model->carmake->make }}</h6>
                                </center>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-body"> <small class="text-muted">Number Plate </small>
                            <h6>{{ $model->number_plate }}</h6> <small class="text-muted pt-4 db">Condition</small>
                            <h6>{{ $model->descriptions }}</h6> <small class="text-muted pt-4 db">Charges per day</small>
                            <h6>Ksh{{ $model->price }}</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tabs -->
                            <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-timeline-tab" data-toggle="pill" href="#current-month" role="tab" aria-controls="pills-timeline" aria-selected="true">Rental Form</a>
                                </li>
                            </ul>
                            <!-- Tabs -->
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="current-month" role="tabpanel" aria-labelledby="pills-timeline-tab">
                                    <div class="card-body">

                                    <form class="form-horizontal form-material" method="POST" action="{{ route('rents.store') }}" >
                                        @csrf
                                            <input type="hidden" name="user_id">
                                        <input type="hidden" name="car_model_id" value="{{ $model->id }}">
                                                <div class="form-group">
                                                        <label class="col-md-12">Car Make:</label>
                                                        <div class="col-md-12">
                                                        <input type="text" value="{{ $model->carmake->make  }}" class="form-control form-control-line" disabled>
                                                        </div>
                                                    </div>
                                                <div class="form-group">
                                                        <label class="col-md-12">Car Model:</label>
                                                        <div class="col-md-12">
                                                        <input type="text" value="{{ $model->model  }}" class="form-control form-control-line" disabled>
                                                        </div>
                                                    </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Pick up Date:</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="rent_date" placeholder="yyyy-mm-dd" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Return Date:</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="return_date" placeholder="yyyy-mm-dd" class="form-control form-control-line" name="example-email" id="example-email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button type="submit" class="btn btn-success" >Rent Car</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>

                @endsection