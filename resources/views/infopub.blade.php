    <!-- Page Title -->
    <div class="page-title" style="background-image:linear-gradient(rgb(199 199 199 / 50%), rgb(221 221 221 / 80%)),url('{{ asset('assets/img/bannerinfo.png') }}');background-size: cover;
      background-position: bottom;">
      <div class="heading" style="margin-top:100px">
        <div class="container" data-aos="fade-up">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Informasi Publik</h1>
              <p class="mb-0" style="font-weight:500">Dapatkan informasi terbaru tentang perkembangan kejadian maritim, informasi keamanan laut, serta artikel mendalam yang membahas isu-isu penting seputar PPID BAKAMLA RI</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs" data-aos="fade-up">
        <div class="container" data-aos="fade-up">
          <ol>
            <li><a href="/"><i class="bi bi-house"></i> Home</a></li>
            <li class="current">{{ $klasifikasi?->klasifikasi ?? 'Informasi Publik' }}</li>
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
                        Daftar {{ $klasifikasi?->klasifikasi ?? 'Informasi Publik' }}
                    </h4>
                </div>
            </div>
        </div>
    </div>

    <div style="margin: 0 auto;" class="max-auto pb-4" id="list-document">
        <div class="row">
            {{-- Filter Desktop --}}
            <div class="col-lg-4 d-none d-lg-block">
                <div class="card filter-card">
                    <div class="filter-header">
                        <h3 class="filter-title">
                            <i class="bi bi-funnel filter-icon"></i> Filter Dokumen
                        </h3>
                        <a href="{{ route('infopub',$klasifikasi?->uuid) }}"
                        class="btn-reset">
                            <i class="bi bi-arrow-counterclockwise"></i>
                            Reset
                        </a>
                    </div>
                    <form method="GET" action="{{ route('infopub', $klasifikasi?->uuid) }}">
                        <div class="filter-body">
                            {{-- Cari Dokumen --}}
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Cari Dokumen</label>

                                <input
                                    type="text"
                                    name="search"
                                    class="form-control"
                                    placeholder="Masukkan Judul Dokumen..."
                                    value="{{ request('search') }}">
                            </div>

                            {{-- Tahun --}}
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Tahun</label>

                                <select name="tahun" class="form-select">
                                    <option value="">Semua Tahun</option>

                                    @foreach($tahunList as $tahun)
                                        <option
                                            value="{{ $tahun }}"
                                            {{ request('tahun')==$tahun?'selected':'' }}>
                                            {{ $tahun }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Urutan --}}
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Urutkan</label>
                                <select name="sort" class="form-select">
                                    <option value="terbaru"
                                    {{ request('sort')=='terbaru'?'selected':'' }}>
                                        Terbaru
                                    </option>

                                    <option value="terlama"
                                    {{ request('sort')=='terlama'?'selected':'' }}>
                                        Terlama
                                    </option>

                                    <option value="az"
                                    {{ request('sort')=='az'?'selected':'' }}>
                                        Judul A-Z
                                    </option>

                                    <option value="za"
                                    {{ request('sort')=='za'?'selected':'' }}>
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

            {{-- Filter Mobile --}}
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
                    <form method="GET" action="{{ route('infopub', $klasifikasi?->uuid) }}">
                        <div class="filter-body">
                            {{-- Cari Dokumen --}}
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Cari Dokumen</label>

                                <input
                                    type="text"
                                    name="search"
                                    class="form-control"
                                    placeholder="Masukkan Judul Dokumen..."
                                    value="{{ request('search') }}">
                            </div>

                            {{-- Tahun --}}
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Tahun</label>

                                <select name="tahun" class="form-select">
                                    <option value="">Semua Tahun</option>

                                    @foreach($tahunList as $tahun)
                                        <option
                                            value="{{ $tahun }}"
                                            {{ request('tahun')==$tahun?'selected':'' }}>
                                            {{ $tahun }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Urutan --}}
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Urutkan</label>
                                <select name="sort" class="form-select">
                                    <option value="terbaru"
                                    {{ request('sort')=='terbaru'?'selected':'' }}>
                                        Terbaru
                                    </option>

                                    <option value="terlama"
                                    {{ request('sort')=='terlama'?'selected':'' }}>
                                        Terlama
                                    </option>

                                    <option value="az"
                                    {{ request('sort')=='az'?'selected':'' }}>
                                        Judul A-Z
                                    </option>

                                    <option value="za"
                                    {{ request('sort')=='za'?'selected':'' }}>
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

            {{-- Daftar Dokumen --}}
            <div class="col-lg-8 col-12">
                @forelse ($documents as $item)
                <div class="card-modern mb-4">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-md-2 col-3">
                                <div class="doc-thumb-wrapper">
                                    @if($item->thumbnail)
                                    <img src="{{ asset($item->thumbnail) }}"
                                        class="img-fluid rounded shadow-sm"
                                        style="height:120px;width:90px;object-fit:cover;">
                                    @else
                                    <img src="{{ asset('assets/img/pdf.png') }}"
                                        class="img-fluid">
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-10 col-9 ps-md-4 d-flex flex-column justify-content-center">
                                
                                <div class="badge-group">
                                    <span class="custom-badge berlaku">
                                        <i class="bi bi-check-circle ph-fill"></i> HUMAS
                                    </span>
                                    <span class="custom-badge tidak-berlaku">
                                        <i class="bi bi-file-earmark ph-fill"></i> {{ pathinfo(storage_path().$item->file, PATHINFO_EXTENSION) }}
                                    </span>
                                    <span class="custom-badge jenis">
                                        <i class="bi bi-file-text"></i> {{ $item->klasifikasi->klasifikasi }}
                                    </span>
                                    <span class="custom-badge status-info">
                                        <i class="bi bi-download ph-fill"></i> <a href="{{ route('download.infopub', $item->uuid) }}" target="_blank"> Download </a>
                                    </span>
                                </div>

                                <a href="#" class="doc-title-link">
                                    {{ $item->judul }}
                                </a>

                                <div class="meta-row">
                                    <div class="meta-item">
                                        <i class="bi bi-calendar text-secondary"></i>
                                        <span>
                                            @php
                                                $created_at = $item->created_at;
                                                \Carbon\Carbon::setLocale('id');
                                            @endphp
                                            @if ($created_at)
                                                {{ $created_at->translatedFormat('d F Y, H:i') }}
                                            @else
                                                -
                                            @endif
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
                @empty
                
                <div class="empty-state-wrapper">
                    <i class="ph-magnifying-glass empty-icon"></i>
                    <h5 class="fw-bold text-dark mb-2">Dokumen Tidak Ditemukan</h5>
                    <p class="text-muted mb-0">Maaf, kami tidak dapat menemukan dokumen yang Anda cari.<br>Silakan coba kata kunci lain atau reset filter.</p>
                </div>

                @endforelse

                <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mt-4">
                    <div class="text-muted small mb-3 mb-md-0">
                        @if($documents->count() > 0)
                            Menampilkan
                            <b>{{ $documents->firstItem() }}-{{ $documents->lastItem() }}</b>
                            dari
                            <b>{{ $documents->total() }}</b>
                            Dokumen
                        @else
                            Menampilkan <b>0</b> Dokumen
                        @endif
                    </div>
                    <div class="pagination-container">
                        <ul class="pagination m-0">

                            {{-- Previous --}}
                            <li class="page-item {{ $documents->onFirstPage() ? 'disabled' : '' }}">
                                <a class="page-link"
                                href="{{ $documents->previousPageUrl() }}">
                                    <i class="bi bi-caret-left"></i>
                                </a>
                            </li>

                            {{-- Nomor Halaman --}}
                            @for($i = 1; $i <= $documents->lastPage(); $i++)
                                <li class="page-item {{ $documents->currentPage() == $i ? 'active' : '' }}">
                                    <a class="page-link"
                                    href="{{ $documents->url($i) }}">
                                        {{ $i }}
                                    </a>
                                </li>
                            @endfor

                            {{-- Next --}}
                            <li class="page-item {{ !$documents->hasMorePages() ? 'disabled' : '' }}">
                                <a class="page-link"
                                href="{{ $documents->nextPageUrl() }}">
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
@include('layouts/aplikasi')