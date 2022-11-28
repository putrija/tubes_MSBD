@extends('layouts.navbar')
@section('link_css')
<link rel="stylesheet" href="css_siswa/untuk_siswa.css">
@stop
@section('konten')
<div class="row kontainer_navbar_siswa">
<nav class="navbar navbar-expand-lg navbar_siswa justify-content-start">
    <div class="container" style="margin-left: 20px; padding:0px;">
      <button class="navbar-toggler" type="button" style="margin-top:-2px" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" style="margin-top:-2px"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" style="" id="navbarScroll">
        <ul class="navbar-nav navbar-nav-scroll justify-content-between" style="--bs-scroll-height: 100px;width:100%;">
          <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Master Data</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Nilai</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Kelas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Mata Pelajaran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Absensi Harian</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Rekap Absensi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pesan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Pengumuman</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Peraturan</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div><!-- End Kontainer Navbar Siswa-->

<div class="row kontainer_konten">
  <div class="kontainer_panel_kiri col-md-6 col-sm-12">
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading"><h2>Detail Siswa</h2></div>
        <div class="panel-body">
          <style media="screen">
  .col-md-6{
  padding-bottom: 30px;
  }
  </style>
  <div class="col-md-6">
  <table class="table">
  <tbody><tr>
    <td>Nama Lengkap</td>
    <td>:</td>
    <td>Rizky Billar</td>
  </tr>
  <tr>
    <td>NISN</td>
    <td>:</td>
    <td>998585102</td>
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
  <a href="{{ route('editguru') }}"><button class="btn btn-primary">Edit</button></a>
  <a href="http://localhost/siakad/admin/siswa" class="btn btn-default">Kembali</a>
  </div>
        </div> <!-- end of class panel-body -->
      </div> <!-- end of class panel -->
    </div>
  </div> <!-- end of Kontainer Panel Kanan -->

  <div class="kontainer_panel_kanan d-flex align-items-center justify-content-center col-md-6 col-sm-12">
    <div class="col-md-6">
      <img src="/images/siswa/male.jpg" width="300px" class="img img-responsive" alt="">
    </div>
  </div> <!-- end of Kontainer Panel Kanan -->
</div> <!-- end of Kontainer Konten -->

<div class="kontainer_footer d-flex align-items-center justify-content-center" style="position: fixed; bottom:0px; background-color:#506d25; width:100%; height:40px; color:whitesmoke;">
  <p style="padding: 0px; margin:0px;">@Copyright SMAN 14 Medan</p>
</div>
@stop
