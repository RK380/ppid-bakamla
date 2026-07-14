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
<!-- Page Title -->
    <div class="page-title" style="background-image:linear-gradient(rgb(199 199 199 / 50%), rgb(221 221 221 / 80%)),url('<?php echo e(asset('assets/img/bannerinfo.png')); ?>');background-size: cover;
      background-position: bottom;">
      <div class="heading" style="margin-top:100px">
        <div class="container" data-aos="fade-up">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Daftar Informasi</h1>
              <p class="mb-0" style="font-weight:500">Demi mewujudkan pelayanan informasi publik yang informatif, Badan Keamanan Laut (Bakamla) memberikan keterbukaan informasi yang optimal kepada lembaga maupun perorangan, seperti yang telah diamanahkan oleh negara</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs" data-aos="fade-up">
        <div class="container" data-aos="fade-up">
          <ol>
            <li><a href="/"><i class="bi bi-house"></i> Home</a></li>
            <li class="current">Daftar Informasi Publik Secara Berkala</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <div class="vision-section">
        <div style="width: 95%; max-width: 1305px; margin: 0 auto;">
            <div class="vision-card" data-aos="fade-up"> <div class="vision-header">
                    <div class="vision-icon-wrapper">
                        <i class="bi bi-info-circle vision-icon"></i>
                    </div>
                    <h1 class="vision-title">Daftar Informasi Publik Secara Berkala</h1>
                </div>
                <div class="vision-body">
                  <div class="container" data-aos="fade-up">
                    <div class="content-panel" style="padding:15px;background-color:#e5eeff;margin-bottom:5px;border-radius:10px;">
                      <div class="content-body-panel">
                        <div class="row">
                          <!-- Secara Berkala -->
                            <div class="container">
                                <div class="row">
                                    <div data-aos="fade-up" data-aos-delay="400" class="col-12">
                                        <table id="myDataTable" class="table table-striped" style="width:100%">
                                          <thead>
                                            <tr>
                                              <th rowspan="2">No.</th>
                                              <th rowspan="2">Ringkasan Isi Informasi</th>
                                              <th rowspan="2">Pejabat/Unit/Satker yang Menguasai Informasi</th>
                                              <th rowspan="2">PenanggungJawab Pembuatan atau Penerbitan Informasi</th>
                                              <th rowspan="2">Tempat dan Waktu Pembuatan</th>
                                              <th colspan="3" rowspan="1">Format Informasi yang Tersedia</th>
                                              <th rowspan="2">Jangka Waktu Penyimpanan atau Retensi Arsip</th>
                                            </tr>
                                            <tr>
                                              <th colspan="1" rowspan="1">Cetak</th>
                                              <th colspan="1" rowspan="1">Rekam</th>
                                              <th colspan="1" rowspan="1">Online</th>
                                            </tr>
                                          </thead>
                                            <tbody>                            
                                              <tr class="odd">
                                                <th scope="row">1.</th>
                                                <td class="breakline"><p style="font-weight:bold">Profil Badan Publik:</p> Informasi Tentang Kedudukan/Domisili/Alamat Lengkap;Ruang Lingkup Badan Keamanan Laut</td>
                                                <td class="breakline">Biro Umum/Humas</td>
                                                <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                <td class="breakline">Jakarta, 2025</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>Tidak Terbatas</td>
                                              </tr>                                  
                                              <tr class="even">
                                                <th scope="row">2.</th>
                                                <td class="breakline">Ringkasan Informasi Tentang Program dan/Kegiatan Yang Sedang Dijalankan Dalam Lingkup Bakamla RI</td>
                                                <td class="breakline">Biro Umum/Humas</td>
                                                <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                <td class="breakline">Jakarta, 2025</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>1 tahun</td>
                                              </tr>                                  
                                              <tr class="odd">
                                                <th scope="row">3.</th>
                                                <td class="breakline">Tugas dan fungsi Bakamla RI beserta kantor unit di bawahnya</td>
                                                <td class="breakline">Biro Umum/Humas</td>
                                                <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                <td class="breakline">Jakarta, 2025</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>1 tahun</td>
                                              </tr>                                  
                                              <tr class="even">
                                                <th scope="row">4.</th>
                                                <td class="breakline">Struktur organisasi, gambaran umum setiap satuan kerja, profil singkat pejabat struktural</td>
                                                <td class="breakline">Biro Ren & Org Biroum/Bag. Kepegawaian</td>
                                                <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                <td class="breakline">Jakarta, 2025</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>1 tahun</td>
                                              </tr>                                  
                                              <tr class="odd">
                                                <th scope="row">5.</th>
                                                <td class="breakline">Ringkasan Laporan Keuangan Yang Sekurang-Kurangnya Terdiri Atas:
                                                  1.	Rencana Dan Laporan Realisasi Anggaran
                                                  2.	Neraca Laporan Arus Kas Dan Catatan Atas Laporan Keuangan Yang Disusun Sesuai Dengan Standar Akuntansi Yang Berlaku Daftar Aset dan Investasi</td>
                                                <td class="breakline">Biroum/Bag. Keu</td>
                                                <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                <td class="breakline">Jakarta, 2025</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>1 tahun</td>
                                              </tr>                                  
                                              <tr class="even">
                                                <th scope="row">6.</th>
                                                <td class="breakline">Ringkasan Laporan Akses Informasi Publik Yang Sekurang Kurangnya Terdiri Atas:
                                                  1.	Jumlah Permohonan Informasi Publik Yang Diterima
                                                  2.	Waktu Yang Diperlukan Dalam Memenuhi Setiap Permohonan Informasi Publik
                                                  3.	Jumlah Permohonan Informasi Publik Yang Dikabulkan Baik Sebagian atau Seluruhnya dan Permohonan Informasi Publik Yang Ditolak
                                                  4.	Alasan Penolakan Permohonan
                                                  Informasi Publik
                                                  </td>
                                                <td class="breakline">Biroum/Bag. Humas</td>
                                                <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                <td class="breakline">Jakarta, 2025</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>1 tahun</td>
                                              </tr>                                  
                                              <tr class="odd">
                                                <th scope="row">7.</th>
                                                <td class="breakline">LHKPN bagi pejabat yang telah di periksa, diverfikasi dan dikirmkan oleh
                                                  KPK ke Bakamla RI</td>
                                                <td class="breakline">Biroum</td>
                                                <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                <td class="breakline">Jakarta, 2025</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>1 tahun</td>
                                              </tr>                                  
                                              <tr class="even">
                                                <th scope="row">8.</th>
                                                <td class="breakline">Informasi Tentang Penerimaan Peserta didik Praktek Kerja Lapangan (PKL) dalam Penyelenggaraan Pendidikan
                                                  dan Latihan</td>
                                                <td class="breakline">Biroum/Bag. Kepegawaian</td>
                                                <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                <td class="breakline">Jakarta, 2025</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>1 tahun</td>
                                              </tr>                                  
                                              <tr class="odd">
                                                <th scope="row">9.</th>
                                                <td class="breakline">Informasi Tentang Calon penerimaan pegawai, dan profil lengkap Pimpinan yang meliputi Nama, Sejarah Pendidikan, Sejarah Karir, Penghargaan
                                                  dan Sanksi Berat yang pernah diterima
                                                  </td>
                                                <td class="breakline">Biroum/Bag. Kepegawaian</td>
                                                <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                <td class="breakline">Jakarta, 2025</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>1 tahun</td>
                                              </tr>                                  
                                              <tr class="even">
                                                <th scope="row">10.</th>
                                                <td class="breakline">Ringkasan Informasi Tentang Kinerja Dalam Lingkup Badan Publik Berupa Narasi Tentang Realisasi Kegiatan Yang Telah Maupun Sedang Dijalankan Beserta Capaiannya
                                                  </td>
                                                <td class="breakline">Biroum/Bag. Kepegawaian</td>
                                                <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                <td class="breakline">Jakarta, 2025</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>1 tahun</td>
                                              </tr>                                  
                                              <tr class="odd">
                                                <th scope="row">11.</th>
                                                <td class="breakline">Informasi tentang Pengadaan Barang
                                                  dan Jasa                                    
                                                  </td>
                                                <td class="breakline">UKPBJ</td>
                                                <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                <td class="breakline">Jakarta, 2025</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>1 tahun</td>
                                              </tr>                                  
                                              <tr class="even">
                                                <th scope="row">12.</th>
                                                <td class="breakline">Hasil Survey Kepuasan Masyarakat melalui Jaringan Dokumentasi
                                                  Informasi Hukum                                                                        
                                                  </td>
                                                <td class="breakline">Direktorat Hukum</td>
                                                <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                <td class="breakline">Jakarta, 2025</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>1 tahun</td>
                                              </tr>                                  
                                              <tr class="even">
                                                <th scope="row">13.</th>
                                                <td class="breakline">Informasi Hak dan Tata cara
                                                  Penyalahgunaan Wewenang                                                                                                            
                                                  </td>
                                                <td class="breakline">Biro Umum</td>
                                                <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                <td class="breakline">Jakarta, 2025</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>1 tahun</td>
                                              </tr>                                  
                                              <tr class="odd">
                                                <th scope="row">14.</th>
                                                <td class="breakline">Informasi tentang Indeks Keamanan
                                                  Laut                                                                                                                                                
                                                  </td>
                                                <td class="breakline">Direktorat Kebijakan</td>
                                                <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                <td class="breakline">Jakarta, 2025</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>1 tahun</td>
                                              </tr>                                  
                                              <tr class="even">
                                                <th scope="row">15.</th>
                                                <td class="breakline">Informasi Mengenai Sarana dan
                                                  Prasarana di Lingkup Bakamal RI                                                                                                                                                                                    
                                                  </td>
                                                <td class="breakline">Biro Sarpras</td>
                                                <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                <td class="breakline">Jakarta, 2025</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>1 tahun</td>
                                              </tr>                                  
                                              <tr class="odd">
                                                <th scope="row">16.</th>
                                                <td class="breakline">Agenda Kerja Pimpinan                                                                                                                                                                                    
                                                  </td>
                                                <td class="breakline">Biro Umum</td>
                                                <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                <td class="breakline">Jakarta, 2025</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>1 tahun</td>
                                              </tr>                                  
                                              <tr class="odd">
                                                <th scope="row">17.</th>
                                                <td class="breakline">Laporan Hasil Naskah Kerja Sama                                                                                                                                                                                    
                                                  </td>
                                                <td class="breakline">Direktorat Kerja Sama</td>
                                                <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                <td class="breakline">Jakarta, 2025</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>1 tahun</td>
                                              </tr>                                  
                                              <tr class="odd">
                                                <th scope="row">18.</th>
                                                <td class="breakline">Informasi Publik tentang Kerja Sama
                                                  Luar Negeri                                                                                                                                                                                                                        
                                                  </td>
                                                <td class="breakline">Direktorat Kerja Sama</td>
                                                <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                <td class="breakline">Jakarta, 2025</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>1 tahun</td>
                                              </tr>                                  
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                          <!-- End Secara Berkala -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
  <?php $__env->startSection('scripts'); ?>
    <script>
    $(document).ready(function () {
        $('#myDataTable').DataTable({
            // responsive: true,
            // pagingType: "listbox"
        });
    });
    </script>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/aplikasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ppid/resources/views/halaman/daftarinfo/index.blade.php ENDPATH**/ ?>