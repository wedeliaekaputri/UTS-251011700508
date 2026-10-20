@extends('layouts.app')

@section('content')

<!-- 1. Banner Poster Utama (Proporsional & Rapi) -->
<div class="container my-4">
    <div class="position-relative rounded-5 overflow-hidden shadow-lg text-white d-flex align-items-center justify-content-center text-center" style="min-height: 460px; background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.75)), url('{{ asset('assets/images/sports.jpg') }}') center/cover no-repeat;" onerror="this.style.backgroundColor='#0F172A';">
        <div class="p-5 z-1 w-100">
            <span class="badge bg-warning text-dark fw-bold px-3 py-2 rounded-pill mb-3 text-uppercase shadow-sm" style="letter-spacing: 1px;">#SportNewsUpdate2026</span>
            <h1 class="display-4 fw-bold mb-3 text-uppercase" style="font-style: italic; letter-spacing: -1px;">Update Sports Terbaru Setiap Hari</h1>
            <p class="fs-5 mb-4 text-light mx-auto" style="max-width: 650px; line-height: 1.6;">
                Jaga aktivitas olahraga kamu tetap stabil, temukan ragam informasi cabang olahraga dari database, dan tingkatkan performa kebugaranmu!
            </p>
            <a href="{{ route('sport.sports-list') }}" class="btn btn-lg px-5 py-3 rounded-pill fw-bold text-white shadow" style="background-color: #F56300; border: none;">
                Jelajahi Sports List &rarr;
            </a>
        </div>
    </div>
</div>

<!-- 2. Ide Tata Letak Baru: 3 Kolom Fitur Sejajar (Bersih, Elegan, Modern) -->
<div class="container my-5 py-4">
    <div class="row g-4 justify-content-center">
        
        <!-- Kolom 1 -->
        <div class="col-md-4">
            <div class="p-4 bg-white rounded-4 border shadow-sm h-100 text-center d-flex flex-column align-items-center justify-content-between">
                <div>
                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-success bg-opacity-10 mb-3 shadow-sm" style="width: 60px; height: 60px;">
                        <span style="font-size: 1.5rem;">📋</span>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Track. Improve. Finish.</h5>
                    <p class="text-muted small mb-0" style="line-height: 1.6;">
                        Jaga aktivitas olahraga kamu tetap stabil, jadi lebih baik dan selesaikan setiap tantangan dengan mudah.
                    </p>
                </div>
            </div>
        </div>

        <!-- Kolom 2 -->
        <div class="col-md-4">
            <div class="p-4 bg-white rounded-4 border shadow-sm h-100 text-center d-flex flex-column align-items-center justify-content-between">
                <div>
                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-primary bg-opacity-10 mb-3 shadow-sm" style="width: 60px; height: 60px;">
                        <span style="font-size: 1.5rem;">🏆</span>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Get Rewarded</h5>
                    <p class="text-muted small mb-0" style="line-height: 1.6;">
                        Dapatkan hadiah atas pencapaian kamu, selain tubuh bugar dan sehat, menangkan juga eksklusif medal.
                    </p>
                </div>
            </div>
        </div>

        <!-- Kolom 3 -->
        <div class="col-md-4">
            <div class="p-4 bg-white rounded-4 border shadow-sm h-100 text-center d-flex flex-column align-items-center justify-content-between">
                <div>
                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-danger bg-opacity-10 mb-3 shadow-sm" style="width: 60px; height: 60px;">
                        <span style="font-size: 1.5rem;">🔥</span>
                    </div>
                    <h5 class="fw-bold text-dark mb-2">Stay Motivated</h5>
                    <p class="text-muted small mb-0" style="line-height: 1.6;">
                        Gabung dengan komunitas olahraga lari dan sepeda disekitarmu, berbagi tips dan latihan bersama.
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- 3. Section Update Olahraga Viral 2026 -->
<div class="container my-5 py-4">
    <div class="d-flex justify-content-between align-items-end mb-4">
        <div>
            <span class="badge bg-danger bg-opacity-10 text-danger fw-bold px-3 py-2 rounded-pill mb-2" style="font-size: 0.75rem; letter-spacing: 1px;">TRENDING 2026</span>
            <h2 class="fw-bold text-dark m-0" style="font-style: italic; letter-spacing: -0.5px;">Olahraga Viral 2026</h2>
        </div>
        <a href="{{ route('sport.sports-list') }}" class="text-decoration-none fw-bold small" style="color: #F56300;">Lihat Semua Sports &rarr;</a>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="p-4 bg-white rounded-4 border shadow-sm h-100 d-flex flex-column justify-content-between">
                <div>
                    <span class="badge bg-light text-dark border fw-semibold mb-3 px-3 py-2 rounded-pill" style="font-size: 0.75rem;">RAKET & GANDA</span>
                    <h5 class="fw-bold text-dark mb-2">Padel Tennis</h5>
                    <p class="text-muted small mb-0" style="line-height: 1.6;">
                        Kombinasi unik antara tenis dan squash yang sedang tren pesat. Sangat fleksibel dan seru dimainkan ganda bersama rekan.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="p-4 bg-white rounded-4 border shadow-sm h-100 d-flex flex-column justify-content-between">
                <div>
                    <span class="badge bg-light text-dark border fw-semibold mb-3 px-3 py-2 rounded-pill" style="font-size: 0.75rem;">FUNCTIONAL FITNESS</span>
                    <h5 class="fw-bold text-dark mb-2">HYROX Workout</h5>
                    <p class="text-muted small mb-0" style="line-height: 1.6;">
                        Kompetisi kebugaran fisik populer yang memadukan lari interval dan stasiun latihan beban terstruktur.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="p-4 bg-white rounded-4 shadow-sm border h-100 d-flex flex-column justify-content-between">
                <div>
                    <span class="badge bg-light text-dark border fw-semibold mb-3 px-3 py-2 rounded-pill" style="font-size: 0.75rem;">STRENGTH & POSTURE</span>
                    <h5 class="fw-bold text-dark mb-2">Mat & Reformer Pilates</h5>
                    <p class="text-muted small mb-0" style="line-height: 1.6;">
                        Latihan fokus pada penguatan otot inti (*core strength*), kelenturan sendi, dan perbaikan postur tubuh secara bertahap.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 4. Big Heading Section -->
