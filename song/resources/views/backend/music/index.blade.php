@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('All Music') }}
                    <span class="">
                        <a href="/music">
                            <button class="btn btn-primary ">Create music</button>
                        </a>
                    </span>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Artist</th>
                            <th scope="col">Description</th>
                            <th scope="col">Category</th>
                            <th scope="col">File</th>
                            <th scope="col">action</th>

                            {{-- <th scope="col">Size</th> --}}
                            {{-- <th scope="col">Download</th> --}}
                            
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($music as $key => $musics)
                          <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $musics->title }}</td>
                            <td>{{ $musics->artist }}</td>
                            <td>{{ $musics->description }}</td>
                            <td value="{{ $musics->id }}">{{ $musics->category }}</td>
                            <td>
                                <audio controls>
                                    <source src="/audio/{{ $musics->file }}" type="audio/ogg">
                                        your browser does not support this format
                                </audio>
                            </td>
                            <td>
                                <a href="/edit">
                                    <button class="btn btn-info">edit</button>
                                </a>
                            </td>
                            {{-- <td>{{ $musics->download }}</td> --}}
                            {{-- <td>{{ $musics->size }}</td> --}}
                            
                          </tr>
                          @endforeach
                          
                        </tbody>
                      </table>
                </div>
            </div>
            {{ $music->links() }}
        </div>
    </div>
</div>
@endsection
