@extends('dashboard.layouts.main')
@section('container')


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dosen</h1>
</div>

<div class="container  mt-3 p-4 bg-white">
    <h1 class="mb-3 text-center ">DATA DOSEN</h1>
    @if (session()->has('pesan'))
    <div class="alert alert-success" role="alert">
        {{session('pesan')}}
        @endif
    </div>
    <p>
        <a href="/dosen-dashboard/create" class="btn btn-success ">Tambah Data Dosen</a>
    <p>
    <table class="table  ">
        <thead class="table-success table-gradient">
            <tr>
                <th>No</th>
                <th>Nip</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Status</th>
                <th>Jurusan</th>
                <th>Alamat</th>
                <th>Action</th>
        </thead>
        </tr>
        @foreach ($dosens as $dosen)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $dosen->nip }}</td>
            <td>{{ $dosen->nama }}</td>
            <td>{{ $dosen->jenis_kelamin }}</td>
            <td>{{ $dosen->status}}</td>
            <td>{{ is_null($dosen->jurusan)?'-':$dosen->jurusan->nama}}</td>
            <td>{{ $dosen->alamat }}</td>
            <td>
                <a href="{{url('dosen-dashboard/'.$dosen->id.'/edit')}}" class="btn btn-sm btn-primary btn-update">Edit</a>

                <form action="{{url('dosen-dashboard/'.$dosen->id)}}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-sm btn-danger btn-delete" type="submit"
                        onclick="return confirm('Yakin akan menghapus data ?')">Delete</button>
                </form>

            </td>


        </tr>
        @endforeach
    </table>

    {{ $dosens->links() }}



    @endsection
