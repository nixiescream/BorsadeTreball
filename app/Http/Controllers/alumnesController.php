<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumne;
use Illuminate\Support\Facades\Hash;

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
        return view('dashboard.editAlumne')->with('alumne',$alumne);
    }

    public function editarAlumne(Request $request){
        $request->validate([
			'nom' => 'required|max:30',
            'cognom1' => 'required|max:80',
            'cognom2' => 'required|max:80',
			'email' => 'required',
            'dni' => 'required',
            /*'familiaE' => 'required',
			'estudis' => 'required',*/
			'password' => 'required'
		]);
        $id = $request->id;
        $nom = $request->nom;
        $cognom1 = $request->cognom1;
        $cognom2 = $request->cognom2;
        $email = $request->email;
        $dni = $request->dni;
        /*$familiaE = $request->familiaE;
        $estudis = $request->estudis;*/
        $password = $request->password;
        $password_confirmation = $request->password_confirmation;

        if($password == $password_confirmation){
            $alumne = Alumne::findOrFail($id);
            $alumne->alumne_nom = $nom;
            $alumne->alumne_cognom1 = $cognom1;
            $alumne->alumne_cognom2 = $cognom2;
            $alumne->alumne_email = $email;
            $alumne->alumne_dni = $dni;
            /*$alumne->familiaE = $familiaE;
            $alumne->estudis = $estudis;*/
            $alumne->alumne_password = Hash::make($password);
            $alumne->save();
            return redirect('/alumne/'.$id)->with('alumne',$alumne);
        }
    }
}
