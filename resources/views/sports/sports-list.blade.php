@extends('layouts.app')

@section('content')

<!-- Header Tanpa Kotak Putih -->
<div class="container my-5 text-center">
    <h1 class="display-5 fw-bold text-dark mb-2" style="font-style: italic;">Sports Catalog</h1>
    <p class="text-muted mx-auto mb-0" style="max-width: 600px;">
        Daftar cabang olahraga lengkap bersumber langsung dari database portal Sport News.
    </p>
</div>

<!-- Grid Card Katalog -->
<div class="container mb-5">
    <div class="row g-4">
        @isset($sports)
            @forelse($sports as $sport)
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border rounded-4 shadow-sm bg-white overflow-hidden">
                        
                        <!-- Gambar Cover Olahraga -->
                        <div class="bg-light text-center overflow-hidden position-relative" style="height: 180px;">
                            <img src="{{ asset('assets/images/' . ($sport->image ?? 'default.jpg')) }}" 
                                 alt="{{ $sport->name }}" 
                                 class="w-100 h-100 object-fit-cover"
                                 onerror="this.onerror=null; this.src='https://via.placeholder.com/400x300?text={{ urlencode($sport->name ?? 'Sport') }}';">
                        </div>

                        <!-- Card Body -->
                        <div class="card-body p-3 d-flex flex-column justify-content-between">
                            <div>
                                <h6 class="fw-bold text-dark mb-1">{{ $sport->name }}</h6>
                                <p class="text-muted small mb-2" style="font-size: 0.8rem;">
                                    Kategori: <span class="fw-semibold text-dark">{{ $sport->category }}</span>
                                </p>
                                <p class="text-muted small mb-3" style="font-size: 0.85rem; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                    {{ $sport->description }}
                                </p>
                            </div>

                            <!-- Tombol Warna Orange -->
                            <div class="pt-2 border-top mt-auto">
                                <a href="{{ route('sport.show', $sport->id) }}" class="btn btn-gerak-orange btn-sm w-100 rounded-pill fw-semibold text-white" style="background-color: #F56300; border: none;">
                                    Lihat Detail &rarr;
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <div class="p-5 bg-white rounded-4 border">
                        <h4 class="fw-bold text-muted mb-2">Belum ada data olahraga</h4>
                        <p class="text-muted small mb-0">Jalankan <code>php artisan migrate:fresh --seed</code> di terminal.</p>
                    </div>
                </div>
            @endforelse
        @endisset
    </div>
</div>

@endsection