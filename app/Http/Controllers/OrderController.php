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
                if($lignec->event_id == $request->idevents){
                    $existe = true;
                    $lignec->qte += $request->qte;
                    $lignec->price = $request->price;
                    $lignec->update();
                }
            }

            if(!$existe){
                // Creation ligne de commande
                $lc = new Ligne();
                $lc->qte = $request->qte;
                $lc->order_id = $orders->id;
                $lc->event_id = $request->idevents;
                $lc->price = $request->price;
                $lc->save();
            }

            // Redirection panier
            return redirect('/chekdetaills')->with('success', 'Produit commandee.');
        } else { // Commande en cours n'existe pas
            $orders = new Order();
            $orders->user_id = Auth::user()->id;

            if($orders->save()){
                // Creation ligne de commande
                $Li = new Ligne();
                $Li->qte = $request->qte;
                $Li->event_id = $request->idevents;
                $Li->order_id = $orders->id;
                $Li->price = $request->price;
                $Li->save();

                // Redirection panier
                return redirect('/chekdetaills')->with('success', 'Produit commandee.');
            } else {
                // Redirection panier
                return redirect()->back()->with('error', 'Impossible de commander le produit.');
            }
        }
    }

    public function ligneDestroy($idlc){
        $lc = Ligne::find($idlc);
        $lc->delete();
        return redirect()->back()->with('success', 'Ligne de commander supprimee.');
    }

    public function cart(){

        $orders = Order::where('user_id', Auth::user()->id)->where('etat', 'en cours')->first();

        return view('detaillechek', compact('orders'));
    }
}
