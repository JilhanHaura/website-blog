@extends('layouts.main')
@section('container')
<h3>ENTRI DATA JURUSAN</h3>
<div class="row">
    <div class="col-md-6">
        <form action="/jurusan" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nama Jurusan</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                value="{{ old('nim') }}" >

                @error('nim')
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
