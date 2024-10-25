<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HMM</title>
    <link rel="icon" href="/MBKM/Asset/Universitas Abulyatama.png" type="image/x-icon">
    <!-- bootstrap css -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- caraousel bootstrap -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" crossorigin="anonymous" />
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
    <div class="container-hero text-center">
        <h1 class="display-4 fw-bold">Himpunan Mahasiswa Teknik Mesin</h1>
        <p class="lead">Menciptakan Mahasiswa Teknik Mesin yang Berkualitas dan Berdaya Saing</p>
    </div>
</section>

<!-- main content -->
<div class="bem-section">
    <div class="container">
        <!-- <h2 class="bem-section-title mb-5">Visi dan Misi <br>Badan Eksekutif Mahasiswa</h2> -->
        <div class="row g-4 align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="bem-image-wrapper">
                    <img src="asset/img/Universitas Abulyatama.png" alt="Logo Universitas Abulyatama">
                </div>
            </div>
            <div class="col-md-6">
                <div class="accordion bem-accordion" id="accordionMasukan">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseMasukan1" aria-expanded="false" aria-controls="collapseMasukan1">
                                <i class="fas fa-book-open me-2"></i> Visi Himpunanan Mahasiswa Teknik Mesin
                            </button>
                        </h2>
                        <div id="collapseMasukan1" class="accordion-collapse collapse" data-bs-parent="#accordionMasukan">
                            <div class="accordion-body">
                            Menciptakan mahasiswa IT yang berwawasan global, inovativ, menjunjung nilai kekeluargaan, dan mampu menginspirasi lingkungan sekitar.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseMasukan2" aria-expanded="false" aria-controls="collapseMasukan2">
                                <i class="fas fa-user-graduate me-2"></i> Misi Himpunanan Mahasiswa Teknik Mesin
                            </button>
                        </h2>
                        <div id="collapseMasukan2" class="accordion-collapse collapse" data-bs-parent="#accordionMasukan">
                            <div class="accordion-body">
                                <li>
                                Menyediakan program-program inovatif dan mendukung program-program jurusan Sistem Informasi 
                                guna meningkatkan pengetahuan dan  kreativitas mahasiswa
                                </li>
                                <li>
                                Meningkatkan soft skills anggota guna memaksimalkan potensi yang dimiliki
                                </li>
                                <li>
                                Menumbuhkan nilai kekeluargaan dan rasa solidaritas pada lingkungan 
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  

<!-- Struktur Organisasi Section -->

<section class="struktur-section">
    <section class="si-vision-mission-section">
        <h2 class="si-visimisi text-center mb-2 mt-2" style="color: #f9f3d9">Struktur Organisasi HMM</h2>
    </section>
        <div class="container-organisasi text-center">
            <!-- <h6 class="bem-section-title">Struktur Organisasi Himasi</h6> -->
            <!-- Gambar Struktur Organisasi -->
            <img src="/Teknik-Unaya/asset/img/Struktur Himasi.png" alt="Struktur Organisasi Fakultas Teknik" class="org-maha-image">
            <!-- Ganti URL gambar di atas dengan path gambar struktur organisasi Anda -->
        </div>
</section>

<!-- Carousel Himpunan News -->

<section class="si-vision-mission-section">
        <h2 class="si-visimisi text-center mb-2 mt-2" style="color: #f9f3d9">Kegiatan HMM</h2>
    </section>
<section class="bem-section py-5">
    <div class="container">
        <!-- Carousel Wrapper -->
        <div id="newsCarousel" class="carousel slide mt-4" data-ride="carousel">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="row">
                        <!-- slide 1 -->
                        <div class="col-md-4 mb-4">
                            <div class="kerjasama-card">
                                <div class="kerjasama-card-image">
                                    <img src="/Teknik-Unaya/asset/img/footage kerjasama.jpeg" class="kerjasama-card-img-top" alt="Kerja Sama 1">
                                </div>
                                <div class="kerjasama-card-body">
                                    <div class="post-meta text-uppercase fs-6 text-secondary mb-2">
                                        <span class="post-category">Teknologi /</span>
                                        <span class="meta-day"> jul 11, 2022</span>
                                    </div>
                                    <h5 class="post-title text-uppercase">
                                        <a>Pengembangan Teknologi Baru untuk Meningkatkan Efisiensi</a>
                                    </h5>
                                    <p>Inovasi teknologi terus berlanjut untuk meningkatkan kualitas hidup masyarakat...</p>
                                </div>
                            </div>
                        </div>
                        <!-- slide 2 -->
                        <div class="col-md-4 mb-4">
                            <div class="kerjasama-card">
                                <div class="kerjasama-card-image">
                                    <img src="/Teknik-Unaya/asset/img/footage kerjasama.jpeg" class="kerjasama-card-img-top" alt="Kerja Sama 1">
                                </div>
                                <div class="kerjasama-card-body">
                                    <div class="post-meta text-uppercase fs-6 text-secondary mb-2">
                                        <span class="post-category">Teknologi /</span>
                                        <span class="meta-day"> jul 11, 2022</span>
                                    </div>
                                    <h5 class="post-title text-uppercase">
                                        <a>Pengembangan Teknologi Baru untuk Meningkatkan Efisiensi</a>
                                    </h5>
                                    <p>Inovasi teknologi terus berlanjut untuk meningkatkan kualitas hidup masyarakat...</p>
                                </div>
                            </div>
                        </div>
                        <!-- slide 3 -->
                        <div class="col-md-4 mb-4">
                            <div class="kerjasama-card">
                                <div class="kerjasama-card-image">
                                    <img src="/Teknik-Unaya/asset/img/footage kerjasama.jpeg" class="kerjasama-card-img-top" alt="Kerja Sama 1">
                                </div>
                                <div class="kerjasama-card-body">
                                    <div class="post-meta text-uppercase fs-6 text-secondary mb-2">
                                        <span class="post-category">Teknologi /</span>
                                        <span class="meta-day"> jul 11, 2022</span>
                                    </div>
                                    <h5 class="post-title text-uppercase">
                                        <a>Pengembangan Teknologi Baru untuk Meningkatkan Efisiensi</a>
                                    </h5>
                                    <p>Inovasi teknologi terus berlanjut untuk meningkatkan kualitas hidup masyarakat...</p>
                                </div>
                            </div>
                        </div>
                        <!-- slide 4 -->
                        <div class="col-md-4 mb-4">
                            <div class="kerjasama-card">
                                <div class="kerjasama-card-image">
                                    <img src="/Teknik-Unaya/asset/img/footage kerjasama.jpeg" class="kerjasama-card-img-top" alt="Kerja Sama 1">
                                </div>
                                <div class="kerjasama-card-body">
                                    <div class="post-meta text-uppercase fs-6 text-secondary mb-2">
                                        <span class="post-category">Teknologi /</span>
                                        <span class="meta-day"> jul 11, 2022</span>
                                    </div>
                                    <h5 class="post-title text-uppercase">
                                        <a>Pengembangan Teknologi Baru untuk Meningkatkan Efisiensi</a>
                                    </h5>
                                    <p>Inovasi teknologi terus berlanjut untuk meningkatkan kualitas hidup masyarakat...</p>
                                </div>
                            </div>
                        </div>
                        <!-- slide 5 -->
                        <div class="col-md-4 mb-4">
                            <div class="kerjasama-card">
                                <div class="kerjasama-card-image">
                                    <img src="/Teknik-Unaya/asset/img/footage kerjasama.jpeg" class="kerjasama-card-img-top" alt="Kerja Sama 1">
                                </div>
                                <div class="kerjasama-card-body">
                                    <div class="post-meta text-uppercase fs-6 text-secondary mb-2">
                                        <span class="post-category">Teknologi /</span>
                                        <span class="meta-day"> jul 11, 2022</span>
                                    </div>
                                    <h5 class="post-title text-uppercase">
                                        <a>Pengembangan Teknologi Baru untuk Meningkatkan Efisiensi</a>
                                    </h5>
                                    <p>Inovasi teknologi terus berlanjut untuk meningkatkan kualitas hidup masyarakat...</p>
                                </div>
                            </div>
                        </div>
                        <!-- slide 6 -->
                        <div class="col-md-4 mb-4">
                            <div class="kerjasama-card">
                                <div class="kerjasama-card-image">
                                    <img src="/Teknik-Unaya/asset/img/footage kerjasama.jpeg" class="kerjasama-card-img-top" alt="Kerja Sama 1">
                                </div>
                                <div class="kerjasama-card-body">
                                    <div class="post-meta text-uppercase fs-6 text-secondary mb-2">
                                        <span class="post-category">Teknologi /</span>
                                        <span class="meta-day"> jul 11, 2022</span>
                                    </div>
                                    <h5 class="post-title text-uppercase">
                                        <a>Pengembangan Teknologi Baru untuk Meningkatkan Efisiensi</a>
                                    </h5>
                                    <p>Inovasi teknologi terus berlanjut untuk meningkatkan kualitas hidup masyarakat...</p>
                                </div>
                            </div>
                        </div>
                        <!-- Duplicate posts removed for clarity -->
                    </div>
                </div>
                <!-- Add more slides as needed -->
            </div>
        </div>
    </div>
</section>
<!-- end carousel himpunan news -->

<!-- end content -->

<!-- Footer -->
<?php include('footer.php'); ?>
<!-- End Footer -->

<!-- library javascript -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script>
<script src="https://code.jquery.com/jquery-1.12.4.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" crossorigin="anonymous"></script>
    
<!-- template javascript -->
<script src="js/main.js"></script>


</body>
</html>
