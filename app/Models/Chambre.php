<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    //
    public function hotel(){
        return $this->belongsTo('App\Models\Hotel');
    }
    
    public function categorie(){
        return $this->belongsTo('App\Models\categorie');
    }

    public function tarifier(){
        return $this->belongsTo('App\Models\Tarifier','tarifier_id');
    }
    
    public function reservation(){
        return $this->belongsTo('App\Models\Reservation');
    }
}
