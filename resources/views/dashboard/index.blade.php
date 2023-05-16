@extends('dashboard.layouts.main')
@section('container')


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
</div>
<div class="row text-white">
    <div class="card bg-info" style="width: 18rem;">
        <div class="card-body">
            <div class="card-body-icon">
            </div>
          <h5 class="card-title">JUMLAH MAHASISWA</h5>
          <div class="display-4">1.200</div>
          <a href="{{url('mahasiswa-dashboard')}}"> <p class="card-text text-white">Lihat Detail
           </p></a>
        </div>
      </div>&emsp;

      <div class="card bg-success" style="width: 18rem;">
        <div class="card-body">
            <div class="card-body-icon">
            </div>
          <h5 class="card-title">JUMLAH DOSEN</h5>
          <div class="display-4">180</div>
          <a href="{{url('dosen-dashboard')}}"> <p class="card-text text-white">Lihat Detail
           </p></a>
        </div>
      </div>&emsp;
      <div class="card bg-danger" style="width: 18rem;">
        <div class="card-body">
            <div class="card-body-icon">
            </div>
          <h5 class="card-title">BLOG</h5>
          <div class="display-4">80</div>
          <a href="{{url('berita-dashboard')}}"> <p class="card-text text-white">Lihat Detail
           </p></a>
        </div>
      </div>&emsp;
      <div class="card bg-warning" style="width: 18rem;">
        <div class="card-body">
            <div class="card-body-icon">
            </div>
          <h5 class="card-title">CONTACT</h5>
          <div class="display-4">240</div>
          <a href="{{url('kontak-dashboard')}}"> <p class="card-text text-white">Lihat Detail
           </p></a>
        </div>
      </div>
</div>


@endsection

