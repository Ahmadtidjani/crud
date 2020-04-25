@extends('layout/main')

@section('title','Form Ubah Data Matakuliah')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-header" style="background: darkslategray">
                    <h1 class="card-title text-light" style="text-align: center">Form Ubah Data Matakuliah !</h1>
                </div>
                <div class="card-body">
                    <form method='post' action="/ujian/{{$ujian->id}}">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label for="nama_mk">Nama MK</label>
                            <input type="text" class="form-control @error('nama_mk') is-invalid @enderror" id="nama_mk" placeholder="Masukan Mata Kuliah" name="nama_mk" value="{{$ujian->nama_mk}}">
                            @error('nama_mk')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group">
                            <label for="dosen">Nama Dosen</label>
                            <input type="text" class="form-control  @error('dosen') is-invalid @enderror" id="dosen" placeholder="Masukan Nama Dosen" name="dosen" value="{{$ujian->dosen}}">
                            @error('dosen')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group">
                            <label for="jumlah_soal">Jumlah Soal</label>
                            <input type="number" class="form-control  @error('jumlah_soal') is-invalid @enderror" id="jumlah_soal" placeholder="Masukan Jumlah Soal" name="jumlah_soal" value="{{$ujian->jumlah_soal}}">
                            @error('jumlah_soal')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea class="form-control" id="keterangan  @error('keterangan') is-invalid @enderror" rows="2" name="keterangan" value="">{{$ujian->keterangan}}</textarea>
                            @error('keterangan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                    </form>
                </div>
            </div>




        </div>
    </div>
</div>

@endsection