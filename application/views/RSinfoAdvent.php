<?php $this->load->view('Page_header');?>
<div>
<h6>3</h6>
</div>
<br>
<div  style="margin-left:130px;margin-top:30px;">
<div class="row" style="">
<br>
<br>

<div class="col-8" style="margin-left:30px; margin-top: 8px;">
<h2 style="center">RS Advent Bandung</h2>
<div id="demo" class="carousel slide" data-ride="carousel" style="height:400px; width:600px; margin-top: 25px;">
  <!-- Indicators -->
  <ul class="carousel-indicators" >
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= base_url('assets/RSAdvent.jpg')?>" alt="Los Angeles" width="600px" height="400px ">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('assets/RSAdvent1.jpg')?>" alt="Los Angeles" width="600px" height="400px ">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">
  <h4 id="list-item-1" style="margin-top: 25px;">Profil</h4>
  <p style="margin-top: 25px; text-align: justify;
  text-justify: inter-word;">Rumah Sakit Advent Bandung adalah bagian dari jaringan pelayanan kesehatan Adventist Health System Asia (AHS/A), yang mengelola lembaga kesehatan Adven di kawasan Asia Pasifik Selatan, dengan kantor pusat di Cavite, Filipina. Di seluruh dunia. AHS melayani 68 negara dengan 65.000 karyawan yang terbagi di 165 rumah sakit dam 345 klinik kesehatan.</p>
  <h4 id="list-item-2" style="margin-top: 25px;">Tarif</h4>
  <div id="acordion">
  
  <div class="card" style="margin-top: 25px;">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Pemeriksaan Rawat Jalan
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
      Sarana + Pelayanan = Rp50,000 + Rp50.000 = Rp100.000
      </div>
    </div>
    <br>

    <div class="card-header" id="heading2">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
          Pemeriksaan Rawat Darurat 
        </button>
      </h5>
    </div>

    <div id="collapse2" class="collapse hide" aria-labelledby="heading2" data-parent="#accordion">
      <div class="card-body">
      Pemeriksaan Dasar: Sarana + Pelayanan = Rp60.000 + Rp25.000 = Rp85.000
      </div>
    </div>
    <br>
    <div class="card-header" id="heading3">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapseOne">
          Pemeriksaa Poli Spesialis 
        </button>
      </h5>
    </div>

    <div id="collapse3" class="collapse hide" aria-labelledby="heading3" data-parent="#accordion">
      <div class="card-body">
      Dokter Spesialis:  Sarana + Pelayanan = Rp50.000 + Rp100.000 = Rp150.000
      </div>
    </div>
  </div>

  <h4 id="list-item-2" style="margin-top: 25px;">Biaya Opname</h4>
  <div id="acordion">
  
  <div class="card" style="margin-top: 25px;">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapseOne">
          Kelas 1  
        </button>
      </h5>
    </div>

    <div id="collapse4" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
      Akomodasi + Visited + Full Care + Jasa Pelayanan Makanan = Rp400.000 + Rp60.000 + Rp30.000 + Rp5.000 = Rp495.000 / Belum Termasuk PPN
      </div>
    </div>
    <br>

    <div class="card-header" id="heading2">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse2">
          Kelas 2
        </button>
      </h5>
    </div>

    <div id="collapse5" class="collapse hide" aria-labelledby="heading2" data-parent="#accordion">
      <div class="card-body">
      Akomodasi + Visited + Full care + Jasa Pelayanan Makanan = Rp600.000 + Rp70.000 + Rp35.000 + Rp5.000 = Rp710.000 / Belum Termasuk PPN
      </div>
    </div>
    <br>
    <div class="card-header" id="heading3">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapseOne">
          Kelas 3 
        </button>
      </h5>
    </div>

    <div id="collapse6" class="collapse hide" aria-labelledby="heading3" data-parent="#accordion">
      <div class="card-body">
      Akomodasi + Visited + Full Care + Jasa Pelayanan Makanan = Rp700.000 + Rp100.000 + Rp50.000 + Rp7.000 = Rp857.000
      </div>
    </div>
    <br>

    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse7" aria-expanded="true" aria-controls="collapseOne">
          VIP A 
        </button>
      </h5>
    </div>

    <div id="collapse7" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
      Akomodasi + Visited + Full Care + Jasa Pelayanan Makanan = Rp2.000 000 + Rp100.000 + Rp35.000 + Rp9.000 = Rp2.144.000
      </div>
    </div>
    <br>

    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse8" aria-expanded="true" aria-controls="collapseOne">
          VVIP
        </button>
      </h5>
    </div>

    <div id="collapse8" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
      Akomodasi + Visited + Full Care + Jasa Pelayanan Makanan = Rp3.000 000 + Rp200.000 + Rp35.000 + Rp9.000 = Rp2.244.000
      </div>
    </div>

  </div>

</div>

  </div>
  
  <h4 id="list-item-4" style="margin-top: 25px;">Dokter Spesialis</h4>
  <ul style="margin-bottom: 28px;">
    <li><h6>Dokter Spesialis Penyakit Dalam</h6></li>
    <li><h6>Dokter Spesialis Bedah</h6></li>
    <li><h6>Dokter Spesialis Anak</h6></li>
    <li><h6>Dokter Spesialis Saraf</h6></li>
    <li><h6>Dokter Spesialis Kulit dan Alat Kelamin</h6></li>
    <li><h6>Dokter Spesialis Kesehatan Gigi Anak</h6></li>
    <li><h6>Dokter Spesialis Gigi</h6></li>
    <li><h6>Dokter Spesialis Radiologi</h6></li>
    <li><h6>Dokter Spesialis Mata</h6></li>
  </ul>

</div>


</div>

<div class="col-3" style="margin-left:-60px;">
<div class="container" >
<div class="row">

<div class="col-sm">
<button type="button" class="btn btn-warning" style="width: 290px;">Pesan Rumah Sakit</button>
</div>
<div class="col-sm">
<br>
<h4>Peta Lokasi</h4>
<br>
</div>
<div class="col-sm">
<div class="card" style="width: 18rem;">
  <a href=""> <img class="card-img-top" src="<?= base_url('assets/RSAdvent.jpg')?>" alt="Card image cap"> </a>
  <div class="card-body">
    <p>Jalan Cihampelas No. 161, Cipaganti, Coblong Kota Bandung – Jawa Barat</p>
  </div>
</div>

</div>
</div>

</div>

</div>  

</div>
</div>
</div>

<?php $this->load->view('Page_footer')?>
<hr>
<div class="footer-copyright" style="text-align: center;">
  <p>2020 HelloDoc!</p>
</div>