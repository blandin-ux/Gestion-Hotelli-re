<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //
    protected $guarded = [];

    public function lignes(){
        return $this->hasMany('App\Models\Ligne');
    }

    public function article(){
        return $this->belongsTo('App\Models\Article','article_id');
    }

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }

}
