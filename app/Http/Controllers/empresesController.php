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
        return redirect('dashboard.editEmpresa')->with('empresa',$empresa);
    }

    public function editarEmpresa(Request $request){
        $request->validate([
			'nom' => 'required|max:30',
			'email' => 'required',
            'telf' => 'required',
            'addr' => 'required',
            'cif' => 'required',
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
            $empresa->empresa_telf = $telefon;
            $empresa->empresa_addr = $adresa;
            $empresa->empresa_cif = $cif;
            /*$alumne->familiaE = $familiaE;
            $alumne->estudis = $estudis;*/
            $empresa->empresa_password = Hash::make($password);
            $empresa->save();
            return redirect('/empresa/'.$id)->with('empresa',$empresa);
        }
}
