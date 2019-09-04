@extends('layouts.admin_master')


@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                    <div>
                            <h4 class="card-title">Car Makes Table<button type="button" class="btn btn-flat btn-sm btn-success float-right"  data-toggle="modal" data-target="#add_car_make">Create New</button></h4>
                        </div>
                <div class="d-md-flex align-items-center">
                  
                </div>
                <div class="table-responsive">
                    <table class="table no-wrap v-middle">
                        <thead>
                            <tr class="border-0">
                                <th class="border-0 text-uppercase font-weight-bold">No.</th>
                                <th class="border-0 text-uppercase font-weight-bold">Car Make Name</th>
                                <th class="border-0 text-uppercase font-weight-bold">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($carMake as $car)
                            <tr>
                            <td class="font-weight-bold">{{++$i}}</td>
                            <td class="font-weight-bold">{{$car->make}}</td>
                            <td class="font-weight-bold">
                            <a class="btn btn-sm btn-flat btn-dark" href="/car_makes/{{$car->id}}">Show</a>

                              <button type="button" class="btn btn-sm btn-flat btn-info"

                              data-mycmid = {{ $car->id }} data-mymake = {{ $car->make }} 

                              data-toggle="modal" data-target="#car_make_edit">Edit</button>
                              
                              <button type="button" class="btn btn-sm btn-flat btn-danger"
                              data-mycmid = {{ $car->id }} 
                
                              data-toggle="modal" data-target="#delete"
                              >Delete</button>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$carMake->links()}}
                </div>
            </div>
        </div>
    </div>
</div> 

<!-- Modal -->
<div class="modal fade" id="add_car_make" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Car</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="form-horizontal" method="POST" action="{{ route('car_makes.store')}}">
        <div class="modal-body">
          @csrf
          @include('car_make.create')
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm btn-flat" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary btn-sm btn-flat">Add Car</button>
        </div>
        </form>
      </div>
    </div>
  </div>


        <!-- Modal edit-->
<div class="modal fade" id="car_make_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Car Make</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="form-horizontal" method="POST" action="{{ route('car_makes.update','test')}}">
        {{method_field('patch')}}
        @csrf
      <div class="modal-body">
      <input type="hidden" name="car_make_id" id="car_make_id" value="">
        
        @include('car_make.edit')
      </div>
     
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm btn-flat" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-sm btn-flat">Save Changes</button>
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
          <h5 class="modal-title text-center" id="exampleModalLabel">Delete Confirmation</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="form-horizontal" method="POST" action="{{ route('car_makes.destroy','test')}}">
          {{method_field('delete')}}
          @csrf
        <div class="modal-body mt-0 mb-0">
          <p class="text-center">
            Are you sure you want to delete this car make?
          </p>
          <input type="hidden" name="car_make_id" id="car_make_id" value="">
        
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
  $('#car_make_edit').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) 
  var car_make_id = button.data('mycmid')
  var make = button.data('mymake') 
 
  var modal = $(this)
  modal.find('.modal-body #car_make_id').val(car_make_id)
  modal.find('.modal-body #make').val(make)
})
  </script>

<script>
  $('#delete').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) 
  var car_make_id = button.data('mycmid')

  var modal = $(this)

  modal.find('.modal-body #car_make_id').val(car_make_id)
})
  </script>
@endsection
