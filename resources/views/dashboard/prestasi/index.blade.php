@extends('dashboard.layouts.main')
@section('container')

<div class="container mt-3 p-4 bg-white">
    <h1 class="mb-3 text-center ">PRESTASI</h1>
    @if (session()->has('pesan'))
    <div class="alert alert-success" role="alert">
        {{session('pesan')}}
        @endif
    </div>
    <p>
        <a href="/prestasi-dashboard/create" class="btn btn-success  ">Tambah prestasi</a>
    <p>

    <table class="table  ">
        <thead class="table-success table-gradient">
            <tr>
                <th>No</th>
                <th>Prestasi</th>
                <th>Action</th>
        </thead>
        </tr>
        @foreach ($prestasis as $prestasi)
        <tr>

            <td>{{ $loop->iteration }}</td>
            <td>{{ $prestasi->nama }}</td>
            <td>
                <a href="prestasi-dashboard/{{$prestasi->id}}/edit" class="btn btn-sm btn-primary btn-update">Edit</a>

                <form action="{{url('prestasi-dashboard/'.$prestasi->id)}}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-sm btn-danger btn-delete" type="submit"
                        onclick="return confirm('Yakin akan menghapus data ?')">Delete</button>
                </form>

            </td>


        </tr>
        @endforeach
    </table>

    {{ $prestasis->links() }}

    @endsection
