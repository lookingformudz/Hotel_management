<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Information -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hotel Website for booking rooms and amenities.">

    <!-- Page Title -->
    <title>Hotel Lux - Welcome</title>

    <!-- External CSS and Icon Links -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
    <!-- Header Section -->
    <header class="header">
        <nav>
            <!-- Navigation Bar -->
            <div class="nav__bar">
                <!-- Logo -->
                <div class="logo">
                    <a href="#"><img src="asset/logo1.png" alt="Hotel Lux Logo"></a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="nav__menu__btn" id="menu-btn">
                    <i class="ri-menu-line"></i>
                </div>
            </div>

            <!-- Navigation Menu -->
            <ul class="nav__links" id="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#room">Rooms</a></li>
                <li><a href="#amenities">Amenities</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>

            <!-- Call-to-Action Button -->
        <!-- Button with Onclick -->
<button class="btn nav__btn" onclick="window.location.href='log_in.php';">Book Now</button>
</nav>
 

        <!-- Hero Section -->
        <div class="section__container header__container" id="home">
            <p>Simple - Unique - Friendly</p>
            <h1>Make Yourself At Home<br />In Our <span>Lux Hotel</span>.</h1>
        </div>
    </header>

    <!-- Booking Section -->
    <section class="section__container booking__container">
        <form action="/" class="booking__form">
            <!-- Check-in Input -->
            <div class="input__group">
                <span><i class="ri-calendar-2-fill"></i></span>
                <div>
                    <label for="check-in">CHECK-IN</label>
                    <input type="text" id="check-in" placeholder="Check In">
                </div>
            </div>

            <!-- Check-out Input -->
            <div class="input__group">
                <span><i class="ri-calendar-2-fill"></i></span>
                <div>
                    <label for="check-out">CHECK-OUT</label>
                    <input type="text" id="check-out" placeholder="Check Out">
                </div>
            </div>

            <!-- Guest Input -->
            <div class="input__group">
                <span><i class="ri-user-fill"></i></span>
                <div>
                    <label for="guest">GUEST</label>
                    <input type="text" id="guest" placeholder="Guest">
                </div>
            </div>

            <!-- Submit Button -->
            <div class="input__group input__btn">
                <button class="btn">CHECK OUT</button>
            </div>
        </form>
    </section>

    <!-- About Section -->
    <section class="section__container about__container" id="about">
        <div class="about__image">
            <!-- About Image -->
            <img src="asset/service.jfif" alt="About Hotel Lux">
        </div>
        <div class="about__content">
            <p class="section__subheader">ABOUT US</p>
            <h2 class="section__header">The Best Holidays Start Here!</h2>
            <p class="section__description">
                With a focus on quality accommodations, personalized experiences, and
                seamless booking, our platform ensures every traveler embarks on their dream holiday.
            </p>
            <!-- Read More Button -->
            <div class="about__btn">
                <button class="btn">Read More</button>
            </div>
        </div>
    </section>

    <!-- Rooms Section -->
    <section class="section__container room__container" id="room">
        <p class="section__subheader">OUR ROOM</p>
        <h2 class="section__header">The Most Memorable Rest Time Starts Here.</h2>
        <div class="room__grid">
            <!-- Single Room Card -->
            <div class="room__card">
                <div class="room__card__image">
                    <img src="asset/oceanview.jfif" alt="Deluxe Ocean View Room">
                    <!-- Room Icons -->
                    <div class="room__card__icons">
                        <span><i class="ri-heart-fill"></i></span>
                        <span><i class="ri-paint-fill"></i></span>
                        <span><i class="ri-shield-star-line"></i></span>
                    </div>
                </div>
                <div class="room__card__details">
                    <h4>Deluxe Ocean View</h4>
                    <p>Bask in luxury with breathtaking ocean views from your private suite.</p>
                    <h5>Starting from <span>$299/night</span></h5>
                    <!-- Book Now Button -->
                    <button class="btn">Book Now</button>
                </div>
            </div>
            
             <div class="room__card">
                <div class="room__card__image">
                    <img src="asset/room-2.jfif" alt="Deluxe Ocean View Room">
                    <!-- Room Icons -->
                    <div class="room__card__icons">
                        <span><i class="ri-heart-fill"></i></span>
                        <span><i class="ri-paint-fill"></i></span>
                        <span><i class="ri-shield-star-line"></i></span>
                    </div>
                </div>
                <div class="room__card__details">
                    <h4>Executive CityScape Room</h4>
                    <p>Experience urban elegance and modern comfort in the heart of the city.</p>
                    <h5>Starting from <span>$199/night</span></h5>
                    <!-- Book Now Button -->
                    <button class="btn">Book Now</button>
                </div>
            </div>
             <div class="room__card">
                <div class="room__card__image">
                    <img src="asset/room1.png" alt="Deluxe Ocean View Room">
                    <!-- Room Icons -->
                    <div class="room__card__icons">
                        <span><i class="ri-heart-fill"></i></span>
                        <span><i class="ri-paint-fill"></i></span>
                        <span><i class="ri-shield-star-line"></i></span>
                    </div>
                </div>
                <div class="room__card__details">
                    <h4>Family Garden Retreat</h4>
                    <p>Spacious and inviting, perfect for creating cherished memories with love ones.</p>
                    <h5>Starting from <span>$249/night</span></h5>
                    <!-- Book Now Button -->
                    <button class="btn">Book Now</button>
                </div>



    </section>

  <!-- Amenities Section -->
  <section class="section__container room__container" id="amenities">
        <p class="section__subheader">Amenities</p>
        <div class="room__grid">
            <!-- 1st Amenity-->
            <div class="room__card">
                <div class="room__card__image">
                    <img src="asset/pool1.jfif" alt="Swimming Pool">
                    <!-- Room Icons -->
                </div>
                <div class="room__card__details">
                    <h4>Swimming Pool</h4>
                    <p>Relax by our infinity pool with stunning views.</p>
                    <h5>  <span></span></h5>
                </div>
            </div>

            <!-- 2nd amenities-->
             
            <div class="room__card">
                <div class="room__card__image">
                    <img src="asset/fit.jfif" alt="Deluxe Ocean View Room">
                    <!-- Room Icons -->      
                </div>
                <div class="room__card__details">
                    <h4>Fitness Center</h4>
                    <p>Stay fit with our fully-equipped gym open 24/7.</p> 
                </div>
            </div>

        <!-- 3rd Amenity -->
        <div class="room__card">
                <div class="room__card__image">
                    <img src="asset/spa.jfif" alt="Deluxe Ocean View Room">
                    <!-- Room Icons -->      
                </div>
                <div class="room__card__details">
                    <h4>Spa & Wellness</h4>
                    <p>Enjoy a rejuvenating spa experience with our expert therapists.</p> 
                </div>
            </div>
