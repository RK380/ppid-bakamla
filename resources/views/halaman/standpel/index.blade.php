@section('style')
<style>
    #mySOP {
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

  <section id="values" class="values section" style="background-image:linear-gradient(rgba(255,255,255,0.5), rgba(255,255,255,0.5)),url('{{ asset('assets/img/bg-original.jpg') }}');background-size: cover;
    background-position: center;">
  <!-- <div class="card mb-3 card-shadow"> -->
    <div class="container section-title" data-aos="fade-up">
      <p data-aos="fade-up" style="margin-top: 60px;text-align: center">PPID Bakamla RI</p>
      <h2 data-aos="fade-up" data-aos-delay="400" style="text-align: center">Standar Layanan Operasional (PPID)</h2>
    </div>
    <div class="card-body">
          <div class="container" style="background-color:#f4faff;border-radius:10px;">
            <div class="row">
                <div data-aos="fade-up" data-aos-delay="400" class="col-12">
                    <table id="mySOP" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Dibuat</th>
                                <th>Judul</th>
                                <th>Pengelola</th>
                                <th>File</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $item)                            
                            <tr>
                                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$item->created_at)->isoFormat('D MMMM Y HH:mm') }}</td>
                                <td>{{ $item->judul }}</td>
                                <td>HUMAS</td>
                                <td>{{ pathinfo(storage_path().$item->file, PATHINFO_EXTENSION) }}</td>
                                <td><a href="{{ route('download.index', $item->id) }}" target="_blank" class="btn btn-sm btn-primary circle"> <i class="bi bi-arrow-down"></i> </a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
          </div>
    </div>
  <!-- </div> -->
  </section>
  
  <main id="main">

  </main><!-- End #main -->
  {{-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> --}}
  @section('scripts')
    <script>
    $(document).ready(function () {
        $('#mySOP').DataTable({
            // responsive: true,
            // pagingType: "listbox"
        });
    });
    </script>
  @endsection
  @include('layouts/aplikasi')