<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms - J's Crest Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body class="rooms-page">

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

            <a class="navbar-brand navbar-brand-center" href="index.php">
                <img src="media/logo.png" class="navbar-logo">
            </a>

            <div class="collapse navbar-collapse justify-content-between">
                <ul class="navbar-nav me-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">
                            Accommodation
                        </a>
                        <ul class="dropdown-menu">
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

</div>

<!-- OFFCANVAS MENU -->
<div class="offcanvas offcanvas-start" id="offcanvasNav">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">J's Crest Hotel</h5>
        <button class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="rooms.php">Accommodation</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Offers</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Dining</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        </ul>
    </div>
</div>

<!-- ROOMS CONTENT -->
<div class="rooms-container">
    <div class="container">
        <div class="back-button">
            <a href="index.php">← Back to Home</a>
        </div>

        <div class="rooms-header">
            <h1>Our Rooms</h1>
            <p>Experience comfort and luxury in our beautifully designed rooms</p>
        </div>

        <div class="row">
            <!-- Standard Room -->
            <div class="col-md-6 col-lg-4">
                <div class="room-card">
                    <div class="room-image" style="background-image: url('media/bg-1.jpg');"></div>
                    <div class="room-details">
                        <h3>Standard Room</h3>
                        <div class="room-price">$99/night</div>
                        <p class="room-description">
                            Comfortable and welcoming, our standard rooms feature essential amenities for a pleasant stay.
                        </p>
                        <div class="room-amenities">
                            <h5>Amenities:</h5>
                            <span class="amenity">WiFi</span>
                            <span class="amenity">AC</span>
                            <span class="amenity">TV</span>
                            <span class="amenity">Bathroom</span>
                        </div>
                        <button class="room-button">Book Room</button>
                    </div>
                </div>
            </div>

            <!-- Deluxe Room -->
            <div class="col-md-6 col-lg-4">
                <div class="room-card">
                    <div class="room-image" style="background-image: url('media/bg-2.jpg');"></div>
                    <div class="room-details">
                        <h3>Deluxe Room</h3>
                        <div class="room-price">$149/night</div>
                        <p class="room-description">
                            Spacious and elegant, our deluxe rooms offer enhanced comfort with premium furnishings.
                        </p>
                        <div class="room-amenities">
                            <h5>Amenities:</h5>
                            <span class="amenity">WiFi</span>
                            <span class="amenity">AC</span>
                            <span class="amenity">Smart TV</span>
                            <span class="amenity">Mini Bar</span>
                            <span class="amenity">Bath Tub</span>
                        </div>
                        <button class="room-button">Book Room</button>
                    </div>
                </div>
            </div>

            <!-- Suite -->
            <div class="col-md-6 col-lg-4">
                <div class="room-card">
                    <div class="room-image" style="background-image: url('media/bg-3.jpg');"></div>
                    <div class="room-details">
                        <h3>Luxury Suite</h3>
                        <div class="room-price">$249/night</div>
                        <p class="room-description">
                            Our premium suite offers ultimate luxury with separate living areas and stunning city views.
                        </p>
                        <div class="room-amenities">
                            <h5>Amenities:</h5>
                            <span class="amenity">WiFi</span>
                            <span class="amenity">AC</span>
                            <span class="amenity">Smart TV</span>
                            <span class="amenity">Mini Bar</span>
                            <span class="amenity">Jacuzzi</span>
                            <span class="amenity">Lounge</span>
                        </div>
                        <button class="room-button">Book Room</button>
                    </div>
                </div>
            </div>

            <!-- Family Room -->
            <div class="col-md-6 col-lg-4">
                <div class="room-card">
                    <div class="room-image" style="background-image: url('media/bg-4.jpg');"></div>
                    <div class="room-details">
                        <h3>Family Room</h3>
                        <div class="room-price">$199/night</div>
                        <p class="room-description">
                            Perfect for families, our spacious family rooms accommodate up to 4 guests comfortably.
                        </p>
                        <div class="room-amenities">
                            <h5>Amenities:</h5>
                            <span class="amenity">WiFi</span>
                            <span class="amenity">AC</span>
                            <span class="amenity">Multiple Beds</span>
                            <span class="amenity">Game Console</span>
                            <span class="amenity">Kitchen</span>
                        </div>
                        <button class="room-button">Book Room</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>

</body>
</html>
