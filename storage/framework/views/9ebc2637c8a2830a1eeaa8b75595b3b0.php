<?php $__env->startSection('style'); ?>
<style>
    #mySetiapSaat {
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
            <li class="current">Daftar Informasi Publik Setiap Saat</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->
    <div class="vision-section">
        <div style="width: 95%; max-width: 1305px; margin: 0 auto;">
            <div class="vision-card" data-aos="fade-up"> <div class="vision-header">
                    <div class="vision-icon-wrapper">
                        <i class="bi bi-infinity vision-icon"></i>
                    </div>
                    <h1 class="vision-title">Daftar Informasi Publik Serta Merta</h1>
                </div>
                <div class="vision-body">
                  <div class="container" data-aos="fade-up">
                    <div class="content-panel" style="padding:15px;background-color:#e5eeff;margin-bottom:5px;border-radius:10px;">
                    <div class="content-body-panel">
                        <div class="row">

                        <!-- Serta Merta -->
                            <div class="container">
                                <div class="row">
                                    <div data-aos="fade-up" data-aos-delay="400" class="col-12">
                                        <table id="mySetiapSaat" class="table table-striped" style="width:100%">
                                        <thead>
                                            <tr>
                                            <th rowspan="2">No.</th>
                                            <th rowspan="2">Ringkasan Isi Informasi</th>
                                            <th rowspan="2">Pejabat/Unit/Satker yang Menguasi Informasi</th>
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
                                                <td class="breakline"><p style="font-weight:bold">Daftar Informasi Publik</p></td>
                                                <td class="breakline">Pejabat Pengelola Informasi dan
                                                    Dokumentasi</td>
                                                <td class="breakline">Pejabat Pengelola Informasi dan
                                                    Dokumentasi</td>
                                                <td class="breakline">Jakarta, 2025</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>1 tahun</td>
                                            </tr>                                  
                                            <tr class="even">
                                                <th scope="row">2.</th>
                                                <td class="breakline">Informasi Tentang Peraturan, Keputusan Dan/Atau Kebijakan Badan Publik Yang Sekurang-Kurangnya Terdiri Atas:
                                                    1)	Dokumen Pendukung Seperti Naskah Akademis, Kajian atau Pertimbangan Yang Mendasari Terbitnya Peraturan, Keputusan Atau Kebijakan Tersebut
                                                    2)	Masukan-Masukan Dari Berbagai Pihak atas Peraturan, Keputusan atau Kebijakan Tersebut
                                                    3)	Risalah Rapat Dari Proses Pembentukan Peraturan, Keputusan atau Kebijakan Tersebut
                                                    4)	Rancangan Peraturan, Keputusan atau Kebijakan Tersebut
                                                    5)	Tahap Perumusan Peraturan, Keputusan atau Kebijakan Tersebut
                                                    6)	Peraturan, Keputusan dan/atau Kebijakan Yang Telah Diterbitkan</td>
                                                <td class="breakline">Biro Ren/Org</td>
                                                <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                <td class="breakline">Jakarta, 2025</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>1 tahun</td>
                                            </tr>                                  
                                            <tr class="odd">
                                                <th scope="row">3.</th>
                                                <td class="breakline">Laporan Tahunan Bakamla RI</td>
                                                <td class="breakline">Biro Ren/Org</td>
                                                <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                <td class="breakline">Jakarta, 2025</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>1 tahun</td>
                                            </tr>                                  
                                            <tr class="even">
                                                <th scope="row">4.</th>
                                                <td class="breakline">Surat-Surat Perjanjian Dengan Pihak Ketiga Berikut Dokumen
                                                    Pendukungnya</td>
                                                <td class="breakline">UKPBJ</td>
                                                <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                <td class="breakline">Jakarta, 2025</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>1 tahun</td>
                                            </tr>                                  
                                            <tr class="odd">
                                                <th scope="row">5.</th>
                                                <td class="breakline">Surat Menyurat Pimpinan atau Pejabat Badan Publik Dalam Rangka Pelaksanaan Tugas Pokok Dan Fungsinya</td>
                                                <td class="breakline">Biro Umum TU & Rumga</td>
                                                <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                <td class="breakline">Jakarta, 2025</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>1 tahun</td>
                                            </tr>    
                                            <tr class="even">
                                                <th scope="row">6.</th>
                                                <td class="breakline">Syarat-Syarat Perizinan, Izin Yang Diterbitkan dan/atau Dikeluarkan Berikut Dokumen Pendukungnya, dan Laporan Penaatan Izin Yang Diberikan</td>
                                                <td class="breakline"></td>
                                                <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                <td class="breakline">Jakarta, 2025</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>1 tahun</td>
                                            </tr>   
                                            <tr class="odd">
                                                <th scope="row">7.</th>
                                                <td class="breakline">Data Perbendaharaan atau Inventaris</td>
                                                <td class="breakline">Biro Sarpras/BMN</td>
                                                <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                <td class="breakline">Jakarta, 2025</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>1 tahun</td>
                                            </tr>
                                            <tr class="even">
                                                <th scope="row">8.</th>
                                                <td class="breakline">Rencana Strategis dan Rencana Kerja
                                                    Badan Publik</td>
                                                <td class="breakline">Biro Ren&Org</td>
                                                <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                <td class="breakline">Jakarta, 2025</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>5 tahun</td>
                                            </tr>
                                            <tr class="odd">
                                                <th scope="row">9.</th>
                                                <td class="breakline">Agenda Kerja Pimpinan Satuan Kerja</td>
                                                <td class="breakline">Biroum/Bag Tu Kepala</td>
                                                <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                <td class="breakline">Jakarta, 2025</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>1 tahun</td>
                                            </tr>
                                            <tr class="even">
                                                <th scope="row">10.</th>
                                                <td class="breakline">Jumlah, Jenis, dan Gambaran Umum Pelanggaran Yang Ditemukan Dalam Pengawasan Internal Serta Laporan
                                                    Penindakannya</td>
                                                <td class="breakline">Inspektorat</td>
                                                <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                <td class="breakline">Jakarta, 2025</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>1 tahun</td>
                                            </tr>
                                            <tr class="odd">
                                                <th scope="row">11.</th>
                                                <td class="breakline">Jumlah, Jenis, dan Gambaran Umum Pelanggaran Yang Dilaporkan Oleh Masyarakat Serta Laporan Penindakannya</td>
                                                <td class="breakline">UPH</td>
                                                <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                <td class="breakline">Jakarta, 2025</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>1 tahun</td>
                                            </tr>
                                            <tr class="even">
                                                <th scope="row">12.</th>
                                                <td class="breakline">Daftar Serta Hasil-Hasil Penelitian
                                                    Yang Dilakukan</td>
                                                <td class="breakline">Jakstra/Litbang</td>
                                                <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                <td class="breakline">Jakarta, 2025</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>1 tahun</td>
                                            </tr>
                                            <tr class="odd">
                                                <th scope="row">13.</th>
                                                <td class="breakline">Informasi Publik Lain Yang Telah Dinyatakan Terbuka Bagi Masyarakat Berdasarkan Mekanisme Keberatan
                                                    dan/atau Penyelesaian Sengketa</td>
                                                <td class="breakline"></td>
                                                <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                <td class="breakline">Jakarta, 2025</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>1 tahun</td>
                                            </tr>
                                            <tr class="even">
                                                <th scope="row">14.</th>
                                                <td class="breakline">Informasi	Tentang Standar Pengumuman Informasi Bagi Badan Publik Yang Memberikan Izin dan/dtau Melakukan Perjanjian Kerja Dengan Pihak Lain Yang Kegiatannya Berpotensi Mengancam Hajat Hidup Orang Banyak
                                                    Dan Ketertiban Umum</td>
                                                <td class="breakline">Inhuker/Kerma</td>
                                                <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                <td class="breakline">Jakarta, 2025</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>1 tahun</td>
                                            </tr>
                                            <tr class="odd">
                                                <th scope="row">15.</th>
                                                <td class="breakline">Informasi dan Kebijakan Yang Disampaikan Pejabat Publik Dalam Pertemuan Yang Terbuka Untuk Umum</td>
                                                <td class="breakline">Jakstra/ bag.Kebijakan</td>
                                                <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                <td class="breakline">Jakarta, 2025</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>√</td>
                                                <td>1 tahun</td>
                                            </tr>
                                            <tr class="even">
                                                <th scope="row">16.</th>
                                                <td class="breakline">Laporan Tahunan Setiap Unit
                                                    Kerja Bakamla RI</td>
                                                <td class="breakline">Biro Ren&Org</td>
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
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

