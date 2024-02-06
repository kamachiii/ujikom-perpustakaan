@extends('partials.main')

@section('title', 'Dashboard admin')

@section('content')
    <div class="container py-4">
        <h3>Dashboard Admin</h3>
            <table class="table table-bordered table-hover">
                <caption class="caption-top">List of users</caption>
                <thead class="table-primary">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Role</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $key => $user)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $user->nama_lengkap }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->alamat }}</td>
                            <td>{{ $user->role }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
@endsection
