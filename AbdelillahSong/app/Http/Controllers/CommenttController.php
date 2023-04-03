<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommenttController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('comment.index', [
        'comment' => Comment::all(),
       ]);
    }
    public function playMusic()
    {
        return view('playmusic', [
            'comment' => Comment::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required',
        ]);
        $comment = new Comment;

        $comment->comment = strip_tags($request->input('comment'));

        $comment->save();
        
        return redirect()->route('discover');
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
        $index = Music::findOrFail($id);
        return view('comment.edit', [
            'comment' => $index,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'comment' => 'required',
        ]);
        $comment = new Comment;

        $comment->comment = strip_tags($request->input('comment'));

        $comment->save();
        
        return redirect()->route('comment.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = Comment::findOrFail($id);
        $delete->delete();
        return redirect()->route('comment.index');
    }
}
