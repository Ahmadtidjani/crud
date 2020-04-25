@extends('layout/main')

@section('title','Daftar Matakuliah')

@section('container')
<div class="container">
    <div class="">
        <div class="">
            <a href="/ujian/create" class="btn btn-success my-3"> Tambah Matakuliah</a>

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <!-- <ul class="list-group">
            @foreach($ujian as $un) 
                <li class="list-group-item d-flex justify-content-between align-items-center">                   
                    {{$un->nama_mk }}
                    <a href="/ujian/{{$un->id}}" class="badge badge-info">detail</a>
                </li>    
            @endforeach           
            </ul> -->
            <div class="card">
                <div class="card-header" style="background: darkslategray">
                    <h3 class="card-title text-light" style="text-align: center">DAFTAR MATAKULIAH STMIK BUMIGORA</h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">no</th>
                                <th scope="col">Nama MK</th>
                                <th scope="col">Dosen</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ujian as $un)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$un->nama_mk}}</td>
                                <td>{{$un->dosen}}</td>
                                <td>
                                    <a href="/ujian/{{$un->id}}" class="badge badge-secondary">detail</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>
</div>

@endsection