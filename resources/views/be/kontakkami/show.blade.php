@extends('be.layouts.app')
@section('content')
<div class="container">
                <div class="container">

                    <!-- BREADCRUMB -->
                    <div class="page-meta">
                        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/pesan">Form</a></li>
                                <li class="breadcrumb-item active" aria-current="page">View Data Detail Pesan Masuk</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- /BREADCRUMB -->

                    <div class="row">

                        <div id="flLoginForm" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-content widget-content-area" style="padding: 20px;position: relative;background-color: #0e1726;border-bottom-left-radius: 8px;border-bottom-right-radius: 8px;border: none;">
                                    <div class="col-md-12">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" name="nama" class="form-control" id="nama" value="{{ $pesan->nama }}">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" id="email" value="{{ $pesan->email }}">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="pesan" class="form-label">Pesan Masuk</label>
                                        <textarea name="pesan" class="form-control" id="pesan" value="{{ $pesan->pesan }}">
                                    </div>
                                    <p><b>Dikirim :</b> {{ $pesan->created_at }}</p>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <a href="/pesan" class="btn btn-gray">Kembali</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
</div>
@endsection
