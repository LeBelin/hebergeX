<?php
session_start();
include 'bdd.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GreenHost - Web Hosting HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
   <!-- <a href="login.php">Connexion</a>
    <a href="register.php">Inscription</a> -->

    <div class="container-xxl bg-white p-0">



        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                <a href="index.php"><h1 class="m-0"><i class="fa fa-server me-3"></i>Heberge4</h1></a>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Accueil</a>
                        <a href="index.php#apropos" class="nav-item nav-link">A propos</a>
                        <a href="index.php#hebergement" class="nav-item nav-link">Hébergement</a>


                        <a href="index.php#contact" class="nav-item nav-link">Contact</a>
                    </div>
                    <butaton type="button" class="btn text-secondary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
                    <?php if (isset($_SESSION['alias'])): ?>
                        <!-- Utilisateur connecté -->
                        <a href="profile.php" class="btn btn-secondary py-2 px-4 ms-3">Mon Profil</a>
                        <a href="logout.php" class="btn btn-secondary py-2 px-4 ms-3">Déconnexion</a>
                    <?php else: ?>
                        <!-- Utilisateur non connecté -->
                        <a href="register.php" class="btn btn-secondary py-2 px-4 ms-3">Inscription</a>
                        <a href="login.php" class="btn btn-secondary py-2 px-4 ms-3">Connexion</a>
                    <?php endif; ?>
                </div>
            </nav>