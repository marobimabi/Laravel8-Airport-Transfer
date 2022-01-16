<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$dataList = DB::table('locations')->get();
        $dataList = Location::all();
        //echo var_dump($dataList);
        return view('admin.location', ['dataList' => $dataList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $dataList = Category::with('children')->get();
        //return view('admin.location_add', ['dataList' => $dataList]);
        return view('admin.location_add');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Location;
        $data->type=$request->input('type');
        $data->name =$request->input('name');
        $data->lat=$request->input('lat');
        $data->long=$request->input('long');
        $data->status = $request->input('status');
        $data->save();
        return  redirect()->route('admin_location');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location, $id)
    {
        $data = Location::find($id);

        return view('admin.location_edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location, $id)

    {
        $data = Location ::find($id);
        $data->type=$request->input('type');
        $data->name =$request->input('name');
        $data->lat=$request->input('lat');
        $data->long=$request->input('long');
        $data->status = $request->input('status');
        $data->save();
        return  redirect()->route('admin_location');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location, $id)
    {
        //  DB::table('categories')->where('id', '=', $id)->delete();
        $data =Location::find($id);
        $data->delete();
        return redirect()->route('admin_location');
    }
}
