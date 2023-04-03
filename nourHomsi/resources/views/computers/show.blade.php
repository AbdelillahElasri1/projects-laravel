@extends('layout')
@section('title', 'Show computers')
@section('about')
    <div class="relative">
        <nav>
            <ul class="flex justify-center gap-6">
                <li><a href="{{ route('home.index') }}">Home</a></li>
                <li><a href="{{ route('home.about') }}">About</a></li>
                <li><a href="{{ route('computers.index') }}">computers</a></li>
                <li><a href="{{ route('computers.create') }}">Create</a></li>
                <li><a href="{{ route('home.contact') }}">Contact</a></li>
            </ul>
        </nav>
    </div>
    <div class="mt-8">
        <h3>{{$computer['name']}} ({{$computer['origin']}}) - <strong>{{$computer['price']}}</strong></h3>
    </div>
    <div>
        <a href="{{route('computers.edit', $computer->id)}}">
            <button class="btn btn-primary">edit</button>
        </a>
    </div>
    <form action="{{route('computers.destroy', $computer->id)}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="delete">
    </form>
    @endsection
