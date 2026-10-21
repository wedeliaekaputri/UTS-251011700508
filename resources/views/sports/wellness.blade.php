@extends('layouts.app')

@section('content')

<!-- 1. Header Section Wellness (Satu Kategori & Tidak Terpotong) -->
<div class="container my-4">
    <div class="position-relative rounded-5 overflow-hidden shadow-sm text-white d-flex align-items-center justify-content-center text-center p-4 p-md-5" style="min-height: 220px; background: linear-gradient(135deg, #0F172A 0%, #1E293B 100%);">
        <div class="z-1">
            <span class="badge bg-warning text-dark fw-bold px-3 py-2 rounded-pill mb-3 text-uppercase" style="letter-spacing: 1px;">PANDUAN LIFESTYLE & WELLNESS</span>
            <h1 class="display-5 fw-bold mb-2" style="font-style: italic;">Fit & Healthy Starter Guide</h1>
            <p class="text-light opacity-75 mx-auto mb-0" style="max-width: 650px;">
                Panduan khusus pemula untuk membangun kebiasaan hidup sehat, mengatur durasi latihan, hingga kalkulator hidrasi harian.
            </p>
        </div>
    </div>
</div>

<!-- 2. Section Khusus Pemula (Beda Total dari Home) -->
<div class="container my-5 py-3">
    <div class="text-center mb-5">
        <span class="badge rounded-pill px-3 py-2 fw-bold text-white mb-2" style="background-color: #F56300;">PANDUAN PEMULA</span>
        <h2 class="fw-bold text-dark display-6" style="font-style: italic;">Strategi Olahraga Efektif bagi Pemula</h2>
        <p class="text-muted">Mulai perjalanan kebugaranmu secara aman tanpa perlu memaksakan fisik berlebihan</p>
    </div>

    <div class="row g-4">
        <!-- Poin 1 -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 border-0 shadow-sm rounded-4 p-4 text-center bg-white">
                <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-primary bg-opacity-10 mb-3 mx-auto" style="width: 60px; height: 60px;">
                    <span style="font-size: 1.6rem;">🎯</span>
                </div>
                <h5 class="fw-bold text-dark mb-2">1. Prinsip FITT</h5>
                <p class="text-muted small mb-0" style="line-height: 1.6;">
                    Atur Frekuensi (3x/minggu), Intensitas sedang, Tipe olahraga yang disukai, dan Tentukan Waktu (20-30 menit per sesi).
                </p>
            </div>
        </div>

        <!-- Poin 2 -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 border-0 shadow-sm rounded-4 p-4 text-center bg-white">
                <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-warning bg-opacity-10 mb-3 mx-auto" style="width: 60px; height: 60px;">
                    <span style="font-size: 1.6rem;">📈</span>
                </div>
                <h5 class="fw-bold text-dark mb-2">2. Progressive Overload</h5>
                <p class="text-muted small mb-0" style="line-height: 1.6;">
                    Tingkatkan beban atau durasi latihan secara bertahap setiap minggu agar tubuh bisa beradaptasi secara optimal.
                </p>
            </div>
        </div>

        <!-- Poin 3 -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 border-0 shadow-sm rounded-4 p-4 text-center bg-white">
                <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-success bg-opacity-10 mb-3 mx-auto" style="width: 60px; height: 60px;">
                    <span style="font-size: 1.6rem;">💤</span>
                </div>
                <h5 class="fw-bold text-dark mb-2">3. Rest & Recovery</h5>
                <p class="text-muted small mb-0" style="line-height: 1.6;">
                    Otot tumbuh dan pulih saat beristirahat. Pastikan tidur 7-8 jam per malam dan berikan hari jeda istirahat latihan.
                </p>
            </div>
        </div>

        <!-- Poin 4 -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 border-0 shadow-sm rounded-4 p-4 text-center bg-white">
                <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-danger bg-opacity-10 mb-3 mx-auto" style="width: 60px; height: 60px;">
                    <span style="font-size: 1.6rem;">🔥</span>
                </div>
                <h5 class="fw-bold text-dark mb-2">4. Konsistensi Harian</h5>
                <p class="text-muted small mb-0" style="line-height: 1.6;">
                    Latihan ringan 20 menit namun konsisten dilakukan jauh lebih bermanfaat dibanding latihan berat yang hanya bertahan seminggu.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- 3. Section Panduan Nutrisi & Kalkulator Air -->
