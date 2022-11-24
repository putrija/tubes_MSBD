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
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita, dolorum distinctio laboriosam fuga dignissimos cum harum doloremque, quis, perspiciatis ex quod. Repudiandae optio alias atque earum! Dolorem nostrum deserunt sit?
        </p>
        <a href="login/index.html"class="btn btn-primary px-4 ml-2">Click Here!</a>
   
      </div>
      <div class="col d-none d-lg-block d-xl-block">
        <img style="width: 500px; border-radius: 20px;" src="/images/siswa.jpg" align="right">
      </div>
    </div>
</section>
   
<section class="akreditas section-margin" id="akreditas">
<div class= "container">
  <div class ="row mt-5">
    <div class="col-lg-4">
      <div class="card">
          <img style="opacity: 0.4;" src="/images/siswa1.jpg">
        </div>
      </div>
    <div class="col-lg-4">
      <div class="card">
          <img style="opacity: 0.4;" src="/images/siswa2.jpg">
        </div>
      </div>
    <div class="col-lg-4">
      <div class="card">
          <img style="opacity: 0.4;" src="/images/siswa3.jpg">
      </div>
    </div>
  </div>
</div>              
</section>
@endsection
      