
<?php $__env->startSection('konten'); ?>
<!-- Hero Section -->
      <section id="hero" class="hero section">

        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
              <h1 data-aos="fade-up">Layanan Informasi Publik</h1>
              <p data-aos="fade-up" data-aos-delay="100">Hallo Sobat Kamla, Anda dapat dengan mudah memperoleh informasi melalui PPID BAKAMLA</p>
              <div class="d-flex flex-column flex-md-row" data-aos="fade-up" data-aos-delay="200">
                <a href="/profil" class="btn-get-started">Selengkapnya <i class="bi bi-arrow-right"></i></a>
                <a href="https://youtu.be/iCS7IKWb9sM?si=4pGrqy_fWsVp5CbM" class="glightbox btn-watch-video d-flex align-items-center justify-content-center ms-0 ms-md-4 mt-4 mt-md-0"><i class="bi bi-play-circle"></i><span>Tonton Video</span></a>
              </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
              <img src="assets/img/header.jpg" style="border-radius: 20px;" class="img-fluid animated" alt="">
            </div>
          </div>
        </div>
  
      </section><!-- /Hero Section -->
  
      
      <!-- Values Section -->
      <section id="values" class="values section" style="background-color:#f4faff;">
  
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <p>Informasi Publik</p>
          <h2>Demi mewujudkan pelayanan informasi publik yang informatif, Badan Keamanan Laut (Bakamla) memberikan keterbukaan informasi yang optimal kepada lembaga maupun perorangan, seperti yang telah diamanahkan oleh negara.<br></h2>
        </div><!-- End Section Title -->
  
        <div class="container">
          <div class="row gy-4">
            <div class="row1" id="stats">
               <div style="margin: 0 auto;" class="max-auto">
                  <div class="row">
                     <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="100" >
                           <a href="https://ppid.bakamla.go.id/daftar-informasi-publik/" class="card-stat stat-peraturan" data-asw-org-font-size="16" style="font-size: 16px;">
                              <div class="stat-icon-box">
                                 <i class="bi bi-info"></i>
                              </div>
                              <div class="stat-content">
                                 <h3 class="stat-title" data-asw-org-font-size="15" style="font-size: 15px;">Informasi Publik Secara Berkala</h3>
                                 <p class="stat-number" data-asw-org-font-size="30" style="font-size: 30px;"><?php echo e($jumlahKlasifikasi['Informasi Publik Secara Berkala'] ?? 0); ?></p>
                              </div>
                           </a>
                     </div>

                     <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200" >
                           <a href="https://ppid.bakamla.go.id/daftar-informasi-publik/" class="card-stat stat-monografi" data-asw-org-font-size="16" style="font-size: 16px;">
                              <div class="stat-icon-box">
                                 <i class="bi bi-newspaper"></i>
                              </div>
                              <div class="stat-content">
                                 <h3 class="stat-title" data-asw-org-font-size="15" style="font-size: 15px;">Informasi Publik Serta Merta</h3>
                                 <p class="stat-number" data-asw-org-font-size="30" style="font-size: 30px;"> <?php echo e($jumlahKlasifikasi['Informasi Publik Serta Merta'] ?? 0); ?></p>
                              </div>
                           </a>
                     </div>

                     <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="300" >
                           <a href="https://ppid.bakamla.go.id/daftar-informasi-publik/" class="card-stat stat-artikel" data-asw-org-font-size="16" style="font-size: 16px;">
                              <div class="stat-icon-box">
                                 <i class="bi bi-infinity"></i>
                              </div>
                              <div class="stat-content">
                                 <h3 class="stat-title" data-asw-org-font-size="15" style="font-size: 15px;">Informasi Publik Setiap Saat</h3>
                                 <p class="stat-number" data-asw-org-font-size="30" style="font-size: 30px;"><?php echo e($jumlahKlasifikasi['Informasi Publik Setiap Saat'] ?? 0); ?></p>
                              </div>
                           </a>
                     </div>

                     <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="400" >
                           <a href="https://ppid.bakamla.go.id/daftar-informasi-publik/" class="card-stat stat-putusan" data-asw-org-font-size="16" style="font-size: 16px;">
                              <div class="stat-icon-box">
                                 <i class="bi bi-dash-circle"></i>
                              </div>
                              <div class="stat-content">
                                 <h3 class="stat-title" data-asw-org-font-size="15" style="font-size: 15px;">Informasi Publik Dikecualikan</h3>
                                 <p class="stat-number" data-asw-org-font-size="30" style="font-size: 30px;"><?php echo e($jumlahKlasifikasi['Informasi Publik Dikecualikan'] ?? 0); ?></p>
                              </div>
                           </a>
                     </div>
                </div>
             </div>
           </div>
          </div>
        </div>
  
      </section><!-- /Values Section -->

      <!-- Lokasi Section -->
      <section id="values" class="values section">
  
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <p>PPID Pelaksana Daerah</p>
          <h2>Pelaksana<br></h2>
        </div><!-- End Section Title -->

        <div class="container">
  
          <div class="row gy-4">
            <div class="justify-content-custom mb-10 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
              <div id="map" style="height: 500px;border-radius:10px;"></div>
            </div>
          </div>

        </div>
        
      </section>
      <!-- End Lokasi Section -->
  
      <!-- Services Section -->
      <section id="services" class="services section">
  
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Pelayanan</h2>
          <p>Layanan Pengaduan<br></p>
        </div><!-- End Section Title -->
  
        <div class="container">
  
          <div class="row gy-4">
  
            <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="service-item item-cyan position-relative">
                <i class="bi bi-activity icon"></i>
                <h3>WhistleBlowing System (WBS)</h3>
                  <a href="https://wbs.bakamla.go.id" class="read-more stretched-link"> <i class="bi bi-arrow-right"></i></a>
              </div>
            </div><!-- End Service Item -->
  
            <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="service-item item-red position-relative">
                <i class="bi bi-broadcast icon"></i>
                <h3>SP4N-LAPOR!</h3>
                  <a href="https://lapor.go.id" class="read-more stretched-link"> <i class="bi bi-arrow-right"></i></a>
              </div>
            </div><!-- End Service Item -->
          </div>
  
        </div>
  
      </section><!-- /Services Section -->
  
      <!-- Clients Section -->
      <section id="clients" class="clients section" style="background-color:#f4faff;">
      
  
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Web Terkait</h2>
          
        </div><!-- End Section Title -->
  
        <div class="container" data-aos="fade-up" data-aos-delay="100">
  
          <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                },
                "breakpoints": {
                  "320": {
                    "slidesPerView": 2,
                    "spaceBetween": 40
                  },
                  "480": {
                    "slidesPerView": 3,
                    "spaceBetween": 60
                  },
                  "640": {
                    "slidesPerView": 4,
                    "spaceBetween": 80
                  },
                  "992": {
                    "slidesPerView": 6,
                    "spaceBetween": 120
                  }
                }
              }
            </script>
            <div class="swiper-wrapper align-items-center">
              <div class="swiper-slide"><a href="https://posyankum.bakamla.go.id"><img src="assets/img/clients/posyankum.png" class="img-fluid" alt=""></a></div>
              <div class="swiper-slide"><a href="https://csirt.bakamla.go.id"><img src="assets/img/clients/csirt.png" class="img-fluid" alt=""></a></div>
              <div class="swiper-slide"><a href="https://imic.bakamla.go.id"><img src="assets/img/clients/imic.png" class="img-fluid" alt=""></a></div>
              <div class="swiper-slide"><a href="https://wbs.bakamla.go.id"><img src="assets/img/clients/wbs.png" class="img-fluid" alt=""></a></div>
              <div class="swiper-slide"><a href="https://jdih.bakamla.go.id"><img src="assets/img/clients/jdih.jpeg" class="img-fluid" alt=""></a></div>
              <div class="swiper-slide"><a href="https://sippn.menpan.go.id"><img src="assets/img/clients/sippn.jpeg" class="img-fluid" alt=""></a></div>
              <div class="swiper-slide"><a href="https://lpse.bakamla.go.id"><img src="assets/img/clients/lpse.png" class="img-fluid" alt=""></a></div>
              <div class="swiper-slide"><a href="https://lapor.go.id"><img src="assets/img/clients/lapor.png" class="img-fluid" alt=""></a></div>
              <div class="swiper-slide"><a href="https://spbe.bakamla.go.id"><img src="assets/img/clients/spbe.png" class="img-fluid" alt=""></a></div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
  
        </div>
  
      </section>
      <!-- /Clients Section -->

      <section id="section-clients" class="clients section">
        <div class="row" style="background-image: url( <?php echo e(asset('assets/img/background-portal-ppid.png')); ?> );
         background-color: #E74C3C;
         padding-top: 72px;
         padding-bottom: 72px;
         margin-top: 36px;">
              <div style="width: 90%; margin: 0 auto;" class="max-auto">
                 <div>
                    <h2 class="header-portal-jdihn" data-asw-org-font-size="36" style="font-size: 36px;">PORTAL BAKAMLA RI</h2>
                 </div>
                 <div class="row">
                    <div class="col-md-6 col-sm-6">
                       <p class="desc-portal-jdihn" style="line-height: 1.65; font-size: 16px;" data-asw-org-font-size="16">
                          Kunjungi portal utama BAKAMLA RI untuk akses lebih luas ke jaringan informasi maritim nasional
                          yang melibatkan berbagai instansi terkait di Indonesia.
                       </p>
                    </div>
  
                    <div class="col-md-3 col-sm-12"></div>
  
                    <div class="col-md-3 col-sm-3 pt-3 pt-md-0" style="text-align: center;">
                       <a href="https://bakamla.go.id" target="_blank" class="btn-kunjungi-portal d-flex align-items-center" data-asw-org-font-size="16" style="font-size: 16px;">
                       Kunjungi Portal
                       <img src="<?php echo e(asset('assets/img/arrow-right.png')); ?>" style="width: 20px; height: 20px;">
                       </a>
                    </div>
                 </div>
              </div>
        </div>
      </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.aplikasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ppid/resources/views/halaman/index.blade.php ENDPATH**/ ?>