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
                        <span class="">Total =</span><h3 class="font-medium mb-0">56.33%</h3></div>
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
                <h4 class="card-title">Rented Cars</h4>
                <div class="d-flex no-block align-items-center mt-4">
                    <div class="">
                        <span class="">Total =</span><h3 class="font-medium mb-0">56.33%</h3></div>
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
                        <span class="">Total =</span><h3 class="font-medium mb-0">56.33%</h3></div>
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
@endsection