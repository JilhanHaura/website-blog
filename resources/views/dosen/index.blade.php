@extends('layouts.main')
@section('container')





<div class="container mt-3 p-4 bg-white">
    <h1 class="mb-3 text-center ">DAFTAR DOSEN</h1>
    @if (session()->has('pesan'))
    <div class="alert alert-success" role="alert">
        {{session('pesan')}}
        @endif
    </div>

</div>
<div class="row">
    @foreach ($dosens as $dosen)
    <div class="col-lg-3">
    <div class="card" style="width: 18rem;">
  <img src="https://images.unsplash.com/photo-1606413712024-0df0371d35a9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8b3Jhbmd8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><a href="/dosen/{{$dosen->id}}" class="text-decoration-none">{{ $dosen->nama }}</h5></a>
    <p class="card-text">NIP : {{$dosen->nip}}</p>
    <a href="/dosen/{{$dosen->id}}" class="btn btn-dark ">Next</a>
  </div>
</div>
</div>

    @endforeach
</div>
    @endsection
