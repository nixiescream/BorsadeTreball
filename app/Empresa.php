<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Empresa extends Model{
    
    protected $primaryKey = 'user_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'empresa_nom', 'empresa_email', 'empresa_cif', 'empresa_telefon', 'empresa_addr', 'empresa_password', 'empresa_rol',
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
        return $this->hasMany('App\Oferta');
    }
}
