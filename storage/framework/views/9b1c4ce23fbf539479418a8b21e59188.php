<?php $__env->startSection('style'); ?>
<style>
    #myDikecualikan {
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
            <li class="current">Daftar Informasi Publik Dikecualikan</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->
    <div class="vision-section">
        <div style="width: 95%; max-width: 1305px; margin: 0 auto;">
            <div class="vision-card" data-aos="fade-up"> <div class="vision-header">
                    <div class="vision-icon-wrapper">
                        <i class="bi bi-dash-circle vision-icon"></i>
                    </div>
                    <h1 class="vision-title">Daftar Informasi Publik Dikecualikan</h1>
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
                                            <table id="myDikecualikan" class="table table-striped" style="width:100%">
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
                                                    <td class="breakline">Data Penanganan Jaringan</td>
                                                    <td class="breakline">UU NO 14 Tahun 2008 tentang Keterbukaan Informasi	Publik, Pasal 17 huruf c angka 6 : Informasi  Publik  yang apabila dibuka dan diberikan kepada pemohon informasi dapat membahayakan pertahanan dan keamanan Negara, yaitu:
                                                        6. Sistem persandian Negara</td>
                                                    <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                    <td class="breakline">Jakarta, 2025</td>
                                                    <td>√</td>
                                                    <td>√</td>
                                                    <td>√</td>
                                                    <td>Selama Berlaku</td>
                                                </tr>                                  
                                                <tr class="even">
                                                    <th scope="row">2.</th>
                                                    <td class="breakline">Data Penanganan Masalah Absensi</td>
                                                    <td class="breakline">1.	UU NO 14 Tahun 2008 tentang Keterbukaan Informasi Publik, Pasal 17 huruf c angka 6 : Informasi Publik yang apabila dibuka dan diberikan kepada pemohon 	informasi dapat membahayakan pertahanan dan keamanan  Negara,  yaitu: 6. Sistem persandian Negara
                                                        2.	UU Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik huruf h yaitu informasi Publik Apabila dibuka dan diberikan kepada pemohon informasi	publik dapat mengungkap rahasia pribadi
                                                        </td>
                                                    <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                    <td class="breakline">Jakarta, 2025</td>
                                                    <td>√</td>
                                                    <td>√</td>
                                                    <td>√</td>
                                                    <td>Selama Berlaku</td>
                                                </tr>                                  
                                                <tr class="odd">
                                                    <th scope="row">3.</th>
                                                    <td class="breakline">Username dan Password yang dikelola oleh Bakamla RI</td>
                                                    <td class="breakline">UU NO 14 Tahun 2008 tentang Keterbukaan Informasi	Publik, Pasal 17 huruf c angka 6 : Informasi  Publik  yang    apabila dibuka  dan  diberikan  kepada pemohon informasi dapat membahayakan pertahanan dan keamanan Negara, yaitu:
                                                        6. Sistem persandian Negara</td>
                                                    <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                    <td class="breakline">Jakarta, 2025</td>
                                                    <td>√</td>
                                                    <td>√</td>
                                                    <td>√</td>
                                                    <td>Selama Berlaku</td>
                                                </tr>                                  
                                                <tr class="even">
                                                    <th scope="row">4.</th>
                                                    <td class="breakline">Topologi Jaringan Data Center</td>
                                                    <td class="breakline">UU NO 14 Tahun 2008 tentang Keterbukaan Informasi	Publik, Pasal 17 huruf c angka 6 : Informasi  Publik  yang    apabila dibuka  dan  diberikan  kepada pemohon informasi	dapat membahayakan pertahanan dan keamanan Negara, yaitu:
                                                        6. Sistem persandian Negara</td>
                                                    <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                    <td class="breakline">Jakarta, 2025</td>
                                                    <td>√</td>
                                                    <td>√</td>
                                                    <td>√</td>
                                                    <td>Selama Berlaku</td>
                                                </tr>                                  
                                                <tr class="odd">
                                                    <th scope="row">5.</th>
                                                    <td class="breakline">Kebijakan Pengelolaan Jaringan</td>
                                                    <td class="breakline">UU NO 14 Tahun 2008 tentang Keterbukaan Informasi Publik, Pasal 17 huruf b: Informasi Publik yang apabila dibuka kepada pemohon informasi publik dapat kepentingan perlindungan hak atas kekayaan intelektual dan
                                                        perlindungan usaha tidak sehat</td>
                                                    <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                    <td class="breakline">Jakarta, 2025</td>
                                                    <td>√</td>
                                                    <td>√</td>
                                                    <td>√</td>
                                                    <td>Selama Berlaku</td>
                                                </tr>  
                                                <tr class="even">
                                                    <th scope="row">6.</th>
                                                    <td class="breakline">Data Server Virtual</td>
                                                    <td class="breakline">UU NO 14 Tahun 2008 tentang Keterbukaan Informasi	Publik, Pasal 17 huruf c angka 6 : Informasi  Publik  yang    apabila dibuka  dan  diberikan kepada pemohon informasi dapat membahayakan pertahanan dan keamanan Negara, yaitu:
                                                        6. Sistem persandian Negara</td>
                                                    <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                    <td class="breakline">Jakarta, 2025</td>
                                                    <td>√</td>
                                                    <td>√</td>
                                                    <td>√</td>
                                                    <td>Selama Berlaku</td>
                                                </tr>
                                                <tr class="odd">
                                                    <th scope="row">7.</th>
                                                    <td class="breakline">Hasil Pemetaan talenta dan Penilaian Kompetensi Pegawai</td>
                                                    <td class="breakline">UU Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik huruf h angka 4 yaitu informasi Publik Apabila dibuka dan diberikan kepada pemohon informasi	publik dapat mengungkap rahasia pribadi yaitu hasil-hasil    evaluasi    sehubungan dengan kapabilitas, ntelektualitas, dan rekomendasi kemampuan seseorang.</td>
                                                    <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                    <td class="breakline">Jakarta, 2025</td>
                                                    <td>√</td>
                                                    <td>√</td>
                                                    <td>√</td>
                                                    <td>Selama Berlaku</td>
                                                </tr>   
                                                <tr class="even">
                                                    <th scope="row">8.</th>
                                                    <td class="breakline">Dokumentasi Baperjakat</td>
                                                    <td class="breakline">UU Nomor 14 Tahun 2008 tentang Keterbukaan informasi Publik huruf h angka 4 yaitu informasi Publik Apabila dibuka dan diberikan kepada pemohon informasi	publik dapat mengungkap rahasia pribadi yaitu hasil-hasil evaluasi sehubungan dengan kapabilitas, intelektualitas, dan rekomendasi</td>
                                                    <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                    <td class="breakline">Jakarta, 2025</td>
                                                    <td>√</td>
                                                    <td>√</td>
                                                    <td>√</td>
                                                    <td>Selama Berlaku</td>
                                                </tr>
                                                <tr class="odd">
                                                    <th scope="row">9.</th>
                                                    <td class="breakline">Surat Keputusan Sanksi / Penjatuhan Hukuman Disiplin yang pernah diterima</td>
                                                    <td class="breakline">UU Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik huruf h angka 5: Informasi Publik yang apabila dibuka dan diberikan kepada pemohon informasi Publik dapat mengungkap rahasia pribadi, yaitu catatan yang menyangkut pribadi seseorang yang berkaitan dengan kegiatan satuan pendikan formal dan
                                                        satuan pendidikan non-formal</td>
                                                    <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                    <td class="breakline">Jakarta, 2025</td>
                                                    <td>√</td>
                                                    <td>√</td>
                                                    <td>√</td>
                                                    <td>Selama Berlaku</td>
                                                </tr>    
                                                <tr class="even">
                                                    <th scope="row">10.</th>
                                                    <td class="breakline">Data Rekam Medis ASN Bakamla RI</td>
                                                    <td class="breakline">UU Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik huruf h angka 2: informasi publik yang apabila dibuka dan diberikan kepada pemohon informasi Publik dapat mengungkap rahasia pribadi, yaitu riwayat, kondisi, dan perawatan, pengobatan kesehatan fisik dan psikis seseorang.</td>
                                                    <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                    <td class="breakline">Jakarta, 2025</td>
                                                    <td>√</td>
                                                    <td>√</td>
                                                    <td>√</td>
                                                    <td>Selama Berlaku</td>
                                                </tr>  
                                                <tr class="odd">
                                                    <th scope="row">11.</th>
                                                    <td class="breakline">Dokumen Proses Evaluasi dan seleksi Pemberian Program beasiswa, pelatihan dan sertifikasi berbasis SKKNI</td>
                                                    <td class="breakline">UU Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik
                                                        UU Nomor 43 Tahun 2009 Tentang Kearsipan, Pasal 44, Ayat 1 huruf h: Pencipta Arsip dapat menutup akses   atas   arsip   dengan   alasan apabila arsip dibuka untuk umum
                                                        Dapat mengungkapkan rahasia atau data pribadi</td>
                                                    <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                    <td class="breakline">Jakarta, 2025</td>
                                                    <td>√</td>
                                                    <td>√</td>
                                                    <td>√</td>
                                                    <td>Selama Berlaku</td>
                                                </tr>   
                                                <tr class="even">
                                                    <th scope="row">12.</th>
                                                    <td class="breakline">Laporan Hasil Pemantauan & Evaluasi Tindak Lanjut Hasil Pengawasan (Audit, Reviu, Monitoring, Evaluasi, Konsultasi, Pendampingan)</td>
                                                    <td class="breakline">UU No 14 Tahun 2008 tentang Keterbukaan Informasi Publik, Pasal 17, huruf I : Memorandum atau surat-surat anatar badan publik atau intra public, yang menurut sifatnya dirahasiakan kecuali atas putusan komisi informasi atau pengadilan
                                                        UU No 14 Tahun 2008 tentang Keterbukaan Informasi Publik, Pasal 17, huruf j : informasi yang tidak boleh	diungkapkan berdasarkan undang-undang yaitu: UU NO 43 Taahun 2009 tentang Kearsipan, pasal 44, ayat 1 huruf h: pencipta arsip dapat menutup akses atas arsip dengan alasan apabila arsip dibuka untuk umum dapat mengungkapkan rahasia
                                                        atau data pribadi</td>
                                                    <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                    <td class="breakline">Jakarta, 2025</td>
                                                    <td>√</td>
                                                    <td>√</td>
                                                    <td>√</td>
                                                    <td>Selama Berlaku</td>
                                                </tr>
                                                <tr class="odd">
                                                    <th scope="row">13.</th>
                                                    <td class="breakline">Daftar alokasi Frekuensi dan Penggunaan Frekuensi untuk Keperluan Pertahanan dan Keamanan Negara (TNI/Polri) dan intelijen</td>
                                                    <td class="breakline">UU No 14 Tahun 2008 tentang Keterbukaan Informasi Publik, Pasal 17, huruf c bahwa informasi public yang apabila dibuka dan diberikan kepada pemohon informasi	public dapat membahayakan pertahanan dan keamanan negara, yaitu:
                                                        1. Informasi tentang Strategi, Intelijen, Operasi, Taktik dan Teknik yang berkaitan dengan penyelenggaraan system pertahanan dan keamanan negara, meliputi perencanaan, pelaksanaan dan pengakhiran atau    evaluasi    dalam    kaitan
                                                        dengan   ancaman   dari   dalam dan luar negeri.
                                                        2.	Jumlah, Komposisi, Disposisi, atau dislokasi kekuatan dan kemampuan dalam penyelenggaraan pertahananan dan keamanan negara serta rencana pengembangannya
                                                        3.	Gambar dan data tentang situasi dan keadaan pangkalan dan/atau instansi militer.
                                                        4.	System persandian negara, dan/atau
                                                        System intelijen negara
                                                        </td>
                                                    <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                    <td class="breakline">Jakarta, 2025</td>
                                                    <td>√</td>
                                                    <td>√</td>
                                                    <td>√</td>
                                                    <td>Selama Berlaku</td>
                                                </tr>
                                                <tr class="even">
                                                    <th scope="row">14.</th>
                                                    <td class="breakline">Mou dan PKS yang memuat Klausa dirahasiakan</td>
                                                    <td class="breakline">UU NO 14 Tahun 2008 tentang Keterbukaan Informasi Publik Pasal 17 huruf i : memorandum atau surat-surat antar badan public yang sifatnya dirahasiakan kecuali atas putusan Komisi Informasi
                                                        Publik atau Pengadilan.</td>
                                                    <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                                    <td class="breakline">Jakarta, 2025</td>
                                                    <td>√</td>
                                                    <td>√</td>
                                                    <td>√</td>
                                                    <td>Selama Berlaku</td>
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
  <?php $__env->startSection('scripts'); ?>
    <script>
    $(document).ready(function () {
        $('#myDikecualikan').DataTable({
            // responsive: true,
            // pagingType: "listbox"
        });
    });
    </script>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/aplikasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /var/www/html/ppid/resources/views/halaman/daftarinfo/infodkc.blade.php ENDPATH**/ ?>