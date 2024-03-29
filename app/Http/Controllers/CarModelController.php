<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CarModel;
use App\CarMake;

class CarModelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carMake = CarMake::all();
        //$carModel = CarModel::orderBy('created_at','desc')->paginate(10);
        $carmodel = CarModel::orderBy('created_at','desc')->paginate(10);
       // dd($carmake->carmodels);
        return view('car_model.index', compact('carMake','carmodel'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$carMake = CarMake::all();

        //return view('car_model.create', compact('carMake'));
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
     
     
        // if($request->hasFile('photo')){
            // Get filename with the extension
         //   $filenameWithExt = $request->file('photo')->getClientOriginalName();
            // Get just filename
           // $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            //$extension = $request->file('photo')->getClientOriginalExtension();
            // Filename to store
           // $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
           // $path = $request->file('photo')->storeAs('public/cover_images', $fileNameToStore);
           // $carModel->photo = $fileNameToStore; 

        //} else {
        //    $fileNameToStore = '';
       // }

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
        $carModel = CarModel::findOrFail($request->car_model_id);

        $carModel->car_make_id = $request->input('car_make_id');
        $carModel->model = $request->input('model');
        $carModel->number_plate = $request->input('number_plate');
        $carModel->price = $request->input('price');

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
        $carModel->update();
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
