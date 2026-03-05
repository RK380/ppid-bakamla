@extends('be/komponen/aplikasi')

@section('konten')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Form Edit Data - Standar Layanan Operasional</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href={{ url()->previous() }} class="btn btn-dark icon">
                    {{-- <i data-feather="arrow-left" width="20"></i> --}}
                    <i class="fas fa-arrow-left" width="20"></i>
                    </a>
                </li> 
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Data - Standar Layanan Operasional</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Basic Vertical form layout section start -->
<section id="basic-vertical-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
            <div class="card">
                @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif
                <div class="card-content">
                    <div class="card-body">
                        {{-- @role('admin') --}}
                        <form action="{{ route('admin.sop.update',$data->id) }}" method="POST" enctype="multipart/form-data"> 
                        {{-- @endrole --}}
                        {{-- @role('petugas')
                        <form action="{{ route('petugas.informasipublik.update',$data->id) }}" method="POST" enctype="multipart/form-data"> 
                        @endrole --}}
                            @csrf
                            @method('put')
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="basicInput" class="fw-bold">Judul</label>
                                            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="basicInput" value="{{ $data->judul }}"">
                                            @error('judul')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1" class="form-label fw-bold">Standar Layanan Operasional Terkini</label>
                                              <p class="fw-bold">{{ $data->file }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <p class="fw-bold">Ganti Standar Layanan Operasional</p>
                                            <div class="form-file">
                                                <input type="hidden" name="filelama" value={{ $data->file }}>
                                                <input type="file" class="form-file-input @error('file') is-invalid @enderror" name="file" id="customFile">
                                                @error('file')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</div>
@endsection