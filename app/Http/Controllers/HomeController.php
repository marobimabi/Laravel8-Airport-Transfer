<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
use App\Models\Setting;
use App\Models\Transfer;
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
        $slider = Transfer::select('id','title','images','base_price','slug')->limit(4 )->get();

        $home ='home';
        $data= [
            'setting'=>$setting,
            'slider'=>$slider,
            'page'=>$home
               ];
       return view('home.index',$data);
    }
    public function transfer($id,$slug){
        $data= Transfer::find($id);
        print_r($data);
        exit();
    }
    public function categoryproducts($id,$slug){
        $dataList= Transfer::where('category_id',$id)->get();
        $data= Category::find($id);

        return view('home.category_products',['data'=>$data,'dataList'=>$dataList]);

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
    public function sendmessage(Request $request){
        $data = new Message();
        $data->name=$request->input('name');
        $data->email =$request->input('email');
        $data->subject=$request->input('subject');
        $data->message=$request->input('message');
        $data->save();
        return redirect()->route('contact')->with('success', 'Thank you for your message!');
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

