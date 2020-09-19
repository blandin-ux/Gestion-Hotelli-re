<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarifier extends Model
{
    //
    public function categorie(){
        return $this->belongsTo('App\Models\Categorie');
    }
    
    public function classe(){
        return $this->belongsTo('App\Models\Classe');
    }
}
