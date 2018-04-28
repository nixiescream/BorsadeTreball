<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Alumne extends Authenticatable{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'alumne_nom', 'alumne_email', 'alumne_password', 'alumne_rol', 'alumne_cognom1', 'alumne_cognom2', 'alumne_dni', 'alumne_estudis',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
