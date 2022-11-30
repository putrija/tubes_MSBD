@extends('layouts.navbar')
@section('konten')
<link rel="stylesheet" href="css_guru/css_guru.css">

<div class="row" style="padding: 50px">
  <div class="column">
      <table class="table">
      <tbody><tr>
        <td>Nama Lengkap</td>
        <td>:</td>
        <td>Jungkook BTS</td>
      </tr>
      <tr>
        <td>NIP</td>
        <td>:</td>
        <td>9985856331</td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td>L</td>
      </tr>
      <tr>
        <td>Tempat Lahir</td>
        <td>:</td>
        <td>Medan</td>
      </tr>
      <tr>
        <td>Tanggal Lahir</td>
        <td>:</td>
        <td>01 September 1997</td>
      </tr>
      <tr>
        <td>Status Kepegawaian</td>
        <td>:</td>
        <td>PNS</td>
      </tr>
      <tr>
        <td>Jenis PTK</td>
        <td>:</td>
        <td>Guru Mapel</td>
      </tr>
      <tr>
        <td>Agama</td>
        <td>:</td>
        <td>Katolik</td>
      </tr>
      <tr>
        <td>No Telepon</td>
        <td>:</td>
        <td>L</td>
      </tr>
      <tr>
        <td>Email</td>
        <td>:</td>
        <td>L</td>
      </tr>
      <tr>
        <td>Status Pernikahan</td>
        <td>:</td>
        <td>L</td>
      </tr>
      </tbody></table>
  </div>
  <div class="column">
    <div style="display:flex;justify-content:center">
      <div>
    <img src="/images/siswa/male.jpg" width="300px" alt="" class="img img-responsive" style="margin:auto">
    <br>
    <div style="margin-top: 50px;">
    <a href="{{ route('edit_guru') }}"><button class="btn btn-primary">Edit</button></a>
    <a href="http://localhost/siakad/admin/siswa" class="btn btn-default">Kembali</a>
  </div>
  </div>
    
  </div>
  </div>
</div>

@endsection