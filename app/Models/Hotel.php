<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    //
    protected $guarded = [];

    public function classe(){
        return $this->belongsTo('App\Models\Classe','classe_id');
    }

    public function chambre(){
        return $this->hasMany('App\Models\Chambre');
    }
}
