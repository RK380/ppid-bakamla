<!DOCTYPE html>
<html lang="id" class="layout-static">
   <head>
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=fERIZ4_8gH9JX70pyZlVLUvYKaOF48K4AhQnoh9Tm1fRB79rT1vQKE0m9rrbw9Cg" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="https://gc.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css?attr=aHR0cHM6Ly9qZGloLmJha2FtbGEuZ28uaWQv"/><script async src="https://www.googletagmanager.com/gtag/js?id=G-VC813F2PRQ"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-VC813F2PRQ');
    </script>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
      <meta name="csrf-token" content="oPy2wlOmyS2vaDI5HetA7BA1pow6wp8oDqZBGcxq">
      <meta name="description" content="Website Jaringan Dokumentasi dan Informasi Hukum (JDIH) Badan Keamanan Laut Republik Indonesia menyediakan akses lengkap dan terkini terhadap peraturan perundang-undangan di bidang keamanan maritim, mendukung kebijakan dan regulasi kelautan nasional.">
      <meta name="keywords" content="JDIH, Badan Keamanan Laut, dokumentasi hukum, informasi hukum, peraturan maritim, keamanan laut, regulasi kelautan, perundang-undangan Indonesia, Bakamla">
      <link rel="canonical" href="https://jdih.bakamla.go.id">

      <!-- Open Graph / Facebook -->
      <meta property="og:type" content="website">
      <meta property="og:title" content="JDIH Bakamla RI">
      <meta property="og:description" content="Website Jaringan Dokumentasi dan Informasi Hukum (JDIH) Badan Keamanan Laut Republik Indonesia menyediakan akses lengkap dan terkini terhadap peraturan perundang-undangan di bidang keamanan maritim, mendukung kebijakan dan regulasi kelautan nasional.">
      <meta property="og:image" content="https://jdih.bakamla.go.id/images/logo/logo-jdih.png">
      <meta property="og:url" content="https://jdih.bakamla.go.id">
      <meta property="og:site_name" content="JDIH Bakamla RI">

      <!-- Twitter -->
      <meta name="twitter:card" content="summary_large_image">
      <meta name="twitter:title" content="JDIH Bakamla RI">
      <meta name="twitter:description" content="Website Jaringan Dokumentasi dan Informasi Hukum (JDIH) Badan Keamanan Laut Republik Indonesia menyediakan akses lengkap dan terkini terhadap peraturan perundang-undangan di bidang keamanan maritim, mendukung kebijakan dan regulasi kelautan nasional.">
      <meta name="twitter:image" content="https://jdih.bakamla.go.id/images/logo/logo-jdih.png">

      <title>JDIH Bakamla RI</title>
      <link rel="apple-touch-icon" sizes="180x180" href="https://jdih.bakamla.go.id/favicon/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="https://jdih.bakamla.go.id/favicon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="https://jdih.bakamla.go.id/favicon/favicon-16x16.png">
      <link rel="manifest" href="https://jdih.bakamla.go.id/favicon/site.webmanifest">
      <link href="https://jdih.bakamla.go.id/fonts/inter/inter.css" rel="stylesheet" type="text/css">
      <link href="https://jdih.bakamla.go.id/css/icons/phosphor/styles.min.css" rel="stylesheet" type="text/css">
      <link href="https://jdih.bakamla.go.id/css/ltr/all.min.css" rel="stylesheet" type="text/css">
      <link href="https://jdih.bakamla.go.id/css/homepage/home-page.css" rel="stylesheet" type="text/css">
      <link href="https://jdih.bakamla.go.id/css/homepage/list-berita.css" rel="stylesheet" type="text/css">
      <link href="https://jdih.bakamla.go.id/css/homepage/tautan.css" rel="stylesheet" type="text/css">
      <link href="https://jdih.bakamla.go.id/css/homepage/aksebilitas.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
      <link href="https://jdih.bakamla.go.id/css/global.css" rel="stylesheet" type="text/css">
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

          /* Custom Ken Burns & Pan Animations - 12s duration, ultra slow and majestic */

          /* 1. Slow Zoom In */
          @keyframes kb-zoom-in {
             0% {
                transform: scale(1.12);
             }
             100% {
                transform: scale(1.01);
             }
          }
          .kb-zoom-in {
             animation: kb-zoom-in 12s cubic-bezier(0.25, 1, 0.5, 1) forwards;
          }

          /* 2. Slow Zoom Out */
          @keyframes kb-zoom-out {
             0% {
                transform: scale(1.01);
             }
             100% {
                transform: scale(1.12);
             }
          }
          .kb-zoom-out {
             animation: kb-zoom-out 12s cubic-bezier(0.25, 1, 0.5, 1) forwards;
          }

          /* 3. Slow Pan Left */
          @keyframes kb-pan-left {
             0% {
                transform: scale(1.08) translateX(30px);
             }
             100% {
                transform: scale(1.04) translateX(-10px);
             }
          }
          .kb-pan-left {
             animation: kb-pan-left 12s cubic-bezier(0.25, 1, 0.5, 1) forwards;
          }

          /* 4. Slow Pan Right */
          @keyframes kb-pan-right {
             0% {
                transform: scale(1.08) translateX(-30px);
             }
             100% {
                transform: scale(1.04) translateX(10px);
             }
          }
          .kb-pan-right {
             animation: kb-pan-right 12s cubic-bezier(0.25, 1, 0.5, 1) forwards;
          }

          /* 5. Slow Pan Up */
          @keyframes kb-pan-up {
             0% {
                transform: scale(1.08) translateY(25px);
             }
             100% {
                transform: scale(1.04) translateY(-10px);
             }
          }
          .kb-pan-up {
             animation: kb-pan-up 12s cubic-bezier(0.25, 1, 0.5, 1) forwards;
          }

          /* 6. Slow Pan Down */
          @keyframes kb-pan-down {
             0% {
                transform: scale(1.08) translateY(-25px);
             }
             100% {
                transform: scale(1.04) translateY(10px);
             }
          }
          .kb-pan-down {
             animation: kb-pan-down 12s cubic-bezier(0.25, 1, 0.5, 1) forwards;
          }

          /* 7. Slow Diagonal Top-Left to Bottom-Right */
          @keyframes kb-diag-br {
             0% {
                transform: scale(1.1) translate(-25px, -15px);
             }
             100% {
                transform: scale(1.03) translate(10px, 5px);
             }
          }
          .kb-diag-br {
             animation: kb-diag-br 12s cubic-bezier(0.25, 1, 0.5, 1) forwards;
          }

          /* 8. Slow Diagonal Bottom-Right to Top-Left */
          @keyframes kb-diag-tl {
             0% {
                transform: scale(1.1) translate(25px, 15px);
             }
             100% {
                transform: scale(1.03) translate(-10px, -5px);
             }
          }
          .kb-diag-tl {
             animation: kb-diag-tl 12s cubic-bezier(0.25, 1, 0.5, 1) forwards;
          }

         #portal-jdih {
         background-image: url('images/logo/background-portal-jdih.png');
         background-color: #E74C3C;
         padding-top: 72px;
         padding-bottom: 72px;
         margin-top: 36px;
         }
         .shared-background {
         background-image: url('images/backgrounds/background-dokumen-warta.png');
         background-size: 100% auto;
         background-position: center;
         background-repeat: no-repeat;
         margin: 0;
         padding: 0;
         position: relative;
         z-index: 1;
         }
         .background-statistik {
         }

         @media screen and (min-width: 500px) {
            .main-logo-bar {
               background: #fff url(https://jdih.bakamla.go.id/images/backgrounds/header-intersect.png) no-repeat 90% top;
            }
         }

         .main-logo-bar{
            background-color: #fff;
         }

         .yt-embed {
            border-radius: 10px;
            overflow: hidden;
         }

         .yt-embed .container-fluid {
            padding: 0!important;
         }

         .yt-embed iframe {
            height: 100%!important;
         }

         /* --- CSS BARU: KARTU STATISTIK DOKUMEN (PERBAIKAN Z-INDEX) --- */
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

        /* Artikel (Kuning/Orange) */
        .stat-artikel .stat-icon-box {
            background: linear-gradient(135deg, #f59e0b, #d97706);
            box-shadow: 0 8px 20px rgba(245, 158, 11, 0.25);
        }
        .stat-artikel::after { background-color: #ea580c; }
        .stat-artikel::before { background: #ea580c; }
        .stat-artikel:hover { border-color: rgba(245, 158, 11, 0.35); }
        .stat-artikel:hover .stat-title { color: #d97706; }
        .stat-artikel:hover .stat-number { color: #d97706; }

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

        /* Styling modern untuk Kartu Warta Terkini di Homepage */
        #warta-berita .item-berita .card {
            border: none;
            border-radius: 16px;
            background: #ffffff;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
            overflow: hidden;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid #f1f5f9;
            height: 100%;
        }
        #warta-berita .item-berita .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 30px rgba(15, 23, 42, 0.08);
            border-color: #e2e8f0;
        }
        #warta-berita .berita-thumb {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
            margin: 12px auto 0 auto;
            width: calc(100% - 24px);
            height: 200px;
            display: block;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -webkit-transform: translate3d(0, 0, 0);
            -moz-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
        #warta-berita .berita-thumb a {
            display: block;
            width: 100%;
            height: 100%;
            border-radius: 12px;
            overflow: hidden;
            -webkit-mask-image: -webkit-radial-gradient(white, black);
        }
        #warta-berita .berita-thumb img {
            width: 100% !important;
            height: 100% !important;
            object-fit: cover;
            object-position: center;
            border-radius: 12px;
            transition: transform 0.5s ease;
            will-change: transform;
        }
        #warta-berita .item-berita .card:hover .berita-thumb img {
            transform: scale(1.05);
        }
        #warta-berita .card-body {
            padding: 16px 20px 24px 20px !important;
        }
        #warta-berita .title-berita {
            font-size: 17px;
            font-weight: 600;
            line-height: 1.4;
            color: #0f172a;
            margin-top: 12px;
            margin-bottom: 8px;
        }
        #warta-berita .title-berita a {
            color: #0f172a;
            transition: color 0.2s ease;
        }
        #warta-berita .title-berita a:hover {
            color: #E74C3C;
        }
        #warta-berita #wrapper-isi-berita {
            font-size: 13.5px;
            line-height: 1.6;
            color: #64748b;
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

        /* ==========================================================================
           MODERN STICKY GLASSMORPHIC NAVBAR
           ========================================================================== */
        /* Base Sticky Navbar Style */
        .sticky-navbar {
            position: relative;
            z-index: 9999;
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            border-bottom: 1px solid transparent !important;
            padding-top: 18px !important;
            padding-bottom: 18px !important;
            background: transparent !important;
        }

        /* Scrolled Glassmorphism Style */
        .sticky-navbar.scrolled {
            position: fixed !important;
            top: 0;
            left: 0;
            right: 0;
            width: 100%;
            background: rgba(255, 255, 255, 0.82) !important;
            backdrop-filter: blur(20px) saturate(180%) !important;
            -webkit-backdrop-filter: blur(20px) saturate(180%) !important;
            box-shadow: 0 10px 35px rgba(15, 23, 42, 0.08) !important;
            border-bottom: 1px solid rgba(15, 23, 42, 0.06) !important;
            padding-top: 10px !important;
            padding-bottom: 10px !important;
            animation: navbarSlideDown 0.45s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }

        @keyframes navbarSlideDown {
            from {
                transform: translateY(-100%);
            }
            to {
                transform: translateY(0);
            }
        }

        /* Sticky Brand (Mini Logo) Animation */
        .sticky-navbar .sticky-brand {
            display: none !important;
        }

        .sticky-navbar.scrolled .sticky-brand {
            display: flex !important;
            align-items: center;
            text-decoration: none;
            animation: stickyBrandFadeIn 0.5s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }

        @keyframes stickyBrandFadeIn {
            from {
                opacity: 0;
                transform: translateX(-15px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Nav Link Override */
        .sticky-navbar .nav-item-style {
            color: rgba(255, 255, 255, 0.9) !important;
            font-family: 'Inter', sans-serif;
            font-size: 15px;
            font-weight: 500;
            padding: 8px 16px !important;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1) !important;
            position: relative;
            background: transparent !important;
        }

        /* Hover Sliding Underline Indicator */
        .sticky-navbar .nav-item-style::after {
            content: '';
            position: absolute;
            bottom: 0px;
            left: 50%;
            width: 0;
            height: 2px;
            background: #ffffff;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            transform: translateX(-50%);
        }

        .sticky-navbar .nav-item-style:hover::after {
            width: 60%;
        }

        .sticky-navbar .nav-item-style:hover {
            color: #ffffff !important;
            opacity: 1;
            transform: translateY(-1px);
        }

        /* Scrolled Links Style */
        .sticky-navbar.scrolled .nav-item-style {
            color: #1e293b !important; /* slate-800 */
            font-weight: 600;
        }

        .sticky-navbar.scrolled .nav-item-style::after {
            background: #e74c3c; /* brand red */
        }

        .sticky-navbar.scrolled .nav-item-style:hover {
            color: #e74c3c !important; /* Brand red */
            transform: translateY(-1px);
        }

        /* Smooth Dropdown Hover & Styling */
        .sticky-navbar .dropdown-menu {
            display: block !important;
            opacity: 0;
            visibility: hidden;
            transform: translateY(15px);
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            background: rgba(255, 255, 255, 0.95) !important;
            backdrop-filter: blur(15px) !important;
            -webkit-backdrop-filter: blur(15px) !important;
            border: 1px solid rgba(15, 23, 42, 0.08) !important;
            border-radius: 12px !important;
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.08) !important;
            padding: 8px !important;
            margin-top: 12px !important;
        }

        .sticky-navbar .dropdown:hover .dropdown-menu {
            opacity: 1 !important;
            visibility: visible !important;
            transform: translateY(0) !important;
        }

        .sticky-navbar .dropdown-item {
            font-family: 'Inter', sans-serif;
            font-size: 14px;
            font-weight: 500;
            color: #334155 !important;
            padding: 8px 16px !important;
            border-radius: 8px !important;
            background: transparent !important;
            transition: all 0.2s ease !important;
        }

        .sticky-navbar .dropdown-item:hover {
            background: rgba(231, 76, 60, 0.08) !important;
            color: #e74c3c !important;
            transform: translateX(4px) !important;
        }

        /* Align active routes nicely */
        .sticky-navbar .nav-link.active {
            color: #ffffff !important;
        }
        .sticky-navbar.scrolled .nav-link.active {
            color: #e74c3c !important;
        }
        .sticky-navbar .nav-link.active::after {
            width: 60%;
        }

        /* ==========================================================================
           MODERN CAROUSEL & PINNED DOCUMENTS DESIGN (OCEAN BLUE ACCENT)
           ========================================================================== */
        /* Pinned Section Pulse Badge */
        .pinned-pulse-badge {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 28px;
            height: 28px;
            background: rgba(14, 165, 233, 0.15);
            border-radius: 50%;
        }

        .pinned-pulse-dot {
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(14, 165, 233, 0.4);
            border-radius: 50%;
            animation: pinPulse 2s infinite ease-in-out;
            z-index: -1;
        }

        @keyframes pinPulse {
            0% { transform: scale(0.9); opacity: 0.9; }
            100% { transform: scale(1.6); opacity: 0; }
        }

        .pinned-section-title {
            text-shadow: 0 2px 8px rgba(15, 23, 42, 0.6);
        }

        /* Modern Pinned Card Style */
        .card-dokumen-disematkan-modern {
            width: 440px;
            height: 140px;
            margin-left: 16px;
            border-radius: 20px !important;
            background: rgba(255, 255, 255, 0.08) !important;
            backdrop-filter: blur(20px) saturate(120%) !important;
            -webkit-backdrop-filter: blur(20px) saturate(120%) !important;
            border: 1px solid rgba(255, 255, 255, 0.15) !important;
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15) !important;
            display: inline-block;
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) !important;
            will-change: transform, box-shadow, border-color;
        }

        .card-dokumen-disematkan-modern .card-body {
            padding: 12px 16px !important;
        }

        .card-dokumen-disematkan-modern:hover {
            transform: translateY(-5px) scale(1.015);
            background: rgba(255, 255, 255, 0.12) !important;
            border-color: rgba(14, 165, 233, 0.4) !important;
            box-shadow: 0 15px 40px rgba(15, 23, 42, 0.25) !important;
        }

        /* Pin tag on top right */
        .pin-tag {
            position: absolute;
            top: 12px;
            right: 12px;
            color: rgba(255, 255, 255, 0.4);
            font-size: 13px;
            transition: all 0.4s ease;
            z-index: 2;
        }

        .card-dokumen-disematkan-modern:hover .pin-tag {
            color: #38bdf8;
            transform: rotate(15deg) scale(1.2);
        }

        /* Doc badge category */
        .doc-badge {
            font-family: 'Inter', sans-serif;
            font-size: 8.5px;
            font-weight: 800;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.7);
            background: rgba(255, 255, 255, 0.12);
            padding: 3px 6px;
            border-radius: 5px;
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .card-dokumen-disematkan-modern:hover .doc-badge {
            color: #ffffff;
            background: rgba(14, 165, 233, 0.2);
            border-color: rgba(14, 165, 233, 0.15);
        }

        /* Title Styling */
        .judul-disematkan-modern {
            font-family: 'Inter', sans-serif;
            font-size: 13px;
            font-weight: 700;
            line-height: 1.4;
            color: #ffffff !important;
            text-decoration: none;
            max-height: 38px;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            transition: color 0.3s ease;
            text-align: left;
        }

        .judul-disematkan-modern:hover {
            color: #38bdf8 !important;
        }

        /* Footer and stats formatting */
        .disematkan-footer {
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            padding-top: 8px;
        }

        .stat-item i {
            font-size: 15px;
        }

        .stat-text {
            font-family: 'Inter', sans-serif;
            font-size: 11.5px;
            font-weight: 500;
            color: rgba(255, 255, 255, 0.7);
        }

        /* Flickity controls customization on homepage */
        .main-carousel .flickity-viewport {
            border-radius: 20px;
            padding-bottom: 10px;
        }

        /* Customize Flickity dots to be premium pills */
        .main-carousel .flickity-page-dots {
            bottom: -22px;
        }

        .main-carousel .flickity-page-dots .dot {
            width: 8px;
            height: 8px;
            background: rgba(255, 255, 255, 0.3);
            opacity: 1;
            border-radius: 50%;
            margin: 0 4px;
            transition: all 0.3s ease;
        }

        .main-carousel .flickity-page-dots .dot.is-selected {
            background: #0ea5e9;
            width: 20px;
            border-radius: 4px;
            box-shadow: 0 0 8px rgba(14, 165, 233, 0.6);
        }

        @media screen and (max-width: 576px) {
            .card-dokumen-disematkan-modern {
                width: 100% !important;
                height: auto !important;
                min-height: 180px;
                margin-left: 0 !important;
                margin-bottom: 12px;
            }
            .main-carousel {
                margin-bottom: 20px;
            }
        }

        /* --- OPTIMALISASI TYPOGRAPHY & LAYOUT UTAMA HERO BERANDA --- */
        .container-hero-wide {
            width: 100% !important;
            transition: all 0.3s ease;
        }
        @media screen and (min-width: 1200px) {
            .container-hero-wide {
                max-width: 1380px !important;
            }
            .desc-caption {
                white-space: nowrap !important;
            }
        }
        .header-caption {
            font-family: 'Inter', sans-serif !important;
            font-size: 42px !important;
            font-weight: 850 !important;
            line-height: 1.25 !important;
            letter-spacing: -0.025em !important;
            text-shadow: 0 4px 20px rgba(15, 23, 42, 0.8) !important;
            color: #FFFFFF !important;
        }
        .desc-caption {
            font-family: 'Inter', sans-serif !important;
            font-size: 15.5px !important;
            font-weight: 500 !important;
            line-height: 1.65 !important;
            text-shadow: 0 2px 10px rgba(15, 23, 42, 0.8) !important;
            color: rgba(255, 255, 255, 0.95) !important;
            max-width: 1300px;
            margin: 8px auto 0 auto !important;
        }
        
        @media screen and (max-width: 768px) {
            .header-caption {
                font-size: 28px !important;
            }
            .desc-caption {
                font-size: 13.5px !important;
            }
        }
      </style>
      <script src="https://jdih.bakamla.go.id/js/bootstrap/bootstrap.bundle.min.js"></script>
      <script src="https://jdih.bakamla.go.id/js/jquery/jquery.min.js"></script>
      <script src="https://jdih.bakamla.go.id/js/vendor/ui/fab.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
      <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
   <!-- Livewire Styles --><style >[wire\:loading][wire\:loading], [wire\:loading\.delay][wire\:loading\.delay], [wire\:loading\.inline-block][wire\:loading\.inline-block], [wire\:loading\.inline][wire\:loading\.inline], [wire\:loading\.block][wire\:loading\.block], [wire\:loading\.flex][wire\:loading\.flex], [wire\:loading\.table][wire\:loading\.table], [wire\:loading\.grid][wire\:loading\.grid], [wire\:loading\.inline-flex][wire\:loading\.inline-flex] {display: none;}[wire\:loading\.delay\.none][wire\:loading\.delay\.none], [wire\:loading\.delay\.shortest][wire\:loading\.delay\.shortest], [wire\:loading\.delay\.shorter][wire\:loading\.delay\.shorter], [wire\:loading\.delay\.short][wire\:loading\.delay\.short], [wire\:loading\.delay\.default][wire\:loading\.delay\.default], [wire\:loading\.delay\.long][wire\:loading\.delay\.long], [wire\:loading\.delay\.longer][wire\:loading\.delay\.longer], [wire\:loading\.delay\.longest][wire\:loading\.delay\.longest] {display: none;}[wire\:offline][wire\:offline] {display: none;}[wire\:dirty]:not(textarea):not(input):not(select) {display: none;}:root {--livewire-progress-bar-color: #2299dd;}[x-cloak] {display: none !important;}</style>
</head>
   <body>
      <div class="">

        <script src="https://cdn.jsdelivr.net/npm/sienna-accessibility@latest/dist/sienna-accessibility.umd.js" defer></script>

         <div class="main-background" style="overflow: visible;">
             <!-- Background Slider Layers wrapped to clip Ken Burns pan/zoom animations horizontally without clipping search suggestion dropdown -->
             <div class="bg-slider-wrapper" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; overflow: hidden; z-index: -3; pointer-events: none;">
                 <div class="bg-slide-layer" id="bgLayer1"></div>
                 <div class="bg-slide-layer" id="bgLayer2"></div>
             </div>
             
            <div class="row py-3 main-logo-bar" id="header-top">
               <div style="width: 90%; margin: 0 auto;" class="max-auto">
                  <div class="row">
                     <div class="col-mb-12 col-sm-12 d-flex justify-content-start align-items-center">
                        <img src="https://jdih.bakamla.go.id/images/logo/logo-jdih.png" class="logo-header" alt="JDIH Logo"
                           style="max-width: 80px; margin-right: 10px;">
                        <img src="https://jdih.bakamla.go.id/images/logo/new-logo.png" class="logo-header" alt="Bakamla Logo"
                           style="max-width: 80px;">
                        <div class="caption-top-header">
                           Jaringan Dokumentasi dan Informasi Hukum <br>
                           <span style="color: #E74C3C; font-size: 16px;">Badan Keamanan Laut Republik Indonesia</span>
                        </div>
                        
                     </div>
                  </div>
               </div>
            </div>
            
            <nav class="mobile-navbar-wrapper d-lg-none">
    
    <div class="mobile-header">
        <button class="mobile-menu-toggler" id="mobileMenuBtn">
            <i class="ph ph-list" id="menuIcon"></i>
        </button>
    </div>

    <div class="mobile-menu-container" id="mobileMenuContent">
        <ul class="mobile-menu-list">
            
            <li>
                <a href="https://jdih.bakamla.go.id" class="mobile-link">
                    <span class="link-text"><i class="ph ph-house me-2"></i> Beranda</span>
                </a>
            </li>

            <li class="has-submenu">
                <a href="#" class="mobile-link toggle-submenu">
                    <span class="link-text"><i class="ph ph-files me-2"></i> Dokumen</span>
                    <i class="ph ph-caret-down chevron-icon"></i>
                </a>
                <ul class="mobile-submenu">
                    <li><a href="https://jdih.bakamla.go.id/document/peraturan">Peraturan</a></li>
                    <li><a href="https://jdih.bakamla.go.id/document/monografi">Monografi</a></li>
                    <li><a href="https://jdih.bakamla.go.id/document/artikel">Artikel</a></li>
                    <li><a href="https://jdih.bakamla.go.id/document/putusan">Putusan</a></li>
                </ul>
            </li>

            <li class="has-submenu">
                <a href="#" class="mobile-link toggle-submenu">
                    <span class="link-text"><i class="ph ph-pencil-simple me-2"></i> Pembentukan PUU</span>
                    <i class="ph ph-caret-down chevron-icon"></i>
                </a>
                <ul class="mobile-submenu">
                    <li><a href="https://jdih.bakamla.go.id/document/progsun">Daftar Progsun</a></li>
                    <li><a href="https://jdih.bakamla.go.id/document/naskahau">Naskah Akademik/Urgensi</a></li>
                    <li><a href="https://jdih.bakamla.go.id/document/rancanganpuu">Rancangan PUU</a></li>
                    <li><a href="https://jdih.bakamla.go.id/document/anev">Analis dan Evaluasi</a></li>
                    <li><a href="https://jdih.bakamla.go.id/document/risalah">Risalah Pembahasan</a></li>
                    <li><a href="https://jdih.bakamla.go.id/document/kajian">Kajian/Penelitian Hukum</a></li>
                </ul>
            </li>

            <li>
                <a href="https://jdihn.go.id" target="_blank" class="mobile-link">
                    <span class="link-text"><i class="ph ph-globe me-2"></i> Portal JDIHN</span>
                </a>
            </li>
            <li>
                <a href="https://jdih.bakamla.go.id/berita" class="mobile-link">
                    <span class="link-text"><i class="ph ph-newspaper me-2"></i> Berita</span>
                </a>
            </li>
            <li>
                <a href="https://jdih.bakamla.go.id/frequently-sked-questions" class="mobile-link">
                    <span class="link-text"><i class="ph ph-question me-2"></i> FAQ</span>
                </a>
            </li>

            <li class="has-submenu">
                <a href="#" class="mobile-link toggle-submenu">
                    <span class="link-text"><i class="ph ph-info me-2"></i> Tentang Kami</span>
                    <i class="ph ph-caret-down chevron-icon"></i>
                </a>
                <ul class="mobile-submenu">
                    <li><a href="https://jdih.bakamla.go.id/sekilas-sejarah">Sekilas Sejarah</a></li>
                    <li><a href="https://jdih.bakamla.go.id/dasar-hukum">Dasar Hukum</a></li>
                    <li><a href="https://jdih.bakamla.go.id/visi">Visi</a></li>
                    <li><a href="https://jdih.bakamla.go.id/misi">Misi</a></li>
                    <li><a href="https://jdih.bakamla.go.id/struktur-organisasi">Struktur Organisasi</a></li>
                    <li><a href="https://jdih.bakamla.go.id/standard-operasional-prosedur">SOP JDIH BAKAMLA RI</a></li>
                </ul>
            </li>

            <li class="has-submenu">
                <a href="#" class="mobile-link toggle-submenu">
                    <span class="link-text"><i class="ph ph-translate me-2"></i> Bahasa</span>
                    <i class="ph ph-caret-down chevron-icon"></i>
                </a>
                <ul class="mobile-submenu" style="background: #fff;">
                    <li style="padding: 15px 30px;">
                        <div id="google_translate_mobile"></div>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</nav>

<style>
    /* --- 1. Container Utama --- */
    .mobile-navbar-wrapper {
        background-color: #fff;
        position: sticky;
        top: 0;
        z-index: 99999;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05); /* Shadow halus */
        border-bottom: 1px solid #f0f0f0;
    }

    /* --- 2. Header (Tombol Tengah) --- */
    .mobile-header {
        display: flex;
        justify-content: center; /* Posisi TENGAH */
        align-items: center;
        padding: 12px 0; /* Padding vertikal yang pas */
        background: #fff;
        position: relative;
        z-index: 100000;
        height: 60px; /* Tinggi header yang konsisten */
    }

    .mobile-menu-toggler {
        background: transparent;
        border: none;
        font-size: 28px; /* Ukuran ikon pas */
        color: #333;
        cursor: pointer;
        padding: 10px; /* Area klik lebih luas */
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%; /* Efek bulat saat ditekan */
        transition: background-color 0.2s, color 0.2s;
    }
    
    .mobile-menu-toggler:active, 
    .mobile-menu-toggler:hover {
        background-color: #f8f9fa; /* Background abu sangat muda saat disentuh */
        color: #E74C3C; /* Warna Merah Bakamla */
    }

    /* --- 3. Container Menu (Slide Down) --- */
    .mobile-menu-container {
        background-color: #fff;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        border-top: 1px solid #f0f0f0;
        position: absolute;
        width: 100%;
        left: 0;
        box-shadow: 0 10px 20px rgba(0,0,0,0.05);
    }

    .mobile-menu-container.open {
        max-height: 100vh;
        overflow-y: auto;
    }

    .mobile-menu-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    /* --- 4. Styling Link Utama --- */
    .mobile-link {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 16px 30px; /* Padding kiri-kanan lebih lega */
        text-decoration: none;
        color: #4b5563;
        font-weight: 500;
        font-size: 15px;
        border-bottom: 1px solid #f9f9f9;
        transition: all 0.2s;
    }

    .mobile-link:hover, .mobile-link.active {
        background-color: #fff5f5;
        color: #E74C3C;
        padding-left: 35px; /* Efek geser sedikit saat hover */
    }

    .mobile-link i {
        font-size: 18px;
        color: #9ca3af;
        width: 24px; /* Lebar tetap agar teks rata */
        text-align: center;
    }

    .mobile-link:hover i, .mobile-link.active i {
        color: #E74C3C;
    }

    /* --- 5. Styling Submenu --- */
    .mobile-submenu {
        list-style: none;
        padding: 0;
        margin: 0;
        background-color: #fafafa;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-out;
    }

    .mobile-submenu li a {
        display: block;
        padding: 12px 30px 12px 65px; /* Indentasi submenu */
        text-decoration: none;
        color: #6b7280;
        font-size: 14px;
        border-bottom: 1px solid #f0f0f0;
    }

    .mobile-submenu li a:hover {
        color: #E74C3C;
        background-color: #f0f0f0;
    }

    /* --- 6. Animasi Panah --- */
    .chevron-icon {
        transition: transform 0.3s ease;
        font-size: 14px;
    }

    .has-submenu.open .chevron-icon {
        transform: rotate(180deg);
        color: #E74C3C;
    }
