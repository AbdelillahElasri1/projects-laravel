@extends('layout')
@section('login')
@section('title', 'login')
<div>
    <h1 class="text-center mt-[300px]"><strong>login page</strong></h1>
    <form action="" class="flex flex-col justify-center items-center mt-4">
        <div>
            <label for="email">email</label>
            <input type="text" name="email" id="">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="">
        </div>
        <div>
            <button class="bg-blue-500 mt-6" type="submit">Submit</button>
        </div>
    </form>
</div>
@endsection