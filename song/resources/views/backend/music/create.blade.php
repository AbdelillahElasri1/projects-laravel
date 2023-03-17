@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (Session::has('message'))
            <div class="alert alert-success">
                {{ Session::get('message') }}
            </div>

            @endif
            <div class="card">
                <div class="card-header">{{ __('Create Music') }}</div>
                <div class="card-body">
                   <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror">
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label>Artist name</label>
                            <input type="text" name="artist" class="form-control @error('artist') is-invalid @enderror">
                            @error('artist')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" id="" class="form-control @error('description') is-invalid @enderror" cols="30" rows="10"></textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label>File</label>
                            <input type="file" name="file" accept="audio/*" class="form-control @error('file') is-invalid @enderror">
                            @error('file')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        {{-- <div class="form-group">
                            <label>File</label>
                            <input type="file" name="photo" accept="photo/*" class="form-control @error('photo') is-invalid @enderror">
                            @error('photo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div> --}}
                        <div class="form-group">
                            <label>Choose Category</label>
                            <select name="category" class="form-control @error('category') is-invalid @enderror" id="">
                                <option value="">select category</option>
                                @foreach (App\Models\Category::all() as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary mt-4" type="submit">Submit</button>
                        </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection