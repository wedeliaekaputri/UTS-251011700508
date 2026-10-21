@extends('layouts.app')

@section('content')

<!-- 1. Banner Poster Utama (Konsep Modern Sport Activity & Event) -->
<div class="container my-4">
    <div class="position-relative rounded-5 overflow-hidden shadow-lg text-white d-flex align-items-center justify-content-center text-center" style="min-height: 460px; background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.75)), url('{{ asset('assets/images/sports.jpg') }}') center/cover no-repeat;" onerror="this.style.backgroundColor='#0F172A';">
        <div class="p-5 z-1 w-100">
            <span class="badge bg-warning text-dark fw-bold px-3 py-2 rounded-pill mb-3 text-uppercase shadow-sm" style="letter-spacing: 1px;">#MODERNSPORACTIVITY2026</span>
            <h1 class="display-4 fw-bold mb-3 text-uppercase" style="font-style: italic; letter-spacing: -1px;">JOIN MODERN SPORT ACTIVITIES</h1>
            <p class="fs-5 mb-4 text-light mx-auto" style="max-width: 680px; line-height: 1.6;">
                Daftarkan dirimu untuk mengikuti ragam kegiatan olahraga modern harian, gabung komunitas aktif, dan nikmati sesi latihan seru setiap minggunya!
            </p>
            <a href="{{ route('sport.sports-list') }}" class="btn btn-lg px-5 py-3 rounded-pill fw-bold text-white shadow" style="background-color: #F56300; border: none;">
                Daftar Kegiatan Olahraga
            </a>
        </div>
    </div>
</div>

<!-- 3. Section Portal Berita Utama (Diklik Muncul Pop-Up Modal Berita Detail) -->
<div class="container my-5 py-4">
    <div class="mb-4">
        <h2 class="fw-bold display-6 mb-1" style="color: #F56300; font-style: italic;">#BERITA OLAHRAGA</h2>
        <p class="text-muted">Kumpulan informasi dan berita perkembangan olahraga terkini tahun 2026</p>
    </div>

    <div class="row g-4">
        <!-- Berita 1: Karisma Evi (be1.jpg) -->
        <div class="col-md-4">
            <div class="card border-0 bg-transparent h-100 role-button" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#modalBerita1">
                <div class="rounded-4 overflow-hidden mb-3 shadow-sm" style="height: 220px;">
                    <img src="{{ asset('assets/images/be1.jpg') }}" 
                         alt="Karisma Evi Tiarani" 
                         class="w-100 h-100 object-fit-cover"
                         onerror="this.onerror=null; this.src='https://via.placeholder.com/400x250?text=Karisma+Evi';">
                </div>
                <div>
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <span class="badge rounded-pill px-3 py-1 fw-bold text-white" style="background-color: #F56300; font-size: 0.75rem;">Berita</span>
                        <small class="text-muted fw-semibold">Rabu, 21 Oktober 2026</small>
                    </div>
                    <h5 class="fw-bold text-dark mb-2" style="line-height: 1.4; font-size: 1.1rem;">
                        Saksikan Langsung Karisma Evi Raih Emas Kelima Asian Para Games 2026
                    </h5>
                    <p class="text-muted small mb-0" style="line-height: 1.6; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                        Menteri Pemuda dan Olahraga menyaksikan langsung keberhasilan atlet para atletik Indonesia, Karisma Evi Tiarani, yang tampil dominan dan berhasil meraih medali emas kelima bagi kontingen Indonesia.
                    </p>
                </div>
            </div>
        </div>

        <!-- Berita 2: Fadli Imammudin (be2.jpg) -->
        <div class="col-md-4">
            <div class="card border-0 bg-transparent h-100 role-button" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#modalBerita2">
                <div class="rounded-4 overflow-hidden mb-3 shadow-sm" style="height: 220px;">
                    <img src="{{ asset('assets/images/be2.jpg') }}" 
                         alt="M. Fadli Imammudin" 
                         class="w-100 h-100 object-fit-cover"
                         onerror="this.onerror=null; this.src='https://via.placeholder.com/400x250?text=Fadli+Imammudin';">
                </div>
                <div>
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <span class="badge rounded-pill px-3 py-1 fw-bold text-white" style="background-color: #F56300; font-size: 0.75rem;">Berita</span>
                        <small class="text-muted fw-semibold">Rabu, 21 Oktober 2026</small>
                    </div>
                    <h5 class="fw-bold text-dark mb-2" style="line-height: 1.4; font-size: 1.1rem;">
                        Perjuangan M. Fadli Imammudin Sabet Medali Balap Sepeda Asian Para Games 2026
                    </h5>
                    <p class="text-muted small mb-0" style="line-height: 1.6; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                        Atlet balap sepeda Indonesia, M. Fadli Imammudin, menunjukkan semangat pantang menyerah usai membukukan catatan waktu terbaik dan mempersembahkan medali emas untuk Merah Putih.
                    </p>
                </div>
            </div>
        </div>

        <!-- Berita 3: 3 Emas Boccia (be3.jpg) -->
        <div class="col-md-4">
            <div class="card border-0 bg-transparent h-100 role-button" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#modalBerita3">
                <div class="rounded-4 overflow-hidden mb-3 shadow-sm" style="height: 220px;">
                    <img src="{{ asset('assets/images/be3.jpg') }}" 
                         alt="3 Emas Boccia" 
                         class="w-100 h-100 object-fit-cover"
                         onerror="this.onerror=null; this.src='https://via.placeholder.com/400x250?text=3+Emas+Boccia';">
                </div>
                <div>
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <span class="badge rounded-pill px-3 py-1 fw-bold text-white" style="background-color: #F56300; font-size: 0.75rem;">Berita</span>
                        <small class="text-muted fw-semibold">Rabu, 21 Oktober 2026</small>
                    </div>
                    <h5 class="fw-bold text-dark mb-2" style="line-height: 1.4; font-size: 1.1rem;">
                        Tiga Emas Boccia Bawa Indonesia Lampaui Target Asian Para Games 2026
                    </h5>
                    <p class="text-muted small mb-0" style="line-height: 1.6; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                        Kontingen Indonesia berhasil melampaui target tujuh medali emas pada ajang Asian Para Games Aichi-Nagoya 2026 setelah cabang olahraga boccia menyumbangkan tiga medali emas secara spektakuler.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL DETAIL BERITA 1 -->
