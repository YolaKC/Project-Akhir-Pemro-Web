<div class="container">
        <div class="row">
          <div class="banner-info">
            <div class="banner-logo text-center">
              <img src="img/logo.png" class="img-responsive">
            </div>
            <div class="banner-text text-center">
              <h1 class="white">Keep Calm and Donate Blood!</h1>
              <p>Sistem Informasi Unit Transfusi Darah Wilayah Jember</p>
              <p> <b>DONOR DARAHMU, KENALI RHESUSMU!</b>   </p>
              <a href="#jadwal" class="btn btn-appoint">Lihat Jadwal</a>
            </div>
            <div class="overlay-detail text-center">
              <a href="#manfaat"><i class="fa fa-angle-down"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ banner-->

<!-- STOK DARAH -->
<!-- ==== SECTION DIVIDER2 -->
<section class="section-divider textdivider divider2">
  <div class="container" style='color: black; font-weight: bold;'>
    <h1 class="text-center"><b>STOK DARAH</b></h1>
    <hr>
    <div class="col-md-3">      
      <span class="counter"><?= $data['darah'][3]['stok'];?></span>
      <span class="counter-desc">Golongan Darah O</span>
    </div>
    <div class="col-md-3">
      <span class="counter"><?= $data['darah'][0]['stok'];?></span>
      <span class="counter-desc">Golongan Darah A</span>
    </div>
    <div class="col-md-3">
      <span class="counter"><?= $data['darah'][2]['stok'];?></span>
      <span class="counter-desc">Golongan Darah B</span>
    </div>
    <div class="col-md-3">
      <span class="counter"><?= $data['darah'][1]['stok'];?></span>
      <span class="counter-desc">Golongan Darah AB</span>
    </div>
  </div><!-- container -->
</section><!-- section -->
<!-- STOK DARAH -->

  <!--manfaat-->
  <section id="manfaat" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4">
          <h2 class="ser-title">Manfaat Donor</h2>
          <hr class="botm-line">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris cillum.</p>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-stethoscope"></i>
            </div>
            <div class="icon-info">
              <h4>Menjaga kesehatan jantung dan Membantu menurunkan berat badan </h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-ambulance"></i>
            </div>
            <div class="icon-info">
              <h4>Memberikan pertolongan bagi yang membutuhkan</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-user-md"></i>
            </div>
            <div class="icon-info">
              <h4>Mendeteksi penyakit serius dan Mendapatkan kesehatan psikologis </h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-medkit"></i>
            </div>
            <div class="icon-info">
              <h4>Meningkatkan produksi sel darah merah</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ manfaat-->
  <!--cta-->
  <section id="cta-1" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="schedule-tab">
          <div class="col-md-4 col-sm-4 bor-left">
            <div class="mt-boxy-color"></div>
            <div class="medi-info">
              <h3>Cek Golongan Darah</h3>
              <p>Kami melayani cek darah gratis demi I am text block. Edit this text from Appearance / Customize / Homepage header columns. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="medi-info">
              <h3>Cek Tekanan Darah</h3>
              <p>Kami melayani cek darah gratis demi Edit this text from Appearance / Customize / Homepage header columns. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              
            </div>
          </div>
          <div class="col-md-4 col-sm-4 mt-boxy-3">
            <div class="mt-boxy-color"></div>
            <div class="time-info">
              <h3>Jam Operasional</h3>
              <table style="margin: 8px 0px 0px;" border="1">
                <tbody>
                  <tr>
                    <td>Senin - Jumat</td>
                    <td>8.00 - 17.00</td>
                  </tr>
                  <tr>
                    <td>Sabtu</td>
                    <td>9.30 - 17.30</td>
                  </tr>
                  <tr>
                    <td>Minggu</td>
                    <td>9.30 - 15.00</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--cta-->
  
  
  <!--testimonial-->
  <section id="testimonial" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Testimoni</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="testi-details">
            <!-- Paragraph -->
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="testi-info">
            <!-- User Image -->
            <a href="#"><img src="img/thumb1.png" alt="" class="img-responsive"></a>
            <!-- User Name -->
            <h3>Alex<span>Texas</span></h3>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="testi-details">
            <!-- Paragraph -->
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="testi-info">
            <!-- User Image -->
            <a href="#"><img src="img/thumb2.png" alt="" class="img-responsive"></a>
            <!-- User Name -->
            <h3>Alex<span>Texas</span></h3>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="testi-details">
            <!-- Paragraph -->
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="testi-info">
            <!-- User Image -->
            <a href="#"><img src="img/thumb3.png" alt="" class="img-responsive"></a>
            <!-- User Name -->
            <h3>Alex<span>Texas</span></h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ testimonial-->
  <!--cta about 2-->
  <div id='about'>
    <section id="cta-2" class="section-padding">
      <div class="container" >
        <div class=" row">
          <div class="col-md-2"></div>
          <div class="text-right-md col-md-4 col-sm-4">
            <br>
            <h2 class="section-title white lg-line">« Selayang Pandang<br> Tentang Kami»</h2>
          </div>
          <div class="col-md-4 col-sm-5"><br>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a typek
            <p class="text-right text-primary"><i>— PMI Jember</i></p>
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>
    </section>
  </div>
  
  <!--cta about-->
  <!--jadwal-->
  <section id="jadwal" class="section-padding">
    <div class="container" style="color: black;">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Jadwal Donor</h2>
          <hr class="botm-line">
          <!-- table jadwal -->
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Nama</th>
                <th scope="col">Lokasi</th>
                <th scope="col">Tanggal</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($data['jadwal'] as $jadwal) :?>
            <tr>
              <td><?= $jadwal['nama'];?></td>
              <td><?= $jadwal['lokasi'];?></td>
              <td><?= $jadwal['tanggal'];?></td>
              </tr>
            <?php endforeach;?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
  <!--/ jadwal-->

  <!-- syarat Donor -->
  <div id='syarat'>
    <section id="cta-2" class="section-padding">
      <div class="container" id='about'>
        <div class=" row">
          <div class="col-md-2"></div>
          <div class="text-right-md col-md-4 col-sm-4">
            <br>
            <h2 class="section-title white lg-line">« Syarat<br> Pendonor»</h2>
          </div>
          <div class="col-md-4 col-sm-5">
            <ol>
              <br>
              <li><p class="text-left text-primary">Usia 17-60 Tahun</p></li>
              <li><p class="text-left text-primary">Berat badan maksimal 45 kg</p></li>
              <li><p class="text-left text-primary">Tekanan darah baik yaitu sistole = 110-160 mmHg, diastole = 70-100 mmHg</p></li>
              <li><p class="text-left text-primary">Denyut nadi teratur yaitu sekitar 50-100 kali/menit</p></li>
              <li><p class="text-left text-primary">Hemoglobin perempuan minimal 12 gram, sedangkan untuk laki-laki minimal 12,5 gram</p></li>
              <li><p class="text-left text-primary">Jumlah penyumbangan per tahun paling banyak 5 kali dengan jarak penyumbangan sekurang-kurangnya 3 bulan</p></li>
            </ol>
            <p class="text-right text-primary"></p>
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>
    </section>
  </div>
  
  <!--/ syarat Donor -->
