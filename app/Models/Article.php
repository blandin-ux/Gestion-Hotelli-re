<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded =[];

    
    public function entrees(){
        return $this->hasMany('App\Models\Entree', 'article_id');
    }

    public function categorie(){
        return $this->belongsTo('App\Models\Categorie', 'categorie_id');
    }

    public function stock(){
        return $this->belongsTo('App\Models\Stock');
    }

    
}
