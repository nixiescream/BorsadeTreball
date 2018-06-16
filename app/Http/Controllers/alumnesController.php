<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumne;
use App\User;
use App\Oferta;
use App\Estudis;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class alumnesController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

	public function index(Request $request){
        $id = $request->id;
        $alumne = Alumne::findOrFail($id);
        $estudis = Estudis::all();
		return view('alumne.alumne')->with('alumne',$alumne)->with('estudis',$estudis);
    }

    public function linkEditarAlumne(Request $request){
        $id = $request->id;
        $alumne = Alumne::findOrFail($id);
        $estudis = Estudis::all();
        return view('alumne.editAlumne')->with('alumne',$alumne)->with('estudis',$estudis);
    }

    public function editarAlumne(Request $request){
        $request->validate([
			'nom' => 'required|max:30',
            'cognom1' => 'required|max:80',
            'cognom2' => 'required|max:80',
			'email' => 'required',
            'dni' => 'required|max:10',
            /*'familiaE' => 'required',*/
            'telf' => 'required|max:9',
            'biografia' => 'required',
			'estudis' => 'required',
            'carnet' => 'required',
            'disponibilitat' => 'required',
			'password' => 'required'
		]);
        $id = $request->id;
        $nom = $request->nom;
        $cognom1 = $request->cognom1;
        $cognom2 = $request->cognom2;
        $email = $request->email;
        $dni = $request->dni;
        /*$familiaE = $request->familiaE;*/
        $telf = $request->telf;
        $bio = $request->biografia;
        $estudis = $request->estudis;
        $carnet = $request->carnet;
        $disponibilitat = $request->disponibilitat;
        $password = $request->password;
        $password_confirmation = $request->password_confirmation;

        if($password == $password_confirmation){
            $alumne = Alumne::findOrFail($id);
            $alumne->alumne_nom = $nom;
            $alumne->alumne_cognom1 = $cognom1;
            $alumne->alumne_cognom2 = $cognom2;
            $alumne->alumne_email = $email;
            $alumne->alumne_dni = $dni;
            /*$alumne->familiaE = $familiaE;*/
            $alumne->alumne_telefon = $telf;
            $alumne->alumne_bio = $bio;
            $alumne->estudis_sigles = $estudis;
            $alumne->alumne_carnet = $carnet;
            $alumne->alumne_tempsTotal = $disponibilitat;
            $alumne->alumne_password = Hash::make($password);
            $alumne->alumne_validat = 0;
            $alumne->save();
            $user = User::findOrFail($id);
            $user->name = $nom;
            $user->email = $email;
            $user->password = Hash::make($password);
            $user->validat = 0;
            $user->save();
            return redirect('/alumne/'.$id)->with('alumne',$alumne);
        }
    }

    public function llistarOfertes(Request $request){
        $id = $request->id;
        $idO = $request->get('idO');
		$alumne = Alumne::findOrFail($id);
        $ofertes = Oferta::whereIn('estudis_sigles', $alumne)->where('validada',1)->get();
        /*->select(DB::raw("not exists(select alumne_user_id, oferta_id from alumne_oferta as ao where ao.alumne_user_id = ".$id." AND ao.oferta_id = ".$idO.")"))*/->get();
        $estudis = Estudis::all();
		return view('alumne.llistarOfertaAlumne')->with('alumne',$alumne)->with('ofertes',$ofertes)->with('estudis',$estudis);
    }

    public function aplicarOferta(Request $request){
        $request->validate(['idA' => 'required',]);
		$alumne = Alumne::findOrFail($request->idA);
        $id = $request->idA;
		$alumne->ofertes()->attach($request->idO);
        return redirect('/alumne/'.$id)->with('alumne',$alumne);
    }

    public function llistarOfertesAplicades(Request $request){
        $id = $request->id;
		$alumne = Alumne::findOrFail($id);
        $ofertes = $alumne->ofertes()->get();
        $estudis = Estudis::all();
		return view('alumne.llistarOfertesAplicades')->with('alumne',$alumne)->with('ofertes',$ofertes)->with('estudis',$estudis);
    }

    public function eliminarOfertaInscrita(Request $request){
        $id = $request->idA;
        $alumne = Alumne::findOrFail($id);
        $alumne->ofertes()->detach($request->idO);
        return redirect('/alumne/'.$id)->with('alumne',$alumne);
    }
}
