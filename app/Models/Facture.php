<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    //
    protected $guarded = [];

    public function lignes(){
        return $this->hasMany('App\Models\Ligne');
    }
    public function client(){
        return $this->belongsTo('App\Models\Client','client_id');
    }

}
