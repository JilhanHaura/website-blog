@extends('layouts.main')
@section('container')
<h3>EDIT DATA MAHASISWA</h3>
<div class="row">
    <div class="col-md-6">
        <form action="/mahasiswa/{{ $mahasiswas->id }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label class="form-label">NIM</label>
                <input type="text" class="form-control @error('nim') is-invalid @enderror" name="nim"
                    value="{{ old('nim',$mahasiswas->nim) }}">

                @error('nim')
                {{$message}}
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                    value="{{ old('nama',$mahasiswas->nama) }}">

                @error('nama')
                {{$message}}
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label> <br>
                <div class="form-check form-check-inline @error('nama') is-invalid @enderror">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="L"
                        {{ old('jenis_kelamin',$mahasiswas->jenis_kelamin=='L' ? 'checked':'') }} checked>
                    <label class="form-check-label">Laki-Laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="P"
                        {{ old('jenis_kelamin',$mahasiswas->jenis_kelamin=='P' ? 'checked':'') }}>
                    <label class="form-check-label">Perempuan</label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Jurusan</label>
                <select class="form-select" name="jurusan_id" aria-label="Default select example">
                    @foreach($jurusans as $jurusan)
                        @if (old('jurusan_id',$mahasiswas->jurusan_id)==$jurusan->id)
                        <option value="{{ $jurusan->id }}" selected> {{$jurusan->nama}}</option>
                        @else
                        <option value="{{ $jurusan->id }}"> {{$jurusan->nama}}</option>
                        @endif
                    @endforeach
                </select>
                @error('jurusan_id')
                {{message}}
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Prestasi</label>
                <select class="form-select" name="nama" aria-label="Default select example">
                    @foreach($prestasis as $prestasi)
                        @if (old('nama',$prestasis->nama)==$prestasi->id)
                        <option value="{{ $prestasi->id }}" selected> {{$prestasi->nama}}</option>
                        @else
                        <option value="{{ $prestasi->id }}"> {{$prestasi->nama}}</option>
                        @endif
                    @endforeach
                </select>
                @error('nama')
                {{message}}
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Angkatan</label>
                <input type="text" class="form-control @error('angkatan') is-invalid @enderror" name="angkatan"
                    value="{{ old('nama',$mahasiswas->angkatan) }}">

                @error('nama')
                {{$message}}
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" rows="3">
                {{old('alamat',$mahasiswas->alamat)}}</textarea>
                @error('alamat')
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
