<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Alumne;
use App\Empresa;

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
        if(!Auth::check()){
            return view('site.home');
        }else{
            $user=Auth::user();

            if($user->rol == "alumne"){
                return redirect('/alumne');
            } else if($user->rol == "empresa"){
        		return redirect('/empresa');
            }
        }
    }
}
