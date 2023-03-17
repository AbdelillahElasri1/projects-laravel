<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\music;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $music = music::paginate(10);
        return view('backend.music.index', compact('music'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.music.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:3|max:100',
            'artist' => 'required',
            'description' => 'required|min:3|max:500',
            'file' => 'required|mimes:mp3',
            'category' => 'required',
            // 'photo' => 'photo',
        ]);
        $fileName = $request->file->hashName();
        $format = $request->file->getClientOriginalExtension();
        $size = $request->file->getSize();
        $request->file->move(public_path('audio'), $fileName);

        $music = new music;
        $music->title = $request->get('title');
        $music->artist = $request->get('artist');
        $music->slug = Str::slug($request->get('title'));
        $music->description = $request->get('description');
        $music->category = $request->get('category');
        // $music->photo = $request->get('photo');
        // $music->category_id = $request->get('category_id');
        $music->format = $format;
        $music->size = $size;
        $music->file = $fileName;
        $music->save();
        return redirect()->back()->with('message', 'music created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $music = music::find($id);
        return view('backend.music.edit', compact('music')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
