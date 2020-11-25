@extends('master.html')
@section('title')
Tambah Data 
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('bootstrap-4.4.1-dist/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/form.css') }}">
@endsection
@section('body')

<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <span>Tambah Data Siswa</span>
        </div>
        <div class="card-body">
            <form action="{{ url('/change/'.$tampil->id) }}" method="post">
                @csrf 
                @method('PUT')
                <div class="form-group">
                    <label for="nama">Nama :</label>
                    <input type="text" name="nama" class="form-control" id="nama" value="{{ $tampil->nama }}">
                </div>
                <div class="form-group">
                    <label for="kelas">Kelas :</label>
                    <input type="text" name="kelas" id="kelas" class="form-control" value="{{ $tampil->kelas }}">
                </div>
                <div class="form-group">
                    <label for="nomor">Nomor :</label>
                    <input type="number" name="nomor" id="nomor"  class="form-control" value="{{ $tampil->nomor }}">
                </div>
                <button class="btn btn-primary" type="submit" name="submit">Save</button>
                <a href="/" class="btn btn-danger">Back</a>
            </form>
        </div>
    </div>
</div>

@endsection