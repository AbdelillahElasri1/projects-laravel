@extends('home')
@section('create music')
@section('title', 'add music')
    <div class="ml-[180%]">
        <form action="{{ route('music.store')}}" method="POST" enctype="multipart/form-data"  class="flex flex-col items-center gap-4 mt-20">
            @csrf
          
            <div>
                <label for="">Titre</label><br>
                <input type="text" name="titre" id="" class="border-8">
                @error('titre')
                    <div class="text-red-500">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div>
                <label for="description">description</label><br>
                <input type="text" name="description" id="" class="border-8">
                @error('description')
                    <div class="text-red-500">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div>
                <label for="Artist">Artist</label><br>
                <input type="text" name="artist" id="" class="border-8">
                @error('artist')
                    <div class="text-red-500">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div>
                <label for="category">Category</label><br>
                <input type="text" name="category" id="" class="border-8">
                @error('category')
                    <div class="text-red-500">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div>
                <label for="image">choose image</label><br>
                <input type="file" name="image" id="" class="border-8">
                @error('image')
                    <div class="text-red-500">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div>
                <label for="music">choose Music</label><br>
                <input type="file" accept="audio/*" name="music" id="" class="border-8">
                @error('music')
                    <div class="text-red-500">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div>
                <button class="bg-blue-500 mt-4 border-8" type="submit" >Submit</button>
            </div>
        </form>
    </div>
@endsection