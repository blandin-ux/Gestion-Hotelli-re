<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Linv extends Model
{
    //
    protected $guarded = [];

    public function article(){
        return $this->belongsTo('App\Models\Article','article_id');
    }
    public function inventaire(){
        return $this->belongsTo('App\Models\Inventaire');
    }
   
}
