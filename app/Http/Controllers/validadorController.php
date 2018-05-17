<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Validador;
use App\Alumne;
use App\User;

class validadorController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request){
        $id = $request->id;
        $validador = Validador::findOrFail($id);
		return view('validador.validador')->with('validador',$validador);
    }

    public function linkEditarValidador(Request $request){
        $id = $request->id;
        $validador = Validador::findOrFail($id);
        return view('validador.editValidador')->with('validador',$validador);
    }

    public function editarValidador(Request $request){
        $request->validate([
			'email' => 'required',
			'password' => 'required'
		]);
        $id = $request->id;
        $email = $request->email;
        $password = $request->password;
        $password_confirmation = $request->password_confirmation;

        if($password == $password_confirmation){
            $validador = Validador::findOrFail($id);
            $validador->validador_email = $email;
            $validador->validador_password = Hash::make($password);
            $validador->save();

            $user = User::findOrFail($id);
            $user->email = $email;
            $user->password = Hash::make($password);
            $user->save();
            return redirect('/validador/'.$id)->with('validador',$validador);
        }
    }

    public function linkValidarAlumnes(Request $request){
        $id = $request->id;
        $validador = Validador::findOrFail($id);
        $alumnes = Alumne::where('alumne_validat', 0)->get();
        return view('validador.validarAlumnes')->with('validador',$validador)->with('alumnes',$alumnes);
    }

    public function validarAlumnes(Request $request){
        $alumnes = $request->alumnes;
        foreach ($alumnes as $alumne){
            $alumneR = Alumne::findOrFail($alumne);
            $alumneR->alumne_validat = 1;
            $alumneR->save();

            $user = User::findOrFail($alumne);
            $user->validat = 1;
            $user->save();
        }
        $id = $request->id;
        $validador = Validador::findOrFail($id);
        return redirect('/validador/'.$id)->with('validador',$validador);
    }
}
