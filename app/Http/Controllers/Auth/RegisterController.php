<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Alumne;
use App\Empresa;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //protected $redirectTo = '/';
    protected $redirectTo = 'login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data){
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'rol' => 'required|string',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data){

        if($data['rol'] == 'alumne'){
            return $crearAlumne = [Alumne::create([
                'alumne_nom' => $data['name'],
                'alumne_email' => $data['email'],
                'alumne_password' => Hash::make($data['password']),
                'alumne_rol' => $data['rol'],
            ]),
            User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'rol' => $data['rol'],
            ])];
        } else if($data['rol'] == 'empresa'){
            return $crearEmpresa= [Empresa::create([
                'empresa_nom' => $data['name'],
                'empresa_email' => $data['email'],
                'empresa_password' => Hash::make($data['password']),
                'empresa_rol' => $data['rol'],
            ]),
            User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'rol' => $data['rol'],
            ])];
        }
    }

}
