@extends('layout')
@section('play')
<div class="bg-gradient-to-t from-blue-300 to-indigo-200 text-gray-300 mt-6 min-h-screen p-10">
  <!-- header -->
  <div class="flex">
    <img class="mr-6 w-60" src="{{ asset('storage/' . $music['image']) }}">
    <div class="flex flex-col justify-center">
      <!-- content -->
      <h4 class="mt-0 mb-2 uppercase text-gray-900 tracking-widest text-5xl">{{ $music['titre'] }}</h4>
      <h1 class="mt-0 mb-2 text-black text-3xl">Genre : {{ $music['category'] }}</h1>
      
      <p class="text-gray-600 mb-2 text-sm">With {{ $music['artist'] }}</p>
      <p class="text-gray-600 text-sm">Created by <a>{{$music['artist']}}</a>  At {{ $music['created_at'] }}</p>
    </div>
  </div>
  
  <!-- action buttons -->
  <div class="mt-6 flex justify-between">
    <div class="flex">
      <button class="mr-2 bg-green-500 text-green-100 block py-2 px-8 rounded-full" onclick="playAudio()">Play</button>
      <button class="mr-2 bg-green-500 text-green-100 block py-2 px-8 rounded-full" onclick="pauseAudio()">Pause</button>
      <!-- <button class="mr-2 border border-white block p-2 rounded-full"><img src="https://image.flaticon.com/icons/svg/2485/2485986.svg" height="25" width="25"></button>
      <button class="mr-2 border border-white block p-2 rounded-full">...</button> -->
    </div>
    <div class="text-gray-600 text-sm tracking-widest text-right">
      <h5 class="mb-1">Followers</h5>
      <p>5,055</p>
    </div>
  </div>
  
  <!-- song list   -->
  <div class="mt-10">
    <!-- song list header -->
    <div class="flex text-gray-600">
      <div class="p-2 w-8 flex-shrink-0"></div>
      <div class="p-2 w-8 flex-shrink-0"></div>
      <div class="p-2 w-full">Title</div>
      <div class="p-2 w-full">Artist</div>
      <div class="p-2 w-full">Genre</div>
      <div class="p-2 w-12 flex-shrink-0 text-right">⏱</div>
    </div>
    
    <div class="flex border-b border-gray-800 hover:bg-gray-800">
      <div class="p-3 w-8 flex-shrink-0">▶️</div>
      <div class="p-3 w-8 flex-shrink-0">❤️</div>
      <div class="p-3 w-full">{{ $music['titre'] }}</div>
      <div class="p-3 w-full">{{ $music['artist'] }}</div>
      <div class="p-3 w-full">{{ $music['category'] }}</div>
      <div class="p-3 w-12 flex-shrink-0 text-right">5:35</div>
    </div>  
    
   
  </div>
  <audio class="w-full  " controls id="mySound">
      <source src="{{ asset('storage/' . $music['music']) }}">
  </audio>
  <a href="{{ route('comment.create') }}">
      <button>add comment</button>
  </a>

 
  
  
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
