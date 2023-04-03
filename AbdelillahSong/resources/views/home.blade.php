@extends('layouts.app')

@section('content')

<div class="text-center bg-red-600 h-12">
    <h1 class="pt-3"><strong>Welcome to Admin Dashboard</strong></h1>
</div>
    <div class="container flex gap-12">
        <div class="mt-6">
            <div>

            </div>
            <div class="w-40 ">
            <nav class="">
                <ul class="flex flex-col gap-6">
                    <a href="{{ route('music.index') }}">
                        <div class="flex gap-2">
                            <span class="material-symbols-outlined">
                            library_music
                            </span>
                            <li>All music</li>
                        </div>
                    </a>
                    <a href="{{ route('music.create') }}">
                        <div class="flex gap-2">
                            <span class="material-symbols-outlined">
                                add_box
                            </span>
                            <li>Add music</li>
                        </div>
                    </a>
                    <a href="{{ route('comment.index') }}">
                        <div class="flex gap-2">
                            <span class="material-symbols-outlined">
                            chat
                            </span>
                            <li>Commentaires</li>
                        </div>
                    </a>
                    <a href="">
                        <div class="flex gap-2">
                            <span class="material-symbols-outlined">
                            favorite
                            </span>
                            <li>Likes</li>
                        </div>
                    </a>
                    <a href="{{ route('home.index') }}">
                        <div class="flex gap-2">
                            <span class="material-symbols-outlined">
                            home
                            </span>
                            <li>Home</li>
                        </div>
                    </a>
                    <a href="">
                        <div class="flex gap-2">
                            <span class="material-symbols-outlined">
                            logout
                            </span>
                            <li>Logout</li>
                        </div>
                    </a>
                    
                </ul>
            </nav>
            </div>
        </div>
        <div class="">
            @yield('index')
            @yield('create music')
            @yield('edit music')
            @yield('commentaire')
            @yield('add comment')
            @yield('like')
        </div>
    </div>

@endsection
