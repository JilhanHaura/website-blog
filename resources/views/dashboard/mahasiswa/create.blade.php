@extends('dashboard.layouts.main')
@section('container')
<h3>ENTRI DATA MAHASISWA</h3>
<div class="row">
    <div class="col-md-6">
        <form action="/mahasiswa-dashboard" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">NIM</label>
                <input type="text" class="form-control @error('nim') is-invalid @enderror" name="nim"
                value="{{ old('nim') }}" >

                @error('nim')
                    {{$message}}
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                value="{{ old('nama') }}" >

                @error('nama')
                    {{$message}}
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label> <br>
                <div class="form-check form-check-inline @error('nama') is-invalid @enderror">
                    <input class="form-check-input" type="radio" name="jenis_kelamin"
                    value="L" {{ old('jenis_kelamin') }} checked>
                    <label class="form-check-label">Laki-Laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="P">
                    <label class="form-check-label">Perempuan</label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Jurusan</label>
                <select class="form-select" name="jurusan_id" aria-label="Default select example">
                    @foreach($jurusans as $jurusan)
                    <option value="{{ $jurusan->id }}"> {{$jurusan->nama}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Prestasi</label>
                <select class="form-select" name="prestasi_id" aria-label="Default select example">
                    @foreach($prestasis as $prestasi)
                    <option value="{{ $prestasi->id }}"> {{$prestasi->nama}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Angkatan</label>
                <input type="text" class="form-control @error('angkatan') is-invalid @enderror" name="angkatan"
                    value="">

                @error('angkatan')
                {{$message}}
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" rows="3"></textarea>
                @error('alamat')
                    {{$message}}
                @enderror
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>

        </form>
    </div>
</div>

@endsection
