@extends('dashboard.layouts.main')
@section('container')
<h3>ENTRI BERITA</h3>
<div class="row">
    <div class="col-md-6">
        <form action="/berita-dashboard" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Tittle</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title">

                @error('title')
                    {{$message}}
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Kategori</label>

                <select class="form-select" name="kategori_id" aria-label="Default select example">
                @foreach($kategoris as $kategori)
                <option value="{{$kategori->id}}">{{$kategori->nama}}</option>
                @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Body</label>
                <textarea class="form-control" name="body" rows="3"></textarea>
                @error('body')
                    {{$message}}
                @enderror
            </div>

            {{-- <div class="mb-3">
                <label class="form-label">Author</label>
                <input type="text" class="form-control @error('user') is-invalid @enderror" name="user">

                @error('user')
                    {{$message}}
                @enderror
            </div> --}}
            {{-- <div class="mb-3">
                <label class="form-label">Created At</label>
                <textarea class="form-control" name="created_at" rows="3"></textarea>
                @error('created_at')
                    {{$message}}
                @enderror
            </div> --}}
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>

        </form>
    </div>
</div>

@endsection
