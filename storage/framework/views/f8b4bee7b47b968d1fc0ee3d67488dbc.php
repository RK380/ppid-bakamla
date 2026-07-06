<!-- Services Section -->
<section id="services" class="services section" style="margin-top: 20px;">
  
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2 style="margin-top: 60px;">Pelayanan</h2>
      <p>Permohonan Informasi Publik<br></p>
    </div><!-- End Section Title -->
    <h5 style="text-align:center;" data-aos="fade-up">PILIH KATEGORI PEMOHON</h5>

    <div class="container" data-aos="fade-up">
      <div class="content-panel" style="padding:15px;background-color:#f5f5f5;margin-bottom:5px;border-radius:10px;">
        
                        <div class="row gy-4">

                          <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item item-teal position-relative">
                              <i class="bi bi-journal-bookmark icon"></i>
                              <h3>LEMBAGA/INSTANSI</h3>
                              
                                <a href="<?php echo e(route('lembaga.register')); ?>" class="read-more stretched-link"> <i class="bi bi-arrow-right"></i></a>
                            </div>
                          </div><!-- End Service Item -->

                          <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="service-item item-red position-relative">
                              <i class="bi bi-journal-arrow-down icon"></i>
                              <h3>PERORANGAN</h3>
                              
                                <a href="<?php echo e(route('perorangan.register')); ?>" class="read-more stretched-link"> <i class="bi bi-arrow-right"></i></a>
                                
                            </div>
                          </div><!-- End Service Item -->

                        </div>
                      </div>
                  </div>
              </div>
      
              <section id="stats" class="stats section">

                <div class="container">
                  <div class="row gy-4">
                    <div class="row1" id="stats">
                      <div style="margin: 0 auto;" class="max-auto">
                          <div class="row">
                            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="300" >
                                  <a href="https://ppid.bakamla.go.id/daftar-informasi-publik/" class="card-stat stat-peraturan" data-asw-org-font-size="16" style="font-size: 16px;">
                                      <div class="stat-icon-box">
                                        <i class="bi bi-person-plus"></i>
                                      </div>
                                      <div class="stat-content">
                                        <h3 class="stat-title" data-asw-org-font-size="15" style="font-size: 15px;">Total Pengguna</h3>
                                        <p class="stat-number" data-asw-org-font-size="30" style="font-size: 30px;"><?php echo e($jumlahKlasifikasi['Informasi Publik Secara Berkala'] ?? 0); ?></p>
                                      </div>
                                  </a>
                            </div>

                            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="400" >
                                  <a href="https://ppid.bakamla.go.id/daftar-informasi-publik/" class="card-stat stat-monografi" data-asw-org-font-size="16" style="font-size: 16px;">
                                      <div class="stat-icon-box">
                                        <i class="bi bi-person-vcard"></i>
                                      </div>
                                      <div class="stat-content">
                                        <h3 class="stat-title" data-asw-org-font-size="15" style="font-size: 15px;">Lembaga/Instansi</h3>
                                        <p class="stat-number" data-asw-org-font-size="30" style="font-size: 30px;"> <?php echo e($jumlahKlasifikasi['Informasi Publik Serta Merta'] ?? 0); ?></p>
                                      </div>
                                  </a>
                            </div>

                            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="500" >
                                  <a href="https://ppid.bakamla.go.id/daftar-informasi-publik/" class="card-stat stat-putusan" data-asw-org-font-size="16" style="font-size: 16px;">
                                      <div class="stat-icon-box">
                                        <i class="bi bi-person"></i>
                                      </div>
                                      <div class="stat-content">
                                        <h3 class="stat-title" data-asw-org-font-size="15" style="font-size: 15px;">Perorangan</h3>
                                        <p class="stat-number" data-asw-org-font-size="30" style="font-size: 30px;"><?php echo e($jumlahKlasifikasi['Informasi Publik Setiap Saat'] ?? 0); ?></p>
                                      </div>
                                  </a>
                            </div>
                        </div>
                    </div>
                  </div>
                  </div>
                </div>
  
              </section>
      </div>
    </div>
</section>
  
  <main id="main">

  </main><!-- End #main -->
  
  <?php echo $__env->make('layouts/aplikasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ppid/resources/views/pemohon-register.blade.php ENDPATH**/ ?>