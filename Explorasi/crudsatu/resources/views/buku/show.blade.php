@extends('layouts.app')

@section('content')
    <h1>Detail Buku</h1>

    <p><strong>Judul:</strong> {{ $buku->judulBuku }}</p>
    <p><strong>Keterangan:</strong> {{ $buku->keterangan }}</p>
@endsection