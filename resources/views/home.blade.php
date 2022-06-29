@extends('layouts.main')
@section('container')
<div class="containter">
    <main class="mt-0">
      <div id="myCarousel" class="carousel slide mb-0 overflow-hidden shadow-lg bg-secondary"data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner overflow-hidden">
          <div class="carousel-item active">
            <img src="{{ asset('storage/' . $posts[0]->image) }}" class="img-fluid" alt="{{ $posts[0]->title }}" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
    
            <div class="container">
              <div class="carousel-caption text-start text-white">
                <h1 class="card-title"><a href="/news/{{ $posts[0]->slug }}" class="text-decoration-none text-white">{{ $posts[0]->title }}</a></h1>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/news/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary rounded-pill">Read more</a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('storage/' . $posts[1]->image) }}" class="img-fluid" alt="{{ $posts[1]->title }}" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
    
            <div class="container">
              <div class="carousel-caption">
                <h1 class="card-title"><a href="/news/{{ $posts[1]->slug }}" class="text-decoration-none text-white">{{ $posts[1]->title }}</a></h1>
                <p class="card-text">{{ $posts[1]->excerpt }}</p>
                <a href="/news/{{ $posts[1]->slug }}" class="text-decoration-none btn btn-primary rounded-pill">Read more</a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('storage/' . $posts[2]->image) }}" class="img-fluid" alt="{{ $posts[2]->title }}" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" width="100%" height="100%">
    
            <div class="container">
              <div class="carousel-caption text-end">
                <h1 class="card-title"><a href="/news/{{ $posts[2]->slug }}" class="text-decoration-none text-white">{{ $posts[2]->title }}</a></h1>
                <p class="card-text">{{ $posts[2]->excerpt }}</p>
                <a href="/news/{{ $posts[2]->slug }}" class="text-decoration-none btn btn-primary rounded-pill">Read more</a>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div class="b-example-divider"></div>
    {{-- Body setelah slider --}}
      <div class="px-4 py-5 my-5 text-center">
        <img class="d-block mx-auto mb-4" src="/image/logo.png" style="max-width: 15%;" alt="">
        <h1 class="display-5 fw-bold">Selamat Datang di Website Kami</h1>
        <div class="col-lg-6 mx-auto">
          <p class="lead mb-4">Kelompok Tani Website Permata Sehati RT 79 Kelurahan Karang Rejo, Kecamatan Balikpapan Tengah, Kota Balikpapan</p>
        </div>
      </div>
    
    
      <div class="b-example-divider"></div>
    
      <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img src="/image/logo.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="300" height="100" loading="lazy">
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3"><a href="/about" class="text-decoration-none text-dark">About Us</a></h1>
            <p class="lead">Permata Sehati merupakan sebuah Kelompok Wanita Tani (KWT)</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
              <a href="/about">
                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">About Us</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    
      <div class="b-example-divider"></div>
    {{-- categories --}}
      <div class="container my-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
          <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
            <h1 class="display-5 fw-bold lh-1 mb-3"><a href="/about" class="text-decoration-none text-dark">Categories Post</a></h1>
          </div>

          <div class="row justify-content-center mb-5">
            @foreach ($categories as $category)
            <div class="col-md">
                <a href="/news?category={{ $category->slug }}" class="text-decoration-none">
                <div class="card bg-secondary text-white">
                    <div class="d-flex align-items-center p-0">
                        <h5 class="card-title text-center flex-fill p-2 fs-3">{{ $category->name }}</h5>
                    </div>
                </div>
                </a>
            </div>
            @endforeach
          </div>

        </div>
      </div>
    
      <div class="b-example-divider mb-0"></div>
    </main>
</div>
      
@endsection
