@extends('layouts.master')

@section('content')
                

<div class="row">
    <div class="col-5 align-self-center">
        <h4 class="page-title">Rent</h4>

    </div>
</div>
@if ($message = Session::get('danger'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif
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
                                                <input type="hidden" name="total_days">
                            <input type="hidden" name="return_status" value="">
                            <input type="hidden" name="amount" >
                                            </div>
                                            
                                            <div class="form-group">


                                              @foreach ($model->rents as $car)
                                              @if ( $car->return_status == 'returned')
                                               
                                              <div class="col-sm-12">
                                                      <button type="submit" class="btn btn-success" >Rent Car</button>
                                              </div>

                                              @endif
                                              @endforeach
                                            
    
                                            </div>
                                        </form>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>



                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                    <div>
                                            <h4 class="card-title">Rented car </h4>
                                        </div>
                                <div class="d-md-flex align-items-center">
                                  
                                </div>
                                <div class="table-responsive">
                                    <table class="table no-wrap v-middle">
                                        <thead>
                                            <tr class="border-0">
                                                <th class="border-0 text-uppercase font-weight-bold">rent date</th>
                                                <th class="border-0 text-uppercase font-weight-bold">return date</th>
                                                <th class="border-0 text-uppercase font-weight-bold">total days</th>
                                                <th class="border-0 text-uppercase font-weight-bold">Amount</th>
                                                <th class="border-0 text-uppercase font-weight-bold">Status</th>
                                                <th class="border-0 text-uppercase font-weight-bold">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                      @foreach ($model->rents as $car)
                                            
                                            <tr >
                                            <td >{{ $car->rent_date }}</td>
                                            <td>{{ $car->return_date }}</td>
                                            <td>{{ $car->total_days }}</td>
                                            <td>{{ $car->amount }}</td>
                                            <td>{{ $car->return_status }}</td>
                                            <td>
                                              @if ( $car->return_status != 'picked')
                                              @if ($car->return_status != 'returned')

                                              @if ( $car->return_status != 'reserved')

                                              
                                                  
                                             
                                              <button type="button" class="btn btn-info btn-sm"
                                                
                                              data-myrid = "{{ $car->id }}" data-myuid = "{{ $car->user_id }}" data-mycid = "{{ $car->car_model_id }}" 
                                              data-myrt = "{{ $car->rent_date }}" data-myrn = "{{ $car->return_date }}" data-mytd = "{{ $car->total_days }}"
                                               data-myamount = "{{ $car->amount }}" data-mystatus = "{{ $car->rent_status }}"
                                              
                                               data-toggle="modal" data-target="#edit_rent"
                                              >Confirmation</button>
                                             
                                              @endif
                                               

                                                <button type="button" class="btn btn-danger btn-sm"
                                                data-myrid = "{{ $car->id }}"
                                                data-toggle="modal" data-target="#delete"
                                                >Cancel Resevation</button>
                                                @endif
                                                @endif
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




        <!-- Modal edit-->
        <div class="modal fade" id="edit_rent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Confirm reservation</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form class="form-horizontal" method="POST" action="{{ route('rents.update','test')}}">
                      {{method_field('patch')}}
                      @csrf
                    <div class="modal-body">
                    <input type="hidden" name="rent_id" id="rent_id" value="">
                      
                      @include('user_models.edit')
                    </div>
                   
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary btn-sm btn-flat" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary btn-sm btn-flat">Confirmed</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>

                <!-- Modal delete-->
  <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-center" id="exampleModalLabel">Cancel This Resevation</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form class="form-horizontal" method="POST" action="{{ route('rents.destroy','test')}}">
              {{method_field('delete')}}
              @csrf
            <div class="modal-body mt-0 mb-0">
              <p class="text-center">
                Are you sure you want to cancel this?
              </p>
              <input type="hidden" name="rent_id" id="rent_id" value="">
            
            </div>
           
            <div class="modal-footer">
              <button type="button" class="btn btn-primary btn-sm btn-flat" data-dismiss="modal">No, Cancel</button>
              <button type="submit" class="btn btn-danger btn-sm btn-flat">Yes, Cancel</button>
            </div>
          </form>
          </div>
        </div>
      </div>

              <script>
                    $('#edit_rent').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget) 
                    var rent_id = button.data('myrid')
                    var user_id = button.data('myuid')
                    var car_model_id = button.data('mycid')
                    var rent_date = button.data('myrt')
                    var return_date = button.data('myrn')
                    var total_days = button.data('mytd')
                    var amount = button.data('myamount')
                    var rent_status = button.data('mystatus') 
                   
                    var modal = $(this)
                    modal.find('.modal-body #rent_id').val(rent_id)
                    modal.find('.modal-body #user_id').val(user_id)
                    modal.find('.modal-body #car_model_id').val(car_model_id)
                    modal.find('.modal-body #rent_date').val(rent_date)
                    modal.find('.modal-body #return_date').val(return_date)
                    modal.find('.modal-body #total_days').val(total_days)
                    modal.find('.modal-body #amount').val(amount)
                    modal.find('.modal-body #rent_status').val(rent_status)
                  })
                    </script>

<script>
        $('#delete').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var rent_id = button.data('myrid')
      
        var modal = $(this)
      
        modal.find('.modal-body #rent_id').val(rent_id)
      })
        </script>

                @endsection