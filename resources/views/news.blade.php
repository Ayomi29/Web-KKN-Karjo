@extends('layouts.main')
@section('container')
<div class="container mt-4">
    @if ($posts->count())
    <h1 class="mb-3 text-center">{{ $title }}</h1>
    <div class="row justify-content-center mb-3">
        <div class="col-6">
            <form action="/news">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control " placeholder="Search" name="search" value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
        <div class="card mb-3">
        <img src="https://picsum.photos/1200/300" class="card-img-top" alt="{{ $posts[0]->category->name }}">
        <div class="card-body text-center">
            <h3 class="card-title"><a href="/news/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
            <p>
                <small class="text-muted">
                By. <a href="/news?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/news?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
                </small>
            </p>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a href="/news/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary rounded-pill">Read more</a>
        </div>
        </div>
    
    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute px-3 py-2" style="background-color:rgba(0,0,0,0.7)"><a href="/news?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a></div>
                    <img src="https://picsum.photos/150" class="card-img-top" alt="{{ $post->category->name }}">
                    <div class="card-body">
                        <h5 class="card-title"><a href="/news/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a></h5>
                        <p>
                            <small class="text-muted">
                            By. <a href="/news?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                            </small>
                        </p>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <a href="/news/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>    
            @endforeach
        </div>
    </div>
    @else
    <p class="text-center fs-4">No post found.</p>
    @endif
    <div class="d-flex justify-content-end">
        {{ $posts->links() }}
    </div>
</div>

@endsection 