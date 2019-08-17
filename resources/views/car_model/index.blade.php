@extends('layouts.admin_master')

@section('content')
 
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                    <div>
                            <h4 class="card-title">Car Models Table<button type="button" class="btn btn-flat btn-sm btn-success float-right"  data-toggle="modal" data-target="#add_car_model">Create New</button></h4>
                        </div>
                <div class="d-md-flex align-items-center">
                   
                </div>
                <div class="table-responsive">
                    <table class="table no-wrap v-middle">
                        <thead>
                            <tr class="border-0">
                                <th class="border-0">Car Model</th>
                                <th class="border-0">Number Plate</th>
                                <th class="border-0">Photo</th>
                                <th class="border-0">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex no-block align-items-center">
                                        <div class="mr-2"><img src="../../assets/images/users/d1.jpg" alt="user" class="rounded-circle" width="45" /></div>
                                        <div class="">
                                            <h5 class="mb-0 font-16 font-medium">Hanna Gover</h5><span>hgover@gmail.com</span></div>
                                    </div>
                                </td>
                                <td>Elite Admin</td>
                                <td>
                                    <div class="popover-icon">
                                        <a class="btn-circle btn btn-info" href="javascript:void(0)">SS</a>
                                        <a class="btn-circle btn btn-cyan text-white popover-item" href="javascript:void(0)">DS</a>
                                        <a class="btn-circle btn p-0 popover-item" href="javascript:void(0)"><img src="../../assets/images/users/1.jpg" class="rounded-circle" width="39" alt="" /></a>
                                        <a class="btn-circle btn btn-outline-secondary" href="javascript:void(0)">+</a>
                                    </div>
                                </td>
                                <td><i class="fa fa-circle text-orange" data-toggle="tooltip" data-placement="top" title="In Progress"></i></td>
                                <td>35</td>
                                <td class="blue-grey-text  text-darken-4 font-medium">$96K</td>
                            </tr>
                        </tbody>
                    </table>
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
            <form  method="POST" action="{{ route('car_models.store')}}">
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