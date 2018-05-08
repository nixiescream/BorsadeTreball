<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model{

    protected $fillable = [
        'id', 'titol', 'descripcio', 'sou', 'horari', 'tipus', 'estudis_emprats',
    ];

    public function empresa(){
        return $this->belongsTo('App\Emrpesa');
    }
}
