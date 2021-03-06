<?php

namespace App;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\Estudis;
use App\User;
use App\Oferta;
use App\Alumne;
use Illuminate\Support\Facades\Hash;

class empresesController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }

	public function index(Request $request){
        $id = $request->id;
		$empresa = Empresa::findOrFail($id);
        $ofertes = Oferta::whereIn('empresa_user_id', $empresa)->paginate(5,['*'], 'o1');
        $ofertesV = Oferta::whereIn('empresa_user_id', $empresa)->where('validada',1)->paginate(5,['*'], 'o2');
		return view('empresa.empresa')->with('empresa',$empresa)->with('ofertes',$ofertes)->with('ofertesV',$ofertesV);
	}

    public function linkEditarEmpresa(Request $request){
        $id = $request->id;
        $empresa = Empresa::findOrFail($id);
        return view('empresa.editEmpresa')->with('empresa',$empresa);
    }

    public function editarEmpresa(Request $request){
        $request->validate([
			'nom' => 'required|max:30',
			'email' => 'required',
            'telf' => 'required|max:9',
            'addr' => 'required',
			'password' => 'required'
		]);
        $id = $request->id;
        $nom = $request->nom;
        $email = $request->email;
        $telefon = $request->telf;
        $adresa = $request->addr;
        $password = $request->password;
        $password_confirmation = $request->password_confirmation;

        if($password == $password_confirmation){
            $empresa = Empresa::findOrFail($id);
            $empresa->empresa_nom = $nom;
            $empresa->empresa_email = $email;
            $empresa->empresa_telefon = $telefon;
            $empresa->empresa_addr = $adresa;
            $empresa->empresa_password = Hash::make($password);
            $empresa->empresa_validat = 0;
            $empresa->save();
            $user = User::findOrFail($id);
            $user->name = $nom;
            $user->email = $email;
            $user->password = Hash::make($password);
            $user->validat = 0;
            $user->save();
            return redirect('/empresa/'.$id)->with('empresa',$empresa);
        }
    }

    public function linkCrearOferta(Request $request){
        $id = $request->id;
        $empresa = Empresa::findOrFail($id);
        $estudis = Estudis::all();
        return view('empresa.crearOferta')->with('empresa',$empresa)->with('estudis',$estudis);
    }

    public function linkEditarOferta(Request $request){
        $idE = $request->idE;
        $idO = $request->idO;
        $empresa = Empresa::findOrFail($idE);
        $oferta = Oferta::findOrFail($idO);
        $estudis = Estudis::all();
        return view('empresa.editarOferta')->with('empresa',$empresa)->with('oferta',$oferta)->with('estudis',$estudis);
    }

    public function crearOferta(Request $request){
        $request->validate([
			'titol' => 'required|max:30',
			'descripcio' => 'required',
            'sou' => 'required',
            'horari' => 'required',
            'tipus' => 'required',
			'estudis_emprats' => 'required'
		]);
        $id = $request->id;
        $titol = $request->titol;
        $descripcio = $request->descripcio;
        $sou = $request->sou;
        $horari = $request->horari;
        $tipus = $request->tipus;
        $estudis_emprats = $request->estudis_emprats;

        $oferta = new Oferta;
        $oferta->titol = $titol;
        $oferta->descripcio = $descripcio;
        $oferta->sou = $sou;
        $oferta->horari = $horari;
        $oferta->tipus = $tipus;
        $oferta->estudis_sigles = $estudis_emprats;
        $oferta->empresa_user_id = $id;
        $oferta->save();

        $empresa = Empresa::findOrFail($id);
        return redirect('/empresa/'.$id)->with('empresa',$empresa);
    }

    public function editarOfertaEmpresa(Request $request){
        $request->validate([
			'titol' => 'required|max:30',
			'descripcio' => 'required',
            'sou' => 'required',
            'horari' => 'required',
            'tipus' => 'required',
			'estudis_emprats' => 'required'
        ]);
        $idE = $request->idE;
        $idO = $request->idO;
        $titol = $request->titol;
        $descripcio = $request->descripcio;
        $sou = $request->sou;
        $horari = $request->horari;
        $tipus = $request->tipus;
        $estudis_emprats = $request->estudis_emprats;

        $oferta = Oferta::findOrFail($idO);
        $oferta->titol = $titol;
        $oferta->descripcio = $descripcio;
        $oferta->sou = $sou;
        $oferta->horari = $horari;
        $oferta->tipus = $tipus;
        $oferta->estudis_sigles = $estudis_emprats;
        $oferta->empresa_user_id = $idE;
        $oferta->validada = 0;
        $oferta->save();

        $empresa = Empresa::findOrFail($idE);
        $ofertes = Oferta::whereIn('empresa_user_id', $empresa)->get();
        $estudis = Estudis::all();
        return redirect('/empresa/llistarOfertes/'.$idE)->with('empresa',$empresa)->with('ofertes',$ofertes);
    }


    public function llistarOfertes(Request $request){
        $id = $request->id;
		$empresa = Empresa::findOrFail($id);
        $ofertes = Oferta::whereIn('empresa_user_id', $empresa)->get();
        $estudis = Estudis::all();
		return view('empresa.llistarOfertaEmpresa')->with('empresa',$empresa)->with('ofertes',$ofertes)->with('estudis',$estudis);
    }

    public function esborrarOferta(Request $request){
        $idE = $request->idE;
        $idO = $request->idO;
		$oferta = Oferta::findOrFail($idO);
		$oferta->delete();
        $empresa = Empresa::findOrFail($idE);
        $ofertes = Oferta::whereIn('empresa_user_id', $empresa)->get();
        $estudis = Estudis::all();
		return redirect('/empresa/llistarOfertes/'.$idE)->with('empresa',$empresa)->with('ofertes',$ofertes);
	}

    public function getCandidats(Request $request){
        $idE = $request->idE;
        $idO = $request->idO;
        $empresa = Empresa::findOrFail($idE);
        $oferta = Oferta::findOrFail($idO);
        $alumnes = $oferta->alumnes()->get();
        $estudis = Estudis::all();
        return view('empresa.candidats')->with('empresa',$empresa)->with('oferta',$oferta)->with('estudis',$estudis)->with('alumnes',$alumnes);
    }

    public function getAlumne(Request $request){
        $idE = $request->idE;
        $idA = $request->idA;
        $empresa = Empresa::findOrFail($idE);
        $alumne = Alumne::findOrFail($idA);
        $estudis = Estudis::all();
        return view('empresa.alumne')->with('empresa',$empresa)->with('alumne',$alumne)->with('estudis',$estudis);
    }
}
