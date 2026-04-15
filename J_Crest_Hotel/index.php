<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>J's Crest Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="navbar-container">

    <!-- BACKGROUND SLIDESHOW -->
    <div class="bg-slideshow">
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
        <div class="slide"></div>
    </div>

    <!-- WHITE FLASH -->
    <div class="white-flash"></div>

    <!-- DARK OVERLAY -->
    <div class="video-overlay"></div>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-transparent">
        <div class="container-fluid position-relative">

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand navbar-brand-center" href="#">
                <img src="media/logo.png" class="navbar-logo">
            </a>

            <div class="collapse navbar-collapse justify-content-between">
                <ul class="navbar-nav me-auto">

                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="accommodationDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Accommodation
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="accommodationDropdown">
                            <li><a class="dropdown-item" href="rooms.php">Rooms</a></li>
                            <li><a class="dropdown-item" href="#">Suites</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Offers</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Dining</a>
                    </li>

                </ul>

                <button class="btn btn-outline-success">Book Now</button>
            </div>
        </div>
    </nav>

    <!-- HERO TEXT -->
    <div class="video-content">
        <h1>Welcome to J's Crest Hotel</h1>
        <p>Experience luxury and comfort</p>
    </div>

</div>

<!-- OFFCANVAS MENU -->
<div class="offcanvas offcanvas-start" id="offcanvasNav">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">J's Crest Hotel</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Accommodation</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Offers</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Dining</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        </ul>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>

</body>
</html>