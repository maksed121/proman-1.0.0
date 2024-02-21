<?php require('conn.php');

$about = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM about ORDER BY id DESC LIMIT 1"));


$skillsq = "SELECT * FROM skills ORDER BY id DESC LIMIT 1";
$skillsdata = mysqli_fetch_array(mysqli_query($conn, $skillsq));



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Home | Maksed </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- <link href="./assets/img/favicon.png" rel="icon">
    <link href="./assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="./assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="./assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="./assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="./assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="./assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="./assets/css/style.css" rel="stylesheet">
    <link href="./assets/css/myStyle.css" rel="stylesheet">
    <link href="./assets/css/button.css" rel="stylesheet">

    <!-- font awesome icons cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">

            <div class="profile">
                <img src="admin/<?= $about['logo'] ?>" alt="" class="img-fluid rounded-circle object-fit-cover" style="height:120px">
                <h1 class="text-light"><a href="index.html"><?= $about['username'] ?></a></h1>
                <div class="social-links mt-3 text-center">
                    <a href="https://www.twitter.com/<?= $about['twitter_url']?>" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="https://www.facebook.com/<?= $about['facebook_url']?>" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="https://www.instagram.com/<?= $about['instagram_url']?>" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="https://www.linkedin.com/<?= $about['linkedin_url']?>" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
            </div>

            <nav id="navbar" class="nav-menu navbar">
                <ul>
                    <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
                    <li><a href="#skills" class="nav-link scrollto"><i class="fa-solid fa-bars-staggered"></i> <span>Skills</span></a></li>
                    <li><a href="#projects" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Projects</span></a></li>
                    <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
                    <!-- <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li> -->
                    <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
                </ul>
            </nav><!-- .nav-menu -->
        </div>
    </header><!-- End Header -->