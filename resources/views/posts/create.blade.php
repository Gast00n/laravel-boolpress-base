@extends('layouts.main')

@section('content')

    <div class="container">
        <h1 class="mb-3">Create New Post</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>            
        @endif

        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
            </div>

            <div class="form-group">
                <label for="body">Description</label>
                <textarea class="form-control" name="body" id="body">{{ old('body') }}</textarea>
            </div>
            
            <div class="form-group">
                <label for="img_path">Post Image</label>
                <input class="form-control" type="file" name="img_path" id="img_path" accept="image/*">
            </div>
            
            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="Create Post">
            </div>
            
            
        </form>
    </div>
    
@endsection