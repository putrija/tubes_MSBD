@extends('layouts.navbar')
 
  <!-- Landing Page -->
  @section('konten')
  <section>
    <div class="container">
    <div class="row mt-5">
      <div class="col align-self-center">
        <h1 style="font-family: oswald;">
          SMA NEGERI 14 MEDAN
        </h1>
        <p class="mt-3 mb-4">
          SMA Negeri 14 Medan, merupakan salah satu Sekolah Menengah Atas Negeri yang ada di Provinsi Sumatra Utara, Indonesi. Sama dengan SMA 
          pada umumnya di Indonesia, masa pendidikan sekolah di SMAN 14 Medan ditempuh dalam tiga tahun pelajaran, mulai dari Kelas X sampai 
          Kelas XII. 
        </p>
      </div>
      <div class="col d-none d-lg-block d-xl-block">
        <img style="width: 500px; border-radius: 20px;" src="/images/siswa.png" align="right">
      </div>
    </div>
</section>
   
<section class="akreditas section-margin" id="akreditas">
<div class= "container">
  <div class ="row mt-5">
    <div class="col-lg-4">
      <div class="card">
          <img src="/images/siswa1.png">
        </div>
      </div>
    <div class="col-lg-4">
      <div class="card">
          <img src="/images/siswa2.png">
        </div>
      </div>
    <div class="col-lg-4">
      <div class="card">
          <img src="/images/siswa3.png">
      </div>
    </div>
  </div>
</div>              
</section>

<section>
  <div class="container">
    <div class="row mt-5">
      <div class="col align-self-center">
        <h1 style="font-family: oswald;">
         Berita, Artikel, Pengumuman
        </h1>
      </div>
    </div>
  </div>
</section>

<section class="akreditas section-margin" id="akreditas">
  <div class= "container">
    <div class ="row mt-5">
      <div class="col-lg-4">
        
      </div>
    </div>
  </div>
</section>

@endsection
      