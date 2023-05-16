@extends('layouts.main')
@section('container')

<div class="container mt-3 p-4 bg-white">
    <h1 class="mb-3 text-center ">DAFTAR MAHASISWA BERPRESTASI</h1>
    @if (session()->has('pesan'))
    <div class="alert alert-success" role="alert">
        {{session('pesan')}}
        @endif
    </div>
    {{-- <p>
        <a href="/mahasiswa/create" class="btn btn-primary ">Tambah Data Mahasiswa</a>
    <p> --}}
    <table class="table  ">
        <thead class="table-success table-gradient">
            <tr>
                <th>No</th>
                <th>Nim</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Jurusan</th>
                <th>Prestasi</th>
                <th>Angkatan</th>
                <th>Alamat</th>
                {{-- <th>Action</th> --}}
        </thead>
        </tr>
        @foreach ($mahasiswas as $mahasiswa)

        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $mahasiswa->nim }}</td>
            <td>{{ $mahasiswa->nama }}</td>
            <td>{{ $mahasiswa->jenis_kelamin }}</td>
            <td>{{ is_null($mahasiswa->jurusan)?'-':$mahasiswa->jurusan->nama}}</td>
            <td>{{ $mahasiswa->prestasi->nama}}</td>
            <td>{{ $mahasiswa->angkatan }}</td>
            <td>{{ $mahasiswa->alamat }}</td>
            {{-- <td>
                <a href="/mahasiswa/{{ $mahasiswa->id }}/edit" class="btn btn-sm btn-primary btn-update">Edit</a>

                <form action="/mahasiswa/{{ $mahasiswa->id }}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-sm btn-danger btn-delete" type="submit"
                        onclick="return confirm('Yakin akan menghapus data ?')">Delete</button>
                </form>

            </td> --}}


        </tr>
        @endforeach
    </table>

    {{ $mahasiswas->links() }}

    @endsection
