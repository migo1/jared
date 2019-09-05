<?php

namespace App;


use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Cache;
use App\Mail\OTPMail;
use Mail;

class User extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'isVerified'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function OTP() 
    {
        return Cache::get($this->OTPkey());
    }
    public function OTPkey()
    {
        return "OTP_for_{$this->id}";
    }
    public function cacheTheOTP() 
    {
        $OTP = rand(100000, 999999);
        Cache::put([$this->OTPkey() =>$OTP], now()->addMinutes(10));
        return $OTP;
    }
    public function sendOTP()
    {
        $this->cacheTheOTP();
        
        if (auth()->user()->isVerified == 0) {
            Mail::to(auth()->user()->email)->send(new OTPMail($this->cacheTheOTP()));
        }
    }
}
