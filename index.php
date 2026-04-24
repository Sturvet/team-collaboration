<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>J's Crest Hotel</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
                <div class="hero-slide" style="background-image: url('media/bg-1.jpg');"></div>
                <div class="hero-slide" style="background-image: url('media/bg-2.jpg');"></div>
                <div class="hero-slide" style="background-image: url('media/bg-3.jpg');"></div>
                <div class="hero-slide" style="background-image: url('media/bg-4.jpg');"></div>
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
                <div class="gallery-item" style="background-image: url('media/lobby-1.jpg');"></div>
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
                        <img src="media/promo-4.jpg" alt="Luxury Suite Promotion">
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
                        <img src="media/promo-2.jpg" alt="Romantic Getaway Promotion">
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
                        <img src="media/promo-3.jpg" alt="Family Package Promotion">
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
                            <div class="room-image" style="background-image: url('media/standard-1.jpg');"></div>
                            <div class="room-amenities">
                                <span class="amenity" title="King Bed">🛏️</span><span class="amenity" title="WiFi">📶</span><span class="amenity" title="Smart TV">📺</span><span class="amenity" title="Climate Control">❄️</span>
                            </div>
                            <div class="room-details"><h4>Deluxe Room</h4><div class="room-price">$149/night</div><p class="room-description">Spacious and elegant with premium furnishings and modern amenities.</p><button class="room-button">Book Now</button></div>
                        </div>
                        <div class="room-card">
                            <div class="room-image" style="background-image: url('media/bg-1.jpg');"></div>
                            <div class="room-amenities">
                                <span class="amenity" title="Queen Bed">🛏️</span><span class="amenity" title="WiFi">📶</span><span class="amenity" title="TV">📺</span><span class="amenity" title="Climate Control">❄️</span>
                            </div>
                            <div class="room-details"><h4>Superior Room</h4><div class="room-price">$129/night</div><p class="room-description">Well-appointed rooms with all essential amenities for your comfort.</p><button class="room-button">Book Now</button></div>
                        </div>
                        <div class="room-card">
                            <div class="room-image" style="background-image: url('media/bg-2.jpg');"></div>
                            <div class="room-amenities">
                                <span class="amenity" title="King Bed">🛏️</span><span class="amenity" title="WiFi">📶</span><span class="amenity" title="Smart TV">📺</span><span class="amenity" title="Climate Control">❄️</span>
                            </div>
                            <div class="room-details"><h4>Premier Room</h4><div class="room-price">$169/night</div><p class="room-description">Enhanced comfort with upscale decor and premium bedding.</p><button class="room-button">Book Now</button></div>
                        </div>
                        <div class="room-card">
                            <div class="room-image" style="background-image: url('media/bg-3.jpg');"></div>
                            <div class="room-amenities">
                                <span class="amenity" title="King Bed">🛏️</span><span class="amenity" title="WiFi">📶</span><span class="amenity" title="Smart TV">📺</span><span class="amenity" title="Lounge Access">🍷</span>
                            </div>
                            <div class="room-details"><h4>Club King</h4><div class="room-price">$249/night</div><p class="room-description">Exclusive king room with lounge access and complimentary breakfast.</p><button class="room-button">Book Now</button></div>
                        </div>
                        <div class="room-card">
                            <div class="room-image" style="background-image: url('media/bg-4.jpg');"></div>
                            <div class="room-amenities">
                                <span class="amenity" title="Twin Beds">🛏️</span><span class="amenity" title="WiFi">📶</span><span class="amenity" title="Smart TV">📺</span><span class="amenity" title="Business Services">💼</span>
                            </div>
                            <div class="room-details"><h4>Club Twin</h4><div class="room-price">$239/night</div><p class="room-description">Twin beds with executive lounge privileges and business services.</p><button class="room-button">Book Now</button></div>
                        </div>
                        <div class="room-card">
                            <div class="room-image" style="background-image: url('media/hotel-1.jpg');"></div>
                            <div class="room-amenities">
                                <span class="amenity" title="King Bed">🛏️</span><span class="amenity" title="WiFi">📶</span><span class="amenity" title="Smart TV">📺</span><span class="amenity" title="Concierge">📞</span>
                            </div>
                            <div class="room-details"><h4>Club Regency</h4><div class="room-price">$259/night</div><p class="room-description">Premium club room with full concierge and priority services.</p><button class="room-button">Book Now</button></div>
                        </div>
                        <div class="room-card">
                            <div class="room-image" style="background-image: url('media/bg-1.jpg');"></div>
                            <div class="room-amenities">
                                <span class="amenity" title="King Bed">🛏️</span><span class="amenity" title="WiFi">📶</span><span class="amenity" title="Smart TV">📺</span><span class="amenity" title="Workspace">💼</span>
                            </div>
                            <div class="room-details"><h4>Executive Room</h4><div class="room-price">$279/night</div><p class="room-description">Superior executive accommodations with workspace and premium amenities.</p><button class="room-button">Book Now</button></div>
                        </div>
                        <div class="room-card">
                            <div class="room-image" style="background-image: url('media/bg-2.jpg');"></div>
                            <div class="room-amenities">
                                <span class="amenity" title="Living Area">🛋️</span><span class="amenity" title="WiFi">📶</span><span class="amenity" title="Smart TV">📺</span><span class="amenity" title="Luxury Amenities">💎</span>
                            </div>
                            <div class="room-details"><h4>Junior Suite</h4><div class="room-price">$349/night</div><p class="room-description">Spacious suite with separate living area and upscale comforts.</p><button class="room-button">Book Now</button></div>
                        </div>
                        <div class="room-card">
                            <div class="room-image" style="background-image: url('media/bg-3.jpg');"></div>
                            <div class="room-amenities">
                                <span class="amenity" title="Dining Area">🍽️</span><span class="amenity" title="WiFi">📶</span><span class="amenity" title="Smart TV">📺</span><span class="amenity" title="Lounge Access">🍷</span>
                            </div>
                            <div class="room-details"><h4>One-Bedroom Suite</h4><div class="room-price">$549/night</div><p class="room-description">Elegant suite with separate bedroom, lounge, and dining space.</p><button class="room-button">Book Now</button></div>
                        </div>
                        <div class="room-card">
                            <div class="room-image" style="background-image: url('media/bg-4.jpg');"></div>
                            <div class="room-amenities">
                                <span class="amenity" title="Multiple Rooms">🏰</span><span class="amenity" title="WiFi">📶</span><span class="amenity" title="Smart TV">📺</span><span class="amenity" title="Concierge">🎩</span>
                            </div>
                            <div class="room-details"><h4>Presidential Suite</h4><div class="room-price">$999/night</div><p class="room-description">Ultimate luxury with expansive space and exclusive services.</p><button class="room-button">Book Now</button></div>
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
    <script src="script.js"></script>
</body>


</html>
