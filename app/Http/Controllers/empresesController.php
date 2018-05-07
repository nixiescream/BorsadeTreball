<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use Illuminate\Support\Facades\Hash;

class empresesController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

	public function index(Request $request){
        $id = $request->id;
		$empresa = Empresa::findOrFail($id);
		return view('dashboard.empresa')->with('empresa',$empresa);
	}

    public function linkEditarEmpresa(Request $request){
        $id = $request->id;
        $empresa = Empresa::findOrFail($id);
        return view('dashboard.editEmpresa')->with('empresa',$empresa);
    }

    public function editarEmpresa(Request $request){
        $request->validate([
			'nom' => 'required|max:30',
			'email' => 'required',
            'telf' => 'required|max:9',
            'addr' => 'required',
            'cif' => 'required|max:10',
			'password' => 'required'
		]);
        $id = $request->id;
        $nom = $request->nom;
        $email = $request->email;
        $telefon = $request->telf;
        $adresa = $request->addr;
        $cif = $request->cif;
        $password = $request->password;
        $password_confirmation = $request->password_confirmation;

        if($password == $password_confirmation){
            $empresa = Empresa::findOrFail($id);
            $empresa->empresa_nom = $nom;
            $empresa->empresa_email = $email;
            $empresa->empresa_telefon = $telefon;
            $empresa->empresa_addr = $adresa;
            $empresa->empresa_cif = $cif;
            $empresa->empresa_password = Hash::make($password);
            $empresa->save();
            return redirect('/empresa/'.$id)->with('empresa',$empresa);
        }
    }
}
