<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fakultas Teknik</title>
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
        <h1 class="display-4 fw-bold">Artikel</h1>
        <p class="lead">Mengembangkan Jurnal yang Berkualitas dan Berdaya Saing</p>
    </div>
</section>

<!-- main content -->
<div class="jurnal-container">
    <!-- Card pertama: Gambar di sebelah kiri, konten di sebelah kanan -->
    <div class="jurnal-card">
        <!-- <img src="/Web-Profile-Company/img/img.jpg" alt="Tentang Kami" class="service-page-image"> -->
        <div class="jurnal-content">
            <a class="link-artikel" href="">
                <h4 class="jurnal-title">(Judul Jurnal)</h4>
            </a>
            <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) 
            desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de 
            textos especimen. No sólo sobrevivió 500 años, sino que también ingresó como texto de relleno en 
            documentos electrónicos, quedando esencialmente igual al original.</p>
        </div>
        <div class="garis-vertikal"></div>
        <div class="jurnal-content">
            <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) 
            desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de 
            textos especimen. No sólo sobrevivió 500 años, sino que también ingresó como texto de relleno en 
            documentos electrónicos, quedando esencialmente igual al original.</p>
        </div>
    </div>
</div>
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
