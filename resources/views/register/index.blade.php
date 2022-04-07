@extends('layouts.main')
@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration">
            <h1 class="h3 mb-5 fw-normal text-center">Form Registerasi</h1>
            <form>
                {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
                
                <div class="form-floating">
                    <input type="email" class="form-control rounded-top" name="name" id="name" placeholder="name">
                    <label for="name">Name</label>
                </div>            
                <div class="form-floating">
                    <input type="email" class="form-control" name="username" id="username" placeholder="username">
                    <label for="username">Username</label>
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                    <label for="email">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control rounded-bottom" name="password" id="password" placeholder="Password">
                    <label for="password">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-2">Sudah memiliki akun? <a href="/login" class="text-decoration-none">Silahkan login!</a></small>
        </main>
    </div>
</div>
@endsection