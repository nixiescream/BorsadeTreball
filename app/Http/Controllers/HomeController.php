<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //return view('home');
        if(!Auth::check()){
            return view('site.home');
        }else{
            $user=Auth::user();
            if($user->rol == "alumne") return view ('dashboard.alumne')->with('alumne',$user);
            else if($user->rol == "empresa") return view ('dashboard.empresa')->with('empresa',$user);
        }
    }
}
