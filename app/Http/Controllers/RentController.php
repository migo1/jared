<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rent;
use App\CarModel;
use DB;

class RentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rent = new Rent;

        $rent->user_id = auth()->user()->id;
        $rent->car_model_id = $request->input('car_model_id');
        $rent->rent_date = $request->input('rent_date');
        $rent->return_date = $request->input('return_date');
        $borrow = strtotime($rent->rent_date);
        $return = strtotime($rent->return_date);
        $diff = $return - $borrow;
        if ($diff > 0) {
            $rent->total_days = floor($diff / (60*60*24));
        } else {
            $rent->total_days = 0;
        }

       $days =  $rent->total_days;

        $price =  $rent->carmodels->price;
         
        $rent->amount = $price*$days;
        $rent->payment_status = $request->input('payment_status');
        $rent->returned_day = $request->input('returned_day');
        $rent->return_status = $request->input('return_status');

                $rent->save();
                return back();
  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $rent = Rent::findOrFail($request->rent_id);
        $rent->user_id = auth()->user()->id;
        $rent->car_model_id = $request->input('car_model_id');
        $rent->rent_date = $request->input('rent_date');
        $rent->return_date = $request->input('return_date');
        $borrow = strtotime($rent->rent_date);
        $return = strtotime($rent->return_date);
        $diff = $return - $borrow;
        if ($diff > 0) {
            $rent->total_days = floor($diff / (60*60*24));
        } else {
            $rent->total_days = 0;
        }

       $days =  $rent->total_days;

        $price =  $rent->carmodels->price;

        $rent->amount = $price*$days;
        $rent->payment_status = $request->input('payment_status');
        $rent->returned_day = $request->input('returned_day');
        $rent->return_status = $request->input('return_status');

        $rent->update();
        return back();
   


       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $rent = Rent::findOrFail($request->rent_id);
        $rent->delete();
        return back();
    }
}
