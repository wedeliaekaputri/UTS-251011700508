<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPORT NEWS - Update Sports Terbaru</title>
    
    <!-- Google Fonts: Montserrat -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;1,800&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #FBF9F6;
            color: #1F2937;
            overflow-x: hidden;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main { flex: 1; }

        .navbar {
            background-color: #FBF9F6;
            padding: 20px 0;
        }
        .navbar-brand {
            font-weight: 800;
            font-style: italic;
            letter-spacing: -0.5px;
            font-size: 1.5rem;
            color: #1F2937 !important;
        }
        .navbar-brand span {
            color: #F56300;
        }
        .nav-link {
            color: #4B5563 !important;
            font-weight: 500;
            font-size: 0.95rem;
            transition: color 0.2s;
        }
        .nav-link:hover, .nav-link.active {
            color: #1F2937 !important;
            font-weight: 700;
        }

        .btn-lets-go {
            background-color: #0F172A;
            color: #FFFFFF;
            border-radius: 50px;
            padding: 12px 36px;
            font-weight: 700;
            border: none;
            box-shadow: 0 4px 14px rgba(15, 23, 42, 0.25);
            transition: transform 0.2s;
        }
        .btn-lets-go:hover {
            background-color: #1E293B;
            color: #FFFFFF;
            transform: translateY(-2px);
        }

        .btn-gerak-orange {
            background-color: #F56300;
            color: #FFFFFF;
            border-radius: 50px;
            padding: 10px 28px;
            font-weight: 700;
            border: none;
            transition: transform 0.2s;
        }
        .btn-gerak-orange:hover {
            background-color: #e05500;
            color: #FFFFFF;
            transform: translateY(-2px);
        }

        footer {
            background-color: #0B132B;
            color: #94A3B8;
            padding: 45px 0 25px;
            margin-top: 80px;
        }
        footer a:hover {
            color: #F56300 !important;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('sport.home') }}">SPORT <span>NEWS</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-4 align-items-center">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('sport.home') ? 'active' : '' }}" href="{{ route('sport.home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('sport.sports-list') ? 'active' : '' }}" href="{{ route('sport.sports-list') }}">Sports List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('sport.wellness') ? 'active' : '' }}" href="{{ route('sport.wellness') }}">Wellness</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('sport.about') ? 'active' : '' }}" href="{{ route('sport.about') }}">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row g-4 align-items-center py-2">
                <div class="col-md-5">
                    <h5 class="fw-bold text-white mb-2" style="font-style: italic; letter-spacing: -0.5px;">SPORT <span style="color: #F56300;">NEWS</span></h5>
                    <p class="small text-secondary mb-0" style="max-width: 380px; line-height: 1.6;">
                        Portal berita & katalog olahraga terpercaya untuk mendukung aktivitas fisik, gaya hidup sehat, dan kebugaran tubuh harianmu.
                    </p>
                </div>

                <div class="col-md-4">
                    <h6 class="fw-bold text-white mb-3">Hubungi Kami</h6>
                    <div class="d-flex flex-column gap-2 small">
                        <div class="d-flex align-items-center gap-2">
                            <span class="text-warning">✉</span>
                            <span class="text-secondary">Email:</span>
                            <a href="mailto:contact@sportnews.com" class="text-white text-decoration-none fw-semibold">contact@sportnews.com</a>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <span class="text-warning">📸</span>
                            <span class="text-secondary">Instagram:</span>
                            <a href="https://instagram.com" target="_blank" class="text-white text-decoration-none fw-semibold">@sportnews.id</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 text-md-end">
                    <span class="badge bg-secondary bg-opacity-25 text-light border border-secondary border-opacity-25 px-3 py-2 rounded-pill small">
                        UTS Rekayasa Web &bull; 2026
                    </span>
                </div>
            </div>

            <hr class="border-secondary opacity-25 my-4">

            <div class="text-center small text-secondary">
                &copy; 2026 <strong>SPORT NEWS</strong>. All rights reserved.
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>