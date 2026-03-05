@section('style')
<style>
    #mySertaMerta {
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
@endsection
<section id="values" class="values section" style="margin-top: 20px;">
    <div class="container section-title" data-aos="fade-up">
        <p>Daftar Informasi</p>
        <h2>Demi mewujudkan pelayanan informasi publik yang informatif, Badan Keamanan Laut (Bakamla) memberikan keterbukaan informasi yang optimal kepada lembaga maupun perorangan, seperti yang telah diamanahkan oleh negara.<br></h2>
    </div><!-- End Section Title -->
    <!-- Serta Merta -->
        <div class="container" data-aos="fade-up">
            <div class="content-panel" style="padding:15px;background-color:#f5f5f5;margin-bottom:5px;">
            <div class="content-body-panel">
                <div class="row">

                <!-- Serta Merta -->
                    <div class="container">
                        <h5 data-aos="fade-up" data-aos-delay="400" style="text-align: center">Daftar Informasi Publik Serta Merta</h5>
                        <div class="row">
                            <div data-aos="fade-up" data-aos-delay="400" class="col-12">
                                <table id="mySertaMerta" class="table table-striped" style="width:100%">
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
                                        <td class="breakline">Informasi Mengenai Infografis kejadian, keselamatan di laut</td>
                                        <td class="breakline">KPIML/ IMIC</td>
                                        <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                        <td class="breakline">Jakarta, 2025</td>
                                        <td>√</td>
                                        <td>√</td>
                                        <td>√</td>
                                        <td>1 tahun</td>
                                    </tr>                                  
                                    <tr class="even">
                                        <th scope="row">2.</th>
                                        <td class="breakline">Laporan Tentang Pergerakan anomali Kapal </td>
                                        <td class="breakline">KPIML/ DATIN</td>
                                        <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                        <td class="breakline">Jakarta, 2025</td>
                                        <td>√</td>
                                        <td>√</td>
                                        <td>√</td>
                                        <td>1 tahun</td>
                                    </tr>                                  
                                    <tr class="odd">
                                        <th scope="row">3.</th>
                                        <td class="breakline">Laporan Mengenai unsur Patroli</td>
                                        <td class="breakline">OPSLA/ OPSUD</td>
                                        <td class="breakline">Kepala Biro Umum Bakamla RI</td>
                                        <td class="breakline">Jakarta, 2025</td>
                                        <td>√</td>
                                        <td>√</td>
                                        <td>√</td>
                                        <td>1 tahun</td>
                                    </tr>                                  
                                    <tr class="even">
                                        <th scope="row">4.</th>
                                        <td class="breakline">Informasi peringatan dini terkait cuaca, gempa, curah hujan dan tsunami</td>
                                        <td class="breakline">KPIML/ IMIC</td>
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
  @section('scripts')
    <script>
    $(document).ready(function () {
        $('#mySertaMerta').DataTable({
            // responsive: true,
            // pagingType: "listbox"
        });
    });
    </script>
  @endsection
@include('layouts/aplikasi')
