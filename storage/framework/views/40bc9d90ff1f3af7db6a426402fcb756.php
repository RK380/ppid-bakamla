<!DOCTYPE html>
<html lang="id">

<head>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-VBDN3GPGFK"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-VBDN3GPGFK');
  </script>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <meta name="description" content="Website Pejabat Pengelola Informasi Publik (PPID) Badan Keamanan Laut Republik Indonesia mewujudkan pelayanan informasi publik yang informatif dan memberikan keterbukaan informasi yang optimal kepada lembaga maupun perorangan">
  <meta name="keywords" content="PPID, Badan Keamanan Laut, informasi publik secara berkala, informasi publik serta merta, informasi publik setiap saat, informasi publik dikecualikan" >
  <meta property="og:title" content="Website Utama PPID Badan Keamanan Laut">
  <meta property="og:description" content="Website Utama PPID Badan Keamanan Laut Republik Indonesia">
  
  <title>PPID | Badan Keamanan Laut RI</title>
  <!-- Favicons -->
  <link rel="icon" href=<?php echo e(asset('assets/img/logobkl.png')); ?>>
  <link rel="apple-touch-icon" href=<?php echo e(asset('assets/img/logobkl.png')); ?>>
  <!-- jQuery Core -->
  <script src="<?php echo e(asset('assets/vendor/jquery/jquery.min.js')); ?>"></script>
  <!-- DataTables -->
  <script src="<?php echo e(asset('assets/vendor/datatables/jquery.dataTables.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/datatables/dataTables.bootstrap5.min.js')); ?>"></script>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href=<?php echo e(asset('assets/vendor/bootstrap/css/bootstrap.min.css')); ?>>
  <link rel="stylesheet" href=<?php echo e(asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')); ?>>
  <link rel="stylesheet" href=<?php echo e(asset('assets/vendor/aos/aos.css')); ?>>
  <link rel="stylesheet" href=<?php echo e(asset('assets/vendor/glightbox/css/glightbox.min.css')); ?>>
  <link rel="stylesheet" href=<?php echo e(asset('assets/vendor/swiper/swiper-bundle.min.css')); ?>>
  <!-- Main CSS File -->
  <link rel="stylesheet" href=<?php echo e(asset('assets/css/main.css')); ?>>
  <!-- leflet -->
  
  <link rel="stylesheet" href="<?php echo e(asset('be/src/assets/leaflet/leaflet.css')); ?>">
  <style>
    .main-background {
             background: #0f172a !important;
             z-index: 100;
             position: relative;
             overflow: visible;
             width: 100%;
          }
          
          /* Cinematic Slider Background Layers */
          .bg-slide-layer {
             position: absolute;
             top: 0;
             left: 0;
             width: 100%;
             height: 100%;
             background-size: cover;
             background-position: top center;
             background-repeat: no-repeat;
             z-index: -3;
             opacity: 0;
             will-change: transform, opacity;
             transition: opacity 2.5s cubic-bezier(0.16, 1, 0.3, 1);
             pointer-events: none !important;
          }

          .main-background:before {
             content: "";
             z-index: -1;
             width: 100%;
             height: 100%;
             position: absolute;
             top: 0;
             left: 0;
             right: 0;
             bottom: 0;
             margin: auto;
             background: linear-gradient(90deg, #0F172A 0%, rgba(15, 23, 42, 0.2) 100%);
             pointer-events: none;
          }

          /* --- PRESETS FOR PREMIUM STYLES & TRANSITIONS --- */
          .bg-slide-layer.active-init {
             opacity: 1;
             transform: scale(1);
          }

    .stats-container {
            margin-top: -60px; /* Floating effect */
            position: relative;
            z-index: 100; /* PERBAIKAN: Harus lebih besar dari 100 (main-background) */
            margin-bottom: 40px;
        }

        .card-stat {
            border: 1px solid rgba(255, 255, 255, 0.6);
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.04);
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            overflow: hidden;
            height: 100%;
            position: relative;
            display: flex;
            align-items: center;
            padding: 26px 22px;
            text-decoration: none;
            will-change: transform, box-shadow;
        }

        .card-stat::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: 2;
        }

        .card-stat:hover {
            transform: translateY(-12px) scale(1.03);
            box-shadow: 0 20px 40px rgba(15, 23, 42, 0.12);
        }

        .card-stat:hover::before {
            opacity: 1;
        }

        /* Dekorasi Lingkaran Pudar */
        .card-stat::after {
            content: '';
            position: absolute;
            right: -25px;
            top: -25px;
            width: 120px;
            height: 120px;
            border-radius: 50%;
            opacity: 0.06;
            z-index: 0;
            transition: transform 0.6s ease;
        }

        .card-stat:hover::after {
            transform: scale(1.2);
        }

        .stat-icon-box {
            width: 62px;
            height: 62px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            margin-right: 22px;
            z-index: 1;
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            color: #ffffff !important;
        }

        .card-stat:hover .stat-icon-box {
            transform: scale(1.15) rotate(12deg);
        }

        .stat-content {
            z-index: 1;
        }

        .stat-title {
            font-family: 'Inter', sans-serif;
            font-size: 15px;
            font-weight: 600;
            color: #64748b;
            margin-bottom: 4px;
            transition: color 0.3s ease;
        }

        .stat-number {
            font-family: 'Inter', sans-serif;
            font-size: 30px;
            font-weight: 800;
            color: #0f172a;
            margin: 0;
            transition: all 0.3s ease;
        }

        /* Warna & Gradient Spesifik per Kategori */
        /* Peraturan (Biru) */
        .stat-peraturan .stat-icon-box {
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
            box-shadow: 0 8px 20px rgba(37, 99, 235, 0.25);
        }
        .stat-peraturan::after { background-color: #2563eb; }
        .stat-peraturan::before { background: #2563eb; }
        .stat-peraturan:hover { border-color: rgba(37, 99, 235, 0.35); }
        .stat-peraturan:hover .stat-title { color: #1d4ed8; }
        .stat-peraturan:hover .stat-number { color: #1d4ed8; }

        /* Monografi (Hijau) */
        .stat-monografi .stat-icon-box {
            background: linear-gradient(135deg, #10b981, #047857);
            box-shadow: 0 8px 20px rgba(16, 185, 129, 0.25);
        }
        .stat-monografi::after { background-color: #16a34a; }
        .stat-monografi::before { background: #16a34a; }
        .stat-monografi:hover { border-color: rgba(16, 185, 129, 0.35); }
        .stat-monografi:hover .stat-title { color: #047857; }
        .stat-monografi:hover .stat-number { color: #047857; }

        /* Putusan (Merah) */
        .stat-putusan .stat-icon-box {
            background: linear-gradient(135deg, #ef4444, #b91c1c);
            box-shadow: 0 8px 20px rgba(239, 68, 68, 0.25);
        }
        .stat-putusan::after { background-color: #dc2626; }
        .stat-putusan::before { background: #dc2626; }
        .stat-putusan:hover { border-color: rgba(239, 68, 68, 0.35); }
        .stat-putusan:hover .stat-title { color: #b91c1c; }
        .stat-putusan:hover .stat-number { color: #b91c1c; }

        @media (max-width: 768px) {
            .stats-container { margin-top: 20px; }
            .card-stat { margin-bottom: 15px; }
        }

        /* ==========================================================================
           CARD STATISTIK MODERN & PREMIUM OVERRIDES
           ========================================================================== */
        .card-statistik-modern {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.6);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.03);
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            overflow: hidden;
            position: relative;
            height: 100%;
            will-change: transform, box-shadow;
        }
        .card-statistik-modern:hover {
            transform: translateY(-10px) scale(1.01);
            box-shadow: 0 25px 50px rgba(15, 23, 42, 0.1);
            border-color: rgba(37, 99, 235, 0.35);
        }
        .stat-icon-badge {
            width: 50px;
            height: 50px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 26px;
            color: #ffffff;
            flex-shrink: 0;
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
        }
        .card-statistik-modern:hover .stat-icon-badge {
            transform: scale(1.18) rotate(10deg);
        }

        /* Badge Gradients per Theme */
        .badge-blue { background: linear-gradient(135deg, #3b82f6, #1d4ed8); box-shadow: 0 4px 12px rgba(37, 99, 235, 0.25); }
        .badge-green { background: linear-gradient(135deg, #10b981, #047857); box-shadow: 0 4px 12px rgba(16, 185, 129, 0.25); }
        .badge-purple { background: linear-gradient(135deg, #8b5cf6, #6d28d9); box-shadow: 0 4px 12px rgba(139, 92, 246, 0.25); }
        .badge-pink { background: linear-gradient(135deg, #ec4899, #be185d); box-shadow: 0 4px 12px rgba(236, 72, 153, 0.25); }
        .badge-gold { background: linear-gradient(135deg, #f59e0b, #d97706); box-shadow: 0 4px 12px rgba(245, 158, 11, 0.25); }

        .stat-header {
            display: flex;
            align-items: center;
            gap: 16px;
        }
        .stat-header-info {
            display: flex;
            flex-direction: column;
            text-align: left;
        }
        .stat-meta-label {
            font-family: 'Inter', sans-serif;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: #64748b;
            margin-bottom: 2px;
        }
        .stat-title-modern {
            font-family: 'Inter', sans-serif;
            font-size: 17px;
            font-weight: 700;
            color: #0f172a;
            margin: 0;
            line-height: 1.2;
        }
        .stat-number-modern {
            font-family: 'Inter', sans-serif;
            font-size: 24px;
            font-weight: 800;
            color: #0f172a;
            letter-spacing: -0.02em;
            line-height: 1.1;
        }
        .stat-card-body {
            padding: 28px !important;
        }
        .stat-chart-container {
            position: relative;
            width: 100%;
        }

        /* footer style */
        .batas-footer {
            border-bottom: 1px dashed #BDBDBD;
        }

        .batas-footer a {
            display: block;
        }

        .batas-footer a img {
            width: 24px;
            height: 24px;
        }

        .logo-platform {
            width: 124px;
            height: 40px;
            padding: 6.5px 10px 6.5px 8px;
            gap: 0px;
            border-radius: 6px 0px 0px 0px;
            border: 1px 0px 0px 0px;
            opacity: 0px;
        }

        .header-footer {
            font-family: Inter;
            font-size: 20px;
            font-weight: 600;
            line-height: 1.55;
            text-align: left;
            color: #253144;
            margin-top: 32px;
        }

        .desc-footer {
            font-family: Inter;
            font-size: 14px;
            font-style: italic;
            font-weight: 400;
            line-height: 21px;
            text-align: left;
            color: #253144;
        }

        .header-tautan-penting {
            font-family: Inter;
            font-size: 16px;
            font-weight: 600;
            line-height: 20px;
            text-align: left;
            color: #253144;
            margin-top: 32px;
        }

        .item-tautan-penting {
            margin-bottom: 5px;
            font-family: Inter;
            font-size: 14px;
            font-weight: 400;
            line-height: 21px;
            text-align: left;
            color: #3C3C3C;
            display: inline-block;
        }

        .item-tautan-penting:hover {
            opacity: .5;
        }

        .item-link-media-sosial {
            margin: 10px 0 0 0;
            font-family: Inter;
            font-size: 16px;
            font-weight: 400;
            line-height: 24px;
            text-align: left;
            color: #757575;
        }


        .unduh-title {
            font-family: Inter;
            font-size: 16px;
            font-weight: 600;
            line-height: 20px;
            margin-top: 10px;
        }


        .footer-title {
            background: #253144;
            font-family: Inter;
            font-size: 14px;
            font-weight: 400;
            line-height: 20px;
            color: #FFFFFF;
            padding-top: 10px;
            padding-bottom: 10px;
            margin-bottom: 0;
        }

        /* CSS Modern untuk Footer */
    .icon-badge-footer {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 38px;
        height: 38px;
        background: rgba(59, 130, 246, 0.08);
        border-radius: 10px;
        flex-shrink: 0;
    }
    .btn-social-modern {
        display: inline-flex !important;
        align-items: center;
        gap: 8px;
        padding: 8px 14px;
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 30px;
        font-size: 13px;
        font-weight: 500;
        color: #475569;
        text-decoration: none;
        transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .btn-social-modern img {
        width: 16px !important;
        height: 16px !important;
        filter: grayscale(0.2);
        transition: filter 0.25s ease;
    }
    .btn-social-modern:hover {
        background: #ffffff;
        border-color: #cbd5e1;
        color: #0f172a;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(15, 23, 42, 0.05);
    }
    .btn-social-modern:hover img {
        filter: grayscale(0);
    }
    .btn-social-modern.yt:hover {
        border-color: rgba(239, 68, 68, 0.4);
        background: rgba(239, 68, 68, 0.02);
    }
    .btn-social-modern.ig:hover {
        border-color: rgba(236, 72, 153, 0.4);
        background: rgba(236, 72, 153, 0.02);
    }
    .btn-social-modern.tw:hover {
        border-color: rgba(14, 165, 233, 0.4);
        background: rgba(14, 165, 233, 0.02);
    }
    .btn-social-modern.fb:hover {
        border-color: rgba(59, 130, 246, 0.4);
        background: rgba(59, 130, 246, 0.02);
    }

    .card-footer-modern {
        background: rgba(255, 255, 255, 0.85);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.6);
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(15, 23, 42, 0.03);
        transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
        height: 100%;
        will-change: transform, box-shadow;
    }
    .card-footer-modern:hover {
        transform: translateY(-8px) scale(1.01);
        box-shadow: 0 25px 50px rgba(15, 23, 42, 0.08);
        border-color: rgba(59, 130, 246, 0.3);
    }
    .stat-header-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 42px;
        height: 42px;
        background: linear-gradient(135deg, #3b82f6, #1d4ed8);
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
    }
    .map-header-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 42px;
        height: 42px;
        background: #833ab4;
        background: linear-gradient(to right, #833ab4, #fd1d1d, #fcb045);
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);
    }
    .stat-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 14px;
        border-radius: 12px;
        background: rgba(248, 250, 252, 0.7);
        border: 1px solid rgba(226, 232, 240, 0.5);
        transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        will-change: transform, background, box-shadow;
    }
    .stat-row:hover {
        background: #ffffff;
        transform: scale(1.03) translateY(-1px);
        box-shadow: 0 6px 16px rgba(15, 23, 42, 0.05);
        border-color: rgba(59, 130, 246, 0.2);
    }
    .stat-row.total {
        background: linear-gradient(135deg, rgba(239, 68, 68, 0.05), rgba(239, 68, 68, 0.08));
        border: 1px dashed rgba(239, 68, 68, 0.3);
    }
    .stat-row.total:hover {
        background: linear-gradient(135deg, rgba(239, 68, 68, 0.08), rgba(239, 68, 68, 0.12));
        transform: scale(1.03) translateY(-1px);
        border: 1px dashed rgba(239, 68, 68, 0.5);
        box-shadow: 0 6px 16px rgba(239, 68, 68, 0.1);
    }
    .stat-row-label {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 13px;
        font-weight: 600;
        color: #475569;
    }
    .stat-row-label i {
        font-size: 18px;
    }
    .stat-row-val {
        font-size: 14px;
        font-weight: 700;
        letter-spacing: 0.5px;
    }

    #portal-jdih {
         background-image: url(<?php echo e(asset('assets/img/background-portal-ppid.png')); ?>);
         background-color: #E74C3C;
         padding-top: 72px;
         padding-bottom: 72px;
         margin-top: 36px;
    }
    .btn-kunjungi-portal {
      width: 176px;
      height: 40px;
      padding: 8px 16px;
      gap: 8px;
      border-radius: 12px;
      color: #E74C3C;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);
      background: #FFFFFF;
      border: none;
    }
    .header-portal-jdihn {
    font-family: Inter;
    font-size: 36px;
    font-weight: 700;
    line-height: 48px;
    text-align: left;
    color: #FFFFFF;
    }

    .desc-portal-jdihn {
        font-family: Inter;
        font-size: 16px;
        font-weight: 400;
        line-height: 24px;
        text-align: left;
        color: #FFFFFF;
    }

  </style>
  
  <?php echo $__env->yieldContent('style'); ?>

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="/" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src=<?php echo e(asset('assets/img/logobkl.png')); ?> alt="">
        <h1 class="sitename">PPID</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li class="dropdown <?php echo e(request()->is('profil*','sejarah*','tugas*','visimisi*','strukturorg*') ? 'active' : ''); ?>"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
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
              <?php $__currentLoopData = $klasifikasis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $klasifikasi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><a href=<?php echo e(route('infopub', $klasifikasi->id)); ?>><?php echo e($klasifikasi->klasifikasi); ?></a></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
          </li>
          <li class="dropdown <?php echo e(request()->is('daftarinfo*','infopsm*','infopss*','infodkc*') ? 'active' : ''); ?>"><a href="#"><span>Daftar Informasi</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="/daftarinfo">Informasi Publik Secara Berkala</a></li>
              <li><a href="/infopsm">Informasi Publik Serta Merta</a></li>
              <li><a href="/infopss">Informasi Publik Setiap Saat</a></li>
              <li><a href="/infodkc">Informasi Dikecualikan</a></li>
            </ul>
          </li>
          <li><a href="<?php echo e(route('pemohon.register')); ?>" class="<?php echo e(request()->routeIs('pemohon.register') ? 'active' : ''); ?>">Permohonan Informasi</a></li>
          
          <li class="dropdown <?php echo e(request()->is('standpel*','kep90*') ? 'active' : ''); ?>"><a href="#"><span>Standar Pelayanan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="/standpel">Standar Layanan Operasional</a></li>
              <li><a href="/kep90">Kep90 Standar Pelayanan</a></li>
            </ul>
          </li>
          <li><a href="/statistik" class="<?php echo e(request()->routeIs('halaman.statistik') ? 'active' : ''); ?>">Statistik</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted flex-md-shrink-0" href="/faq">FAQ</a>

    </div>
  </header>

    <?php echo $__env->yieldContent('konten'); ?>

    <div class="container footer-top" id="tautan">
      <div class="row batas-footer py-4">
            <div class="col-mb-6 col-sm-6">
                <div class="row">
                    <h3 class="header-footer">Pejabat Pengelola Informasi dan Dokumentasi Badan Keamanan Laut Republik Indonesia</h3>
                </div>
                <div class="row">
                    <div class="col-mb-12 col-sm-12">
                        <p class="desc-footer pb-1">PPID adalah platform yang bertanggung jawab untuk menyimpan, mendokumentasikan, menyediakan, dan melayani permintaan informasi publik dari masyarakat.</p>
                    </div>
                </div>
            </div>
            <div class="col-mb-6 col-sm-6 pb-3 pb-md-0">
                <div class="row">
                    <h3 class="header-tautan-penting pt-1">Tautan Penting:</h3>
                </div>
                <div class="row">
                    <div class="col-4">
                        <a href="https://ppid.bakamla.go.id" class="item-tautan-penting">Beranda</a>
                        <a class="item-tautan-penting" href="https://ppid.bakamla.go.id/sejarah">Sekilas Sejarah</a>
                        <a href="#" class="item-tautan-penting">Berita PPID BAKAMLA RI</a>
                        <a href="https://ppid.bakamla.go.id/{id}" class="item-tautan-penting">Informasi Publik</a>
                    </div>
                    <div class="col-4">
                        <a href="https://bakamla.go.id" target="_blank" class="item-tautan-penting">Web Bakamla RI</a>
                        <a class="item-tautan-penting" href="https://ppid.bakamla.go.id/liputan">Liputan PPID BAKAMLA RI</a>
                        <a class="item-tautan-penting" href="https://ppid.bakamla.go.id/sosial-media">Sosial Media</a>
                        <a class="item-tautan-penting" href="https://ppid.bakamla.go.id/survey-kepuasan">Survei Kepuasan</a>
                    </div>
                    <div class="col-4">
                        <a href="https://ppid.bakamla.go.id/faq" class="item-tautan-penting" href="https://ppid.bakamla.go.id/faq">FAQ</a>
                        <a href="https://jdih.bakamla.go.id/kebijakan-privasi" class="item-tautan-penting" >Kebijakan Privasi</a>
                        <a class="item-tautan-penting">Kontak Kami</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row batas-footer py-5 gy-4">
            <!-- Kolom 1: Informasi Kontak & Media Sosial -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="d-flex flex-column gap-3">
                    <div class="d-flex align-items-start gap-3">
                        <div class="icon-badge-footer">
                            <i class="bi bi-geo-alt" style="font-size: 20px; color: #3b82f6;"></i>
                        </div>
                        <div>
                            <p class="mb-0" style="font-size: 14px; color: #475569; line-height: 1.6;">Jl. Proklamasi No.56, Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10320</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <div class="icon-badge-footer">
                            <i class="bi bi-telephone" style="font-size: 20px; color: #3b82f6;"></i>
                        </div>
                        <div>
                            <p class="mb-0" style="font-size: 14px; color: #475569; font-weight: 500;">(021) 181</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <div class="icon-badge-footer">
                            <i class="bi bi-envelope" style="font-size: 20px; color: #3b82f6;"></i>
                        </div>
                        <div>
                            <p class="mb-0" style="font-size: 14px; color: #475569; font-weight: 500;">contactcenter@bakamla.go.id</p>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <p class="ikuti-kami mb-2" style="font-size: 14px; font-weight: 600; color: #0f172a;">Ikuti kami di:</p>
                    <div class="d-flex flex-wrap gap-2">
                        <a href="https://youtube.com/@bakamlariofficial3164?si=kUksChlOiZlc_JSa" target="_BLANK" class="btn-social-modern yt">
                            <img src="<?php echo e(asset('assets/img/youtube.png')); ?>" alt="Youtube"> Youtube
                        </a>
                        <a href="https://www.instagram.com/bakamla.ri/" target="_BLANK" class="btn-social-modern ig">
                            <img src="<?php echo e(asset('assets/img/instagram.png')); ?>" alt="Instagram"> Instagram
                        </a>
                        <a href="https://twitter.com/HumasBakamlaRI" target="_BLANK" class="btn-social-modern tw">
                            <img src="<?php echo e(asset('assets/img/twitter.png')); ?>" alt="Twitter"> Twitter
                        </a>
                        <a href="https://facebook.com/Humas.BakamlaRI/" target="_BLANK" class="btn-social-modern fb">
                            <img src="<?php echo e(asset('assets/img/facebook.png')); ?>" alt="Facebook"> Facebook Page
                        </a>
                    </div>
                </div>
            </div>

            <!-- Kolom 2: Statistik Pengunjung -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card-footer-modern d-flex flex-column p-4">
                    <div class="d-flex align-items-center gap-3 mb-3 border-bottom pb-3">
                        <div class="stat-header-icon">
                            <i class="bi bi-graph-up-arrow" style="font-size: 22px; color: #ffffff;"></i>
                        </div>
                        <div>
                            <h4 class="mb-0" style="font-size: 16px; font-weight: 700; color: #0f172a;">Statistik Pengunjung</h4>
                            <p class="mb-0 text-muted" style="font-size: 11px;">Data diperbarui secara real-time</p>
                        </div>
                    </div>
                    <div class="d-flex flex-column gap-2 flex-grow-1 justify-content-center">
                        <div class="stat-row">
                            <span class="stat-row-label">
                                <i class="bi bi-calendar-check text-success"></i>
                                <span>Hari Ini</span>
                            </span>
                            <span class="stat-row-val text-success" id="footer-today"><?php echo e($today); ?></span>
                        </div>
                        <div class="stat-row">
                            <span class="stat-row-label">
                                <i class="bi bi-calendar text-primary"></i>
                                <span>Minggu Ini</span>
                            </span>
                            <span class="stat-row-val text-primary" id="footer-week"><?php echo e($thisWeek); ?></span>
                        </div>
                        <div class="stat-row">
                            <span class="stat-row-label">
                                <i class="bi bi-graph-up text-info"></i>
                                <span>Bulan Ini</span>
                            </span>
                            <span class="stat-row-val text-info" id="footer-month"><?php echo e($thisMonth); ?></span>
                        </div>
                        <div class="stat-row">
                            <span class="stat-row-label">
                                <i class="bi bi-graph-up-arrow text-secondary"></i>
                                <span>Tahun Ini</span>
                            </span>
                            <span class="stat-row-val text-secondary" id="footer-year"><?php echo e($thisYear); ?></span>
                        </div>
                        <div class="stat-row total">
                            <span class="stat-row-label">
                                <i class="bi bi-globe text-danger"></i>
                                <span>Total Pengunjung</span>
                            </span>
                            <span class="stat-row-val text-danger" id="footer-total"><?php echo e($total); ?></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kolom 3: Peta Lokasi Kantor -->
            <div class="col-lg-4 col-md-12 col-12">
                <div class="card-footer-modern d-flex flex-column p-4">
                    <div class="d-flex align-items-center gap-3 mb-3 border-bottom pb-3">
                        <div class="map-header-icon">
                            <i class="bi bi-instagram" style="font-size: 22px; color: #ffffff;"></i>
                        </div>
                        <div>
                            <h4 class="mb-0" style="font-size: 16px; font-weight: 700; color: #0f172a;">Sosial Media</h4>
                            <p class="mb-0 text-muted" style="font-size: 11px;">Badan Keamanan Laut Republik Indonesia</p>
                        </div>
                    </div>
                    <div class="flex-grow-1 overflow-hidden" style="border-radius: 14px; min-height: 220px; position: relative; border: 1px solid #e2e8f0;">
                        <div class="tab-content" id="pills-tabContent" style="height: 350px;overflow-y:scroll;margin-top:10px;">
                    <div class="tab-pane fade active show" id="pills-ig" role="tabpanel" aria-labelledby="pills-ig-tab">
                        <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/C7iPoyDPZtO/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/C7iPoyDPZtO/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/C7iPoyDPZtO/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Bakamla RI (@bakamla_ri)</a></p></div></blockquote>
			                  <script async src=<?php echo e(asset('assets/vendor/js/embed.js')); ?>></script>
                    </div>
                </div>
                    </div>
                </div>
            </div>

          </div>
    </div>
        <div class="" style="text-align: center;">
            <h6 class="footer-title py-3" style="background: url(<?php echo e(asset('assets/img/header-intersect.png')); ?>) 90% top no-repeat rgb(37, 49, 68); font-size: 14px;" data-asw-org-font-size="14">Hak Cipta PPID Bakamla RI © <span id="currentYear" data-asw-org-font-size="14" style="font-size: 14px;">2026</span> Direktorat Data & Informasi Badan Keamanan Laut Republik Indonesia.</h6>
        </div>
</div>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src=<?php echo e(asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>></script>
  <script src=<?php echo e(asset('assets/vendor/php-email-form/validate.js')); ?>></script>
  <script src=<?php echo e(asset('assets/vendor/aos/aos.js')); ?>></script>
  <script src=<?php echo e(asset('assets/vendor/glightbox/js/glightbox.min.js')); ?>></script>
  <script src=<?php echo e(asset('assets/vendor/purecounter/purecounter_vanilla.js')); ?>></script>
  <script src=<?php echo e(asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')); ?>></script>
  <script src=<?php echo e(asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')); ?>></script>
  <script src=<?php echo e(asset('assets/vendor/swiper/swiper-bundle.min.js')); ?>></script>
  <!-- <script src="https://website-widgets.pages.dev/dist/sienna.min.js" defer></script> -->

  <!-- Main JS File -->
  <script src=<?php echo e(asset('assets/js/main.js')); ?>></script>

  <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script> 
  
  <script src="<?php echo e(asset('../be/src/assets/leaflet/leaflet.js')); ?>"></script>
  <script>
    const lokasi = <?php echo json_encode($lokasi, 15, 512) ?>;

    // Inisialisasi map (default Indonesia)
    const map = L.map('map').setView([-2.5, 118], 5);

    // Tile layer (OpenStreetMap)
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap'
    }).addTo(map);

    // 🔥 CUSTOM ICON
    const bakamlaIcon = L.icon({
        iconUrl: '<?php echo e(asset('assets/img/logobkl.png')); ?>', // lokasi file icon
        iconSize: [40, 40],
        iconAnchor: [20, 40],
        popupAnchor: [0, -40]
    });

   // loop marker
    lokasi.forEach(item => {

    const marker = L.marker([item.lat, item.lng], {
        icon: bakamlaIcon
    }).addTo(map);

    marker.bindPopup(`
        <b>${item.nama}</b><br>
        ${item.alamat}
    `);

    // 🔥 klik marker = zoom otomatis
    marker.on('click', function () {

        map.flyTo([item.lat, item.lng], 15, {
            duration: 2
        });

        marker.openPopup();

    });

  });
  </script>
  <script>
         $(document).ready(function() {
            var navbar = $('.sticky-navbar');

            // Add sticky class on scroll
            $(window).scroll(function() {
               if ($(this).scrollTop() > 50) { // Adjust this value as needed
                  navbar.addClass('scrolled');
               } else {
                  navbar.removeClass('scrolled');
               }
            });
         });

         var elem = document.querySelector('.main-carousel');
         var flkty = new Flickity( elem, {
            // options
            cellAlign: 'left',
            contain: true,
            prevNextButtons: false,
            autoPlay: 5000
         });

        // Homepage Hero Background roller (Multi-layer, Zero-snap system)
         const backgrounds = [];
         const listBackground = [{"id":17,"file":"images\/background\/background_675991da95b81.jpg","status":1},{"id":18,"file":"images\/background\/background_675992bf32023.jpg","status":1},{"id":20,"file":"images\/background\/background_676e89f01647e.jpeg","status":1},{"id":21,"file":"images\/background\/background_676e8a70b358c.jpeg","status":1},{"id":22,"file":"images\/background\/background_676e8ad0436c5.jpeg","status":1},{"id":23,"file":"images\/background\/background_69b7641c84506.png","status":1},{"id":24,"file":"images\/background\/background_6a152de8a5f38.jpeg","status":1},{"id":25,"file":"images\/background\/background_6a15373343af6.jpeg","status":1}];
         if (listBackground !== null && listBackground.length > 0) {
            listBackground.forEach(item => {
                backgrounds.push(`url('/storage/${item.file}')`);
            });
         } else {
            backgrounds.push("url('images/backgrounds/background-kapal.png')");
            backgrounds.push("url('images/backgrounds/bg.jpg')");
         }

         let currentIndex = 0;
         const layer1 = document.getElementById('bgLayer1');
         const layer2 = document.getElementById('bgLayer2');

         // 8 Cinematic transition effects inventory
         const effects = [
             'kb-zoom-in',
             'kb-zoom-out',
             'kb-pan-left',
             'kb-pan-right',
             'kb-pan-up',
             'kb-pan-down',
             'kb-diag-br',
             'kb-diag-tl'
         ];

         let activeLayer = layer1;
         let incomingLayer = layer2;

         // Initial background setup
         if (backgrounds.length > 0) {
             activeLayer.style.backgroundImage = backgrounds[currentIndex];
             activeLayer.style.opacity = '1';
             activeLayer.style.zIndex = '-2';
             // Apply initial random zoom-in to look immediately alive
             activeLayer.classList.add('kb-zoom-in');
         }

         function changeBackground() {
             if (backgrounds.length <= 1) return;

             // 1. Calculate the next background index
             currentIndex = (currentIndex + 1) % backgrounds.length;

             // 2. Preload image onto the incoming background layer (currently hidden at opacity 0)
             incomingLayer.style.backgroundImage = backgrounds[currentIndex];

             // 3. Clean up animation classes ONLY on the incoming layer
             // (This avoids snapping the outgoing layer which is still visible during its 2.5s fade out)
             effects.forEach(eff => {
                 incomingLayer.classList.remove(eff);
             });
             incomingLayer.classList.remove('active-init');

             // 4. Select a random cinematic effect for the incoming layer
             const randomEffect = effects[Math.floor(Math.random() * effects.length)];
             incomingLayer.classList.add(randomEffect);

             // 5. Stack the incoming layer directly above the active layer (using z-index)
             incomingLayer.style.zIndex = '-2';
             activeLayer.style.zIndex = '-3';

             // 6. Perform the hardware-accelerated cross-fade transition
             incomingLayer.style.opacity = '1';
             activeLayer.style.opacity = '0';

             // 7. Swap active and incoming layer references
             const temp = activeLayer;
             activeLayer = incomingLayer;
             incomingLayer = temp;
         }

         // Auto-play backgrounds every 7 seconds (majestic, slow cinematic experience)
         if (backgrounds.length > 1) {
             setInterval(changeBackground, 7000);
         }

       </script>

  <?php echo $__env->yieldContent('scripts'); ?>
  <!-- Widget -->
  <!-- <script src="https://website-widgets.pages.dev/dist/sienna.min.js" defer></script> -->
  <!-- <script src="https://web.animemusic.us/widget_disabilitas.js"></script> -->
  <script src="https://code.responsivevoice.org/responsivevoice.js?key=x7dIx3sY"></script>
  <script src="<?php echo e(asset('assets/vendor/js/widget_disabilitas.js')); ?>"></script>
  
</body>

</html>
<?php /**PATH /var/www/html/ppid/resources/views/layouts/aplikasi.blade.php ENDPATH**/ ?>