<?php
namespace App\Http\Controllers;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Http\Requests\OTPRequest;
class verifyOTPController extends Controller
{
    public function verify(OTPRequest $request)
    {
        if (request('OTP') == auth()->user()->OTP()) {
            auth()->user()->update(['isVerified' => 1]);
            return redirect('/home');
        }
        return back()->withErrors('OTP is expired or invalid');
    }
    public function showVerifyForm()
    {
        return view('OTP.verify');
    }
}