<?php

namespace Vanguard;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    //
    public function country() {
        $this->belongsTo(Country::class);
    }

    public function local(){
        $this->hasMany(Local::class, 'state_id');
    }
}
