<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laboratorium</title>
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
        <h1 class="display-4 fw-bold">Laboratorium Fakultas</h1>
        <p class="lead">Temukan Inspirasi, Inovasi, dan Wawasan baru di Laboratorium Fakultas Ultra Modern Kami</p>
    </div>
</section>

<!-- main content -->
<div class="container mt-5">
        <section id="fasilitas" class="mb-5">
            <h2 class="mb-4 lab-section-title">Fasilitas Laboratorium</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow lab-card">
                        <img src="https://source.unsplash.com/600x400/?computer-science" class="card-img-top" alt="Lab Sistem Informasi">
                        <div class="card-body">
                            <h5 class="card-title">Laboratorium Sistem Informasi</h5>
                            <p class="card-text">Pusat pengembangan dan penelitian teknologi informasi terkini.</p>
                            <a href="#lab-si" class="btn btn-primary lab-btn-custom">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow lab-card">
                        <img src="https://source.unsplash.com/600x400/?mechanical-engineering" class="card-img-top" alt="Lab Teknik Mesin">
                        <div class="card-body">
                            <h5 class="card-title">Laboratorium Teknik Mesin</h5>
                            <p class="card-text">Fasilitas lengkap untuk eksperimen dan penelitian mekanika.</p>
                            <a href="#lab-mesin" class="btn btn-primary lab-btn-custom">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow lab-card">
                        <img src="https://source.unsplash.com/600x400/?civil-engineering" class="card-img-top" alt="Lab Teknik Sipil">
                        <div class="card-body">
                            <h5 class="card-title">Laboratorium Teknik Sipil</h5>
                            <p class="card-text">Peralatan modern untuk pengujian material dan struktur.</p>
                            <a href="#lab-sipil" class="btn btn-primary lab-btn-custom">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="lab-si" class="lab-section">
            <h2 class="mb-4 lab-section-title">Laboratorium Sistem Informasi</h2>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="lab-image-wrapper">
                        <img src="https://source.unsplash.com/600x400/?data-center" class="img-fluid" alt="Lab Sistem Informasi">
                    </div>
                    <p class="mt-3 text-muted">Ruang server dengan perangkat keras canggih untuk mendukung penelitian di bidang sistem informasi.</p>
                </div>
                <div class="col-md-6">
                    <h3 class="mb-3">Fasilitas:</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="fas fa-server lab-list-icon me-2"></i> Server Performa Tinggi</li>
                        <li class="list-group-item"><i class="fas fa-network-wired lab-list-icon me-2"></i> Jaringan Gigabit</li>
                        <li class="list-group-item"><i class="fas fa-laptop-code lab-list-icon me-2"></i> Workstation Pemrograman</li>
                        <li class="list-group-item"><i class="fas fa-vr-cardboard lab-list-icon me-2"></i> Perangkat VR/AR</li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="lab-mesin" class="lab-section">
            <h2 class="mb-4 lab-section-title">Laboratorium Teknik Mesin</h2>
            <div class="row align-items-center">
                <div class="col-md-6 ">
                    <div class="lab-image-wrapper">
                        <img src="https://source.unsplash.com/600x400/?mechanical-workshop" class="img-fluid" alt="Lab Teknik Mesin">
                    </div>
                    <p class="mt-3 text-muted">Bengkel mesin modern dengan berbagai peralatan untuk eksperimen dan penelitian di bidang teknik mesin.</p>
                </div>
                <div class="col-md-6 order-md-1">
                    <h3 class="mb-3">Peralatan:</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="fas fa-cogs lab-list-icon me-2"></i> Mesin CNC</li>
                        <li class="list-group-item"><i class="fas fa-wind lab-list-icon me-2"></i> Terowongan Angin</li>
                        <li class="list-group-item"><i class="fas fa-temperature-high lab-list-icon me-2"></i> Furnace Suhu Tinggi</li>
                        <li class="list-group-item"><i class="fas fa-microscope lab-list-icon me-2"></i> Mikroskop Elektron</li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="lab-sipil" class="lab-section">
            <h2 class="mb-4 lab-section-title">Laboratorium Teknik Sipil</h2>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="lab-image-wrapper">
                        <img src="https://source.unsplash.com/600x400/?construction-testing" class="img-fluid" alt="Lab Teknik Sipil">
                    </div>
                    <p class="mt-3 text-muted">Laboratorium lengkap untuk pengujian material konstruksi dan analisis struktur bangunan.</p>
                </div>
                <div class="col-md-6">
                    <h3 class="mb-3">Pengujian:</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="fas fa-cubes lab-list-icon me-2"></i> Uji Kuat Tekan Beton</li>
                        <li class="list-group-item"><i class="fas fa-ruler-combined lab-list-icon me-2"></i> Analisis Struktur</li>
                        <li class="list-group-item"><i class="fas fa-water lab-list-icon me-2"></i> Hidrolika dan Hidrologi</li>
                        <li class="list-group-item"><i class="fas fa-road lab-list-icon me-2"></i> Pengujian Aspal</li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
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