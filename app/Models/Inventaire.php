<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventaire extends Model
{
    //
    protected $guarded = [];
    protected $dates = ['valide_at'];

    public function lignes(){
        return $this->hasMany('App\Models\Linv','inventaire_id');
    }

    public function valideur(){
        return $this->belongsTo('App\User','valide_by');
    }

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
}
