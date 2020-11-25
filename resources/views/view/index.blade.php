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
<div class="table-responsive">
    <!-- Membuat Table -->
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <!-- Untuk Header -->
        <tr class="bg-info">
            <td>No</td>
            <td>Nama</td>
            <td>Kelas</td>
            <td>Nomor</td>
        </tr>
        </thead>
        <!-- untuk data -->
        <tbody>
            <tr>
                <td>1</td>
                <td>Ahmad Fadhlullah</td>
                <td>Junior Web Programming</td>
                <td>081293828747</td>
            </tr>
        </tbody>
    </table>
</div>

</div>

<script src="jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>

@endsection