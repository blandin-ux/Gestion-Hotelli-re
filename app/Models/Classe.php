<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    //
    public function tarif(){
        return $this->belongsTo('App\Models\Tarifier');
    }
}
