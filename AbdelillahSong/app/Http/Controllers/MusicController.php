<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('music.index', [
            'music' => Music::all(),
        ]);
    }
    public function discover()
    {
        return view('discover', [
            'album' => Music::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('music.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|min:3|max:100',
            'artist' => 'required',
            'description' => 'required|min:3|max:500',
            'category'=> 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
            'music' => 'required|mimes:mp3'


        ]);


        $music = new Music;
        $music->titre = strip_tags($request->input('titre'));
        $music->artist = strip_tags($request->input('artist'));
        $music->description = strip_tags($request->input('description'));
        $music->category = strip_tags($request->input('category'));

        if($request->hasFile('image')){
            $music['image'] = $request->file('image')->store('logos', 'public');
        }

        if($request->hasFile('music')){
            $music['music'] = $request->file('music')->store('music', 'public');
        }
        
        
        
       
        
        $music->save();
        // dd($music->save());
        
        return redirect()->route('music.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $index = Music::findOrFail($id);
        
        return view('music.show', [
            'music' => $index,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $index = Music::findOrFail($id);
        return view('music.edit', [
            'music' => $index,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'titre' => 'required|min:3|max:100',
            'artist' => 'required',
            'description' => 'required|min:3|max:500',
            'category'=> 'required',
            'image' => 'required',
            'music' => 'required|mimes:mp3'


        ]);


        $update = Music::findOrFail($id);
        $update->titre = strip_tags($request->input('titre'));
        $update->artist = strip_tags($request->input('artist'));
        $update->description = strip_tags($request->input('description'));
        $update->category = strip_tags($request->input('category'));
        if($request->hasFile('image')){
            $music['image'] = $request->file('image')->store('logos', 'public');
        }

        if($request->hasFile('music')){
            $music['music'] = $request->file('music')->store('music', 'public');
        }
       
        
        $update->save();
        // dd($music->save());
        
        return redirect()->route('music.index', $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = Music::findOrFail($id);
        $delete->delete();
        return redirect()->route('music.index');
    
    }
}
