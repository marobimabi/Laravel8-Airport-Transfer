<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataList = Transfer::all();

        return view('admin.transfer', ['dataList' => $dataList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataList = Transfer::all();
        return view('admin.transfer_add', ['dataList' => $dataList]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Transfer();
        $data->title=$request->input('title');
        $data->keywords =$request->input('keywords');
        $data->description=$request->input('description');
        $data->capacity=$request->input('capacity');
        $data->base_price=$request->input('base_price');
        $data->km_price=$request->input('km_price');
        $data->category_id=$request->input('category_id');
        $data->user_id=Auth::id();
        $data->capacity=$request->input('capacity');
        $data->quantity=$request->input('quantity');
        $data->tax=$request->input('tax');
        $data->detail=$request->input('detail');
        $data->slug= $request->input('slug');
        $data->status = $request->input('status');
        $data->save();
        return  redirect()->route('admin_transfer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function show(Transfer $transfer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function edit(Transfer $transfer, $id)
    {
        $data = Transfer::find($id);
        $dataList = Category::all();

        return view('admin.transfer_edit',['data'=>$data,'dataList' => $dataList]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transfer $transfer, $id)

    {
        $data = Transfer ::find($id);
        $data->title=$request->input('title');
        $data->keywords =$request->input('keywords');
        $data->description=$request->input('description');
        $data->capacity=$request->input('capacity');
        $data->base_price=$request->input('base_price');
        $data->km_price=$request->input('km_price');
        $data->category_id=$request->input('category_id');
        $data->user_id=Auth::id();
        $data->capacity=$request->input('capacity');
        $data->quantity=$request->input('quantity');
        $data->tax=$request->input('tax');
        $data->detail=$request->input('detail');
        $data->slug= $request->input('slug');
        $data->status = $request->input('status');
        $data->save();
        return  redirect()->route('admin_transfer');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transfer $transfer, $id)
    {
      //  DB::table('categories')->where('id', '=', $id)->delete();
        $data =Transfer::find($id);
        $data->delete();
        return redirect()->route('admin_transfer');
    }
}
