@extends('layout')
@section('title', 'Contact')
@section('contact')
    <div class="relative">
        <nav>
            <ul class="flex justify-center gap-6">
                <li><a href="{{ route('home.index') }}">Home</a></li>
                <li><a href="{{ route('home.about') }}">About</a></li>
                <li><a href="{{ route('computers.index') }}">computers</a></li>
                <li><a href="{{ route('home.contact') }}">Contact</a></li>
            </ul>
        </nav>
    </div>
    <h1>contact page bad practice</h1>
    <a href="/">
        <button>go to welcome page</button>
    </a>
    <a href="/about">
        <button>go to about page</button>
    </a>
@endsection