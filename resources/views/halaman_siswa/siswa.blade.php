@extends('layouts.navbar')
@section('link_css')
<link rel="stylesheet" href="css_siswa/untuk_siswa.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('konten')
<nav class="navbar_siswa navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ekstrakurikuler
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Daftar</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Nilai</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<h2 class="detail_mahasiswa">Detail Siswa</h2>

<div class="row kontainer_konten" style="z-index: 1">
  <div class="kontainer_panel_kiri col-md-6 col-sm-12">
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading"></div>
        <div class="panel-body">
          <style media="screen">
  .col-md-6{
  padding-bottom: 30px;
  }
  </style>
  <div class="col-md-6">
  <table class="table">
  <tbody><tr>
    {{-- @foreach ($dataku as $data)
        {{ $data->nis }}
    @endforeach --}}
    <td>Nama Lengkap</td>
    <td>:</td>
    <td>Rizky Billar</td>
  </tr>
  <tr>
    <td>NISN</td>
    <td>:</td>
    <td>{{ $dataku->nis }}</td>
  </tr>
  <tr>
    <td>NIS</td>
    <td>:</td>
    <td>123948</td>
  </tr>
  <tr>
    <td>Kelas</td>
    <td>:</td>
    <td>11</td>
  </tr>
  <tr>
    <td>Rombel</td>
    <td>:</td>
    <td>11 Ak2</td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td>L</td>
  </tr>
  </tbody></table>
  <br>
  <a href="guru/edit"><button class="btn btn-primary">Edit</button></a>
  <a href="/landing" class="btn btn-default">Kembali</a>
  </div>
        </div> <!-- end of class panel-body -->
      </div> <!-- end of class panel -->
    </div>
  </div> <!-- end of Kontainer Panel Kanan -->

  <div class="kontainer_panel_kanan d-flex align-items-center justify-content-center col-md-6 col-sm-12 order-first">
    <div class="col-md-6">
      <img src="/images/almetusu.jpg" width="300px" class="img img-responsive" alt="">
    </div>
  </div> <!-- end of Kontainer Panel Kanan -->
</div> <!-- end of Kontainer Konten -->

<div class="kontainer_footer d-flex align-items-center justify-content-center" style="position: fixed; bottom:0px; background-color:#5f9446; width:100%; height:40px; color:whitesmoke;">
  <p style="padding: 0px; margin:0px;">Copyright © SMAN 14 Medan 2022</p>
</div>
@endsection

@section('link_js')
{{-- <script src="js_siswa/untuk_siswa.js"></script> --}}
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> --}}
@endsection
