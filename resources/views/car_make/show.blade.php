@extends('layouts.admin_master')

@section('content')
<div class="mb-2">
<h4 class="float-left text-uppercase" >{{ $car_make->make }}</h4>  
  <button type="button" class="btn btn-sm btn-flat btn-success float-right" data-toggle="modal" data-target="#add_car">
      Add New
    </button>

</div>
<br>
        <div class="row el-element-overlay">
                @foreach ( $car_make->carmodels as $car)
            <div class="col-lg-3 col-md-6 mt-2">
                <div class="card">
                    <div class="el-card-item">
                            @php
                            $pic_url =  asset('./assets/images/users/noimage.jpg');
                            if($car->photo){
                                $pic_url =  "/public/cover_images/".$car->photo;
                           }
      
                        @endphp
                        <div class="el-card-avatar el-overlay-1"> <img src="{{ $pic_url }}" alt="user" />
                            <div class="el-overlay">
                                <ul class="list-style-none el-info">
                                <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{ $pic_url }}"><i class="mdi mdi-magnify"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="el-card-content">
                        <h4 class="mb-0">{{ $car->model }}</h4> <span class="text-muted">{{ $car->number_plate }}</span><br>
                            <button type="button" class="btn btn-sm btn-flat btn-info">Edit</button>
                             <button type="button" class="btn btn-sm btn-danger btn-flat"
                             data-mycmdid = {{ $car->id }} 
                
                             data-toggle="modal" data-target="#delete_car"
                             >Delete</button>
                        </div>
                      
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- add_car -->
<div class="modal fade" id="add_car" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add New Car</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('model.store')}}">
            <div class="modal-body">
              @csrf
              @include('car_make.add_car')
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary btn-sm btn-flat" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary btn-sm btn-flat">Add Car</button>
            </div>
            </form>
          </div>
        </div>
      </div>

 <!-- Modal delete-->
 <div class="modal fade" id="delete_car" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">Delete Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="form-horizontal" method="POST" action="{{ route('model.destroy','test')}}">
        {{method_field('delete')}}
        @csrf
      <div class="modal-body mt-0 mb-0">
        <p class="text-center">
          Are you sure you want to delete this car model?
        </p>
        <input type="hidden" name="car_model_id" id="car_model_id" value="">
      
      </div>
     
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-sm btn-flat" data-dismiss="modal">No, Cancel</button>
        <button type="submit" class="btn btn-danger btn-sm btn-flat">Yes, Delete</button>
      </div>
    </form>
    </div>
  </div>
</div>



<script>
  $('#delete_car').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) 
  var car_model_id = button.data('mycmdid')

  var modal = $(this)

  modal.find('.modal-body #car_model_id').val(car_model_id)
})
  </script>
@endsection