</style>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const toggler = document.getElementById('mobileMenuBtn');
    const menuContent = document.getElementById('mobileMenuContent');
    const menuIcon = document.getElementById('menuIcon');

    // 1. Toggle Menu Utama
    toggler.addEventListener('click', function(e) {
        e.stopPropagation();
        menuContent.classList.toggle('open');
        
        // Ganti icon strip 3 (ph-list) ke X (ph-x)
        if(menuContent.classList.contains('open')) {
            menuIcon.classList.remove('ph-list');
            menuIcon.classList.add('ph-x');
        } else {
            menuIcon.classList.remove('ph-x');
            menuIcon.classList.add('ph-list');
        }
    });

    // 2. Logic Accordion Submenu
    const submenuToggles = document.querySelectorAll('.toggle-submenu');

    submenuToggles.forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            
            const parentLi = this.parentElement;
            const submenu = parentLi.querySelector('.mobile-submenu');
            const isOpen = parentLi.classList.contains('open');

            // Tutup submenu lain (Accordion)
            document.querySelectorAll('.has-submenu.open').forEach(openItem => {
                if (openItem !== parentLi) {
                    openItem.classList.remove('open');
                    openItem.querySelector('.mobile-submenu').style.maxHeight = null;
                    openItem.querySelector('.toggle-submenu').classList.remove('active');
                }
            });

            // Toggle submenu saat ini
            if (!isOpen) {
                parentLi.classList.add('open');
                
                // Khusus untuk container Google Translate, biarkan auto agar tidak terpotong
                if(parentLi.querySelector('#google_translate_mobile')) {
                     submenu.style.maxHeight = "300px"; // Cukup tinggi untuk dropdown translate
                     submenu.style.overflow = "visible"; 
                } else {
                     submenu.style.maxHeight = submenu.scrollHeight + "px"; 
                }
                this.classList.add('active');
            } else {
                parentLi.classList.remove('open');
                submenu.style.maxHeight = null;
                this.classList.remove('active');
            }
        });
    });

    // 3. Tutup menu jika klik di luar
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.mobile-navbar-wrapper') && menuContent.classList.contains('open')) {
            menuContent.classList.remove('open');
            menuIcon.classList.remove('ph-x');
            menuIcon.classList.add('ph-list');
        }
    });
});
</script>

            <div class="row" id="wrapper-main-navbar mt-0">
               <div class="max-auto">
                  <div class="container container-hero-wide" style="background: none;">
                     <div class="row">
                        <nav class="navbar navbar-expand-lg d-none d-lg-block py-md-2 sticky-navbar" style="background: transparent;">
                           <div class="container-fluid">
                              <!-- Mini Brand Logo for Scrolled State -->
                              <a class="navbar-brand sticky-brand" href="https://jdih.bakamla.go.id">
                                 <div class="d-flex align-items-center gap-2">
                                    <img src="https://jdih.bakamla.go.id/images/logo/logo-jdih.png" class="logo-sticky" alt="Logo JDIH" style="max-height: 38px;">
                                    <img src="https://jdih.bakamla.go.id/images/logo/new-logo.png" class="logo-sticky" alt="Logo Bakamla" style="max-height: 38px;">
                                 </div>
                                 <div class="brand-text-sticky d-flex flex-column ms-2" style="line-height: 1.2; text-align: left;">
                                    <span style="font-weight: 800; font-size: 13.5px; color: #0f172a; font-family: 'Inter', sans-serif; letter-spacing: -0.01em;">JDIH BAKAMLA RI</span>
                                    <span style="font-weight: 600; font-size: 10px; color: #e74c3c; font-family: 'Inter', sans-serif;">Badan Keamanan Laut RI</span>
                                 </div>
                              </a>
                              <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                                 aria-expanded="false" aria-label="Toggle navigation">
                                 <span class="navbar-toggler-icon"></span>
                                 <span class="hamburger-icon">
                                    <div></div>
                                 </span>
                              </button>
                              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                 <ul class="navbar-nav ms-auto mx-auto">
                                    <li class="nav-item">
                                       <a class="nav-link nav-item-style" aria-current="page"
                                          href="https://jdih.bakamla.go.id">Beranda</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                       <a class="nav-link dropdown-toggle nav-item-style" href="#"
                                          role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                       Dokumen
                                       </a>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="https://jdih.bakamla.go.id/document/peraturan">Peraturan</a></li>
                                          <li><a class="dropdown-item" href="https://jdih.bakamla.go.id/document/monografi">Monografi</a></li>
                                          <li><a class="dropdown-item" href="https://jdih.bakamla.go.id/document/artikel">Artikel</a></li>
                                          <li><a class="dropdown-item" href="https://jdih.bakamla.go.id/document/putusan">Putusan</a></li>
                                       </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                       <a class="nav-link dropdown-toggle nav-item-style" href="#"
                                          role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                       Pembentukan PUU
                                       </a>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="https://jdih.bakamla.go.id/document/progsun">Daftar Progsun</a></li>
                                          <li><a class="dropdown-item" href="https://jdih.bakamla.go.id/document/naskahau">Naskah Akademik/Urgensi</a></li>
                                          <li><a class="dropdown-item" href="https://jdih.bakamla.go.id/document/rancanganpuu">Rancangan PUU</a></li>
                                          <li><a class="dropdown-item" href="https://jdih.bakamla.go.id/document/anev">Analis dan Evaluasi</a></li>
                                          <li><a class="dropdown-item" href="https://jdih.bakamla.go.id/document/risalah">Risalah Pembahasan</a></li>
                                          <li><a class="dropdown-item" href="https://jdih.bakamla.go.id/document/kajian">Kajian/Penelitian Hukum</a></li>
                                       </ul>
                                    </li>

                                    <li class="nav-item">
                                       <a class="nav-link nav-item-style" href="https://jdihn.go.id"
                                          target="_blank">Portal JDIHN</a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link nav-item-style"
                                          href="https://jdih.bakamla.go.id/berita">Berita</a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link nav-item-style" href="https://jdih.bakamla.go.id/frequently-sked-questions">FAQ</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                       <a class="nav-link dropdown-toggle nav-item-style" href="#"
                                          role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                       Tentang Kami
                                       </a>
                                       <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="https://jdih.bakamla.go.id/sekilas-sejarah">Sekilas Sejarah</a></li>
                                          <li><a class="dropdown-item" href="https://jdih.bakamla.go.id/dasar-hukum">Dasar Hukum</a></li>
                                          <li><a class="dropdown-item" href="https://jdih.bakamla.go.id/visi">Visi</a></li>
                                          <li><a class="dropdown-item" href="https://jdih.bakamla.go.id/misi">Misi</a></li>
                                          <li><a class="dropdown-item" href="https://jdih.bakamla.go.id/struktur-organisasi">Struktur Organisasi</a></li>
                                          <li><a class="dropdown-item" href="https://jdih.bakamla.go.id/standard-operasional-prosedur">SOP JDIH BAKAMLA RI</a></li>
                                       </ul>
                                    </li>
                                    <li class="nav-item dropdown wrapper-bahasa">
                                       <a class="nav-link dropdown-toggle nav-item-style" href="#"
                                          role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                          Bahasa
                                       </a>
                                       <ul class="dropdown-menu">
                                          <li>
                                             <div class="p-2" id="google_translate_element"></div>
                                          </li>
                                       </ul>
                                    </li>
                                    </li>
                                    <li class="nav-item">
                                       <a href="https://jdih.bakamla.go.id/garda-laut/login" type="button" class="btn-masuk" style="visibility: hidden;">Masuk</a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </nav>
                     </div>
                      <div class="row text-center mt-lg-2 pt-lg-0 mt-2">
                         <h1 class="header-caption">Selamat Datang di JDIH BAKAMLA RI</h1>
                         <p class="desc-caption">Akses peraturan dan kebijakan terbaru tentang keamanan laut Indonesia dengan cepat dan mudah dari perangkat Anda</p>
                      </div>
                      <div wire:snapshot="{&quot;data&quot;:{&quot;query&quot;:&quot;&quot;,&quot;documents&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}],&quot;selectedNomor&quot;:&quot;&quot;,&quot;selectedTahun&quot;:&quot;&quot;,&quot;selectedJenisPeraturan&quot;:&quot;&quot;},&quot;memo&quot;:{&quot;id&quot;:&quot;vVXRchwfb8gK29AAVqoB&quot;,&quot;name&quot;:&quot;search-document&quot;,&quot;path&quot;:&quot;\/&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;scripts&quot;:[],&quot;assets&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;id&quot;},&quot;checksum&quot;:&quot;1f076dfb81f648c53bcbf7199cb0ba9eb227af4a057ea6056b45f60718fc1445&quot;}" wire:effects="[]" wire:id="vVXRchwfb8gK29AAVqoB" style="position: relative; z-index: 1050;">
    <style>
        /* Container Input */
        .search-input-wrapper {
            position: relative;
            width: 100%;
        }
        
        /* Tombol Mic Default */
        .btn-voice {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            width: 35px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: transparent;
            border: none;
            border-radius: 50%;
            color: #6c757d;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 10;
            outline: none;
        }

        .btn-voice:hover {
            color: #FF1629 !important;
            background-color: rgba(255, 22, 41, 0.08) !important;
        }

        /* --- STATE: LISTENING --- */
        .btn-voice.listening {
            color: #dc3545;
            background-color: rgba(220, 53, 69, 0.1);
            animation: breathe 2s infinite ease-in-out; 
        }

        .btn-voice.listening::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            border: 2px solid rgba(220, 53, 69, 0.6);
            top: 0;
            left: 0;
            z-index: -1;
            animation: sonar-wave 2.5s infinite linear; 
        }

        .btn-voice.listening::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            border: 1px solid rgba(220, 53, 69, 0.3);
            top: 0;
            left: 0;
            z-index: -1;
            animation: sonar-wave 2.5s infinite linear 1.25s; 
        }

        @keyframes breathe {
            0% { transform: translateY(-50%) scale(1); }
            50% { transform: translateY(-50%) scale(1.15); }
            100% { transform: translateY(-50%) scale(1); }
        }

        @keyframes sonar-wave {
            0% {
                transform: scale(1);
                opacity: 1;
                border-width: 2px;
            }
            100% {
                transform: scale(3);
                opacity: 0;
                border-width: 0px;
            }
        }

        /* High-End Search Bar Styling */
        .search-header-container {
            width: 100%;
        }

        .search-header {
            background: rgba(255, 255, 255, 0.96) !important;
            border-radius: 24px !important;
            border: 1px solid rgba(255, 22, 41, 0.15) !important;
            box-shadow: 0 12px 36px rgba(15, 23, 42, 0.08) !important;
            padding: 6px 8px 6px 18px !important;
            margin-top: 14px !important;
            margin-bottom: 22px !important;
            transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1) !important;
            display: flex !important;
            flex-direction: row !important;
            align-items: center !important;
            flex-wrap: nowrap !important;
            gap: 0 !important;
        }

        .search-header:focus-within {
            border-color: rgba(255, 22, 41, 0.45) !important;
            box-shadow: 0 20px 48px rgba(255, 22, 41, 0.15) !important;
            transform: translateY(-2px);
        }

        .search-col-dropdown {
            flex-shrink: 0 !important;
            display: flex !important;
            align-items: center !important;
        }

        .search-col-input-btn {
            flex-grow: 1 !important;
            display: flex !important;
            align-items: center !important;
            gap: 8px !important;
        }

        .dropdown-toggle {
            font-family: 'Inter', sans-serif !important;
            font-weight: 600 !important;
            font-size: 14px !important;
            color: #334155 !important;
            border: none !important;
            background: transparent !important;
            height: 44px !important;
            display: flex !important;
            align-items: center !important;
            gap: 8px !important;
            padding: 0 16px 0 0 !important;
            cursor: pointer;
        }

        .dropdown-toggle::after {
            color: #FF1629 !important;
            transition: transform 0.25s ease;
        }

        .dropdown-toggle[aria-expanded="true"]::after {
            transform: rotate(180deg);
        }

        .text-search {
            font-family: 'Inter', sans-serif !important;
            font-size: 14.5px !important;
            font-weight: 500 !important;
            color: #1e293b !important;
            border: none !important;
            border-left: 1px solid rgba(15, 23, 42, 0.08) !important;
            border-radius: 0 !important;
            background: transparent !important;
            padding-left: 18px !important;
            padding-right: 48px !important;
            height: 44px !important;
            box-shadow: none !important;
            width: 100% !important;
            outline: none !important;
        }

        .text-search:focus {
            background: transparent !important;
            border-left: 1px solid rgba(15, 23, 42, 0.08) !important;
            box-shadow: none !important;
        }

        .btn-cari {
            background: linear-gradient(135deg, #ef4444, #dc2626) !important;
            border: none !important;
            border-radius: 16px !important;
            height: 44px !important;
            width: 170px !important;
            color: #ffffff !important;
            font-family: 'Inter', sans-serif !important;
            font-size: 15px !important;
            font-weight: 600 !important;
            letter-spacing: 0.02em !important;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1) !important;
            box-shadow: 0 4px 12px rgba(239, 68, 68, 0.3) !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            gap: 8px !important;
            flex-shrink: 0 !important;
            margin: 0 !important;
        }

        .btn-cari:hover {
            transform: translateY(-2px) !important;
            box-shadow: 0 8px 20px rgba(239, 68, 68, 0.4) !important;
            background: linear-gradient(135deg, #f87171, #ef4444) !important;
        }

        /* Smooth Transition for Filter Panel Toggle */
        #advancedSearch {
            max-height: 0;
            opacity: 0;
            overflow: hidden;
            transform: translateY(-10px) scale(0.98);
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) !important;
            will-change: max-height, opacity, transform;
            pointer-events: none;
        }

        #advancedSearch.show {
            max-height: 500px;
            opacity: 1;
            transform: translateY(0) scale(1);
            margin-top: 15px;
            margin-bottom: 15px;
            pointer-events: auto;
        }

        /* --- RESPONSIVE STYLE FOR MOBILE VIEWS --- */
        @media screen and (max-width: 768px) {
            .search-header {
                flex-direction: column !important;
                align-items: stretch !important;
                border-radius: 20px !important;
                padding: 16px !important;
                gap: 12px !important;
            }

            .search-col-dropdown {
                width: 100% !important;
                border-bottom: 1px solid rgba(15, 23, 42, 0.06) !important;
                padding-bottom: 10px !important;
            }

            .dropdown-toggle {
                width: 100% !important;
                justify-content: space-between !important;
                height: 38px !important;
                padding-right: 4px !important;
            }

            .search-col-input-btn {
                flex-direction: column !important;
                align-items: stretch !important;
                width: 100% !important;
                gap: 12px !important;
            }

            .search-input-wrapper {
                width: 100% !important;
                background: rgba(15, 23, 42, 0.03) !important;
                border: 1px solid rgba(15, 23, 42, 0.08) !important;
                border-radius: 12px !important;
                padding: 2px !important;
            }

            .text-search {
                border-left: none !important;
                padding-left: 14px !important;
                height: 44px !important;
            }

            .text-search:focus {
                border-left: none !important;
            }

            .btn-cari {
                width: 100% !important;
                height: 46px !important;
                border-radius: 12px !important;
                box-shadow: 0 4px 12px rgba(239, 68, 68, 0.25) !important;
            }
        }

        /* Suggestions Popover Modernization */
        .suggestions-list {
            position: absolute;
            top: calc(100% + 8px);
            left: 0;
            right: 0;
            background: #ffffff;
            border-radius: 14px;
            border: 1px solid rgba(15, 23, 42, 0.08);
            box-shadow: 0 15px 40px rgba(15, 23, 42, 0.12);
            z-index: 9999;
            max-height: 380px;
            overflow-y: auto;
            padding: 6px 0;
            scrollbar-width: thin;
            scrollbar-color: rgba(255, 22, 41, 0.3) transparent;
        }

        /* Custom scrollbar for Webkit */
        .suggestions-list::-webkit-scrollbar {
            width: 6px;
        }
        .suggestions-list::-webkit-scrollbar-track {
            background: transparent;
        }
        .suggestions-list::-webkit-scrollbar-thumb {
            background: rgba(255, 22, 41, 0.2);
            border-radius: 10px;
        }
        .suggestions-list::-webkit-scrollbar-thumb:hover {
            background: rgba(255, 22, 41, 0.4);
        }

        .suggestion-item {
            padding: 12px 18px;
            font-family: 'Inter', sans-serif;
            cursor: pointer;
            transition: all 0.2s ease;
            text-align: left;
            border-bottom: 1px solid rgba(15, 23, 42, 0.04);
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .suggestion-item:last-child {
            border-bottom: none;
        }

        .suggestion-item:hover {
            background-color: rgba(255, 22, 41, 0.05);
            padding-left: 22px;
        }

        .suggestion-title {
            font-size: 14px;
            font-weight: 500;
            color: #1e293b;
            line-height: 1.4;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            transition: color 0.2s;
        }

        .suggestion-item:hover .suggestion-title {
            color: #FF1629;
        }

        .suggestion-meta {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 4px;
        }

        /* Status Badges */
        .badge-status-berlaku {
            background-color: rgba(46, 204, 113, 0.1);
            color: #2ECC71;
            border: 1px solid rgba(46, 204, 113, 0.2);
            padding: 2px 8px;
            border-radius: 6px;
            font-size: 11px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 4px;
        }

        .badge-status-tidak-berlaku {
            background-color: rgba(231, 76, 96, 0.1);
            color: #E74C3C;
            border: 1px solid rgba(231, 76, 96, 0.2);
            padding: 2px 8px;
            border-radius: 6px;
            font-size: 11px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 4px;
        }

        .badge-status-info {
            background-color: rgba(149, 165, 166, 0.1);
            color: #7f8c8d;
            border: 1px solid rgba(149, 165, 166, 0.2);
            padding: 2px 8px;
            border-radius: 6px;
            font-size: 11px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 4px;
        }

        /* Year and Type Meta */
        .badge-meta-year {
            background-color: rgba(15, 23, 42, 0.05);
            color: #64748b;
            padding: 2px 8px;
            border-radius: 6px;
            font-size: 11px;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 4px;
        }

        .badge-meta-jenis {
            background-color: rgba(52, 73, 94, 0.05);
            color: #34495e;
            padding: 2px 8px;
            border-radius: 6px;
            font-size: 11px;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 4px;
            max-width: 150px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* Premium Modern Filter Panel Styling */
        .filter-card-premium {
            background: rgba(15, 23, 42, 0.55) !important;
            backdrop-filter: blur(20px) saturate(120%) !important;
            -webkit-backdrop-filter: blur(20px) saturate(120%) !important;
            border: 1px solid rgba(255, 255, 255, 0.12) !important;
            border-radius: 18px !important;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3) !important;
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) !important;
        }

        .filter-title-premium {
            font-family: 'Inter', sans-serif !important;
            font-weight: 700 !important;
            font-size: 16px !important;
            color: #ffffff !important;
            letter-spacing: 0.03em !important;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .filter-input-premium {
            background: rgba(255, 255, 255, 0.07) !important;
            border: 1px solid rgba(255, 255, 255, 0.18) !important;
            border-radius: 12px !important;
            color: #ffffff !important;
            font-family: 'Inter', sans-serif !important;
            font-size: 14px !important;
            font-weight: 500 !important;
            padding: 10px 16px !important;
            height: 46px !important;
            transition: all 0.3s ease !important;
            box-shadow: none !important;
        }

        .filter-input-premium::placeholder {
            color: rgba(255, 255, 255, 0.45) !important;
        }

        .filter-input-premium:focus {
            border-color: #FF1629 !important;
            box-shadow: 0 0 0 3px rgba(255, 22, 41, 0.25) !important;
            background: rgba(255, 255, 255, 0.12) !important;
            color: #ffffff !important;
        }

        .filter-select-premium {
            appearance: none !important;
            -webkit-appearance: none !important;
            background: rgba(255, 255, 255, 0.07) url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23FF1629' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e") no-repeat right 16px center/10px 10px !important;
            border: 1px solid rgba(255, 255, 255, 0.18) !important;
            border-radius: 12px !important;
            color: #ffffff !important;
            font-family: 'Inter', sans-serif !important;
            font-size: 14px !important;
            font-weight: 500 !important;
            padding: 10px 36px 10px 16px !important;
            height: 46px !important;
            transition: all 0.3s ease !important;
            cursor: pointer !important;
            box-shadow: none !important;
        }

        .filter-select-premium:focus {
            border-color: #FF1629 !important;
            box-shadow: 0 0 0 3px rgba(255, 22, 41, 0.25) !important;
            background-color: rgba(255, 255, 255, 0.12) !important;
            color: #ffffff !important;
        }

        .filter-select-premium option {
            background-color: #1e293b !important;
            color: #ffffff !important;
            font-weight: 500 !important;
        }

        .btn-reset-premium {
            background: rgba(239, 68, 68, 0.1) !important;
            border: 1px solid rgba(239, 68, 68, 0.25) !important;
            color: #f87171 !important;
            font-family: 'Inter', sans-serif !important;
            font-size: 13px !important;
            font-weight: 600 !important;
            border-radius: 10px !important;
            padding: 6px 14px !important;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1) !important;
            outline: none !important;
            box-shadow: none !important;
        }

        .btn-reset-premium:hover {
            background: rgba(239, 68, 68, 0.22) !important;
            border-color: #ef4444 !important;
            color: #ffffff !important;
            transform: translateY(-1.5px) !important;
            box-shadow: 0 4px 12px rgba(239, 68, 68, 0.2) !important;
        }
    </style>

    <div class="search-header-container mb-1">
        <div class="search-header">
            <!-- Dropdown Filter Toggle -->
            <div class="search-col-dropdown">
                <button class="btn dropdown-toggle" id="advancedSearchToggle" type="button" aria-expanded="false">
                    <i class="ph ph-file-text" style="font-size: 16px; color: #FF1629;"></i>
                    Semua Dokumen
                </button>
            </div>
            
            <!-- Input & Button wrapper -->
            <div class="search-col-input-btn">
                <div class="search-input-wrapper">
                    <input type="text" 
                           id="searchInput"
                           wire:model.live="query" 
                           class="form-control text-search"
                           placeholder="Masukkan kata kunci atau gunakan suara...">
                    
                    <button type="button" class="btn-voice" id="voiceSearchBtn" title="Cari dengan suara">
                        <i class="ph ph-microphone" style="font-size: 20px;"></i>
                    </button>
                    
                    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                </div>

                <button class="btn-cari" type="button" wire:click="onCari()">
                    <i class="ph ph-magnifying-glass" style="font-size: 16px;"></i>
                    Cari
                </button>
            </div>
        </div>
    </div>

    <div id="advancedSearch">
        <div class="row">
            <div class="col-12 px-3">
                <form action="#">
                    <div class="card filter-card-premium">
                        <div class="card-body p-4">
                            <div class="d-flex gap-3 justify-content-between align-items-center mb-3">
                                <div>
                                    <h5 class="filter-title-premium mb-0">
                                        <i class="ph ph-sliders-horizontal" style="font-size: 18px; color: #FF1629;"></i>
                                        Filter Pencarian Lanjutan
                                    </h5>
                                </div>
                                <div>
                                    <button class="btn-reset-premium" type="reset">
                                        <i class="ph ph-trash" style="font-size: 14px; margin-right: 4px; vertical-align: middle;"></i>
                                        Reset Filter
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <input type="text" class="filter-input-premium w-100" name="nomor_peraturan" placeholder="Nomor Peraturan, misal: 10" wire:model="selectedNomor"/>
                                </div>
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <input type="number" class="filter-input-premium w-100" name="tahun_peraturan" placeholder="Tahun Peraturan, misal: 2024" wire:model="selectedTahun"/>
                                </div>
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <select name="jenis_peraturan" class="filter-select-premium w-100" wire:model="selectedJenisPeraturan">
                                        <option value="all">Semua Jenis Dokumen</option>
                                        <option value="peraturan">Peraturan</option>
                                        <option value="monografi">Monografi</option>
                                        <option value="artikel">Artikel</option>
                                        <option value="putusan">Putusan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('advancedSearchToggle').addEventListener('click', function() {
            const advancedSearch = document.getElementById('advancedSearch');
            const isShown = advancedSearch.classList.toggle('show');
            this.setAttribute('aria-expanded', isShown ? 'true' : 'false');
        });

        document.addEventListener('DOMContentLoaded', function () {
            const voiceBtn = document.getElementById('voiceSearchBtn');
            const searchInput = document.getElementById('searchInput');
            
            const SpeechRecognition = window.SpeechRecognition || 
                                      window.webkitSpeechRecognition || 
                                      window.mozSpeechRecognition || 
                                      window.msSpeechRecognition;

            if (SpeechRecognition) {
                const recognition = new SpeechRecognition();
                
                recognition.continuous = false; 
                recognition.lang = 'id-ID'; 
                recognition.interimResults = false; 
                recognition.maxAlternatives = 1;

                voiceBtn.addEventListener('click', function() {
                    if (voiceBtn.classList.contains('listening')) {
                        recognition.stop();
                    } else {
                        // Clear text saat mulai
                        searchInput.value = ''; 
                        searchInput.dispatchEvent(new Event('input', { bubbles: true }));
                        
                        try {
                            recognition.start();
                        } catch (error) {
                            console.warn("Recognition already started", error);
                        }
                    }
                });

                recognition.onstart = function() {
                    // Animasi MULAI di sini
                    voiceBtn.classList.add('listening');
                    searchInput.placeholder = "Mendengarkan...";
                };

                recognition.onend = function() {
                    // Animasi BERHENTI di sini (setelah proses selesai sepenuhnya)
                    voiceBtn.classList.remove('listening');
                    searchInput.placeholder = "Masukkan kata kunci atau gunakan suara...";
                };

                recognition.onresult = function(event) {
                    let transcript = event.results[0][0].transcript;
                    
                    // 1. Hapus titik di akhir
                    transcript = transcript.replace(/\.$/, '');

                    // 2. Format kata ulang (undang undang -> undang-undang)
                    transcript = transcript.replace(/\b(\w+)\s+\1\b/gi, "$1-$1");
                    
                    searchInput.value = transcript;

                    // Trigger Livewire
                    searchInput.dispatchEvent(new Event('input', { bubbles: true }));
                };

                recognition.onerror = function(event) {
                    console.error("Voice recognition error", event.error);
                    voiceBtn.classList.remove('listening');
                    
                    if(event.error == 'not-allowed') {
                        alert("Izin mikrofon ditolak. Silakan izinkan akses di pengaturan browser.");
                    } else if (event.error == 'no-speech') {
                        searchInput.placeholder = "Suara tidak terdengar. Coba lagi.";
                    }
                };
            } else {
                voiceBtn.style.display = 'none';
                console.log("Browser ini tidak mendukung fitur Voice Search Native.");
            }

            // --- Typewriter Effect for Placeholder ---
            const suggestions = [
                "Peraturan Badan Keamanan Laut Nomor...",
                "Undang-Undang Keamanan Laut...",
                "Keputusan Kepala Bakamla Nomor...",
                "Cari kata kunci, misal: Keamanan Laut...",
                "Masukkan kata kunci atau gunakan suara..."
            ];
            
            let wordIndex = 0;
            let charIndex = 0;
            let isDeleting = false;
            let delay = 100;

            function typeEffect() {
                // Skip typewriter update if voice search is currently listening
                if (voiceBtn && voiceBtn.classList.contains('listening')) {
                    setTimeout(typeEffect, 500);
                    return;
                }

                if (!searchInput) return;

                const currentWord = suggestions[wordIndex];
                
                if (isDeleting) {
                    searchInput.placeholder = currentWord.substring(0, charIndex - 1);
                    charIndex--;
                    delay = 30;
                } else {
                    searchInput.placeholder = currentWord.substring(0, charIndex + 1);
                    charIndex++;
                    delay = 80;
                }

                if (!isDeleting && charIndex === currentWord.length) {
                    delay = 2500; // pause at full word
                    isDeleting = true;
                } else if (isDeleting && charIndex === 0) {
                    isDeleting = false;
                    wordIndex = (wordIndex + 1) % suggestions.length;
                    delay = 400; // pause before typing next
                }

                setTimeout(typeEffect, delay);
            }
            setTimeout(typeEffect, 1200);
        });
    </script>
