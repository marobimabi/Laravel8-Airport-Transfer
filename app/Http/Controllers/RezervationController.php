<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Rezervation;
use App\Models\Setting;
use App\Models\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RezervationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataList = Rezervation::where('user_id',Auth::id())->paginate(6);


        return view('home.user_rezervation', ['dataList' => $dataList]);
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
    public function store(Request $request,$id)
    {
        //
        $data = new Rezervation;
        $data->user_id=Auth::id();
        $data->transfer_id = $id;
        $data->from_location_id=$request->input('from_location_id');
        $data->to_location_id =$request->input('to_location_id');
        $data->flightdate=$request->input('flightdate');
        $data->flightime=$request->input('flightime');
        $data->airline=$request->input('airline');
        $data->flightnumber=$request->input('flightnumber');
        $data->pickuptime=$request->input('pickuptime');
        $data->note=$request->input('note');
        $data->IP=$_SERVER['REMOTE_ADDR'];

        $data->price=0;
        $data->save();
        return  redirect()->route('user_rezervation_show',['from_loc'=> $data->from_location_id, 'to_loc'=>$data->to_location_id,'id'=>$data->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
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
        $setting= Setting::first();
        $data = Rezervation::find($id);
        $data->price = round($result);
        $data->save();

        return view('home.rezervation_controle', ['data'=>$data,'setting'=>$setting,'result' => $data->price]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Rezervation::find($id);
        $dataList = Location::all();
        $dataList_transfer = Transfer::all();
//        dd($dataList);
//        exit();
        return view('home.user_rezervation_edit',['data'=>$data,'dataList' => $dataList, 'dataList_transfer'=>$dataList_transfer]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = Rezervation::find($id);
        $data->price = $request->input('price');

        $data->save();
        return redirect(route('homepage'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
