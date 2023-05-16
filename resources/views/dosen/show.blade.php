@extends('layouts.main')
@section('container')

{{-- <div class="row mt-4">

    <div class="col-lg-8">
        <img src="https://source.unsplash.com/800x200?web" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $dosen->nama }} </h5></a>
            <article>{{!! $dosen->nip !!}}</article>
            <a href="/dosen" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>

</div> --}}
{{-- @dd($dosen->jurusan_id) --}}
<div class="row mt-4">

    <div class="col-lg-8">
        <img src="" class="card-img-top" alt="...">
<div class="row">
    <div class="col-md-4">
        <div style="border:1px solid #DADADA; margin-bottom:20px;">
            <img src="not-exists" alt="" width="100%">
        </div>
    </div>
    <div class="col-md-8">
        <div id="view">
            <div class="view_label">Nama</div>
            <div class="view_dot">:</div>
            <div class="view_content"><a href="/dosen/{{$dosen->id}}" class="text-decoration-none">{{ $dosen->nama }}</a></div>
        </div>
        <div id="view">
            <div class="view_label">NIP</div>
            <div class="view_dot">:</div>
            <div class="view_content">{{$dosen->nip}}</div>
        </div>
        <div id="view">
            <div class="view_label">Jenis Kelamin</div>
            <div class="view_dot">:</div>
            <div class="view_content">{{$dosen->jenis_kelamin}}</div>
        </div>
        <div id="view">
            <div class="view_label">Status</div>
            <div class="view_dot">:</div>
            <div class="view_content">{{$dosen->status}}</div>
        </div>
        <div id="view">
            <div class="view_label">Jurusan</div>
            <div class="view_dot">:</div>
            <div class="view_content"><a href="/jurusan/{{ is_null($dosen->jurusan)?'-':$dosen->jurusan->id}}" class="text-decoration-none">{{ is_null($dosen->jurusan)?'-':$dosen->jurusan->nama}}</a></div>
        </div>

        <div id="view">
            <div class="view_label">Jenis Kelamin</div>
            <div class="view_dot">:</div>
            <div class="view_content">{{$dosen->jenis_kelamin}}</div>
        </div>
        <div id="view">
            <div class="view_label">Alamat</div>
            <div class="view_dot">:</div>
            <div class="view_content">{{$dosen->alamat}}</div>
        </div>
        <a href="/dosen" class="btn btn-primary">Back</a>
    </div>
</div></div>   </div>
</div>
@endsection
