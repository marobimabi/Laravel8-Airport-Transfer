<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data= Setting::first();
       return view('home.index',['data'=>$data]);
    }
    public function login(){
        return view('admin.login');
    }
}

