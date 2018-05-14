<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Validador;

class validadorController extends Controller{
    public function index(Request $request){
        $id = $request->id;
        $validador = Validador::findOrFail($id);
		return view('dashboard.validador')->with('validador',$validador);
    }
}
