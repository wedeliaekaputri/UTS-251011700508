@extends('layouts.app')

@section('content')


<div class="container my-4">
    <div class="position-relative rounded-5 overflow-hidden shadow-sm text-white d-flex align-items-center justify-content-center text-center p-5" style="min-height: 220px; background: linear-gradient(135deg, #0F172A 0%, #1E293B 100%);">
        <div class="z-1">
            <span class="badge bg-warning text-dark fw-bold px-3 py-2 rounded-pill mb-3 text-uppercase" style="letter-spacing: 1px;">KATALOG & REGISTRASI</span>
            <h1 class="display-5 fw-bold mb-2" style="font-style: italic;">Daftar Olahraga & Kegiatan</h1>
            <p class="text-light opacity-75 mx-auto mb-0" style="max-width: 650px;">
                Pilih cabang olahraga favoritmu dan daftarkan dirimu untuk mengikuti kegiatan olahraga rutin bersama komunitas kami!
            </p>
        </div>
    </div>
</div>


<div class="container my-5 py-2">
    <div class="row g-4">
        @foreach($sports as $sport)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border rounded-4 shadow-sm bg-white overflow-hidden d-flex flex-column justify-content-between">
                    <div>
                        <div class="bg-light text-center overflow-hidden position-relative" style="height: 200px;">
                            <img src="{{ asset('assets/images/' . ($sport->image ?? 'default.jpg')) }}" 
                                 alt="{{ $sport->name }}" 
                                 class="w-100 h-100 object-fit-cover"
                                 onerror="this.onerror=null; this.src='https://via.placeholder.com/400x300?text={{ urlencode($sport->name) }}';">
                        </div>
                        <div class="p-4">
                            <span class="badge bg-warning text-dark fw-bold px-3 py-1 rounded-pill mb-2" style="font-size: 0.75rem;">
                                {{ $sport->category }}
                            </span>
                            <h5 class="fw-bold text-dark mb-2">{{ $sport->name }}</h5>
                            <p class="text-muted small mb-3" style="line-height: 1.6; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                                {{ $sport->description }}
                            </p>
                        </div>
                    </div>

                    <div class="p-4 pt-0">
                        <div class="d-flex gap-2 border-top pt-3">
                            <a href="{{ route('sport.show', $sport->id) }}" class="btn btn-outline-dark btn-sm rounded-pill px-3 fw-semibold flex-grow-1">
                                Detail
                            </a>
                            <button type="button" class="btn btn-sm rounded-pill px-3 fw-bold text-white flex-grow-1" style="background-color: #F56300; border: none;" data-bs-toggle="modal" data-bs-target="#modalDaftar{{ $sport->id }}">
                                Daftar Kegiatan 
                            </button>
                        </div>
                    </div>
                </div>
            </div>

           
            <div class="modal fade" id="modalDaftar{{ $sport->id }}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content rounded-5 border-0 shadow">
                        <div class="modal-header border-0 pb-0">
                            <h5 class="modal-title fw-bold text-dark">Form Pendaftaran Kegiatan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-4">
                            <div class="alert bg-warning bg-opacity-10 border-0 rounded-4 mb-4">
                                <small class="fw-bold text-dark d-block">Kegiatan Olahraga Pilihan:</small>
                                <span class="fw-bold text-danger fs-5">{{ $sport->name }}</span>
                            </div>

                            <form onsubmit="alert('Pendaftaran berhasil! Terimakasih telah mendaftar kegiatan {{ $sport->name }}.'); return false;">
                                <div class="mb-3">
                                    <label class="form-label small fw-bold text-dark">Nama Lengkap Pendaftar</label>
                                    <input type="text" class="form-control rounded-3" placeholder="Masukkan nama lengkap Anda" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label small fw-bold text-dark">Nomor WhatsApp / HP</label>
                                    <input type="tel" class="form-control rounded-3" placeholder="08xxxxxxxxxx" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label small fw-bold text-dark">Pilih Lokasi Event / Area</label>
                                    <select class="form-select rounded-3" required>
                                        <option value="">-- Pilih Lokasi Event --</option>
                                        <option value="1">Sport Center Utama - Lapangan Indoor A</option>
                                        <option value="2">Sport Center Utama - Lapangan Outdoor B</option>
                                        <option value="3">Community Hub - Gelora Fitness Center</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label small fw-bold text-dark">Pilih Jadwal Latihan / Kegiatan</label>
                                    <select class="form-select rounded-3" required>
                                        <option value="">-- Pilih Sesi Kegiatan --</option>
                                        <option value="1">Sesi Weekday (Rabu & Jumat): 16.00 - 18.00 WIB</option>
                                        <option value="2">Sesi Sabtu Pagi: 07.00 - 10.00 WIB</option>
                                        <option value="3">Sesi Minggu Sore: 15.30 - 18.00 WIB</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn w-100 rounded-pill fw-bold text-white shadow-sm" style="background-color: #F56300; border: none;">
                                    Kirim Pendaftaran Sekarang
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection