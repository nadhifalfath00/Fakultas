<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kerjasama</title>
    <link rel="icon" href="/MBKM/Asset/Universitas Abulyatama.png" type="image/x-icon">
    <!-- bootstrap css -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- animate css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Swiper.js JS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@latest/swiper-bundle.min.css" />
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- remix icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

    <style>
    /* Gaya header tabel */
    .table thead th {
        background-color: #2e7d32;
        /* Warna hijau tua */
        color: white;
    }

    /* Gaya hover untuk baris tabel */
    .table-hover tbody tr:hover {
        background-color: #e8f5e9;
        /* Hijau muda saat di-hover */
    }

    /* Warna untuk status */
    .status-active {
        background-color: #a5d6a7;
        color: #1b5e20;
        font-weight: bold;
        border-radius: 5px;
        padding: 2px 8px;
    }

    .status-inactive {
        background-color: #ef9a9a;
        color: #b71c1c;
        font-weight: bold;
        border-radius: 5px;
        padding: 2px 8px;
    }

    /* Efek fade-in */
    .fade-in {
        opacity: 0;
        animation: fadeIn 1s ease-in forwards;
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }
    </style>
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
            <h1 class="display-4 fw-bold">Kerja Sama Fakultas Teknik</h1>
            <p class="lead">Membangun Masa Depan Bersama</p>
        </div>
    </section>

    <!-- main content -->
    <!-- Konten Kerja Sama -->
    <div class="container mt-5">
        <h2 class="text-center mb-5 kerjasama-section-title" data-aos="fade-up">Daftar Kerja Sama</h2>

        <!-- Tabel Kerja Sama -->
        <div class="table-responsive fade-in">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kerjasama</th>
                        <th>Tanggal Kerjasama</th>
                        <th>Status Kerjasama</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Kerjasama Riset dengan Universitas ABC</td>
                        <td>10 Maret 2023</td>
                        <td><span class="status-active">Aktif</span></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Pengembangan Infrastruktur dengan PT XYZ</td>
                        <td>15 Juli 2022</td>
                        <td><span class="status-inactive">Tidak Aktif</span></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Magang Industri dengan PT Teknologi Cipta</td>
                        <td>01 Januari 2024</td>
                        <td><span class="status-active">Aktif</span></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Pengabdian Masyarakat dengan Pemda Z</td>
                        <td>05 November 2023</td>
                        <td><span class="status-active">Aktif</span></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Pelatihan dan Workshop dengan Universitas X</td>
                        <td>20 Februari 2022</td>
                        <td><span class="status-inactive">Tidak Aktif</span></td>
                    </tr>
                </tbody>
            </table>
        </div>


        <!-- end content -->

        <!-- Footer -->
        <?php include('footer.php'); ?>
        <!-- End Footer -->

        <!-- library javascript -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
        AOS.init();
        </script>


        <!-- template javascript -->
        <script src="js/main.js"></script>

</body>

</html>