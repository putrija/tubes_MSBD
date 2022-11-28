@extends('layouts.navbar')
@section('link_css')
<link rel="stylesheet" href="css_siswa/untuk_siswa.css">
@stop
@section('konten')
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
@stop
