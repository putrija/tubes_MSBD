@extends('layouts.navbar')
@section('konten')

  <div class="row">
    <div class="panel panel-default">
      <div class="panel-heading">Detail Guru</div>
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
<br>
<a href="http://localhost/siakad/admin/edit-siswa/1" class="btn btn-primary">Edit</a>
<a href="http://localhost/siakad/admin/siswa" class="btn btn-default">Kembali</a>
</div>
<div class="col-md-6">

  <img src="http://localhost/siakad/images/siswa/male.jpg" width="300px" class="img img-responsive" alt="">
</div>
      </div> <!-- end of class panel-body -->
    </div> <!-- end of class panel -->
  </div>
  @endsection