<?php

namespace Vanguard;

use Illuminate\Database\Eloquent\Model;

class Tribe extends Model
{
    //
    public function citizen(){
        $this->hasMany(Citizen::class, 'tribe_id');
    }
}
