<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    public function category() {
        return $this->belongsTo(Category::class,'category_id','id');
    }
    public function villes() {
        return $this->belongsTo(Villes::class,'villes_id','id');
    }


}
