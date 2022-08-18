<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use App\Models\Event;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function home()
    {
        $events = Event::all();
        return view('welcome',compact('events'));
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->user_type == "admin"){
            return redirect('welcome');
        } else {
            return view('user.dashboard');
        }
    }
    public function dashboard_admin()
    {
        return view('admin.dashboard');
    }
    public function login_admin()
    {
        if (Auth::check()) {
            if (Auth::user()->user_type == "admin") {
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
    public function submitContactForm(ContactRequest $request)
    {
        Mail::to('yazo-yazo@hotmail.com')->send(new ContactMail(
            $request->name,
            $request->email,
            $request->phone,
            $request->content
        ));
        return back();
    }
    public function submitEvents()
    {
        return view('admin.events.index');
    }
    public function dashboard_user()
    {
        return view('user.dashboard');
    }
}
