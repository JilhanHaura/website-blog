@extends('dashboard.layouts.main')
@section('container')
<h3>EDIT KATEGORI</h3>
<div class="row">
    <div class="col-md-6">
        <form action="/kategori-dashboard/{{ $kategori->id }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label class="form-label">Kategori</label>
                <input type="text" class="form-control @error('kategori') is-invalid @enderror" name="nama"
                    value="{{ old('kategori',$kategori->nama) }}">

                @error('kategori')
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
