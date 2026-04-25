<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>J's Crest Hotel</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body class="home-page">
    <div class="homepage-first">
        <header class="site-header" id="siteHeader">
            <div class="header-inner">
                <div class="nav-left-group">
                    <button id="menuToggle" class="nav-toggle" type="button" aria-label="Open menu" aria-expanded="false">
                        <span class="nav-icon">☰</span>
                    </button>
                    <nav class="main-nav" aria-label="Primary navigation">
                        <ul class="nav-links">
                            <li><a class="nav-link active" href="index.php">Home</a></li>
                            <li class="nav-item dropdown">
                                <button class="nav-link dropdown-toggle" id="accommodationDropdown" type="button">
                                    Accommodations
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="room.php">Rooms</a></li>
                                    <li><a class="dropdown-item" href="room.php">Suites</a></li>
                                    <li><a class="dropdown-item" href="room.php">Villas</a></li>
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
                <span class="side-menu-title"> </span>
                <button id="menuClose" class="side-menu-close" type="button" aria-label="Close menu">×</button>
            </div>

            <div class="side-menu-content">
                <h2>About J's Crest Hotel</h2>
                <p>At J's Crest Hotel, we blend modern comfort with warm hospitality to create a memorable stay. Enjoy elegant rooms, premium amenities, and friendly service designed for every traveler. Our hotel offers a perfect blend of luxury and relaxation, with stunning views and top-notch facilities to make your visit unforgettable.</p>

                <h3>Our Mission</h3>
                <p>To provide exceptional hospitality experiences that exceed guest expectations through elegant accommodations, personalized service, and world-class amenities.</p>

                <h3>Why Choose Us</h3>
                <ul style="margin: 1rem 0; padding-left: 1.5rem;">
                    <li>Award-winning hospitality and service excellence</li>
                    <li>Strategic location with stunning views</li>
                    <li>Multiple room categories for every budget</li>
                    <li>Premium amenities and facilities</li>
                    <li>24/7 concierge and guest services</li>
                    <li>Fine dining and beverage options</li>
                    <li>Business and event facilities</li>
                </ul>

                <h3>Contact Information</h3>
                <p><strong>Phone:</strong> +1 (555) 123-4567<br>
                    <strong>Email:</strong> reservations@jscresthotel.com<br>
                    <strong>Address:</strong> 123 Luxury Avenue, Paradise City, PC 12345
                </p>
            </div>
        </aside>

        <main class="hero-section">
            <div class="hero-bg">
                <div class="hero-slide" style="background-image: url('https://i.pinimg.com/1200x/57/32/1b/57321b3fca7242ba52da622d3b079b35.jpg');"></div>
                <div class="hero-slide" style="background-image: url('https://i.pinimg.com/1200x/ad/f3/34/adf33455cdcbf049247416a6ec5d4623.jpg');"></div>
                <div class="hero-slide" style="background-image: url('https://i.pinimg.com/736x/21/8f/d4/218fd4f6841abe5b35534422c5bd2a6b.jpg');"></div>
                <div class="hero-slide" style="background-image: url('https://i.pinimg.com/736x/37/c8/b4/37c8b4ba1f60084d98da3ff408528750.jpg');"></div>
            </div>
            <div class="hero-overlay"></div>
            <section class="hero-content">
                <h1>Welcome to J's Crest</h1>
                <p>Experience comfort and luxury</p>
            </section>
        </main>
    </div>
    <section class="five-star">
        <div class="accommodation-grid">
            <div class="gallery-grid">
                <div class="gallery-item" style="background-image: url('https://i.pinimg.com/736x/0f/b1/5c/0fb15cf86eb4797837f5112d86e47e2a.jpg');"></div>
            </div>
            <div class="accommodation-copy">
                <h2>5-STAR CREST HOTEL</h2>
                <p>Indulge in the ultimate comfort and elegance at J's Crest Hotel, where every detail is designed to exceed your expectations.</p>
            </div>
        </div>

    </section>

    <section class="promotion">
        <div class="promo-container">
            <h2 class="section-title">Special Promotions</h2>
            <div class="promo-grid">
                <div class="promo-card" data-promo="luxury">
                    <div class="promo-image">
                        <img src="https://i.pinimg.com/736x/1f/8e/45/1f8e45c02286c0b176c3131f3c06c7d4.jpg" alt="Luxury Suite Promotion">
                    </div>
                    <div class="promo-info">
                        <h3>Luxury Suite</h3>
                        <div class="promo-price">
                            <span class="original-price">$450/night</span>
                            <span class="discount-price">$360/night</span>
                            <span class="discount-badge">20% OFF</span>
                        </div>
                        <p>Indulge in ultimate luxury and comfort</p>
                        <ul class="promo-benefits">
                            <li>Premium king-size bed with luxury linens</li>
                            <li>Private balcony with ocean views</li>
                            <li>24/7 concierge service</li>
                            <li>Complimentary champagne breakfast</li>
                        </ul>
                        <a href="#book" class="btn-book-visible">Book Now</a>
                    </div>
                    <div class="promo-details" id="luxury-details">
                        <button class="close-promo" onclick="closePromo('luxury')">×</button>
                        <h3>About Our Luxury Suite Package</h3>
                        <p>Experience the pinnacle of luxury at J's Crest Hotel with our exclusive Luxury Suite package. Designed for discerning travelers who demand the very best, this package offers unparalleled comfort and sophistication.</p>
                        <p>Our luxury suites feature premium amenities, breathtaking views, and personalized service that exceeds expectations. Whether you're celebrating a special occasion or simply treating yourself to the finest accommodations, our Luxury Suite package provides an unforgettable experience of elegance and refinement.</p>
                    </div>
                </div>

                <div class="promo-card" data-promo="romantic">
                    <div class="promo-image">
                        <img src="https://i.pinimg.com/736x/24/f6/55/24f655977d7dfa851f939a4a3df88663.jpg" alt="Romantic Getaway Promotion">
                    </div>
                    <div class="promo-info">
                        <h3>Romantic Getaway</h3>
                        <div class="promo-price">
                            <span class="original-price">$320/night</span>
                            <span class="discount-price">$256/night</span>
                            <span class="discount-badge">20% OFF</span>
                        </div>
                        <p>Perfect for couples and special moments</p>
                        <ul class="promo-benefits">
                            <li>Candlelit dinner for two</li>
                            <li>Champagne and chocolate upon arrival</li>
                            <li>Couples massage session</li>
                            <li>Breakfast in bed service</li>
                        </ul>
                        <a href="#book" class="btn-book-visible">Book Now</a>
                    </div>
                    <div class="promo-details" id="romantic-details">
                        <button class="close-promo" onclick="closePromo('romantic')">×</button>
                        <h3>About Our Romantic Getaway Package</h3>
                        <p>Create unforgettable memories with your loved one at J's Crest Hotel's Romantic Getaway package. This specially curated experience is designed to rekindle romance and create magical moments that will be cherished forever.</p>
                        <p>From candlelit dinners and couples massages to champagne toasts and breakfast in bed, every detail is crafted to celebrate your love. Our romantic packages transform ordinary getaways into extraordinary experiences filled with passion, intimacy, and lasting memories.</p>
                    </div>
                </div>

                <div class="promo-card" data-promo="family">
                    <div class="promo-image">
                        <img src="https://i.pinimg.com/1200x/05/cc/f1/05ccf12df7d04c8563d4b5b435073464.jpg" alt="Family Package Promotion">
                    </div>
                    <div class="promo-info">
                        <h3>Family Package</h3>
                        <div class="promo-price">
                            <span class="original-price">$280/night</span>
                            <span class="discount-price">$224/night</span>
                            <span class="discount-badge">20% OFF</span>
                        </div>
                        <p>Fun-filled adventures for the whole family</p>
                        <ul class="promo-benefits">
                            <li>Connecting family rooms</li>
                            <li>Kids' activity center access</li>
                            <li>Complimentary family meals</li>
                            <li>Entertainment packages included</li>
                        </ul>
                        <a href="#book" class="btn-book-visible">Book Now</a>
                    </div>
                    <div class="promo-details" id="family-details">
                        <button class="close-promo" onclick="closePromo('family')">×</button>
                        <h3>About Our Family Fun Package</h3>
                        <p>Make family time unforgettable with J's Crest Hotel's Family Fun Package. Designed specifically for families seeking quality time together, this package combines comfort, entertainment, and memorable experiences for every family member.</p>
                        <p>From connecting family rooms and kids' entertainment centers to family dining experiences and complimentary activities, we ensure that every moment is filled with joy and togetherness. Create lasting family memories in an environment that caters to both parents and children alike.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="rooms-section" id="book">
        <div class="container">
            <div class="section-header">
                <span class="section-label">ACCOMMODATIONS</span>
                <h2>Guest Rooms</h2>
            </div>
            <p class="section-subtitle">Experience comfort and luxury in our beautifully designed rooms</p>

            <div class="room-categories-carousel auto-rooms-carousel">
                <button class="carousel-nav prev" id="roomsPrev" type="button" aria-label="Previous rooms">❮</button>
                <div class="carousel-wrapper auto-carousel-wrapper" id="roomsAutoWrapper">
                    <div class="rooms-auto-track" id="roomsAutoTrack">
                        <div class="room-card">
                            <div class="room-image" style="background-image: url('https://i.pinimg.com/736x/6d/0e/3a/6d0e3ac0335111f16761088900ba5849.jpg');"></div>
                            <div class="room-amenities">
                                <span class="amenity" title="Single Bed"><i class="fa-solid fa-bed"></i></span>
                                <span class="amenity" title="WiFi"><i class="fa-solid fa-wifi"></i></span>
                                <span class="amenity" title="Smart TV"><i class="fa-solid fa-tv"></i></span>
                                <span class="amenity" title="Climate Control"><i class="fa-solid fa-snowflake"></i></span>
                            </div>
                            <div class="room-details">
                                <h4>Standard Room - Single Bed</h4>
                                <div class="room-price">$99/night</div>
                                <p class="room-description">Cozy and comfortable room perfect for solo travelers. Features modern amenities and high-speed WiFi.</p>
                                <button class="room-button">Book Now</button>
                            </div>
                        </div>

                        <div class="room-card">
                            <div class="room-image" style="background-image: url('https://i.pinimg.com/1200x/ad/6b/a7/ad6ba7bf5446d0acbc39adb41cbc94c9.jpg');"></div>
                            <div class="room-amenities">
                                <span class="amenity" title="Double Beds"><i class="fa-solid fa-bed"></i></span>
                                <span class="amenity" title="WiFi"><i class="fa-solid fa-wifi"></i></span>
                                <span class="amenity" title="TV"><i class="fa-solid fa-tv"></i></span>
                                <span class="amenity" title="Climate Control"><i class="fa-solid fa-snowflake"></i></span>
                            </div>
                            <div class="room-details">
                                <h4>Standard Room - Double Beds</h4>
                                <div class="room-price">$119/night</div>
                                <p class="room-description">Spacious room with two comfortable double beds, ideal for families or groups.</p>
                                <button class="room-button">Book Now</button>
                            </div>
                        </div>

                        <div class="room-card">
                            <div class="room-image" style="background-image: url('https://i.pinimg.com/736x/27/f6/38/27f6388c0ce65a0bb7d4f7adc65df629.jpg');"></div>
                            <div class="room-amenities">
                                <span class="amenity" title="King Bed"><i class="fa-solid fa-bed"></i></span>
                                <span class="amenity" title="WiFi"><i class="fa-solid fa-wifi"></i></span>
                                <span class="amenity" title="Smart TV"><i class="fa-solid fa-tv"></i></span>
                                <span class="amenity" title="Balcony"><i class="fa-solid fa-tree"></i></span>
                            </div>
                            <div class="room-details">
                                <h4>Deluxe Room - Single Bed</h4>
                                <div class="room-price">$149/night</div>
                                <p class="room-description">Elegantly designed room with premium furnishings and marble bathroom.</p>
                                <button class="room-button">Book Now</button>
                            </div>
                        </div>

                        <div class="room-card">
                            <div class="room-image" style="background-image: url('https://i.pinimg.com/1200x/10/cd/14/10cd14d226cfd55fdade46df1c2e61e9.jpg');"></div>
                            <div class="room-amenities">
                                <span class="amenity" title="Queen Beds"><i class="fa-solid fa-bed"></i></span>
                                <span class="amenity" title="WiFi"><i class="fa-solid fa-wifi"></i></span>
                                <span class="amenity" title="Smart TV"><i class="fa-solid fa-tv"></i></span>
                                <span class="amenity" title="Concierge"><i class="fa-solid fa-phone"></i></span>
                            </div>
                            <div class="room-details">
                                <h4>Deluxe Room - Double Beds</h4>
                                <div class="room-price">$169/night</div>
                                <p class="room-description">Enhanced comfort with upscale décor and premium bedding. Perfect for families.</p>
                                <button class="room-button">Book Now</button>
                            </div>
                        </div>

                        <div class="room-card">
                            <div class="room-image" style="background-image: url('https://i.pinimg.com/1200x/14/d4/e3/14d4e395013e751e95de4fa3ae3aa936.jpg');"></div>
                            <div class="room-amenities">
                                <span class="amenity" title="King Bed"><i class="fa-solid fa-bed"></i></span>
                                <span class="amenity" title="WiFi"><i class="fa-solid fa-wifi"></i></span>
                                <span class="amenity" title="Smart TV"><i class="fa-solid fa-tv"></i></span>
                                <span class="amenity" title="Lounge Access"><i class="fa-solid fa-wine-glass"></i></span>
                            </div>
                            <div class="room-details">
                                <h4>Club Suite - Single Bed</h4>
                                <div class="room-price">$249/night</div>
                                <p class="room-description">Exclusive suite with luxury living space and executive lounge access.</p>
                                <button class="room-button">Book Now</button>
                            </div>
                        </div>

                        <div class="room-card">
                            <div class="room-image" style="background-image: url('https://i.pinimg.com/1200x/73/c2/af/73c2aff2b1cae0738f4411024a848069.jpg');"></div>
                            <div class="room-amenities">
                                <span class="amenity" title="Queen Beds"><i class="fa-solid fa-bed"></i></span>
                                <span class="amenity" title="WiFi"><i class="fa-solid fa-wifi"></i></span>
                                <span class="amenity" title="Smart TV"><i class="fa-solid fa-tv"></i></span>
                                <span class="amenity" title="Business Services"><i class="fa-solid fa-briefcase"></i></span>
                            </div>
                            <div class="room-details">
                                <h4>Club Suite - Double Beds</h4>
                                <div class="room-price">$279/night</div>
                                <p class="room-description">Premium suite with separate living area and executive lounge privileges.</p>
                                <button class="room-button">Book Now</button>
                            </div>
                        </div>

                        <div class="room-card">
                            <div class="room-image" style="background-image: url('https://i.pinimg.com/736x/53/e7/95/53e79552d9de0edd8b38dd0dedfd6d3d.jpg');"></div>
                            <div class="room-amenities">
                                <span class="amenity" title="King Bed"><i class="fa-solid fa-bed"></i></span>
                                <span class="amenity" title="WiFi"><i class="fa-solid fa-wifi"></i></span>
                                <span class="amenity" title="Smart TV"><i class="fa-solid fa-tv"></i></span>
                                <span class="amenity" title="Private Dining"><i class="fa-solid fa-utensils"></i></span>
                            </div>
                            <div class="room-details">
                                <h4>Presidential Suite - Single Bed</h4>
                                <div class="room-price">$499/night</div>
                                <p class="room-description">The ultimate in luxury with multiple rooms and state-of-the-art technology.</p>
                                <button class="room-button">Book Now</button>
                            </div>
                        </div>

                        <div class="room-card">
                            <div class="room-image" style="background-image: url('https://i.pinimg.com/1200x/4b/18/86/4b1886ee221f85c2835f86f9051136f6.jpg');"></div>
                            <div class="room-amenities">
                                <span class="amenity" title="King Beds"><i class="fa-solid fa-bed"></i></span>
                                <span class="amenity" title="WiFi"><i class="fa-solid fa-wifi"></i></span>
                                <span class="amenity" title="Smart TV"><i class="fa-solid fa-tv"></i></span>
                                <span class="amenity" title="Butler Service"><i class="fa-solid fa-user-tie"></i></span>
                            </div>
                            <div class="room-details">
                                <h4>Presidential Suite - Double Beds</h4>
                                <div class="room-price">$599/night</div>
                                <p class="room-description">Expansive ultra-luxury suite with breathtaking views and exclusive amenities.</p>
                                <button class="room-button">Book Now</button>
                            </div>
                        </div>

                        <div class="room-card">
                            <div class="room-image" style="background-image: url('https://i.pinimg.com/1200x/b1/16/08/b1160840a4b0d64f4d50c6512c2728c7.jpg');"></div>
                            <div class="room-amenities">
                                <span class="amenity" title="3 Bedrooms"><i class="fa-solid fa-hotel"></i></span>
                                <span class="amenity" title="WiFi"><i class="fa-solid fa-wifi"></i></span>
                                <span class="amenity" title="Pool"><i class="fa-solid fa-water"></i></span>
                                <span class="amenity" title="Beach Access"><i class="fa-solid fa-umbrella-beach"></i></span>
                            </div>
                            <div class="room-details">
                                <h4>Beachfront Villa - 3 Bedrooms</h4>
                                <div class="room-price">$1,299/night</div>
                                <p class="room-description">Stunning beachfront villa with direct private beach access and infinity pool.</p>
                                <button class="room-button">Book Now</button>
                            </div>
                        </div>

                        <div class="room-card">
                            <div class="room-image" style="background-image: url('https://i.pinimg.com/736x/11/17/7b/11177b0cd22d9841def3ff8c9ebb6cef.jpg');"></div>
                            <div class="room-amenities">
                                <span class="amenity" title="5 Bedrooms"><i class="fa-solid fa-hotel"></i></span>
                                <span class="amenity" title="WiFi"><i class="fa-solid fa-wifi"></i></span>
                                <span class="amenity" title="Multiple Pools"><i class="fa-solid fa-water"></i></span>
                                <span class="amenity" title="Concierge"><i class="fa-solid fa-user-tie"></i></span>
                            </div>
                            <div class="room-details">
                                <h4>Beachfront Villa - 5 Bedrooms</h4>
                                <div class="room-price">$1,799/night</div>
                                <p class="room-description">Ultimate beachfront estate with exclusive access and comprehensive hospitality services.</p>
                                <button class="room-button">Book Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-nav next" id="roomsNext" type="button" aria-label="Next rooms">❯</button>
            </div>

            <div class="rooms-feature-image">
                <img src="media/hotel-2.jpg" alt="J's Crest Hotel">
            </div>
        </div>
    </section>

    <footer>       
        <div class="footerBottom">
        <p>&copy; 2026 J's Crest Hotel. All Rights Reserved.</p>
        </div>
    </footer>
    <script src="script.js"></script>
</body>

</html>