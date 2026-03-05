@section('style')
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
@endsection

<!-- ======= Hero Section ======= -->
{{-- <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up" style="margin-bottom: 20px">Informasi Publik Secara Berkala</h1>
          <h4 data-aos="fade-up" data-aos-delay="400">Informasi Berkala adalah Informasi yang wajib diperbaharui kemudian disediakan dan diumumkan kepada publik secara rutin atau berkala sekurang-kurangnya setiap 6 bulan sekali.</h4>
          <svg class="arrows">
            <path class="a1" d="M0 0 L30 32 L60 0"></path>
            <path class="a2" d="M0 20 L30 52 L60 20"></path>
            <path class="a3" d="M0 40 L30 72 L60 40"></path>
          </svg>
          <div data-aos="fade-up" data-aos-delay="600">
            <!-- <div id="datatable"></div> -->
          </div>
        </div>
      </div>
    </div>
</section><!-- End Hero --> --}}

<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        <h1 data-aos="fade-up" style="margin-top: 60px;text-align: center">PPID Bakamla RI</h1>
        <h4 data-aos="fade-up" data-aos-delay="400" style="text-align: center">Informasi Publik</h4>
        <div class="row">
            <div class="col-12">
                <table id="myDataTable" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Dibuat</th>
                            <th>Informasi</th>
                            <th>Judul</th>
                            <th>Pengelola</th>
                            <th>File</th>
                            <!-- <th>Ukuran</th> -->
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($datas as $item)                            
                        <tr>
                            <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$item->created_at)->isoFormat('D MMMM Y HH:mm') }}</td>
                            <td>{{ $item->klasifikasi->klasifikasi }}</td>
                            <td>{{ $item->judul }}</td>
                            <td>HUMAS</td>
                            <td>{{ pathinfo(storage_path().$item->file, PATHINFO_EXTENSION) }}</td>
                            <td><a href="{{ route('download.infopub', $item->id) }}" target="_blank" class="btn btn-sm btn-primary circle"> <i class="ti-download"></i> </a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{-- <div class="row mt-5">
            <div class="col-12">
                <div class="card border-0">
                    <div class="card-body">
                        &nbsp;
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</section>
  
  <main id="main">

  </main><!-- End #main -->
  {{-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> --}}
  @section('scripts')
    <script>
    $(document).ready(function () {
        $('#myDataTable').DataTable({
            // responsive: true,
            // pagingType: "listbox"
        });
    });
    </script>
  @endsection
  @include('layouts/aplikasi')