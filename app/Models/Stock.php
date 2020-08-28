<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $guarded =[];


    public function entrees(){
        return $this->hasMany('App\Models\Entree', 'stock_id');
    }

    public function articles(){
        return $this->hasMany('App\Models\Article','article_id');
    }

}
