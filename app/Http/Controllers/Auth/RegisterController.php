<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Alumne;
use App\Empresa;
use App\Estudis;
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
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'rol' => $data['rol'],
            ]);

            $alumne = Alumne::create([
                'user_id' => $user['id'],
                'alumne_nom' => $data['name'],
                'alumne_email' => $data['email'],
                'alumne_password' => Hash::make($data['password']),
                'alumne_rol' => $data['rol'],
                'alumne_dni' => $data['dni'],
                'estudis_sigles' => $data['estudis'],
            ]);

            return [$user, $alumne];
        } else if($data['rol'] == 'empresa'){
                $user = User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => Hash::make($data['password']),
                    'rol' => $data['rol'],
                ]);

                $empresa = Empresa::create([
                    'user_id' => $user['id'],
                    'empresa_nom' => $data['name'],
                    'empresa_email' => $data['email'],
                    'empresa_password' => Hash::make($data['password']),
                    'empresa_rol' => $data['rol'],
                    'empresa_cif' => $data['cif'],
                ]);

                return [$user, $empresa];
        }
    }

}
