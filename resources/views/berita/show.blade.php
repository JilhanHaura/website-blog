@extends('layouts.main')
@section('container')


<div class="row mt-4">

    <div class="col-lg-8">
        <img src="https://source.unsplash.com/800x200?" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $berita->title }} </h5></a>
            <article>{{!! $berita->body !!}}</article>
            <a href="/berita" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>

</div>

@endsection
