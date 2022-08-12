<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\Villes;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('admin.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $villes = Villes::all();
        $categories = Category::all();
        return view('admin.events.create',compact('villes','categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $events = new Event();
        $events->titre = $request->titre;
        $events->category_id= $request->category_id;
        $events->villes_id = $request->villes_id;
        $events->prix = $request->prix;
        $events->content = $request->content;
        $events->date_debut = $request->date_debut;
        $events->date_fin = $request->date_fin;
        $events->image = $request->image;
        $events->sponsor = $request->sponsor;
        $events->user_type = $request->user_type;
        $events->save();
        return redirect()->route('events.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $events =Event::find(decrypt($id));
        return view('admin.events.edit', compact('events'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $events = Event::find($id);
        $events->name = $request->name;
        $events->titre = $request->titre;
        $events->category_id= $request->category_id;
        $events->ville_id = $request->ville_id;
        $events->content = $request->content;
        $events->prix = $request->prix;
        $events->date_debut = $request->date_debut;
        $events->date_fin = $request->date_fin;
        $events->sponsor = $request->sponsor;
        $events->user_type = $request->user_type;
        $events->image = $request->image;
        $events->save();
        return redirect()->route('events.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Event::destroy($id);
        return redirect()->route('events.index');
    }
}
