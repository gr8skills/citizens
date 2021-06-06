<?php

namespace Vanguard;

use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    //
    public function local(){
        $this->belongsTo(Local::class, 'local_id');
    }

    public function tribe(){
        $this->belongsTo(Tribe::class, 'tribe_id');
    }

}
