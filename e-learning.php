<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Learning</title>
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
        <h1 class="display-4 fw-bold">E-Learning</h1>
        <p class="lead">Temukan E-Learning Yang Sesuai Dengan Kebutuhan dan Kemampuan Anda</p>
    </div>
</section>

<!-- main content -->
<main class="elearning-main mt-5 mb-5">
        <aside class="elearning-sidebar">
            <ul>
                <li><a href="#elearning-sistem-informasi" class="elearning-active"><i class="fas fa-database"></i> Sistem Informasi</a></li>
                <li><a href="#elearning-teknik-mesin"><i class="fas fa-cogs"></i> Teknik Mesin</a></li>
                <li><a href="#elearning-teknik-sipil"><i class="fas fa-hard-hat"></i> Teknik Sipil</a></li>
            </ul>
        </aside>
        <section class="elearning-content">
            <div id="elearning-sistem-informasi">
                <h2 class="elearning-section-title">Sistem Informasi</h2>
                <div class="elearning-card-grid">
                    <div class="elearning-card">
                        <h3>Nama e-learning</h3>
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="elearning-card">
                        <h3></h3>
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="elearning-card">
                        <h3></h3>
                        <p></p>
                    </div>
                </div>
            </div>

            <div id="elearning-teknik-mesin" style="display: none;">
                <h2 class="elearning-section-title">Teknik Mesin</h2>
                <div class="elearning-card-grid">
                    <div class="elearning-card">
                        <h3></h3>
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="elearning-card">
                        <h3></h3>
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="elearning-card">
                        <h3></h3>
                        <p></p>
                    </div>
                </div>
            </div>

            <div id="elearning-teknik-sipil" style="display: none;">
                <h2 class="elearning-section-title">Teknik Sipil</h2>
                <div class="elearning-card-grid">
                    <div class="elearning-card">
                        <h3></h3>
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="elearning-card">
                        <h3></h3>
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="elearning-card">
                        <h3></h3>
                        <p></p>
                    </div>
                </div>
            </div>
        </section>
    </main>
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