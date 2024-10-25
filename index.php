<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fakultas Teknik</title>
    <link rel="icon" href="/MBKM/Asset/Universitas Abulyatama.png" type="image/x-icon">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@latest/swiper-bundle.min.css" />

    <style>
    .loading-screen {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.9);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
        /* Pastikan di atas semua konten */
    }

    .loading-screen .spinner img {
        width: 100px;
        /* Sesuaikan ukuran laba-laba */
        height: auto;
    }
    </style>
</head>

<body>

    <!-- Loading Screen -->
    <div id="loading-screen" class="loading-screen">
        <div class="spinner">
            <img src="asset/img/laba.png" alt="Loading...">
        </div>
    </div>

    <!-- isi konten -->
    <!-- Navbar -->
    <?php include('navbar.php'); ?>

    <!-- Video -->
    <div class="index-video-hero">
        <video class="index-video" autoplay loop muted>
            <source src="asset/footage landing page.mp4" type="video/mp4">
        </video>
    </div>

    <!-- Fitur 4 -->
    <!-- card pertama -->
    <section class="card-section">
        <div class="home-container mb-5 mt-5 py-5">
            <div class="d-lg-flex justify-content-center">
                <div class="d-md-flex align-items-center mb-lg-0 mb-md-5">
                    <div class="home-col2 me-md-4 mb-md-0 mb-5">
                        <a href="https://siakad.unaya.ac.id/" target="_blank" class="home-card pb-4">
                            <span class="fas fa-building-columns mt-3"></span>
                            <p class="home-h4 pt-4">SIAKAD</p>
                            <p class="p1 text-center">Sistem Informasi Akademik Unaya</p>
                            <span class="fas fa-arrow-right"></span>
                        </a>
                    </div>
                    <div class="home-col2 me-md-4 mb-md-0 mb-5">
                        <a href="https://www.instagram.com/himasi_unaya?igsh=MWcybTEzaHV5czA0dw==" target="_blank"
                            class="home-card pb-4">
                            <span class="fas fa-computer mt-3"></span>
                            <p class="home-h4 pt-4">HIMASI</p>
                            <p class="p1 text-center">Himpunan Mahasiswa Sistem Informasi</p>
                            <span class="fas fa-arrow-right"></span>
                        </a>
                    </div>
                    <div class="home-col3 me-md-4 mb-md-0 mb-5">
                        <a href="https://www.instagram.com/himatesya?igsh=MTR6em9wMG5uNjZtYQ==" target="_blank"
                            class="home-card pb-4">
                            <span class="fas fa-city mt-3"></span>
                            <p class="home-h4 pt-4">HIMATESYA</p>
                            <p class="p1 text-center">Himpunan Mahasiswa Teknik Sipil</p>
                            <span class="fas fa-arrow-right"></span>
                        </a>
                    </div>
                    <div class="home-col3 me-md-4 mb-md-0 mb-5">
                        <a href="https://www.instagram.com/hmm_unaya?igsh=N2Fkcms3M3NlODNt" target="_blank"
                            class="home-card pb-4">
                            <span class="fas fa-gears mt-3"></span>
                            <p class="home-h4 pt-4">HMM</p>
                            <p class="p1 text-center">Himpunan Mahasiswa Teknik Mesin</p>
                            <span class="fas fa-arrow-right"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Selamat -->
    <div class="index-sambutan mt-5 mb-5">
        <div class="index-sambutan-image-container">
            <img src="asset/img/dekanFt.jpg" alt="Foto Dekan Kiri" class="index-sambutan-foto">
        </div>
        <div class="index-sambutan-overlay">
            <h2 class="index-sambutan-title">Dr. Ir. Cut Rahmawati, M.T., IPM </h2>
            <h3 class="index-sambutan-subtitle">Dekan Fakultas Teknik</h3>
            <p class="index-sambutan-text">
                Kami menyambut hangat para mahasiswa baru Universitas Bandung. Dengan semangat baru dan tekad untuk
                maju,
                mari bersama-sama meraih prestasi dan mengharumkan nama almamater tercinta ini.</p>
        </div>
    </div>

    <!-- Pengumuman -->
    <div class="container-announcement mt-5 py-3">
        <div class="row">
            <!-- Kolom Pengumuman -->
            <div class="col-md-6">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="index-section-title">Pengumuman</span>
                </div>

                <!-- Announcement 1 -->
                <div class="index-announcement">
                    <img alt="Megaphone icon" src="asset/img/announcement.jpg" width="60" height="60" />
                    <div class="index-content">
                        <h5>Ujian Tengah Semester (UTS) Genap Tahun Akademik 2023/2024</h5>
                        <p class="meta">
                            <i class="far fa-calendar-alt"></i> 29 Mei 2024
                        </p>
                        <p>Berdasarkan surat edaran Fakultas Teknik Universitas Bandung, pelaksanaan Ujian...</p>
                    </div>
                </div>

                <!-- Announcement 2 -->
                <div class="index-announcement">
                    <img alt="Megaphone icon" src="asset/img/announcement.jpg" width="60" height="60" />
                    <div class="index-content">
                        <h5>Libur Hari Raya Idul Fitri 1445 H</h5>
                        <p class="meta">
                            <i class="far fa-calendar-alt"></i> 30 Maret 2024
                        </p>
                        <p>Seluruh kegiatan akademik akan libur pada tanggal 30 Maret hingga 2 April...</p>
                    </div>
                </div>

                <!-- Announcement 3 -->
                <div class="index-announcement">
                    <img alt="Megaphone icon" src="asset/img/announcement.jpg" width="60" height="60" />
                    <div class="index-content">
                        <h5>Pelaksanaan Yudisium Sarjana Periode 2024</h5>
                        <p class="meta">
                            <i class="far fa-calendar-alt"></i> 15 Mei 2024
                        </p>
                        <p>Yudisium akan dilaksanakan pada 15 Mei 2024, semua mahasiswa diharapkan hadir...</p>
                    </div>
                </div>
            </div>

            <!-- Kolom Daftar Download -->
            <div class="col-md-6">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="index-section-title">Download</span>
                </div>
                <ul class="index-download-list">
                    <li><a href="#">Panduan Akademik 2023/2024</a></li>
                    <li><a href="#">Kurikulum 2023/2024</a></li>
                    <li><a href="#">Brosur Fakultas Teknik</a></li>
                </ul>
            </div>
        </div>
    </div>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
    // Menghapus loading screen setelah konten dimuat
    window.addEventListener("load", function() {
        document.getElementById("loading-screen").style.display = "none";
    });
    </script>
</body>

</html>