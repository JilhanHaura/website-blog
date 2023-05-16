@extends('dashboard.layouts.main')
@section('container')
<h3>ENTRI GALERI</h3>
<div class="row">
    <div class="col-md-6">
        <form action="/galeri-dashboard" method="POST">

            @csrf
            <div class="mb-3">
                <label class="form-label">GALLERY</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                value="{{ old('title') }}" >

                @error('title')
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
