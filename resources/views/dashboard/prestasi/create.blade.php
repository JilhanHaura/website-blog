@extends('dashboard.layouts.main')
@section('container')
<h3>ENTRI PRESTASI</h3>
<div class="row">
    <div class="col-md-6">
        <form action="/prestasi-dashboard" method="POST">

            @csrf
            <div class="mb-3">
                <label class="form-label">Prestasi</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                value="{{ old('nama') }}" >

                @error('nama')
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
