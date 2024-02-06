@extends('partials.main')

@section('title', 'Register')

@section('content')
    <div class="container my-5 col-6">
        <div class="card shadow">
            <div class="text-center text-light card-header bg-primary bg-opacity-75">
                <h2>REGISTER FORM</h2>
            </div>
            <form action="{{ route('register-action') }}" method="POST" class="row g-3 card-body container">
              @csrf
                <div class="col-6">
                  <label for="inputUsername" class="form-label">Username</label>
                  <input type="text" class="form-control" id="inputUsername" name="username">
                </div>
                <div class="col-6">
                  <label for="inputNamaLengkap" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="InputNamaLengkap" name="nama_lengkap">
                </div>
                <div class="col-md-6">
                  <label for="inputEmail" class="form-label">Email</label>
                  <input type="email" class="form-control" id="inputEmail" name="email">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword" class="form-label">Password</label>
                  <input type="password" class="form-control" id="inputPassword" name="password">
                </div>
                <div class="col-12">
                  <label for="inputAlamat" class="form-label">Alamat</label>
                  <input type="text" class="form-control" id="inputAlamat" placeholder="Apartemen Mawar, Nomor 3, Lantai 6" name="alamat">
                </div>
                <div class="col-12 text-end">
                  <a href="#"><span>Sudah memiliki akun?</span></a>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Register</button>
                </div>
              </form>
        </div>
    </div>
@endsection
