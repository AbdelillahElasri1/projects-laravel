<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;

class StaticController extends Controller
{
    public function index(){
        return view('welcome');
    }
    // public function contact(){
    //     return view('contact');
    // }
    public function discover()
    {
        return view('discover', [
            'album' => Music::all(),
        ]);
    }
    public function playmusic()
    {
        return view('playMusic');
    }
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function AllMusic()
    {
        return view('admin.AllMusic');
    }
    public function addmusic()
    {
        return view('admin.addmusic');
    }
    public function commentaire()
    {
        return view('admin.commentaire');
    }
    public function like()
    {
        return view('admin.like');
    }
}
