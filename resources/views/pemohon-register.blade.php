<style>
        #tautan {
            border-top: 1px solid #ffffff;
        }

        .survey-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            padding: 40px;
            margin-bottom: 40px;
            border: 1px solid #f0f0f0;
        }

        .form-label {
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
        }

        .form-control,
        .form-select {
            padding: 10px 15px;
            border-radius: 8px;
            border: 1px solid #dee2e6;
            transition: all 0.3s ease;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #E74C3C;
            box-shadow: 0 0 0 0.2rem rgba(231, 76, 60, 0.25);
        }

        /* Styling untuk Radio Button Rating */
        .rating-group {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .rating-input {
            display: none;
        }

        .rating-label {
            cursor: pointer;
            padding: 10px 20px;
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            transition: all 0.2s ease;
            text-align: center;
            flex: 1;
            min-width: 120px;
            font-size: 14px;
        }

        .rating-input:checked+.rating-label {
            background-color: #E74C3C;
            color: white;
            border-color: #E74C3C;
            font-weight: bold;
            transform: translateY(-2px);
            box-shadow: 0 4px 6px rgba(231, 76, 60, 0.2);
        }

        .rating-label:hover {
            background-color: #ffecec;
            border-color: #E74C3C;
        }

        .title {
            font-size: 1.1rem;
            font-weight: 700;
            color: #E74C3C;
            margin-bottom: 20px;
            border-bottom: 2px solid #f0f0f0;
            padding-bottom: 10px;
            margin-top: 20px;
        }

        .btn-submit-custom {
            background: #E74C3C;
            border: none;
            padding: 12px 40px;
            border-radius: 8px;
            font-weight: 600;
            transition: background 0.3s;
            width: 100%;
        }

        .btn-submit-custom:hover:not(:disabled) {
            background: #c0392b;
        }

        .btn-submit-custom:disabled {
            background: #e0e0e0;
            color: #999;
        }
</style>
<!-- Services Section -->
<section id="services" class="services section" style="margin-top: 20px;">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2 style="margin-top: 60px;">Pelayanan</h2>
      <p>Permohonan Informasi Publik<br></p>
    </div><!-- End Section Title -->
    <h5 style="text-align:center;" data-aos="fade-up">PILIH KATEGORI PEMOHON</h5>

    <div class="container" data-aos="fade-up">
      <div class="content-panel" style="padding:15px;background-color:#f5f5f5;margin-bottom:5px;border-radius:10px;">
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
                      </div>
                  </div>
              </div>
      
              <section id="stats" class="stats section">
                <div class="container">
                  <div class="row gy-4">
                    <div class="row1" id="stats">
                      <div style="margin: 0 auto;" class="max-auto">
                          <div class="row">
                            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="300" >
                                  <a href="https://ppid.bakamla.go.id/daftar-informasi-publik/" class="card-stat stat-peraturan" data-asw-org-font-size="16" style="font-size: 16px;">
                                      <div class="stat-icon-box">
                                        <i class="bi bi-person-plus"></i>
                                      </div>
                                      <div class="stat-content">
                                        <h3 class="stat-title" data-asw-org-font-size="15" style="font-size: 15px;">Total Pengguna</h3>
                                        <p class="stat-number" data-asw-org-font-size="30" style="font-size: 30px;">{{ $jumlahKlasifikasi['Informasi Publik Secara Berkala'] ?? 0 }}</p>
                                      </div>
                                  </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="400" >
                                  <a href="https://ppid.bakamla.go.id/daftar-informasi-publik/" class="card-stat stat-monografi" data-asw-org-font-size="16" style="font-size: 16px;">
                                      <div class="stat-icon-box">
                                        <i class="bi bi-person-vcard"></i>
                                      </div>
                                      <div class="stat-content">
                                        <h3 class="stat-title" data-asw-org-font-size="15" style="font-size: 15px;">Lembaga/Instansi</h3>
                                        <p class="stat-number" data-asw-org-font-size="30" style="font-size: 30px;"> {{ $jumlahKlasifikasi['Informasi Publik Serta Merta'] ?? 0 }}</p>
                                      </div>
                                  </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="500" >
                                  <a href="https://ppid.bakamla.go.id/daftar-informasi-publik/" class="card-stat stat-putusan" data-asw-org-font-size="16" style="font-size: 16px;">
                                      <div class="stat-icon-box">
                                        <i class="bi bi-person"></i>
                                      </div>
                                      <div class="stat-content">
                                        <h3 class="stat-title" data-asw-org-font-size="15" style="font-size: 15px;">Perorangan</h3>
                                        <p class="stat-number" data-asw-org-font-size="30" style="font-size: 30px;">{{ $jumlahKlasifikasi['Informasi Publik Setiap Saat'] ?? 0 }}</p>
                                      </div>
                                  </a>
                            </div>
                        </div>
                    </div>
                  </div>
                  </div>
                </div>
              </section>
      </div>
    </div>
</section>
<div class="row" id="survey" style="background-image: url('{{ asset('/assets/img/hero-bg.png') }}')">
                <div style="width: 90%; max-width: 1000px; margin: 0 auto;" class="max-auto">
                    <div class="row mb-4 text-center">
                        <h1 class="header-warta-berita" style="font-size: 2rem; margin-top: 20px;">Kontak Kami</h1>
                        <p class="text-muted">Partisipasi Anda sangat berharga bagi peningkatan layanan kami.</p>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="survey-card">
                                
                                {{-- MENAMPILKAN PESAN ERROR JIKA ADA (PENTING UNTUK DEBUGGING) --}}
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul class="mb-0">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                {{-- FORM KEAMANAN TINGGI --}}
                                <form method="POST" action="{{ route('pesan.store') }}" id="secureForm" enctype="application/x-www-form-urlencoded">
                                    @csrf

                                    <h4 class="title"><i class="bi bi-person me-2"></i> Data Responden</h4>
                                    <div class="row g-4 mb-4">
                                        <div class="col-md-6">
                                          <div class="mb-3">
                                              <label for="nama" class="form-label">Nama Lengkap</label>
                                              <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                                  id="nama" name="nama" value="{{ old('nama') }}" placeholder="Masukkan nama Anda" required>
                                          </div>
                                        </div>
                                        <div class="col-md-6">
                                          <div class="mb-3">
                                              <label for="email" class="form-label">Alamat Email</label>
                                              <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                  id="email" name="email" value="{{ old('email') }}" placeholder="contoh@email.com" required>
                                          </div>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label for="isi" class="form-label">Tuliskan masukan Anda di sini</label>
                                        <textarea class="form-control @error('isi') is-invalid @enderror" id="isi" name="isi" rows="4"
                                            placeholder="Hubungi Kami jika ada yang ingin ditanyakan..." required>{{ old('isi') }}</textarea>
                                    </div>

                                    <div class="d-flex flex-column align-items-center">
                                        <div class="g-recaptcha mb-4" data-sitekey="6Lcc1pcqAAAAABQZ_FFCIDXkyiVhHD5YrCoXutmi" data-callback="enableBtn"></div>

                                        <button disabled="disabled" id="submit-btn" type="submit" class="btn-submit-custom btn btn-lg text-white shadow">
                                            <i class="bi bi-send me-2"></i> Kirim Pesan
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
@include('layouts/aplikasi')