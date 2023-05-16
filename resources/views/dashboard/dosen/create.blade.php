@extends('dashboard.layouts.main')
@section('container')
<h3>ENTRI DATA DOSEN</h3>
<div class="row">
    <div class="col-md-6">
        <form action="/dosen-dashboard" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">NIP</label>
                <input type="text" class="form-control @error('nip') is-invalid @enderror" name="nip"
                value="{{ old('nip') }}" >

                @error('nip')
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
                <div class="form-check form-check-inline ">
                    <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" type="radio" name="jenis_kelamin"
                    value="L" {{ old('jenis_kelamin') }} checked>
                    <label class="form-check-label">Laki-Laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" type="radio" name="jenis_kelamin" value="P">
                    <label class="form-check-label">Perempuan</label>
                </div>

                @error('jenis_kelamin')
                    {{$message}}
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Status</label> <br>
                <div class="form-check form-check-inline ">
                    <input class="form-check-input @error('status') is-invalid @enderror" type="radio" name="status"
                    value="aktif" {{ old('status') }} checked>
                    <label class="form-check-label">Aktif</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input @error('status') is-invalid @enderror" type="radio" name="status" value="pasif">
                    <label class="form-check-label">Pasif</label>
                </div>

                @error('status')
                    {{$message}}
                @enderror
            </div>


            <div class="mb-3">
                <label class="form-label">Jurusan</label>
                <select class="form-select @error('jurusan_id') is-invalid @enderror" name="jurusan_id" aria-label="Default select example">
                    @foreach($jurusans as $jurusan)
                    <option value="{{ $jurusan->id }}"> {{$jurusan->nama}}</option>
                    @endforeach
                </select>

                @error('jurusan_id')
                    {{$message}}
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label ">Alamat</label>
                <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" rows="3"></textarea>
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
