@extends('dashboard.layouts.main')
@section('container')
<h3>EDIT GALERI</h3>
<div class="row">
    <div class="col-md-6">
        <form action="/galeri-dashboard/{{ $galeri->id }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label class="form-label">galeri</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                value="{{ old('title',$galeri->title) }}">

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
