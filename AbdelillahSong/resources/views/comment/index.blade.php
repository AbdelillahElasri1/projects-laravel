@extends('home')
@section('index')

<div class="w-full h-screen bg-gray-10 mt-6">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="flex flex-col">
      <div class="mb-4">
        <!-- <h1 class="text-3xl font-bolder leading-tight text-gray-900">Pages</h1> -->
      </div>
      <div class="-mb-2 py-4 flex flex-wrap flex-grow justify-between">
        <div class="flex items-center py-2">
          <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-searcg" type="text" placeholder="Search">
        </div>
       
      </div>
      <div class="-my-2 py-2 sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
        <div class="align-middle inline-block w-full shadow overflow-x-auto sm:rounded-lg border-b border-gray-200">
          <table class="min-w-full">
            <!-- HEAD start -->
            <thead>
              <tr class="border-b border-gray-200 bg-white leading-4 tracking-wider text-base text-gray-900">
                <th class="px-6 py-5 text-left" colspan="6">
                  <input class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" type="checkbox" />
                </th>
                <th class="px-6 py-5 text-left">
                  <input class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" type="checkbox" />
                </th>
              </tr>
              <tr class="bg-gray-50 border-b border-gray-200 text-xs leading-4 text-gray-500 uppercase tracking-wider">
                <th class="px-6 py-3 text-left font-medium">
                  <input class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" type="checkbox" />
                </th>
                <th class="px-6 py-3 text-left font-medium">
                  Comment
                </th>
                <!-- <th class="px-6 py-3 text-left font-medium">
                  Client
                </th> -->
                <th class="px-6 py-3 text-left font-medium">
                  Status
                </th>
                <th class="px-6 py-3 text-left font-medium">
                  Created at
                </th>
                <th class="px-6 py-3 text-left font-medium">
                </th>
                <th class="px-6 py-3 text-left font-medium">
                </th>
                
              </tr>
            </thead>
            <!-- HEAD end -->
            <!-- BODY start -->
            @foreach($comment as $comments)
            <tbody class="bg-white">
              <tr>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                  <input class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" type="checkbox" />
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                  <div class="text-sm leading-5 text-gray-900">
                    {{$comments['comment']}}
                  </div>
                </td>
                <!-- <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                  <div class="text-sm leading-5 text-gray-900">
                    
                  </div>
                </td> -->
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    published
                  </span>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                  {{$comments['created_at']}}
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                  <a href="{{ route('comment.edit', $comments->id) }}"
                     class="text-indigo-600 hover:text-indigo-900 focus:outline-none focus:underline" >
                    Edit
                  </a>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                <form action="{{route('comment.destroy', $comments->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="delete">
                </form>
                </td>
              </tr>
            @endforeach
              
            </tbody>
            <!-- BODY end -->
          </table>
        </div>
      </div>
    </div>
  </div>
    <!-- play music start -->
        
    <!-- play music end -->
</div>

@endsection