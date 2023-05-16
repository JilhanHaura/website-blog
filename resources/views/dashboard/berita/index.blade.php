@extends('dashboard.layouts.main')
@section('container')


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Berita</h1>
</div>

<div class="container  mt-3 p-4 bg-white">
    <h1 class="mb-3 text-center ">BERITA</h1>
    @if (session()->has('pesan'))
    <div class="alert alert-success" role="alert">
        {{session('pesan')}}
        @endif
    </div>
    <p>
        <a href="/berita-dashboard/create" class="btn btn-success ">Tambah Data Berita</a>
    <p>
    <table class="table  ">
        <thead class="table-success table-gradient">
            <tr>
                <th>No</th>
                <th>Tittle</th>
                <th>Kategori</th>
                <th>Author</th>
                <th>Created At</th>
                <th>Action</th>
        </thead>
        </tr>
        @foreach ($beritas as $berita)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $berita->title }}</td>
            <td>{{ is_null($berita->kategori)?'-': $berita->kategori->nama }}</td>
            <td>{{ $berita->user->name }}</td>
            <td>{{ $berita->created_at}}</td>

            <td>
                {{-- <a href="{{url('berita-dashboard/'.$berita->id.'/edit')}}" class="btn btn-sm btn-primary btn-update">Edit</a> --}}

                <form action="{{url('berita-dashboard/'.$berita->id)}}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-sm btn-danger btn-delete" type="submit"
                        onclick="return confirm('Yakin akan menghapus data ?')">Delete</button>
                </form>

            </td>


        </tr>
        @endforeach
    </table>

    {{ $beritas->links() }}



    @endsection

