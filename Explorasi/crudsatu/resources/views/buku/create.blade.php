@extends('layouts.app')

@section('content')
    <h1>Tambah Buku</h1>

    <form method="POST" action="{{ route('buku.store') }}">
        @csrf
        <div class="form-group">
            <label for="judulBuku">Judul Buku</label>
            <input type="text" class="form-control" id="judulBuku" name="judulBuku" required>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea class="form-control" id="keterangan" name="keterangan" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection