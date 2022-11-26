@extends('layouts.navbar')
@section('konten')

<div class="container">
<div class="row">
  <div class="panel panel-default">
    <div class="panel-heading">

      Edit Guru          </div>
    <div class="panel-body">
      
<style media="screen">
.col-md-6{
padding-bottom: 30px;
}
</style>
<div class="col-md-12">
<h3>Edit Data Siswa</h3>
<hr>
<div class="col-md-6">
<form action="" method="post" class="form-group" enctype="multipart/form-data"><label for="nama">Nama Siswa</label><input type="text" name="nama" class="form-control" value="A Imam Taufik"><br><label for="nisn">Nomor Induk Siswa Nasional</label><input type="number" name="nisn" class="form-control" value="9985856331"><br><label for="nis">Nomor Induk Siswa</label><input type="number" name="nis" class="form-control" value="141510121"><br><label for="kelas">Kelas</label>      <select class="form-control" name="kelas">
  <option value="">-- Pilih Kelas --</option>

            <option value="10">X</option>
    <option value="11">XI</option>
    <option value="12" selected="">XII</option>
  
</select>
</form></div> <!-- end of class col-md-6 -->
<div class="col-md-6">
<label for="rombel">Anggota Rombel</label>
  <select name="rombel" class="form-control">
    <option value="">-- Pilih Rombongan Belajar --</option><option value="10 AK1">10 AK1</option><option value="10 AK2">10 AK2</option><option value="10 AK3">10 AK3</option><option value="10 AK4">10 AK4</option><option value="10 AP1">10 AP1</option><option value="10 AP2">10 AP2</option><option value="10 AP3">10 AP3</option><option value="10 AP4">10 AP4</option><option value="10 MM1">10 MM1</option><option value="10 MM2">10 MM2</option><option value="10 PB1">10 PB1</option><option value="10 PB2">10 PB2</option><option value="10 PM1">10 PM1</option><option value="10 PM2">10 PM2</option><option value="10 UPW">10 UPW</option><option value="11 AK2">11 AK2</option><option value="11 AK3">11 AK3</option><option value="11 AK4">11 AK4</option><option value="11 AP1">11 AP1</option><option value="11 AP2">11 AP2</option><option value="11 AP3">11 AP3</option><option value="11 AP4">11 AP4</option><option value="11 MM1">11 MM1</option><option value="11 MM2">11 MM2</option><option value="11 PB1">11 PB1</option><option value="11 PB2">11 PB2</option><option value="11 PM1">11 PM1</option><option value="11 PM2">11 PM2</option><option value="11 UPW">11 UPW</option><option value="12 AK1" selected="">12 AK1</option><option value="12 AK2">12 AK2</option><option value="12 AK3">12 AK3</option><option value="12 AK4">12 AK4</option><option value="12 AP1">12 AP1</option><option value="12 AP2">12 AP2</option><option value="12 AP3">12 AP3</option><option value="11 AK1">11 AK1</option><option value="12 PM1">12 PM1</option><option value="12 PM2">12 PM2</option><option value="12 MM2">12 MM2</option><option value="12 MM1">12 MM1</option><option value="12 UPW">12 UPW</option></select> <br><label for="jk">Jenis Kelamin</label>
  <select name="jk" class="form-control">
    <option value="">-- Pilih Jenis Kelamin --</option>
        <option value="L" selected="">Laki-Laki</option>
        <option value="P">Perempuan</option></select> <br><label for="foto">Foto</label><input type="file" name="foto" class="form-control"> <br> <br><input type="submit" name="submit" class="btn btn-primary" value="Simpan"> &nbsp; <a href="{{ route('guru') }}"><button class="btn btn-default">Kembali</button></a>   </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
$("#back").click(function() {
window.location='http://localhost/siakad/admin/siswa';
});
});
</script>

    </div> <!-- end of class panel-body -->
  </div> <!-- end of class panel -->
</div>
</div>
@endsection