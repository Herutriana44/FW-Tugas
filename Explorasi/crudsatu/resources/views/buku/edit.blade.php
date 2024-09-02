@extends('layouts.app')

@section('content')
    <h1>Edit Buku</h1>

    <form method="POST" action="{{ route('buku.update', $buku->idBuku) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="judulBuku">Judul Buku</label>
            <input type="text" class="form-control" id="judulBuku" name="judulBuku" value="{{ $buku->judulBuku }}" required>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea class="form-control" id="keterangan" name="keterangan" required>{{ $buku->keterangan }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection