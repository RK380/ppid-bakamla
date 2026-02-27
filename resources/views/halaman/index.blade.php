@extends('layouts/aplikasi')
@section('konten')
<main class="main">
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
      <section id="values" class="values section">
  
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <p>Informasi Publik</p>
          <h2>Demi mewujudkan pelayanan informasi publik yang informatif, Badan Keamanan Laut (Bakamla) memberikan keterbukaan informasi yang optimal kepada lembaga maupun perorangan, seperti yang telah diamanahkan oleh negara.<br></h2>
        </div><!-- End Section Title -->
  
        <div class="container">
  
          <div class="row gy-4">
  
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="card">
                <img src="assets/img/IPSB.png" class="img-fluid" alt="">
                <a href="/daftar-informasi-publik/1" ><h3>Informasi Publik Secara Berkala</h3></a>
                <p>Merupakan informasi yang wajib disediakan dan diumumkan secara berkala</p>
              </div>
            </div><!-- End Card Item -->
  
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="card">
                <img src="assets/img/IPSM.png" class="img-fluid" alt="">
                <a href="/daftar-informasi-publik/3" ><h3>Informasi Publik Serta Merta</h3></a>
                <p>Informasi yang dapat mengancam hajat hidup orang banyak dan ketertiban umum</p>
              </div>
            </div><!-- End Card Item -->
  
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
              <div class="card">
                <img src="assets/img/IPSS.png" class="img-fluid" alt="">
                <a href="/daftar-informasi-publik/2" ><h3>Informasi Publik Setiap Saat</h3></a>
                <p>Informasi yang wajib disediakan oleh Badan Publik</p>
              </div>
            </div><!-- End Card Item -->
  
          </div>
  
        </div>
  
      </section><!-- /Values Section -->
  
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
                {{-- <p>WhistleBlowing System.</p> --}}
                  <a href="https://wbs.bakamla.go.id" class="read-more stretched-link"> <i class="bi bi-arrow-right"></i></a>
              </div>
            </div><!-- End Service Item -->
  
            <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="service-item item-red position-relative">
                <i class="bi bi-broadcast icon"></i>
                <h3>SP4N-LAPOR!</h3>
                {{-- <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p> --}}
                <a href="https://lapor.go.id" class="read-more stretched-link"> <i class="bi bi-arrow-right"></i></a>
              </div>
            </div><!-- End Service Item -->
          </div>
  
        </div>
  
      </section><!-- /Services Section -->
  
      <!-- Faq Section -->
      
      <!-- /Faq Section -->
  
      <!-- Clients Section -->
      <section id="clients" class="clients section">
  
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Web Terkait</h2>
          {{-- <p>We work with best clients<br></p> --}}
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

      {{-- <section id="services" class="services section">
        <div class="container section-title" id="statistik">
                 <div class="max-auto">
                       <h2>Statistik PPID BAKAMLA RI</h2>
                          <p class="desc-warta-berita mb-lg-4">
                             Lihat statistik terkini mengenai jumlah pengunjung.
                          </p>
  
                    <div class="d-flex justify-content-end gap-2 align-items-center mb-4">
                       <div>
                          Tampilkan data
                       </div>
                       <div>
                          <select name="select-period" id="select-period" class="form-control" id="filter-visitor">
                             <option value="all">Semua Tanggal</option>
                             <option value="today">Hari Ini</option>
                             <option value="30">30 Hari Terakhir</option>
                             <option value="90">90 Minggu Terakhir</option>
                          </select>
                       </div>
                    </div>
  
                          <div class="card bg-white" id="list-statistik">
                                <h3 class="text-black-50">Statistik Jumlah Pengunjung</h3>
                                <h4 id="total-pengunjung"> Jumlah Pengunjung Tahun 2025: 229</h4>
                                <svg width="314" height="48" viewBox="0 0 314 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.1 9.2998C9.675 9.2998 11.1375 10.1998 11.9813 11.5498C12.7688 12.9561 12.7688 14.6998 11.9813 16.0498C11.1375 17.4561 9.675 18.2998 8.1 18.2998C6.46875 18.2998 5.00625 17.4561 4.1625 16.0498C3.375 14.6998 3.375 12.9561 4.1625 11.5498C5.00625 10.1998 6.46875 9.2998 8.1 9.2998ZM28.8 9.2998C30.375 9.2998 31.8375 10.1998 32.6813 11.5498C33.4688 12.9561 33.4688 14.6998 32.6813 16.0498C31.8375 17.4561 30.375 18.2998 28.8 18.2998C27.1688 18.2998 25.7063 17.4561 24.8625 16.0498C24.075 14.6998 24.075 12.9561 24.8625 11.5498C25.7063 10.1998 27.1688 9.2998 28.8 9.2998ZM0 26.1186C0 22.7998 2.64375 20.0998 5.9625 20.0998H8.38125C9.28125 20.0998 10.125 20.3248 10.9125 20.6623C10.8 21.0561 10.8 21.5061 10.8 21.8998C10.8 24.0936 11.7 26.0061 13.2188 27.2998C13.2188 27.2998 13.2188 27.2998 13.1625 27.2998H1.18125C0.50625 27.2998 0 26.7936 0 26.1186ZM22.7813 27.2998H22.725C24.2438 26.0061 25.1438 24.0936 25.1438 21.8998C25.1438 21.5061 25.1438 21.0561 25.0875 20.6623C25.8188 20.3248 26.6625 20.0998 27.5625 20.0998H29.9813C33.3 20.0998 36 22.7998 36 26.1186C36 26.7936 35.4375 27.2998 34.7625 27.2998H22.7813ZM12.6 21.8998C12.6 19.9873 13.6125 18.2436 15.3 17.2311C16.9313 16.2748 19.0125 16.2748 20.7 17.2311C22.3313 18.2436 23.4 19.9873 23.4 21.8998C23.4 23.8686 22.3313 25.6123 20.7 26.6248C19.0125 27.5811 16.9313 27.5811 15.3 26.6248C13.6125 25.6123 12.6 23.8686 12.6 21.8998ZM7.2 36.6373C7.2 32.4748 10.5188 29.0998 14.6813 29.0998H21.2625C25.425 29.0998 28.8 32.4748 28.8 36.6373C28.8 37.4248 28.125 38.0998 27.2812 38.0998H8.6625C7.875 38.0998 7.2 37.481 7.2 36.6373Z" fill="#0E2B4F"/>
                                <path d="M56.0114 12.7273V36H51.0909V17.3977H50.9545L45.625 20.7386V16.375L51.3864 12.7273H56.0114ZM61.5426 36V32.4545L69.8267 24.7841C70.5313 24.1023 71.1222 23.4886 71.5994 22.9432C72.0843 22.3977 72.4517 21.8636 72.7017 21.3409C72.9517 20.8106 73.0767 20.2386 73.0767 19.625C73.0767 18.9432 72.9214 18.3561 72.6108 17.8636C72.3002 17.3636 71.8759 16.9811 71.3381 16.7159C70.8002 16.4432 70.1903 16.3068 69.5085 16.3068C68.7964 16.3068 68.1752 16.4508 67.6449 16.7386C67.1146 17.0265 66.7055 17.4394 66.4176 17.9773C66.1297 18.5152 65.9858 19.1553 65.9858 19.8977H61.3153C61.3153 18.375 61.66 17.053 62.3494 15.9318C63.0388 14.8106 64.0047 13.9432 65.2472 13.3295C66.4896 12.7159 67.9214 12.4091 69.5426 12.4091C71.2093 12.4091 72.66 12.7045 73.8949 13.2955C75.1373 13.8788 76.1032 14.6894 76.7926 15.7273C77.482 16.7652 77.8267 17.9545 77.8267 19.2955C77.8267 20.1742 77.6525 21.0417 77.304 21.8977C76.9631 22.7538 76.3532 23.7045 75.4744 24.75C74.5956 25.7879 73.357 27.0341 71.7585 28.4886L68.3608 31.8182V31.9773H78.1335V36H61.5426ZM84.5739 36.2955C83.8239 36.2955 83.1799 36.0303 82.642 35.5C82.1117 34.9621 81.8466 34.3182 81.8466 33.5682C81.8466 32.8258 82.1117 32.1894 82.642 31.6591C83.1799 31.1288 83.8239 30.8636 84.5739 30.8636C85.3011 30.8636 85.9375 31.1288 86.483 31.6591C87.0284 32.1894 87.3011 32.8258 87.3011 33.5682C87.3011 34.0682 87.1723 34.5265 86.9148 34.9432C86.6648 35.3523 86.3352 35.6818 85.9261 35.9318C85.517 36.1742 85.0663 36.2955 84.5739 36.2955ZM91.2756 36L100.923 16.9091V16.75H89.6847V12.7273H106.014V16.8068L96.3551 36H91.2756ZM113.818 30.9773L113.83 25.1705H114.534L120.125 18.5455H125.682L118.17 27.3182H117.023L113.818 30.9773ZM109.432 36V12.7273H114.273V36H109.432ZM120.341 36L115.205 28.3977L118.432 24.9773L126.011 36H120.341Z" fill="#E74C3C"/>
                                <ellipse cx="148.867" cy="24.0002" rx="5.86708" ry="5.46893" fill="#2ECC71"/>
                                <path d="M150.186 23.4178L150.029 23.5645C149.186 24.3498 148.344 25.1351 147.501 25.9205C147.331 26.0794 147.129 26.1142 146.928 26.0274C146.734 25.9425 146.628 25.787 146.656 25.5991C146.682 25.4633 146.75 25.3378 146.853 25.239C147.668 24.4658 148.493 23.7026 149.315 22.9363L149.471 22.7912C149.421 22.7832 149.37 22.7776 149.319 22.7747C148.99 22.7733 148.66 22.7763 148.331 22.7724C148.07 22.7696 147.89 22.6023 147.886 22.3697C147.883 22.116 148.046 21.9459 148.319 21.9443C149.077 21.9397 149.835 21.9392 150.592 21.9427C150.898 21.9443 151.071 22.0986 151.076 22.3809C151.09 23.0816 151.099 23.7824 151.101 24.4832C151.102 24.7401 150.923 24.8912 150.649 24.8891C150.391 24.8869 150.221 24.7321 150.213 24.4826C150.205 24.1863 150.204 23.8898 150.199 23.5934C150.198 23.5467 150.192 23.5009 150.186 23.4178Z" fill="white"/>
                                <path d="M162.989 18.8182V29H160.837V20.8615H160.777L158.445 22.3232V20.4141L160.966 18.8182H162.989ZM166.12 29.1293C165.792 29.1293 165.51 29.0133 165.275 28.7812C165.043 28.5459 164.927 28.2642 164.927 27.9361C164.927 27.6113 165.043 27.3329 165.275 27.1009C165.51 26.8688 165.792 26.7528 166.12 26.7528C166.438 26.7528 166.717 26.8688 166.955 27.1009C167.194 27.3329 167.313 27.6113 167.313 27.9361C167.313 28.1548 167.257 28.3554 167.144 28.5376C167.035 28.7166 166.891 28.8608 166.712 28.9702C166.533 29.0762 166.336 29.1293 166.12 29.1293ZM172.468 29.1392C171.725 29.1392 171.064 29.0116 170.484 28.7564C169.907 28.4979 169.452 28.1432 169.117 27.6925C168.785 27.2384 168.615 26.7147 168.605 26.1214H170.772C170.786 26.37 170.867 26.5888 171.016 26.7777C171.168 26.9633 171.371 27.1075 171.623 27.2102C171.874 27.313 172.158 27.3643 172.473 27.3643C172.801 27.3643 173.091 27.3063 173.343 27.1903C173.595 27.0743 173.792 26.9136 173.934 26.7081C174.077 26.5026 174.148 26.2656 174.148 25.9972C174.148 25.7254 174.072 25.4851 173.919 25.2763C173.77 25.0642 173.555 24.8984 173.273 24.7791C172.995 24.6598 172.663 24.6001 172.279 24.6001H171.329V23.0192H172.279C172.604 23.0192 172.89 22.9628 173.139 22.8501C173.391 22.7375 173.586 22.5817 173.725 22.3828C173.865 22.1806 173.934 21.9453 173.934 21.6768C173.934 21.4216 173.873 21.1979 173.75 21.0057C173.631 20.8101 173.462 20.6577 173.243 20.5483C173.028 20.4389 172.776 20.3842 172.488 20.3842C172.196 20.3842 171.929 20.4373 171.687 20.5433C171.445 20.6461 171.251 20.7936 171.105 20.9858C170.96 21.178 170.882 21.4034 170.872 21.6619H168.809C168.819 21.0753 168.986 20.5582 169.311 20.1108C169.636 19.6634 170.073 19.3137 170.623 19.0618C171.177 18.8066 171.801 18.679 172.498 18.679C173.2 18.679 173.815 18.8066 174.342 19.0618C174.869 19.317 175.278 19.6617 175.57 20.0959C175.865 20.5268 176.011 21.0107 176.007 21.5476C176.011 22.1177 175.833 22.5933 175.475 22.9744C175.121 23.3556 174.658 23.5975 174.088 23.7003V23.7798C174.837 23.8759 175.408 24.1361 175.799 24.5604C176.193 24.9813 176.389 25.5083 176.385 26.1413C176.389 26.7214 176.221 27.2367 175.883 27.6875C175.548 28.1383 175.086 28.4929 174.496 28.7514C173.906 29.0099 173.23 29.1392 172.468 29.1392ZM183.506 27.0909V26.554C183.506 26.1463 183.592 25.7718 183.764 25.4304C183.94 25.0857 184.194 24.8106 184.525 24.6051C184.86 24.3963 185.267 24.2919 185.748 24.2919C186.235 24.2919 186.645 24.3946 186.976 24.6001C187.311 24.8056 187.563 25.0807 187.732 25.4254C187.904 25.7668 187.99 26.143 187.99 26.554V27.0909C187.99 27.4986 187.904 27.8748 187.732 28.2195C187.559 28.5608 187.306 28.8343 186.971 29.0398C186.636 29.2486 186.229 29.353 185.748 29.353C185.261 29.353 184.852 29.2486 184.52 29.0398C184.189 28.8343 183.937 28.5608 183.764 28.2195C183.592 27.8748 183.506 27.4986 183.506 27.0909ZM184.953 26.554V27.0909C184.953 27.3262 185.009 27.5483 185.122 27.7571C185.238 27.9659 185.446 28.0703 185.748 28.0703C186.05 28.0703 186.255 27.9676 186.365 27.7621C186.477 27.5566 186.534 27.3329 186.534 27.0909V26.554C186.534 26.312 186.481 26.0866 186.374 25.8778C186.268 25.669 186.06 25.5646 185.748 25.5646C185.45 25.5646 185.243 25.669 185.127 25.8778C185.011 26.0866 184.953 26.312 184.953 26.554ZM178.281 21.2642V20.7273C178.281 20.3163 178.369 19.9401 178.544 19.5987C178.72 19.254 178.973 18.9789 179.305 18.7734C179.64 18.5679 180.044 18.4652 180.518 18.4652C181.008 18.4652 181.419 18.5679 181.751 18.7734C182.082 18.9789 182.334 19.254 182.507 19.5987C182.679 19.9401 182.765 20.3163 182.765 20.7273V21.2642C182.765 21.6752 182.677 22.0514 182.502 22.3928C182.329 22.7341 182.076 23.0076 181.741 23.2131C181.41 23.4152 181.002 23.5163 180.518 23.5163C180.034 23.5163 179.625 23.4136 179.29 23.2081C178.959 22.9993 178.707 22.7259 178.534 22.3878C178.365 22.0464 178.281 21.6719 178.281 21.2642ZM179.737 20.7273V21.2642C179.737 21.5062 179.794 21.7299 179.906 21.9354C180.022 22.1409 180.226 22.2436 180.518 22.2436C180.823 22.2436 181.03 22.1409 181.139 21.9354C181.252 21.7299 181.308 21.5062 181.308 21.2642V20.7273C181.308 20.4853 181.255 20.2599 181.149 20.0511C181.043 19.8423 180.833 19.7379 180.518 19.7379C180.223 19.7379 180.019 19.844 179.906 20.0561C179.794 20.2682 179.737 20.492 179.737 20.7273ZM178.937 29L185.937 18.8182H187.24L180.24 29H178.937Z" fill="#2ECC71"/>
                                <path d="M199.608 18.8182L202.63 27.3892H202.75L205.772 18.8182H207.065L203.326 29H202.054L198.315 18.8182H199.608ZM215.059 21.3636C214.999 20.8598 214.757 20.4688 214.333 20.1903C213.909 19.9119 213.389 19.7727 212.772 19.7727C212.321 19.7727 211.927 19.8456 211.589 19.9915C211.254 20.1373 210.992 20.3378 210.803 20.593C210.618 20.8482 210.525 21.1383 210.525 21.4631C210.525 21.7348 210.59 21.9685 210.719 22.1641C210.851 22.3563 211.021 22.517 211.226 22.6463C211.432 22.7723 211.647 22.8767 211.872 22.9595C212.098 23.0391 212.305 23.1037 212.494 23.1534L213.528 23.4318C213.793 23.5014 214.088 23.5975 214.413 23.7202C214.741 23.8428 215.054 24.0102 215.352 24.2223C215.654 24.4311 215.903 24.6996 216.098 25.0277C216.294 25.3558 216.391 25.7585 216.391 26.2358C216.391 26.786 216.247 27.2831 215.959 27.7273C215.674 28.1714 215.256 28.5244 214.706 28.7862C214.159 29.0481 213.495 29.179 212.713 29.179C211.983 29.179 211.352 29.0613 210.818 28.826C210.288 28.5907 209.87 28.2625 209.565 27.8416C209.264 27.4207 209.093 26.9318 209.053 26.375H210.326C210.359 26.7595 210.489 27.0777 210.714 27.3295C210.943 27.5781 211.231 27.7637 211.579 27.8864C211.93 28.0057 212.308 28.0653 212.713 28.0653C213.183 28.0653 213.606 27.9891 213.98 27.8366C214.355 27.6809 214.651 27.4654 214.87 27.1903C215.089 26.9119 215.198 26.5871 215.198 26.2159C215.198 25.8778 215.104 25.6027 214.915 25.3906C214.726 25.1785 214.477 25.0062 214.169 24.8736C213.861 24.741 213.528 24.625 213.17 24.5256L211.917 24.1676C211.122 23.9389 210.492 23.6125 210.028 23.1882C209.564 22.764 209.332 22.2088 209.332 21.5227C209.332 20.9527 209.486 20.4555 209.794 20.0312C210.106 19.6037 210.523 19.2723 211.047 19.0369C211.574 18.7983 212.162 18.679 212.812 18.679C213.468 18.679 214.052 18.7966 214.562 19.032C215.072 19.264 215.477 19.5821 215.775 19.9865C216.077 20.3909 216.236 20.8499 216.252 21.3636H215.059ZM224.036 29V18.8182H225.269V27.9062H230.002V29H224.036ZM233.811 29H232.519L236.257 18.8182H237.53L241.269 29H239.976L236.934 20.429H236.854L233.811 29ZM234.289 25.0227H239.499V26.1165H234.289V25.0227ZM249.263 21.3636C249.203 20.8598 248.961 20.4688 248.537 20.1903C248.113 19.9119 247.592 19.7727 246.976 19.7727C246.525 19.7727 246.131 19.8456 245.793 19.9915C245.458 20.1373 245.196 20.3378 245.007 20.593C244.822 20.8482 244.729 21.1383 244.729 21.4631C244.729 21.7348 244.793 21.9685 244.923 22.1641C245.055 22.3563 245.224 22.517 245.43 22.6463C245.635 22.7723 245.851 22.8767 246.076 22.9595C246.301 23.0391 246.509 23.1037 246.698 23.1534L247.732 23.4318C247.997 23.5014 248.292 23.5975 248.617 23.7202C248.945 23.8428 249.258 24.0102 249.556 24.2223C249.858 24.4311 250.106 24.6996 250.302 25.0277C250.497 25.3558 250.595 25.7585 250.595 26.2358C250.595 26.786 250.451 27.2831 250.163 27.7273C249.878 28.1714 249.46 28.5244 248.91 28.7862C248.363 29.0481 247.698 29.179 246.916 29.179C246.187 29.179 245.556 29.0613 245.022 28.826C244.492 28.5907 244.074 28.2625 243.769 27.8416C243.468 27.4207 243.297 26.9318 243.257 26.375H244.53C244.563 26.7595 244.692 27.0777 244.918 27.3295C245.146 27.5781 245.435 27.7637 245.783 27.8864C246.134 28.0057 246.512 28.0653 246.916 28.0653C247.387 28.0653 247.809 27.9891 248.184 27.8366C248.559 27.6809 248.855 27.4654 249.074 27.1903C249.293 26.9119 249.402 26.5871 249.402 26.2159C249.402 25.8778 249.308 25.6027 249.119 25.3906C248.93 25.1785 248.681 25.0062 248.373 24.8736C248.065 24.741 247.732 24.625 247.374 24.5256L246.121 24.1676C245.325 23.9389 244.696 23.6125 244.232 23.1882C243.768 22.764 243.536 22.2088 243.536 21.5227C243.536 20.9527 243.69 20.4555 243.998 20.0312C244.309 19.6037 244.727 19.2723 245.251 19.0369C245.778 18.7983 246.366 18.679 247.016 18.679C247.672 18.679 248.255 18.7966 248.766 19.032C249.276 19.264 249.68 19.5821 249.979 19.9865C250.28 20.3909 250.439 20.8499 250.456 21.3636H249.263ZM252.906 19.9119V18.8182H260.542V19.9119H257.34V29H256.107V19.9119H252.906ZM267.187 18.8182H268.599L271.423 23.571H271.542L274.366 18.8182H275.778L272.099 24.804V29H270.866V24.804L267.187 18.8182ZM278.213 29V18.8182H284.358V19.9119H279.446V23.3523H284.04V24.446H279.446V27.9062H284.437V29H278.213ZM287.838 29H286.545L290.284 18.8182H291.556L295.295 29H294.002L290.96 20.429H290.88L287.838 29ZM288.315 25.0227H293.525V26.1165H288.315V25.0227ZM297.721 29V18.8182H301.161C301.957 18.8182 302.61 18.9541 303.12 19.2259C303.631 19.4943 304.008 19.8639 304.254 20.3345C304.499 20.8052 304.622 21.3404 304.622 21.9403C304.622 22.5402 304.499 23.0722 304.254 23.5362C304.008 24.0002 303.632 24.3648 303.125 24.63C302.618 24.8918 301.97 25.0227 301.181 25.0227H298.397V23.9091H301.141C301.685 23.9091 302.123 23.8295 302.454 23.6705C302.789 23.5114 303.031 23.286 303.18 22.9943C303.332 22.6993 303.408 22.348 303.408 21.9403C303.408 21.5327 303.332 21.1764 303.18 20.8714C303.027 20.5665 302.784 20.3312 302.449 20.1655C302.114 19.9964 301.672 19.9119 301.122 19.9119H298.954V29H297.721ZM302.514 24.4261L305.019 29H303.587L301.122 24.4261H302.514Z" fill="#6F6F6F"/>
                                </svg>
  
                                <div id="main-chart"></div>
                          </div>
              </div>
        </div>
      </section> --}}

      <!-- Contact Section -->
      <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title">
          <h2>Kontak</h2>
          <p>Kontak Kami</p>
        </div><!-- End Section Title -->

        <div class="container">

          <div class="row gy-4">

            <div class="col-lg-6">

              <div class="row gy-4">
                <div class="col-md-6">
                  <div class="info-item" >
                    <i class="bi bi-geo-alt"></i>
                    <h3>Alamat</h3>
                    <p>Jl. Proklamasi No.56, RT.10/RW.2, Pegangsaan, Kec. Menteng, Kota Jakarta Pusat</p>
                    <p>DKI Jakarta, ID 10320</p>
                  </div>
                </div><!-- End Info Item -->

                <div class="col-md-6">
                  <div class="info-item">
                    <i class="bi bi-telephone"></i>
                    <h3>Telepon Kami</h3>
                    <p>+62 8212 5189 898</p>
                    <p>+181</p>
                  </div>
                </div><!-- End Info Item -->

                <div class="col-md-6">
                  <div class="info-item">
                    <i class="bi bi-envelope"></i>
                    <h3>Email Kami</h3>
                    <p>infoppid@bakamla.go.id</p>
                    <p>contactcenter@bakamla.go.id</p>
                  </div>
                </div><!-- End Info Item -->

                <div class="col-md-6">
                  <div class="info-item">
                    <i class="bi bi-clock"></i>
                    <h3>Jam Kerja</h3>
                    <p>Senin - Jumat</p>
                    <p>08:00 - 16:00</p>
                  </div>
                </div><!-- End Info Item -->

              </div>

            </div>

            <div class="col-lg-6">
              <form action="forms/contact.php" method="post" class="php-email-form">
                <div class="row gy-4">
                  <input type="hidden" name="csrf_token" value="UNIQUE_SECURE_TOKEN" />
                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Nama Anda" required="">
                    <p style="color:red; font-size:12px;">* Nama Wajib Di Isi</p>
                  </div>

                  <div class="col-md-6 ">
                    <input type="email" class="form-control" name="email" placeholder="Email Anda" required="">
                    <p style="color:red; font-size:12px;">* Email Wajib Di Isi</p>
                  </div>

                  <div class="col-12">
                    <textarea class="form-control" name="message" rows="6" placeholder="Pesan" required=""></textarea>
                    <p style="color:red; font-size:12px;">* Pesan Wajib Di Isi</p>
                  </div>

                  <div class="col-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>

                    <button type="submit">Kirim Pesan</button>
                  </div>

                </div>
              </form>
            </div><!-- End Contact Form -->

          </div>

        </div>

      </section><!-- /Contact Section -->
  
    </main>
@endsection