<div class="modal fade" id="modalBerita1" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content rounded-5 border-0 shadow">
            <div class="modal-body p-4 p-md-5">
                <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                <span class="badge rounded-pill px-3 py-1 fw-bold text-white mb-3" style="background-color: #F56300;">Berita Olahraga</span>
                <h3 class="fw-bold text-dark mb-2">Saksikan Langsung Karisma Evi Raih Emas Kelima Asian Para Games 2026</h3>
                <p class="text-muted small mb-4">Diterbitkan: Rabu, 21 Oktober 2026 | Oleh: Redaksi Sport News</p>
                <img src="{{ asset('assets/images/be1.jpg') }}" class="w-100 rounded-4 mb-4 object-fit-cover" style="max-height: 380px;">
                <p class="text-secondary" style="line-height: 1.8;">
                    Menteri Pemuda dan Olahraga menyaksikan langsung keberhasilan atlet para atletik Indonesia, Karisma Evi Tiarani, yang tampil dominan dan berhasil meraih medali emas kelima bagi kontingen Indonesia di ajang Asian Para Games 2026.
                </p>
                <p class="text-secondary" style="line-height: 1.8;">
                    Karisma Evi mencatatkan waktu terbaiknya dan menunjukkan performa yang luar biasa sepanjang pertandingan. Kemenangan ini memperkokoh posisi kontingen Indonesia dalam perolehan medali klasemen papan atas.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- MODAL DETAIL BERITA 2 -->
<div class="modal fade" id="modalBerita2" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content rounded-5 border-0 shadow">
            <div class="modal-body p-4 p-md-5">
                <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                <span class="badge rounded-pill px-3 py-1 fw-bold text-white mb-3" style="background-color: #F56300;">Berita Olahraga</span>
                <h3 class="fw-bold text-dark mb-2">Perjuangan M. Fadli Imammudin Sabet Medali Balap Sepeda Asian Para Games 2026</h3>
                <p class="text-muted small mb-4">Diterbitkan: Rabu, 21 Oktober 2026 | Oleh: Redaksi Sport News</p>
                <img src="{{ asset('assets/images/be2.jpg') }}" class="w-100 rounded-4 mb-4 object-fit-cover" style="max-height: 380px;">
                <p class="text-secondary" style="line-height: 1.8;">
                    Atlet balap sepeda Indonesia, M. Fadli Imammudin, kembali membuktikan kualitasnya di kancah internasional dengan mempersembahkan medali emas untuk Merah Putih dalam ajang Asian Para Games Aichi-Nagoya 2026.
                </p>
                <p class="text-secondary" style="line-height: 1.8;">
                    Kerja keras dan konsistensi latihan yang telah dilakukan selama berbulan-bulan terbayar tuntas saat M. Fadli melintasi garis finis pertama dengan catatan waktu yang sangat memukau.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- MODAL DETAIL BERITA 3 -->
<div class="modal fade" id="modalBerita3" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content rounded-5 border-0 shadow">
            <div class="modal-body p-4 p-md-5">
                <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                <span class="badge rounded-pill px-3 py-1 fw-bold text-white mb-3" style="background-color: #F56300;">Berita Olahraga</span>
                <h3 class="fw-bold text-dark mb-2">Tiga Emas Boccia Bawa Indonesia Lampaui Target Asian Para Games 2026</h3>
                <p class="text-muted small mb-4">Diterbitkan: Rabu, 21 Oktober 2026 | Oleh: Redaksi Sport News</p>
                <img src="{{ asset('assets/images/be3.jpg') }}" class="w-100 rounded-4 mb-4 object-fit-cover" style="max-height: 380px;">
                <p class="text-secondary" style="line-height: 1.8;">
                    Kontingen Indonesia berhasil melampaui target perolehan medali pada ajang Asian Para Games Aichi-Nagoya 2026 setelah tim cabang olahraga Boccia menyumbangkan tiga medali emas secara spektakuler.
                </p>
                <p class="text-secondary" style="line-height: 1.8;">
                    Pencapaian luar biasa ini mendapat apresiasi tinggi dari Menpora dan seluruh masyarakat Indonesia yang terus memberikan dukungan penuh selama ajang berlangsung.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- 4. Section Update Olahraga Viral 2026 -->
<div class="container my-5 py-4">
    <div class="d-flex justify-content-between align-items-end mb-4">
        <div>
            <span class="badge bg-warning bg-opacity-10 text-dark fw-bold px-3 py-2 rounded-pill mb-2" style="font-size: 0.75rem; letter-spacing: 1px;">TRENDING 2026</span>
            <h2 class="fw-bold text-dark m-0" style="font-style: italic; letter-spacing: -0.5px;">Olahraga Viral 2026</h2>
        </div>
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

<!-- 5. Big Heading Section -->
<div class="container my-5 text-center py-5">
    <h1 class="display-3 fw-bold text-dark" style="letter-spacing: -1.5px;">
        <span style="color: #F56300; font-style: italic;">Sehat</span> bermula <br> dengan aktif bergerak.
    </h1>
</div>

