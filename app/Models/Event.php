<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function villes() {
        return $this->belongsTo(Villes::class);
    }
    public function event() {
        return $this->hasMany(Event::class);
    }

}
