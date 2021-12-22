<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public static function categoryList(){
        return Category::where('parent_id','=',0)->with('children')->get();
    }
    public static function getsetting(){
        return Setting::first();
    }
    public function index(){
        $setting= Setting::first();
       return view('home.index',['setting'=>$setting]);
    }
    public function aboutus(){
        return view('home.login');

    }
    public function contact(){
        return view('admin.login');

    }
    public function fag(){
        return view('admin.login');

    }
    public function references(){
        return view('admin.login');

    }
    public function service(){
        return view('admin.login');

    }


    public function logincheck(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }
        echo "non validated";
        /*back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);*/
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }

}

