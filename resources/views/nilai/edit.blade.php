@extends('layouts.navbar')
@section('konten')

<div class="row">
  <div class="panel panel-default">
    <div class="panel-heading">

      Hasil Nilai          </div>
    <div class="panel-body">
      <script type="text/javascript">
$(function(){
$("#main-data").dataTable({
'pageLength':45
});
$("#main-data_info").remove();
$("#main-data_length").remove();
$("#main-data_wrapper>.row:first-child >.col-sm-6:first-child").append('<a href="http://localhost/siakad/admin/nilai" class="btn btn-primary">Kembali</a> ');
$("#main-data_wrapper>.row:first-child >.col-sm-6:first-child").append(' <a href="javascript:document.location.reload(true);" class="btn btn-primary">Refresh  <span class="glyphicon glyphicon-refresh"></span></a>')

//Handle for update value
$(".btn_edit").click(function(){
var id = $(this).attr('data-id');
var id_rapot = $(this).attr('data-tbr');

var temp_pth_angka = $(".row_"+id+" > td:nth-child(3) ").text();
var temp_pth_predikat = $(".row_"+id+" > td:nth-child(4) ").text();
var temp_ktr_angka = $(".row_"+id+" > td:nth-child(5) ").text();
var temp_ktr_predikat = $(".row_"+id+" > td:nth-child(6) ").text();

//Hide element
$(".row_"+id+" > td:nth-child(3)").text('');
$(".row_"+id+" > td:nth-child(4)").text('');
$(".row_"+id+" > td:nth-child(5)").text('');
$(".row_"+id+" > td:nth-child(6)").text('');
$(".row_"+id+" > td:last-child > button").hide();

var inputForm = "<input type='number' oninput='maxChars(this, 2)' maxlength='2' class='form-control' style='width:60px !important;text-align:center;'>";
var disForm = "<input type='text' oninput='maxChars(this, 1)' maxlength='1' class='form-control' style='width:60px !important;text-align:center;' disabled>";
var btnSave = "<button type='button' class='btn btn-primary btn_save'><span class='glyphicon glyphicon-floppy-disk'></span></button> ";
var btnClose = "<button type='button' class='btn btn-default btn_close'><span class='glyphicon glyphicon-remove'></span></button>";

//Show the input form
$(".row_"+id+" > td:nth-child(3)").append(inputForm);
$(".row_"+id+" > td:nth-child(4)").append(disForm);
$(".row_"+id+" > td:nth-child(5)").append(inputForm);
$(".row_"+id+" > td:nth-child(6)").append(disForm);
$(".row_"+id+" > td:last-child").append(btnSave+" "+btnClose);

//Add class
$(".row_"+id+" > td:nth-child(3) > input").addClass('pth_agk_'+id);
$(".row_"+id+" > td:nth-child(4) > input").addClass('pth_pred_'+id);
$(".row_"+id+" > td:nth-child(5) > input").addClass('ktr_agk_'+id);
$(".row_"+id+" > td:nth-child(6) > input").addClass('ktr_pred_'+id);
$(".btn_save").addClass('btn_smpn_'+id);
$(".btn_close").addClass('btn_cls_'+id);

$(".pth_agk_"+id).val(temp_pth_angka);
$(".pth_pred_"+id).val(temp_pth_predikat);
$(".ktr_agk_"+id).val(temp_ktr_angka);
$(".ktr_pred_"+id).val(temp_ktr_predikat);

$(".pth_agk_"+id).keyup(function(){
  var pth_angka = $(this).val();
  if (pth_angka.length == 2) {
    if (pth_angka < 75) {
      $.ajax({
        method	:"POST",
        url 	: "cek.php?q=otr",
        cache 	: false,
        data 	: {
          core : "pth"
        },
        success	: function(cb){
          var data = jQuery.parseJSON(cb);
          $.each(data, function(i,n){
            if (n.predikat == "C") {
              $(".pth_pred_"+id).val(n.predikat);
            }
          });
        }
      });
    } else {
      $.ajax({
        method	: "POST",
        url 	: "cek.php?q=pth",
        data 	: {
          p_angka : pth_angka
        },
        success	: function(msg){
          var dt = jQuery.parseJSON(msg);
          $.each(dt, function(a,b){
            if (b.predikat == "A" || b.predikat == "B" || b.predikat == "C") {
              $(".pth_pred_"+id).val(b.predikat);	
            }
          })
        }
      })	
    }
  }
  if (pth_angka == "" || pth_angka.length == 1) {
    $(".pth_pred_"+id).val("");
  }
});

$(".ktr_agk_"+id).keyup(function(){
  var ktr_angka = $(this).val();

  if (ktr_angka.length == 2) {
    if (ktr_angka < 75) {
      $.ajax({
        method	: "POST",
        url 	: "cek.php?q=otr",
        cache 	: false,
        data 	: {
          core : "ktr"
        }, 
        success	: function(sms){
          var result = jQuery.parseJSON(sms);
          $.each(result, function(x,y){
            if (y.predikat == "C") {
              $(".ktr_pred_"+id).val(y.predikat);
            }
          })
        }
      })
    } else {
      $.ajax({
        method	: "POST",
        url		: "cek.php?q=ktr",
        cache 	: false,
        data 	: {
          k_angka : ktr_angka
        },
        success : function(rspn){
          var rslt = jQuery.parseJSON(rspn);
          $.each(rslt, function(u,v){
            if (v.predikat == "A" || v.predikat == "B" || v.predikat == "C") {
              $(".ktr_pred_"+id).val(v.predikat);
            }
          });
        }
      })
    }
  }
  if (ktr_angka == "" || ktr_angka.length == 1) {
    $(".ktr_pred_"+id).val('');
  }
})

$(".btn_smpn_"+id).click(function(){
  var pth_agk = $(".pth_agk_"+id).val();
  var pth_pred = $(".pth_pred_"+id).val();
  var ktr_agk = $(".ktr_agk_"+id).val();
  var ktr_pred = $(".ktr_pred_"+id).val();

  if (pth_agk == "" || pth_pred == "" || ktr_agk == "" || ktr_pred == "") {
    sweetAlert('Oops!', 'Form nilai tidak boleh ada yang kosong!', 'error');
  } else {
    //Starting ajax proccessing
    $.ajax({
      method	: "POST",
      url		: "cek.php?q=upd",
      cache	: false,
      data 	: {
        pth_agk : pth_agk,
        pth_pred : pth_pred,
        ktr_agk : ktr_agk,
        ktr_pred : ktr_pred,
        id_siswa : id,
        id_rpt : id_rapot
      },
      success	: function(ex){
        if (ex == 1) {
          //Hide the input form
          $(".row_"+id+" > td > input").remove();
          //Input the value
          $(".row_"+id+" > td:nth-child(3)").text(pth_agk);
          $(".row_"+id+" > td:nth-child(4)").text(pth_pred);
          $(".row_"+id+" > td:nth-child(5)").text(ktr_agk);
          $(".row_"+id+" > td:nth-child(6)").text(ktr_pred);

          //Hide the button
          $(".row_"+id+" > td:last-child > .btn_smpn_"+id).remove();
          $(".row_"+id+" > td:last-child > .btn_cls_"+id).remove();
          $(".row_"+id+" > td:last-child > .btn_upd_"+id).show();
        } else {
          sweetAlert('Oops!', 'Proses edit nilai tidak berhasil!', 'error');
        }
      }
    })
  }


});

$(".btn_cls_"+id).click(function(){
  var btnEdit = "<button type='button' class='btn btn-default btn_edit btn_upd_"+id+"' data-id='"+id +"'><span class='glyphicon glyphicon-pencil'></span></button>";
  //Hide form
  $(".row_"+id+" > input ").remove();
  $(".row_"+id+" > td:last-child > .btn_smpn_"+id).remove();
  $(".row_"+id+" > td:last-child > .btn_cls_"+id).remove();

  //Input old value
  $(".row_"+id+" > td:nth-child(3)").text(temp_pth_angka);
  $(".row_"+id+" > td:nth-child(4)").text(temp_pth_predikat);
  $(".row_"+id+" > td:nth-child(5)").text(temp_ktr_angka);
  $(".row_"+id+" > td:nth-child(6)").text(temp_ktr_predikat);
  $(".row_"+id+" > td:last-child > .btn_upd_"+id).show();
});
});

//Handle for add value (nilai)
$(".btn_add").click(function(){
var id = $(this).attr('data-id');

//Hide the text in the table field
$(".row_"+id+" > td:nth-child(3)").text('');
$(".row_"+id+" > td:nth-child(4)").text('');
$(".row_"+id+" > td:nth-child(5)").text('');
$(".row_"+id+" > td:nth-child(6)").text('');
$(".row_"+id+" > td:last-child > button").hide();

var inputForm = "<input type='number' oninput='maxChars(this, 2)' maxlength='2' class='form-control' style='width:60px !important;text-align:center;'>";
var disForm = "<input type='text' oninput='maxChars(this, 1)' maxlength='1' class='form-control' style='width:60px !important;text-align:center;' disabled>";
var btnSave = "<button type='button' class='btn btn-primary btn_save'><span class='glyphicon glyphicon-floppy-disk'></span></button> ";
var btnClose = "<button type='button' class='btn btn-default btn_close'><span class='glyphicon glyphicon-remove'></span></button>";
var btnEdit = "<button type='button' class='btn btn-default btn_edit btn_upd_"+id+"' data-id='"+id +"'><span class='glyphicon glyphicon-pencil'></span></button>";


$(".row_"+id+" > td:nth-child(3)").append(inputForm);
$(".row_"+id+" > td:nth-child(4)").append(disForm);
$(".row_"+id+" > td:nth-child(5)").append(inputForm);
$(".row_"+id+" > td:nth-child(6)").append(disForm);
$(".row_"+id+" > td:last-child ").append(btnSave+ btnClose);

//Add class
$(".row_"+id+" > td:nth-child(3) > input").addClass('pth_agk_'+id);
$(".row_"+id+" > td:nth-child(4) > input").addClass('pth_pred_'+id);
$(".row_"+id+" > td:nth-child(5) > input").addClass('ktr_agk_'+id);
$(".row_"+id+" > td:nth-child(6) > input").addClass('ktr_pred_'+id);
$(".btn_save").addClass('btn_smpn_'+id);
$(".btn_close").addClass('btn_cls_'+id);

$(".pth_agk_"+id).keyup(function(){
  var pth_angka = $(this).val();
  if (pth_angka.length == 2) {
    if (pth_angka < 75) {
      $.ajax({
        method	:"POST",
        url 	: "cek.php?q=otr",
        cache 	: false,
        data 	: {
          core : "pth"
        },
        success	: function(cb){
          var data = jQuery.parseJSON(cb);
          $.each(data, function(i,n){
            if (n.predikat == "C") {
              $(".pth_pred_"+id).val(n.predikat);
            }
          });
        }
      });
    } else {
      $.ajax({
        method	: "POST",
        url 	: "cek.php?q=pth",
        data 	: {
          p_angka : pth_angka
        },
        success	: function(msg){
          var dt = jQuery.parseJSON(msg);
          $.each(dt, function(a,b){
            if (b.predikat == "A" || b.predikat == "B" || b.predikat == "C") {
              $(".pth_pred_"+id).val(b.predikat);	
            }
          })
        }
      })	
    }
  }
  if (pth_angka == "" || pth_angka.length == 1) {
    $(".pth_pred_"+id).val("");
  }
});

$(".ktr_agk_"+id).keyup(function(){
  var ktr_angka = $(this).val();

  if (ktr_angka.length == 2) {
    if (ktr_angka < 75) {
      $.ajax({
        method	: "POST",
        url 	: "cek.php?q=otr",
        cache 	: false,
        data 	: {
          core : "ktr"
        }, 
        success	: function(sms){
          var result = jQuery.parseJSON(sms);
          $.each(result, function(x,y){
            if (y.predikat == "C") {
              $(".ktr_pred_"+id).val(y.predikat);
            }
          })
        }
      })
    } else {
      $.ajax({
        method	: "POST",
        url		: "cek.php?q=ktr",
        cache 	: false,
        data 	: {
          k_angka : ktr_angka
        },
        success : function(rspn){
          var rslt = jQuery.parseJSON(rspn);
          $.each(rslt, function(u,v){
            if (v.predikat == "A" || v.predikat == "B" || v.predikat == "C") {
              $(".ktr_pred_"+id).val(v.predikat);
            }
          });
        }
      })
    }
  }
  if (ktr_angka == "" || ktr_angka.length == 1) {
    $(".ktr_pred_"+id).val('');
  }
});

$(".btn_cls_"+id).click(function(){
  //Hide form
  $(".row_"+id+" > input ").remove();
  $(".row_"+id+" > td:last-child > .btn_close").remove();
  $(".row_"+id+" > td:last-child > .btn_save").remove();

  //Input old value
  $(".row_"+id+" > td:nth-child(3)").text('0');
  $(".row_"+id+" > td:nth-child(4)").text('-');
  $(".row_"+id+" > td:nth-child(5)").text('0');
  $(".row_"+id+" > td:nth-child(6)").text('-');
  $(".row_"+id+" > td:last-child > .btn_tmbh_"+id).show();
});

$(".btn_smpn_"+id).click(function(){
  //Get the data
  var pth_agk = $(".pth_agk_"+id).val();
  var pth_pred = $(".pth_pred_"+id).val();
  var ktr_agk = $(".ktr_agk_"+id).val();
  var ktr_pred = $(".ktr_pred_"+id).val();

  if (pth_agk == "" || pth_pred == "" || ktr_agk == "" || ktr_pred == "") {
    sweetAlert("Oops!", "Form nilai tidak boleh ada yang kosong!", "error");
  } else {
    $.ajax({
      method	: "POST",
      url 	: 'cek.php?q=input',
      cache	: false,
      data 	: {
        p_agk : pth_agk,
        p_pre : pth_pred,
        k_agk : ktr_agk,
        k_pre : ktr_pred,
        id_siswa : id,
        id_mapel : 45,
        id_kelas : 14						},
      success	: function(psn){
        if (psn == "true") {
          //hide the form
          $(".row_"+id+" > td > input ").remove();
          $(".row_"+id+" > td:last-child > .btn_smpn_"+id).remove();
          $(".row_"+id+" > td:last-child > .btn_cls_"+id).remove();

          $(".row_"+id+" > td:nth-child(3)").text(pth_agk);
          $(".row_"+id+" > td:nth-child(4)").text(pth_pred);
          $(".row_"+id+" > td:nth-child(5)").text(ktr_agk);
          $(".row_"+id+" > td:nth-child(6)").text(ktr_pred);

          $(".row_"+id+" > td:last-child ").append(btnEdit);
        } else {
          sweetAlert('Oops!', 'Proses input nilai tidak berhasil', 'error');
          console.log(psn);
        }
      }
    });
  }
});
});

});
</script>
<style>
input[disabled]{
background: #fff !important;
border:none;
box-shadow: none;;
}

