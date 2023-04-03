@extends('layout')
@section('title', 'edit computers')
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
    <div class="mt-8 flex justify-center items-center">
        <h1>Edit old computer</h1>
    </div>
    <div class="mt-8 flex justify-center items-center">
        <form action="{{route('computers.update', ['computer' => $computer->id])}}" method="POST" class="form bg-white p-6 border-1">
            @csrf 
            @method('PUT')
            <div><label for="computer-name" class="text-sm">Name</label>
                <input type="text" class="text-lg border-1" name="computer-name" value="{{ $computer->name }}">
                @error('computer-name')
                    <div class="text-red-500">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div><label for="computer-origin" class="text-sm">Origin</label>
                <input type="text" class="text-lg border-1" name="computer-origin" value="{{ $computer->origin }}">
                @error('computer-origin')
                    <div class="text-red-500">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div><label for="computer-price" class="text-sm">Price</label>
                <input type="text" class="text-lg border-1" name="computer-price" value="{{ $computer->price }}">
                @error('computer-price')
                <div class="text-red-500">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>

    @endsection
