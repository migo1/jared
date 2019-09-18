<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CarMake;

class CarMakeController extends Controller
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
        $carMake = CarMake::orderBy('created_at','desc')->paginate(5);

        return view('car_make.index', compact('carMake'))->with('i', (request()->input('page', 1) - 1) * 5);
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

        $this->validate($request, [
            'make' => 'required',
        ]);

        $carMake = new CarMake;

        $carMake->make = $request->input('make');
        $carMake->save();
        return back()->with('success','car make added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car_make = CarMake::find($id);

                
        return view('car_make.show',compact('car_make'));
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
        $carmake= CarMake::findOrFail($request->car_make_id);

        $carmake->make = $request->input('make');
        $carmake->update();

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
        $carmake = CarMake::findOrFail($request->car_make_id);
        $carmake->delete();
        return back();
    }
}
