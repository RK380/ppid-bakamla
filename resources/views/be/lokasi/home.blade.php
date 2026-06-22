@extends('be.layouts.app')
@section('content')
@php
    use Illuminate\Support\Str;
@endphp
<div class="layout-px-spacing">

                <div class="middle-content container-xxl p-0">
                    <!-- BREADCRUMB -->
                    <div class="page-meta">
                        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin">Dashboard Admin</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Informasi Publik</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- /BREADCRUMB -->

                    <div class="seperator-header">
                        <a href="{{ route('admin.lokasi.create') }}" class="btn btn-primary _effect--ripple waves-effect waves-light" type="button" id="button-addon1">Tambah Lokasi Kantor</a>
                    </div>
    
                    <div class="row layout-spacing">
                        <div class="col-lg-12">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-content widget-content-area">
                                    <table id="zero-config" class="table dt-table-hover">
                                        <thead>
                                            <tr>
                                                <th class="checkbox-column text-center"> Record Id </th>
                                                <th class="text-center">Nama</th>
                                                <th>Provinsi</th>
                                                <th>Date</th>
                                                <th class="text-center dt-no-sorting">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($lokasi as $l)
                                            <tr>
                                                <td class="checkbox-column text-center"> {{ $loop->iteration }} </td>
                                                <td>{{ $l->nama }}</td>
                                                <td>{{ \Illuminate\Support\Str::limit($l->alamat, 80) }}</td>
                                                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $l->created_at)->isoFormat('D MMMM Y')}}</td>
                                                <td class="text-center">
                                                    <ul class="table-controls d-flex justify-content-center" style="list-style:none; padding:0; margin:0;">
                                                        <li>
                                                            <a href="{{ route('admin.lokasi.show', $l->id) }}" class="bs-tooltip" 
                                                                    data-bs-toggle="tooltip" 
                                                                    data-bs-placement="top" 
                                                                    title="Lihat">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                                                                <circle cx="12" cy="12" r="3" />
                                                                </svg>
                                                            </a>
                                                            <form action="{{ route('admin.lokasi.destroy', $l->id) }}" 
                                                                method="POST" 
                                                                onsubmit="return confirm('Yakin ingin menghapus informasi ini?')" 
                                                                style="display:inline;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <a href="{{ route('admin.lokasi.edit', $l->id) }}" 
                                                                    class="bs-tooltip" 
                                                                    data-bs-toggle="tooltip" 
                                                                    data-bs-placement="top" 
                                                                    title="Edit">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" 
                                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                                                                            class="feather feather-edit-2 w-6 h-6 text-warning">
                                                                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                                        </svg>
                                                                </a>
                                                                <button type="submit" 
                                                                        class="btn btn-link p-0 m-0 align-baseline bs-tooltip" 
                                                                        data-bs-toggle="tooltip" 
                                                                        data-bs-placement="top" 
                                                                        title="Delete"
                                                                        style="border:none; background:none; cursor:pointer;">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" 
                                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                                                                        class="feather feather-trash w-6 h-6 text-danger">
                                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6
                                                                                m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                                    </svg>
                                                                </button>
                                                            </form>

                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>

@endsection