@extends('layout')
@section('title', 'Home')
@section('content')
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
            <h1>this is welcome page</h1>
        <a href="/about">
            <button class="border bg-blue-500">go to about page</button>
        </a>
        <a href="/contact">
            <button class ="border bg-red-500">go to contact page</button>
        </a>
@endsection