<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CarModel;

class ModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $carModel = new CarModel();
        $carModel->car_make_id = $request->input('car_make_id');
        $carModel->model = $request->input('model');
        $carModel->number_plate = $request->input('number_plate');
        $carModel->price = $request->input('price');
        $car_make_id = $carModel->car_make_id;
     if ($request->hasFile('photo')) {
         $file = $request->file('photo');
         $extension = $file->getClientOriginalExtension();
         $filename = time().'.'.$extension;
         $file->move('public/cover_images', $filename);
         $carModel->photo = $filename; 
     }else {
         return $request;
         $carModel->photo = '';
     }
     $carModel->descriptions = $request->input('descriptions');
     $carModel->save();
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
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        $carmodel = CarModel::findOrFail($request->car_model_id);

        $carmodel->car_make_id = $request->input('car_make_id');
        $carmodel->model = $request->input('model');
        $carmodel->number_plate = $request->input('number_plate');
        $carmodel->price = $request->input('price');
        $car_make_id = $carmodel->car_make_id;

     if ($request->hasFile('photo')) {
         $file = $request->file('photo');
         $extension = $file->getClientOriginalExtension();
         $filename = time().'.'.$extension;
         $file->move('public/cover_images', $filename);
         $carmodel->photo = $filename; 
     }else {
         return $request;
         $carmodel->photo = '';
     }
     $carmodel->descriptions = $request->input('descriptions');
     $carmodel->update();
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
        $carmodel = CarModel::findOrFail($request->car_model_id);
        $carmodel->delete();
        return back();
    }
}
