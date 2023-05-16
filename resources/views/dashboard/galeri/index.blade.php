@extends('dashboard.layouts.main')
@section('container')

<div class="container mt-3 p-4 bg-white">
    <h1 class="mb-3 text-center ">GALLERY</h1>
    @if (session()->has('pesan'))
    <div class="alert alert-success" role="alert">
        {{session('pesan')}}
        @endif
    </div>
    <p>
        <a href="/galeri-dashboard/create" class="btn btn-success  ">Tambah Gallery</a>
    <p>

    <table class="table  ">
        <thead class="table-success table-gradient">
            <tr>
                <th>No</th>
                <th>Gallery</th>
                <th>Action</th>
        </thead>
        </tr>
        @foreach ($galeris as $galeri)
        <tr>

            <td>{{ $loop->iteration }}</td>
            <td>{{ $galeri->title}}</td>
            <td>
                <a href="galeri-dashboard/{{$galeri->id}}/edit" class="btn btn-sm btn-primary btn-update">Edit</a>

                <form action="{{url('galeri-dashboard/'.$galeri->id)}}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-sm btn-danger btn-delete" type="submit"
                        onclick="return confirm('Yakin akan menghapus data ?')">Delete</button>
                </form>

            </td>


        </tr>
        @endforeach
    </table>

    {{ $galeris->links() }}

    @endsection
