@extends('layouts.main')
@section('container')
<div class="container mt-5">
    <div class="row justify-content-center mb-5">
        @foreach ($categories as $category)
        <div class="col-md">
            <a href="/news?category={{ $category->slug }}" class="text-decoration-none">
            <div class="card bg-secondary text-white">
                <div class="d-flex align-items-center p-0">
                    <h5 class="card-title text-center flex-fill p-2 fs-3" style="background-color:rgba(0,0,0,0.7)">{{ $category->name }}</h5>
                </div>
            </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection