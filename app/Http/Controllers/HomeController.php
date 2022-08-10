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
    public function login_admin()
    {
        if (Auth::check()) {
            if(Auth::user()->user_type == "admin") {
                return redirect()->route('dashboard');
            }
            return redirect()->route('welcome');
        } else {
            return view('admin.auth.login');
        }
    }
    public function showContactForm()
    {
        return view('contact.contact');
    }


}
