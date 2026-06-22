@extends('be.layouts.app')
@section('content')
<div class="layout-px-spacing">

                <div class="middle-content container-xxl p-0">

                    <!-- BREADCRUMB -->
                    <div class="page-meta">
                        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/infopub">Form</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tambah Data Lokasi Kantor</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- /BREADCRUMB -->

                    <div class="row">

                        <div id="flLoginForm" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-content widget-content-area" style="padding: 20px;position: relative;background-color: #0e1726;border-bottom-left-radius: 8px;border-bottom-right-radius: 8px;border: none;">
                                    <form action="{{ route('admin.lokasi.store') }}" method="POST" enctype="multipart/form-data" class="row g-3">
                                        @csrf
                                        <div class="col-md-6">
                                            <label for="nama" class="form-label">Nama Lokasi</label>
                                            <input type="text" name="nama" class="form-control" id="nama">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <input type="text" name="alamat" class="form-control" id="alamat">
                                        </div>
                                        <div class="col-md-12">
                                            <div id="map" style="height:500px;"></div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="lat" class="form-label">Latitude</label>
                                            <input type="text" name="lat" class="form-control" id="lat">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="lng" class="form-label">Longitude</label>
                                            <input type="text" name="lng" class="form-control" id="lng">
                                        </div>
                                        
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                            <a href="{{ route('admin.lokasi') }}" class="btn btn-gray">Kembali</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
</div>
@endsection
