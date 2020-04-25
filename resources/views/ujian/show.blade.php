@extends('layout/main')

@section('title','Detail Matakuliah')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header" style="background: darkslategray">
                    <h1 class="card-title text-light" style="text-align: center">Detail Matakuliah</h1>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Nama Mata Kuliah : {{$ujian->nama_mk }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Dosen Pengampu : {{$ujian->dosen}}</h6>
                    <p class="card-text">Jumlah Soal : {{$ujian->jumlah_soal}}</p>
                    <p class="card-text">Keterangan : {{$ujian->keterangan}}</p>
                    <a href="{{$ujian->id}}/edit" class="badge badge-primary">Edit</a>
                    <form action="/ujian/{{ $ujian->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="badge badge-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection