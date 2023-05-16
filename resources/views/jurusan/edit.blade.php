@extends('layouts.main')
@section('container')
<h3>EDIT DATA MAHASISWA</h3>
<div class="row">
    <div class="col-md-6">
        <form action="/jurusan/{{ $jurusan->id }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label class="form-label">Nama Jurusan</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                    value="{{ old('nama',$jurusan->nama) }}">

                @error('nama')
                {{$message}}
                @enderror
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>

        </form>
    </div>
</div>

@endsection
