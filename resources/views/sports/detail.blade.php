@extends('layouts.app')

@section('content')

<div class="container my-5">
    <!-- Tombol Kembali -->
    <div class="mb-4">
        <a href="{{ route('sport.sports-list') }}" class="text-decoration-none fw-bold text-dark d-inline-flex align-items-center gap-2">
            &larr; Kembali ke Sports List
        </a>
    </div>

    <div class="bg-white rounded-5 p-4 p-md-5 border shadow-sm">
        <div class="row g-5 align-items-center">
            
            <!-- Kolom Kiri: Gambar Ukuran Besar -->
            <div class="col-lg-6">
                <div class="rounded-4 overflow-hidden shadow-sm bg-light" style="max-height: 400px;">
                    <img src="{{ asset('assets/images/' . ($sport->image ?? 'default.jpg')) }}" 
                         alt="{{ $sport->name }}" 
                         class="w-100 h-100 object-fit-cover"
                         style="max-height: 400px;"
                         onerror="this.onerror=null; this.src='https://via.placeholder.com/800x500?text={{ urlencode($sport->name) }}';">
                </div>
            </div>

            <!-- Kolom Kanan: Informasi Lengkap -->
            <div class="col-lg-6">
                <span class="badge bg-warning text-dark fw-bold px-3 py-2 rounded-pill mb-3 text-uppercase">
                    {{ $sport->category }}
                </span>
                
                <h1 class="fw-bold text-dark mb-3" style="font-style: italic;">{{ $sport->name }}</h1>
                
                <p class="text-muted mb-4" style="line-height: 1.8;">
                    {{ $sport->description }}
                </p>

                <div class="d-flex flex-column gap-3 border-top pt-4">
                    <div class="d-flex align-items-center gap-3">
                        <span class="fw-bold text-dark" style="min-width: 150px;">🌍 Asal Negara:</span>
                        <span class="text-muted">{{ $sport->origin_country }}</span>
                    </div>

                    <div class="d-flex align-items-center gap-3">
                        <span class="fw-bold text-dark" style="min-width: 150px;">🛠 Perlengkapan:</span>
                        <span class="text-muted">{{ $sport->equipment }}</span>
                    </div>

                    <div class="d-flex align-items-center gap-3">
                        <span class="fw-bold text-dark" style="min-width: 150px;">📜 Aturan / Format:</span>
                        <span class="text-muted">{{ $sport->rules }}</span>
                    </div>
                </div>

                <div class="mt-5">
                    <a href="{{ route('sport.sports-list') }}" class="btn btn-gerak-orange px-4 py-2 rounded-pill fw-semibold text-white" style="background-color: #F56300;">
                        Jelajahi Olahraga Lainnya
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection