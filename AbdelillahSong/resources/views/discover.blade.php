@extends('layout')
@section('discover')
@section('title', 'discover')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<div>
<main class="grid place-items-center min-h-screen bg-gradient-to-t from-blue-200 to-indigo-900 p-5 mt-6">
  <div>
    <h1 class="text-4xl sm:text-5xl md:text-7xl font-bold text-gray-200 mb-5">Made for you</h1>
    <section class="grid grid-cols-1 sm:grid-cols-3 gap-4">
      <!-- CARD 1 -->
      @foreach($album as $albums)
      <div class="bg-gray-900 shadow-lg rounded p-3">
        <div class="group relative">
          
          <img class="w-full md:w-72 block rounded" src="{{asset('storage/' . $albums['image'])}}" alt="" />
          <div class="absolute bg-black rounded bg-opacity-0 group-hover:bg-opacity-60 w-full h-full top-0 flex items-center group-hover:opacity-100 transition justify-evenly">
            <button class="hover:scale-110 text-white opacity-0 transform translate-y-3 group-hover:translate-y-0 group-hover:opacity-100 transition">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                <path d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
              </svg>
            </button>

            <button onclick="playAudio()" class="hover:scale-110 text-white opacity-0 transform translate-y-3 group-hover:translate-y-0 group-hover:opacity-100 transition">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-play-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z" />
              </svg>
            </button>

            <button onclick="pauseAudio()" class="hover:scale-110 text-white opacity-0 transform translate-y-3 group-hover:translate-y-0 group-hover:opacity-100 transition">
              <!-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
              </svg> -->
                <span class="material-symbols-outlined">
                pause_circle
                </span>
            </button>
          </div>
        </div>
        <div class="p-5 flex gap-24">
          <div>
            <a href="{{ route('music.show', ['music' => $albums['id']]) }}">
              <h3 class="text-white text-lg">{{ $albums['titre'] }}</h3>
            </a>
            <p class="text-gray-400 text-lg">{{ $albums['artist'] }}</p>
            <strong class="text-white ">Genre : {{ $albums['category'] }}</strong>
          </div>
          <div class="mt-4">
            <a href="">
            <span class="material-symbols-outlined text-white">
              chat
            </span>
            </a>
          </div>
          
        </div>
      </div>
          <audio class="hidden" controls id="mySound">
            <source src="{{ asset('storage/' . $albums['music']) }}">
          </audio>
      @endforeach
      <!-- END OF CARD 1 -->
    </section>
    @yield('add comment')
  </div>
</main>
</div>
<script>
      let x =document.getElementById('mySound');
    function playAudio() {
      x.play();
    }
    function pauseAudio() {
      x.pause();
    }
</script>

@endsection