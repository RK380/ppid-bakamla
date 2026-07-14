<style>
        #tautan {
            border-top: 1px solid #ffffff;
        }

        /* Background Area */
        .vision-section {
            /* background-color: #f9fafb; */
            background-image: url('<?php echo e(asset('/assets/img/hero-bg.png')); ?>');
            background-size: cover;
            background-position: top;
            /* PENTING: Padding top agar card tidak menutupi breadcrumb */
            padding-top: 40px; 
            padding-bottom: 40px;
        }

        .vision-section2 {
            /* background-color: #f9fafb; */
            background-image: url('<?php echo e(asset('/assets/img/hero-bg.png')); ?>');
            background-size: cover;
            background-position: bottom;
            /* PENTING: Padding top agar card tidak menutupi breadcrumb */
            padding-bottom: 40px;
        }

        /* Card Container - Lebar */
        .vision-card {
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.05);
            border: 1px solid #edf2f7;
            overflow: hidden;
            position: relative;
            width: 100%;
        }

        /* Dekorasi Header di dalam Card */
        .vision-header {
            padding: 40px 50px 20px 50px;
            border-bottom: 1px solid #f0f0f0;
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .vision-icon-wrapper {
            width: 60px;
            height: 60px;
            background-color: #fff1f2; /* Merah muda sangat pudar */
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #E74C3C; /* Merah Bakamla */
            box-shadow: 0 4px 10px rgba(231, 76, 60, 0.1);
        }

        .vision-icon {
            font-size: 32px;
        }

        .vision-title {
            font-family: 'Inter', sans-serif;
            font-weight: 800;
            color: #1e293b;
            font-size: 28px;
            margin: 0;
        }

        /* Area Konten */
        .vision-body {
            padding: 40px 50px;
            font-family: 'Inter', sans-serif;
            color: #4b5563;
            line-height: 1.8;
            font-size: 16px;
        }

        /* Styling Typography untuk konten dari database */
        .vision-body p {
            margin-bottom: 1.5rem;
            text-align: justify;
        }

        .vision-body ul, .vision-body ol {
            margin-bottom: 1.5rem;
            padding-left: 20px;
        }

        .vision-body li {
            margin-bottom: 10px;
        }
        
        /* Stylize blockquote jika ada */
        .vision-body blockquote {
            border-left: 4px solid #E74C3C;
            padding-left: 20px;
            font-style: italic;
            background: #fffafa;
            padding: 15px;
            border-radius: 0 8px 8px 0;
        }

        /* Responsif Mobile */
        @media (max-width: 768px) {
            .vision-header {
                padding: 25px;
                flex-direction: column;
                align-items: flex-start;
            }
            .vision-body {
                padding: 25px;
            }
            .vision-title {
                font-size: 24px;
            }
        }
</style>
<style>
        #tautan {
            border-top: 1px solid #ffffff;
        }

        /* Background Section */
        .dasar-hukum-section {
            background-color: #f9fafb;
            padding-top: 40px;
            padding-bottom: 80px;
        }

        /* Card Container Utama (Lebar) */
        .dasar-hukum-card {
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.05);
            border: 1px solid #edf2f7;
            overflow: hidden;
            position: relative;
            width: 100%;
        }

        /* Header Judul dengan Ikon */
        .dasar-hukum-header {
            padding: 40px 50px 20px 50px;
            border-bottom: 1px solid #f0f0f0;
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .icon-wrapper {
            width: 60px;
            height: 60px;
            background-color: #fff1f2; /* Merah sangat muda */
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #E74C3C; /* Merah gelap */
            box-shadow: 0 4px 10px rgba(220, 38, 38, 0.1);
        }

        .icon-hukum {
            font-size: 32px;
        }

        .dasar-hukum-title {
            font-family: 'Inter', sans-serif;
            font-weight: 800;
            color: #1e293b;
            font-size: 28px;
            margin: 0;
        }

        /* Area Konten */
        .dasar-hukum-content-wrapper {
            padding: 40px 50px;
        }

        /* List Styling - Grid Layout untuk Kartu */
        .legal-list {
            counter-reset: legal-counter;
            list-style: none;
            padding: 0;
            display: grid;
            grid-template-columns: 1fr; /* 1 kolom ke bawah */
            gap: 15px; /* Jarak antar kartu */
        }

        /* Styling Item sebagai CARD */
        .legal-item {
            position: relative;
            background-color: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 20px 20px 20px 60px; /* Padding kiri besar untuk nomor */
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0,0,0,0.02);
            display: flex;
            align-items: center;
        }

        /* Hover Effect pada Kartu */
        .legal-item:hover {
            transform: translateY(-3px); /* Naik sedikit */
            box-shadow: 0 10px 20px rgba(0,0,0,0.08);
            border-color: #E74C3C; /* Border berubah merah */
            background-color: #e5eeff; /* Background agak kemerahan dikit */
        }

        /* Konten Teks di dalam kartu */
        .legal-item-content {
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            line-height: 1.6;
            color: #334155;
            width: 100%;
        }

        /* Agar link di dalam item memenuhi area dan berwarna baik */
        .legal-item-content a {
            text-decoration: none;
            color: #334155;
            font-weight: 500;
            display: block; /* Supaya area klik luas */
            transition: color 0.2s;
        }

        .legal-item:hover .legal-item-content a,
        .legal-item:hover .legal-item-content {
            color: #E74C3C; /* Teks jadi biru saat hover */
        }

        /* Custom Numbering - Lingkaran */
        .legal-item::before {
            counter-increment: legal-counter;
            content: counter(legal-counter);
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%); /* Posisi tengah vertikal */
            
            width: 32px;
            height: 32px;
            background-color: #f1f5f9; /* Abu muda */
            color: #64748b; /* Abu tua */
            border-radius: 50%;
            
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 14px;
            transition: all 0.3s;
        }

        /* Nomor berubah warna saat hover */
        .legal-item:hover::before {
            background-color: #E74C3C;
            color: #ffffff;
        }

        /* Responsif */
        @media (max-width: 768px) {
            .dasar-hukum-header,
            .dasar-hukum-content-wrapper {
                padding: 25px;
            }
            
            .dasar-hukum-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .dasar-hukum-title {
                font-size: 24px;
            }

            .legal-item {
                padding: 15px 15px 15px 50px; /* Sesuaikan padding mobile */
            }
            
            .legal-item::before {
                left: 10px;
                width: 28px;
                height: 28px;
                font-size: 12px;
            }
        }
