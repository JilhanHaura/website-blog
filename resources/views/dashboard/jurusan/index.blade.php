@extends('dashboard.layouts.main')
@section('container')

<div class="container mt-3 p-4 bg-white">
    <h1 class="mb-3 text-center ">DATA JURUSAN</h1>
    @if (session()->has('pesan'))
    <div class="alert alert-success" role="alert">
        {{session('pesan')}}
        @endif
    </div>
    <p>
        <a href="/jurusan-dashboard/create" class="btn btn-success ">Tambah Data Jurusan</a>
    <p>

    <table class="table  ">
        <thead class="table-success table-gradient">
            <tr>
                <th>No</th>
                <th>Nama Jurusan</th>
                <th>Action</th>
        </thead>
        </tr>
        @foreach ($jurusans as $jurusan)
        <tr>

            <td>{{ $loop->iteration }}</td>
            <td>{{ $jurusan->nama }}</td>
            <td>
                <a href="jurusan-dashboard/{{$jurusan->id}}/edit" class="btn btn-sm btn-primary btn-update">Edit</a>

                <form action="{{url('jurusan-dashboard/'.$jurusan->id)}}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-sm btn-danger btn-delete" type="submit"
                        onclick="return confirm('Yakin akan menghapus data ?')">Delete</button>
                </form>

            </td>


        </tr>
        @endforeach
    </table>

    {{ $jurusans->links() }}

    @endsection
