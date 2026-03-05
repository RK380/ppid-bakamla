<!-- Services Section -->
<section id="services" class="services section">
  
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2 style="margin-top: 60px;">Pelayanan</h2>
      <p>Permohonan Informasi Publik<br></p>
    </div><!-- End Section Title -->
    <h5 style="text-align:center;" data-aos="fade-up">PILIH KATEGORI PEMOHON</h5>

    <div class="container">
      <hr style="color: #E0E0E0" data-aos="fade-up">

      <div class="row gy-4">

        <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item item-teal position-relative">
            <i class="bi bi-journal-bookmark icon"></i>
            <h3>LEMBAGA/INSTANSI</h3>
            {{-- <p>WhistleBlowing System.</p> --}}
              <a href="{{ route('lembaga.register') }}" class="read-more stretched-link"> <i class="bi bi-arrow-right"></i></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item item-red position-relative">
            <i class="bi bi-journal-arrow-down icon"></i>
            <h3>PERORANGAN</h3>
            {{-- <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p> --}}
              <a href="{{ route('perorangan.register') }}" class="read-more stretched-link"> <i class="bi bi-arrow-right"></i></a>
              {{-- <a href="{{ route('perorangan.register') }}" class="read-more stretched-link"> <i class="bi bi-arrow-right"></i></a> --}}
          </div>
        </div><!-- End Service Item -->

      </div>

      <section id="stats" class="stats section">

        <div class="container aos-init aos-animate">
  
          <div class="row gy-3">
  
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="stats-item d-flex align-items-center w-100 h-100">
                <i class="bi bi-person-plus color-blue flex-shrink-0"></i>
                <div>
                  <span data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="0" class="purecounter">0</span>
                  <p>Total Pengguna</p>
                </div>
              </div>
            </div><!-- End Stats Item -->
  
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="stats-item d-flex align-items-center w-100 h-100">
                <i class="bi bi-person-vcard color-orange flex-shrink-0" style="color: #ee6c20;"></i>
                <div>
                  <span data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="0" class="purecounter">0</span>
                  <p>Lembaga/Instansi</p>
                </div>
              </div>
            </div><!-- End Stats Item -->
  
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
              <div class="stats-item d-flex align-items-center w-100 h-100">
                <i class="bi bi-person color-green flex-shrink-0" style="color: #15be56;"></i>
                <div>
                  <span data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="0" class="purecounter">0</span>
                  <p>Perorangan</p>
                </div>
              </div>
            </div><!-- End Stats Item -->
  
          </div>
  
        </div>
  
      </section>

    </div>

  </section><!-- /Services Section -->
  
  <main id="main">

  </main><!-- End #main -->
  {{-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> --}}
  @include('layouts/aplikasi')