</div>
 
                                              <div class="row mt-2 pt-lg-0" style="padding-bottom: 30px;" id="dokumen-disematkan">
                          <!-- Premium Pinned Section Header -->
                          <div class="d-flex align-items-center gap-2 mb-2 mt-2 justify-content-start" style="text-align: left;">
                             <div class="pinned-pulse-badge">
                                <span class="pinned-pulse-dot"></span>
                                <i class="ph-push-pin-fill" style="font-size: 14px; transform: rotate(15deg); color: #0ea5e9;"></i>
                             </div>
                             <h6 class="pinned-section-title" style="margin: 0; font-family: 'Inter', sans-serif; font-size: 14px; font-weight: 700; color: #ffffff; letter-spacing: 0.08em; text-transform: uppercase;">Dokumen Disematkan</h6>
                          </div>
 
                          <div class="main-carousel">
                                                           <div class="card card-dokumen-disematkan-modern">
                                  <!-- Pinned Pin Tag on Top Right -->
                                  <div class="pin-tag">
                                     <i class="ph-push-pin-fill"></i>
                                  </div>
                                  <div class="card-body d-flex flex-column justify-content-between" style="height: 100%;">
                                     <div>
                                        <div class="disematkan-header mb-1" style="text-align: left; margin-bottom: 6px !important;">
                                           <span class="doc-badge">PERATURAN PRESIDEN</span>
                                        </div>
                                        <a href="https://jdih.bakamla.go.id/document/ce1b09e6-dc42-493f-a284-dea04a84033a/detail" class="judul-disematkan-modern" title="Peraturan Presiden Republik Indonesia Nomor 97 Tahun 2024 Tentang Tunjangan Kinerja Pegawai Di Lingkungan Badan Keamanan Laut">
                                           Peraturan Presiden Republik Indonesia Nomor 97 Tahun 2024 Tentang Tunjangan Kinerja Pegawai Di Lingkungan Badan Keamanan Laut
                                        </a>
                                     </div>
                                     
                                     <div class="disematkan-footer mt-auto">
                                        <div class="row align-items-center">
                                           <div class="col-7 text-start">
                                              <div class="stat-item d-flex align-items-center gap-2">
                                                 <i class="ph-calendar-blank text-info"></i>
                                                                                                  <span class="stat-text">22 Apr 2026</span>
                                                                                               </div>
                                           </div>
                                           <div class="col-5 d-flex justify-content-end gap-2">
                                              <div class="stat-item d-flex align-items-center gap-1" title="Diunduh" style="margin-right: 8px;">
                                                 <i class="ph-download-simple text-success"></i>
                                                 <span class="stat-text">12</span>
                                              </div>
                                              <div class="stat-item d-flex align-items-center gap-1" title="Dilihat">
                                                 <i class="ph-eye text-warning"></i>
                                                 <span class="stat-text">381</span>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                                                           <div class="card card-dokumen-disematkan-modern">
                                  <!-- Pinned Pin Tag on Top Right -->
                                  <div class="pin-tag">
                                     <i class="ph-push-pin-fill"></i>
                                  </div>
                                  <div class="card-body d-flex flex-column justify-content-between" style="height: 100%;">
                                     <div>
                                        <div class="disematkan-header mb-1" style="text-align: left; margin-bottom: 6px !important;">
                                           <span class="doc-badge">YURISPRUDENSI</span>
                                        </div>
                                        <a href="https://jdih.bakamla.go.id/document/8027ff0b-1605-441e-b8af-a5a9541072d6/detail" class="judul-disematkan-modern" title="Putusan Perkara KM. Restu Ibu Jaya GT. 29">
                                           Putusan Perkara KM. Restu Ibu Jaya GT. 29
                                        </a>
                                     </div>
                                     
                                     <div class="disematkan-footer mt-auto">
                                        <div class="row align-items-center">
                                           <div class="col-7 text-start">
                                              <div class="stat-item d-flex align-items-center gap-2">
                                                 <i class="ph-calendar-blank text-info"></i>
                                                                                                  <span class="stat-text">23 Jan 2026</span>
                                                                                               </div>
                                           </div>
                                           <div class="col-5 d-flex justify-content-end gap-2">
                                              <div class="stat-item d-flex align-items-center gap-1" title="Diunduh" style="margin-right: 8px;">
                                                 <i class="ph-download-simple text-success"></i>
                                                 <span class="stat-text">9</span>
                                              </div>
                                              <div class="stat-item d-flex align-items-center gap-1" title="Dilihat">
                                                 <i class="ph-eye text-warning"></i>
                                                 <span class="stat-text">675</span>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                                                           <div class="card card-dokumen-disematkan-modern">
                                  <!-- Pinned Pin Tag on Top Right -->
                                  <div class="pin-tag">
                                     <i class="ph-push-pin-fill"></i>
                                  </div>
                                  <div class="card-body d-flex flex-column justify-content-between" style="height: 100%;">
                                     <div>
                                        <div class="disematkan-header mb-1" style="text-align: left; margin-bottom: 6px !important;">
                                           <span class="doc-badge">Peraturan Badan Keamanan Laut</span>
                                        </div>
                                        <a href="https://jdih.bakamla.go.id/document/2b32857e-bba5-4ac5-94c7-29393ee98667/detail" class="judul-disematkan-modern" title="Peraturan Badan Keamanan Laut Republik Indonesia Nomor 2 Tahun 2025 Tentang Rencana Strategis Badan Keamanan Laut Tahun 2025-2029">
                                           Peraturan Badan Keamanan Laut Republik Indonesia Nomor 2 Tahun 2025 Tentang Rencana Strategis Badan Keamanan Laut Tahun 2025-2029
                                        </a>
                                     </div>
                                     
                                     <div class="disematkan-footer mt-auto">
                                        <div class="row align-items-center">
                                           <div class="col-7 text-start">
                                              <div class="stat-item d-flex align-items-center gap-2">
                                                 <i class="ph-calendar-blank text-info"></i>
                                                                                                  <span class="stat-text">26 Nov 2025</span>
                                                                                               </div>
                                           </div>
                                           <div class="col-5 d-flex justify-content-end gap-2">
                                              <div class="stat-item d-flex align-items-center gap-1" title="Diunduh" style="margin-right: 8px;">
                                                 <i class="ph-download-simple text-success"></i>
                                                 <span class="stat-text">56</span>
                                              </div>
                                              <div class="stat-item d-flex align-items-center gap-1" title="Dilihat">
                                                 <i class="ph-eye text-warning"></i>
                                                 <span class="stat-text">1,106</span>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                                                           <div class="card card-dokumen-disematkan-modern">
                                  <!-- Pinned Pin Tag on Top Right -->
                                  <div class="pin-tag">
                                     <i class="ph-push-pin-fill"></i>
                                  </div>
                                  <div class="card-body d-flex flex-column justify-content-between" style="height: 100%;">
                                     <div>
                                        <div class="disematkan-header mb-1" style="text-align: left; margin-bottom: 6px !important;">
                                           <span class="doc-badge">Keputusan Kepala Badan Keamanan Laut</span>
                                        </div>
                                        <a href="https://jdih.bakamla.go.id/document/398d37ae-637f-49ba-a20f-8326574c9bbd/detail" class="judul-disematkan-modern" title="Keputusan Kepala Badan Keamanan Laut Republik Indonesia Nomor 311 Tahun 2025 Tentang Standar Pelayanan Publik Jaringan Dokumentasi dan Informasi Hukum (JDIH) Di Lingkungan Badan Keamanan Laut Republik Indonesia">
                                           Keputusan Kepala Badan Keamanan Laut Republik Indonesia Nomor 311 Tahun 2025 Tentang Standar Pelayanan Publik Jaringan Dokumentasi dan Informasi Hukum (JDIH) Di Lingkungan Badan Keamanan Laut Republik Indonesia
                                        </a>
                                     </div>
                                     
                                     <div class="disematkan-footer mt-auto">
                                        <div class="row align-items-center">
                                           <div class="col-7 text-start">
                                              <div class="stat-item d-flex align-items-center gap-2">
                                                 <i class="ph-calendar-blank text-info"></i>
                                                                                                  <span class="stat-text">28 Oct 2025</span>
                                                                                               </div>
                                           </div>
                                           <div class="col-5 d-flex justify-content-end gap-2">
                                              <div class="stat-item d-flex align-items-center gap-1" title="Diunduh" style="margin-right: 8px;">
                                                 <i class="ph-download-simple text-success"></i>
                                                 <span class="stat-text">19</span>
                                              </div>
                                              <div class="stat-item d-flex align-items-center gap-1" title="Dilihat">
                                                 <i class="ph-eye text-warning"></i>
                                                 <span class="stat-text">544</span>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                                                           <div class="card card-dokumen-disematkan-modern">
                                  <!-- Pinned Pin Tag on Top Right -->
                                  <div class="pin-tag">
                                     <i class="ph-push-pin-fill"></i>
                                  </div>
                                  <div class="card-body d-flex flex-column justify-content-between" style="height: 100%;">
                                     <div>
                                        <div class="disematkan-header mb-1" style="text-align: left; margin-bottom: 6px !important;">
                                           <span class="doc-badge">Peraturan Badan Keamanan Laut</span>
                                        </div>
                                        <a href="https://jdih.bakamla.go.id/document/6a10cc42-1a29-46d3-a31f-e7b2ebfe7558/detail" class="judul-disematkan-modern" title="Regulation Of The Indonesia Coast Guard Number 28 Of 2021 On Electronic-Based Government System Within The Indonesia Coast Guard">
                                           Regulation Of The Indonesia Coast Guard Number 28 Of 2021 On Electronic-Based Government System Within The Indonesia Coast Guard
                                        </a>
                                     </div>
                                     
                                     <div class="disematkan-footer mt-auto">
                                        <div class="row align-items-center">
                                           <div class="col-7 text-start">
                                              <div class="stat-item d-flex align-items-center gap-2">
                                                 <i class="ph-calendar-blank text-info"></i>
                                                                                                  <span class="stat-text">09 Oct 2025</span>
                                                                                               </div>
                                           </div>
                                           <div class="col-5 d-flex justify-content-end gap-2">
                                              <div class="stat-item d-flex align-items-center gap-1" title="Diunduh" style="margin-right: 8px;">
                                                 <i class="ph-download-simple text-success"></i>
                                                 <span class="stat-text">8</span>
                                              </div>
                                              <div class="stat-item d-flex align-items-center gap-1" title="Dilihat">
                                                 <i class="ph-eye text-warning"></i>
                                                 <span class="stat-text">503</span>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                                                           <div class="card card-dokumen-disematkan-modern">
                                  <!-- Pinned Pin Tag on Top Right -->
                                  <div class="pin-tag">
                                     <i class="ph-push-pin-fill"></i>
                                  </div>
                                  <div class="card-body d-flex flex-column justify-content-between" style="height: 100%;">
                                     <div>
                                        <div class="disematkan-header mb-1" style="text-align: left; margin-bottom: 6px !important;">
                                           <span class="doc-badge">Peraturan Badan Keamanan Laut</span>
                                        </div>
                                        <a href="https://jdih.bakamla.go.id/document/ef54009b-b91a-4eae-a363-56cf1cbb0f7a/detail" class="judul-disematkan-modern" title="Regulation Of The Indonesia Coast Guard Number 27 Of 2021 On Legal Documentation And Information Network Of The Indonesia Coast Guard">
                                           Regulation Of The Indonesia Coast Guard Number 27 Of 2021 On Legal Documentation And Information Network Of The Indonesia Coast Guard
                                        </a>
                                     </div>
                                     
                                     <div class="disematkan-footer mt-auto">
                                        <div class="row align-items-center">
                                           <div class="col-7 text-start">
                                              <div class="stat-item d-flex align-items-center gap-2">
                                                 <i class="ph-calendar-blank text-info"></i>
                                                                                                  <span class="stat-text">09 Oct 2025</span>
                                                                                               </div>
                                           </div>
                                           <div class="col-5 d-flex justify-content-end gap-2">
                                              <div class="stat-item d-flex align-items-center gap-1" title="Diunduh" style="margin-right: 8px;">
                                                 <i class="ph-download-simple text-success"></i>
                                                 <span class="stat-text">10</span>
                                              </div>
                                              <div class="stat-item d-flex align-items-center gap-1" title="Dilihat">
                                                 <i class="ph-eye text-warning"></i>
                                                 <span class="stat-text">480</span>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                                                           <div class="card card-dokumen-disematkan-modern">
                                  <!-- Pinned Pin Tag on Top Right -->
                                  <div class="pin-tag">
                                     <i class="ph-push-pin-fill"></i>
                                  </div>
                                  <div class="card-body d-flex flex-column justify-content-between" style="height: 100%;">
                                     <div>
                                        <div class="disematkan-header mb-1" style="text-align: left; margin-bottom: 6px !important;">
                                           <span class="doc-badge">Peraturan Badan Keamanan Laut</span>
                                        </div>
                                        <a href="https://jdih.bakamla.go.id/document/eba508b3-f066-4835-998d-aef981c95748/detail" class="judul-disematkan-modern" title="Peraturan Badan Keamanan Laut Republik Indonesia Nomor 1 Tahun 2025 Tentang Pembentukan Peraturan Perundang-Undangan Di Lingkungan Badan Keamanan Laut Republik Indonesia">
                                           Peraturan Badan Keamanan Laut Republik Indonesia Nomor 1 Tahun 2025 Tentang Pembentukan Peraturan Perundang-Undangan Di Lingkungan Badan Keamanan Laut Republik Indonesia
                                        </a>
                                     </div>
                                     
                                     <div class="disematkan-footer mt-auto">
                                        <div class="row align-items-center">
                                           <div class="col-7 text-start">
                                              <div class="stat-item d-flex align-items-center gap-2">
                                                 <i class="ph-calendar-blank text-info"></i>
                                                                                                  <span class="stat-text">09 Oct 2025</span>
                                                                                               </div>
                                           </div>
                                           <div class="col-5 d-flex justify-content-end gap-2">
                                              <div class="stat-item d-flex align-items-center gap-1" title="Diunduh" style="margin-right: 8px;">
                                                 <i class="ph-download-simple text-success"></i>
                                                 <span class="stat-text">34</span>
                                              </div>
                                              <div class="stat-item d-flex align-items-center gap-1" title="Dilihat">
                                                 <i class="ph-eye text-warning"></i>
                                                 <span class="stat-text">1,258</span>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                                                           <div class="card card-dokumen-disematkan-modern">
                                  <!-- Pinned Pin Tag on Top Right -->
                                  <div class="pin-tag">
                                     <i class="ph-push-pin-fill"></i>
                                  </div>
                                  <div class="card-body d-flex flex-column justify-content-between" style="height: 100%;">
                                     <div>
                                        <div class="disematkan-header mb-1" style="text-align: left; margin-bottom: 6px !important;">
                                           <span class="doc-badge">Keputusan Kepala Badan Keamanan Laut</span>
                                        </div>
                                        <a href="https://jdih.bakamla.go.id/document/8b61a296-a7bf-4546-8f38-9cdb05ba3cea/detail" class="judul-disematkan-modern" title="Keputusan Kepala Badan Keamanan Laut Republik Indonesia Nomor 299 Tahun 2025 Tentang Tim Teknis Jaringan Dokumentasi dan Informasi Hukum Badan Keamanan Laut Republik Indonesia">
                                           Keputusan Kepala Badan Keamanan Laut Republik Indonesia Nomor 299 Tahun 2025 Tentang Tim Teknis Jaringan Dokumentasi dan Informasi Hukum Badan Keamanan Laut Republik Indonesia
                                        </a>
                                     </div>
                                     
                                     <div class="disematkan-footer mt-auto">
                                        <div class="row align-items-center">
                                           <div class="col-7 text-start">
                                              <div class="stat-item d-flex align-items-center gap-2">
                                                 <i class="ph-calendar-blank text-info"></i>
                                                                                                  <span class="stat-text">07 Oct 2025</span>
                                                                                               </div>
                                           </div>
                                           <div class="col-5 d-flex justify-content-end gap-2">
                                              <div class="stat-item d-flex align-items-center gap-1" title="Diunduh" style="margin-right: 8px;">
                                                 <i class="ph-download-simple text-success"></i>
                                                 <span class="stat-text">12</span>
                                              </div>
                                              <div class="stat-item d-flex align-items-center gap-1" title="Dilihat">
                                                 <i class="ph-eye text-warning"></i>
                                                 <span class="stat-text">530</span>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                                                           <div class="card card-dokumen-disematkan-modern">
                                  <!-- Pinned Pin Tag on Top Right -->
                                  <div class="pin-tag">
                                     <i class="ph-push-pin-fill"></i>
                                  </div>
                                  <div class="card-body d-flex flex-column justify-content-between" style="height: 100%;">
                                     <div>
                                        <div class="disematkan-header mb-1" style="text-align: left; margin-bottom: 6px !important;">
                                           <span class="doc-badge">Keputusan Kepala Badan Keamanan Laut</span>
                                        </div>
                                        <a href="https://jdih.bakamla.go.id/document/d509079e-fc4c-422f-9bcb-a08c6d69e992/detail" class="judul-disematkan-modern" title="Keputusan Kepala Badan Keamanan Laut Republik Indonesia Nomor 134 Tahun 2024 Tentang Standar Pelayanan Publik Di Lingkungan Kantor Pengelolaan Informasi Marabahaya Laut Badan Keamanan Laut Republik Indonesia">
                                           Keputusan Kepala Badan Keamanan Laut Republik Indonesia Nomor 134 Tahun 2024 Tentang Standar Pelayanan Publik Di Lingkungan Kantor Pengelolaan Informasi Marabahaya Laut Badan Keamanan Laut Republik Indonesia
                                        </a>
                                     </div>
                                     
                                     <div class="disematkan-footer mt-auto">
                                        <div class="row align-items-center">
                                           <div class="col-7 text-start">
                                              <div class="stat-item d-flex align-items-center gap-2">
                                                 <i class="ph-calendar-blank text-info"></i>
                                                                                                  <span class="stat-text">26 Sep 2025</span>
                                                                                               </div>
                                           </div>
                                           <div class="col-5 d-flex justify-content-end gap-2">
                                              <div class="stat-item d-flex align-items-center gap-1" title="Diunduh" style="margin-right: 8px;">
                                                 <i class="ph-download-simple text-success"></i>
                                                 <span class="stat-text">6</span>
                                              </div>
                                              <div class="stat-item d-flex align-items-center gap-1" title="Dilihat">
                                                 <i class="ph-eye text-warning"></i>
                                                 <span class="stat-text">438</span>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                                                           <div class="card card-dokumen-disematkan-modern">
                                  <!-- Pinned Pin Tag on Top Right -->
                                  <div class="pin-tag">
                                     <i class="ph-push-pin-fill"></i>
                                  </div>
                                  <div class="card-body d-flex flex-column justify-content-between" style="height: 100%;">
                                     <div>
                                        <div class="disematkan-header mb-1" style="text-align: left; margin-bottom: 6px !important;">
                                           <span class="doc-badge">Keputusan Kepala Badan Keamanan Laut</span>
                                        </div>
                                        <a href="https://jdih.bakamla.go.id/document/a64a8b15-967f-4c8c-b089-81e29d38ccef/detail" class="judul-disematkan-modern" title="Keputusan Kepala Badan Keamanan Laut Republik Indonesia Nomor 208 Tahun 2024 Tentang Standar Pelayanan Di Lingkungan Direktorat Operasi Laut Badan Keamanan Laut Republik Indonesia">
                                           Keputusan Kepala Badan Keamanan Laut Republik Indonesia Nomor 208 Tahun 2024 Tentang Standar Pelayanan Di Lingkungan Direktorat Operasi Laut Badan Keamanan Laut Republik Indonesia
                                        </a>
                                     </div>
                                     
                                     <div class="disematkan-footer mt-auto">
                                        <div class="row align-items-center">
                                           <div class="col-7 text-start">
                                              <div class="stat-item d-flex align-items-center gap-2">
                                                 <i class="ph-calendar-blank text-info"></i>
                                                                                                  <span class="stat-text">26 Sep 2025</span>
                                                                                               </div>
                                           </div>
                                           <div class="col-5 d-flex justify-content-end gap-2">
                                              <div class="stat-item d-flex align-items-center gap-1" title="Diunduh" style="margin-right: 8px;">
                                                 <i class="ph-download-simple text-success"></i>
                                                 <span class="stat-text">7</span>
                                              </div>
                                              <div class="stat-item d-flex align-items-center gap-1" title="Dilihat">
                                                 <i class="ph-eye text-warning"></i>
                                                 <span class="stat-text">378</span>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                                                     </div>
                      </div>
                                        </div>
               </div>
            </div>
         </div>
         <div class="shared-background">
            <div class="row1" id="stats">
               <div style="padding-top: 30px;width: 90%; margin: 0 auto;" class="max-auto">
                  <div class="row">
                     <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                           <a href="https://jdih.bakamla.go.id/document/peraturan" class="card-stat stat-peraturan">
                              <div class="stat-icon-box">
                                 <i class="ph-book"></i>
                              </div>
                              <div class="stat-content">
                                 <h3 class="stat-title">Peraturan</h3>
                                 <p class="stat-number">227</p>
                              </div>
                           </a>
                     </div>

                     <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                           <a href="https://jdih.bakamla.go.id/document/monografi" class="card-stat stat-monografi">
                              <div class="stat-icon-box">
                                 <i class="ph-books"></i>
                              </div>
                              <div class="stat-content">
                                 <h3 class="stat-title">Monografi</h3>
                                 <p class="stat-number">35</p>
                              </div>
                           </a>
                     </div>

                     <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                           <a href="https://jdih.bakamla.go.id/document/artikel" class="card-stat stat-artikel">
                              <div class="stat-icon-box">
                                 <i class="ph-newspaper"></i>
                              </div>
                              <div class="stat-content">
                                 <h3 class="stat-title">Artikel</h3>
                                 <p class="stat-number">12</p>
                              </div>
                           </a>
                     </div>

                     <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                           <a href="https://jdih.bakamla.go.id/document/putusan" class="card-stat stat-putusan">
                              <div class="stat-icon-box">
                                 <i class="ph-scales"></i>
                              </div>
                              <div class="stat-content">
                                 <h3 class="stat-title">Putusan</h3>
                                 <p class="stat-number">13</p>
                              </div>
                           </a>
                     </div>
                  </div>
               </div>
            </div>

            <div id="hightlighted-dokumen" class="mx-lg-5 mt-0 pt-4">
               <div class="mw-100">
                  <div class="row pt-3">
                     <h2 class="header-highlighted-dokumen">Sorotan Dokumen</h2>
                  </div>
                  <div class="row">
                     <div class="col-mb-8 col-sm-8">
                        <p class="desc-highlighted mb-4">
                           Temukan dokumen hukum terbaru yang relevan dengan hukum maritim, mulai dari peraturan baru
                           hingga putusan penting yang mempengaruhi kebijakan keamanan laut
                        </p>
                     </div>
                     <div class="col-mb-4 col-sm-4" style="text-align: right;">
                        <a href="https://jdih.bakamla.go.id/document" target="_blank"><span style="color: #E74C3C">Lihat
                        Semua</span></a>
                        <img src="https://jdih.bakamla.go.id/images/logo/arrow-right.png" style="width: 24px; height: 24px;" />
                     </div>
                  </div>
                  <div wire:snapshot="{&quot;data&quot;:{&quot;filter&quot;:&quot;dokumen_terbaru&quot;,&quot;documents&quot;:[null,{&quot;keys&quot;:[353,352,351,350,349],&quot;class&quot;:&quot;Illuminate\\Database\\Eloquent\\Collection&quot;,&quot;modelClass&quot;:&quot;App\\Models\\Document&quot;,&quot;s&quot;:&quot;elcln&quot;}]},&quot;memo&quot;:{&quot;id&quot;:&quot;GhMeqxu4FZK4QWhWDhvN&quot;,&quot;name&quot;:&quot;highlighted-dokumen&quot;,&quot;path&quot;:&quot;\/&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;scripts&quot;:[],&quot;assets&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;id&quot;},&quot;checksum&quot;:&quot;ca60e98510d27a35d728e0cedac1c93d24e5d1dece579da3e3559b393e243e73&quot;}" wire:effects="[]" wire:id="GhMeqxu4FZK4QWhWDhvN" id="wrapper-highlighted-dokumen">
<style>
    /* Main wrapper soft slate background */
    #wrapper-highlighted-dokumen {
        background-color: #c0dcef !important;
        padding: 24px !important;
        border-radius: 20px !important;
        box-shadow: inset 0 2px 8px rgba(15, 23, 42, 0.05) !important;
        border: 1px solid rgba(15, 23, 42, 0.05) !important;
        margin-bottom: 24px !important;
    }

    /* Premium Distinct Card Styles for Highlights */
    .list-highlighted-document .card {
        background: linear-gradient(135deg, #ffffff 0%, rgba(254, 242, 242, 0.3) 100%) !important;
        border: 1px solid rgba(255, 22, 41, 0.04) !important;
        border-left: 2px solid #FF1629 !important; /* Thinner Bakamla Red accent line */
        border-radius: 14px !important;
        box-shadow: 0 4px 16px rgba(15, 23, 42, 0.015) !important;
        margin-bottom: 12px !important;
        transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) !important;
        position: relative;
        overflow: hidden;
    }

    /* Hover effect: Glow and expand accent left border */
    .list-highlighted-document .card:hover {
        transform: translateY(-2px) scale(1.003) !important;
        border-color: rgba(255, 22, 41, 0.15) !important;
        border-left-width: 3.5px !important;
        background: linear-gradient(135deg, #ffffff 0%, rgba(254, 242, 242, 0.75) 100%) !important;
        box-shadow: 0 8px 24px -5px rgba(255, 22, 41, 0.08), 0 4px 12px -6px rgba(255, 22, 41, 0.04) !important;
    }

    .list-highlighted-document .card-body {
        padding: 10px 16px !important;
    }

    /* Cover Image Capsule Container */
    .cover-img-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(255, 22, 41, 0.03);
        border: 1px solid rgba(255, 22, 41, 0.06);
        border-radius: 10px;
        width: 46px;
        height: 46px;
        overflow: hidden;
        flex-shrink: 0;
        transition: all 0.3s ease;
    }

    .list-highlighted-document .card:hover .cover-img-wrapper {
        background: rgba(255, 22, 41, 0.06);
        border-color: rgba(255, 22, 41, 0.12);
        transform: scale(1.05);
    }

    .list-highlighted-document .cover-img-wrapper img {
        width: 100% !important;
        height: 100% !important;
        object-fit: cover;
    }

    /* Decorative Pinned Ribbon */
    .featured-ribbon {
        position: absolute;
        top: 10px;
        right: 12px;
        color: #FF1629;
        font-size: 13px;
        opacity: 0.35;
        transition: all 0.3s ease;
        pointer-events: none;
    }

    .list-highlighted-document .card:hover .featured-ribbon {
        opacity: 0.9;
        transform: rotate(15deg) scale(1.1);
    }

    /* Distinct Title Style */
    .judul-document {
        font-family: 'Inter', sans-serif !important;
        font-size: 14px !important;
        font-weight: 700 !important;
        color: #1e293b !important;
        text-decoration: none !important;
        line-height: 1.4 !important;
        display: block;
        margin-bottom: 4px !important;
        transition: color 0.2s ease !important;
        text-align: left;
        padding-right: 20px; /* Space for the featured ribbon */
    }

    .judul-document:hover {
        color: #FF1629 !important;
    }

    /* Modern Pill Badges for Meta Information */
    .badge-meta {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        padding: 4px 10px;
        border-radius: 30px;
        font-size: 11px;
        font-weight: 600;
        font-family: 'Inter', sans-serif;
        margin-right: 6px;
        margin-bottom: 0;
        transition: all 0.2s ease;
    }

    /* Date Pill - Light Red Accent */
    .badge-meta-date {
        background: rgba(255, 22, 41, 0.05) !important;
        color: #E74C3C !important;
        border: 1px solid rgba(255, 22, 41, 0.08) !important;
    }
    .list-highlighted-document .card:hover .badge-meta-date {
        background: rgba(255, 22, 41, 0.08) !important;
    }

    /* Download Pill - Light Green Accent */
    .badge-meta-download {
        background: rgba(16, 185, 129, 0.05) !important;
        color: #059669 !important;
        border: 1px solid rgba(16, 185, 129, 0.08) !important;
    }
    .list-highlighted-document .card:hover .badge-meta-download {
        background: rgba(16, 185, 129, 0.1) !important;
    }

    /* View Pill - Light Orange Accent */
    .badge-meta-view {
        background: rgba(245, 158, 11, 0.05) !important;
        color: #d97706 !important;
        border: 1px solid rgba(245, 158, 11, 0.08) !important;
    }
    .list-highlighted-document .card:hover .badge-meta-view {
        background: rgba(245, 158, 11, 0.1) !important;
    }

    .badge-meta i {
        font-size: 12px;
        vertical-align: middle;
    }

    /* Container for the segmented tab controller */
    .highlighted-tabs-container {
        width: 100%;
        margin-bottom: 20px;
        display: flex;
        justify-content: flex-start;
        position: relative;
    }

    /* Fading Edge Mask for Mobile Swipe Indication */
    .highlighted-tabs-container::after {
        content: '';
        position: absolute;
        right: 0;
        top: 0;
        bottom: 0;
        width: 40px;
        background: linear-gradient(to right, transparent, rgba(255, 255, 255, 0.95));
        pointer-events: none;
        z-index: 15;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    /* Flex wrapper for the pills with native swipe/scroll support on mobile */
    .highlighted-tabs-pills {
        display: flex;
        flex-wrap: nowrap;
        overflow-x: auto;
        gap: 4px;
        background: rgba(241, 245, 249, 0.85) !important;
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        padding: 5px !important;
        border-radius: 16px !important;
        width: fit-content;
        max-width: 100%;
        border: 1px solid rgba(255, 22, 41, 0.05) !important;
        box-shadow: 0 4px 20px -2px rgba(15, 23, 42, 0.02), inset 0 1px 2px rgba(255, 255, 255, 0.6) !important;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none; /* Hide scrollbar for Firefox */
        position: relative;
        z-index: 10;
    }

    .highlighted-tabs-pills::-webkit-scrollbar {
        display: none; /* Hide scrollbar for Chrome/Safari/Edge */
    }

    /* Individual tab button */
    .tab-pill {
        display: flex;
        align-items: center;
        gap: 8px;
        border: none !important;
        background: transparent !important;
        color: #475569 !important;
        font-family: 'Inter', sans-serif !important;
        font-size: 13.5px !important;
        font-weight: 600 !important;
        padding: 9px 18px !important;
        border-radius: 11px !important;
        white-space: nowrap !important;
        flex-shrink: 0 !important;
        cursor: pointer !important;
        transition: all 0.3s cubic-bezier(0.25, 1, 0.5, 1) !important;
        box-shadow: none !important;
        margin: 0 !important;
    }

    /* Active tab state: Premium Bakamla Red gradient with glowing shadow */
    .tab-pill.active {
        background: linear-gradient(135deg, #FF1629 0%, #E74C3C 100%) !important;
        color: #ffffff !important;
        box-shadow: 0 4px 14px -2px rgba(255, 22, 41, 0.3), 0 2px 6px -1px rgba(255, 22, 41, 0.2) !important;
    }

    /* Hover state for inactive tabs */
    .tab-pill:not(.active):hover {
        color: #FF1629 !important;
        background: rgba(255, 22, 41, 0.06) !important;
        transform: translateY(-1px);
    }

    /* Fix Layout Grid spacing */
    .col-image-holder {
        width: 58px;
        padding-right: 0;
        flex-shrink: 0;
    }

    .col-content-holder {
        flex: 1;
        min-width: 0;
        padding-left: 12px;
    }

    /* Adjustments for mobile view */
    @media screen and (max-width: 768px) {
        #wrapper-highlighted-dokumen {
            padding: 16px 12px !important;
            border-radius: 14px !important;
            margin-bottom: 16px !important;
        }
        .highlighted-tabs-container::after {
            opacity: 1; /* Only show on mobile where scrolling is expected */
        }
        .highlighted-tabs-container {
            width: 100%;
            overflow: hidden;
        }
        .highlighted-tabs-pills {
            width: 100%; /* Stretch full width to scroll on mobile */
            padding: 4px !important;
            border-radius: 12px !important;
        }
        .tab-pill {
            padding: 8px 14px !important;
            font-size: 13px !important;
            border-radius: 9px !important;
            gap: 6px;
        }
        .list-highlighted-document .card-body {
            padding: 8px 12px !important;
        }
        .col-image-holder {
            width: 50px;
        }
        .col-content-holder {
            padding-left: 10px;
        }
        .judul-document {
            font-size: 13px !important;
            margin-bottom: 12px !important;
        }
        .badge-meta {
            font-size: 10.5px;
            padding: 3px 8px;
            margin-right: 4px;
            margin-bottom: 4px;
        }
        .wrapper-statistik-dokumen {
            margin-top: 8px !important;
        }
        .featured-ribbon {
            top: 8px;
            right: 8px;
            font-size: 11px;
        }
    }
</style>

    <!-- Sleek Segmented Pill Tabs with Fading Edge Indicator -->
    <div class="highlighted-tabs-container">
        <div class="highlighted-tabs-pills">
            <button wire:click="setFilter('dokumen_terbaru')" class="tab-pill active">
                <i class="ph ph-clock-counter-clockwise"></i> Dokumen Terbaru
            </button>
            <button wire:click="setFilter('paling_banyak_dilihat')" class="tab-pill ">
                <i class="ph ph-eye"></i> Paling Banyak Dilihat
            </button>
            <button wire:click="setFilter('paling_banyak_diunduh')" class="tab-pill ">
                <i class="ph ph-download-simple"></i> Paling Banyak Diunduh
            </button>
        </div>
    </div>

    <!-- Pinned-Distinct Highlight Cards List -->
    <div class="row">
        <div class="col-12 list-highlighted-document">
            <!--[if BLOCK]><![endif]-->                <div class="row item-highlighted-document mx-0">
                    <div class="card w-100">
                        <!-- Decorative Ribbon -->
                        <div class="featured-ribbon">
                            <i class="ph-fill ph-push-pin"></i>
                        </div>
                        
                        <div class="card-body">
                            <div class="d-flex align-items-start">
                                
                                <div class="col-image-holder">
                                    <div class="cover-img-wrapper">
                                        <!--[if BLOCK]><![endif]-->                                            <img src="https://jdih.bakamla.go.id/storage/common/dokumen/222818.jpg"
                                                 alt="Cover"
                                                 onerror="this.onerror=null;this.src='https://jdih.bakamla.go.id/storage/common/dokumen/file-pdf.png';">
                                        <!--[if ENDBLOCK]><![endif]-->
                                    </div>
                                </div>

                                <div class="col-content-holder">
                                    <a href="https://jdih.bakamla.go.id/document/fa663108-f9f7-45ef-aeb2-f476208db5c0/detail" class="judul-document" title="Konsep Tata Kelola Keamanan Laut Dalam
Perspektif Prinsip Good Governance">
                                        Konsep Tata Kelola Keamanan Laut Dalam
Perspektif Prinsip Good Governance
                                    </a>
                                    
                                    <div class="d-flex flex-wrap align-items-center wrapper-statistik-dokumen">
                                        
                                        <div class="badge-meta badge-meta-date">
                                            <i class="ph ph-calendar-blank"></i>
                                            <span>
                                                
                                                <!--[if BLOCK]><![endif]-->                                                    5 Jun 2026
                                                <!--[if ENDBLOCK]><![endif]-->
                                            </span>
                                        </div>

                                        <div class="badge-meta badge-meta-download">
                                            <i class="ph ph-download-simple"></i>
                                            <span>22 Unduh</span>
                                        </div>

                                        <div class="badge-meta badge-meta-view">
                                            <i class="ph ph-eye"></i>
                                            <span>151 Lihat</span>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                            <div class="row item-highlighted-document mx-0">
                    <div class="card w-100">
                        <!-- Decorative Ribbon -->
                        <div class="featured-ribbon">
                            <i class="ph-fill ph-push-pin"></i>
                        </div>
                        
                        <div class="card-body">
                            <div class="d-flex align-items-start">
                                
                                <div class="col-image-holder">
                                    <div class="cover-img-wrapper">
                                        <!--[if BLOCK]><![endif]-->                                            <img src="https://jdih.bakamla.go.id/storage/common/dokumen/gambar_sampul_6a15616364665.png"
                                                 alt="Cover"
                                                 onerror="this.onerror=null;this.src='https://jdih.bakamla.go.id/storage/common/dokumen/file-pdf.png';">
                                        <!--[if ENDBLOCK]><![endif]-->
                                    </div>
                                </div>

                                <div class="col-content-holder">
                                    <a href="https://jdih.bakamla.go.id/document/5056d90d-36de-4576-92bf-28356f5b31a7/detail" class="judul-document" title="Surat Edaran Nomor 5 Tahun 2026 Tentang Mekanisme Verifikasi dan Validasi Serta Dokumen Permohonan Penerbitan, Pembaruan, Pencabutan, dan Perubahan Data Sertifikat Elektronik Pengguna Di Lingkungan Badan Keamanan Laut Republik Indonesia">
                                        Surat Edaran Nomor 5 Tahun 2026 Tentang Mekanisme Verifikasi dan Validasi Serta Dokumen Permohonan Penerbitan, Pembaruan, Pencabutan, dan Perubahan Data Sertifikat Elektronik Pengguna Di Lingkungan Badan Keamanan Laut Republik Indonesia
                                    </a>
                                    
                                    <div class="d-flex flex-wrap align-items-center wrapper-statistik-dokumen">
                                        
                                        <div class="badge-meta badge-meta-date">
                                            <i class="ph ph-calendar-blank"></i>
                                            <span>
                                                
                                                <!--[if BLOCK]><![endif]-->                                                    26 Mei 2026
                                                <!--[if ENDBLOCK]><![endif]-->
                                            </span>
                                        </div>

                                        <div class="badge-meta badge-meta-download">
                                            <i class="ph ph-download-simple"></i>
                                            <span>49 Unduh</span>
                                        </div>

                                        <div class="badge-meta badge-meta-view">
                                            <i class="ph ph-eye"></i>
                                            <span>267 Lihat</span>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                            <div class="row item-highlighted-document mx-0">
                    <div class="card w-100">
                        <!-- Decorative Ribbon -->
                        <div class="featured-ribbon">
                            <i class="ph-fill ph-push-pin"></i>
                        </div>
                        
                        <div class="card-body">
                            <div class="d-flex align-items-start">
                                
                                <div class="col-image-holder">
                                    <div class="cover-img-wrapper">
                                        <!--[if BLOCK]><![endif]-->                                            <img src="https://jdih.bakamla.go.id/storage/common/dokumen/gambar_sampul_6a15605c6fe3b.png"
                                                 alt="Cover"
                                                 onerror="this.onerror=null;this.src='https://jdih.bakamla.go.id/storage/common/dokumen/file-pdf.png';">
                                        <!--[if ENDBLOCK]><![endif]-->
                                    </div>
                                </div>

                                <div class="col-content-holder">
                                    <a href="https://jdih.bakamla.go.id/document/c09b2e98-283f-4582-b3ec-bad7349be87f/detail" class="judul-document" title="Surat Edaran Nomor 4 Tahun 2026 Tentang Layanan Pengaduan/Helpdesk Sertifikat Elektronik Dan Tanda Tangan Elektronik Pengguna Di Lingkungan Badan Keamanan Laut Republik Indonesia">
                                        Surat Edaran Nomor 4 Tahun 2026 Tentang Layanan Pengaduan/Helpdesk Sertifikat Elektronik Dan Tanda Tangan Elektronik Pengguna Di Lingkungan Badan Keamanan Laut Republik Indonesia
                                    </a>
                                    
                                    <div class="d-flex flex-wrap align-items-center wrapper-statistik-dokumen">
                                        
                                        <div class="badge-meta badge-meta-date">
                                            <i class="ph ph-calendar-blank"></i>
                                            <span>
                                                
                                                <!--[if BLOCK]><![endif]-->                                                    26 Mei 2026
                                                <!--[if ENDBLOCK]><![endif]-->
                                            </span>
                                        </div>

                                        <div class="badge-meta badge-meta-download">
                                            <i class="ph ph-download-simple"></i>
                                            <span>24 Unduh</span>
                                        </div>

                                        <div class="badge-meta badge-meta-view">
                                            <i class="ph ph-eye"></i>
                                            <span>209 Lihat</span>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                            <div class="row item-highlighted-document mx-0">
                    <div class="card w-100">
                        <!-- Decorative Ribbon -->
                        <div class="featured-ribbon">
                            <i class="ph-fill ph-push-pin"></i>
                        </div>
                        
                        <div class="card-body">
                            <div class="d-flex align-items-start">
                                
                                <div class="col-image-holder">
                                    <div class="cover-img-wrapper">
                                        <!--[if BLOCK]><![endif]-->                                            <img src="https://jdih.bakamla.go.id/storage/common/dokumen/gambar_sampul_6a143ecc40274.png"
                                                 alt="Cover"
                                                 onerror="this.onerror=null;this.src='https://jdih.bakamla.go.id/storage/common/dokumen/file-pdf.png';">
                                        <!--[if ENDBLOCK]><![endif]-->
                                    </div>
                                </div>

                                <div class="col-content-holder">
                                    <a href="https://jdih.bakamla.go.id/document/e23d03a7-51f4-4188-95b4-6790358c13b4/detail" class="judul-document" title="Keputusan Kepala Badan Keamanan Laut Republik Indonesia Nomor 138 Tahun 2026 Tentang Pengaturan Mekanisme Penerbitan, Pembaruan, Pencabutan Sertifikat Elektronik dan Tanda Tangan Elektronik Pengguna Di Lingkungan Badan Keamanan Laut Republik Indonesia ">
                                        Keputusan Kepala Badan Keamanan Laut Republik Indonesia Nomor 138 Tahun 2026 Tentang Pengaturan Mekanisme Penerbitan, Pembaruan, Pencabutan Sertifikat Elektronik dan Tanda Tangan Elektronik Pengguna Di Lingkungan Badan Keamanan Laut Republik Indonesia 
                                    </a>
                                    
                                    <div class="d-flex flex-wrap align-items-center wrapper-statistik-dokumen">
                                        
                                        <div class="badge-meta badge-meta-date">
                                            <i class="ph ph-calendar-blank"></i>
                                            <span>
                                                
                                                <!--[if BLOCK]><![endif]-->                                                    25 Mei 2026
                                                <!--[if ENDBLOCK]><![endif]-->
                                            </span>
                                        </div>

                                        <div class="badge-meta badge-meta-download">
                                            <i class="ph ph-download-simple"></i>
                                            <span>33 Unduh</span>
                                        </div>

                                        <div class="badge-meta badge-meta-view">
                                            <i class="ph ph-eye"></i>
                                            <span>268 Lihat</span>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                            <div class="row item-highlighted-document mx-0">
                    <div class="card w-100">
                        <!-- Decorative Ribbon -->
                        <div class="featured-ribbon">
                            <i class="ph-fill ph-push-pin"></i>
                        </div>
                        
                        <div class="card-body">
                            <div class="d-flex align-items-start">
                                
                                <div class="col-image-holder">
                                    <div class="cover-img-wrapper">
                                        <!--[if BLOCK]><![endif]-->                                            <img src="https://jdih.bakamla.go.id/storage/common/dokumen/184-pdtg2025-pn-btm.png"
                                                 alt="Cover"
                                                 onerror="this.onerror=null;this.src='https://jdih.bakamla.go.id/storage/common/dokumen/file-pdf.png';">
                                        <!--[if ENDBLOCK]><![endif]-->
                                    </div>
                                </div>

                                <div class="col-content-holder">
                                    <a href="https://jdih.bakamla.go.id/document/c09fc69b-3de3-4135-96c5-484ee013be4a/detail" class="judul-document" title="Putusan Perkara Perdata Penggugat CONCEPTO SCREEN S.A.L (OFF-SHORE) Nomor 184/Pdt.G/2025/PN Btm">
                                        Putusan Perkara Perdata Penggugat CONCEPTO SCREEN S.A.L (OFF-SHORE) Nomor 184/Pdt.G/2025/PN Btm
                                    </a>
                                    
                                    <div class="d-flex flex-wrap align-items-center wrapper-statistik-dokumen">
                                        
                                        <div class="badge-meta badge-meta-date">
                                            <i class="ph ph-calendar-blank"></i>
                                            <span>
                                                
                                                <!--[if BLOCK]><![endif]-->                                                    27 Apr 2026
                                                <!--[if ENDBLOCK]><![endif]-->
                                            </span>
                                        </div>

                                        <div class="badge-meta badge-meta-download">
                                            <i class="ph ph-download-simple"></i>
                                            <span>16 Unduh</span>
                                        </div>

                                        <div class="badge-meta badge-meta-view">
                                            <i class="ph ph-eye"></i>
                                            <span>332 Lihat</span>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            <!--[if ENDBLOCK]><![endif]-->
        </div>
    </div>
</div>
               </div>
            </div>


            <div class="row1" id="warta-berita">
               <div style="width: 90%; margin: 0 auto;" class="max-auto">
                  <div class="row">
                     <h2 class="header-warta-berita">Warta JDIH BAKAMLA RI Terkini</h2>
                  </div>
                  <div class="row">
                     <div class="col-mb-8 col-sm-8">
                        <p class="desc-warta-berita mb-lg-4">
                           Dapatkan berita terbaru tentang perkembangan hukum maritim, kebijakan keamanan laut, serta
                           artikel mendalam yang membahas isu-isu penting seputar JDIH BAKAMLA RI.
                        </p>
                     </div>
                     <div class="col-mb-4 col-sm-4" style="text-align: right;">
                        <a href="https://jdih.bakamla.go.id/berita" target="_blank"><span
                           style="color: var(--Danger, #E74C3C);">Lihat Semua</span></a>
                        <img src="https://jdih.bakamla.go.id/images/logo/arrow-right.png" style="width: 24px; height: 24px;" />
                     </div>
                  </div>
                  <div id="list-warta-berita">
                     <div class="row">
                        <div class="col-mb-12 col-sm-12 list-berita">
                           <div class="row">
                                                              <div class="col-mb-4 col-sm-4 item-berita">
                                  <div class="card">
                                     <div class="berita-thumb">
                                        <a href="https://jdih.bakamla.go.id/berita/99ac3b95-2b31-4149-ab6e-65ea82dd6c23">
                                           <img src="https://jdih.bakamla.go.id/storage/images/berita/artikel_69af7dbbabac5.jpeg"
                                                 alt="images/berita/artikel_69af7dbbabac5.jpeg"
                                                 class="image-berita"
                                                 onerror="this.onerror=null;this.src='https://jdih.bakamla.go.id/storage/images/berita/default-image.jpg';">
                                        </a>
                                     </div>
                                     <div class="card-body">
                                           <div class="d-flex justify-content-between align-items-center mt-0">
                                              <div class="d-flex align-items-center gap-1">
                                                 <div class="link-berita-media">
                                                    Berita Media
                                                 </div>
                                                 <div class="information-berita">
                                                    /
                                                 </div>
                                                 <div class="information-berita">
                                                    05 Januari 2026
                                                 </div>
                                              </div>
                                              <div class="d-flex align-items-center gap-2 text-muted" style="font-size: 11px;">
                                                 <span class="d-inline-flex align-items-center gap-1" title="Dilihat">
                                                    <i class="ph-eye" style="font-size: 13px; color: #94a3b8;"></i> 215
                                                 </span>
                                                 <span class="d-inline-flex align-items-center gap-1" title="Dibagikan">
                                                    <i class="ph-share-network" style="font-size: 13px; color: #94a3b8;"></i> 1
                                                 </span>
                                              </div>
                                           </div>
                                           <div class="row">
                                              <div class="col-mb-12 col-sm-12">
                                                 <h3 class="title-berita"><a href="https://jdih.bakamla.go.id/berita/99ac3b95-2b31-4149-ab6e-65ea82dd6c23">Bakamla RI Raih Penghargaan Indeks Reformasi Hukum Tahun 2025</a></h3>
                                              </div>
                                           </div>
                                           <div class="row">
                                              <div class="col-mb-12 col-sm-12" id="wrapper-isi-berita">
                                                 Jakarta, 18 Desember 2025 –-- Bakamla RI mendapat penghargaan Tiga terbaik dalam perolehan Indeks Reformasi Hukum Tahun 2025 Kategori Lembaga. Penghargaan tersebut diberikan langsung oleh Menteri Hukum Republik Indonesia Supratman Andi Agtas dalam acara Refleksi Akhir Tahun Kementerian Hukum Tahun 2025, di Kemayoran, Jakarta Pusat, Kamis (18/12/2025).Kegiatan diawali dengan laporan hasil pelaksanaan kegiatan oleh Sekretaris Jenderal Kementerian Hukum RI Nico Afinta, video refleksi akhir tahun, pemberian penghargaan, dan ditutup dengan arahan Menteri Hukum.Pada kesempatan itu, Bakamla RI mendapat pengahargaan peringkat tiga dalam perolehan Indeks Reformasi Hukum Tahun 2025 Kategori Lembaga. Terbaik pertama yakni, Badan Pembinaan Idiologi Pancasila (BPIP), diperingkat kedua yaitu Badan Pengawas Obat dan Makanan (BPOM), dan ketiga Bakamla RI.Pemberian penghargaan tersebut sebagai bentuk apresiasi atas kontribusi nyata, kerja keras, kolaborasi, dan komitmen dalam mendukung akses keadilan dan peningkatan kualitas layanan hukum kepada masyarakat.Selain pemberian penghargaan Indeks Reformasi Hukum, terdapat dua penghargaan lain meliputi apresiasi Kementerian/Lembaga/Daerah atas pelaksanaan tugas dan fungsi Kementerian Hukum, serta Capaian Kinerja Terbaik pada Kantor Wilayah. (Humas Bakamla RI)Autentifikasi: Pranata Humas Ahli Muda Mayor Bakamla Yuhanes Antara, S.PdFoto-foto: Humas Bakamla RI
                                              </div>
                                           </div>
                                     </div>
                                  </div>
                               </div>
                                                              <div class="col-mb-4 col-sm-4 item-berita">
                                  <div class="card">
                                     <div class="berita-thumb">
                                        <a href="https://jdih.bakamla.go.id/berita/c3687424-2116-4a65-90cb-dc5bdf9105f9">
                                           <img src="https://jdih.bakamla.go.id/storage/images/berita/artikel_69af7cc1aaaa3.jpeg"
                                                 alt="images/berita/artikel_69af7cc1aaaa3.jpeg"
                                                 class="image-berita"
                                                 onerror="this.onerror=null;this.src='https://jdih.bakamla.go.id/storage/images/berita/default-image.jpg';">
                                        </a>
                                     </div>
                                     <div class="card-body">
                                           <div class="d-flex justify-content-between align-items-center mt-0">
                                              <div class="d-flex align-items-center gap-1">
                                                 <div class="link-berita-media">
                                                    Berita Media
                                                 </div>
                                                 <div class="information-berita">
                                                    /
                                                 </div>
                                                 <div class="information-berita">
                                                    25 November 2025
                                                 </div>
                                              </div>
                                              <div class="d-flex align-items-center gap-2 text-muted" style="font-size: 11px;">
                                                 <span class="d-inline-flex align-items-center gap-1" title="Dilihat">
                                                    <i class="ph-eye" style="font-size: 13px; color: #94a3b8;"></i> 205
                                                 </span>
                                                 <span class="d-inline-flex align-items-center gap-1" title="Dibagikan">
                                                    <i class="ph-share-network" style="font-size: 13px; color: #94a3b8;"></i> 0
                                                 </span>
                                              </div>
                                           </div>
                                           <div class="row">
                                              <div class="col-mb-12 col-sm-12">
                                                 <h3 class="title-berita"><a href="https://jdih.bakamla.go.id/berita/c3687424-2116-4a65-90cb-dc5bdf9105f9">Bakamla RI Tingkatkan Literasi Hukum Mahasiswa</a></h3>
                                              </div>
                                           </div>
                                           <div class="row">
                                              <div class="col-mb-12 col-sm-12" id="wrapper-isi-berita">
                                                 Jakarta, 21 November 2025 (Bakamla RI/Indonesia Coast Guard) — Direktorat Hukum Bakamla RI kembali melaksanakan kegiatan Penyuluhan Hukum Keliling sebagai bagian dari upaya edukasi hukum kepada masyarakat, khususnya generasi muda. Kegiatan dilaksanakan di Sport Center Poltekkes Kemenkes Jakarta I, kemarin.Kegiatan penyuluhan hukum dipimpin oleh Mayor Bakamla Ferry Rindo Dolfa, S.H., M.H., diikuti oleh kurang lebih 90 mahasiswa tingkat II dan III Program D3 Keperawatan Poltekkes Kemenkes Jakarta I. Penyuluhan dibuka oleh Kapten Bakamla Nurmala dan Lettu Bakamla Satrio melalui pemaparan maksud dan tujuan kegiatan, yang kemudian dilanjutkan dengan pembagian leaflet edukasi hukum kepada seluruh peserta.Dalam sambutannya, Mayor Ferry Rindo Dolfa menegaskan pentingnya meningkatkan literasi hukum bagi mahasiswa sebagai calon tenaga kesehatan profesional.&nbsp; “Generasi muda harus dibekali pemahaman hukum yang benar, terutama terkait peluang kerja di luar negeri. Pengetahuan ini penting untuk menghindarkan mereka dari risiko penipuan, penyalahgunaan, dan berbagai bentuk pelanggaran yang kerap menimpa pekerja migran,” ujarnya.Setelah materi disampaikan, kegiatan berlanjut dengan sesi diskusi interaktif yang melibatkan kolaborasi antara JF Penyuluh Hukum BPHN Kemenkumham dan JF Penyuluh Hukum Bakamla RI, serta didukung oleh JF Analis Kebijakan, JF Penggerak Swadaya Masyarakat, JF Perancang Peraturan Perundang-undangan, dan JF Pranata Komputer Bakamla RI.Diskusi membahas berbagai isu aktual terkait perlindungan hukum bagi mahasiswa yang berminat bekerja di luar negeri, termasuk didalamnya sosialisasi portal resmi penempatan kerja luar negeri melalui situs KP2MI:&nbsp; siskop2mi.bp2mi.go.id. Pentingnya memeriksa kontrak kerja sebelum keberangkatan guna memastikan perlindungan hak-hak tenaga kerja.Dan imbauan untuk kembali ke Indonesia setelah masa kontrak berakhir, menghindari risiko kehilangan status kewarganegaraan atau menjadi pekerja ilegal.Mayor Ferry menambahkan,&nbsp; “Kami menemukan bahwa minat mahasiswa untuk bekerja di luar negeri sangat tinggi, khususnya ke Jepang dan Jerman. Karena itu, pengetahuan dasar tentang jalur resmi dan perlindungan hukumnya harus diberikan sejak dini.”Dari hasil diskusi, terungkap bahwa mayoritas mahasiswa memiliki ketertarikan kuat untuk bekerja di luar negeri, khususnya Jepang. Poltekkes Kemenkes Jakarta I juga tengah mengembangkan kerja sama penempatan tenaga kesehatan ke Jerman.Namun, tantangan terbesar yang mereka hadapi adalah kemampuan bahasa asing. Kondisi ini dikhawatirkan dapat membuka peluang terjadinya penipuan atau eksploitasi ketika berproses menuju pekerjaan di luar negeri.Penyuluhan berlangsung dengan tertib dan mendapat respons positif dari para peserta. Kegiatan ini tidak hanya memberikan pemahaman praktis terkait perlindungan hukum, tetapi juga mendorong mahasiswa untuk lebih berhati-hati dan cerdas dalam mengambil peluang kerja internasional. (Humas Bakamla RI)Autentifikasi: Pranata Humas Ahli Muda Mayor Bakamla Yuhanes Antara, S.Pd &nbsp;Foto-foto: Humas Bakamla RI
                                              </div>
                                           </div>
                                     </div>
                                  </div>
                               </div>
                                                              <div class="col-mb-4 col-sm-4 item-berita">
                                  <div class="card">
                                     <div class="berita-thumb">
                                        <a href="https://jdih.bakamla.go.id/berita/ee7e710c-abb7-476d-bb83-e98620ad179d">
                                           <img src="https://jdih.bakamla.go.id/storage/images/berita/artikel_69af7c743c330.jpeg"
                                                 alt="images/berita/artikel_69af7c743c330.jpeg"
                                                 class="image-berita"
                                                 onerror="this.onerror=null;this.src='https://jdih.bakamla.go.id/storage/images/berita/default-image.jpg';">
                                        </a>
                                     </div>
                                     <div class="card-body">
                                           <div class="d-flex justify-content-between align-items-center mt-0">
                                              <div class="d-flex align-items-center gap-1">
                                                 <div class="link-berita-media">
                                                    Berita Media
                                                 </div>
                                                 <div class="information-berita">
                                                    /
                                                 </div>
                                                 <div class="information-berita">
                                                    25 November 2025
                                                 </div>
                                              </div>
                                              <div class="d-flex align-items-center gap-2 text-muted" style="font-size: 11px;">
                                                 <span class="d-inline-flex align-items-center gap-1" title="Dilihat">
                                                    <i class="ph-eye" style="font-size: 13px; color: #94a3b8;"></i> 196
                                                 </span>
                                                 <span class="d-inline-flex align-items-center gap-1" title="Dibagikan">
                                                    <i class="ph-share-network" style="font-size: 13px; color: #94a3b8;"></i> 0
                                                 </span>
                                              </div>
                                           </div>
                                           <div class="row">
                                              <div class="col-mb-12 col-sm-12">
                                                 <h3 class="title-berita"><a href="https://jdih.bakamla.go.id/berita/ee7e710c-abb7-476d-bb83-e98620ad179d">Bimtek Penegakan Hukum Bagi Awak Kapal Resmi Ditutup</a></h3>
                                              </div>
                                           </div>
                                           <div class="row">
                                              <div class="col-mb-12 col-sm-12" id="wrapper-isi-berita">
                                                 Jakarta, 19 November 2025 --–&nbsp; Bimbingan Teknis (Bimtek) Penegakan Hukum Peningkatan Kompetensi Awak Kapal Negara (KN) yang diadakan oleh Bakamla RI pada dua hari lalu (17/11), secara resmi ditutup oleh Direktur Hukum Bakamla RI Laksma Bakamla Fenny Akwan, S.H., M.H., yang diwakili oleh Analis Hukum Ahli Madya Bakamla RI Kolonel Bakamla Abriadi, S.H., M.M., di Mabes Bakamla RI, Jakarta Pusat, Rabu (19/11/2025).Pada hari terakhir bimtek tersebut, peserta mendapat materi Prosedur Penangangan Tindak Pidana Tertentu di Laut yang disampaikan oleh Kepala Dinas Hukum TNI Angkatan Laut (Diskumal) Laksma TNI Dr. Ali Ridlo, S.H., M.M., M.Tr.Opsla., M.H., kemudian dilanjutkan dengan pemberian studi kasus oleh Kolonel Bakamla Abriadi sebagai fasilitator.Sebelum Bimtek ditutup, para peserta daring dan luring membut kelompok yang akan memaparkan hasil diskusi dari studi kasus perihal penangkapan kapal yang melakukan penangkapan ikan ilegal dan kapal asing yang melintas di perairan Indonesia.Acara diakhiri dengan pembacaan sambutan penutup oleh Analis Hukum Ahli Madya, "Dengan pemahaman serta penerapan pedoman atau saran hukum yang tepat, diharapkan mampu meningkatkan profesionalisme, integritas, dan akuntabilitas personel dalam mendukung pelaksanaan tugas ponok dan fungsi Bakamla RI serta memperluas wawasan di bidang hukum nasional dan internasional di laut". (Humas Bakamla RI)Autentifikasi: Pranata Humas Ahli Muda Mayor Bakamla Yuhanes Antara, S.PdFoto-foto: Humas Bakamla RI
                                              </div>
                                           </div>
                                     </div>
                                  </div>
                               </div>
                                                              <div class="col-mb-4 col-sm-4 item-berita">
                                  <div class="card">
                                     <div class="berita-thumb">
                                        <a href="https://jdih.bakamla.go.id/berita/1133c36c-3da4-4fca-b862-b4e12770e0d5">
                                           <img src="https://jdih.bakamla.go.id/storage/images/berita/artikel_69af7c24ce9ed.jpeg"
                                                 alt="images/berita/artikel_69af7c24ce9ed.jpeg"
                                                 class="image-berita"
                                                 onerror="this.onerror=null;this.src='https://jdih.bakamla.go.id/storage/images/berita/default-image.jpg';">
                                        </a>
                                     </div>
                                     <div class="card-body">
                                           <div class="d-flex justify-content-between align-items-center mt-0">
                                              <div class="d-flex align-items-center gap-1">
                                                 <div class="link-berita-media">
                                                    Berita Media
                                                 </div>
                                                 <div class="information-berita">
                                                    /
                                                 </div>
                                                 <div class="information-berita">
                                                    20 November 2025
                                                 </div>
                                              </div>
                                              <div class="d-flex align-items-center gap-2 text-muted" style="font-size: 11px;">
                                                 <span class="d-inline-flex align-items-center gap-1" title="Dilihat">
                                                    <i class="ph-eye" style="font-size: 13px; color: #94a3b8;"></i> 199
                                                 </span>
                                                 <span class="d-inline-flex align-items-center gap-1" title="Dibagikan">
                                                    <i class="ph-share-network" style="font-size: 13px; color: #94a3b8;"></i> 1
                                                 </span>
                                              </div>
                                           </div>
                                           <div class="row">
                                              <div class="col-mb-12 col-sm-12">
                                                 <h3 class="title-berita"><a href="https://jdih.bakamla.go.id/berita/1133c36c-3da4-4fca-b862-b4e12770e0d5">Bakamla RI Gelar Bimtek Pengekan Hukum Lanjutan Bagi Awak Kapal</a></h3>
                                              </div>
                                           </div>
                                           <div class="row">
                                              <div class="col-mb-12 col-sm-12" id="wrapper-isi-berita">
                                                 Jakarta, 17 November 2025 (Bakamla RI/Indonesia Coast Guard) — Bakamla RI mengadakan Bimbingan Teknis (Bimtek) Penegakan Hukum Peningkatan Kompetensi Awak Kapal Negara (KN) yang resmi dibuka oleh Direktur Hukum Bakamla RI Laksma Bakamla Fenny Akwan, S.H., M.H.,, di Mabes Bakamla RI, Jakarta Pusat, Senin (17/11/2025).Kegaiatan yang berlangsung selama tiga hari ini diharapkan dapat mewujudkan Awak Kapal Bakamla RI yang memiliki kompetensi hukum, teknis, dan etika dalam melaksanakan penegakan hukum di laut baik setingkat nasional maupun Internasional.“Dengan adanya Bimtek ini, saya harap dapat meningkatan profesionalisme, integritas, dan akuntabilitas awak kapal sehingga terlaksananya tugas sesuai Standar Operasional Prosedur (SOP) dalam mendukung tugas pokok dan fungsi Bakamla RI”, ujar Direktur Hukum Bakamla RI dalam sambutannya.Untuk diketahui, Bimtek ini merupakan lanjutan yang telah dilaksanakan pada tanggal 27-29 Oktober lalu. Sebanyak enam materi akan diberikan kepada peserta pada kesempatan ini.Materi yang disampaikan pada hari pertama yakni Penegakan Hukum Laut Internasional dan Pemberlakuannya dalam Hukum Nasional yang disampaikan oleh Praktisi Hukum Laut Kolonel Laut (Purn) W. Kapo, S.H., serta Tindak Pidana dan Adminstratif dibidang Karantina, modus operasi, dan mekanisme penyerahan perkara hasil penindakan oleh Badan Karantina Indonesia. (Humas Bakamla RI)Autentikasi: Pranata Humas Ahli Muda Mayor Bakamla Yuhanes Antara, S.Pd.Foto-foto: Humas Bakamla RI
                                              </div>
                                           </div>
                                     </div>
                                  </div>
                               </div>
                                                              <div class="col-mb-4 col-sm-4 item-berita">
                                  <div class="card">
                                     <div class="berita-thumb">
                                        <a href="https://jdih.bakamla.go.id/berita/659720a2-a66a-4f2a-9a7b-d3dfd0d8d216">
                                           <img src="https://jdih.bakamla.go.id/storage/images/berita/artikel_69af7bc33e004.jpeg"
                                                 alt="images/berita/artikel_69af7bc33e004.jpeg"
                                                 class="image-berita"
                                                 onerror="this.onerror=null;this.src='https://jdih.bakamla.go.id/storage/images/berita/default-image.jpg';">
                                        </a>
                                     </div>
                                     <div class="card-body">
                                           <div class="d-flex justify-content-between align-items-center mt-0">
                                              <div class="d-flex align-items-center gap-1">
                                                 <div class="link-berita-media">
                                                    Berita Media
                                                 </div>
                                                 <div class="information-berita">
                                                    /
                                                 </div>
                                                 <div class="information-berita">
                                                    13 November 2025
                                                 </div>
                                              </div>
                                              <div class="d-flex align-items-center gap-2 text-muted" style="font-size: 11px;">
                                                 <span class="d-inline-flex align-items-center gap-1" title="Dilihat">
                                                    <i class="ph-eye" style="font-size: 13px; color: #94a3b8;"></i> 195
                                                 </span>
                                                 <span class="d-inline-flex align-items-center gap-1" title="Dibagikan">
                                                    <i class="ph-share-network" style="font-size: 13px; color: #94a3b8;"></i> 0
                                                 </span>
                                              </div>
                                           </div>
                                           <div class="row">
                                              <div class="col-mb-12 col-sm-12">
                                                 <h3 class="title-berita"><a href="https://jdih.bakamla.go.id/berita/659720a2-a66a-4f2a-9a7b-d3dfd0d8d216">Bakamla RI Resmi Tutup Diskusi Kelembagaan Keamanan Laut Ke-3</a></h3>
                                              </div>
                                           </div>
                                           <div class="row">
                                              <div class="col-mb-12 col-sm-12" id="wrapper-isi-berita">
                                                 Jakarta, 6 November 2025 (Bakamla RI/Indonesia Coast Guard) —&nbsp; Diskusi Kelembagaan Keamanan Laut secara resmi di tutup oleh Direktur Hukum Bakamla RI Laksma Bakamla Fenny Akwan, S.H., M.H., di Jakarta Pusat, Kamis (6/11/2025).Pada hari ke-2, Wakil Kepala Bidang Program Sosial, Ekonomi dan Kelembagaan Pusat Kajian Sumber Daya Pesisir dan Lautan (PKSPL) IPB Dr. Akhmad Solihin, S.PI., M.H., selaku Narasumber menyampaikan tentang pengukuran bebantugas dan fungsi Organisasi Bakamla RI saat ini setelah adanya tambahan mandat-mandat dari peraturan perundang-undangan dan kebijakan pemerintah saat ini.Narasumber selanjutnya yakni, Direktur Harmonisasi Peraturan Perundang-Undangan I Kementerian Hukum Hernadi, S.H., M.H., dan Perancang Peraturan Perundang-Undangan Ahli Muda Kementerian Hukum Ahmad Haris Junaidi, menyampaikan saran dan masukan terhadap draf Naskah Urgensi yang telah disusun berdasarkan hasil Diskusi Kelembagaan yang telah dilaksanakan pada tanggal bulan September dan Oktober lalu.Setelah melalui keseluruhan sesi diskusi, dilanjutkan dengan penyesuaian Naskah Urgensi dengan hasil pembahasan terbaru, dan sambutan penutup oleh Direktur Hukum Bakamla RI."Selama dua hari ini, kita telah mendiskusikan berbagai substansi penting yang berkaitan dengan transformasi kelembagaan Bakamla RI dan dapat menyelesaikan diskusi yang ketiga ini dengan lancar. Transformasi kelembagaan bukan sekedar penyusunan ulang struktur, melainkan penegasan kembali peran Bakamla RI sebagai koordinator penyelenggara Keamanan, Keselamatan, dan Penegakan Hukum (KKPH) di laut. Semoga upaya yang telah dilakukan dapat menjadikan Bakamla RI yang adaptif dan berdaya guna dengan mengedepankan prinsip efeksifitas dsn efisien dalam melaksanakan tugas yang diemban.", ujar Laksma Bakamla Fenny Akwan. (Humas Bakamla RI)Autentifikasi: Pranata Humas Ahli Muda Mayor Bakamla Yuhanes Antara, S.PdFoto-foto: Humas Bakamla RI
                                              </div>
                                           </div>
                                     </div>
                                  </div>
                               </div>
                                                              <div class="col-mb-4 col-sm-4 item-berita">
                                  <div class="card">
                                     <div class="berita-thumb">
                                        <a href="https://jdih.bakamla.go.id/berita/0f7312f9-80eb-4bcd-a054-2576b37f36fe">
                                           <img src="https://jdih.bakamla.go.id/storage/images/berita/artikel_69af7b208c48e.jpeg"
                                                 alt="images/berita/artikel_69af7b208c48e.jpeg"
                                                 class="image-berita"
                                                 onerror="this.onerror=null;this.src='https://jdih.bakamla.go.id/storage/images/berita/default-image.jpg';">
                                        </a>
                                     </div>
                                     <div class="card-body">
                                           <div class="d-flex justify-content-between align-items-center mt-0">
                                              <div class="d-flex align-items-center gap-1">
                                                 <div class="link-berita-media">
                                                    Berita Media
                                                 </div>
                                                 <div class="information-berita">
                                                    /
                                                 </div>
                                                 <div class="information-berita">
                                                    13 November 2025
                                                 </div>
                                              </div>
                                              <div class="d-flex align-items-center gap-2 text-muted" style="font-size: 11px;">
                                                 <span class="d-inline-flex align-items-center gap-1" title="Dilihat">
                                                    <i class="ph-eye" style="font-size: 13px; color: #94a3b8;"></i> 194
                                                 </span>
                                                 <span class="d-inline-flex align-items-center gap-1" title="Dibagikan">
                                                    <i class="ph-share-network" style="font-size: 13px; color: #94a3b8;"></i> 0
                                                 </span>
                                              </div>
                                           </div>
                                           <div class="row">
                                              <div class="col-mb-12 col-sm-12">
                                                 <h3 class="title-berita"><a href="https://jdih.bakamla.go.id/berita/0f7312f9-80eb-4bcd-a054-2576b37f36fe">Bakamla RI Gelar Diskusi Kelembagaan Keamanan Laut</a></h3>
                                              </div>
                                           </div>
                                           <div class="row">
                                              <div class="col-mb-12 col-sm-12" id="wrapper-isi-berita">
                                                 Jakarta, 5 November 2025 (Bakamla RI/Indonesia Coast Guard) —&nbsp; Direktorat Hukum Bakamla RI menggelar diskusi Kelembagaan Keamanan Laut yang secara resmi dibuka oleh Sestama Bakamla RI Laksda TNI Dr. Samuel H.H. Kowaas, M.Sc., CSBA., di Jakarta Pusat, Rabu (5/11/2025).Diskusi yang dipimpin oleh Direktur Hukum Bakamla RI Laksma Bakamla Fenny Akwan, S.H., M.H., ini bertujuan menyelaraskan mandat Perpres No. 59 Tahun 2023 yang berisikan peran Bakamla RI sebagai koordinator kegiatan keamanan, keselamatan, dan penegakan hukum (KKPH) di laut dengan Rencana Pembangunan Jangka Panjang Nasional (RPJPN) 2025–2045 dan Rencana Pembangunan Jangka Menengah Nasional (RPJMN) 2025–2029 agar kelembagaan Bakamla RI semakin adaptif dan mampu menjawab tantangan keamanan maritim di era modern.Untuk diketahui, diskusi ini merupakan lanjutan yang sebelumnya telah menghimpun berbagai pandangan strategis dari kementerian, lembaga, dan akademisi. Pada kesempatan ini terdapat dua aspek utama yang menjadi pemabahasan yaitu, analisis beban tugas dan fungsi kelembagaan Bakamla RI dalam rangka transformasi organisasi dan tata kerja, kemudian metode serta teknik legal drafting untuk penyusunan naskah urgensi dan rancangan perubahan Perpres Nomor 178 Tahun 2014 tentang Bakamla RI.Diskusi ini berjalan selama tiga hari mulai tanggal 5-7 November 2025, dengan menghadirkan Narasumber yakni, Direktur Harmonisasi Peraturan Perundang-Undangan I Kementerian Hukum Hernadi, S.H., M.H., Wakil Kepala Bidang Program SosiaL, Ekonomi dan Kelembagaan Pusat Kajian Sumber Daya Pesisir dan Lautan (PKSPL) IPB Dr. Akhmad Solihin, S.PI., M.H., Perancang Peraturan Perundang-Undangan Ahli Muda Kementerian Hukum Ahmad Haris Junaidi. (Humas Bakamla RI)Autentifikasi: Pranata Humas Ahli Muda Mayor Bakamla Yuhanes Antara, S.PdFoto-foto: Humas Bakamla RI
                                              </div>
                                           </div>
                                     </div>
                                  </div>
                               </div>
                                                          </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row" id="liputan-jdih">
            <div style="width: 90%; margin: 0 auto;" class="max-auto">
               <div class="row">
                  <h2 class="header-liputan">Liputan JDIH BAKAMLA RI</h2>
               </div>
               <div class="row">
                  <div class="col-mb-8 col-sm-8">
                     <p class="desc-warta-berita">
                        Tonton video liputan eksklusif dari kegiatan JDIH BAKAMLA RI yang diunggah melalui saluran
                        YouTube resmi untuk mengikuti perkembangan terbaru.
                     </p>
                  </div>
                  <div class="col-mb-4 col-sm-4" style="text-align: right;">
                     <a href="https://jdih.bakamla.go.id/liputan"><span style="color: var(--Danger, #E74C3C);">Lihat
                     Semua</span></a>
                     <img src="https://jdih.bakamla.go.id/images/logo/arrow-right.png" style="width: 24px; height: 24px;" />
                  </div>
               </div>
                              <div id="list-liputan-jdih" class="mt-4">
                  <div class="row">
                                          <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card-media-premium">
                           <div class="ratio ratio-16x9">
                              <iframe width="914" height="514" src="https://www.youtube.com/embed/YdV5U4u8Woc" title="Pembekalan Hukum &quot;Proses Penegakakan Hukum di Laut&quot; Badan Keamanan Laut Republik Indonesia" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                           </div>
                           <div class="media-meta-premium">
                               <i class="ph ph-youtube-logo"></i>
                               <span>Liputan Media • 31 Juli 2025</span>
                           </div>
                        </div>
                     </div>
                                          <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card-media-premium">
                           <div class="ratio ratio-16x9">
                              <iframe width="560" height="315" src="https://www.youtube.com/embed/2QYyBApGxjo?si=yVXNf-fJaFWST9kw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                           </div>
                           <div class="media-meta-premium">
                               <i class="ph ph-youtube-logo"></i>
                               <span>Liputan Media • 30 Juli 2025</span>
                           </div>
                        </div>
                     </div>
                                          <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card-media-premium">
                           <div class="ratio ratio-16x9">
                              <iframe width="914" height="514" src="https://www.youtube.com/embed/qtH8Aip9f4s" title="Temu Sadar Hukum dengan Tema “Penguatan Kapasitas Relawan Penjaga Laut Bakamla RI&quot;" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                           </div>
                           <div class="media-meta-premium">
                               <i class="ph ph-youtube-logo"></i>
                               <span>Liputan Media • 24 Juli 2025</span>
                           </div>
                        </div>
                     </div>
                                       </div>
               </div>
                           </div>
         </div>
         <div class="row" id="sosial-media">
            <div style="width: 90%; margin: 0 auto;" class="max-auto">
               <div class="row">
                  <h2 class="header-media-sosial">Sosial Media Terbaru</h2>
               </div>
               <div class="row">
                  <div class="col-mb-8 col-sm-8">
                     <p class="desc-warta-berita mb-lg-4">
                        Ikuti kabar terbaru dari akun Instagram resmi JDIH BAKAMLA RI dan dapatkan informasi penting
                        serta aktivitas menarik secara langsung.
                     </p>
                  </div>
                  <div class="col-mb-4 col-sm-4" style="text-align: right;">
                     <a href="https://jdih.bakamla.go.id/sosial-media"><span
                        style="color: var(--Danger, #E74C3C);">Lihat Semua</span></a>
                     <img src="https://jdih.bakamla.go.id/images/logo/arrow-right.png" style="width: 24px; height: 24px;" />
                  </div>
               </div>
                              <div id="list-sosial-media">
                  <div class="row">
                     <div class="col-mb-12 col-sm-12">
                        <div class="row">
                                                      <div class="col-lg-4 col-md-6 mb-4">
                              <div class="card-media-premium">
                                 <div class="card-body p-0">
                                    <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/DV0Q-HQEWxR/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/DV0Q-HQEWxR/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">Lihat postingan ini di Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/DV0Q-HQEWxR/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Sebuah kiriman dibagikan oleh JDIH Badan Keamanan Laut RI (@jdihbakamla.ri)</a></p></div></blockquote>
<script async src="//www.instagram.com/embed.js"></script>
                                 </div>
                                 <div class="media-meta-premium" style="margin-top: auto;">
                                     <i class="ph ph-instagram-logo"></i>
                                     <span>Sosial Media • 16 Maret 2026</span>
                                 </div>
                              </div>
                           </div>
                                                      <div class="col-lg-4 col-md-6 mb-4">
                              <div class="card-media-premium">
                                 <div class="card-body p-0">
                                    <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/DVfrZmNkdCw/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/DVfrZmNkdCw/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">Lihat postingan ini di Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/DVfrZmNkdCw/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Sebuah kiriman dibagikan oleh JDIH Badan Keamanan Laut RI (@jdihbakamla.ri)</a></p></div></blockquote>
<script async src="//www.instagram.com/embed.js"></script>
                                 </div>
                                 <div class="media-meta-premium" style="margin-top: auto;">
                                     <i class="ph ph-instagram-logo"></i>
                                     <span>Sosial Media • 10 Maret 2026</span>
                                 </div>
                              </div>
                           </div>
                                                      <div class="col-lg-4 col-md-6 mb-4">
                              <div class="card-media-premium">
                                 <div class="card-body p-0">
                                    <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/DVQ4d0HEQbu/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/DVQ4d0HEQbu/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">Lihat postingan ini di Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/DVQ4d0HEQbu/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Sebuah kiriman dibagikan oleh JDIH Badan Keamanan Laut RI (@jdihbakamla.ri)</a></p></div></blockquote>
<script async src="//www.instagram.com/embed.js"></script>
                                 </div>
                                 <div class="media-meta-premium" style="margin-top: auto;">
                                     <i class="ph ph-instagram-logo"></i>
                                     <span>Sosial Media • 10 Maret 2026</span>
                                 </div>
                              </div>
                           </div>
                                                      <div class="col-lg-4 col-md-6 mb-4">
                              <div class="card-media-premium">
                                 <div class="card-body p-0">
                                    <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/reel/DVP1kfaEU2R/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/reel/DVP1kfaEU2R/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">Lihat postingan ini di Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/reel/DVP1kfaEU2R/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Sebuah kiriman dibagikan oleh JDIH Badan Keamanan Laut RI (@jdihbakamla.ri)</a></p></div></blockquote>
<script async src="//www.instagram.com/embed.js"></script>
                                 </div>
                                 <div class="media-meta-premium" style="margin-top: auto;">
                                     <i class="ph ph-instagram-logo"></i>
                                     <span>Sosial Media • 10 Maret 2026</span>
                                 </div>
                              </div>
                           </div>
                                                      <div class="col-lg-4 col-md-6 mb-4">
                              <div class="card-media-premium">
                                 <div class="card-body p-0">
                                    <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/reel/DVIIQCUkSKc/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/reel/DVIIQCUkSKc/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">Lihat postingan ini di Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/reel/DVIIQCUkSKc/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Sebuah kiriman dibagikan oleh JDIH Badan Keamanan Laut RI (@jdihbakamla.ri)</a></p></div></blockquote>
<script async src="//www.instagram.com/embed.js"></script>
                                 </div>
                                 <div class="media-meta-premium" style="margin-top: auto;">
                                     <i class="ph ph-instagram-logo"></i>
                                     <span>Sosial Media • 10 Maret 2026</span>
                                 </div>
                              </div>
                           </div>
                                                      <div class="col-lg-4 col-md-6 mb-4">
                              <div class="card-media-premium">
                                 <div class="card-body p-0">
                                    <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/DSlMwBMkxm5/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/DSlMwBMkxm5/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">Lihat postingan ini di Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/DSlMwBMkxm5/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Sebuah kiriman dibagikan oleh JDIH Badan Keamanan Laut RI (@jdihbakamla.ri)</a></p></div></blockquote>
<script async src="//www.instagram.com/embed.js"></script>
                                 </div>
                                 <div class="media-meta-premium" style="margin-top: auto;">
                                     <i class="ph ph-instagram-logo"></i>
                                     <span>Sosial Media • 10 Maret 2026</span>
                                 </div>
                              </div>
                           </div>
                                                   </div>
                     </div>
                  </div>
               </div>
                           </div>
         </div>
         <div class="background-statistik">
            <div class="row" id="statistik">
               <div style="width: 90%; margin: 0 auto;" class="max-auto">
                  
                  <div class="row">
                     <h2 class="header-statistik">Statistik JDIH BAKAMLA RI</h2>
                  </div>
                  <div class="row">
                     <div class="col-mb-8 col-sm-8">
                        <p class="desc-warta-berita mb-lg-4">
                           Lihat statistik terkini mengenai jumlah pengunjung, jumlah dokumen yang diakses dan diunduh,
                           serta berbagai data aktivitas pengguna lainnya.
                        </p>
                     </div>
                  </div>

                  
                  <div class="d-flex justify-content-end gap-2 align-items-center mb-4">
                     <div>
                        Tampilkan data
                     </div>
                     
                     
                     <div>
                        <select name="select-period" id="select-period" class="form-control">
                           <option value="all">Semua Tanggal</option>
                           <option value="today">Hari Ini</option>
                           <option value="30">30 Hari Terakhir</option>
                           <option value="90">90 Minggu Terakhir</option>
                        </select>
                     </div>

                     
                     <div style="margin-left: 10px;">
                        <select name="select-year-visitor" id="select-year-visitor" class="form-control">
                           
                        </select>
                     </div>
                  </div>

                  
                  <div class="row g-4" id="list-statistik">
                     <div class="col-12 mb-4">
                        <div class="card card-statistik-modern">
                           <div class="card-body stat-card-body">
                              <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3 mb-4 border-bottom pb-3">
                                 <div class="stat-header">
                                    <div class="stat-icon-badge badge-blue">
                                       <i class="ph-users-three"></i>
                                    </div>
                                    <div class="stat-header-info">
                                       <span class="stat-meta-label">Aktivitas JDIH</span>
                                       <h3 class="stat-title-modern">Statistik Jumlah Pengunjung</h3>
                                    </div>
                                 </div>
                                 <div class="d-flex align-items-center">
                                    <h4 id="total-pengunjung" class="stat-number-modern text-primary m-0">Memuat data...</h4>
                                 </div>
                              </div>
                              <div class="stat-chart-container">
                                 <div id="main-chart"></div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="col-lg-6 col-md-12 mb-4">
                        <div class="card card-statistik-modern">
                           <div class="card-body stat-card-body">
                              <div class="stat-header border-bottom pb-3">
                                 <div class="stat-icon-badge badge-green">
                                    <i class="ph-file-text"></i>
                                 </div>
                                 <div class="stat-header-info">
                                    <span class="stat-meta-label">Basis Data Regulasi</span>
                                    <h4 class="stat-title-modern">Statistik Status Dokumen per Jenis</h4>
                                 </div>
                              </div>
                              <div class="stat-chart-container mt-3">
                                 <div id="stacked-bar-chart"></div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="col-lg-6 col-md-12 mb-4">
                        <div class="card card-statistik-modern">
                           <div class="card-body stat-card-body">
                              <div class="stat-header border-bottom pb-3">
                                 <div class="stat-icon-badge badge-purple">
                                    <i class="ph-download-simple"></i>
                                 </div>
                                 <div class="stat-header-info">
                                    <span class="stat-meta-label">Interaksi Pengguna</span>
                                    <h4 class="stat-title-modern">View & Download</h4>
                                 </div>
                              </div>
                              <div class="stat-chart-container mt-3">
                                 <div id="view-download-chart"></div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="col-lg-6 col-md-12 mb-4">
                        <div class="card card-statistik-modern">
                           <div class="card-body stat-card-body">
                              <div class="stat-header border-bottom pb-3">
                                 <div class="stat-icon-badge badge-pink">
                                    <i class="ph-chart-pie-slice"></i>
                                 </div>
                                 <div class="stat-header-info">
                                    <span class="stat-meta-label">Proporsi Regulasi</span>
                                    <h4 class="stat-title-modern">Status Dokumen</h4>
                                 </div>
                              </div>
                              <div class="stat-chart-container mt-3">
                                 <div id="status-dokumen-chart"></div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="col-lg-6 col-md-12 mb-4">
                        <div class="card card-statistik-modern">
                           <div class="card-body stat-card-body">
                              <div class="stat-header border-bottom pb-3">
                                 <div class="stat-icon-badge badge-gold">
                                    <i class="ph-smiley"></i>
                                 </div>
                                 <div class="stat-header-info">
                                    <span class="stat-meta-label">Umpan Balik</span>
                                    <h4 class="stat-title-modern">Statistik Kepuasan</h4>
                                 </div>
                              </div>
                              <div class="stat-chart-container mt-3">
                                 <div id="user-reviews-chart"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row" id="survey">
            <div style="width: 90%; margin: 0 auto;" class="max-auto">
               <div class="row">
                  <h2 class="header-survei-kepuasan">Survei Kepuasan</h2>
               </div>
               <div class="row mb-lg-5 md-3">
                  <div class="col-md-7 col-sm-12">
                     <p class="desc-warta-berita">
                        Umpan balik Anda penting bagi kami. Isi survei kepuasan ini untuk membantu kami meningkatkan
                        kualitas akses dan layanan JDIH BAKAMLA RI di masa mendatang
                     </p>
                  </div>
                  <div class="col-md-2"></div>
                  <div class="col-md-3 col-sm-12" style="text-align: center;">
                     <a type="button"  href="https://jdih.bakamla.go.id/survey-kepuasan" class="btn-survey">Ikuti Survey Kepuasan</a>
                  </div>
               </div>

                
                                                         <!-- CAROUSEL SURVEI KEPUASAN INTERAKTIF -->
                      <div class="survey-wrapper">
                         <div class="survey-track">
                            
                                                        <div class="survey-item">
                               <div class="card card-testimoni-modern">
                                  <div class="card-body">
                                     <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="quote-icon-wrapper">
                                           <i class="ph-quotes"></i>
                                        </div>
                                        <div class="d-flex gap-1 rating-stars">
                                                                                                                                                                                        <i class="ph-star-fill" style="color: #f59e0b; font-size: 14px;"></i>
                                                                                                                                                                                            <i class="ph-star-fill" style="color: #f59e0b; font-size: 14px;"></i>
                                                                                                                                                                                            <i class="ph-star-fill" style="color: #f59e0b; font-size: 14px;"></i>
                                                                                                                                                                                            <i class="ph-star-fill" style="color: #f59e0b; font-size: 14px;"></i>
                                                                                                                                                                                            <i class="ph-star-fill" style="color: #f59e0b; font-size: 14px;"></i>
                                                                                                                                  </div>
                                     </div>
                                     <div class="testimonial-content-wrapper mb-4">
                                        <p class="desc-testimoni-modern" title="Kedepan dapat memuat peraturan internasional terbaru/update terkait dengan hukum laut selain hukum laut nasional">
                                           "Kedepan dapat memuat peraturan internasional terbaru/update terkait dengan hukum laut selain hukum laut nasional"
                                        </p>
                                     </div>
                                     <div class="testimoni-divider mb-3"></div>
                                     <div class="d-flex align-items-center gap-3">
                                                                                <div class="avatar-initial" style="background: linear-gradient(135deg, #e11d48, #9f1239);">
                                            A
                                        </div>
                                        <div class="user-info-text text-start">
                                           <h6 class="user-testimoni-modern mb-0">abriadi</h6>
                                           <span class="role-testimoni-modern">TNI</span>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                                                        <div class="survey-item">
                               <div class="card card-testimoni-modern">
                                  <div class="card-body">
                                     <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="quote-icon-wrapper">
                                           <i class="ph-quotes"></i>
                                        </div>
                                        <div class="d-flex gap-1 rating-stars">
                                                                                                                                                                                        <i class="ph-star-fill" style="color: #f59e0b; font-size: 14px;"></i>
                                                                                                                                                                                            <i class="ph-star-fill" style="color: #f59e0b; font-size: 14px;"></i>
                                                                                                                                                                                            <i class="ph-star-fill" style="color: #f59e0b; font-size: 14px;"></i>
                                                                                                                                                                                            <i class="ph-star-fill" style="color: #f59e0b; font-size: 14px;"></i>
                                                                                                                                                                                            <i class="ph-star-fill" style="color: #f59e0b; font-size: 14px;"></i>
                                                                                                                                  </div>
                                     </div>
                                     <div class="testimonial-content-wrapper mb-4">
                                        <p class="desc-testimoni-modern" title="Tingkatkan terus untuk pengembangan website JDIH supaya lebih baik lagi dan bisa menjadi yang terbaik">
                                           "Tingkatkan terus untuk pengembangan website JDIH supaya lebih baik lagi dan bisa menjadi yang terbaik"
                                        </p>
                                     </div>
                                     <div class="testimoni-divider mb-3"></div>
                                     <div class="d-flex align-items-center gap-3">
                                                                                <div class="avatar-initial" style="background: linear-gradient(135deg, #ec4899, #be185d);">
                                            K
                                        </div>
                                        <div class="user-info-text text-start">
                                           <h6 class="user-testimoni-modern mb-0">Kartika Pusakaningrum</h6>
                                           <span class="role-testimoni-modern">ASN/PNS</span>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                                                        <div class="survey-item">
                               <div class="card card-testimoni-modern">
                                  <div class="card-body">
                                     <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="quote-icon-wrapper">
                                           <i class="ph-quotes"></i>
                                        </div>
                                        <div class="d-flex gap-1 rating-stars">
                                                                                                                                                                                        <i class="ph-star-fill" style="color: #f59e0b; font-size: 14px;"></i>
                                                                                                                                                                                            <i class="ph-star-fill" style="color: #f59e0b; font-size: 14px;"></i>
                                                                                                                                                                                            <i class="ph-star-fill" style="color: #f59e0b; font-size: 14px;"></i>
                                                                                                                                                                                            <i class="ph-star-fill" style="color: #f59e0b; font-size: 14px;"></i>
                                                                                                                                                                                            <i class="ph-star-fill" style="color: #f59e0b; font-size: 14px;"></i>
                                                                                                                                  </div>
                                     </div>
                                     <div class="testimonial-content-wrapper mb-4">
                                        <p class="desc-testimoni-modern" title="Semoga ada dibuat Pojok JDIH di kantor Bakamla untuk memudahkan pengunjung orang luar yang datang ke Bakamla">
                                           "Semoga ada dibuat Pojok JDIH di kantor Bakamla untuk memudahkan pengunjung orang luar yang datang ke Bakamla"
                                        </p>
                                     </div>
                                     <div class="testimoni-divider mb-3"></div>
                                     <div class="d-flex align-items-center gap-3">
                                                                                <div class="avatar-initial" style="background: linear-gradient(135deg, #8b5cf6, #6d28d9);">
                                            F
                                        </div>
                                        <div class="user-info-text text-start">
                                           <h6 class="user-testimoni-modern mb-0">Ferry Rindo Dolfa</h6>
                                           <span class="role-testimoni-modern">ASN/PNS</span>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                                                        <div class="survey-item">
                               <div class="card card-testimoni-modern">
                                  <div class="card-body">
                                     <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="quote-icon-wrapper">
                                           <i class="ph-quotes"></i>
                                        </div>
                                        <div class="d-flex gap-1 rating-stars">
                                                                                                                                                                                        <i class="ph-star-fill" style="color: #f59e0b; font-size: 14px;"></i>
                                                                                                                                                                                            <i class="ph-star-fill" style="color: #f59e0b; font-size: 14px;"></i>
                                                                                                                                                                                            <i class="ph-star-fill" style="color: #f59e0b; font-size: 14px;"></i>
                                                                                                                                                                                            <i class="ph-star-fill" style="color: #f59e0b; font-size: 14px;"></i>
                                                                                                                                                                                            <i class="ph-star-fill" style="color: #f59e0b; font-size: 14px;"></i>
                                                                                                                                  </div>
                                     </div>
                                     <div class="testimonial-content-wrapper mb-4">
                                        <p class="desc-testimoni-modern" title="Mungkin bisa dibuatkan Aplikasi Berbasis Mobilenya untuk mempermudah secara Native di jalankan di Smartphone. Saran untuk selalu konsisten dan aktif dalam menambah koleksi dokumen hukum dan informasi terkait hukum lainnya.">
                                           "Mungkin bisa dibuatkan Aplikasi Berbasis Mobilenya untuk mempermudah secara Native di jalankan di Smartphone. Saran untuk selalu konsisten dan aktif dalam menambah koleksi dokumen hukum dan informasi terkait hukum lainnya."
                                        </p>
                                     </div>
                                     <div class="testimoni-divider mb-3"></div>
                                     <div class="d-flex align-items-center gap-3">
                                                                                <div class="avatar-initial" style="background: linear-gradient(135deg, #8b5cf6, #6d28d9);">
                                            R
                                        </div>
                                        <div class="user-info-text text-start">
                                           <h6 class="user-testimoni-modern mb-0">Riki Krisdianto</h6>
                                           <span class="role-testimoni-modern">ASN/PNS</span>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                             
                            
                                                        <div class="survey-item">
                               <div class="card card-testimoni-modern">
                                  <div class="card-body">
                                     <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="quote-icon-wrapper">
                                           <i class="ph-quotes"></i>
                                        </div>
                                        <div class="d-flex gap-1 rating-stars">
                                                                                                                                                                                        <i class="ph-star-fill" style="color: #f59e0b; font-size: 14px;"></i>
                                                                                                                                                                                            <i class="ph-star-fill" style="color: #f59e0b; font-size: 14px;"></i>
                                                                                                                                                                                            <i class="ph-star-fill" style="color: #f59e0b; font-size: 14px;"></i>
                                                                                                                                                                                            <i class="ph-star-fill" style="color: #f59e0b; font-size: 14px;"></i>
                                                                                                                                                                                            <i class="ph-star-fill" style="color: #f59e0b; font-size: 14px;"></i>
                                                                                                                                  </div>
                                     </div>
                                     <div class="testimonial-content-wrapper mb-4">
                                        <p class="desc-testimoni-modern" title="Kedepan dapat memuat peraturan internasional terbaru/update terkait dengan hukum laut selain hukum laut nasional">
                                           "Kedepan dapat memuat peraturan internasional terbaru/update terkait dengan hukum laut selain hukum laut nasional"
                                        </p>
                                     </div>
                                     <div class="testimoni-divider mb-3"></div>
                                     <div class="d-flex align-items-center gap-3">
                                                                                <div class="avatar-initial" style="background: linear-gradient(135deg, #e11d48, #9f1239);">
                                            A
                                        </div>
                                        <div class="user-info-text text-start">
                                           <h6 class="user-testimoni-modern mb-0">abriadi</h6>
                                           <span class="role-testimoni-modern">TNI</span>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                                                        <div class="survey-item">
                               <div class="card card-testimoni-modern">
                                  <div class="card-body">
                                     <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="quote-icon-wrapper">
                                           <i class="ph-quotes"></i>
                                        </div>
                                        <div class="d-flex gap-1 rating-stars">
                                                                                                                                                                                        <i class="ph-star-fill" style="color: #f59e0b; font-size: 14px;"></i>
                                                                                                                                                                                            <i class="ph-star-fill" style="color: #f59e0b; font-size: 14px;"></i>
                                                                                                                                                                                            <i class="ph-star-fill" style="color: #f59e0b; font-size: 14px;"></i>
                                                                                                                                                                                            <i class="ph-star-fill" style="color: #f59e0b; font-size: 14px;"></i>
                                                                                                                                                                                            <i class="ph-star-fill" style="color: #f59e0b; font-size: 14px;"></i>
                                                                                                                                  </div>
                                     </div>
                                     <div class="testimonial-content-wrapper mb-4">
                                        <p class="desc-testimoni-modern" title="Tingkatkan terus untuk pengembangan website JDIH supaya lebih baik lagi dan bisa menjadi yang terbaik">
                                           "Tingkatkan terus untuk pengembangan website JDIH supaya lebih baik lagi dan bisa menjadi yang terbaik"
                                        </p>
                                     </div>
                                     <div class="testimoni-divider mb-3"></div>
                                     <div class="d-flex align-items-center gap-3">
                                                                                <div class="avatar-initial" style="background: linear-gradient(135deg, #ec4899, #be185d);">
                                            K
                                        </div>
                                        <div class="user-info-text text-start">
                                           <h6 class="user-testimoni-modern mb-0">Kartika Pusakaningrum</h6>
                                           <span class="role-testimoni-modern">ASN/PNS</span>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                                                        <div class="survey-item">
                               <div class="card card-testimoni-modern">
                                  <div class="card-body">
                                     <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="quote-icon-wrapper">
                                           <i class="ph-quotes"></i>
                                        </div>
                                        <div class="d-flex gap-1 rating-stars">
                                                                                                                                                                                        <i class="ph-star-fill" style="color: #f59e0b; font-size: 14px;"></i>
                                                                                                                                                                                            <i class="ph-star-fill" style="color: #f59e0b; font-size: 14px;"></i>
                                                                                                                                                                                            <i class="ph-star-fill" style="color: #f59e0b; font-size: 14px;"></i>
                                                                                                                                                                                            <i class="ph-star-fill" style="color: #f59e0b; font-size: 14px;"></i>
                                                                                                                                                                                            <i class="ph-star-fill" style="color: #f59e0b; font-size: 14px;"></i>
                                                                                                                                  </div>
                                     </div>
                                     <div class="testimonial-content-wrapper mb-4">
                                        <p class="desc-testimoni-modern" title="Semoga ada dibuat Pojok JDIH di kantor Bakamla untuk memudahkan pengunjung orang luar yang datang ke Bakamla">
                                           "Semoga ada dibuat Pojok JDIH di kantor Bakamla untuk memudahkan pengunjung orang luar yang datang ke Bakamla"
                                        </p>
                                     </div>
                                     <div class="testimoni-divider mb-3"></div>
                                     <div class="d-flex align-items-center gap-3">
                                                                                <div class="avatar-initial" style="background: linear-gradient(135deg, #8b5cf6, #6d28d9);">
                                            F
                                        </div>
                                        <div class="user-info-text text-start">
                                           <h6 class="user-testimoni-modern mb-0">Ferry Rindo Dolfa</h6>
                                           <span class="role-testimoni-modern">ASN/PNS</span>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                                                        <div class="survey-item">
                               <div class="card card-testimoni-modern">
                                  <div class="card-body">
                                     <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="quote-icon-wrapper">
                                           <i class="ph-quotes"></i>
                                        </div>
                                        <div class="d-flex gap-1 rating-stars">
                                                                                                                                                                                        <i class="ph-star-fill" style="color: #f59e0b; font-size: 14px;"></i>
                                                                                                                                                                                            <i class="ph-star-fill" style="color: #f59e0b; font-size: 14px;"></i>
                                                                                                                                                                                            <i class="ph-star-fill" style="color: #f59e0b; font-size: 14px;"></i>
                                                                                                                                                                                            <i class="ph-star-fill" style="color: #f59e0b; font-size: 14px;"></i>
                                                                                                                                                                                            <i class="ph-star-fill" style="color: #f59e0b; font-size: 14px;"></i>
                                                                                                                                  </div>
                                     </div>
                                     <div class="testimonial-content-wrapper mb-4">
                                        <p class="desc-testimoni-modern" title="Mungkin bisa dibuatkan Aplikasi Berbasis Mobilenya untuk mempermudah secara Native di jalankan di Smartphone. Saran untuk selalu konsisten dan aktif dalam menambah koleksi dokumen hukum dan informasi terkait hukum lainnya.">
                                           "Mungkin bisa dibuatkan Aplikasi Berbasis Mobilenya untuk mempermudah secara Native di jalankan di Smartphone. Saran untuk selalu konsisten dan aktif dalam menambah koleksi dokumen hukum dan informasi terkait hukum lainnya."
                                        </p>
                                     </div>
                                     <div class="testimoni-divider mb-3"></div>
                                     <div class="d-flex align-items-center gap-3">
                                                                                <div class="avatar-initial" style="background: linear-gradient(135deg, #8b5cf6, #6d28d9);">
                                            R
                                        </div>
                                        <div class="user-info-text text-start">
                                           <h6 class="user-testimoni-modern mb-0">Riki Krisdianto</h6>
                                           <span class="role-testimoni-modern">ASN/PNS</span>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                                                     </div>
                      </div>
                                               </div>
         </div>
         
         <!-- LINK TERKAIT NEW -->
         <div class="row pb-lg-5" id="stakeholder">
            <div style="width: 90%; margin: 0 auto;" class="max-auto">
               <div class="row">
                  <h2 class="header-stakeholder">Link Terkait</h2>
               </div>
               <div class="row">
                  <div class="col-mb-9 col-sm-9">
                     <p class="desc-warta-berita mb-4">
                        Ketahui lebih lanjut tentang instansi rekanan JDIH BAKAMLA RI yang mendukung penyediaan
                        informasi hukum dan penguatan jaringan dokumentasi nasional.
                     </p>
                  </div>
               </div>

               <div class="stakeholder-wrapper">
                     <div class="stakeholder-track">
                        
                                                   <div class="stakeholder-item">
                                 <a href="https://jdih.bakamla.go.id" target="_blank" class="stakeholder-link">
                                    <img src="https://jdih.bakamla.go.id/storage/images/stakeholder/stakeholder_67c665717f91a.png" alt="Logo Instansi" class="logo-stakeholder">
                                 </a>
                           </div>
                                                   <div class="stakeholder-item">
                                 <a href="https://www.lapor.go.id/" target="_blank" class="stakeholder-link">
                                    <img src="https://jdih.bakamla.go.id/storage/images/stakeholder/stakeholder_6751da5e092e1.PNG" alt="Logo Instansi" class="logo-stakeholder">
                                 </a>
                           </div>
                                                   <div class="stakeholder-item">
                                 <a href="https://lpse.bakamla.go.id/eproc4" target="_blank" class="stakeholder-link">
                                    <img src="https://jdih.bakamla.go.id/storage/images/stakeholder/stakeholder_6751d9a8c5cfc.png" alt="Logo Instansi" class="logo-stakeholder">
                                 </a>
                           </div>
                                                   <div class="stakeholder-item">
                                 <a href="https://sippn.menpan.go.id/" target="_blank" class="stakeholder-link">
                                    <img src="https://jdih.bakamla.go.id/storage/images/stakeholder/stakeholder_6751d97a2ebe8.jpeg" alt="Logo Instansi" class="logo-stakeholder">
                                 </a>
                           </div>
                                                   <div class="stakeholder-item">
                                 <a href="https://bakamla.go.id/" target="_blank" class="stakeholder-link">
                                    <img src="https://jdih.bakamla.go.id/storage/images/stakeholder/stakeholder_6759c2f346d61.png" alt="Logo Instansi" class="logo-stakeholder">
                                 </a>
                           </div>
                                                   <div class="stakeholder-item">
                                 <a href="https://wbs.bakamla.go.id/" target="_blank" class="stakeholder-link">
                                    <img src="https://jdih.bakamla.go.id/storage/images/stakeholder/stakeholder_67545e166b8ce.png" alt="Logo Instansi" class="logo-stakeholder">
                                 </a>
                           </div>
                                                   <div class="stakeholder-item">
                                 <a href="https://imic.bakamla.go.id/" target="_blank" class="stakeholder-link">
                                    <img src="https://jdih.bakamla.go.id/storage/images/stakeholder/stakeholder_6751d8b9438f0.png" alt="Logo Instansi" class="logo-stakeholder">
                                 </a>
                           </div>
                                                   <div class="stakeholder-item">
                                 <a href="https://csirt.bakamla.go.id/" target="_blank" class="stakeholder-link">
                                    <img src="https://jdih.bakamla.go.id/storage/images/stakeholder/stakeholder_6751d871640bc.png" alt="Logo Instansi" class="logo-stakeholder">
                                 </a>
                           </div>
                                                
                        
                                                   <div class="stakeholder-item">
                                 <a href="https://jdih.bakamla.go.id" target="_blank" class="stakeholder-link">
                                    <img src="https://jdih.bakamla.go.id/storage/images/stakeholder/stakeholder_67c665717f91a.png" alt="Logo Instansi" class="logo-stakeholder">
                                 </a>
                           </div>
                                                   <div class="stakeholder-item">
                                 <a href="https://www.lapor.go.id/" target="_blank" class="stakeholder-link">
                                    <img src="https://jdih.bakamla.go.id/storage/images/stakeholder/stakeholder_6751da5e092e1.PNG" alt="Logo Instansi" class="logo-stakeholder">
                                 </a>
                           </div>
                                                   <div class="stakeholder-item">
                                 <a href="https://lpse.bakamla.go.id/eproc4" target="_blank" class="stakeholder-link">
                                    <img src="https://jdih.bakamla.go.id/storage/images/stakeholder/stakeholder_6751d9a8c5cfc.png" alt="Logo Instansi" class="logo-stakeholder">
                                 </a>
                           </div>
                                                   <div class="stakeholder-item">
                                 <a href="https://sippn.menpan.go.id/" target="_blank" class="stakeholder-link">
                                    <img src="https://jdih.bakamla.go.id/storage/images/stakeholder/stakeholder_6751d97a2ebe8.jpeg" alt="Logo Instansi" class="logo-stakeholder">
                                 </a>
                           </div>
                                                   <div class="stakeholder-item">
                                 <a href="https://bakamla.go.id/" target="_blank" class="stakeholder-link">
                                    <img src="https://jdih.bakamla.go.id/storage/images/stakeholder/stakeholder_6759c2f346d61.png" alt="Logo Instansi" class="logo-stakeholder">
                                 </a>
                           </div>
                                                   <div class="stakeholder-item">
                                 <a href="https://wbs.bakamla.go.id/" target="_blank" class="stakeholder-link">
                                    <img src="https://jdih.bakamla.go.id/storage/images/stakeholder/stakeholder_67545e166b8ce.png" alt="Logo Instansi" class="logo-stakeholder">
                                 </a>
                           </div>
                                                   <div class="stakeholder-item">
                                 <a href="https://imic.bakamla.go.id/" target="_blank" class="stakeholder-link">
                                    <img src="https://jdih.bakamla.go.id/storage/images/stakeholder/stakeholder_6751d8b9438f0.png" alt="Logo Instansi" class="logo-stakeholder">
                                 </a>
                           </div>
                                                   <div class="stakeholder-item">
                                 <a href="https://csirt.bakamla.go.id/" target="_blank" class="stakeholder-link">
                                    <img src="https://jdih.bakamla.go.id/storage/images/stakeholder/stakeholder_6751d871640bc.png" alt="Logo Instansi" class="logo-stakeholder">
                                 </a>
                           </div>
                                             </div>
               </div>
            </div>
         </div>

         <style>
          /* 1. Wrapper dengan Efek Transparansi di Pinggir & Drag-ready */
          .stakeholder-wrapper {
             overflow-x: auto;
             overflow-y: hidden;
             white-space: nowrap;
             padding: 50px 0;
             position: relative;
             cursor: grab;
             user-select: none;
             -webkit-user-select: none;
             /* Memberikan kesan memudar di sisi kiri & kanan */
             -webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
             mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
             /* Sembunyikan scrollbar bawaan */
             scrollbar-width: none; /* Firefox */
             -ms-overflow-style: none; /* IE 10+ */
          }
          .stakeholder-wrapper::-webkit-scrollbar {
             display: none; /* Safari & Chrome */
          }
          .stakeholder-wrapper.active {
             cursor: grabbing;
          }

          /* 2. Track Container */
          .stakeholder-track {
             display: flex;
             align-items: center;
             width: max-content;
             will-change: scroll-position;
          }

          /* 3. Item Container */
          .stakeholder-item {
             padding: 0 45px;
             flex-shrink: 0;
             display: flex;
             align-items: center;
             justify-content: center;
          }

          /* 4. Logo Styling (Warna Asli & Anti-Peyot) */
          .logo-stakeholder {
             height: 75px; 
             width: auto;
             max-width: 190px;
             object-fit: contain; /* Jaga rasio asli logo agar tidak stretch */
             opacity: 0.85;
             transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); /* Animasi membal/smooth */
          }

          /* 5. Efek Highlight Terseleksi (Besar & Terang) */
          .stakeholder-link {
             text-decoration: none;
             display: block;
          }

          .stakeholder-link:hover .logo-stakeholder {
             opacity: 1;
             transform: scale(1.25); /* Membesar signifikan */
             /* Efek bayangan cahaya di belakang logo */
             filter: drop-shadow(0 10px 20px rgba(0, 123, 255, 0.4));
          }

          /* 6. Responsivitas untuk Mobile/Tablet */
          @media (max-width: 768px) {
             .logo-stakeholder {
                height: 50px; /* Ukuran lebih pas untuk HP */
                max-width: 130px;
             }
             .stakeholder-item {
                padding: 0 25px;
             }
             .stakeholder-wrapper {
                padding: 30px 0;
                -webkit-mask-image: linear-gradient(to right, transparent, black 5%, black 95%, transparent);
                mask-image: linear-gradient(to right, transparent, black 5%, black 95%, transparent);
             }
          }

          /* ==========================================================================
             STYLING MODERN & CAROUSEL UNTUK SURVEI KEPUASAN (TESTIMONI)
             ========================================================================== */
          
          /* 1. Testimonial Card Modern */
          .card-testimoni-modern {
             background: rgba(255, 255, 255, 0.85);
             backdrop-filter: blur(12px);
             -webkit-backdrop-filter: blur(12px);
             border: 1px solid rgba(255, 255, 255, 0.6);
             border-radius: 20px;
             box-shadow: 0 10px 30px rgba(15, 23, 42, 0.03);
             transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
             height: 100%;
             display: flex;
             flex-direction: column;
             position: relative;
             overflow: hidden;
             will-change: transform, box-shadow;
          }
          
          .card-testimoni-modern:hover {
             transform: translateY(-12px) scale(1.02);
             box-shadow: 0 25px 50px rgba(15, 23, 42, 0.1);
             border-color: rgba(37, 99, 235, 0.35);
          }

          /* Accent top-border */
          .card-testimoni-modern::before {
             content: '';
             position: absolute;
             top: 0;
             left: 0;
             right: 0;
             height: 4px;
             background: linear-gradient(90deg, #3b82f6 0%, #1d4ed8 50%, #10b981 100%);
             opacity: 0;
             transition: opacity 0.3s ease;
             z-index: 2;
          }

          .card-testimoni-modern:hover::before {
             opacity: 1;
          }

          /* 2. Rating & Icon quote styling */
          .quote-icon-wrapper {
             background-color: #f1f5f9;
             width: 44px;
             height: 44px;
             border-radius: 12px;
             display: flex;
             align-items: center;
             justify-content: center;
             transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
          }
          .quote-icon-wrapper i {
             font-size: 24px;
             color: #2563eb;
             transition: all 0.4s ease;
          }
          .card-testimoni-modern:hover .quote-icon-wrapper {
             background-color: #2563eb;
             color: #ffffff;
             transform: rotate(-10deg) scale(1.15);
          }
          .card-testimoni-modern:hover .quote-icon-wrapper i {
             color: #ffffff !important;
          }
          
          /* 3. Text & Typografi modern */
          .desc-testimoni-modern {
             font-family: 'Inter', sans-serif;
             font-size: 14.5px;
             line-height: 1.8;
             color: #475569;
             font-style: italic;
             margin: 0;
             display: -webkit-box;
             -webkit-line-clamp: 4;
             -webkit-box-orient: vertical;
             overflow: hidden;
             text-overflow: ellipsis;
             min-height: 104px;
             transition: color 0.3s ease;
          }
          
          .card-testimoni-modern:hover .desc-testimoni-modern {
             color: #1e293b;
          }
          
          .testimoni-divider {
             height: 1px;
             background: linear-gradient(90deg, #f1f5f9 0%, rgba(241, 245, 249, 0) 100%);
             width: 100%;
             margin: 16px 0;
          }
          
          .user-testimoni-modern {
             font-family: 'Inter', sans-serif;
             font-size: 15px;
             font-weight: 700;
             color: #0f172a;
             transition: color 0.3s ease;
          }
          
          .card-testimoni-modern:hover .user-testimoni-modern {
             color: #253144;
          }
          
          .role-testimoni-modern {
             font-family: 'Inter', sans-serif;
             font-size: 12px;
             color: #64748b;
             font-weight: 500;
             display: block;
          }

          /* 4. Carousel scroller ketika count > 3 */
          .survey-wrapper {
             overflow-x: auto;
             overflow-y: hidden;
             white-space: nowrap;
             padding: 30px 0;
             position: relative;
             cursor: grab;
             user-select: none;
             -webkit-user-select: none;
             /* Fade effect at left & right borders */
             -webkit-mask-image: linear-gradient(to right, transparent, black 8%, black 92%, transparent);
             mask-image: linear-gradient(to right, transparent, black 8%, black 92%, transparent);
             scrollbar-width: none; /* Firefox */
             -ms-overflow-style: none; /* IE 10+ */
          }
          
          .survey-wrapper::-webkit-scrollbar {
             display: none; /* Chrome/Safari */
          }
          
          .survey-wrapper.active {
             cursor: grabbing;
          }
          
          .survey-track {
             display: flex;
             align-items: stretch; /* Cards of equal height */
             width: max-content;
             will-change: scroll-position;
             gap: 24px;
             padding: 10px 0;
          }
          
          .survey-item {
             width: 380px; /* Perfect card width */
             white-space: normal; /* Allow text wrapping inside card! */
             flex-shrink: 0;
             display: flex;
          }

          .avatar-initial {
             width: 46px;
             height: 46px;
             border-radius: 50%;
             display: flex;
             align-items: center;
             justify-content: center;
             color: #ffffff;
             font-weight: 700;
             font-family: 'Inter', sans-serif;
             font-size: 16px;
             box-shadow: 0 4px 10px rgba(15, 23, 42, 0.08);
             flex-shrink: 0;
             transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
             border: 2px solid #ffffff;
          }

          .card-testimoni-modern:hover .avatar-initial {
             transform: scale(1.1) rotate(5deg);
             box-shadow: 0 6px 15px rgba(15, 23, 42, 0.15);
          }

          /* 5. Responsivitas */
          @media (max-width: 768px) {
             .survey-item {
                width: 310px; /* Slightly narrower on mobile */
             }
             .survey-wrapper {
                padding: 20px 0;
                -webkit-mask-image: linear-gradient(to right, transparent, black 4%, black 96%, transparent);
                mask-image: linear-gradient(to right, transparent, black 4%, black 96%, transparent);
             }
             .desc-testimoni-modern {
                font-size: 13.5px;
                min-height: 84px;
             }
          }
          </style>
         <!-- LINK TERKAIT NEW -->

         <div class="row" id="portal-jdih">
            <div style="width: 90%; margin: 0 auto;" class="max-auto">
               <div>
                  <h2 class="header-portal-jdihn">PORTAL JDIHN</h2>
               </div>
               <div class="row">
                  <div class="col-md-6 col-sm-6">
                     <p class="desc-portal-jdihn" style="line-height: 1.65">
                        Kunjungi portal utama JDIHN untuk akses lebih luas ke jaringan dokumentasi hukum nasional
                        yang melibatkan berbagai instansi terkait di Indonesia.
                     </p>
                  </div>

                  <div class="col-md-3 col-sm-12"></div>

                  <div class="col-md-3 col-sm-3 pt-3 pt-md-0" style="text-align: center;">
                     <a href="https://jdihn.go.id" target="_blank" class="btn-kunjungi-portal d-flex align-items-center">
                     Kunjungi Portal
                     <img src="https://jdih.bakamla.go.id/images/logo/arrow-right.png" style="width: 20px; height: 20px;" />
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="row" id="tautan">
    <div style="width: 90%; margin: 0 auto;" class="max-auto">
        <div class="row batas-footer py-4">
            <div class="col-mb-6 col-sm-6">
                <div class="row">
                    <h3 class="header-footer"">Jaringan Dokumentasi dan Informasi Hukum Badan Keamanan Laut Republik Indonesia</h3>
                </div>
                <div class="row">
                    <div class="col-mb-12 col-sm-12">
                        <p class="desc-footer pb-1">JDIHN adalah platform pengelolaan dokumen hukum yang tertib dan terpadu, menyediakan informasi hukum yang lengkap, akurat, dan mudah diakses. Platform ini penting untuk menyajikan data produk hukum terbaru.</p>
                    </div>
                </div>
            </div>
            <div class="col-mb-6 col-sm-6 pb-3 pb-md-0">
                <div class="row">
                    <h3 class="header-tautan-penting pt-1">Tautan Penting:</h3>
                </div>
                <div class="row">
                    <div class="col-4">
                        <a href="https://jdih.bakamla.go.id" class="item-tautan-penting">Beranda</a>
                        <a class="item-tautan-penting" href="https://jdih.bakamla.go.id/sekilas-sejarah">Sekilas Sejarah</a>
                        <a href="https://jdih.bakamla.go.id/berita" class="item-tautan-penting">Berita JDIH BAKAMLA RI</a>
                        <a href="https://jdih.bakamla.go.id/document" class="item-tautan-penting">Dokumen Hukum</a>
                    </div>
                    <div class="col-4">
                        <a href="https://jdihn.go.id" target="_blank" class="item-tautan-penting">Portal JDIHN</a>
                        <a class="item-tautan-penting" href="https://jdih.bakamla.go.id/liputan">Liputan JDIH BAKAMLA RI</a>
                        <a class="item-tautan-penting" href="https://jdih.bakamla.go.id/sosial-media">Sosial Media</a>
                        <a class="item-tautan-penting" href="https://jdih.bakamla.go.id/survey-kepuasan">Survei Kepuasan</a>
                    </div>
                    <div class="col-4">
                        <a href="https://jdih.bakamla.go.id/frequently-sked-questions" class="item-tautan-penting" href="https://jdih.bakamla.go.id/frequently-sked-questions">FAQ</a>
                        <a href="https://jdih.bakamla.go.id/kebijakan-privasi" class="item-tautan-penting" >Kebijakan Privasi</a>
                        <a class="item-tautan-penting">Hubungi Kami</a>
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
                            <i class="ph ph-map-pin" style="font-size: 20px; color: #3b82f6;"></i>
                        </div>
                        <div>
                            <p class="mb-0" style="font-size: 14px; color: #475569; line-height: 1.6;">Jl. Proklamasi No.56, Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10320</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <div class="icon-badge-footer">
                            <i class="ph ph-phone" style="font-size: 20px; color: #3b82f6;"></i>
                        </div>
                        <div>
                            <p class="mb-0" style="font-size: 14px; color: #475569; font-weight: 500;">(021) 150321</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <div class="icon-badge-footer">
                            <i class="ph ph-envelope" style="font-size: 20px; color: #3b82f6;"></i>
                        </div>
                        <div>
                            <p class="mb-0" style="font-size: 14px; color: #475569; font-weight: 500;">jdih@bakamla.go.id</p>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <p class="ikuti-kami mb-2" style="font-size: 14px; font-weight: 600; color: #0f172a;">Ikuti kami di:</p>
                    <div class="d-flex flex-wrap gap-2">
                        <a href="https://youtube.com/@bakamlariofficial3164?si=kUksChlOiZlc_JSa" target="_BLANK" class="btn-social-modern yt">
                            <img src="https://jdih.bakamla.go.id/images/logo/youtube.png" alt="Youtube"> Youtube
                        </a>
                        <a href="https://www.instagram.com/jdihbakamla.ri/" target="_BLANK" class="btn-social-modern ig">
                            <img src="https://jdih.bakamla.go.id/images/logo/instagram.png" alt="Instagram"> Instagram
                        </a>
                        <a href="https://twitter.com/HumasBakamlaRI" target="_BLANK" class="btn-social-modern tw">
                            <img src="https://jdih.bakamla.go.id/images/logo/twitter.png" alt="Twitter"> Twitter
                        </a>
                        <a href="https://facebook.com/Humas.BakamlaRI/" target="_BLANK" class="btn-social-modern fb">
                            <img src="https://jdih.bakamla.go.id/images/logo/facebook.png" alt="Facebook"> Facebook Page
                        </a>
                    </div>
                </div>
            </div>

            <!-- Kolom 2: Statistik Pengunjung -->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card-footer-modern d-flex flex-column p-4">
                    <div class="d-flex align-items-center gap-3 mb-3 border-bottom pb-3">
                        <div class="stat-header-icon">
                            <i class="ph ph-chart-line-up" style="font-size: 22px; color: #ffffff;"></i>
                        </div>
                        <div>
                            <h4 class="mb-0" style="font-size: 16px; font-weight: 700; color: #0f172a;">Statistik Pengunjung</h4>
                            <p class="mb-0 text-muted" style="font-size: 11px;">Data diperbarui secara real-time</p>
                        </div>
                    </div>
                    <div class="d-flex flex-column gap-2 flex-grow-1 justify-content-center">
                        <div class="stat-row">
                            <span class="stat-row-label">
                                <i class="ph ph-calendar-check text-success"></i>
                                <span>Hari Ini</span>
                            </span>
                            <span class="stat-row-val text-success" id="footer-today">-</span>
                        </div>
                        <div class="stat-row">
                            <span class="stat-row-label">
                                <i class="ph ph-calendar text-warning"></i>
                                <span>Kemarin</span>
                            </span>
                            <span class="stat-row-val text-warning" id="footer-yesterday">-</span>
                        </div>
                        <div class="stat-row">
                            <span class="stat-row-label">
                                <i class="ph ph-calendar-blank text-primary"></i>
                                <span>Minggu Ini</span>
                            </span>
                            <span class="stat-row-val text-primary" id="footer-week">-</span>
                        </div>
                        <div class="stat-row">
                            <span class="stat-row-label">
                                <i class="ph ph-chart-line text-info"></i>
                                <span>Bulan Ini</span>
                            </span>
                            <span class="stat-row-val text-info" id="footer-month">-</span>
                        </div>
                        <div class="stat-row">
                            <span class="stat-row-label">
                                <i class="ph ph-trend-up text-secondary"></i>
                                <span>Tahun Ini</span>
                            </span>
                            <span class="stat-row-val text-secondary" id="footer-year">-</span>
                        </div>
                        <div class="stat-row total">
                            <span class="stat-row-label">
                                <i class="ph ph-globe text-danger"></i>
                                <span>Total Pengunjung</span>
                            </span>
                            <span class="stat-row-val text-danger" id="footer-total">-</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kolom 3: Peta Lokasi Kantor -->
            <div class="col-lg-4 col-md-12 col-12">
                <div class="card-footer-modern d-flex flex-column p-4">
                    <div class="d-flex align-items-center gap-3 mb-3 border-bottom pb-3">
                        <div class="map-header-icon">
                            <i class="ph ph-map-trifold" style="font-size: 22px; color: #ffffff;"></i>
                        </div>
                        <div>
                            <h4 class="mb-0" style="font-size: 16px; font-weight: 700; color: #0f172a;">Peta Lokasi Kantor</h4>
                            <p class="mb-0 text-muted" style="font-size: 11px;">Mabes Bakamla RI, Jakarta Pusat</p>
                        </div>
                    </div>
                    <div class="flex-grow-1 overflow-hidden" style="border-radius: 14px; min-height: 220px; position: relative; border: 1px solid #e2e8f0;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4555661388317!2d106.84282280984712!3d-6.203477893758375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f46c4a4722bd%3A0x7faaa79950c39012!2sBADAN%20KEAMANAN%20LAUT%20RI!5e0!3m2!1sen!2sid!4v1729565098623!5m2!1sen!2sid"
                            style="border:0; width: 100%; height: 100%; position: absolute; top: 0; left: 0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="row batas-footer py-3">
            <div class="col-mb-6 col-sm-6">
            </div>
            <div class="col-mb-6 col-sm-6">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <h6 class="unduh-title">Unduh aplikasi JDIH BAKAMLA RI</h6>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="d-flex justify-content-end align-items-center gap-3">
                            <img src="https://jdih.bakamla.go.id/images/logo/appstore.png">
                            <img src="https://jdih.bakamla.go.id/images/logo/playstore.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<button onclick="topFunction()" id="myBtn" title="Go to top">
    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v13m0-13 4 4m-4-4-4 4"/>
    </svg>
</button>

<style>
    #myBtn {
    display: none;
    position: fixed;
    bottom: 20px;
    right: 30px;
    z-index: 99;
    font-size: 18px;
    border: none;
    outline: none;
    background-color: red;
    color: white;
    cursor: pointer;
    padding: 15px;
    border-radius: 4px;
    }

    #myBtn:hover {
    background-color: #555;
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
        background: linear-gradient(135deg, #10b981, #047857);
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
</style>

<script>
    let mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    }

    // Load Statistik Pengunjung Real-time
    document.addEventListener('DOMContentLoaded', function() {
        fetch('/api/visitor-stats-summary')
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                if (data) {
                    const formatNum = (num) => {
                        return (num || 0).toLocaleString('id-ID');
                    };

                    document.getElementById('footer-today').textContent = formatNum(data.today);
                    document.getElementById('footer-yesterday').textContent = formatNum(data.yesterday);
                    document.getElementById('footer-week').textContent = formatNum(data.week);
                    document.getElementById('footer-month').textContent = formatNum(data.month);
                    document.getElementById('footer-year').textContent = formatNum(data.year);
                    document.getElementById('footer-total').textContent = formatNum(data.total);
                }
            })
            .catch(error => {
                console.error('Error fetching visitor stats:', error);
                const fields = ['footer-today', 'footer-yesterday', 'footer-week', 'footer-month', 'footer-year', 'footer-total'];
                fields.forEach(id => {
                    const el = document.getElementById(id);
                    if (el && el.textContent === '-') {
                        el.textContent = '0';
                    }
                });
            });
    });
</script>
<style>
    /* 1. Style Highlight saat Kursor Mengarah ke Teks */
    .tts-highlight {
        outline: 2px dashed #E74C3C !important;
        background-color: rgba(231, 76, 60, 0.15) !important;
        cursor: help !important;
        border-radius: 4px;
        transition: all 0.2s ease;
        position: relative;
        z-index: 10;
    }

    /* 2. Animasi Pulse untuk Mode Aktif */
    @keyframes tts-pulse {
        0% { box-shadow: 0 0 0 0 rgba(231, 76, 60, 0.7); }
        70% { box-shadow: 0 0 0 15px rgba(231, 76, 60, 0); }
        100% { box-shadow: 0 0 0 0 rgba(231, 76, 60, 0); }
    }

    .tts-active-pulse {
        animation: tts-pulse 2s infinite;
    }

    /* 3. Tooltip Custom */
    .tts-tooltip-text {
        visibility: hidden;
        width: 140px;
        background-color: #1e293b;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 8px 0;
        position: absolute;
        z-index: 1;
        left: 110%; 
        top: 50%;
        transform: translateY(-50%);
        opacity: 0;
        transition: opacity 0.3s;
        font-size: 12px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }

    .tts-tooltip-text::after {
        content: "";
        position: absolute;
        top: 50%;
        right: 100%;
        margin-top: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: transparent #1e293b transparent transparent;
    }

    #tts-wrapper:hover .tts-tooltip-text {
        visibility: visible;
        opacity: 1;
    }

    /* --- PENYESUAIAN KHUSUS MOBILE (Screen < 768px) --- */
    @media only screen and (max-width: 768px) {
        #tts-wrapper {
            /* Digeser 5px dari posisi desktop (24px - 5px = 19px) */
            left: 19px !important; 
            bottom: 90px !important; /* Sedikit penyesuaian bottom agar pas di jempol */
        }

        #tts-toggle-btn {
            /* Dikecilin sedikit dari 56px ke 48px */
            width: 48px !important;
            height: 48px !important;
        }

        /* Sesuaikan ukuran ikon di mobile */
        #tts-toggle-btn svg {
            width: 22px !important;
            height: 22px !important;
        }
        
        /* Matikan tooltip hover di mobile agar tidak menghalangi */
        .tts-tooltip-text {
            display: none !important;
        }
    }
</style>

<div id="tts-wrapper" style="position: fixed; bottom: 100px; left: 24px; z-index: 2147483647; font-family: sans-serif;">
    
    <button id="tts-toggle-btn" onclick="handleUserClick()" 
        style="
            width: 56px; 
            height: 56px; 
            border-radius: 50%; 
            border: 3px solid white; 
            cursor: pointer; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.4), 0 8px 10px -6px rgba(0, 0, 0, 0.1);
            background-color: #16a34a; /* DEFAULT HIJAU */
        "
        class="hover:scale-110"
        aria-label="Aktifkan Mode Baca Layar">

        <svg id="icon-off" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M3 18v-6a9 9 0 0 1 18 0v6"></path>
            <path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"></path>
        </svg>
        
        <svg id="icon-on" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: none;">
            <polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon>
            <path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"></path>
        </svg>
    </button>

    <span id="tts-tooltip-text" class="tts-tooltip-text">Aktifkan Pembaca Layar</span>
</div>

<script>
    let synth = window.speechSynthesis;
    let hoverModeActive = false;
    let lastHoveredElement = null;
    let inactivityTimer = null;

    // 1. Inisialisasi Suara
    function getIndonesianVoice() {
        const voices = synth.getVoices();
        let voice = voices.find(v => v.lang === 'id-ID' && v.name.includes('Google'));
        if (!voice) voice = voices.find(v => v.lang === 'id-ID');
        return voice;
    }

    if (speechSynthesis.onvoiceschanged !== undefined) {
        speechSynthesis.onvoiceschanged = getIndonesianVoice;
    }

    // 2. Logic Klik User (Toggle)
    function handleUserClick() {
        // Balik status saat ini
        const newState = !hoverModeActive;
        applyHoverMode(newState, true); // true = bunyikan suara konfirmasi
    }

    // 3. Fungsi Utama Penerapan Mode (State Manager)
    function applyHoverMode(isActive, playVoiceFeedback = false) {
        hoverModeActive = isActive;
        
        // Simpan status ke LocalStorage browser agar persisten saat pindah halaman
        localStorage.setItem('tts_hover_mode', isActive ? 'on' : 'off');

        const btn = document.getElementById('tts-toggle-btn');
        const iconOff = document.getElementById('icon-off');
        const iconOn = document.getElementById('icon-on');
        const tooltip = document.getElementById('tts-tooltip-text');

        if (hoverModeActive) {
            // --- MODE AKTIF (MERAH) ---
            btn.style.backgroundColor = "#E74C3C"; // Merah
            btn.classList.add('tts-active-pulse');
            
            iconOff.style.display = 'none';
            iconOn.style.display = 'block';
            
            tooltip.innerText = "Mode Aktif: Arahkan kursor ke teks";
            
            if (playVoiceFeedback) {
                speakText("Mode Baca Layar Aktif.");
            }

            document.body.addEventListener('mouseover', handleMouseOver);
            document.body.addEventListener('mouseout', handleMouseOut);
        } else {
            // --- MODE MATI (HIJAU) ---
            stopSpeaking();
            if(lastHoveredElement) lastHoveredElement.classList.remove('tts-highlight');

            btn.style.backgroundColor = "#16a34a"; // Hijau
            btn.classList.remove('tts-active-pulse');
            
            iconOff.style.display = 'block';
            iconOn.style.display = 'none';
            
            tooltip.innerText = "Aktifkan Pembaca Layar";
            
            if (playVoiceFeedback) {
                speakText("Mode Baca Nonaktif.");
            }

            document.body.removeEventListener('mouseover', handleMouseOver);
            document.body.removeEventListener('mouseout', handleMouseOut);
        }
    }

    // 4. Cek Status saat Halaman Dimuat (Auto-Start)
    document.addEventListener("DOMContentLoaded", function() {
        const savedState = localStorage.getItem('tts_hover_mode');
        // Jika di localStorage tersimpan 'on', aktifkan otomatis tanpa suara intro yg panjang
        if (savedState === 'on') {
            applyHoverMode(true, false); 
        }
    });

    // 5. Logic Mouse Over
    function handleMouseOver(e) {
        if (!hoverModeActive) return;

        const target = e.target;
        const validTags = ['P', 'H1', 'H2', 'H3', 'H4', 'H5', 'H6', 'A', 'BUTTON', 'SPAN', 'LI', 'TD', 'TH', 'LABEL', 'STRONG', 'B', 'I', 'EM'];
        
        let text = target.innerText || target.alt || target.title;

        if (validTags.includes(target.tagName) && text && text.trim().length > 0 && !target.closest('#tts-wrapper')) {
            
            clearTimeout(inactivityTimer);
            inactivityTimer = setTimeout(() => {
                
                if (lastHoveredElement) lastHoveredElement.classList.remove('tts-highlight');
                synth.cancel();

                lastHoveredElement = target;
                target.classList.add('tts-highlight');

                let cleanText = text.trim();
                // Batasi panjang bacaan hover agar responsif
                if (cleanText.length > 300) cleanText = cleanText.substring(0, 300) + "...";

                speakText(cleanText);

            }, 200); 
            
            e.stopPropagation();
        }
    }

    // 6. Logic Mouse Out
    function handleMouseOut(e) {
        if (e.target === lastHoveredElement) {
            e.target.classList.remove('tts-highlight');
            clearTimeout(inactivityTimer);
            synth.cancel();
        }
    }

    // 7. Fungsi Bicara
    function speakText(text) {
        if (!text) return;
        const utterance = new SpeechSynthesisUtterance(text);
        utterance.lang = 'id-ID';
        utterance.rate = 1.0; 
        utterance.pitch = 1.1; 

        const voice = getIndonesianVoice();
        if (voice) utterance.voice = voice;

        synth.speak(utterance);
    }

    function stopSpeaking() {
        synth.cancel();
    }
</script>

         <div class="row" id="footer">
    <div style="margin: 0 auto;" class="max-auto">
        <div class="row" style="text-align: center;">
            <h6 class="footer-title py-3" style="background: #253144 url(https://jdih.bakamla.go.id/images/backgrounds/header-intersect.png) no-repeat 90% top;">Hak Cipta &#169; <span id="currentYear"></span> JDIH BAKAMLA RI. Semua Hak Dilindungi.</h6>
        </div>
    </div>
</div>

<script>
    document.getElementById("currentYear").textContent = new Date().getFullYear();
</script>
<script src="https://jdih.bakamla.go.id/js/homepage/aksebilitas.js"></script>

<!-- Pendaftaran Service Worker PWA & Banner Instalasi -->
<div id="pwa-install-banner" style="display: none; opacity: 0; transform: translateX(-50%) translateY(30px); position: fixed; bottom: 24px; left: 50%; z-index: 999999; width: 92%; max-width: 440px; background: rgba(15, 23, 42, 0.95); backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 18px; box-shadow: 0 16px 40px rgba(15, 23, 42, 0.35); padding: 18px; color: #ffffff; font-family: 'Inter', sans-serif; transition: all 0.6s cubic-bezier(0.16, 1, 0.3, 1);">
    <div style="display: flex; align-items: center; gap: 14px; margin-bottom: 14px;">
        <div style="width: 46px; height: 46px; background: linear-gradient(135deg, #0ea5e9, #0284c7); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 24px; color: #ffffff; flex-shrink: 0; box-shadow: 0 4px 12px rgba(14, 165, 233, 0.3);">
            <i class="ph-download-simple"></i>
        </div>
        <div style="text-align: left;">
            <h6 style="margin: 0 0 3px 0; font-size: 14px; font-weight: 700; color: #ffffff; letter-spacing: -0.01em;">Pasang Aplikasi JDIH</h6>
            <p style="margin: 0; font-size: 11.5px; color: rgba(255, 255, 255, 0.75); line-height: 1.45;">Nikmati akses peraturan & informasi hukum Bakamla dengan lebih cepat langsung dari beranda HP Anda.</p>
        </div>
    </div>
    <div style="display: flex; justify-content: flex-end; gap: 10px;">
        <button id="pwa-install-close-btn" style="background: transparent; border: 1px solid rgba(255, 255, 255, 0.2); color: rgba(255, 255, 255, 0.85); padding: 7px 18px; font-size: 12px; font-weight: 600; border-radius: 9px; cursor: pointer; transition: all 0.2s; outline: none;">Nanti Saja</button>
        <button id="pwa-install-action-btn" style="background: #e74c3c; border: none; color: #ffffff; padding: 7px 22px; font-size: 12px; font-weight: 700; border-radius: 9px; cursor: pointer; box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3); transition: all 0.2s; outline: none;">Instal Sekarang</button>
    </div>
</div>

<script>
    if ('serviceWorker' in navigator) {
        window.addEventListener('load', () => {
            navigator.serviceWorker.register('/sw.js')
                .then((reg) => {
                    console.log('JDIH Bakamla PWA Service Worker terdaftar sukses:', reg.scope);
                })
                .catch((err) => {
                    console.error('Pendaftaran Service Worker PWA gagal:', err);
                });
        });
    }

    // Penanganan Prompt Instalasi PWA
    let deferredPrompt;
    const installBanner = document.getElementById('pwa-install-banner');
    const installBtn = document.getElementById('pwa-install-action-btn');
    const closeBtn = document.getElementById('pwa-install-close-btn');

    // Cek jika berjalan dalam mode standalone (aplikasi terinstal)
    const isStandalone = window.matchMedia('(display-mode: standalone)').matches || window.navigator.standalone === true;

    if (!isStandalone) {
        window.addEventListener('beforeinstallprompt', (e) => {
            // Cegah prompt bawaan browser muncul secara otomatis
            e.preventDefault();
            // Simpan event instalasi untuk dipicu nanti
            deferredPrompt = e;
            
            // Tampilkan banner kustom jika belum pernah ditutup oleh pengguna pada sesi ini
            if (sessionStorage.getItem('pwa-prompt-dismissed') !== 'true') {
                installBanner.style.display = 'block';
                // Trigger transition
                setTimeout(() => {
                    installBanner.style.opacity = '1';
                    installBanner.style.transform = 'translateX(-50%) translateY(0)';
                }, 150);
            }
        });
    }

    installBtn.addEventListener('click', async () => {
        if (deferredPrompt) {
            // Tampilkan prompt instalasi asli browser
            deferredPrompt.prompt();
            // Tunggu pilihan pengguna
            const { outcome } = await deferredPrompt.userChoice;
            console.log(`Pilihan user untuk instalasi PWA: ${outcome}`);
            // Reset prompt
            deferredPrompt = null;
            hideInstallBanner();
        }
    });

    closeBtn.addEventListener('click', () => {
        // Simpan status penutupan di sessionStorage agar banner tidak mengganggu lagi pada sesi kunjungan saat ini
        sessionStorage.setItem('pwa-prompt-dismissed', 'true');
        hideInstallBanner();
    });

    function hideInstallBanner() {
        installBanner.style.opacity = '0';
        installBanner.style.transform = 'translateX(-50%) translateY(30px)';
        setTimeout(() => {
            installBanner.style.display = 'none';
        }, 600);
    }

    // Sembunyikan banner jika aplikasi berhasil diinstal
    window.addEventListener('appinstalled', (event) => {
        console.log('JDIH Bakamla PWA berhasil diinstal oleh pengguna!');
        hideInstallBanner();
    });
</script>
      </div>
      <script async src="//www.instagram.com/embed.js"></script>
      <link href="https://jdih.bakamla.go.id/css/homepage/aksebilitas.css" rel="stylesheet" type="text/css">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
      <script src="https://code.highcharts.com/highcharts.js"></script>
      <script src="https://code.highcharts.com/modules/exporting.js"></script>
      <script src="https://code.highcharts.com/modules/export-data.js"></script>
      <script src="https://code.highcharts.com/modules/accessibility.js"></script>
      <script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
      <script src="https://jdih.bakamla.go.id/js/homepage/aksebilitas.js"></script>
      <script src="https://jdih.bakamla.go.id/js/homepage/translate.js"></script>
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

         // Drag & Auto-Scroll untuk Link Terkait (Stakeholders)
         document.addEventListener('DOMContentLoaded', () => {
             const wrapper = document.querySelector('.stakeholder-wrapper');
             if (wrapper) {
                 const track = wrapper.querySelector('.stakeholder-track');
                 if (track && track.children.length > 0) {
                     let isDown = false;
                     let isHovered = false;
                     let startX;
                     let scrollLeft;
                     let autoScrollTimer;
                     const scrollSpeed = 0.55; // Pixels per frame (sangat halus)

                     function startAutoScroll() {
                         cancelAnimationFrame(autoScrollTimer);
                         function scroll() {
                             if (!isDown && !isHovered) {
                                 wrapper.scrollLeft += scrollSpeed;
                                 const halfWidth = wrapper.scrollWidth / 2;
                                 if (wrapper.scrollLeft >= halfWidth) {
                                     wrapper.scrollLeft -= halfWidth;
                                 }
                             }
                             autoScrollTimer = requestAnimationFrame(scroll);
                         }
                         autoScrollTimer = requestAnimationFrame(scroll);
                     }

                     // Mouse Drag Events
                     wrapper.addEventListener('mousedown', (e) => {
                         isDown = true;
                         wrapper.classList.add('active');
                         startX = e.pageX - wrapper.offsetLeft;
                         scrollLeft = wrapper.scrollLeft;
                         cancelAnimationFrame(autoScrollTimer);
                     });

                     wrapper.addEventListener('mouseleave', () => {
                         isDown = false;
                         isHovered = false;
                         wrapper.classList.remove('active');
                         startAutoScroll();
                     });

                     wrapper.addEventListener('mouseup', () => {
                         isDown = false;
                         wrapper.classList.remove('active');
                         startAutoScroll();
                     });

                     wrapper.addEventListener('mousemove', (e) => {
                         if (!isDown) return;
                         e.preventDefault();
                         const x = e.pageX - wrapper.offsetLeft;
                         const walk = (x - startX) * 1.5;
                         wrapper.scrollLeft = scrollLeft - walk;

                         const halfWidth = wrapper.scrollWidth / 2;
                         if (wrapper.scrollLeft >= halfWidth) {
                             wrapper.scrollLeft -= halfWidth;
                         } else if (wrapper.scrollLeft <= 0) {
                             wrapper.scrollLeft += halfWidth;
                         }
                     });

                     // Hover to Pause
                     wrapper.addEventListener('mouseenter', () => {
                         isHovered = true;
                     });

                     // Touch Drag Events untuk Mobile
                     wrapper.addEventListener('touchstart', (e) => {
                         isDown = true;
                         startX = e.touches[0].pageX - wrapper.offsetLeft;
                         scrollLeft = wrapper.scrollLeft;
                         cancelAnimationFrame(autoScrollTimer);
                     });

                     wrapper.addEventListener('touchend', () => {
                         isDown = false;
                         startAutoScroll();
                     });

                     wrapper.addEventListener('touchmove', (e) => {
                         if (!isDown) return;
                         const x = e.touches[0].pageX - wrapper.offsetLeft;
                         const walk = (x - startX) * 1.5;
                         wrapper.scrollLeft = scrollLeft - walk;

                         const halfWidth = wrapper.scrollWidth / 2;
                         if (wrapper.scrollLeft >= halfWidth) {
                             wrapper.scrollLeft -= halfWidth;
                         } else if (wrapper.scrollLeft <= 0) {
                             wrapper.scrollLeft += halfWidth;
                         }
                     });

                     // Mulai auto-scroll pertama kali
                     startAutoScroll();
                 }
             }
         });

          // Drag & Auto-Scroll untuk Survei Kepuasan (Testimoni)
          document.addEventListener('DOMContentLoaded', () => {
              const wrapper = document.querySelector('.survey-wrapper');
              if (wrapper) {
                  const track = wrapper.querySelector('.survey-track');
                  if (track && track.children.length > 0) {
                      let isDown = false;
                      let isHovered = false;
                      let startX;
                      let scrollLeft;
                      let autoScrollTimer;
                      const scrollSpeed = 0.45; // Sedikit lebih lambat agar mudah dibaca saat berjalan

                      function startAutoScroll() {
                          cancelAnimationFrame(autoScrollTimer);
                          function scroll() {
                              if (!isDown && !isHovered) {
                                  wrapper.scrollLeft += scrollSpeed;
                                  const halfWidth = wrapper.scrollWidth / 2;
                                  if (wrapper.scrollLeft >= halfWidth) {
                                      wrapper.scrollLeft -= halfWidth;
                                  }
                              }
                              autoScrollTimer = requestAnimationFrame(scroll);
                          }
                          autoScrollTimer = requestAnimationFrame(scroll);
                      }

                      // Mouse Drag Events
                      wrapper.addEventListener('mousedown', (e) => {
                          isDown = true;
                          wrapper.classList.add('active');
                          startX = e.pageX - wrapper.offsetLeft;
                          scrollLeft = wrapper.scrollLeft;
                          cancelAnimationFrame(autoScrollTimer);
                      });

                      wrapper.addEventListener('mouseleave', () => {
                          isDown = false;
                          isHovered = false;
                          wrapper.classList.remove('active');
                          startAutoScroll();
                      });

                      wrapper.addEventListener('mouseup', () => {
                          isDown = false;
                          wrapper.classList.remove('active');
                          startAutoScroll();
                      });

                      wrapper.addEventListener('mousemove', (e) => {
                          if (!isDown) return;
                          e.preventDefault();
                          const x = e.pageX - wrapper.offsetLeft;
                          const walk = (x - startX) * 1.5;
                          wrapper.scrollLeft = scrollLeft - walk;

                          const halfWidth = wrapper.scrollWidth / 2;
                          if (wrapper.scrollLeft >= halfWidth) {
                              wrapper.scrollLeft -= halfWidth;
                          } else if (wrapper.scrollLeft <= 0) {
                              wrapper.scrollLeft += halfWidth;
                          }
                      });

                      // Hover to Pause
                      wrapper.addEventListener('mouseenter', () => {
                          isHovered = true;
                      });

                      // Touch Drag Events untuk HP/Tablet
                      wrapper.addEventListener('touchstart', (e) => {
                          isDown = true;
                          startX = e.touches[0].pageX - wrapper.offsetLeft;
                          scrollLeft = wrapper.scrollLeft;
                          cancelAnimationFrame(autoScrollTimer);
                      });

                      wrapper.addEventListener('touchend', () => {
                          isDown = false;
                          startAutoScroll();
                      });

                      wrapper.addEventListener('touchmove', (e) => {
                          if (!isDown) return;
                          const x = e.touches[0].pageX - wrapper.offsetLeft;
                          const walk = (x - startX) * 1.5;
                          wrapper.scrollLeft = scrollLeft - walk;

                          const halfWidth = wrapper.scrollWidth / 2;
                          if (wrapper.scrollLeft >= halfWidth) {
                              wrapper.scrollLeft -= halfWidth;
                          } else if (wrapper.scrollLeft <= 0) {
                              wrapper.scrollLeft += halfWidth;
                          }
                      });

                      // Mulai auto-scroll pertama kali
                      startAutoScroll();
                  }
              }
          });
       </script>

    <script>
        // Reusable function to fetch data from the API
        async function fetchData(url, period) {
            try {
                const response = await fetch(`${url}?period=${period}`);
                if (!response.ok) {
                    throw new Error(`Error: ${response.statusText}`);
                }
                return await response.json();
            } catch (error) {
                console.error('API fetch error:', error);
                return [];
            }
        }

        // Set global Highcharts options for consistent design and brand font
        if (typeof Highcharts !== 'undefined') {
            Highcharts.setOptions({
                chart: {
                    style: {
                        fontFamily: 'Inter, sans-serif'
                    }
                },
                credits: {
                    enabled: false
                }
            });
        }

        async function renderStatistikPengunjung(year = new Date().getFullYear()) {
            try {
                const response = await fetch(`/api/monthly-visitor-data?year=${year}`);
                if (!response.ok) {
                    throw new Error('Failed to fetch data');
                }

                const data = await response.json();

                const categories = data.map(item => item.bulan);
                const seriesData = data.map(item => item.total_sessions);

                // Clear previous chart
                document.querySelector("#main-chart").innerHTML = "";

                const options = {
                    series: [{
                        name: "Jumlah Pengunjung",
                        data: seriesData
                    }],
                    chart: {
                        type: 'area',
                        height: 350,
                        zoom: {
                            enabled: false
                        },
                        fontFamily: 'Inter, sans-serif'
                    },
                    colors: ['#2563eb'],
                    dataLabels: {
                        enabled: false
                    },
                    stroke: {
                        curve: 'smooth',
                        width: 3
                    },
                    title: {
                        text: '',
                        align: 'left'
                    },
                    xaxis: {
                        categories: categories,
                        labels: {
                            style: {
                                fontFamily: 'Inter, sans-serif',
                                fontWeight: 500
                            }
                        }
                    },
                    yaxis: {
                        opposite: true,
                        labels: {
                            style: {
                                fontFamily: 'Inter, sans-serif'
                            }
                        }
                    },
                    legend: {
                        horizontalAlign: 'left',
                        fontFamily: 'Inter, sans-serif'
                    },
                    fill: {
                        type: 'gradient',
                        gradient: {
                            shade: 'light',
                            type: 'vertical',
                            shadeIntensity: 0.3,
                            gradientToColors: ['#60a5fa'],
                            inverseColors: false,
                            opacityFrom: 0.6,
                            opacityTo: 0.1,
                            stops: [0, 90]
                        }
                    }
                };

                // Initialize and render the chart
                const chart = new ApexCharts(document.querySelector("#main-chart"), options);
                chart.render();

                const totalVisitors = data.reduce((sum, item) => {
                    const sessionCount = parseInt(item.total_sessions, 10) || 0;
                    return sum + sessionCount;
                }, 0);

                const formattedVisitors = totalVisitors.toLocaleString('id-ID');
                const totalLabel = `<span class="fs-6 text-muted fw-normal">Total Pengunjung Tahun ${year}:</span> <span class="text-primary fw-bold ms-1">${formattedVisitors}</span>`;
                document.getElementById("total-pengunjung").innerHTML = totalLabel;

            } catch (error) {
                console.error('Error rendering statistik pengunjung:', error);
            }
        }



        // Render Stacked Bar Chart
        async function renderStackedBarChart(period) {
            const data = await fetchData('/api/chart-data/stacked-bar', period);
            const categories = data.map(item => item.peraturan);
            const berlaku = data.map(item => item.berlaku);
            const tidakBerlaku = data.map(item => item.tidak_berlaku);
            const dicabut = data.map(item => item.dicabut);

            const totalDokumen = berlaku.reduce((sum, val) => sum + val, 0) +
                                tidakBerlaku.reduce((sum, val) => sum + val, 0) +
                                dicabut.reduce((sum, val) => sum + val, 0);            let totalDokumenEl = document.querySelector("#total-dokumen");
            if(totalDokumenEl) {
                totalDokumenEl.innerText = totalDokumen.toLocaleString('id-ID');
            }

            Highcharts.chart('stacked-bar-chart', {
                chart: { type: 'bar', backgroundColor: 'transparent' },
                title: { text: '' }, // Removed duplicated title
                xAxis: {
                    categories,
                    title: { text: null },
                    labels: { style: { fontSize: '11px', fontWeight: '600' } }
                },
                yAxis: { min: 0, title: { text: 'Total', align: 'high' }, labels: { overflow: 'justify' } },
                tooltip: {
                    shared: true,
                    pointFormat: '<span style="color:{series.color}">\u25CF</span> {series.name}: <b>{point.y}</b><br/>'
                },
                plotOptions: {
                    bar: { dataLabels: { enabled: true }, borderRadius: 5 },
                    series: { stacking: 'normal' }
                },
                series: [
                    { name: 'Berlaku', color: '#10b981', data: berlaku },
                    { name: 'Tidak Berlaku', color: '#cbd5e1', data: tidakBerlaku },
                    { name: 'Dicabut', color: '#f43f5e', data: dicabut }
                ]
            });
        }

        async function renderViewDownloadChart(period) {
            const data = await fetchData('/api/chart-data/view-download', period);

            const categories = data.map(item => item.peraturan); // Extract 'peraturan' for categories
            const hitDownload = data.map(item => parseInt(item.hit_download)); // Convert 'hit_download' to integer
            const hitSee = data.map(item => parseInt(item.hit_see)); // Convert 'hit_see' to integer

            Highcharts.chart('view-download-chart', {
                chart: { type: 'bar', backgroundColor: 'transparent' },
                title: { text: '' }, // Removed duplicated title
                xAxis: {
                    categories,
                    title: { text: null },
                    labels: { style: { fontSize: '11px', fontWeight: '600' } }
                },
                yAxis: {
                    min: 0,
                    title: { text: 'Jumlah', align: 'high' },
                    labels: { overflow: 'justify' }
                },
                tooltip: {
                    shared: true,
                    pointFormat: '<span style="color:{series.color}">\u25CF</span> {series.name}: <b>{point.y}</b><br/>'
                },
                plotOptions: {
                    bar: { dataLabels: { enabled: true }, borderRadius: 5 },
                    series: { stacking: 'normal' }
                },
                series: [
                    { name: 'Diunduh', color: '#8b5cf6', data: hitDownload },
                    { name: 'Dilihat', color: '#f59e0b', data: hitSee }
                ]
            });
        }

        async function renderPieChart(period) {
            const data = await fetchData('/api/chart-data/pie-chart', period);

            Highcharts.chart('status-dokumen-chart', {
                chart: { type: 'pie', backgroundColor: 'transparent', custom: {} },
                title: { text: '' }, // Removed duplicated title
                tooltip: { pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>' },
                accessibility: { point: { valueSuffix: '%' } },
                plotOptions: {
                    pie: {
                        dataLabels: {
                            enabled: true,
                            format: '{point.name}: {point.percentage:.1f}%',
                            style: { fontWeight: '600', color: '#334155' }
                        },
                        borderRadius: 6,
                        innerSize: '70%'
                    }
                },
                series: [{
                    name: 'Persentase',
                    colorByPoint: true,
                    data
                }]
            });
        }

        async function renderSurveyChart(period) {
            const response = await fetch(`/api/survey-results?period=${period}`);
            const data = await response.json();

            // Pass the data to Highcharts
            Highcharts.chart('user-reviews-chart', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie',
                    backgroundColor: 'transparent'
                },
                title: {
                    text: ''
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                accessibility: {
                    point: {
                        valueSuffix: '%'
                    }
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '{point.name}: {point.percentage:.1f}%',
                            style: { fontWeight: '600', color: '#334155' }
                        },
                        showInLegend: true
                    }
                },
                series: [{
                    name: 'Reviews',
                    colorByPoint: true,
                    data: [
                        {
                            name: 'Negative',
                            color: '#cbd5e1',
                            y: data.negative
                        },
                        {
                            name: 'Neutral',
                            color: '#f59e0b',
                            y: data.neutral
                        },
                        {
                            name: 'Positive',
                            color: '#10b981',
                            y: data.positive
                        }
                    ]
                }]
            });
        }

        // Event listener for period selection
        document.getElementById('select-period').addEventListener('change', (event) => {
            const selectedPeriod = event.target.value;

            // Render charts with selected period
            renderStackedBarChart(selectedPeriod);
            renderViewDownloadChart(selectedPeriod);
            renderPieChart(selectedPeriod);
            renderSurveyChart(selectedPeriod);
        });
    </script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // 1. Logic Mengisi Dropdown Tahun Otomatis
        const yearSelect = document.getElementById('select-year-visitor');
        const currentYear = new Date().getFullYear();
        const startYear = 2020; // Tahun mulai sistem (bisa disesuaikan)

        // Loop dari tahun sekarang mundur ke startYear
        for (let i = currentYear; i >= startYear; i--) {
            let option = document.createElement('option');
            option.value = i;
            option.text = i;
            yearSelect.appendChild(option);
        }

        // 2. Event Listener saat Tahun Diganti
        yearSelect.addEventListener('change', function() {
            const selectedYear = this.value;
            // Panggil fungsi render ulang dengan parameter tahun
            renderStatistikPengunjung(selectedYear); 
        });

        // 3. Render Awal (Tahun Saat Ini)
        renderStatistikPengunjung(currentYear);
        
        // 4. Render Chart Lainnya (Periode 'all' sebagai default)
        renderStackedBarChart('all');
        renderViewDownloadChart('all');
        renderPieChart('all');
        renderSurveyChart('all');
    });
    </script>


<div id="popupLightbox" class="lightbox-overlay">
    <span class="lightbox-close">&times;</span>
    <img class="lightbox-content" id="imgFull">
</div>

<div id="imagePopup" class="popup-modal">
   <div class="popup-card">
      <button class="popup-close">&times;</button>

      <header class="popup-header">
         <div class="popup-header-content">
            <svg class="popup-info-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <h3 id="popupTitle">Maklumat Pelayanan</h3>
         </div>
      </header>

      <div class="popup-body">
         
         <div class="popup-slides">
                                    <div class="popup-slide active is-image-only" data-title="Maklumat Pelayanan">
               
                              <div class="popup-media">
                  <img src="https://jdih.bakamla.go.id/storage/01KGRTRAZQYPE2HWB9PQ148PQ2.png" class="zoomable-img">
                  <div class="zoom-hint">Klik untuk perbesar</div>
               </div>
                              
               
            </div>
                     </div>

               </div>
      
         </div>
</div>

<style>
/* --- STYLE TETAP SEPERTI SEBELUMNYA --- backdrop-filter: blur(5px);*/
.popup-modal { position: fixed; z-index: 100000; inset: 0; background: rgba(15, 23, 42, 0.75); display: none; align-items: center; justify-content: center; padding: 15px; }
.popup-modal.is-visible { display: flex; }
.popup-card { position: relative; width: 100%; max-width: 750px; background: #fff; border-radius: 16px; overflow: hidden; box-shadow: 0 25px 50px -12px rgba(0,0,0,0.6); animation: popupShow 0.4s cubic-bezier(0.34, 1.56, 0.64, 1); }
@keyframes popupShow { from { opacity: 0; transform: scale(0.95) translateY(10px); } to { opacity: 1; transform: scale(1) translateY(0); } }

/* --- HEADER --- */
.popup-header { padding: 12px 20px; background: #dc2626; color: #fff; }
.popup-header-content { display: flex; align-items: center; gap: 10px; }
.popup-info-icon { width: 24px; height: 24px; color: #fff; animation: pulseInfo 2s infinite; }
.popup-header h3 { margin: 0; font-size: 1.1rem; font-weight: 600; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }

/* --- BODY & LOGIKA BARU (IMAGE ONLY) --- */
.popup-body { padding: 20px; position: relative; min-height: 150px; }
.popup-slide { display: none; gap: 20px; align-items: flex-start; }
.popup-slide.active { display: flex; }

/* JIKA HANYA GAMBAR: Buat media ke tengah dan full */
.popup-slide.is-image-only { justify-content: center; align-items: center; }
.popup-slide.is-image-only .popup-media { flex: 0 0 100%; max-width: 600px; } /* Gambar lebih besar jika tanpa teks */

.popup-text { flex: 1; margin-bottom: 20px; }
.popup-content-inner { text-align: justify; line-height: 1.5; color: #334155; font-size: 0.95rem; }
.popup-content-inner b, .popup-content-inner strong { display: block; text-align: center; margin: 8px 0; color: #000; }

.popup-media { flex: 0 0 35%; border-radius: 10px; overflow: hidden; cursor: zoom-in; position: relative; border: 1px solid #eee; transition: 0.3s; }
.popup-media img { width: 100%; height: auto; display: block; object-fit: contain; }
.zoom-hint { position: absolute; bottom: 0; width: 100%; background: rgba(0,0,0,0.5); color: #fff; font-size: 9px; text-align: center; padding: 2px; }

/* Navigasi */
.popup-nav button { position: absolute; top: 50%; transform: translateY(-50%); background: rgba(220, 38, 38, 0.1); border: none; color: #dc2626; width: 30px; height: 30px; border-radius: 50%; cursor: pointer; font-size: 20px; z-index: 5; transition: 0.3s; }
.popup-nav button:hover { background: #dc2626; color: #fff; }
.popup-prev { left: 5px; }
.popup-next { right: 5px; }

/* Pojok Kanan Bawah Dots */
.popup-dots-container { position: absolute; bottom: 10px; right: 20px; display: flex; gap: 6px; z-index: 10; }
.popup-dot { width: 8px; height: 8px; border-radius: 50%; background: #e2e8f0; border: none; cursor: pointer; transition: 0.3s; padding: 0; }
.popup-dot.active { background: #dc2626; width: 20px; border-radius: 4px; }

.popup-footer { padding: 8px; background: #f8fafc; text-align: center; border-top: 1px solid #f1f5f9; }
.popup-counter { font-size: 11px; color: #64748b; font-weight: 500; }
.popup-close { position: absolute; top: 8px; right: 12px; background: none; border: none; color: #fff; font-size: 24px; cursor: pointer; z-index: 11; opacity: 0.8; }
.popup-cta { display: inline-block; background: #dc2626; color: #fff; padding: 8px 16px; border-radius: 6px; text-decoration: none; font-weight: 600; font-size: 13px; margin-top: 12px; }

/* Lightbox */
.lightbox-overlay { display: none; position: fixed; z-index: 100001; inset: 0; background: rgba(0,0,0,0.95); align-items: center; justify-content: center; }
.lightbox-overlay.show { display: flex; }
.lightbox-content { max-width: 95%; max-height: 90%; border-radius: 4px; }
.lightbox-close { position: absolute; top: 15px; right: 20px; color: #fff; font-size: 35px; cursor: pointer; }

@media (max-width: 600px) {
    .popup-slide.active { flex-direction: column; gap: 12px; }
    .popup-media { width: 100% !important; max-height: 350px; } /* Berikan tinggi lebih pada mobile jika hanya gambar */
    .popup-header h3 { font-size: 0.95rem; }
}
</style>

<script>
// Script tetap sama dengan logika navigasi dan zoom sebelumnya
document.addEventListener("DOMContentLoaded", function() {
    const modal = document.getElementById('imagePopup');
    const lightbox = document.getElementById('popupLightbox');
    const imgFull = document.getElementById('imgFull');
    if (!modal) return;
    setTimeout(() => { modal.classList.add('is-visible'); }, 500);
    modal.querySelector('.popup-close').onclick = () => modal.classList.remove('is-visible');
    modal.onclick = (e) => { if(e.target === modal) modal.classList.remove('is-visible'); };
    document.querySelectorAll('.zoomable-img').forEach(img => {
        img.onclick = () => { imgFull.src = img.src; lightbox.classList.add('show'); };
    });
    lightbox.onclick = () => lightbox.classList.remove('show');
    let current = 0;
    const slides = modal.querySelectorAll('.popup-slide');
    const dots = modal.querySelectorAll('.popup-dot');
    const titleHeader = document.getElementById('popupTitle');
    const counterText = modal.querySelector('.popup-counter');
    let autoPlay;
    function showSlide(index) {
        if(index >= slides.length) index = 0; if(index < 0) index = slides.length - 1;
        slides.forEach((s, i) => s.classList.toggle('active', i === index));
        dots.forEach((d, i) => d.classList.toggle('active', i === index));
        titleHeader.textContent = slides[index].dataset.title;
        if(counterText) counterText.textContent = `Halaman ${index + 1} dari ${slides.length}`;
        current = index;
    }
    function startAutoPlay() { if (slides.length > 1) { autoPlay = setInterval(() => { showSlide(current + 1); }, 6000); } }
    if (slides.length > 1) {
        modal.querySelector('.popup-next').onclick = () => { showSlide(current + 1); resetAutoPlay(); };
        modal.querySelector('.popup-prev').onclick = () => { showSlide(current - 1); resetAutoPlay(); };
        dots.forEach(dot => { dot.onclick = () => { showSlide(parseInt(dot.dataset.index)); resetAutoPlay(); }; });
        function resetAutoPlay() { clearInterval(autoPlay); startAutoPlay(); }
        startAutoPlay();
        modal.querySelector('.popup-card').onmouseenter = () => clearInterval(autoPlay);
        modal.querySelector('.popup-card').onmouseleave = () => startAutoPlay();
    }
});
</script>

<script type="text/javascript">
    function googleTranslateElementInit() {
        // 1. Cek & Render untuk DESKTOP
        var desktopDiv = document.getElementById('google_translate_element');
        if (desktopDiv) {
            new google.translate.TranslateElement({
                pageLanguage: 'id',
                includedLanguages: "id,en,fr,zh-CN",
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                autoDisplay: false
            }, 'google_translate_element');
        }

        // 2. Cek & Render untuk MOBILE
        var mobileDiv = document.getElementById('google_translate_mobile');
        if (mobileDiv) {
            new google.translate.TranslateElement({
                pageLanguage: 'id',
                includedLanguages: "id,en,fr,zh-CN",
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                autoDisplay: false
            }, 'google_translate_mobile');
        }
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<style>
    /* Menyembunyikan Logo Google & Top Bar */
    .goog-te-gadget-icon { display: none !important; }
    .goog-te-gadget-simple { background-color: transparent !important; border: none !important; padding: 0 !important; font-size: 14px; }
    .goog-te-banner-frame.skiptranslate { display: none !important; }
    body { top: 0px !important; }
    
    /* Styling Dropdown Bawaan Google agar pas di Mobile */
    #google_translate_mobile .goog-te-gadget-simple {
        width: 100%;
    }
</style>
   <script src="https://jdih.bakamla.go.id/vendor/livewire/livewire.min.js?id=38dc8241"   data-csrf="oPy2wlOmyS2vaDI5HetA7BA1pow6wp8oDqZBGcxq" data-update-uri="/livewire/update" data-navigate-once="true"></script>
</body>
</html>