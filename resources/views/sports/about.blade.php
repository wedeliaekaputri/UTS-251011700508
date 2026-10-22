@extends('layouts.app')

@section('content')


<div class="w-100 py-5 text-white position-relative overflow-hidden" style="background: linear-gradient(135deg, #0F172A 0%, #1E293B 100%);">
    <div class="container py-5 text-center">
        <span class="badge bg-warning text-dark fw-bold px-3 py-2 rounded-pill mb-3 text-uppercase" style="letter-spacing: 1px;">ABOUT SPORT CENTER</span>
        <h1 class="display-4 fw-bold mb-3" style="font-style: italic;">Komunitas & Platform Event Olahraga Modern</h1>
        <p class="fs-5 text-light opacity-75 mx-auto mb-0" style="max-width: 780px; line-height: 1.7;">
            Wadah utama pendaftaran event olahraga modern yang aktif menyelenggarakan kegiatan komunitas setiap minggunya, lengkap dengan katalog cabang olahraga dinamis dan update tren kebugaran harian.
        </p>
    </div>
</div>


<div class="w-100 py-5 bg-white border-bottom">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <span class="badge rounded-pill px-3 py-2 fw-bold text-white mb-3" style="background-color: #F56300;">OUR MISSION</span>
                <h2 class="fw-bold text-dark display-5 mb-4" style="font-style: italic; line-height: 1.2;">
                    Menggerakkan Komunitas Lewat Event Olahraga Seru Setiap Minggu
                </h2>
                <p class="text-muted fs-5 mb-0" style="line-height: 1.8;">
                    <strong>Sport Center</strong> hadir sebagai platform interaktif bagi para pencinta gaya hidup sehat. Kami rutin menyelenggarakan berbagai sesi olahraga modern seperti <i>Padel Tennis, HYROX Workout, Pilates, Fun Run</i>, hingga turnamen mini komunitas agar siapa saja dapat mendaftar dan bergerak secara konsisten.
                </p>
            </div>

            <div class="col-lg-6">
                <div class="border-start border-4 ps-4 mb-4" style="border-color: #F56300 !important;">
                    <h5 class="fw-bold text-dark mb-2">Sesi Mingguan Aktif</h5>
                    <p class="text-muted mb-0">Penjadwalan event olahraga terstruktur setiap minggu yang fleksibel dan terbuka untuk semua tingkat kemahiran.</p>
                </div>

                <div class="border-start border-4 border-dark ps-4 mb-4">
                    <h5 class="fw-bold text-dark mb-2">Registrasi Cepat & Praktis</h5>
                    <p class="text-muted mb-0">Fitur pendaftaran modal pop-up interaktif yang terintegrasi langsung dengan database katalog cabang olahraga.</p>
                </div>

                <div class="border-start border-4 border-warning ps-4">
                    <h5 class="fw-bold text-dark mb-2">Informasi & Update Terkini</h5>
                    <p class="text-muted mb-0">Menyajikan berita olahraga pilihan dan artikel edukasi kebugaran harian yang mudah dipahami.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="w-100 py-5 border-bottom" style="background-color: #FFFFFF;">
    <div class="container py-3">
        <div class="text-center mb-5">
            <span class="badge rounded-pill px-3 py-2 fw-bold text-white mb-2" style="background-color: #F56300;">KETENTUAN PENDAFTARAN</span>
            <h2 class="fw-bold text-dark display-6" style="font-style: italic;">Persyaratan & Ketentuan Pendaftaran Event</h2>
            <p class="text-muted">Informasi penting seputar syarat pendaftaran, penentuan DP, jadwal rutin, serta estimasi biaya latihan</p>
        </div>

        <div class="row g-4">
           
            <div class="col-lg-3 col-md-6">
                <div class="border-start border-4 ps-3 h-100" style="border-color: #F56300 !important;">
                    <h5 class="fw-bold text-dark mb-3">1. Syarat Pendaftaran</h5>
                    <ul class="text-muted small ps-3 mb-0" style="line-height: 1.8;">
                        <li class="mb-2">Terbuka untuk umum (pelajar, mahasiswa, dan publik).</li>
                        <li class="mb-2">Kondisi fisik sehat & siap beraktivitas.</li>
                        <li class="mb-2">Mengisi form registrasi online resmi.</li>
                        <li>Membawa/menyewa perlengkapan pribadi.</li>
                    </ul>
                </div>
            </div>


            <div class="col-lg-3 col-md-6">
                <div class="border-start border-4 border-dark ps-3 h-100">
                    <h5 class="fw-bold text-dark mb-3">2. Ketentuan DP</h5>
                    <ul class="text-muted small ps-3 mb-0" style="line-height: 1.8;">
                        <li class="mb-2"><strong>Wajib DP</strong> sesuai kategori olahraga.</li>
                        <li class="mb-2"><strong>Perorangan:</strong> DP Rp 150.000 / orang.</li>
                        <li class="mb-2"><strong>Tim:</strong> DP Rp 125.000 / tim.</li>
                        <li>Pelunasan di lokasi sebelum event dimulai.</li>
                    </ul>
                </div>
            </div>

       
            <div class="col-lg-3 col-md-6">
                <div class="border-start border-4 border-warning ps-3 h-100">
                    <h5 class="fw-bold text-dark mb-3">3. Jadwal Rutin</h5>
                    <ul class="text-muted small ps-3 mb-0" style="line-height: 1.8;">
                        <li class="mb-2"><strong>Weekday (Rabu & Jumat):</strong> 16.00 - 18.00 WIB</li>
                        <li class="mb-2"><strong>Sabtu Pagi:</strong> 07.00 - 10.00 WIB</li>
                        <li class="mb-2"><strong>Minggu Sore:</strong> 15.30 - 18.00 WIB</li>
                        <li>Jadwal dipilih langsung saat pendaftaran.</li>
                    </ul>
                </div>
            </div>

         
            <div class="col-lg-3 col-md-6">
                <div class="border-start border-4 border-info ps-3 h-100">
                    <h5 class="fw-bold text-dark mb-3">4. Rincian Biaya Latihan</h5>
                    <ul class="text-muted small ps-3 mb-0" style="line-height: 1.8;">
                        <li class="mb-2"><strong>Yoga & Pilates (Bulanan):</strong> Rp 350.000 / bulan (Unilimited Sesi).</li>
                        <li class="mb-2"><strong>Event Perorangan:</strong> Rp 200.000 - Rp 300.000 / event.</li>
                        <li class="mb-2"><strong>Event Tim :</strong> Rp 380.000 - Rp 500.000 / tim.</li>
                        <li>Bisa dipilih sesuai kebutuhan sesi latihan.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="w-100 py-5" style="background-color: #F8FAFC;">
    <div class="container py-4">
        <div class="text-center mb-5">
            <span class="badge bg-secondary text-white fw-bold px-3 py-2 rounded-pill mb-2">WHY JOIN US</span>
            <h2 class="fw-bold text-dark display-6" style="font-style: italic;">Mengapa Memilih Modern Sport Activity?</h2>
            <p class="text-muted">Nikmati pengalaman berolahraga yang menyenangkan bersama jaringan komunitas terpercaya</p>
        </div>

        <div class="row g-4 text-start">
            <div class="col-md-4">
                <div class="p-4 bg-white border-top border-4 h-100 shadow-sm" style="border-color: #F56300 !important;">
                    <h5 class="fw-bold text-dark mb-3">Update Tren Terbaru</h5>
                    <p class="text-muted small mb-0" style="line-height: 1.7;">
                        Selalu menghadirkan referensi cabang olahraga terkini yang sedang tren beserta tips nutrisi dan latihan harian.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-4 bg-white border-top border-4 border-dark h-100 shadow-sm">
                    <h5 class="fw-bold text-dark mb-3">Komunitas Positif</h5>
                    <p class="text-muted small mb-0" style="line-height: 1.7;">
                        Wadah tepat untuk bertemu dengan rekan-rekan baru yang memiliki semangat dan frekuensi yang sama untuk hidup sehat.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-4 bg-white border-top border-4 border-warning h-100 shadow-sm">
                    <h5 class="fw-bold text-dark mb-3">Fasilitas & Instruktur Terbaik</h5>
                    <p class="text-muted small mb-0" style="line-height: 1.7;">
                        Setiap event dan latihan didampingi oleh instruktur berpengalaman serta dilaksanakan di lokasi olahraga bernuansa modern.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection