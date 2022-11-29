@extends('layouts.navbar')
@section('konten')

<div class="row">
  <div class="panel panel-default">
    <div class="panel-heading">

      Nilai          </div>
    <div class="panel-body">
      <script type="text/javascript">
$(function(){
$("select[name=kelas]").change(function(){
var kelas = $("select[name=kelas] option:selected").val();
var element = $("select[name=mapel]");

$("select[name=mapel] > option").remove();
element.append("<option value=''>-- Pilih Mata Pelajaran -- </option>");

if (kelas == "") {
  sweetAlert('Oops!', 'Mohon pilih kelas terlebih dahulu!', 'error');
} else {
  $.ajax({
    method    : "POST",
    url       : "result.php?q=kelas",
    cache     : false,
    async     : true,
    data      : {
      kelas : kelas
    },
    success   : function(cb){
      var mapel = JSON.parse(cb);

      $.each(mapel, function(i,n){
        element.append("<option value='"+n.id+"'>"+n.nama_mapel+"</option>");
      });
    }
  });
}
});

$("select[name=mapel]").click(function(){
var kelas = $("select[name=kelas] option:selected").val();

if (kelas == "") {
  sweetAlert('Oops!', 'Mohon pilih kelas terlebih dahulu!', 'error');
}
});
});
</script>
<div class="col-md-12">
<div class="row">
<div class="col-md-8">
<div id="select">
  <form class="form-group" action="http://localhost/siakad/admin/result-nilai" method="post">
    <label for="nilai">Pilih Jenis Nilai</label>
    <select class="form-control" name="nilai" disabled="">
      <option value="">-- Pilih Jenis Nilai --</option>
      <option value="harian">Nilai Harian</option>
      <option value="uas">Nilai UAS</option>
      <option value="uts">Nilai UTS</option>
      <option value="rapot" selected="">Nilai Rapot</option>
    </select>
    <br>

    <label for="kelas">Kelas</label>
    <select class="form-control" name="kelas" id="kelas">
      <option value="">-- Pilih Kelas --</option>
                  <option value="10 AK1">10 AK1</option>
                <option value="10 AK2">10 AK2</option>
                <option value="10 AK3">10 AK3</option>
                <option value="10 AK4">10 AK4</option>
                <option value="10 AP1">10 AP1</option>
                <option value="10 AP2">10 AP2</option>
                <option value="10 AP3">10 AP3</option>
                <option value="10 AP4">10 AP4</option>
                <option value="10 MM1">10 MM1</option>
                <option value="10 MM2">10 MM2</option>
                <option value="10 PB1">10 PB1</option>
                <option value="10 PB2">10 PB2</option>
                <option value="10 PM1">10 PM1</option>
                <option value="10 PM2">10 PM2</option>
                <option value="10 UPW">10 UPW</option>
                <option value="11 AK1">11 AK1</option>
                <option value="11 AK2">11 AK2</option>
                <option value="11 AK3">11 AK3</option>
                <option value="11 AK4">11 AK4</option>
                <option value="11 AP1">11 AP1</option>
                <option value="11 AP2">11 AP2</option>
                <option value="11 AP3">11 AP3</option>
                <option value="11 AP4">11 AP4</option>
                <option value="11 MM1">11 MM1</option>
                <option value="11 MM2">11 MM2</option>
                <option value="11 PB1">11 PB1</option>
                <option value="11 PB2">11 PB2</option>
                <option value="11 PM1">11 PM1</option>
                <option value="11 PM2">11 PM2</option>
                <option value="11 UPW">11 UPW</option>
                <option value="12 AK1">12 AK1</option>
                <option value="12 AK2">12 AK2</option>
                <option value="12 AK3">12 AK3</option>
                <option value="12 AK4">12 AK4</option>
                <option value="12 AP1">12 AP1</option>
                <option value="12 AP2">12 AP2</option>
                <option value="12 AP3">12 AP3</option>
                <option value="12 MM1">12 MM1</option>
                <option value="12 MM2">12 MM2</option>
                <option value="12 PM1">12 PM1</option>
                <option value="12 PM2">12 PM2</option>
                <option value="12 UPW">12 UPW</option>
    
    </select>
    <br>

    <label for="mapel">Mata Pelajaran</label>
    <select class="form-control" name="mapel" id="mapel">
      <option value="">-- Pilih Mata Pelajaran --</option>
    </select>
    <br>

    <input type="submit" name="submit" value="Lihat Nilai" class="btn btn-primary">
  </form>
</div>
</div> <!-- end of class col md 8 -->
<div class="col-md-4">
<div class="panel panel-primary">
  <div class="panel-heading" style="font-weight:normal;font-size:15px;">
    Petunjuk
  </div>
  <div class="panel-body">
    <ul class="list-group">
      <li class="list-group-item">1. Pilih jenis nilai yang akan dilihat</li>
      <li class="list-group-item">2. Pilih kelas dan mata pelajaran</li>
      <li class="list-group-item">3. Kemudian <strong>Klik</strong> tombol  <strong>Lihat Nilai</strong></li>
      <li class="list-group-item">4. Setelah itu nilai akan muncul otomatis dibawah</li>
    </ul>
  </div>
</div>
</div>
</div> <!-- end of class row -->
</div> <!-- end of class col md 12 -->
    </div> <!-- end of class panel-body -->
  </div> <!-- end of class panel -->
</div>

@endsection