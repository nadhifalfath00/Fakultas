<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpustakaan</title>
    <link rel="icon" href="/MBKM/Asset/Universitas Abulyatama.png" type="image/x-icon">
    <!-- bootstrap css -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- animate css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Swiper.js JS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@latest/swiper-bundle.min.css"/>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- remix icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
<!-- navbar -->
<?php
include('navbar.php');
?>
<!-- end navbar -->

<!-- Hero Section -->
<section class="hero">
    <div>
        <h1 class="display-4 fw-bold">Jelajahi Masa Depan Pengetahuan</h1>
        <p class="lead">Temukan Inspirasi, Inovasi, dan Wawasan baru di Perpustakaan Fakultas Ultra Modern Kami</p>
        <a href="http://slims.abulyatama.ac.id/" class="btn perpus-btn-custom btn-lg">Mulai Petualangan</a>
    </div>
</section>

<!-- main content -->
 <!-- Koleksi Terbaru -->
 <section class="py-5" id="koleksi">
        <div class="container">
            <h2 class="text-center perpus-section-title">Koleksi Terkini</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card perpus-card h-100">
                        <img src="https://source.unsplash.com/random/400x300/?futuristic-book" class="perpus-card-img-top" alt="Buku 1">
                        <div class="card-body">
                            <h5 class="perpus-card-title">Revolusi AI dalam Pendidikan</h5>
                            <p class="card-text">Eksplorasi mendalam tentang bagaimana AI mengubah lanskap pendidikan global.</p>
                            <a href="http://slims.abulyatama.ac.id/" class="btn perpus-btn-custom">Pinjam Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card perpus-card h-100">
                        <img src="https://source.unsplash.com/random/400x300/?quantum-physics" class="perpus-card-img-top" alt="Buku 2">
                        <div class="card-body">
                            <h5 class="perpus-card-title">Fisika Kuantum untuk Masa Depan</h5>
                            <p class="card-text">Panduan komprehensif tentang aplikasi fisika kuantum dalam teknologi modern.</p>
                            <a href="http://slims.abulyatama.ac.id/" class="btn perpus-btn-custom">Pinjam Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card perpus-card h-100">
                        <img src="https://source.unsplash.com/random/400x300/?bioengineering" class="perpus-card-img-top" alt="Buku 3">
                        <div class="card-body">
                            <h5 class="perpus-card-title">Bioteknologi: Merancang Kehidupan</h5>
                            <p class="card-text">Eksplorasi etika dan inovasi dalam rekayasa genetika dan bioteknologi.</p>
                            <a href="http://slims.abulyatama.ac.id/" class="btn perpus-btn-custom">Pinjam Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Layanan Unggulan -->
    <section class="bg-white py-5">
        <div class="container">
            <h2 class="text-center perpus-section-title">Layanan Futuristik Kami</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="text-center">
                        <i class="fas fa-vr-cardboard perpus-service-icon"></i>
                        <h4>Perpustakaan Virtual Reality</h4>
                        <p>Jelajahi rak-rak buku virtual dan berinteraksi dengan konten dalam lingkungan 3D yang imersif.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <i class="fas fa-brain perpus-service-icon"></i>
                        <h4>AI Research Assistant</h4>
                        <p>Asisten penelitian berbasis AI yang dapat menganalisis dan merangkum ribuan sumber dalam hitungan detik.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <i class="fas fa-cube perpus-service-icon"></i>
                        <h4>Holographic Learning Pods</h4>
                        <p>Ruang belajar holografik untuk diskusi interaktif dan presentasi multi-dimensi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistik Perpustakaan -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center perpus-section-title">Statistik Perpustakaan</h2>
            <div class="row text-center">
                <div class="col-md-3 mb-4">
                    <h3 class="perpus-stat-number">100,000+</h3>
                    <p class="perpus-lead">E-Book & Sumber Digital</p>
                </div>
                <div class="col-md-3 mb-4">
                    <h3 class="perpus-stat-number">50,000+</h3>
                    <p class="perpus-lead">Pengguna Aktif</p>
                </div>
                <div class="col-md-3 mb-4">
                    <h3 class="perpus-stat-number">500+</h3>
                    <p class="perpus-lead">Kursus Online</p>
                </div>
                <div class="col-md-3 mb-4">
                    <h3 class="perpus-stat-number">24/7</h3>
                    <p class="perpus-lead">Akses Global</p>
                </div>
            </div>
        </div>
    </section>
<!-- end content -->    

<!-- Footer -->
<?php include('footer.php'); ?>
<!-- End Footer -->


<!-- library javascript -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

    
<!-- template javascript -->
<script src="js/main.js"></script>

</body>
</html>