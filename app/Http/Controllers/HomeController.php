<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');

    }
    public function dashboard()
    {
        return view('admin.dashboard');

    }

    public function admin(){
        {
            if(Auth::check() && Auth::user()->user_type==='admin'){                 //  {{check pour savoir si les gens cont connectés ou non }}
                return redirect()->route('home');
            }
        };
    }

}
