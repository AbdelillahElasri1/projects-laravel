@extends('layout')
@section('add comment')
<!-- comment component -->

<div class="flex  justify-center mt-[15%]">
    <form action="{{ route('comment.store')}}" method="POST">
        @csrf
        <div class="w-full max-w-sm">
            <input type="text" class="h-24 w-full border rounded-xl overflow-hidden resize-none focus:border-blue-500 ring-1 ring-transparent focus:ring-blue-500 focus:outline-none text-black p-2 transition ease-in-out duration-300" name="comment" placeholder="Christ bless you! . . .">
            @error('comment')
                    <div class="text-red-500">
                        {{$message}}
                    </div>
                @enderror
            <div class="flex justify-end">
                <button type="submit" class="rounded-full py-1 px-2 text-white bg-black">Comment</button>
            </div>
            </form>
        </div>
    </div>
@endsection