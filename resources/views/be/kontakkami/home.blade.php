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
                                <li class="breadcrumb-item active" aria-current="page">Pesan Kontak Kami</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- /BREADCRUMB -->

                    {{-- <div class="seperator-header">
                        <a href="{{ route('admin.klasifikasi.create') }}" class="btn btn-primary _effect--ripple waves-effect waves-light" type="button" id="button-addon1">Tambah Klasifikasi</a>
                    </div> --}}
    
                    <div class="row layout-spacing">
                        <div class="col-lg-12">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-content widget-content-area">
                                    <table id="zero-config" class="table dt-table-hover">
                                        <thead>
                                            <tr>
                                                <th class="checkbox-column text-center"> Record Id </th>
                                                <th class="text-center">Nama Pengirim Pesan</th>
                                                <th class="text-center">Email Pengirim Pesan</th>
                                                <th class="text-center">Pesan</th>
                                                <th class="text-center">Dibuat Tanggal</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center dt-no-sorting">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($pesan as $p)
                                            <tr>
                                                <td class="checkbox-column text-center"> {{ $loop->iteration }} </td>
                                                <td>{{ $p->nama }}</td>
                                                <td>{{ $p->email }}</td>
                                                <td>{{ \Illuminate\Support\Str::limit($p->pesan, 40) }}</td>
                                                <td>{{ $p->created_at->format('d-m-Y | H:i:s') }}</td>
                                                <td>
                                                    @if($p->is_read)
                                                        <span class="badge bg-success">Sudah Dibaca</span>
                                                    @else
                                                        <span class="badge bg-danger">Pesan Baru</span>
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    <ul class="table-controls d-flex justify-content-center" style="list-style:none; padding:0; margin:0;">
                                                        <li>
                                                            <a href="{{ route('admin.pesan.show', $p->id) }}" lass="btn btn-link p-0 m-0 align-baseline bs-tooltip" 
                                                                        data-bs-toggle="tooltip" 
                                                                        data-bs-placement="top" 
                                                                        title="Lihat"
                                                                        style="border:none; background:none; cursor:pointer;">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                                                                    <circle cx="12" cy="12" r="3" />
                                                                    </svg>
                                                            </a>
                                                            <form action="{{ route('admin.pesan.destroy', $p->id) }}" 
                                                                method="POST" 
                                                                onsubmit="return confirm('Yakin ingin menghapus klasifikasi ini?')" 
                                                                style="display:inline;">
                                                                @csrf
                                                                @method('DELETE')
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