@extends('be.layouts.app')
@section('content')
<div class="container">
                <div class="container">

                    <!-- BREADCRUMB -->
                    <div class="page-meta">
                        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/infopub">Form</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Data Informasi Publik</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- /BREADCRUMB -->

                    <div class="row">

                        <div id="flLoginForm" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-content widget-content-area" style="padding: 20px;position: relative;background-color: #0e1726;border-bottom-left-radius: 8px;border-bottom-right-radius: 8px;border: none;">
                                    <form action="{{ route('admin.informasipublik.update', $data->id) }}" method="POST" enctype="multipart/form-data" class="row g-3">
                                        @csrf
                                        @method('put')
                                        <div class="col-md-6">
                                            <label for="klasifikasi_id" class="form-label">Klasifikasi Informasi</label>
                                            <select name="klasifikasi_id" id="klasifikasi_id" class="form-select">
                                                <option value="" hidden>Pilih Klasifikasi</option>
                                                @foreach($klasifikasis as $item)
                                                    <option value="{{ $item->id }}" {{ ($data->klasifikasi_id == $item->id) ? 'selected' : '' }}>{{ $item->klasifikasi }}</option>
                                                @endforeach
                                            </select>
                                        </div>    
                                        <div class="col-md-6">
                                            <label for="judul" class="form-label">Judul</label>
                                            <input type="text" name="judul" class="form-control" id="judul" value="{{ $data->judul }}">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="ringkasan" class="form-label">Ringkasan</label>
                                            <input type="text" name="ringkasan" class="form-control" id="ringkasan">{{ $data->ringkasan }}</input>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="informasi_terkini" class="form-label">Informasi Terkini</label>
                                            <p class="fw-white">{{ $data->file }}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="hidden" name="filelama" value={{ $data->file }}>
                                            <input type="file" name="file" class="form-control" id="file">
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                            <a href="/infopub" class="btn btn-gray">Kembali</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
</div>
@endsection
