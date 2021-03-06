<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Location;
use App\Models\Review;
use App\Models\Rezervation;
use App\Models\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RezervationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataList = Rezervation::all();
        //echo var_dump($dataList);
        $data_location = Location::all();
        return view('admin.rezervation', ['dataList' => $dataList,'data_location'=>$data_location]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $dataList = Location::all();
        $data = Transfer::all();

        return view('admin.rezervation_add', ['dataList' => $dataList,'data'=>$data,'result'=>0]);
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $data = new Rezervation;
        $data->user_id=Auth::id();
        $data->transfer_id = $request->input('transfer_id');
        $data->from_location_id=$request->input('from_location_id');
        $data->to_location_id =$request->input('to_location_id');
        $data->flightdate=$request->input('flightdate');
        $data->flightime=$request->input('flightime');
        $data->airline=$request->input('airline');
        $data->flightnumber=$request->input('flightnumber');
        $data->pickuptime=$request->input('pickuptime');
        $data->note=$request->input('note');
        $data->IP=$_SERVER['REMOTE_ADDR'];

        $data->price=$request->input('price');
        $data->save();
        return  redirect()->route('admin_rezervation_show',['from_loc'=> $data->from_location_id, 'to_loc'=>$data->to_location_id,'id'=>$data->id]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rezervation  $rezervation
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $from_loc,$to_loc, $id)
    {
        //

        $from_loc_tb = Location::find($from_loc);
        $to_loc_tb = Location::find($to_loc);

        $lat1 =  $from_loc_tb->lat;

        $lon1 = $from_loc_tb->long;

        $lat2= $to_loc_tb->lat;

        $lon2 = $to_loc_tb->long;

//
//        $p = 0.017453292519943295;    // Math.PI / 180
//
//        $a = 0.5 - cos(($lat2 - $lat1) * $p)/2 +
//            cos($lat1 * $p) * cos($lat2 * $p) * (1 - cos(($lon2 - $lon1) * $p))/2;
//
//        $result = 12742 * asin(sqrt($a)); // 2 * R; R = 6371 km
        $delta_lat = $lat2 - $lat1 ;
        $delta_lon = $lon2 - $lon1 ;

        $earth_radius = 6372.795477598;

        $alpha    = $delta_lat/2;
        $beta     = $delta_lon/2;
        $a        = sin(deg2rad($alpha)) * sin(deg2rad($alpha)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * sin(deg2rad($beta)) * sin(deg2rad($beta)) ;
        $c        = asin(min(1, sqrt($a)));
        $result = 2*$earth_radius * $c;
        //price adding


        $dataList_transfer = Transfer::all();
        $dataList = Location::all();
        $data = Rezervation::find($id);
        $data->price = round($result);
        $data->save();

        return view('admin.rezervation_confirm', ['dataList'=>$dataList,'data'=>$dataList_transfer, 'result' => $data->price]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rezervation  $rezervation
     * @return \Illuminate\Http\Response
     */
    public function edit(Rezervation $rezervation, $id)
    {
        //
        $data = Rezervation::find($id);
        $dataList = Location::all();
        $dataList_transfer = Transfer::all();
//        dd($dataList);
//        exit();
        return view('admin.rezervation_edit',['data'=>$data,'dataList' => $dataList, 'dataList_transfer'=>$dataList_transfer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rezervation  $rezervation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rezervation $rezervation,$id)
    {
        $data = Rezervation::find($id);
        //$dataList = Location::all();
        $data->user_id=Auth::id();
        $data->transfer_id =$request->input('transfer_id');
        $data->from_location_id=$request->input('from_location_id');
        $data->to_location_id=$request->input('to_location_id');
        $data->flightdate=$request->input('flightdate');
        $data->flightime=$request->input('flightime');
        $data->airline=$request->input('airline');
        $data->flightnumber=$request->input('flightnumber');
        $data->pickuptime=$request->input('pickuptime');
        $data->IP=$_SERVER['REMOTE_ADDR'];
        $data->status = $request->input('status');
        $data->price = $request->input('price');
        $data->save();
        return  redirect()->route('admin_rezervation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rezervation  $rezervation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rezervation $rezervation, Request $request)
    {
        //
    }
}