thead  th {
vertical-align: middle !important;
}
</style>
<div class="col-md-12">
<table class="table">
<tbody><tr>
<td>Nama Kelas</td>
<td>:</td>
<td>10 PM2</td>
</tr>
<tr>
<td>Paket Keahlian</td>
<td>:</td>
<td>Pemasaran</td>
</tr>
<tr>
<td>Jumlah Siswa</td>
<td>:</td>
<td>38</td>
</tr>
<tr>
<td>Mata Pelajaran (Guru Pengajar)</td>
<td>:</td>
<td>Analisa dan Riset Pasar <strong><b>()</b></strong> </td>
</tr>
<tr>
<td>Wali Kelas</td>
<td>:</td>
<td>Candra Hidayat</td>
</tr>
</tbody></table>
<hr>
<div id="main-data_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"><a href="http://localhost/siakad/admin/nilai" class="btn btn-primary">Kembali</a>  <a href="javascript:document.location.reload(true);" class="btn btn-primary">Refresh  <span class="glyphicon glyphicon-refresh"></span></a></div><div class="col-sm-6"><div id="main-data_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="main-data"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="main-data" class="table table-bordered dataTable no-footer" role="grid" aria-describedby="main-data_info" style="width: 1110px;">
<thead>
<tr role="row"><th class="ctr sorting_asc" rowspan="2" tabindex="0" aria-controls="main-data" colspan="1" aria-sort="ascending" aria-label="No.: activate to sort column descending" style="width: 73px;">No.</th><th class="ctr sorting" rowspan="2" style="width: 200px;" tabindex="0" aria-controls="main-data" colspan="1" aria-label="Nama Siswa: activate to sort column ascending">Nama Siswa</th><th colspan="2" class="ctr" rowspan="1">Pengetahuan</th><th colspan="2" class="ctr" rowspan="1">Keterampilan</th><th class="ctr sorting" rowspan="2" tabindex="0" aria-controls="main-data" colspan="1" aria-label="Aksi: activate to sort column ascending" style="width: 85px;">Aksi</th></tr>
<tr role="row"><th class="ctr sorting" tabindex="0" aria-controls="main-data" rowspan="1" colspan="1" aria-label="Angka: activate to sort column ascending" style="width: 109px;">Angka</th><th class="ctr sorting" tabindex="0" aria-controls="main-data" rowspan="1" colspan="1" aria-label="Predikat: activate to sort column ascending" style="width: 132px;">Predikat</th><th class="ctr sorting" tabindex="0" aria-controls="main-data" rowspan="1" colspan="1" aria-label="Angka: activate to sort column ascending" style="width: 109px;">Angka</th><th class="ctr sorting" tabindex="0" aria-controls="main-data" rowspan="1" colspan="1" aria-label="Predikat: activate to sort column ascending" style="width: 131px;">Predikat</th></tr>
</thead>
<tbody>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  <tr class="row_55 odd" role="row">
  <td class="ctr sorting_1">1</td>
  <td>Agung Pramudita</td>
          <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">
    <button class="btn btn-default btn_add btn_tmbh_55" data-id="55"><span class="glyphicon glyphicon-plus"></span></button>
  </td>
        </tr><tr class="row_65 even" role="row">
  <td class="ctr sorting_1">2</td>
  <td>Ainul Farkhati</td>
          <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">
    <button class="btn btn-default btn_add btn_tmbh_65" data-id="65"><span class="glyphicon glyphicon-plus"></span></button>
  </td>
        </tr><tr class="row_148 odd" role="row">
  <td class="ctr sorting_1">3</td>
  <td>Ani Nuryanti</td>
          <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">
    <button class="btn btn-default btn_add btn_tmbh_148" data-id="148"><span class="glyphicon glyphicon-plus"></span></button>
  </td>
        </tr><tr class="row_162 even" role="row">
  <td class="ctr sorting_1">4</td>
  <td>Anitah</td>
          <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">
    <button class="btn btn-default btn_add btn_tmbh_162" data-id="162"><span class="glyphicon glyphicon-plus"></span></button>
  </td>
        </tr><tr class="row_221 odd" role="row">
  <td class="ctr sorting_1">5</td>
  <td>Avie Dwi Alamanda</td>
          <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">
    <button class="btn btn-default btn_add btn_tmbh_221" data-id="221"><span class="glyphicon glyphicon-plus"></span></button>
  </td>
        </tr><tr class="row_251 even" role="row">
  <td class="ctr sorting_1">6</td>
  <td>Bada Rapi</td>
          <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">
    <button class="btn btn-default btn_add btn_tmbh_251" data-id="251"><span class="glyphicon glyphicon-plus"></span></button>
  </td>
        </tr><tr class="row_301 odd" role="row">
  <td class="ctr sorting_1">7</td>
  <td>David Susanto</td>
          <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">
    <button class="btn btn-default btn_add btn_tmbh_301" data-id="301"><span class="glyphicon glyphicon-plus"></span></button>
  </td>
        </tr><tr class="row_384 even" role="row">
  <td class="ctr sorting_1">8</td>
  <td>Dina Choirunnissa</td>
          <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">
    <button class="btn btn-default btn_add btn_tmbh_384" data-id="384"><span class="glyphicon glyphicon-plus"></span></button>
  </td>
        </tr><tr class="row_452 odd" role="row">
  <td class="ctr sorting_1">9</td>
  <td>Elga Putri Elisabeth</td>
          <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">
    <button class="btn btn-default btn_add btn_tmbh_452" data-id="452"><span class="glyphicon glyphicon-plus"></span></button>
  </td>
        </tr><tr class="row_562 even" role="row">
  <td class="ctr sorting_1">10</td>
  <td>Fikri Aolianti</td>
          <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">
    <button class="btn btn-default btn_add btn_tmbh_562" data-id="562"><span class="glyphicon glyphicon-plus"></span></button>
  </td>
        </tr><tr class="row_688 odd" role="row">
  <td class="ctr sorting_1">11</td>
  <td>Ilham Baharudin</td>
          <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">
    <button class="btn btn-default btn_add btn_tmbh_688" data-id="688"><span class="glyphicon glyphicon-plus"></span></button>
  </td>
        </tr><tr class="row_690 even" role="row">
  <td class="ctr sorting_1">12</td>
  <td>Ilham Ramadhan</td>
          <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">
    <button class="btn btn-default btn_add btn_tmbh_690" data-id="690"><span class="glyphicon glyphicon-plus"></span></button>
  </td>
        </tr><tr class="row_725 odd" role="row">
  <td class="ctr sorting_1">13</td>
  <td>Intan Lestari</td>
          <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">
    <button class="btn btn-default btn_add btn_tmbh_725" data-id="725"><span class="glyphicon glyphicon-plus"></span></button>
  </td>
        </tr><tr class="row_746 even" role="row">
  <td class="ctr sorting_1">14</td>
  <td>Istiadza</td>
          <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">
    <button class="btn btn-default btn_add btn_tmbh_746" data-id="746"><span class="glyphicon glyphicon-plus"></span></button>
  </td>
        </tr><tr class="row_788 odd" role="row">
  <td class="ctr sorting_1">15</td>
  <td>Khamidah</td>
          <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">
    <button class="btn btn-default btn_add btn_tmbh_788" data-id="788"><span class="glyphicon glyphicon-plus"></span></button>
  </td>
        </tr><tr class="row_829 even" role="row">
  <td class="ctr sorting_1">16</td>
  <td>Leli Maulidiya</td>
          <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">
    <button class="btn btn-default btn_add btn_tmbh_829" data-id="829"><span class="glyphicon glyphicon-plus"></span></button>
  </td>
        </tr><tr class="row_836 odd" role="row">
  <td class="ctr sorting_1">17</td>
  <td>Leres Sanara</td>
          <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">
    <button class="btn btn-default btn_add btn_tmbh_836" data-id="836"><span class="glyphicon glyphicon-plus"></span></button>
  </td>
        </tr><tr class="row_866 even" role="row">
  <td class="ctr sorting_1">18</td>
  <td>Luckyana</td>
          <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">
    <button class="btn btn-default btn_add btn_tmbh_866" data-id="866"><span class="glyphicon glyphicon-plus"></span></button>
  </td>
        </tr><tr class="row_1137 odd" role="row">
  <td class="ctr sorting_1">19</td>
  <td>Nurlaelah</td>
          <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">
    <button class="btn btn-default btn_add btn_tmbh_1137" data-id="1137"><span class="glyphicon glyphicon-plus"></span></button>
  </td>
        </tr><tr class="row_1145 even" role="row">
  <td class="ctr sorting_1">20</td>
  <td>Nursela</td>
          <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">
    <button class="btn btn-default btn_add btn_tmbh_1145" data-id="1145"><span class="glyphicon glyphicon-plus"></span></button>
  </td>
        </tr><tr class="row_1150 odd" role="row">
  <td class="ctr sorting_1">21</td>
  <td>Nurul Alfiah</td>
          <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">
    <button class="btn btn-default btn_add btn_tmbh_1150" data-id="1150"><span class="glyphicon glyphicon-plus"></span></button>
  </td>
        </tr><tr class="row_1188 even" role="row">
  <td class="ctr sorting_1">22</td>
  <td>Puja Sukmawati</td>
          <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">
    <button class="btn btn-default btn_add btn_tmbh_1188" data-id="1188"><span class="glyphicon glyphicon-plus"></span></button>
  </td>
        </tr><tr class="row_1205 odd" role="row">
  <td class="ctr sorting_1">23</td>
  <td>Putri Mardiyanti</td>
          <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">
    <button class="btn btn-default btn_add btn_tmbh_1205" data-id="1205"><span class="glyphicon glyphicon-plus"></span></button>
  </td>
        </tr><tr class="row_1249 even" role="row">
  <td class="ctr sorting_1">24</td>
  <td>Regita Dwi Difani</td>
          <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">
    <button class="btn btn-default btn_add btn_tmbh_1249" data-id="1249"><span class="glyphicon glyphicon-plus"></span></button>
  </td>
        </tr><tr class="row_1386 odd" role="row">
  <td class="ctr sorting_1">25</td>
  <td>Selviyani</td>
          <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">
    <button class="btn btn-default btn_add btn_tmbh_1386" data-id="1386"><span class="glyphicon glyphicon-plus"></span></button>
  </td>
        </tr><tr class="row_1390 even" role="row">
  <td class="ctr sorting_1">26</td>
  <td>Septia Vania</td>
          <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">
    <button class="btn btn-default btn_add btn_tmbh_1390" data-id="1390"><span class="glyphicon glyphicon-plus"></span></button>
  </td>
        </tr><tr class="row_1438 odd" role="row">
  <td class="ctr sorting_1">27</td>
  <td>Siti Fatimah Azahra</td>
          <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">
    <button class="btn btn-default btn_add btn_tmbh_1438" data-id="1438"><span class="glyphicon glyphicon-plus"></span></button>
  </td>
        </tr><tr class="row_1452 even" role="row">
  <td class="ctr sorting_1">28</td>
  <td>Siti Khotimah</td>
          <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">
    <button class="btn btn-default btn_add btn_tmbh_1452" data-id="1452"><span class="glyphicon glyphicon-plus"></span></button>
  </td>
        </tr><tr class="row_1475 odd" role="row">
  <td class="ctr sorting_1">29</td>
  <td>Siti Rostina</td>
          <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">
    <button class="btn btn-default btn_add btn_tmbh_1475" data-id="1475"><span class="glyphicon glyphicon-plus"></span></button>
  </td>
        </tr><tr class="row_1510 even" role="row">
  <td class="ctr sorting_1">30</td>
  <td>Sugiarti</td>
          <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">
    <button class="btn btn-default btn_add btn_tmbh_1510" data-id="1510"><span class="glyphicon glyphicon-plus"></span></button>
  </td>
        </tr><tr class="row_1534 odd" role="row">
  <td class="ctr sorting_1">31</td>
  <td>Syahrani</td>
          <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">
    <button class="btn btn-default btn_add btn_tmbh_1534" data-id="1534"><span class="glyphicon glyphicon-plus"></span></button>
  </td>
        </tr><tr class="row_1564 even" role="row">
  <td class="ctr sorting_1">32</td>
  <td>Toto Iswanto</td>
          <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">
    <button class="btn btn-default btn_add btn_tmbh_1564" data-id="1564"><span class="glyphicon glyphicon-plus"></span></button>
  </td>
        </tr><tr class="row_1565 odd" role="row">
  <td class="ctr sorting_1">33</td>
  <td>Tresnawati</td>
          <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">
    <button class="btn btn-default btn_add btn_tmbh_1565" data-id="1565"><span class="glyphicon glyphicon-plus"></span></button>
  </td>
        </tr><tr class="row_1578 even" role="row">
  <td class="ctr sorting_1">34</td>
  <td>Tsaniyah Choirunnisa</td>
          <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">
    <button class="btn btn-default btn_add btn_tmbh_1578" data-id="1578"><span class="glyphicon glyphicon-plus"></span></button>
  </td>
        </tr><tr class="row_1607 odd" role="row">
  <td class="ctr sorting_1">35</td>
  <td>Venti Vadilah</td>
          <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">
    <button class="btn btn-default btn_add btn_tmbh_1607" data-id="1607"><span class="glyphicon glyphicon-plus"></span></button>
  </td>
        </tr><tr class="row_1641 even" role="row">
  <td class="ctr sorting_1">36</td>
  <td>Widian Rahmadini</td>
          <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">
    <button class="btn btn-default btn_add btn_tmbh_1641" data-id="1641"><span class="glyphicon glyphicon-plus"></span></button>
  </td>
        </tr><tr class="row_1679 odd" role="row">
  <td class="ctr sorting_1">37</td>
  <td>Yulis Tyara Putri</td>
          <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">
    <button class="btn btn-default btn_add btn_tmbh_1679" data-id="1679"><span class="glyphicon glyphicon-plus"></span></button>
  </td>
        </tr><tr class="row_1690 even" role="row">
  <td class="ctr sorting_1">38</td>
  <td>Yusuf Ibrahim</td>
          <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">0</td>
  <td class="ctr">-</td>
  <td class="ctr">
    <button class="btn btn-default btn_add btn_tmbh_1690" data-id="1690"><span class="glyphicon glyphicon-plus"></span></button>
  </td>
        </tr></tbody>
</table></div></div><div class="row"><div class="col-sm-0"></div><div class="col-sm-12"><div class="dataTables_paginate paging_simple_numbers" id="main-data_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="main-data_previous"><a href="#" aria-controls="main-data" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="main-data" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button next disabled" id="main-data_next"><a href="#" aria-controls="main-data" data-dt-idx="2" tabindex="0">Next</a></li></ul></div></div></div></div>
</div>


    </div> <!-- end of class panel-body -->
  </div> <!-- end of class panel -->
</div>

@endsection