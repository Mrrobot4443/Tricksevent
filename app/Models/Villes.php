<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Villes extends Model
{
    use HasFactory;
    public function event() {
        return $this->hasMany(Event::class,'villes_id','id');
    }

}
