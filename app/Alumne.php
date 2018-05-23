<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Alumne extends Model{

    protected $primaryKey = 'user_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'alumne_nom', 'alumne_email', 'alumne_password', 'alumne_rol', 'alumne_cognom1', 'alumne_cognom2', 'alumne_bio', 'alumne_dni', 'alumne_telefon', 'alumne_carnet','alumne_tempsTotal', 'estudis_sigles',
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

    public function ofertes(){
        return $this->belongsToMany('App\Oferta','alumne_oferta','alumne_user_id','oferta_id');
    }

    public function estudi(){
        return $this->belongsTo('App\Estudis');
    }
}
