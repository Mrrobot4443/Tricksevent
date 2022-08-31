<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function ligne(){
        return $this->hasMany(Ligne::class, 'ligne_id', 'id');
    }

    public function client(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function getTotal(){
        $total = 0;
        // Liste des ligne de commande
        foreach($this->ligne as $lc){
            $total += $lc->ticket->price * $lc->qte;
        }
        return $total;
    }
}
