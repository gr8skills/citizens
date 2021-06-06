<?php

namespace Vanguard;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    //
    public function state(){
        $this->belongsTo(State::class, 'state_id');
    }

    public function citizen(){
        $this->hasMany(Citizen::class, 'local_id');
    }
}
