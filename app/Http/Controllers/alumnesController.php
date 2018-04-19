<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumne;

class alumnesController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

	public function index(Request $request){
        $id = $request->id;
		$alumne = Alumne::findOrFail($id);
		return view('dashboard.alumne')->with('alumne',$alumne);
    }

    public function linkEditarAlumne(Request $request){
        $id = $request->id;
        $alumne = Alumne::findOrFail($id);
        return redirect('dashboard.editAlumne')->with('alumne',$alumne);
    }
}
