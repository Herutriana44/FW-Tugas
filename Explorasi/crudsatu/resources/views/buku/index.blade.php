@extends('layouts.app')

@section('content')
    <h1>Daftar Buku</h1>

    <ul>
        <li>
            <a href="{{route('buku.create')}}">Tambahkan Buku</a>
        </li>
    </ul>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul Buku</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($buku as $buku)
                <tr>
                    <td>{{ $buku->idBuku }}</td>
                    <td>{{ $buku->judulBuku }}</td>
                    <td>{{ $buku->keterangan }}</td>
                    <td>
                        <a href="{{ route('buku.edit', $buku->idBuku) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('buku.destroy', $buku->idBuku) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection