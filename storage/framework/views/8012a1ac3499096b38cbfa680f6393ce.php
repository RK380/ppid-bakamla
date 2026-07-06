<?php $__env->startSection('style'); ?>
<style>
    #myDataTable {
        font-size: 13px;
    }

    .dataTables_length {
        font-size: 13px;
    }

    .dataTables_filter {
        font-size: 13px;
    }

    .dataTables_info {
        font-size: 13px;
    }

    .dataTables_paginate {
        font-size: 13px;
    }
</style>
<?php $__env->stopSection(); ?>

    <!-- Page Title -->
    <div class="page-title" style="background-image:linear-gradient(rgb(199 199 199 / 50%), rgb(221 221 221 / 80%)),url('<?php echo e(asset('assets/img/bg-original.jpg')); ?>');background-size: cover;
      background-position: center;">
      <div class="heading" style="margin-top:100px">
        <div class="container" data-aos="fade-up">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Informasi Publik</h1>
              <p class="mb-0">Dapatkan informasi terbaru tentang perkembangan kejadian maritim, informasi keamanan laut, serta artikel mendalam yang membahas isu-isu penting seputar PPID BAKAMLA RI</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs" data-aos="fade-up">
        <div class="container" data-aos="fade-up">
          <ol>
            <li><a href="/">Home</a></li>
            <li class="current"><?php echo e($klasifikasi?->klasifikasi ?? 'Informasi Publik'); ?></li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->
    

    <div class="container" data-aos="fade-up">
    <style>
        /* --- STYLE CARD DOKUMEN --- */
        .card-modern {
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
            transition: all 0.3s ease;
            background: #fff;
            overflow: hidden;
            position: relative;
        }

        .card-modern:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border-color: #E74C3C;
        }

        /* Thumbnail Wrapper */
        .doc-thumb-wrapper {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            min-height: 130px;
        }

        /* Judul Dokumen */
        .doc-title-link {
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            font-size: 1.1rem;
            color: #1e293b;
            text-decoration: none;
            line-height: 1.5;
            display: block;
            margin-bottom: 15px;
            transition: color 0.2s;
        }

        .doc-title-link:hover {
            color: #E74C3C;
        }

        /* --- BADGE STATUS & JENIS (FULL COLOR & ICON) --- */
        .badge-group {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 12px;
        }

        /* Base Style untuk Badge */
        .custom-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 6px 14px;
            border-radius: 6px;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #ffffff;
            line-height: 1;
            text-align: center;
            gap: 6px; /* Jarak antara Icon dan Teks */
        }

        /* Ikon di dalam Badge */
        .custom-badge i {
            font-size: 1rem;
        }

        /* Warna Status */
        .custom-badge.berlaku {
            background-color: #2ECC71; /* Hijau */
        }

        .custom-badge.tidak-berlaku {
            background-color: #E74C3C; /* Merah */
        }
        
        .custom-badge.status-info {
            background-color: #95a5a6; /* Abu-abu */
        }

        /* Warna Jenis Dokumen */
        .custom-badge.jenis {
            background-color: #34495e; /* Dark Blue */
        }

        /* Meta Data */
        .meta-row {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 20px;
            font-size: 0.85rem;
            color: #64748b;
            border-top: 1px dashed #e2e8f0;
            padding-top: 12px;
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 6px;
            font-weight: 500;
        }

        /* --- STYLE PINNED DOCUMENTS --- */
        .pinned-card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            background: #fff;
            overflow: hidden;
        }

        .pinned-header {
            background-color: #fff;
            border-bottom: 2px solid #f1f5f9;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .pinned-title {
            font-weight: 800;
            color: #334155;
            margin: 0;
            font-size: 1rem;
            text-transform: uppercase;
        }

        .pinned-list-item {
            position: relative;
            padding: 15px 20px;
            border-bottom: 1px solid #f1f5f9;
            transition: all 0.2s;
            display: flex;
            align-items: start;
            gap: 12px;
        }

        .pinned-list-item:hover {
            background-color: #fcfcfc;
            border-left: 4px solid #E74C3C;
            padding-left: 16px;
        }

        .pinned-icon-wrapper {
            background-color: #fef2f2; /* Merah sangat muda */
            color: #E74C3C;
            width: 32px;
            height: 32px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .pinned-link {
            text-decoration: none;
            color: #334155;
            font-size: 0.95rem;
            font-weight: 600;
            line-height: 1.4;
        }

        .pinned-link:hover {
            color: #E74C3C;
        }

        /* --- EMPTY STATE (TIDAK DITEMUKAN) --- */
        .empty-state-wrapper {
            text-align: center;
            padding: 60px 20px;
            background-color: #fff;
            border-radius: 16px;
            border: 1px dashed #cbd5e1;
        }
        .empty-icon {
            font-size: 64px;
            color: #cbd5e1;
            margin-bottom: 20px;
        }

        /* --- PAGINATION KOTAK --- */
        .pagination .page-item .page-link {
            border-radius: 6px !important;
            margin: 0 3px;
            border: 1px solid #e2e8f0;
            color: #334155;
            width: 38px;
            height: 38px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 0.9rem;
        }

        .pagination .page-item.active .page-link {
            background-color: #E74C3C;
            border-color: #E74C3C;
            color: white;
            box-shadow: 0 4px 6px rgba(231, 76, 60, 0.2);
        }
        
        /* Tombol Bahasa */
        .btn-lang {
            border: 1px solid #E74C3C;
            padding: 6px 16px;
            border-radius: 6px;
            font-size: 0.9rem;
            font-weight: 500;
            transition: all 0.3s;
            background: transparent;
            color: #E74C3C;
        }

        .btn-lang.active {
            background: #E74C3C;
            color: #ffffff;
        }

        #filter-dokumen {
            /* Mengaktifkan fitur Sticky */
            position: -webkit-sticky; /* Untuk Safari */
            position: sticky;
            
            /* Jarak berhenti dari atas layar. 
            Ubah angka 120px ini sesuai tinggi Navbar Anda. 
            Jika Navbar tinggi, naikkan angkanya (misal 140px). */
            top: 120px; 
            
            /* Pastikan z-index di bawah Navbar tapi di atas konten biasa */
            z-index: 900; 
            
            /* Transisi halus (opsional) */
            transition: top 0.3s ease;
        }

        /* Mempercantik Card Filter */
        .filter-card {
            border: none;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05); /* Bayangan halus */
            background-color: #fff;
            overflow: hidden;
        }

        .filter-header {
            padding: 20px;
            border-bottom: 1px solid #f1f5f9;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #ffffff;
        }

        .filter-title {
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            font-size: 16px;
            color: #1e293b;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .btn-reset {
            font-size: 12px;
            font-weight: 600;
            color: #E74C3C;
            background: #fee2e2;
            border: none;
            padding: 5px 12px;
            border-radius: 20px;
            transition: all 0.2s;
        }

        .btn-reset:hover {
            background: #E74C3C;
            color: white;
        }

        .filter-body {
            padding: 20px;
        }

        /* Style Input & Select agar lebih modern */
        .form-select, .form-control {
            border-radius: 10px;
            border: 1px solid #e2e8f0;
            padding: 10px 15px;
            font-size: 14px;
            color: #334155;
            margin-bottom: 15px; /* Jarak antar item */
            transition: all 0.2s;
        }

        .form-select:focus, .form-control:focus {
            border-color: #E74C3C;
            box-shadow: 0 0 0 3px rgba(231, 76, 60, 0.1);
        }
        
        .filter-icon {
            color: #64748b;
            font-size: 18px;
        }
    </style>

    <div class="row mt-4 mb-4 align-items-center" id="tampilkan-dokumen">
        <div style="margin: 0 auto;">
            <div class="d-flex justify-content-between flex-wrap gap-3">
                <div class="d-flex align-items-center">
                    <h4 class="m-0 fw-bold" style="color: #2c3e50; border-left: 5px solid #E74C3C; padding-left: 15px;">
                        Daftar <?php echo e($klasifikasi?->klasifikasi ?? 'Informasi Publik'); ?>

                    </h4>
                </div>
            </div>
        </div>
    </div>

    <div style="margin: 0 auto;" class="max-auto pb-4" id="list-document">
        <div class="row">
            
            <div class="col-lg-4 d-none d-lg-block">
                <div class="card filter-card">
                    <div class="filter-header">
                        <h3 class="filter-title">
                            <i class="bi bi-funnel filter-icon"></i> Filter Dokumen
                        </h3>
                        <a href="<?php echo e(route('infopub',$klasifikasi?->uuid)); ?>"
                        class="btn-reset">
                            <i class="bi bi-arrow-counterclockwise"></i>
                            Reset
                        </a>
                    </div>
                    <form method="GET" action="<?php echo e(route('infopub', $klasifikasi?->uuid)); ?>">
                        <div class="filter-body">
                            
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Cari Dokumen</label>

                                <input
                                    type="text"
                                    name="search"
                                    class="form-control"
                                    placeholder="Masukkan Judul Dokumen..."
                                    value="<?php echo e(request('search')); ?>">
                            </div>

                            
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Tahun</label>

                                <select name="tahun" class="form-select">
                                    <option value="">Semua Tahun</option>

                                    <?php $__currentLoopData = $tahunList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tahun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option
                                            value="<?php echo e($tahun); ?>"
                                            <?php echo e(request('tahun')==$tahun?'selected':''); ?>>
                                            <?php echo e($tahun); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Urutkan</label>
                                <select name="sort" class="form-select">
                                    <option value="terbaru"
                                    <?php echo e(request('sort')=='terbaru'?'selected':''); ?>>
                                        Terbaru
                                    </option>

                                    <option value="terlama"
                                    <?php echo e(request('sort')=='terlama'?'selected':''); ?>>
                                        Terlama
                                    </option>

                                    <option value="az"
                                    <?php echo e(request('sort')=='az'?'selected':''); ?>>
                                        Judul A-Z
                                    </option>

                                    <option value="za"
                                    <?php echo e(request('sort')=='za'?'selected':''); ?>>
                                        Judul Z-A
                                    </option>
                                </select>
                            </div>
                            <button class="btn btn-primary w-100">
                                <i class="bi bi-search"></i>
                                Cari
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            
            <div class="col-12 d-lg-none mb-3">
                <div class="card filter-card">
                    <div class="filter-header">
                        <h3 class="filter-title">
                            <i class="bi bi-funnel filter-icon"></i> Filter Dokumen
                        </h3>
                        <button type="submit" class="btn-reset">
                            <i class="bi bi-arrow-counterclockwise"></i> Reset
                        </button>
                    </div>
                    <form method="GET" action="<?php echo e(route('infopub', $klasifikasi?->uuid)); ?>">
                        <div class="filter-body">
                            
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Cari Dokumen</label>

                                <input
                                    type="text"
                                    name="search"
                                    class="form-control"
                                    placeholder="Masukkan Judul Dokumen..."
                                    value="<?php echo e(request('search')); ?>">
                            </div>

                            
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Tahun</label>

                                <select name="tahun" class="form-select">
                                    <option value="">Semua Tahun</option>

                                    <?php $__currentLoopData = $tahunList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tahun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option
                                            value="<?php echo e($tahun); ?>"
                                            <?php echo e(request('tahun')==$tahun?'selected':''); ?>>
                                            <?php echo e($tahun); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Urutkan</label>
                                <select name="sort" class="form-select">
                                    <option value="terbaru"
                                    <?php echo e(request('sort')=='terbaru'?'selected':''); ?>>
                                        Terbaru
                                    </option>

                                    <option value="terlama"
                                    <?php echo e(request('sort')=='terlama'?'selected':''); ?>>
                                        Terlama
                                    </option>

                                    <option value="az"
                                    <?php echo e(request('sort')=='az'?'selected':''); ?>>
                                        Judul A-Z
                                    </option>

                                    <option value="za"
                                    <?php echo e(request('sort')=='za'?'selected':''); ?>>
                                        Judul Z-A
                                    </option>
                                </select>
                            </div>
                            <button class="btn btn-primary w-100">
                                <i class="bi bi-search"></i>
                                Cari
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            
            <div class="col-lg-8 col-12">
                <?php $__empty_1 = true; $__currentLoopData = $documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="card-modern mb-4">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-md-2 col-3">
                                <div class="doc-thumb-wrapper">
                                    <?php if($item->thumbnail): ?>
                                    <img src="<?php echo e(asset($item->thumbnail)); ?>"
                                        class="img-fluid rounded shadow-sm"
                                        style="height:120px;width:90px;object-fit:cover;">
                                    <?php else: ?>
                                    <img src="<?php echo e(asset('assets/img/pdf.png')); ?>"
                                        class="img-fluid">
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="col-md-10 col-9 ps-md-4 d-flex flex-column justify-content-center">
                                
                                <div class="badge-group">
                                    <span class="custom-badge berlaku">
                                        <i class="bi bi-check-circle ph-fill"></i> HUMAS
                                    </span>
                                    <span class="custom-badge tidak-berlaku">
                                        <i class="bi bi-file-earmark ph-fill"></i> <?php echo e(pathinfo(storage_path().$item->file, PATHINFO_EXTENSION)); ?>

                                    </span>
                                    <span class="custom-badge jenis">
                                        <i class="bi bi-file-text"></i> <?php echo e($item->klasifikasi->klasifikasi); ?>

                                    </span>
                                    <span class="custom-badge status-info">
                                        <i class="bi bi-download ph-fill"></i> <a href="<?php echo e(route('download.infopub', $item->uuid)); ?>" target="_blank"> Download </a>
                                    </span>
                                </div>

                                <a href="#" class="doc-title-link">
                                    <?php echo e($item->judul); ?>

                                </a>

                                <div class="meta-row">
                                    <div class="meta-item">
                                        <i class="bi bi-calendar text-secondary"></i>
                                        <span>
                                            <?php
                                                $created_at = $item->created_at;
                                                \Carbon\Carbon::setLocale('id');
                                            ?>
                                            <?php if($created_at): ?>
                                                <?php echo e($created_at->translatedFormat('d F Y, H:i')); ?>

                                            <?php else: ?>
                                                -
                                            <?php endif; ?>
                                        </span>
                                    </div>
                                    
                                    <div class="meta-item ms-md-3">
                                        <i class="bi bi-download text-secondary"></i>
                                        <span>100</span>
                                    </div>
                                    
                                    <div class="meta-item ms-md-3">
                                        <i class="bi bi-eye text-secondary"></i>
                                        <span>2300</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                
                <div class="empty-state-wrapper">
                    <i class="ph-magnifying-glass empty-icon"></i>
                    <h5 class="fw-bold text-dark mb-2">Dokumen Tidak Ditemukan</h5>
                    <p class="text-muted mb-0">Maaf, kami tidak dapat menemukan dokumen yang Anda cari.<br>Silakan coba kata kunci lain atau reset filter.</p>
                </div>

                <?php endif; ?>

                <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mt-4">
                    <div class="text-muted small mb-3 mb-md-0">
                        <?php if($documents->count() > 0): ?>
                            Menampilkan
                            <b><?php echo e($documents->firstItem()); ?>-<?php echo e($documents->lastItem()); ?></b>
                            dari
                            <b><?php echo e($documents->total()); ?></b>
                            Dokumen
                        <?php else: ?>
                            Menampilkan <b>0</b> Dokumen
                        <?php endif; ?>
                    </div>
                    <div class="pagination-container">
                        <ul class="pagination m-0">

                            
                            <li class="page-item <?php echo e($documents->onFirstPage() ? 'disabled' : ''); ?>">
                                <a class="page-link"
                                href="<?php echo e($documents->previousPageUrl()); ?>">
                                    <i class="bi bi-caret-left"></i>
                                </a>
                            </li>

                            
                            <?php for($i = 1; $i <= $documents->lastPage(); $i++): ?>
                                <li class="page-item <?php echo e($documents->currentPage() == $i ? 'active' : ''); ?>">
                                    <a class="page-link"
                                    href="<?php echo e($documents->url($i)); ?>">
                                        <?php echo e($i); ?>

                                    </a>
                                </li>
                            <?php endfor; ?>

                            
                            <li class="page-item <?php echo e(!$documents->hasMorePages() ? 'disabled' : ''); ?>">
                                <a class="page-link"
                                href="<?php echo e($documents->nextPageUrl()); ?>">
                                    <i class="bi bi-caret-right"></i>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $__env->make('layouts/aplikasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ppid/resources/views/infopub.blade.php ENDPATH**/ ?>