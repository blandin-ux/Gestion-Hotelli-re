<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    //
    public function tarif(){
        return $this->belongsTo('App\Models\Tarifier');
    }
}