<section id="values" class="values section" style="background-image:linear-gradient(rgba(255,255,255,0.5), rgba(255,255,255,0.5)),url('<?php echo e(asset('assets/img/bg-original.jpg')); ?>');background-size: cover;
    background-position: center;">
    <div class="container section-title" data-aos="fade-up">
        <p>Daftar Informasi</p>
        <h2>Demi mewujudkan pelayanan informasi publik yang informatif, Badan Keamanan Laut (Bakamla) memberikan keterbukaan informasi yang optimal kepada lembaga maupun perorangan, seperti yang telah diamanahkan oleh negara.<br></h2>
    </div><!-- End Section Title -->
    <!-- Serta Merta -->
        <div class="container" data-aos="fade-up">
            <div class="content-panel" style="padding:15px;background-color:#f5f5f5;margin-bottom:5px;border-radius:10px;">
            <div class="content-body-panel">
                <div class="row">

                <!-- Serta Merta -->
                    <div class="container">
                        <h5 data-aos="fade-up" data-aos-delay="400" style="text-align: center">Daftar Informasi Publik Setiap Saat</h5>
                        <div class="row">
                            <div data-aos="fade-up" data-aos-delay="400" class="col-12">
                                <table id="mySetiapSaat" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                    <th rowspan="2">No.</th>
                                    <th rowspan="2">Ringkasan Isi Informasi</th>
                                    <th rowspan="2">Pejabat/Unit/Satker yang Menguasi Informasi</th>
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
                                        <td class="breakline"><p style="font-weight:bold">Daftar Informasi Publik</p></td>
                                        <td class="breakline">Pejabat Pengelola Informasi dan
                                            Dokumentasi</td>
                                        <td class="breakline">Pejabat Pengelola Informasi dan
                                            Dokumentasi</td>
                                        <td class="breakline">Jakarta, 2025</td>
                                        <td>√</td>
                                        <td>√</td>
                                        <td>√</td>
                                        <td>1 tahun</td>
                                    </tr>                                  
                                    <tr class="even">
                                        <th scope="row">2.</th>
                                        <td class="breakline">Informasi Tentang Peraturan, Keputusan Dan/Atau Kebijakan Badan Publik Yang Sekurang-Kurangnya Terdiri Atas:
                                            1)	Dokumen Pendukung Seperti Naskah Akademis, Kajian atau Pertimbangan Yang Mendasari Terbitnya Peraturan, Keputusan Atau Kebijakan Tersebut
                                            2)	Masukan-Masukan Dari Berbagai Pihak atas Peraturan, Keputusan atau Kebijakan Tersebut
                                            3)	Risalah Rapat Dari Proses Pembentukan Peraturan, Keputusan atau Kebijakan Tersebut
                                            4)	Rancangan Peraturan, Keputusan atau Kebijakan Tersebut
                                            5)	Tahap Perumusan Peraturan, Keputusan atau Kebijakan Tersebut
                                            6)	Peraturan, Keputusan dan/atau Kebijakan Yang Telah Diterbitkan</td>
                                        <td class="breakline">Biro Ren/Org</td>
                                        <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                        <td class="breakline">Jakarta, 2025</td>
                                        <td>√</td>
                                        <td>√</td>
                                        <td>√</td>
                                        <td>1 tahun</td>
                                    </tr>                                  
                                    <tr class="odd">
                                        <th scope="row">3.</th>
                                        <td class="breakline">Laporan Tahunan Bakamla RI</td>
                                        <td class="breakline">Biro Ren/Org</td>
                                        <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                        <td class="breakline">Jakarta, 2025</td>
                                        <td>√</td>
                                        <td>√</td>
                                        <td>√</td>
                                        <td>1 tahun</td>
                                    </tr>                                  
                                    <tr class="even">
                                        <th scope="row">4.</th>
                                        <td class="breakline">Surat-Surat Perjanjian Dengan Pihak Ketiga Berikut Dokumen
                                            Pendukungnya</td>
                                        <td class="breakline">UKPBJ</td>
                                        <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                        <td class="breakline">Jakarta, 2025</td>
                                        <td>√</td>
                                        <td>√</td>
                                        <td>√</td>
                                        <td>1 tahun</td>
                                    </tr>                                  
                                    <tr class="odd">
                                        <th scope="row">5.</th>
                                        <td class="breakline">Surat Menyurat Pimpinan atau Pejabat Badan Publik Dalam Rangka Pelaksanaan Tugas Pokok Dan Fungsinya</td>
                                        <td class="breakline">Biro Umum TU & Rumga</td>
                                        <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                        <td class="breakline">Jakarta, 2025</td>
                                        <td>√</td>
                                        <td>√</td>
                                        <td>√</td>
                                        <td>1 tahun</td>
                                    </tr>    
                                    <tr class="even">
                                        <th scope="row">6.</th>
                                        <td class="breakline">Syarat-Syarat Perizinan, Izin Yang Diterbitkan dan/atau Dikeluarkan Berikut Dokumen Pendukungnya, dan Laporan Penaatan Izin Yang Diberikan</td>
                                        <td class="breakline"></td>
                                        <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                        <td class="breakline">Jakarta, 2025</td>
                                        <td>√</td>
                                        <td>√</td>
                                        <td>√</td>
                                        <td>1 tahun</td>
                                    </tr>   
                                    <tr class="odd">
                                        <th scope="row">7.</th>
                                        <td class="breakline">Data Perbendaharaan atau Inventaris</td>
                                        <td class="breakline">Biro Sarpras/BMN</td>
                                        <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                        <td class="breakline">Jakarta, 2025</td>
                                        <td>√</td>
                                        <td>√</td>
                                        <td>√</td>
                                        <td>1 tahun</td>
                                    </tr>
                                    <tr class="even">
                                        <th scope="row">8.</th>
                                        <td class="breakline">Rencana Strategis dan Rencana Kerja
                                            Badan Publik</td>
                                        <td class="breakline">Biro Ren&Org</td>
                                        <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                        <td class="breakline">Jakarta, 2025</td>
                                        <td>√</td>
                                        <td>√</td>
                                        <td>√</td>
                                        <td>5 tahun</td>
                                    </tr>
                                    <tr class="odd">
                                        <th scope="row">9.</th>
                                        <td class="breakline">Agenda Kerja Pimpinan Satuan Kerja</td>
                                        <td class="breakline">Biroum/Bag Tu Kepala</td>
                                        <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                        <td class="breakline">Jakarta, 2025</td>
                                        <td>√</td>
                                        <td>√</td>
                                        <td>√</td>
                                        <td>1 tahun</td>
                                    </tr>
                                    <tr class="even">
                                        <th scope="row">10.</th>
                                        <td class="breakline">Jumlah, Jenis, dan Gambaran Umum Pelanggaran Yang Ditemukan Dalam Pengawasan Internal Serta Laporan
                                            Penindakannya</td>
                                        <td class="breakline">Inspektorat</td>
                                        <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                        <td class="breakline">Jakarta, 2025</td>
                                        <td>√</td>
                                        <td>√</td>
                                        <td>√</td>
                                        <td>1 tahun</td>
                                    </tr>
                                    <tr class="odd">
                                        <th scope="row">11.</th>
                                        <td class="breakline">Jumlah, Jenis, dan Gambaran Umum Pelanggaran Yang Dilaporkan Oleh Masyarakat Serta Laporan Penindakannya</td>
                                        <td class="breakline">UPH</td>
                                        <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                        <td class="breakline">Jakarta, 2025</td>
                                        <td>√</td>
                                        <td>√</td>
                                        <td>√</td>
                                        <td>1 tahun</td>
                                    </tr>
                                    <tr class="even">
                                        <th scope="row">12.</th>
                                        <td class="breakline">Daftar Serta Hasil-Hasil Penelitian
                                            Yang Dilakukan</td>
                                        <td class="breakline">Jakstra/Litbang</td>
                                        <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                        <td class="breakline">Jakarta, 2025</td>
                                        <td>√</td>
                                        <td>√</td>
                                        <td>√</td>
                                        <td>1 tahun</td>
                                    </tr>
                                    <tr class="odd">
                                        <th scope="row">13.</th>
                                        <td class="breakline">Informasi Publik Lain Yang Telah Dinyatakan Terbuka Bagi Masyarakat Berdasarkan Mekanisme Keberatan
                                            dan/atau Penyelesaian Sengketa</td>
                                        <td class="breakline"></td>
                                        <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                        <td class="breakline">Jakarta, 2025</td>
                                        <td>√</td>
                                        <td>√</td>
                                        <td>√</td>
                                        <td>1 tahun</td>
                                    </tr>
                                    <tr class="even">
                                        <th scope="row">14.</th>
                                        <td class="breakline">Informasi	Tentang Standar Pengumuman Informasi Bagi Badan Publik Yang Memberikan Izin dan/dtau Melakukan Perjanjian Kerja Dengan Pihak Lain Yang Kegiatannya Berpotensi Mengancam Hajat Hidup Orang Banyak
                                            Dan Ketertiban Umum</td>
                                        <td class="breakline">Inhuker/Kerma</td>
                                        <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                        <td class="breakline">Jakarta, 2025</td>
                                        <td>√</td>
                                        <td>√</td>
                                        <td>√</td>
                                        <td>1 tahun</td>
                                    </tr>
                                    <tr class="odd">
                                        <th scope="row">15.</th>
                                        <td class="breakline">Informasi dan Kebijakan Yang Disampaikan Pejabat Publik Dalam Pertemuan Yang Terbuka Untuk Umum</td>
                                        <td class="breakline">Jakstra/ bag.Kebijakan</td>
                                        <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                        <td class="breakline">Jakarta, 2025</td>
                                        <td>√</td>
                                        <td>√</td>
                                        <td>√</td>
                                        <td>1 tahun</td>
                                    </tr>
                                    <tr class="even">
                                        <th scope="row">16.</th>
                                        <td class="breakline">Laporan Tahunan Setiap Unit
                                            Kerja Bakamla RI</td>
                                        <td class="breakline">Biro Ren&Org</td>
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
                </div>
            </div>
            </div>
        </div>
    <!-- End Serta Merta -->
</section>
  <?php $__env->startSection('scripts'); ?>
    <script>
    $(document).ready(function () {
        $('#mySetiapSaat').DataTable({
            // responsive: true,
            // pagingType: "listbox"
        });
    });
    </script>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/aplikasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /var/www/html/ppid/resources/views/halaman/daftarinfo/infopss.blade.php ENDPATH**/ ?>