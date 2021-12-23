<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $setting= Setting::first();
        return view('home.about',['setting'=>$setting]);
    }
    public function contact(){
        $setting= Setting::first();
        return view('home.contact',['setting'=>$setting]);
    }
    public function fag(){
        return view('admin.login');

    }
    public function references(){
        $setting= Setting::first();
        return view('home.references',['setting'=>$setting]);

    }
    public function service(){
        $setting= Setting::first();
        return view('home.service',['setting'=>$setting]);
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

        return redirect('/');
    }

}

