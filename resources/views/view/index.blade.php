@extends('master.html')
@section('title')
Dashboard
@endsection
@section('css')
<link rel="stylesheet" href=" {{ asset('bootstrap-4.4.1-dist/css/bootstrap.min.css') }} ">
@endsection
@section('body')


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <a href="#" class="navbar-brand">Basis Data</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDown">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarDown">
        <div class="navbar-nav mr-auto">
            <a href="#" class="nav-item nav-link">Home</a>
            <a href="#" class="nav-item nav-link">Home</a>
            <a href="#" class="nav-item nav-link">Home</a>
            <a href="#" class="nav-item nav-link">Home</a>
        </div>
        <div class="d-inline m-1">
            <button class="btn btn-primary btn-block">Login</button>
        </div>
        <div class="d-inline m-1">
            <button class="btn btn-success btn-block">Signup</button>
        </div>
    </div>
</nav>

<!-- Tampilan Body -->

<div class="container p-3">
<!-- Bungkus table agar responsive -->
<a href="{{route('form')}}" class="btn btn-primary">Tambah Data</a>
<div class="table-responsive mt-3">
    <!-- Membuat Table -->
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <!-- Untuk Header -->
        <tr class="bg-info text-light">
            <td>No</td>
            <td>Nama</td>
            <td>Kelas</td>
            <td>Nomor</td>
            <td>Aksi</td>
        </tr>
        </thead>
        <!-- untuk data -->
        <tbody>
            @foreach($tampil as $item)
                <tr>
                    <td>{{ ++$nomor }}</td>
                    <td>{{ $item->nama}}</td>
                    <td>{{ $item->kelas }}</td>
                    <td>{{ $item->nomor }}</td>
                    <td> 
                    <div class="button-group">
                        <form class="d-inline" action="{{ url('/delete/'.$item->id) }}" method="post">
                            @csrf 
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                        <a href="{{ url('/change/'.$item->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</div>

<script src="jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>

@endsection