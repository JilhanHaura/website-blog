@extends('layouts.main')
@section('container')

{{-- <div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>

  @endsection --}}
  <div class="row">
  @foreach ($galeris as $galeri)
  <div class="col-lg-3">
  <div class="card" style="width: 18rem;">
<img src="https://sp-ao.shortpixel.ai/client/to_webp,q_glossy,ret_img,w_1024,h_683/https://www.pnp.ac.id/wp-content/uploads/2018/07/Barisan.jpg" class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title">{{ $galeri->title }}</h5>
  {{-- <a href="/berita/{{$galeri->id}}" class="btn btn-primary">ReadMore</a> --}}
</div>
</div>
</div>
@endforeach
@endsection
