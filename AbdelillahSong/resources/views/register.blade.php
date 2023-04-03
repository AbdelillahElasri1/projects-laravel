@extends('layout')
@section('register')
@section('title', 'resiter')
<div>
    <h1 class="text-center mt-[300px]"><strong>register page</strong></h1>
    <form action="" class="flex flex-col justify-center items-center">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="">
        </div>
        <div>
            <label for="confirmePassword">Re-type Password</label>
            <input type="password" name="confirmePassword" id="">
        </div>
        <div class="">
            <button class="bg-blue-500 mt-6" type="submit">Submit</button>
        </div>
    </form>
</div>
@endsection