<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //
    protected $guarded = [];
    public function chambre(){
        return $this->belongsTo('App\Models\Chambre','chambre_id');
    }
}
