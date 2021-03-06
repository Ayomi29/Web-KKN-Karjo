@extends('layouts.main')
@section('container')
<div class="containter">
    <main class="mt-0">
      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="bd-placeholder-img" width="100%" height="100%" src="https://picsum.photos/900/300" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
    
            <div class="container">
              <div class="carousel-caption text-start text-white">
                <h1 class="card-title"><a href="/news/{{ $posts[0]->slug }}" class="text-decoration-none text-white">{{ $posts[0]->title }}</a></h1>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/news/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary rounded-pill">Read more</a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="bd-placeholder-img" width="100%" height="100%" src="https://picsum.photos/900/300" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
    
            <div class="container">
              <div class="carousel-caption">
                <h1 class="card-title"><a href="/news/{{ $posts[1]->slug }}" class="text-decoration-none text-white">{{ $posts[1]->title }}</a></h1>
                <p class="card-text">{{ $posts[1]->excerpt }}</p>
                <a href="/news/{{ $posts[1]->slug }}" class="text-decoration-none btn btn-primary rounded-pill">Read more</a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="bd-placeholder-img" width="100%" height="100%" src="https://picsum.photos/900/300" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
    
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
    
    {{-- Body setelah slider --}}
      <main>
    
      <div class="px-4 py-5 my-5 text-center">
        <img class="d-block mx-auto mb-4" src="/image/Logo_ITK.png" style="max-width: 15%;" alt="">
        <h1 class="display-5 fw-bold">Selamat Datang di Website Kami</h1>
        <div class="col-lg-6 mx-auto">
          <p class="lead mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, obcaecati.</p>
        </div>
      </div>
    
    
      <div class="b-example-divider"></div>
    
      <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img src="/image/nanam.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3"><a href="/about" class="text-decoration-none text-dark">About Us</a></h1>
            <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima exercitationem suscipit voluptatibus laborum ex officiis saepe ad voluptatum minus et.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
              <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">About Us</button>
            </div>
          </div>
        </div>
      </div>
    
      <div class="b-example-divider"></div>
    
      <div class="container my-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
          <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
            <h1 class="display-4 fw-bold lh-1">Border hero with cropped image and shadows</h1>
            <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world???s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
              <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">News</button>
            </div>
          </div>
          {{-- <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
              <img class="rounded-lg-3" src="bootstrap-docs.png" alt="" width="720">
          </div> --}}
        </div>
      </div>
    
      <div class="b-example-divider mb-0"></div>
    
      <!-- FOOTER -->
      <div class="container">
          <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-muted">&copy; 2021 Company, Inc</p>
        
            <ul class="nav col-md-4 justify-content-center">
              <li class="nav-item"><a href="/" class="nav-link px-2 text-muted">Home</a></li>
              <li class="nav-item"><a href="/news" class="nav-link px-2 text-muted">News</a></li>
              <li class="nav-item"><a href="/categories" class="nav-link px-2 text-muted">Categories</a></li>
              <li class="nav-item"><a href="/about" class="nav-link px-2 text-muted">About Us</a></li>
            </ul>
            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-dark" href="#"><i class="bi bi-instagram"></i></a></li>
                <li class="ms-3"><a class="text-dark" href="#"><i class="bi bi-whatsapp"></i></a></li>
                <li class="ms-3"><a class="text-dark" href="#"><i class="bi bi-facebook"></i></a></li>
                <li class="ms-3"><a class="text-dark" href="#"><i class="bi bi-envelope"></i></a></li>      
                <li class="ms-3"><a class="text-dark" href="#"><i class="bi bi-arrow-up-square-fill"></i></a></li>
            </ul>
          </footer>
      </div>
@endsection
