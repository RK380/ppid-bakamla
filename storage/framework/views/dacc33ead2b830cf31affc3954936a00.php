<style>
        #tautan {
            border-top: 1px solid #ffffff;
        }

        /* Background Area */
        .vision-section {
            /* background-color: #f9fafb; */
            background-image: url('<?php echo e(asset('/assets/img/hero-bg.png')); ?>');
            background-size: cover;
            background-position: center;
            /* PENTING: Padding top agar card tidak menutupi breadcrumb */
            padding-top: 40px; 
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
            background-color: #e5eeff; /* Biru muda sangat pudar */
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #012970; /* Biru Bakamla */
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
            border-left: 4px solid #012970;
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
            border-top: 1px solid #E0E0E0;
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
            background-color: #e5eeff; /* Biru sangat muda */
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #012970; /* Biru gelap */
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
            border-color: #012970; /* Border berubah merah */
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
            color: #012970; /* Teks jadi biru saat hover */
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
            background-color: #012970;
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
<style>
        #tautan {
            border-top: 1px solid #ffffff;
        }

        /* Background Area */
        .sop-section {
            background-color: #f8fafc; /* Abu-abu sangat muda */
            /* PENTING: Padding top agar card tidak menutupi breadcrumb */
            padding-top: 40px; 
            padding-bottom: 40px;
            min-height: 800px;
        }

        /* Card Container - Dibuat Lebar */
        .sop-card {
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05); /* Shadow halus */
            border: 1px solid #e2e8f0;
            overflow: hidden;
            position: relative;
            width: 100%;
        }

        /* Header Card */
        .sop-header {
            padding: 25px 40px;
            border-bottom: 1px solid #f1f5f9;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #ffffff;
        }

        .sop-title-wrapper {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .sop-icon-wrapper {
            width: 50px;
            height: 50px;
            background-color: #eff6ff; /* Biru muda */
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #3b82f6; /* Biru */
            box-shadow: 0 2px 5px rgba(59, 130, 246, 0.1);
        }

        .sop-icon {
            font-size: 26px;
        }

        .sop-title {
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            color: #0f172a;
            font-size: 22px;
            margin: 0;
        }

        /* Tombol Download */
        .btn-download-sop {
            background-color: #E74C3C;
            color: white;
            padding: 12px 24px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.2s ease-in-out;
            border: 1px solid transparent;
        }

        .btn-download-sop:hover {
            background-color: #c0392b;
            color: white;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.25);
        }

        /* Area PDF Viewer */
        .sop-body {
            padding: 0;
            background-color: #525659;
            /* height: 90vh; Tinggi menyesuaikan layar (90% viewport height) */
            min-height: 600px;
            position: relative;
        }

        .sop-iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        /* Responsif Mobile */
        @media (max-width: 768px) {
            .sop-header {
                padding: 20px;
                flex-direction: column;
                align-items: flex-start;
                gap: 20px;
            }
            
            .sop-title-wrapper {
                width: 100%;
            }

            .btn-download-sop {
                width: 100%;
                justify-content: center;
            }

            .sop-body {
                height: 500px;
            }
            
            .sop-title {
                font-size: 18px;
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
              <h1>Profil Singkat PPID Bakamla RI</h1>
              <p class="mb-0" style="font-weight:500">Hak Publik untuk mendapatkan informasi adalah salah satu elemen penting dalam mewujudkan penyelenggaraan negara yang terbuka sesuai dengan peraturan perundang-undangan. Sesuai dengan amanat Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik (UU KIP), Badan Nasional Pencarian dan Pertolongan sebagai salah satu Badan Publik telah membentuk Pejabat Pengelola Informasi dan Dokumentasi (PPID) melalui Peraturan Kepala Badan Keamanan Laut Nomor 175 Tahun 2021 Tentang Pelayanan Publik Di Lingkungan Badan Keamanan Laut. Dan telah di perbarui dengan Keputusan Kepala Badan Keamanan Laut Nomor: SKEP.KBKL-176/DI.01.02/IX/BKL-2022 tentang Pelayanan Publik Di Lingkungan Badan Keamanan Laut.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs" data-aos="fade-up">
        <div class="container" data-aos="fade-up">
          <ol>
            <li><a href="/"><i class="bi bi-house"></i> Home</a></li>
            <li class="current">Profil Singkat PPID</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <div class="vision-section">
        <div style="width: 95%; max-width: 1305px; margin: 0 auto;">
            <div class="vision-card" data-aos="fade-up"> <div class="vision-header">
                    <div class="vision-icon-wrapper">
                        <i class="bi bi-person-badge vision-icon"></i>
                    </div>
                    <h1 class="vision-title">Profil Singkat PPID BAKAMLA RI</h1>
                </div>
                <div class="vision-body">
                  <blockquote data-asw-org-font-size="16" style="font-size: 16px;">“Pelayanan Informasi Publik di Lingkungan Badan Keamanan Laut berpedoman pada Peraturan Kepala Badan Keamanan Laut Nomor SKEP.176 Tahun 2022 Tentang Pelayanan Publik Di Lingkungan Badan Keamanan Laut memiliki tujuan untuk:”</blockquote>
                    <ol class="legal-list">
                      <li class="legal-item">
                        <div class="legal-item-content">
                          Mampu menyediakan, mengumpulkan, mendokumentasikan, dan menyampaikan informasi tentang kegiatan dan produk unit kerjanya secara cepat, tepat waktu, akurat, dan dapat dipertanggungjawabkan.
                        </div>
                      </li>
                      <li class="legal-item">
                        <div class="legal-item-content">
                          Meningkatkan pengelolaan layanan infomasi di lingkungan Badan Keamanan Laut RI untuk menghasilkan layanan infomasi yang berkualitas.
                        </div>
                      </li>
                      <li class="legal-item">
                        <div class="legal-item-content">
                          Meningkatkan peran aktif masyarakat dalam pengambilan kebijakan publik dan pengelolaan penyelenggaraan negara yang baik.
                        </div>
                      </li>
                    </ol>
                    <blockquote data-asw-org-font-size="16" style="font-size: 16px;">“Prinsip pelayanan informasi publik yaitu:”</blockquote>
                      <ol class="legal-list">
                        <li class="legal-item">
                          <div class="legal-item-content">
                            Mudah, cepat, tepat waktu dan sederhana.
                          </div>
                        </li>
                        <li class="legal-item">
                          <div class="legal-item-content">
                            Dilaksanakan melalui satu pintu.
                          </div>
                        </li>
                        <li class="legal-item">
                          <div class="legal-item-content">
                            Penyajian informasi publik sesuai dengan jenis dan format yang tersedia.
                          </div>
                        </li>
                      </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="sop-section">
            <div style="width: 95%; max-width: 1305px; margin: 0 auto;">
                <div class="sop-card" data-aos="fade-up"> 
                    <div class="sop-header">
                        <div class="sop-title-wrapper">
                            <div class="sop-icon-wrapper">
                                <i class="bi bi-files sop-icon"></i>
                            </div>
                            <div>
                                <h1 class="sop-title">Dokumen SKEP NO 186 Tahun 2021 Tentang PPID BAKAMLA RI</h1>
                                <span class="text-muted" style="font-size: 13px;">Pratinjau Dokumen Digital</span>
                            </div>
                        </div>
                    </div>
                    <div class="sop-body">
                        <iframe 
                            src="https://bakamla.go.id/uploads/ppid/SKEP_No_186_Tahun_2021_Tentang_PPID.pdf" type="application/pdf" style="width: 100%; height: 680px"
                        ></iframe>
                    </div>
                </div>
            </div>
        </div>
<?php echo $__env->make('layouts/aplikasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ppid/resources/views/halaman/profil/index.blade.php ENDPATH**/ ?>