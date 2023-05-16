@extends('dashboard.layouts.main')
@section('container')
<h3>EDIT DATA DOSEN</h3>
<div class="row">
    <div class="col-md-6">
        <form action="/dosen-dashboard/{{$dosens->id}}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label class="form-label">NIP</label>
                <input type="text" class="form-control @error('nip') is-invalid @enderror" name="nip"
                    value="{{$dosens->nip}}">

                @error('nim')
                {{$message}}
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                    value="{{ old('nama',$dosens->nama) }}">

                @error('nama')
                {{$message}}
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label> <br>
                <div class="form-check form-check-inline @error('jenis_kelamin') is-invalid @enderror">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="L"
                        {{ old('jenis_kelamin',$dosens->jenis_kelamin=='L' ? 'checked':'') }} checked>
                    <label class="form-check-label">Laki-Laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="P"
                        {{ old('jenis_kelamin',$dosens->jenis_kelamin=='P' ? 'checked':'') }}>
                    <label class="form-check-label">Perempuan</label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Status</label> <br>
                <div class="form-check form-check-inline ">
                    <input class="form-check-input @error('status') is-invalid @enderror" type="radio" name="status"
                    value="aktif"  {{ old('status',$dosens->status=='Aktif' ? 'checked':'') }}  checked>
                    <label class="form-check-label">Aktif</label>
                </div>
                <div class="form-check form-check-inline ">
                    <input class="form-check-input @error('status') is-invalid @enderror" type="radio" name="status"
                    value="aktif" {{ old('status',$dosens->status=='Pasif' ? 'checked':'') }} checked>
                    <label class="form-check-label">Pasif</label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Jurusan</label>
                <select class="form-select" name="jurusan_id" aria-label="Default select example">
                    @foreach($jurusans as $jurusan)
                        @if (old('jurusan_id',$dosens->jurusan_id)==$jurusan->id)
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
                <label class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" rows="3">
                {{old('alamat',$dosens->alamat)}}</textarea>
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