</style>

<!-- Page Title -->
    <div class="page-title" style="background: linear-gradient(rgba(232, 235, 240, 0.5) 28%, rgba(231, 233, 238, 0.8) 70%), url('<?php echo e(asset('assets/img/bannerprofile.png')); ?>');background-size: contain, cover;
      background-position: center;">
      <div class="heading" style="margin-top:100px">
        <div class="container" data-aos="fade-up">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Visi dan Misi</h1>
              <p class="mb-0" style="font-weight:500">Pejabat Pengelola Informasi Dan Dokumentasi (PPID)</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs" data-aos="fade-up">
        <div class="container" data-aos="fade-up">
          <ol>
            <li><a href="/"><i class="bi bi-house"></i> Home</a></li>
            <li class="current">Visi dan Misi</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <div class="vision-section">
            <div style="width: 95%; max-width: 1305px; margin: 0 auto;">
                <div class="vision-card" data-aos="fade-up"> <div class="vision-header">
                        <div class="vision-icon-wrapper">
                            <i class="bi bi-bullseye vision-icon"></i>
                        </div>
                        <h1 class="vision-title">Visi PPID BAKAMLA RI</h1>
                    </div>
                    <div class="vision-body">
                        <blockquote data-asw-org-font-size="16" style="font-size: 16px;">“Mewujudkan Pelayanan Informasi Publik dengan Cepat dan Akuntabel”</blockquote>
                    </div>
                </div>
            </div>
        </div>

    <div class="vision-section2">
            <div style="width: 95%; max-width: 1305px; margin: 0 auto;">
                <div class="vision-card" data-aos="fade-up"> <div class="vision-header">
                        <div class="vision-icon-wrapper">
                            <i class="bi bi-bullseye vision-icon"></i>
                        </div>
                        <h1 class="vision-title">Misi PPID BAKAMLA RI</h1>
                    </div>
                    <div class="vision-body">
                      <ol class="legal-list">
                        <li class="legal-item">
                          <div class="legal-item-content">
                            Meningkatkan pengelolaan dokumentasi Informasi publik.
                          </div>
                        </li>
                        <li class="legal-item">
                          <div class="legal-item-content">
                            Memenuhi kebutuhan Masyarakat terhadap akses informasi.
                          </div>
                        </li>
                        <li class="legal-item">
                          <div class="legal-item-content">
                            Meningkatkan sarana dan prasarana pelayanan informasi publik.
                          </div>
                        </li>
                        <li class="legal-item">
                          <div class="legal-item-content">
                            Memberikan Informasi yang Akurat dan Akuntabel kepada Masyarakat.
                          </div>
                        </li>
                      </ol>
                    </div>
                </div>
            </div>
        </div>
<?php echo $__env->make('layouts/aplikasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ppid/resources/views/halaman/visimisi/index.blade.php ENDPATH**/ ?>