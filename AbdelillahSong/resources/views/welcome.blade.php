@extends('layout')
@section('welcome')
@section('title', 'welcome')
<div>
    <!-- <h1 class="text-center mt-[300px]"><strong>Welcome page</strong></h1> -->
<div class="text-gray-700 bg-white mt-6">
  
  <div class="py-20 hero">
    <div class="container mx-auto px-6">
      <div class="text-4xl font-bold mb-2 text-white">
        Music is the best thing is your life enjoy
      </div>
      <div class="text-2xl mb-8 text-gray-200">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, laudantium.
      </div>
      <button class="transform hover:scale-110 transition duration-300 ease-in-out bg-white font-bold rounded-full py-6 px-8 shadow-lg uppercase tracking-wider">
        Get Started
      </button>
    </div>
  </div>
  <section class="container mx-auto px-6 py-10">
    <h2 class="text-4xl font-bold text-center text-gray-800 mb-0">
      Features
    </h2>
    <div class="flex items-center flex-wrap mb-10">
      <div class="w-full md:w-1/2 px-4">
        <h4 class="text-3xl text-gray-800 font-bold mb-3">
          Music is the core of scability
        </h4>
        <p class="text-gray-600 mb-8">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam est doloremque accusantium odit dolor mollitia veniam dolorum eos amet deserunt.
        </p>
      </div>
      <div class="w-full md:w-1/2 px-4">
        <img src="https://cdn.dribbble.com/users/2487395/screenshots/6311129/responsivedesign_2x.png" alt="responsive">
      </div>
    </div>
    <div class="flex items-center flex-wrap mb-20">
      <div class="w-full md:w-1/2 px-4">
        <img src="https://icons8.com/wp-content/uploads/2020/02/tips-on-mobile-UI-design.png" alt="component-friendly">
      </div>
      <div class="w-full md:w-1/2 px-4">
        <h4 class="text-3xl text-gray-800 font-bold mb-3">
          Artist
        </h4>
        <p class="text-gray-600 mb-8">
         Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam esse a reprehenderit fuga ipsum illum.
        </p>
      </div>
    </div>
    <div class="flex items-center flex-wrap mb-20">
      <div class="w-full md:w-1/2 px-4">
        <h4 class="text-3xl text-gray-800 font-bold mb-3">
          Playlist is group of music
        </h4>
        <p class="text-gray-600 mb-8">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure aperiam doloremque amet commodi harum temporibus vitae aliquam inventore tempore quis.
        </p>
      </div>
      <div class="w-full md:w-1/2 px-4">
        <img src="https://statuscast.com/wp-content/uploads/2018/12/untitled-1@3x.png" alt="customizable">
      </div>
    </div>
  </section>
  <section class="bg-gray-100">
    <div class="container mx-auto px-6 py-20">
      <h2 class="text-4xl font-bold text-center text-gray-800 mb-8">
        Testimonials
      </h2>
      <div class="flex flex-wrap">
        <div class="w-full md:w-1/3 px-2 mb-4">
          <div class="bg-white rounded shadow py-2">
            <p class="text-gray-800 text-base px-6 mb-5">
              Sunt corrupti delectus eaque pariatur dicta magnam, velit possimus cupiditate iusto hic, ullam, error vel odio adipisci! Mollitia molestias sit beatae? Corrupti!
            </p>
            <p class="text-gray-500 text-xs md:text-sm px-6">
              John Doe
            </p>
          </div>
        </div>
        <div class="w-full md:w-1/3 px-2 mb-4">
          <div class="bg-white rounded shadow py-2">
            <p class="text-gray-800 text-base px-6 mb-5">
              Sunt corrupti delectus eaque pariatur dicta magnam, velit possimus cupiditate iusto hic, ullam, error vel odio adipisci! Mollitia molestias sit beatae? Corrupti!
            </p>
            <p class="text-gray-500 text-xs md:text-sm px-6">
              Jane Doe
            </p>
          </div>
        </div>
        <div class="w-full md:w-1/3 px-2 mb-4">
          <div class="bg-white rounded shadow py-2">
            <p class="text-gray-800 text-base px-6 mb-5">
              Sunt corrupti delectus eaque pariatur dicta magnam, velit possimus cupiditate iusto hic, ullam, error vel odio adipisci! Mollitia molestias sit beatae? Corrupti!
            </p>
            <p class="text-gray-500 text-xs md:text-sm px-6">
              James Doe
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="call-to-action">
    <div class="container mx-auto px-6 text-center py-10">
      <h2 class="mb-6 text-4xl font-bold text-center text-white">
        Impress them all!
      </h2>
      <h3 class="my-4 text-2xl text-white">
        Build the next generation of design experiences
      </h3>
      <button class="transform hover:scale-110 transition duration-300 ease-in-out bg-white font-bold rounded-full mt-6 py-6 px-8 shadow-lg uppercase tracking-wider">
        Get Started
      </button>
    </div>  
  </section>
  <footer class="bg-gray-100">
    <div class="container mx-auto px-6 pt-10 pb-6">
      <div class="flex flex-wrap">
        <div class="w-full md:w-1/4 text-center md:text-left">
          <h5 class="uppercase mb-6 font-bold">Links</h5>
          <ul class="mb-4">
            <li class="mt-2">
              <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">FAQ</a>
            </li>
            <li class="mt-2">
              <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">Help</a>
            </li>
            <li class="mt-2">
              <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">Support</a>
            </li>
          </ul>
        </div>
        <div class="w-full md:w-1/4 text-center md:text-left">
          <h5 class="uppercase mb-6 font-bold">Legal</h5>
          <ul class="mb-4">
            <li class="mt-2">
              <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">Terms</a>
            </li>
            <li class="mt-2">
              <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">Privacy</a>
            </li>
          </ul>
        </div>
        <div class="w-full md:w-1/4 text-center md:text-left">
          <h5 class="uppercase mb-6 font-bold">Social</h5>
          <ul class="mb-4">
            <li class="mt-2">
              <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">Facebook</a>
            </li>
            <li class="mt-2">
              <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">Linkedin</a>
            </li>
            <li class="mt-2">
              <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">Twitter</a>
            </li>
          </ul>
        </div>
        <div class="w-full md:w-1/4 text-center md:text-left">
          <h5 class="uppercase mb-6 font-bold">Company</h5>
          <ul class="mb-4">
            <li class="mt-2">
              <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">Official Blog</a>
            </li>
            <li class="mt-2">
              <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">About Us</a>
            </li>
            <li class="mt-2">
              <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</div>

</div>
@endsection