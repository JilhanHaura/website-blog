@extends('dashboard.layouts.main')
@section('container')
<h3>ENTRI KATEGORI</h3>
<div class="row">
    <div class="col-md-6">
        <form action="/kategori-dashboard" method="POST">

            @csrf
            <div class="mb-3">
                <label class="form-label">Kategori</label>
                <input type="text" class="form-control @error('kategori') is-invalid @enderror" name="nama">

                @error('kategori')
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
