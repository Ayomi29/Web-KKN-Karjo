@extends('layouts.main')
@section('container')
<div class="container mt-4">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <p>By. <a href="/news?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/news?category={{ $post->category->slug }}"class="text-decoration-none">{{ $post->category->name }}</a></p>
                <img src="https://picsum.photos/1200/300" class="img-fluid" alt="{{ $post->category->name }}">
                <article class="my-3">
                    {!! $post->body !!}
                </article>
                <a href="/news" class="text-decoration-none d-block mt-3">Back to Posts</a>        
            </div>
    
        </div>
    </div>
</div>
@endsection



