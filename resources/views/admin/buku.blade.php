@extends('partials.main')

@section('title', 'Dashboard admin')

<link rel="stylesheet" href="{{ asset('vendor/larasort/css/larasort.css') }}">
@section('content')
    <div class="container py-4">
        <h3>Dashboard Admin</h3>
            <table class="table table-bordered table-hover">
                <caption class="caption-top">List of books</caption>
                <thead class="table-primary">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">
                            <a @sortableHref('judul') class="text-dark link-offset-2 link-underline link-underline-opacity-0">
                                    Judul
                            </a>
                        </th>
                        <th scope="col">
                            <a @sortableHref('penulis') class="text-dark link-offset-2 link-underline link-underline-opacity-0">
                                Penulis
                            </a>
                        </th>
                        <th scope="col">
                            <a @sortableHref('penerbit') class="text-dark link-offset-2 link-underline link-underline-opacity-0">
                                Penerbit
                                @sortableIcon('penerbit')
                            </a>
                        </th>
                        <th scope="col">
                            <a @sortableHref('tahun_terbit') class="text-dark link-offset-2 link-underline link-underline-opacity-0">
                                Tahun Terbit
                                @sortableIcon('tahun_terbit')
                            </a>
                        </th>
                        <th scope="col">
                            <a @sortableHref('status') class="text-dark link-offset-2 link-underline link-underline-opacity-0">
                                Status
                                @sortableIcon('status')
                            </a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if ($bukus->count() == 0)
                        <tr>
                            <td colspan="6">No books to display</td>
                        </tr>
                    @else
                    @foreach ($bukus as $key => $buku)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $buku->judul }}</td>
                            <td>{{ $buku->penulis }}</td>
                            <td>{{ $buku->penerbit }}</td>
                            <td>{{ $buku->tahun_terbit }}</td>
                            <td>
                                @if ($buku->status == 'Tidak tersedia')
                                    <button class="btn btn-outline-danger" disabled>{{ $buku->status }}</button>
                                @else
                                    <button class="btn btn-outline-primary" disabled>{{ $buku->status }}</button>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    @endif
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="6">
                            {{ $bukus->links() }}
                        </th>
                    </tr>
                </tfoot>
            </table>
    </div>
@endsection
