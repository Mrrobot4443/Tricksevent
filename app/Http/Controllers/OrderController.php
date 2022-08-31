<?php

namespace App\Http\Controllers;

use App\Models\Ligne;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function store(Request $request){
        // Verifier si une commande est en cours pour ce client
        $orders= Order::where('user_id', Auth::user()->id)->where('etat', 'en cours')->first();

        // Creation commande
        if($orders){ // Commande en cours existe
            // Si produit existe
            $existe = false;
            foreach($orders->ligne as $lignec){
                if($lignec->ticket_id == $request->idticket){
                    $existe = true;
                    $lignec->qte += $request->qte;
                    $lignec->update();
                }
            }

            if(!$existe){
                // Creation ligne de commande
                $lc = new Ligne();
                $lc->qte = $request->qte;
                $lc->ticket_id = $request->idticket;
                $lc->order_id = $orders->id;
                $lc->save();
            }

            // Redirection panier
            return redirect('/client/cart')->with('success', 'Produit commandee.');
        } else { // Commande en cours n'existe pas
            $orders = new Comande();
            $comande->client_id = Auth::user()->id;

            if($comande->save()){
                // Creation ligne de commande
                $lc = new LigneComande();
                $lc->qte = $request->qte;
                $lc->product_id = $request->idproduct;
                $lc->comande_id = $comande->id;
                $lc->save();

                // Redirection panier
                return redirect('/client/cart')->with('success', 'Produit commandee.');
            } else {
                // Redirection panier
                return redirect()->back()->with('error', 'Impossible de commander le produit.');
            }
        }
    }
}
