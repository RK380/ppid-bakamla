<style>
        #tautan {
            border-top: 1px solid #ffffff;
        }

        /* Background section agar konten card lebih pop-up */
        .history-section {
            /* background-color: #f9fafb; */
            background-image: url('<?php echo e(asset('/assets/img/hero-bg.png')); ?>');
            background-size: cover;
            background-position: center;
            /* PENTING: Padding top agar card tidak menutupi breadcrumb */
            padding-top: 40px; 
            padding-bottom: 80px;
        }

        /* Card Container - LEBAR */
        .history-card {
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border: 1px solid #f0f0f0;
            overflow: hidden;
            transition: transform 0.3s ease;
            width: 100%;
        }

        /* Dekorasi Header di dalam Card */
        .history-header {
            padding: 40px 50px 20px 50px;
            border-bottom: 1px solid #f0f0f0;
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .history-icon-wrapper {
            width: 60px;
            height: 60px;
            background-color: #e5eeff; /* Biru pudar */
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #012970; /* Biru Bakamla */
            box-shadow: 0 4px 10px rgba(202, 138, 4, 0.1);
        }

        .history-icon {
            font-size: 32px;
        }

        /* Styling Judul */
        .history-title {
            font-family: 'Inter', sans-serif;
            font-weight: 800;
            color: #1e293b;
            margin: 0;
            font-size: 28px;
        }

        /* Styling Konten Text */
        .history-content {
            font-family: 'Inter', sans-serif;
            color: #4b5563; /* Warna abu tua nyaman di mata */
            line-height: 1.8; /* Spasi antar baris lega */
            font-size: 16px;
            text-align: justify; /* Rata kiri kanan */
            padding: 10px 50px;
        }

        /* Styling elemen di dalam konten */
        .history-content p {
            margin-bottom: 1.5rem;
        }
        
        .history-content strong {
            color: #111827;
        }

        /* --- PERBAIKAN KHUSUS GAMBAR --- */
        .history-content img {
            /* display: block !important;        */
            margin-left: auto !important;    
            margin-right: auto !important;   
            max-width: 100%;                 
            height: auto;                    
            margin-top: 20px;
            margin-bottom: 10px;
            border-radius: 8px;              
            /* box-shadow: 0 4px 10px rgba(0,0,0,0.1);  */
        }

        .history-content figure {
            display: block;
            text-align: center !important;
            margin: 20px 0;
        }
        
        .history-content .media {
            display: flex;
            justify-content: center;
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 768px) {
            .history-header {
                padding: 25px;
                flex-direction: column;
                align-items: flex-start;
            }
            .history-content {
                padding: 25px;
            }
            .history-title {
                font-size: 24px;
            }
        }
</style>
  <!-- Page Title -->
    <div class="page-title" style="background: linear-gradient(rgba(232, 235, 240, 0.5) 28%, rgba(231, 233, 238, 0.8) 70%), url('<?php echo e(asset('assets/img/bannerprofile.png')); ?>');background-size: cover;
      background-position: center;">
      <div class="heading" style="margin-top:100px">
        <div class="container" data-aos="fade-up">
          <div class="row d-flex justify-content-center" style="text-align: justify">
            <div class="col-lg-8">
              <h1>Sejarah Singkat Badan Keamanan Laut Republik Indonesia</h1>
              <p class="mb-0" style="font-weight:500">Badan Keamanan Laut Republik Indonesia (Bakamla RI) dibentuk pada tanggal 15 Desember 2014, berdasarkan Peraturan Presiden Nomor 178 Tahun 2014. Namun, cikal bakal Bakamla RI dapat ditelusuri hingga tahun 1972 dengan terbentuknya Badan Koordinasi Keamanan Laut (Bakorkamla). Bakamla RI menggantikan Bakorkamla dan bertugas menjaga keamanan dan keselamatan di wilayah perairan dan wilayah yurisdiksi Indonesia.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs" data-aos="fade-up">
        <div class="container" data-aos="fade-up">
          <ol>
            <li><a href="/"><i class="bi bi-house"></i> Home</a></li>
            <li class="current">Sejarah Badan Keamanan Laut RI</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <div class="history-section">
            <div style="width: 95%; max-width: 1305px; margin: 0 auto;">
                <div class="history-card" data-aos="fade-up"> <div class="history-header">
                        <div class="history-icon-wrapper">
                            <i class="bi bi-hourglass-top history-icon"></i>
                        </div>
                        <h1 class="history-title">Sejarah Singkat Bakamla RI</h1>
                    </div>
                    <div class="history-content">
                        <div class="card-body">
                        <span><img src=<?php echo e(asset('assets/img/1972.png')); ?> style="width: 50px; height:50px" alt="" /> 1972</span> <br>
                        <span>Dibentuk Bakorkamla melalui Keputusan Bersama beberapa menteri, termasuk Menteri Pertahanan dan Keamanan, Menteri Perhubungan, Menteri Keuangan, Menteri Kehakiman, dan Jaksa Agung. </span> <br>
                        </div>
                        <div class="card-body">
                            <span><img src=<?php echo e(asset('assets/img/bakorkamla.png')); ?> style="width: 50px; height:50px" alt="" /> 2005</span> <br>
                            <span>Bakorkamla ditempatkan di bawah Menko Polhukam RI melalui Keputusan Presiden Nomor 81 Tahun 2005. </span>
                        </div>
                        <div class="card-body">
                            <span><img src=<?php echo e(asset('assets/img/logobkl.png')); ?> style="width: 50px; height:50px" alt="" /> 2014</span> <br>
                            <span>Bakorkamla bertransformasi menjadi Bakamla RI, yang diresmikan pada tanggal 15 Desember 2014 saat peringatan Hari Nusantara di Kalimantan Selatan. </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php echo $__env->make('layouts/aplikasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ppid/resources/views/halaman/sejarah/index.blade.php ENDPATH**/ ?>