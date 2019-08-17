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
                              <button type="button" class="btn btn-sm btn-flat btn-info">Edit</button>
                              <button type="button" class="btn btn-sm btn-flat btn-danger">Delete</button>
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
{{--
<script>
$('#exampleModal').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget) 
  var recipient = button.data('whatever') 
 
  var modal = $(this)

  modal.find('.modal-body input').val(recipient)

})
</script>--}}
@endsection