</section>


   <!-- Footer Section -->
<footer class="footer">
    <div class="section__container footer__container" >
        <!-- Logo and Description -->
        <div class="footer__col">
            <div class="logo">
                <a href="#home"><img src="asset/logo1.png" alt="Hotel Lux Logo"></a>
            </div>
            <p class="section__description">
                Discover a world of comfort, luxury, and adventure.
            </p>
            <button class="btn">Book Now</button>
        </div>
        
        <!-- Quick Links -->
        <div class="footer__col">
            <h4>QUICK LINKS</h4>
            <ul class="footer__links">
                <li><a href="#">Browse Destinations</a></li>
                <li><a href="#">Special Offers & Packages</a></li>
            </ul>
        </div>
        
        <!-- Contact Us Section -->
        <div class="footer__col"id="contact">
            <h4>CONTACT US</h4>
            <p class="section__description">Have questions or need assistance? Get in touch with us!</p>
            <form action="submit_contact.php" method="POST" class="contact-form">
                <input type="text" name="name" placeholder="Your Name" required><br>
                <input type="email" name="email" placeholder="Your Email" required><br>
                <textarea name="message" placeholder="Your Message" rows="4" required></textarea><br>
                <button type="submit" class="btn">Send Message</button>
            </form>
        </div>
    </div>
    
    <!-- Footer Bar -->
    <div class="footer__bar">
        Copyright © 2024 Hotel Lux. All rights reserved.
    </div>
</footer>

<!-- External JavaScript -->
<script src="https://unpkg.com/scrollreveal"></script>
<script src="hotel.js"></script>
</body>
</html>
