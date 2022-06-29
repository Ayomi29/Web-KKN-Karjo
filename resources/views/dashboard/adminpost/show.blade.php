@extends('dashboard.layouts.main')
@section('container')   
<div class="container mt-4">
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <a href="/dashboard/adminpost" class="btn btn-success"><span data-feather="arrow-left"></span> Back to my posts</a>
                <a href="/dashboard/adminpost/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <form action="/dashboard/adminpost/{{ $post->slug }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus post ini?')"><span data-feather="x-circle"></span> Delete</button>
                </form>
                <div style="max-height: 400px; overflow: hidden">
                    <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mt-3" alt="{{ $post->category->name }}">
                </div>
                {{-- <img src="https://picsum.photos/1200/300" class="img-fluid mt-3" alt="{{ $post->category->name }}"> --}}
                <article class="my-3">
                    {!! $post->body !!}
                </article>
                <a href="/dashboard/adminpost" class="text-decoration-none d-block mt-3">Back to Posts</a>        
            </div>
        </div>
    </div>
</div>
@endsection