<div class="container my-5 text-center py-5">
    <h1 class="display-3 fw-bold text-dark" style="letter-spacing: -1.5px;">
        <span style="color: #F56300; font-style: italic;">Sehat</span> bermula <br> dengan aktif bergerak.
    </h1>
</div>

<!-- 5. Section Tips Olahraga -->
<div class="w-100 py-5 my-5 position-relative overflow-hidden" style="background-color: #FBF9F6; min-height: 580px;">
    <div class="container-fluid px-lg-5 position-relative">
        <div class="row align-items-center g-4">
            <div class="col-lg-6 col-md-7 ps-lg-5">
                <span class="badge bg-warning text-dark fw-bold px-3 py-2 rounded-pill mb-3">TIPS LATIHAN</span>
                <h2 class="fw-bold text-dark display-5 mb-3">Tips Berolahraga <br><span style="color: #F56300;">Yang Benar & Aman</span></h2>
                <p class="text-muted small mb-4" style="max-width: 520px;">Agar hasil latihan maksimal dan terhindar dari cedera, perhatikan prinsip dasar olahraga berikut ini sebelum memulai aktivitas fisikmu.</p>

                <div class="row g-4 text-start" style="max-width: 600px;">
                    <div class="col-sm-6">
                        <h6 class="fw-bold text-dark mb-1">1. Pemanasan (Warming Up)</h6>
                        <p class="text-muted mb-0" style="font-size: 0.85rem; line-height: 1.5;">Lakukan pemanasan 5-10 menit untuk menyiapkan otot dan meningkatkan detak jantung secara bertahap.</p>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="fw-bold text-dark mb-1">2. Hidrasi Terjaga</h6>
                        <p class="text-muted mb-0" style="font-size: 0.85rem; line-height: 1.5;">Minum air putih sebelum, saat, dan sesudah olahraga untuk mencegah dehidrasi.</p>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="fw-bold text-dark mb-1">3. Perlengkapan Tepat</h6>
                        <p class="text-muted mb-0" style="font-size: 0.85rem; line-height: 1.5;">Gunakan sepatu dan pakaian dry-fit yang sesuai dengan jenis olahraga yang dilakukan.</p>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="fw-bold text-dark mb-1">4. Pendinginan (Cooling Down)</h6>
                        <p class="text-muted mb-0" style="font-size: 0.85rem; line-height: 1.5;">Lakukan peregangan statis setelah selesai berlatih untuk mengembalikan kelenturan otot.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-5 text-end position-relative pe-lg-4">
                <img src="{{ asset('assets/images/runner.png') }}" 
                     alt="Runner PNG" 
                     class="img-fluid"
                     style="max-height: 720px; width: auto; object-fit: contain; transform: scale(1.2) translateX(40px); transform-origin: center right; filter: drop-shadow(-15px 20px 35px rgba(0,0,0,0.12));"
                     onerror="this.onerror=null; this.src='https://via.placeholder.com/500x720?text=Runner+PNG';">
            </div>
        </div>
    </div>
