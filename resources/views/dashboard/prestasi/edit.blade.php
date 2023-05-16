@extends('dashboard.layouts.main')
@section('container')
<h3>EDIT PRESTASI</h3>
<div class="row">
    <div class="col-md-6">
        <form action="/prestasi-dashboard/{{ $prestasi->id }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label class="form-label">Prestasi</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                value="{{ old('nama',$prestasi->nama) }}">

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
