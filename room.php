<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms - J's Crest Hotel</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="site-header" id="siteHeader">
        <div class="header-inner">
            <div class="nav-left-group">
                <button id="menuToggle" class="nav-toggle" type="button" aria-label="Open menu" aria-expanded="false">
                    <span class="nav-icon" aria-hidden="true">☰</span>
                </button>
                <nav class="main-nav" aria-label="Primary navigation">
                    <ul class="nav-links">
                        <li><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item dropdown">
                            <button class="nav-link dropdown-toggle active" id="accommodationDropdown" type="button" aria-haspopup="true" aria-expanded="false">
                                Accommodations
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="accommodationDropdown">
                                <li><a class="dropdown-item" href="room.php">Rooms</a></li>
                                <li><a class="dropdown-item" href="#">Suites</a></li>
                                <li><a class="dropdown-item" href="#">Villas</a></li>
                            </ul>
                        </li>
                        <li><a class="nav-link" href="#offers">Offers</a></li>
                        <li><a class="nav-link" href="#dining">Dining</a></li>
                    </ul>
                </nav>
            </div>

            <a class="brand-link" href="index.php">
                <img
                    src="media/logo-1.png"
                    data-logo-default="media/logo-1.png"
                    data-logo-scrolled="media/logo-2.png"
                    alt="J's Crest Hotel"
                    class="brand-logo"
                >
            </a>

            <a class="btn-book" href="#book">Book Now</a>
        </div>
    </header>

    <div class="menu-overlay" id="menuOverlay"></div>
    <aside class="side-menu" id="sideMenu" aria-hidden="true">
        <div class="side-menu-header">
            <span class="side-menu-title">Menu</span>
            <button id="menuClose" class="side-menu-close" type="button" aria-label="Close menu">×</button>
        </div>

        <nav class="side-menu-nav" aria-label="Secondary navigation">
            <a class="side-menu-link" href="index.php">Home</a>
            <div class="side-menu-group">
                <button id="sideAccommodationToggle" class="side-menu-link side-menu-dropdown-toggle" type="button" aria-expanded="false">
                    Accommodations
                </button>
                <div class="side-menu-submenu" id="sideAccommodationMenu">
                    <a class="side-menu-sublink" href="room.php">Rooms</a>
                    <a class="side-menu-sublink" href="#">Suites</a>
                    <a class="side-menu-sublink" href="#">Villas</a>
                </div>
            </div>
            <a class="side-menu-link" href="#offers">Offers</a>
            <a class="side-menu-link" href="#dining">Dining</a>
            <a class="side-menu-link" href="#contact">Contact</a>
        </nav>
    </aside>

    <section class="rooms-section" id="book">
        <div class="container">
            <h2>Our Rooms & Accommodations</h2>
            <p class="section-subtitle">Experience comfort and luxury in our beautifully designed rooms</p>

            <!-- Room Categories Carousel -->
            <div class="room-categories-carousel">
                <button class="carousel-nav prev" id="prevCategory">❮</button>

                <div class="carousel-wrapper">
                    <div class="carousel-content" id="carouselContent">

                        <!-- 1. Standard Rooms Category -->
                        <div class="room-category" data-category="standard">
                            <div class="category-header">
                                <h3>Standard Rooms</h3>
                                <p class="category-subtitle">Classic comfort for the discerning traveler</p>
                            </div>
                            <div class="rooms-grid">
                                <div class="room-card">
                                    <div class="room-image" style="background-image: url('media/hotel-1.jpg');"></div>
                                    <div class="room-details">
                                        <h4>Deluxe Room</h4>
                                        <div class="room-price">$149/night</div>
                                        <p class="room-description">Spacious and elegant with premium furnishings and modern amenities.</p>
                                        <button class="room-button">Book Now</button>
                                    </div>
                                </div>
                                <div class="room-card">
                                    <div class="room-image" style="background-image: url('media/bg-1.jpg');"></div>
                                    <div class="room-details">
                                        <h4>Superior Room</h4>
                                        <div class="room-price">$129/night</div>
                                        <p class="room-description">Well-appointed rooms with all essential amenities for your comfort.</p>
                                        <button class="room-button">Book Now</button>
                                    </div>
                                </div>
                                <div class="room-card">
                                    <div class="room-image" style="background-image: url('media/bg-2.jpg');"></div>
                                    <div class="room-details">
                                        <h4>Premier Room</h4>
                                        <div class="room-price">$169/night</div>
                                        <p class="room-description">Enhanced comfort with upscale décor and premium bedding.</p>
                                        <button class="room-button">Book Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 2. Club / Executive Rooms Category -->
                        <div class="room-category" data-category="club">
                            <div class="category-header">
                                <h3>Club & Executive Rooms</h3>
                                <p class="category-subtitle">Enhanced experience with exclusive perks</p>
                            </div>
                            <div class="rooms-grid">
                                <div class="room-card">
                                    <div class="room-image" style="background-image: url('media/bg-3.jpg');"></div>
                                    <div class="room-details">
                                        <h4>Club King</h4>
                                        <div class="room-price">$249/night</div>
                                        <p class="room-description">Exclusive king room with lounge access and complimentary breakfast.</p>
                                        <button class="room-button">Book Now</button>
                                    </div>
                                </div>
                                <div class="room-card">
                                    <div class="room-image" style="background-image: url('media/bg-4.jpg');"></div>
                                    <div class="room-details">
                                        <h4>Club Twin</h4>
                                        <div class="room-price">$239/night</div>
                                        <p class="room-description">Twin beds with executive lounge privileges and business services.</p>
                                        <button class="room-button">Book Now</button>
                                    </div>
                                </div>
                                <div class="room-card">
                                    <div class="room-image" style="background-image: url('media/hotel-1.jpg');"></div>
                                    <div class="room-details">
                                        <h4>Club Regency</h4>
                                        <div class="room-price">$259/night</div>
                                        <p class="room-description">Premium club room with full concierge and priority services.</p>
                                        <button class="room-button">Book Now</button>
                                    </div>
                                </div>
                                <div class="room-card">
                                    <div class="room-image" style="background-image: url('media/bg-1.jpg');"></div>
                                    <div class="room-details">
                                        <h4>Executive Room</h4>
                                        <div class="room-price">$279/night</div>
                                        <p class="room-description">Superior executive accommodations with workspace and premium amenities.</p>
                                        <button class="room-button">Book Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 3. Suites Category -->
                        <div class="room-category" data-category="suites">
                            <div class="category-header">
                                <h3>Luxury Suites</h3>
                                <p class="category-subtitle">Ultimate luxury with spacious living areas</p>
                            </div>
                            <div class="rooms-grid">
                                <div class="room-card">
                                    <div class="room-image" style="background-image: url('media/bg-2.jpg');"></div>
                                    <div class="room-details">
                                        <h4>Junior Suite</h4>
                                        <div class="room-price">$349/night</div>
                                        <p class="room-description">Spacious suite with separate living area and luxury amenities.</p>
                                        <button class="room-button">Book Now</button>
                                    </div>
                                </div>
                                <div class="room-card">
                                    <div class="room-image" style="background-image: url('media/bg-3.jpg');"></div>
                                    <div class="room-details">
                                        <h4>Executive Suite</h4>
                                        <div class="room-price">$449/night</div>
                                        <p class="room-description">Premium suite with executive lounge access and premium furnishings.</p>
                                        <button class="room-button">Book Now</button>
                                    </div>
                                </div>
                                <div class="room-card">
                                    <div class="room-image" style="background-image: url('media/bg-4.jpg');"></div>
                                    <div class="room-details">
                                        <h4>One-Bedroom Suite</h4>
                                        <div class="room-price">$549/night</div>
                                        <p class="room-description">Elegant suite with separate bedroom, living room, and dining area.</p>
                                        <button class="room-button">Book Now</button>
                                    </div>
                                </div>
                                <div class="room-card">
                                    <div class="room-image" style="background-image: url('media/hotel-1.jpg');"></div>
                                    <div class="room-details">
                                        <h4>Two-Bedroom Suite</h4>
                                        <div class="room-price">$749/night</div>
                                        <p class="room-description">Spacious suite with two bedrooms, perfect for families.</p>
                                        <button class="room-button">Book Now</button>
                                    </div>
                                </div>
                                <div class="room-card">
                                    <div class="room-image" style="background-image: url('media/bg-1.jpg');"></div>
                                    <div class="room-details">
                                        <h4>Presidential Suite</h4>
                                        <div class="room-price">$999/night</div>
                                        <p class="room-description">Ultimate luxury with multiple rooms, stunning views, and exclusive services.</p>
                                        <button class="room-button">Book Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 4. Villas Category -->
                        <div class="room-category" data-category="villas">
                            <div class="category-header">
                                <h3>Private Villas</h3>
                                <p class="category-subtitle">Ultra-luxury private accommodations</p>
                            </div>
                            <div class="rooms-grid">
                                <div class="room-card">
                                    <div class="room-image" style="background-image: url('media/bg-2.jpg');"></div>
                                    <div class="room-details">
                                        <h4>Garden Villa</h4>
                                        <div class="room-price">$899/night</div>
                                        <p class="room-description">Private villa with lush garden, perfect for nature lovers.</p>
                                        <button class="room-button">Book Now</button>
                                    </div>
                                </div>
                                <div class="room-card">
                                    <div class="room-image" style="background-image: url('media/bg-3.jpg');"></div>
                                    <div class="room-details">
                                        <h4>Pool Villa</h4>
                                        <div class="room-price">$1,099/night</div>
                                        <p class="room-description">Exclusive villa with private infinity pool and outdoor living.</p>
                                        <button class="room-button">Book Now</button>
                                    </div>
                                </div>
                                <div class="room-card">
                                    <div class="room-image" style="background-image: url('media/bg-4.jpg');"></div>
                                    <div class="room-details">
                                        <h4>Beachfront Villa</h4>
                                        <div class="room-price">$1,299/night</div>
                                        <p class="room-description">Stunning beachfront villa with direct beach access.</p>
                                        <button class="room-button">Book Now</button>
                                    </div>
                                </div>
                                <div class="room-card">
                                    <div class="room-image" style="background-image: url('media/hotel-1.jpg');"></div>
                                    <div class="room-details">
                                        <h4>Sky Villa</h4>
                                        <div class="room-price">$1,499/night</div>
                                        <p class="room-description">Ultra-luxury rooftop villa with panoramic city views.</p>
                                        <button class="room-button">Book Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 5. Signature Rooms Category -->
                        <div class="room-category" data-category="signature">
                            <div class="category-header">
                                <h3>Signature & Branded Rooms</h3>
                                <p class="category-subtitle">Exclusively curated premium experiences</p>
                            </div>
                            <div class="rooms-grid">
                                <div class="room-card">
                                    <div class="room-image" style="background-image: url('media/bg-1.jpg');"></div>
                                    <div class="room-details">
                                        <h4>Diamond Club</h4>
                                        <div class="room-price">$349/night</div>
                                        <p class="room-description">Exclusive diamond-tier room with VIP amenities and privileges.</p>
                                        <button class="room-button">Book Now</button>
                                    </div>
                                </div>
                                <div class="room-card">
                                    <div class="room-image" style="background-image: url('media/bg-2.jpg');"></div>
                                    <div class="room-details">
                                        <h4>Regency Club</h4>
                                        <div class="room-price">$379/night</div>
                                        <p class="room-description">Premium regency-branded room with full concierge services.</p>
                                        <button class="room-button">Book Now</button>
                                    </div>
                                </div>
                                <div class="room-card">
                                    <div class="room-image" style="background-image: url('media/bg-3.jpg');"></div>
                                    <div class="room-details">
                                        <h4>Horizon Club</h4>
                                        <div class="room-price">$399/night</div>
                                        <p class="room-description">Signature horizon room with stunning views and premium services.</p>
                                        <button class="room-button">Book Now</button>
                                    </div>
                                </div>
                                <div class="room-card">
                                    <div class="room-image" style="background-image: url('media/bg-4.jpg');"></div>
                                    <div class="room-details">
                                        <h4>Royal Club</h4>
                                        <div class="room-price">$429/night</div>
                                        <p class="room-description">Most exclusive royal-branded room with white-glove service.</p>
                                        <button class="room-button">Book Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <button class="carousel-nav next" id="nextCategory">❯</button>
            </div>

            <!-- Category Indicators -->
            <div class="category-indicators">
                <button class="indicator active" data-category="standard" title="Standard Rooms">Standard</button>
                <button class="indicator" data-category="club" title="Club & Executive">Club</button>
                <button class="indicator" data-category="suites" title="Suites">Suites</button>
                <button class="indicator" data-category="villas" title="Villas">Villas</button>
                <button class="indicator" data-category="signature" title="Signature">Signature</button>
            </div>
        </div>
    </section>

    <section id="about" class="about-section">
        <div class="container">
            <h2>About Us</h2>
            <p>At J's Crest Hotel, we blend modern comfort with warm hospitality to create a memorable stay. Enjoy elegant rooms, premium amenities, and friendly service designed for every traveler.</p>
        </div>
    </section>

    <script src="script.js"> </script>
</body>

</html>