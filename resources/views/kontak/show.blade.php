@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card shadow-lg">
                <div class="card-header bg-info text-white">
                    <h2 class="mb-0"><i class="fas fa-eye me-2"></i>Detail Pesan</h2>
                </div>
                
                <div class="card-body">
                    <div class="mb-3">
                        <h5>Nama Pengirim:</h5>
                        <p class="fs-4">{{ $kontak->nama }}</p>
                    </div>
                    
                    <div class="mb-3">
                        <h5>Email:</h5>
                        <p class="fs-4">{{ $kontak->email }}</p>
                    </div>
                    
                    <div class="mb-3">
                        <h5>Pesan:</h5>
                        <p class="fs-4">{{ $kontak->pesan }}</p>
                    </div>
                    
                    <div class="mb-3">
                        <h5>Tanggal Kirim:</h5>
                        <p class="fs-4">{{ $kontak->created_at->format('d F Y H:i') }}</p>
                    </div>
                    
                    <a href="{{ route('kontak.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left me-2"></i>Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection