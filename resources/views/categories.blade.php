@extends('layouts.main')
@section('container')
<div class="container mt-4">
    <div class="row justify-content-center mb-5">
        @foreach ($categories as $category)
        <div class="col-md-4">
            <a href="/news?category={{ $category->slug }}" class="text-decoration-none">
            <div class="card bg-dark text-white">
                <img src="https://picsum.photos/150" class="card-img" alt="{{ $category->name }}">
                <div class="card-img-overlay d-flex align-items-center p-0">
                    <h5 class="card-title text-center flex-fill p-2 fs-3" style="background-color:rgba(0,0,0,0.7)">{{ $category->name }}</h5>
                </div>
            </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection