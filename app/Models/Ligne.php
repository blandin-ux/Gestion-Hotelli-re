<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ligne extends Model
{
    //
    protected $guarded = [];

    public function article(){
        return $this->belongsTo('App\Models\Article','article_id');
    }
    public function ticket(){
        return $this->belongsTo('App\Models\Ticket');
    }
    public function user(){
        return $this->hasOne('App\User');
    }
    public function facture(){
        return $this->belongsTo('App\Models\Facture');
    }    
}