</div>

<!-- 6. Section Tips Makanan Sehat Pendamping Olahraga -->
<div class="w-100 py-5 my-5 bg-white border-top border-bottom">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-md-7 order-2 order-md-1">
                <div class="row g-4 text-start">
                    <div class="col-sm-6">
                        <h6 class="fw-bold text-dark mb-1">Sebelum Olahraga (Pre-Workout)</h6>
                        <p class="text-muted small mb-0">Karbohidrat ringan seperti pisang, oatmeal, atau roti gandum 30-60 menit sebelum berlatih untuk pasokan energi instan.</p>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="fw-bold text-dark mb-1">Setelah Olahraga (Post-Workout)</h6>
                        <p class="text-muted small mb-0">Asupan protein tinggi (dada ayam, telur rebus, atau susu whey) maksimal 45 menit setelah latihan untuk pemulihan otot.</p>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="fw-bold text-dark mb-1">Lemak Sehat</h6>
                        <p class="text-muted small mb-0">Alpukat, kacang almond, dan minyak zaitun untuk menjaga stamina harian dan fungsi hormon tubuh.</p>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="fw-bold text-dark mb-1">Elektrolit Lengkap</h6>
                        <p class="text-muted small mb-0">Air kelapa murni atau air mineral bergizi untuk menggantikan garam mineral tubuh yang hilang lewat keringat.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-5 order-1 order-md-2 text-md-end">
                <span class="badge bg-success text-white fw-bold px-3 py-2 rounded-pill mb-3">NUTRISI & WELLNESS</span>
                <h2 class="fw-bold text-dark display-6 mb-3">Makanan Sehat <br><span style="color: #F56300;">Pendamping Olahraga</span></h2>
                <p class="text-muted">Olahraga rutin harus diimbangi dengan gizi seimbang agar pembentukan massa otot dan pembakaran kalori berjalan lebih optimal.</p>
            </div>
        </div>
    </div>
</div>

<!-- 7. What Our Users Have To Say -->
<div class="container my-5 py-4">
    <div class="text-center mb-5">
        <h2 class="fw-bold display-6" style="font-style: italic; letter-spacing: -0.5px;">What our users <span style="color: #F56300;">have to say</span></h2>
        <p class="text-muted">Pendapat para pencinta olahraga dan mahasiswa mengenai portal Sport News</p>
    </div>

    <div class="row g-4">
        <div class="col-md-6 col-lg-3">
            <div class="p-4 bg-white rounded-4 border shadow-sm h-100 d-flex flex-column justify-content-between">
                <p class="text-muted small fst-italic mb-3">"Selalu ada event menarik sebagai motivasi berolahraga dan juga berbagi ke sesama. Semoga makin banyak update dari sponsor!"</p>
                <div>
                    <div class="fw-bold text-dark small">Alan Putra</div>
                    <div class="text-warning extra-small">★★★★★</div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="p-4 bg-white rounded-4 border shadow-sm h-100 d-flex flex-column justify-content-between">
                <p class="text-muted small fst-italic mb-3">"Aplikasinga bagus, ga berat, fungsinya OK! Buat pengembangannya juga terus improve, bisa liat daftar olahraga lengkap!"</p>
                <div>
                    <div class="fw-bold text-dark small">Imar MS</div>
                    <div class="text-warning extra-small">★★★★★</div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="p-4 bg-white rounded-4 border shadow-sm h-100 d-flex flex-column justify-content-between">
                <p class="text-muted small fst-italic mb-3">"Fitur katalog olahraga dari databased-nya sangat berguna buat referensi tugas UTS Rekayasa Web!"</p>
                <div>
                    <div class="fw-bold text-dark small">Wedelia Eka Putri</div>
                    <div class="text-warning extra-small">★★★★★</div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="p-4 bg-white rounded-4 border shadow-sm h-100 d-flex flex-column justify-content-between">
                <p class="text-muted small fst-italic mb-3">"Tampilan websitenya sangat rapi, kombinasi warna orange dan abu-abunya enak dipandang saat cari berita sports."</p>
                <div>
                    <div class="fw-bold text-dark small">Fridha Zoel</div>
                    <div class="text-warning extra-small">★★★★★</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection