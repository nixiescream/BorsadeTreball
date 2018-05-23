<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'titol', 'descripcio', 'sou', 'horari', 'tipus', 'estudis_emprats', 'empresa_id',
    ];

    public function empresa(){
        return $this->belongsTo('App\Empresa');
    }
    public function alumnes(){
        return $this->belongsToMany('App\Alumne','alumne_oferta','oferta_id','alumne_user_id');
    }
}
