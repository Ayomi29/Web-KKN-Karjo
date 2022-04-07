@extends('layouts.main')
@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-signin">
            <h1 class="h3 mb-5 fw-normal text-center">Login</h1>
            <form>
                {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
            
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
            <small class="d-block text-center mt-2">Belum mendaftar? <a href="/register" class="text-decoration-none">Daftar sekarang!</a></small>
        </main>
    </div>
</div>
@endsection