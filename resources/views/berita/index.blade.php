@extends('layouts.main')
@section('container')




<div class="row mt-3">
@if($beritas->count()>0)
<div class="card mb-3">
  <img src="https://source.unsplash.com/800x200?web" class="card-img-top" alt="...">
  <div class="card-body text-center">
    <h5 class="card-title" ><a href="/berita/{{$beritas[0]->id}}" class="text-decoration-none">{{$beritas[0]->title}}</h5></a>
    <p class="card-text">{{$beritas[0]->excerpt}}</p>
    <p class="card-text"><small class="text-muted">{{$beritas[0]->created_at->diffForHumans()}}</Last updated 3 mins ago</small></p>
    <a href="/berita/{{$beritas[0]->id}}" class="btn btn-primary">ReadMore</a>
  </div>
</div>
@endif


</div>
<div class="row">
    @foreach ($beritas->skip(1) as $berita)
    <div class="col-lg-3">
    <div class="card" style="width: 18rem;">
  <img src="https://source.unsplash.com/800x200?web" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><a href="/berita/{{$berita->id}}" class="text-decoration-none">{{ $berita->title }}</h5></a>
    <p class="card-text">{{ $berita->excerpt}}</p>
    <a href="/berita/{{$berita->id}}" class="btn btn-primary">ReadMore</a>
  </div>
</div>
</div>
    <!-- <div class="col-md-3">

        <div class="card" style="width: 19rem;">
            <div class="col-auto d-none d-lg-block">
                <svg class="bd-placeholder-img" xmlns="" role="img" aria-label="Placeholder: Thumbnail"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                        dy=".3em">Thumbnail</text>
                </svg>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $berita->title }}</h5>
                <p class="card-text">{{ $berita->excerpt}}</p>
                <a href="/berita/{{$berita->id}}" class="btn btn-primary">ReadMore</a>
            </div>
        </div>
    </div> -->
    @endforeach
</div>
    @endsection
