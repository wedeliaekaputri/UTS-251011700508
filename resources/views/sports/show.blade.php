@extends('layouts.app')

@section('content')
<div class="container my-5">
    <a href="{{ route('sport.index') }}" class="btn btn-outline-secondary rounded-pill px-4 mb-4 fw-semibold">
        &larr; Kembali ke Beranda
    </a>

    <div class="card border-0 shadow-sm rounded-4 bg-white p-4 p-md-5">
        <div class="row g-4 align-items-center">
            <div class="col-md-5">
                <div class="rounded-4 overflow-hidden shadow-sm" style="max-height: 380px; background-color: #e5e7eb;">
                    <img src="{{ asset('assets/images/' . $sport->image) }}" 
                         alt="{{ $sport->name }}" 
                         class="w-100 h-100 object-fit-cover"
                         onerror="this.onerror=null; this.src='https://via.placeholder.com/500x400?text={{ urlencode($sport->name) }}';">
                </div>
            </div>
            
            <div class="col-md-7 ps-md-5">
                <span class="badge-category mb-3">{{ $sport->category }}</span>
                <h1 class="font-futura display-5 text-dark mb-3">{{ $sport->name }}</h1>
                <p class="text-muted fs-6 mb-4 leading-relaxed">{{ $sport->description }}</p>

                <div class="bg-light p-4 rounded-3 mb-4">
                    <div class="row g-3">
                        <div class="col-12">
                            <strong class="d-block text-dark">Peralatan Khusus:</strong>
                            <span class="text-muted">{{ $sport->equipment }}</span>
                        </div>
                        <div class="col-12">
                            <strong class="d-block text-dark">Aturan Utama:</strong>
                            <span class="text-muted">{{ $sport->rules }}</span>
                        </div>
                        <div class="col-12">
                            <strong class="d-block text-dark">Asal Negara / Sejarah:</strong>
                            <span class="text-muted">{{ $sport->origin_country }}</span>
                        </div>
                    </div>
                </div>

                <a href="#" class="btn btn-gerak btn-lg px-5 fs-6">
                    Ikuti Aktivitas Ini
                </a>
            </div>
        </div>
    </div>
</div>
@endsection