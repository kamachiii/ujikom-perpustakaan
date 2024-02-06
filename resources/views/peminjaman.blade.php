@extends('partials.main')

@section('title', 'Peminjaman')

@section('content')
    <div class="row justify-content-between m-4">
        @foreach ($bukus as $key => $buku)
        <div class="col-5 text-center">
                <button class="border-0 bg-transparent" data-bs-toggle="modal" data-bs-target="#modalBook{{ $key }}">
                @if($key % 6 == 0)
                    <img src="{{ asset('storage/images/cover/1.jpg') }}" width="250px" height="350px" alt="Komet Tereliye">
                @elseif($key % 6 == 1)
                    <img src="{{ asset('storage/images/cover/2.jpg') }}" width="250px" height="350px" alt="Bumi Tereliye">
                @elseif($key % 6 == 2)
                    <img src="{{ asset('storage/images/cover/3.jpg') }}" width="250px" height="350px" alt="Bulan Tereliye">
                @elseif($key % 6 == 3)
                    <img src="{{ asset('storage/images/cover/4.jpg') }}" width="250px" height="350px" alt="Lumpu Tereliye">
                @elseif($key % 6 == 4)
                    <img src="{{ asset('storage/images/cover/5.jpeg') }}" width="250px" height="350px" alt="Sagaras Tereliye">
                @else
                    <img src="{{ asset('storage/images/cover/6.jpg') }}" width="250px" height="350px" alt="Putih Tereliye">
                @endif
                <h3>{{ $buku->judul }}</h3>
                <p>{{ $buku->penulis }} || {{ $buku->penerbit }}</p>
            </button>
        </div>

        <div class="modal fade" id="modalBook{{ $key }}" tabindex="-1" aria-labelledby="modalBook{{ $key }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    @if($key % 6 == 0)
                    <img src="{{ asset('storage/images/cover/1.jpg') }}" width="250px" height="350px" alt="Komet Tereliye">
                    @elseif($key % 6 == 1)
                        <img src="{{ asset('storage/images/cover/2.jpg') }}" width="250px" height="350px" alt="Bumi Tereliye">
                    @elseif($key % 6 == 2)
                        <img src="{{ asset('storage/images/cover/3.jpg') }}" width="250px" height="350px" alt="Bulan Tereliye">
                    @elseif($key % 6 == 3)
                        <img src="{{ asset('storage/images/cover/4.jpg') }}" width="250px" height="350px" alt="Lumpu Tereliye">
                    @elseif($key % 6 == 4)
                        <img src="{{ asset('storage/images/cover/5.jpeg') }}" width="250px" height="350px" alt="Sagaras Tereliye">
                    @else
                        <img src="{{ asset('storage/images/cover/6.jpg') }}" width="250px" height="350px" alt="Putih Tereliye">
                    @endif
                    <h3>{{ $buku->judul }}</h3>
                    <p>{{ $buku->penulis }} || {{ $buku->penerbit }}
                        <section>Tahun terbit : {{ $buku->tahun_terbit }}</section>
                    </p>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('pinjam-action', $buku->id) }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-primary">Pinjam</button>
                    </form>
                </div>
              </div>
            </div>
          </div>
        @endforeach
        <div class="m-3">
            {{  $bukus->links() }}
        </div>
    </div>
    <footer>
    </footer>
@endsection