<!-- 6. Section Tips Olahraga di Rumah -->
<div class="w-100 py-5 my-5 position-relative overflow-hidden" style="background-color: #FBF9F6; min-height: 580px;">
    <div class="container-fluid px-lg-5 position-relative">
        <div class="row align-items-center g-4">
            <div class="col-lg-6 col-md-7 ps-lg-5">
                <span class="badge bg-warning text-dark fw-bold px-3 py-2 rounded-pill mb-3">WORKOUT DI RUMAH</span>
                <h2 class="fw-bold text-dark display-5 mb-3">Tips Olahraga di Rumah <br><span style="color: #F56300;">Simpel & Tepat</span></h2>
                <p class="text-muted small mb-4" style="max-width: 520px;">Tetap bugar dan aktif dari kamar atau ruang tamu dengan langkah-langkah praktis berikut tanpa perlu pergi ke tempat gym.</p>

                <div class="row g-4 text-start" style="max-width: 600px;">
                    <div class="col-sm-6">
                        <h6 class="fw-bold text-dark mb-1">1. Siapkan Matras Nyaman</h6>
                        <p class="text-muted mb-0" style="font-size: 0.85rem; line-height: 1.5;">Gunakan matras yoga atau alas empuk untuk melindungi lutut dan siku saat melakukan push-up, plank, atau stretching.</p>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="fw-bold text-dark mb-1">2. Gerakan Bodyweight</h6>
                        <p class="text-muted mb-0" style="font-size: 0.85rem; line-height: 1.5;">Manfaatkan beban tubuh sendiri melalui gerakan simpel seperti jumping jacks, squats, lunges, dan sit-up.</p>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="fw-bold text-dark mb-1">3. Pakaian Santai & Fleksibel</h6>
                        <p class="text-muted mb-0" style="font-size: 0.85rem; line-height: 1.5;">Gunakan kaus bahan adem dan celana pendek yang menyerap keringat serta tidak membatasi pergerakan tubuh.</p>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="fw-bold text-dark mb-1">4. Putar Musik Favorit</h6>
                        <p class="text-muted mb-0" style="font-size: 0.85rem; line-height: 1.5;">Nyalakan playlist musik ber-beat cepat untuk membakar semangat dan menjaga ritme latihan di rumah.</p>
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

<!-- 7. What Our Users Have To Say (Review Setelah Daftar Modern Sport Activity) -->
<div class="container my-5 py-4">
    <div class="text-center mb-5">
        <h2 class="fw-bold display-6" style="font-style: italic; letter-spacing: -0.5px;">What our users <span style="color: #F56300;">have to say</span></h2>
        <p class="text-muted">Ulasan dan pengalaman para peserta setelah mendaftar Modern Sport Activity & Event</p>
    </div>

    <div class="row g-4">
        <div class="col-md-6 col-lg-3">
            <div class="p-4 bg-white rounded-4 border shadow-sm h-100 d-flex flex-column justify-content-between">
                <p class="text-muted small fst-italic mb-3">"Proses pendaftaran fun run & badminton session-nya cepat banget! Konfirmasi jadwal dan lokasinya juga sangat jelas."</p>
                <div>
                    <div class="fw-bold text-dark small">Alan Putra</div>
                    <div class="text-warning extra-small">★★★★★</div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="p-4 bg-white rounded-4 border shadow-sm h-100 d-flex flex-column justify-content-between">
                <p class="text-muted small fst-italic mb-3">"Sistem pendaftaran websitenya simpel dan praktis. Setelah daftar langsung dapat slot sesi latihan Padel Tennis bareng komunitas!"</p>
                <div>
                    <div class="fw-bold text-dark small">Imar MS</div>
                    <div class="text-warning extra-small">★★★★★</div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="p-4 bg-white rounded-4 border shadow-sm h-100 d-flex flex-column justify-content-between">
                <p class="text-muted small fst-italic mb-3">"Fitur pendaftaran event-nya mudah di pahami banget! kita gak perlu repot buka tutorial daftar"</p>
                <div>
                    <div class="fw-bold text-dark small">Wedelia Eka Putri</div>
                    <div class="text-warning extra-small">★★★★★</div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="p-4 bg-white rounded-4 border shadow-sm h-100 d-flex flex-column justify-content-between">
                <p class="text-muted small fst-italic mb-3">"Pengalaman ikutan weekly workout seru banget! Pendaftaran modal pop-up nya smooth dan ga ribet sama sekali."</p>
                <div>
                    <div class="fw-bold text-dark small">Fridha Zoel</div>
                    <div class="text-warning extra-small">★★★★★</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection