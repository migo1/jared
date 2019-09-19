@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">If you've just registered please login agian and check email for your OTP </div>

                @if($errors->count() > 0)

                <div class="alert alert-danger">
                    @foreach ( $errors->all() as $error )
                        {{ $error }}
                    @endforeach
    
                </div>

                @endif

                <div class="card-body">
                  <form action="verifyOTP" method="POST">
                      @csrf
                      <div class="form-group">

                    <label for="otp">Your OTP</label>
                    <input type="text" name="OTP" id="otp" class="form-control" required>
                </div>

                    <input type="submit" value="verify" class="btn btn-primary btn-sm btn-flat"> 
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection