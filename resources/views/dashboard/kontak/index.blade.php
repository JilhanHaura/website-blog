@extends('dashboard.layouts.main')
@section('container')


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">CONTACT</h1>
</div>

<div class="container  mt-3 p-4 bg-white">
    <h1 class="mb-3 text-center ">CONTACT</h1>
    @if (session()->has('pesan'))
    <div class="alert alert-success" role="alert">
        {{session('pesan')}}
        @endif
    </div>
    {{-- <p>
        <a href="/kontak-dashboard/create" class="btn btn-primary ">Tambah Data Mahasiswa</a>
    <p> --}}
    <table class="table  ">
        <thead class="table-success table-gradient">
            <tr>
                <th>No</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Subject</th>
                <th>Action</th>
        </thead>
        </tr>
        @foreach ($kontaks as $kontak)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $kontak->namadepan }}</td>
            <td>{{ $kontak->namabelakang }}</td>
            <td>{{ $kontak->email }}</td>
            <td>{{ $kontak->nomortlp}}</td>
            <td>{{ $kontak->subjek }}</td>
            <td>
                {{-- <a href="{{url('kontak-dashboard/'.$kontak->id.'/edit')}}" class="btn btn-sm btn-primary btn-update">Edit</a> --}}

                <form action="{{url('kontak-dashboard/'.$kontak->id)}}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-sm btn-danger btn-delete" type="submit"
                        onclick="return confirm('Yakin akan menghapus data ?')">Delete</button>
                </form>

            </td>


        </tr>
        @endforeach
    </table>

    {{ $kontaks->links() }}



    @endsection