<div class="w-100 py-5 my-5 bg-white border-top border-bottom">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <span class="badge bg-success text-white fw-bold px-3 py-2 rounded-pill mb-3">NUTRISI SEIMBANG</span>
                <h2 class="fw-bold text-dark display-6 mb-3">Pola Makan Sehat <br><span style="color: #F56300;">Penunjang Kebugaran</span></h2>
                <p class="text-muted mb-4">
                    Kunci tubuh bugar adalah kombinasi 70% pola makan dan 30% olahraga. Pastikan tubuh mendapat bahan bakar gizi yang seimbang.
                </p>

                <div class="row g-4">
                    <div class="col-sm-6">
                        <div class="p-3 bg-light rounded-4 border-start border-4 border-warning">
                            <h6 class="fw-bold text-dark mb-1">Karbohidrat Kompleks</h6>
                            <p class="text-muted small mb-0">Nasi merah, ubi, dan oatmeal menyediakan energi bertahap yang tahan lama.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-3 bg-light rounded-4 border-start border-4" style="border-color: #F56300 !important;">
                            <h6 class="fw-bold text-dark mb-1">Protein Berkualitas</h6>
                            <p class="text-muted small mb-0">Dada ayam, tempe, tahu, dan ikan membantu pembentukan dan perbaikan jaringan otot.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-3 bg-light rounded-4 border-start border-4 border-success">
                            <h6 class="fw-bold text-dark mb-1">Serat & Vitamin</h6>
                            <p class="text-muted small mb-0">Sayuran hijau dan buah-buahan segar menjaga metabolisme dan kesehatan pencernaan.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-3 bg-light rounded-4 border-start border-4 border-info">
                            <h6 class="fw-bold text-dark mb-1">Cairan & Mineral</h6>
                            <p class="text-muted small mb-0">Cukupi konsumsi air mineral harian untuk kelancaran fungsi sirkulasi darah.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kalkulator Air Harian -->
            <div class="col-lg-6">
                <div class="p-4 p-md-5 rounded-5 border shadow-sm" style="background-color: #F8FAFC;">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <h4 class="fw-bold text-dark m-0">Kalkulator Kebutuhan Air Harian</h4>
                    </div>
                    <p class="text-muted small mb-4">Hitung estimasi kecukupan asupan air putih harianmu berdasarkan berat badan dan durasi latihan.</p>

                    <form id="waterCalcForm" onsubmit="return false;">
                        <div class="mb-3">
                            <label class="form-label fw-bold text-dark small">Berat Badan (kg)</label>
                            <input type="number" id="weightInput" class="form-control form-control-lg rounded-3" placeholder="Contoh: 60" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label fw-bold text-dark small">Durasi Olahraga Harian (Menit)</label>
                            <input type="number" id="durationInput" class="form-control form-control-lg rounded-3" placeholder="Contoh: 45" required>
                        </div>
                        <button type="button" onclick="calculateWater()" class="btn btn-lg w-100 rounded-pill fw-bold text-white shadow-sm" style="background-color: #F56300; border: none;">
                            Hitung Kebutuhan Air
                        </button>
                    </form>

                    <div id="resultBox" class="mt-4 p-3 bg-white rounded-4 border text-center d-none">
                        <small class="text-muted text-uppercase fw-bold">Estimasi Kebutuhan Air Anda:</small>
                        <h3 class="fw-bold text-primary my-1" id="waterResult">0 Liter / Hari</h3>
                        <p class="text-muted extra-small mb-0">*Minumlah secara bertahap sepanjang hari.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function calculateWater() {
        const weight = parseFloat(document.getElementById('weightInput').value);
        const duration = parseFloat(document.getElementById('durationInput').value) || 0;

        if (!weight || weight <= 0) {
            alert('Silakan masukkan berat badan yang valid.');
            return;
        }

        let baseWater = weight * 35; 
        let extraWater = (duration / 30) * 350;
        let totalLiters = ((baseWater + extraWater) / 1000).toFixed(1);

        document.getElementById('waterResult').innerText = totalLiters + ' Liter / Hari';
        document.getElementById('resultBox').classList.remove('d-none');
    }
</script>

@endsection