<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>PPID | BAKAMLA (Badan Keamanan Laut)</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" href={{ asset('assets/img/logobkl.png') }}>
  <link rel="apple-touch-icon" href={{ asset('assets/img/logobkl.png')}}>

  <!-- jQuery Core -->
  <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>

  <!-- DataTables -->
  <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap5.min.js') }}"></script>



  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href={{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}>
  <link rel="stylesheet" href={{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}>
  <link rel="stylesheet" href={{ asset('assets/vendor/aos/aos.css')}}>
  <link rel="stylesheet" href={{ asset('assets/vendor/glightbox/css/glightbox.min.css')}}>
  <link rel="stylesheet" href={{ asset('assets/vendor/swiper/swiper-bundle.min.css')}}>

  <!-- Main CSS File -->
  <link rel="stylesheet" href={{ asset('assets/css/main.css')}}>

  <!-- font icons -->
  <!-- <link rel="stylesheet" href={{ asset('fe/assets/vendors/themify-icons/css/themify-icons.css') }}> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@icon/themify-icons@1.0.1-alpha.3/themify-icons.min.css">
  
  @yield('style')

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="/" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src={{ asset('assets/img/logobkl.png')}} alt="">
        <h1 class="sitename">PPID</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          {{-- <li><a href="/" class="@if(request()->routeIs('halaman.index')) active @endif">Beranda<br></a></li> --}}
          <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="/profil">Profil Singkat PPID</a></li>
              <li><a href="/sejarah">Sejarah Badan Keamanan Laut RI</a></li>
              <li><a href="/tugas">Tugas & Tanggung Jawab</a></li>
              <li><a href="/visimisi">Visi & Misi</a></li>
              <li><a href="/strukturorg">Struktur Organisasi</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Informasi Publik</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              @foreach($klasifikasis as $klasifikasi)
              <li><a href={{ route('infopub', $klasifikasi->id) }}>{{ $klasifikasi->klasifikasi }}</a></li>
              @endforeach
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Daftar Informasi</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="/daftarinfo">Informasi Publik Secara Berkala</a></li>
              <li><a href="/infopsm">Informasi Publik Serta Merta</a></li>
              <li><a href="/infopss">Informasi Publik Setiap Saat</a></li>
              <li><a href="/infodkc">Informasi Dikecualikan</a></li>
            </ul>
          </li>
          <li><a href="{{ route('pemohon.register') }}" class="@if(request()->routeIs('pemohon.register')) active @endif">Permohonan Informasi</a></li>
          <li><a href="https://lpse.bakamla.go.id" class="@if(request()->routeIs('pemohon.register')) active @endif">Informasi PBJ</a></li>
          <li class="dropdown"><a href="#"><span>Standar Pelayanan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="/standpel">Standar Layanan Operasional</a></li>
              <li><a href="/kep90">Kep90 Standar Pelayanan</a></li>
              {{-- <li><a href="#">Maklumat Layanan</a></li>
              <li><a href="#">Prosedur Pengajuan Keberatan</a></li>
              <li><a href="#">Biaya, Waktu Dan Media Pelayanan</a></li> --}}
            </ul>
          </li>
          <li><a href="/statistik" class="@if(request()->routeIs('halaman.statistik')) active @endif">Statistik</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted flex-md-shrink-0" href="/faq">FAQ</a>

    </div>
  </header>

    @yield('konten')
    <footer id="footer" class="footer">
  
        <div class="container footer-top">
          <div class="row gy-4">
            <div class="col-lg-4 col-md-4 footer-about">
              <a href="index.html" class="d-flex align-items-center">
                <span class="sitename">PPID</span>
              </a>
              <div class="footer-contact pt-3">
                <p><strong>PPID Bakamla RI</strong></p>
                <p><strong>Bakamla Gedung Perintis Kemerdekaan</strong></p>
                <p class="mt-3"><strong>Phone:</strong> <span>+62 8212 5189 898</span></p>
                <p><strong>Email:</strong> <span>contactcenter@bakamla.go.id</span></p>
              </div>
              <div class="row">
                <h4 class="title" style="margin-bottom: 5px;padding-top:1rem;">Total Pengunjung</h4>
                <div class="d-flex flex-row flex-wrap flex-md-nowrap justify-content-between visitor">
							<div class="p-2 visitor-online" style="color:white;width:100%;background: #0F3D6C;border-top-left-radius: 7px;">
								<strong class="d-block">Hari Ini</strong>
								{{ $today }}
							</div>
							<div class="p-2 ms-0 ms-md-1 mt-1 mt-md-0 visitor-week" style="color:black;width:100%;background-color: #a5a5a5;">
								<strong class="d-block" style="color:black;">Minggu Ini</strong>
								{{ $thisWeek }}
							</div>
							<div class="p-2 ms-0 ms-md-1 mt-1 mt-md-0 visitor-monthly" style="color:black;width:100%;background-color: #a5a5a5;border-top-right-radius: 7px;">
								<strong class="d-block" style="color:black;">Bulan Ini</strong>
								{{ $thisMonth }}
							</div>
							
						</div>
						<div class="d-flex flex-row mt-1 flex-wrap flex-md-nowrap visitor">
							<div class="p-2 visitor-year" style="color:black;width:100%;background-color: #a5a5a5;border-bottom-left-radius: 7px;">
								<strong class="d-block" style="color:black">Tahun Ini</strong>
								{{ $thisYear }}
							</div>
							<div class="p-2 ms-0 ms-md-1 mt-1 mt-md-0 visitor-all" style="color:black;width:100%;background-color: #a5a5a5;border-bottom-right-radius: 7px;">
								<strong class="d-block" style="color:black;">Total Kunjungan</strong>
								{{ $total }}
							</div>
						</div>
            </div>
            </div>
    
            <div class="col-lg-4 col-md-4 footer-links">
              <h4>UNIT KERJA</h4>
              <div class="flicker-img">
                <a href="#">
                    <img src={{ asset('assets/img/BIROUM.png') }} style="max-width:100%;heigh:auto;" />
                </a>
                <a href="#">
                    <img src={{ asset('assets/img/DATIN.png') }} style="max-width:100%;heigh:auto;" />
                </a>
                <a href="#">
                  <img src={{ asset('assets/img/INSPEKTORAT.png') }} style="max-width:100%;heigh:auto;" />
                </a>
                <div class="clearfix"></div>
                <a href="#">
                  <img src={{ asset('assets/img/UPH.png') }} style="max-width:100%;heigh:auto;" />
                </a>
                <a href="#">
                  <img src={{ asset('assets/img/OPSLA.png') }} style="max-width:100%;heigh:auto;" />
                </a>
                <a href="#">
                    <img src={{ asset('assets/img/KPIML.png') }} style="max-width:100%;heigh:auto;" />
                </a>
                <a href="/unitkerja"><i class="bi bi-chevron-right"></i> Selengkapnya</a>
              </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <h4>Badan Keamanan Laut</h4>
                <p>PEJABAT PENGELOLA INFORMASI DAN DOKUMENTASI</p>
                <div class="social-links d-flex">
                  <a href="https://twitter.com/HumasBakamlaRI?ref_src=twsrc%5Etfw"><i class="bi bi-twitter-x"></i></a>
                  <a href="https://www.instagram.com/bakamla_ri?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="bi bi-instagram"></i></a>
                  <a href="https://youtube.com/@bakamlariofficial3164?si=gK2t3AY0WCUOQtJB"><i class="bi bi-youtube"></i></a>
                  <a href="#"><i class="bi bi-facebook"></i></a>
                  <a href="#"><i class="bi bi-tiktok"></i></a>
                </div>
                <div class="tab-content" id="pills-tabContent" style="height: 350px;overflow-y:scroll;margin-top:10px;">
                    <div class="tab-pane fade active show" id="pills-ig" role="tabpanel" aria-labelledby="pills-ig-tab">
                        <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/C7iPoyDPZtO/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/C7iPoyDPZtO/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/C7iPoyDPZtO/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Bakamla RI (@bakamla_ri)</a></p></div></blockquote>
                     <!-- <script async src="//www.instagram.com/embed.js"></script> -->
			<script async src={{ asset('assets/vendor/js/embed.js') }}></script>
                    </div>
                    {{-- <div class="tab-pane fade" id="pills-fb" role="tabpanel" aria-labelledby="pills-fb-tab">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FBasarnas.Official&amp;tabs=timeline&amp;width=340&amp;height=400&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId" width="340" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </div>
                    <div class="tab-pane fade" id="pills-tiktok" role="tabpanel" aria-labelledby="pills-tiktok-tab">
                        <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@basarnasofficial" data-unique-id="basarnasofficial" data-embed-type="creator" style="max-width: 780px; min-width: 288px;" id="v63786349845658456">  <iframe name="__tt_embed__v63786349845658456" sandbox="allow-popups allow-popups-to-escape-sandbox allow-scripts allow-top-navigation allow-same-origin" src="https://www.tiktok.com/embed/@basarnasofficial?lang=en-US&amp;referrer=https%3A%2F%2Fbasarnas-ppid.proposaldigital.com%2F" style="width: 100%; height: 388px; display: block; visibility: unset; max-height: 388px;"></iframe></blockquote> <script async="" src="https://www.tiktok.com/embed.js"></script>
                    </div> --}}
                   
                </div>
            </div>

          </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Direktorat Data & Informasi Badan Keamanan Laut Republik Indonesia</strong> </p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
            </div>
        </div>
    </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src={{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}></script>
  <script src={{ asset('assets/vendor/php-email-form/validate.js') }}></script>
  <script src={{ asset('assets/vendor/aos/aos.js') }}></script>
  <script src={{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}></script>
  <script src={{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}></script>
  <script src={{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}></script>
  <script src={{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}></script>
  <script src={{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}></script>
  <!-- <script src="https://website-widgets.pages.dev/dist/sienna.min.js" defer></script> -->

  <!-- Main JS File -->
  <script src={{ asset('assets/js/main.js') }}></script>

  <!-- <script type="text/javascript">
    $(function () {
          
      var table = $('.data-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: "/infopsb",
          columns: [
              {data: 'id', name: 'id'},
              {data: 'judul', name: 'informasi publik'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });
          
    });
  </script> -->

  <!--<script src="https://code.jquery.com/jquery-3.5.1.js"></script>-->
  <!--<script src={{ asset('assets/img/DATIN.png') }}></script>-->
  <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script> 

  <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js" integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  @yield('scripts')
  <!-- Widget -->
  <!-- <script src="https://website-widgets.pages.dev/dist/sienna.min.js" defer></script> -->
  <script src="https://code.responsivevoice.org/responsivevoice.js?key=x7dIx3sY"></script>
  <!-- <script src="https://web.animemusic.us/widget_disabilitas.js"></script> -->
  <script src="{{ asset('assets/vendor/js/widget_disabilitas.js') }}"></script>

</body>

</html>
