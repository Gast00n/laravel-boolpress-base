@extends('layouts.main')

@section('content')

    <div class="container">
        <h1 class="mb-3">{{ $post->title }}</h1>
        <div>
            Last Update: {{ $post->update_at }}
        </div>

        <div class="actions mb-5">
            <a class="btn btn-primary mt-2" href="{{ route('posts.edit', $post->slug) }}">Edit</a>
        </div>

        @if (!empty($post->img_path))
            <img src="{{ asset('storage/' . $post->img_path) }}" alt="{{ $post->title }}">
            
        @else
            <img src="{{ asset('img/no_img.png') }}" alt="no img available">
        @endif

        <div class="text mb-5 mt-5">
            {{ $post->body }}            
        </div>
    </div>
    
@endsection