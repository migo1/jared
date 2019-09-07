@extends('layouts.admin_master')

@section('content')
<div class="row">
    <!-- column -->
    <div class="col-lg-4">
        <div class="card  card-hover">
            <div class="card-body">
                <h4 class="card-title">Available Cars</h4>
                <div class="d-flex no-block align-items-center mt-4">
                    <div class="">
                    <span class="">Total =</span><h3 class="font-medium mb-0">{{ $models }}</h3></div>
                    <div class="ml-auto">
                        <div style="max-width:150px; height:60px;" class="mb-5">
                            <canvas id="bouncerate"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- column -->
    <div class="col-lg-4">
        <div class="card  card-hover">
            <div class="card-body">
                <h4 class="card-title">Car Makes</h4>
                <div class="d-flex no-block align-items-center mt-4">
                    <div class="">
                    <span class="">Total =</span><h3 class="font-medium mb-0">{{ $makes }}</h3></div>
                    <div class="ml-auto">
                        <div style="max-width:150px; height:60px;" class="mb-5">
                            <canvas id="bouncerate"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- column -->
    <div class="col-lg-4">
        <div class="card  card-hover">
            <div class="card-body">
                <h4 class="card-title">Revenue</h4>
                <div class="d-flex no-block align-items-center mt-4">
                    <div class="">
                    <span class="">Total =</span><h3 class="font-medium mb-0">Ksh {{ $revenue }}</h3></div>
                    <div class="ml-auto">
                        <div style="max-width:150px; height:60px;" class="mb-5">
                            <canvas id="bouncerate"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                        <div>
                                <h4 class="card-title">Car Makes Table</h4>
                            </div>
                    <div class="d-md-flex align-items-center">
                      
                    </div>
                    <div class="table-responsive">
                        <table class="table no-wrap v-middle">
                            <thead>
                                <tr class="border-0">
                                    <th class="border-0 text-uppercase font-weight-bold">No.</th>
                                    <th class="border-0 text-uppercase font-weight-bold">customer name</th>
                                    <th class="border-0 text-uppercase font-weight-bold">Car</th>
                                    <th class="border-0 text-uppercase font-weight-bold">Number Plate</th>
                                    <th class="border-0 text-uppercase font-weight-bold">pick-up date</th>
                                    <th class="border-0 text-uppercase font-weight-bold">Return date</th>
                                    <th class="border-0 text-uppercase font-weight-bold">Charges</th>
                                    <th class="border-0 text-uppercase font-weight-bold">Status</th>
                                    <th class="border-0 text-uppercase font-weight-bold">Payment</th>
                                    <th class="border-0 text-uppercase font-weight-bold">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($rents as $rent)
                                <tr>
                                <td class="font-weight-bold">{{++$i}}</td>
                                <td >{{$rent->user->name}}</td>
                                <td >{{$rent->carmodels->model}}</td>
                                <td >{{$rent->carmodels->number_plate}}</td>
                                <td >{{$rent->rent_date}}</td>
                                <td >{{$rent->return_date}}</td>
                                <td> Ksh.{{$rent->amount }}</td>
                                <td>{{ $rent->return_status }}</td>
                                <td>{{ $rent->payment_status }}</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-info btn-flat"
                                                
                                    data-myrid = "{{ $rent->id }}" data-myuid = "{{ $rent->user_id }}" data-mycid = "{{ $rent->car_model_id }}" 
                                    data-myrt = "{{ $rent->rent_date }}" data-myrn = "{{ $rent->return_date }}" data-mytd = "{{ $rent->total_days }}"
                                     data-myamount = "{{ $rent->amount }}" data-mystatus = "{{ $rent->rent_status }}" data-mypay = "{{ $rent->payment_status }}"
                                    
                                     data-toggle="modal" data-target="#status"
                                    >Status</button>
                                </td>

                                
                                {{--
                                <td class="font-weight-bold">
                                <a class="btn btn-sm btn-flat btn-dark" href="/car_makes/{{$car->id}}">Show</a>
                                
                                  <button type="button" class="btn btn-sm btn-flat btn-info"
    
                                  data-mycmid = {{ $car->id }} data-mymake = {{ $car->make }} 
    
                                  data-toggle="modal" data-target="#car_make_edit">Edit</button>
                                  
                                  <button type="button" class="btn btn-sm btn-flat btn-danger"
                                  data-mycmid = {{ $car->id }} 
                    
                                  data-toggle="modal" data-target="#delete"
                                  >Delete</button>
                                </td>---}}
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


        <!-- Modal edit-->
        <div class="modal fade" id="status" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Confirm reservation</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form class="form-horizontal" method="POST" action="{{ route('rentals.update','test')}}">
                      {{method_field('patch')}}
                      @csrf
                    <div class="modal-body">
                    <input type="hidden" name="rent_id" id="rent_id" value="">
                      
                      @include('admins.dashboard.edit')
                    </div>
                   
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary btn-sm btn-flat" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary btn-sm btn-flat">Confirmed</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
    <script>
            $('#status').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) 
            var rent_id = button.data('myrid')
            var user_id = button.data('myuid')
            var car_model_id = button.data('mycid')
            var rent_date = button.data('myrt')
            var return_date = button.data('myrn')
            var total_days = button.data('mytd')
            var amount = button.data('myamount')
            var rent_status = button.data('mystatus') 
            var payment_status = button.data('mypay') 

            var modal = $(this)
            modal.find('.modal-body #rent_id').val(rent_id)
            modal.find('.modal-body #user_id').val(user_id)
            modal.find('.modal-body #car_model_id').val(car_model_id)
            modal.find('.modal-body #rent_date').val(rent_date)
            modal.find('.modal-body #return_date').val(return_date)
            modal.find('.modal-body #total_days').val(total_days)
            modal.find('.modal-body #amount').val(amount)
            modal.find('.modal-body #rent_status').val(rent_status)
            modal.find('.modal-body #payment_status').val(payment_status)
          })
            </script>

@endsection