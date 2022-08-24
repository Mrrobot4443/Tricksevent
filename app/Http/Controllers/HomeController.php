<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use App\Models\Event;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function home()
    {
        $events = Event::all();
        return view('welcome',compact('events'));
    }
    public function detailles($id)
    {
        $events = Event::find($id);
        return view('detailles.detailles',compact('events'));
    }
    public function profile()
    {
        // $user = User::where(Auth::user())->get();
        return view('admin.profile');
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
            return redirect('dashboard_admin');
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





    public function updateProfile( Request $request){
        Auth::user()->name = $request->name;
        Auth::user()->email = $request->email;
        if($request->password){
            Auth::user()->password = Hash::make($request->password);
        }

        if($request->file('photo')){
            // Supprimer ancienne photo
            $file_path = public_path().'/uploads/'.Auth::user()->photo;
            // unlink($file_path);

            // Upload Image
            $newName = uniqid(); // Exemple 4gh2ryf8
            $image = $request->file('photo');
            $newName.="." . $image->getClientOriginalExtension(); // .jpg
            // echo $newName; // 4gh2ryf8.jpg
            $destinationPath = 'uploads';
            $image->move($destinationPath, $newName);

            Auth::user()->photo = $newName;
        }

        // Auth::user()->updatePr();
        // return redirect('profile')->with('success', 'Admin modifier avec succes.. !');
    }
}
