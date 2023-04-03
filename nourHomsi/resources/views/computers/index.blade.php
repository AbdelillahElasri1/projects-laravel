@extends('layout')
@section('title', 'computers')
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
        @if(count($computers) > 0)
            <ul>
            @foreach($computers as $computer)
                <li><a href="{{route('computers.show', ['computer' => $computer['id']])}}"> {{$computer['name']}} is from <strong>{{$computer['origin']}}</strong>--<strong>{{$computer['price']}}$</strong></a></li>
                
            @endforeach
            </ul>
        @else 
            <strong>You don't have any data</strong>
        @endif
        
    </div>
    @endsection
