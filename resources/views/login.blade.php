@extends('partials.main')

@section('title', 'Login')

@section('content')

<div class="container mt-5 col-6">
        <div class="card shadow">
            <div class="text-center text-light card-header bg-primary bg-opacity-75">
                <h2>LOGIN FORM</h2>
            </div>
            <form action="{{ route('login-action') }}" method="POST" class="row g-3 card-body container">
              @csrf
                <div class="col-6">
                  <label for="inputUsername" class="form-label">Username</label>
                  <input type="text" class="form-control" id="inputUsername" name="username">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword" class="form-label">Password</label>
                  <input type="password" class="form-control" id="inputPassword" name="password">
                </div>
                <div class="col-12 text-end">
                  <a href="{{ route('register') }}"><span>Belum memiliki akun?</span></a>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Login</button>
                </div>
              </form>
        </div>
    </div>
@endsection
