<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Faq;
use App\Models\Image;
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
    public static function getimages(){

        return  Transfer::select('id','images')->limit(6)->inRandomOrder()->get();
    }
    public function index(){
        $setting= Setting::first();
        $slider = Transfer::select('id','title','description','images','base_price','slug')->limit(3 )->get();
        $daily = Transfer::select('id','title','images','base_price','km_price','capacity','slug')->limit(6 )->inRandomOrder()->get();
        $last = Transfer::select('id','title','images','base_price','slug')->limit( 3)->orderBy('id', 'desc')->get();
        $picked= Transfer::select('id','title','images','base_price','slug')->limit(3 )->inRandomOrder()->get();

        $home ='home';
        $data= [
            'setting'=>$setting,
            'slider'=>$slider,
            'daily'=>$daily,
            'last'=>$last,
            'picked'=>$picked,
            'page'=>$home,

               ];
       return view('home.index',$data);
    }
    public function transfer($id,$slug){
        $setting= Setting::first();
        $data= Transfer::find($id);
        $dataList = Transfer::where('category_id',$id)->get();
        //$reviews = Review::where('content_id', $id)->get();
        $related = Transfer::select('id', 'title', 'images', 'description', 'slug', 'created_at')->limit(6)->get();
        return view('home.product_detail', ['data' => $data,'datalist' => $dataList, 'related'=>$related,'setting'=>$setting]);

    }
    public function makeresearch(Request $request)
    {
       $data = Transfer::where('title',$request->input('search'))->first();
       return redirect()->route('transfer',['id'=>$data->id,'slug'=>$data->slug]); 
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
    public function faq(){
        $dataList = Faq::all()->sortBy('position');
        return view('home.faq',['dataList'=>$dataList]);
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

