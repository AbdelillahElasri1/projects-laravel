@extends('layout')
@section('title', 'About')
@section('about')
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
    <h1>about page good practice</h1>
    <a href="/">
        <button>go to welcome page</button>
    </a>
    <a href="/contact">
        <button>go to contact page</button>
    </a>
    @endsection
