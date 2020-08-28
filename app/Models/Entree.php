<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entree extends Model
{
    protected $guarded =[];

    
    public function article(){
        return $this->belongsTo('App\Models\Article');
    }

    public function stock(){
        return $this->belongsTo('App\Models\Stock', 'stock_id');
    }

}
