<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="main.css">
    <title>Portfolio Belbacha Sofian</title>
</head>

<body>
    <header class="header">
        <div class="row g-0">
            <nav class="navbar navbar-expand-lg" style="z-index: 3;">
                <div class="container align-items-center mx-auto">
                    <a class="navbar-brand fw-bold fs-4" href="#">Sofian <span
                            style="color: #d1002c;">BELBACHA</span></a>
                    <button class="navbar-toggler bg-light border-light-subtle" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                        aria-labelledby="offcanvasExampleLabel" style="height: 100vh;">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title fw-bold" id="offcanvasExampleLabel">Menu</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body justify-content-end">
                            <ul class="navbar-nav mb-2 mb-lg-0 ">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#Profil">Profil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#compétences">Comepétence</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#Comepetence" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Autres
                                    </a>
                                    <ul class="dropdown-menu mt-2">
                                        <li><a class="dropdown-item dropdown-item-text" href="#Services">Services</a></li>
                                        <li><a class="dropdown-item" href="#portfolio">Portfolio</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact_area">contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" style="width: 100%;">
                        <div class="slider-item" style="background-image: url(image/a27_cleanup.jpg); height: 100vh;">
                            <div class="container">
                                <div class="content">
                                    <h1 class="title">Bienvenue sur mon site web portfolio en ligne !</h1>
                                    <p style="max-width: 370px;">Je suis Sofian, développeur en informatique. N'hésitez
                                        pas à consulter mes informations et compétences ou me contacter.</p>
                                    <a class="btn btn-danger btn-lg" href="#contact_area">Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="width: 100%;">
                        <div class="slider-item" style="background-image: url(image/bg_1.jpg.webp); height:100vh;">
                            <div class="container">
                                <div class="content">
                                    <h1 class="title">Bienvenue sur mon site web portfolio en ligne !</h1>
                                    <p style="max-width: 370px;">Vous trouverez toutes les infos me concernant tel que mon cv, mes compétences...</p>
                                    <a class="btn btn-danger btn-lg" onclick="openPDF()">Telecharger mon CV</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>