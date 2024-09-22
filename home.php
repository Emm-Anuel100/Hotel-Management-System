<!DOCTYPE html>
<html lang="En">
    <head>
    <title><?= $_SESSION['setting_hotel_name'] . " | Home" ?></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <!-- Third party plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="admin/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />

    <script src="admin/assets/vendor/jquery/jquery.min.js"></script>
    <script src="admin/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
</head>

  <body> 
     <!-- Page Preloder -->
     <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        <div class="search-icon  search-switch">
            <i class="icon_search"></i>
        </div>
        <div class="header-configure-area">
            <div class="language-option">
                <span>EN <i class="fa fa-angle-down"></i></span>
                <div class="flag-dropdown">
                    <ul>
                        <li><a href="#">Fr</a></li>
                    </ul>
                </div>
            </div>
            <a href="./index.php?page=home" class="bk-btn">Book Now</a>
        </div>
        <nav class="mainmenu mobile-menu">
            <ul>
                <li class="active"><a href="./index.php?page=home">Home</a></li>
                <li><a href="./index.php?page=rooms">Rooms</a></li>
                <li><a href="./index.php?page=about-us">About Us</a></li>
                <!-- <li><a href="./pages.html">Pages</a>
                    <ul class="dropdown">
                        <li><a href="./room-details.html">Room Details</a></li>
                        <li><a href="#">Deluxe Room</a></li>
                        <li><a href="#">Family Room</a></li>
                        <li><a href="#">Premium Room</a></li>
                    </ul>
                </li> -->
                <li><a href="./index.php?page=blog">News</a></li>
                <li><a href="./index.php?page=contact">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="top-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        <ul class="top-widget">
            <li><i class="fa fa-phone"></i><?= $_SESSION['setting_contact'] ?></li>
            <li><i class="fa fa-envelope"></i><?= $_SESSION['setting_email'] ?></li>
        </ul>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tn-left">
                        <li><i class="fa fa-phone"></i><?= $_SESSION['setting_contact'] ?></li>
                        <li><i class="fa fa-envelope"></i><?= $_SESSION['setting_email'] ?></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="tn-right">
                            <div class="top-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            <a href="./index.php?page=home" class="bk-btn">Book Now</a>
                            <div class="language-option">
                                <span>EN <i class="fa fa-angle-down"></i></span>
                                <div class="flag-dropdown">
                                    <ul>
                                        <li><a href="#">Fr</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="./index.php?page=home">
                              <img src="img/logo.png" alt="Hotel logo"> 
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li class="active"><a href="./index.php?page=home">Home</a></li>
                                    <li><a href="./index.php?page=rooms">Rooms</a></li>
                                    <li><a href="./index.php?page=about-us">About Us</a></li>
                                    <!--  <li><a href="./pages.php">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="./room-details.html">Room Details</a></li>
                                            <li><a href="./blog-details.html">Blog Details</a></li>
                                            <li><a href="#">Family Room</a></li>
                                            <li><a href="#">Premium Room</a></li>
                                        </ul> -->
                                    </li>
                                    <li><a href="./index.php?page=blog">News</a></li>
                                    <li><a href="./index.php?page=contact">Contact</a></li>
                                </ul>
                            </nav>
                            <div class="nav-right search-switch">
                                <i class="icon_search"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-text">
                        <h1>Sona, A Luxury Hotel</h1>
                        <p>
                          At Sona Hotel, we pride ourselves on offering an unparalleled experience for our guests. 
                          Our establishment combines elegant design with exceptional service, ensuring that your stay is both comfortable and memorable. 
                        </p>
                        <a href="./index.php?page=about-us" class="primary-btn">Explore</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
                    <div class="booking-form">
                        <h3>Room Booking</h3>
                        <form action="index.php?page=rooms" id="filter" method="POST">
                            <div class="check-date">
                                <label for="date-in">Check In:</label>
                                <!-- <input type="text" class="date-input" name="date_in" id="date-in" required autocomplete="off"> -->
                                <input type="text" class="datepicker" name="date_in" id="date-in" required autocomplete="off">
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="check-date">
                                <label for="date-out">Check Out:</label>
                                <input type="text" class="datepicker" id="date-out" name="date_out" required autocomplete="off">
                                <i class="icon_calendar"></i>
                            </div>
                            <!-- <div class="select-option">
                                <label for="room">Room:</label>
                                <select id="room">
                                    <option value="">1 Room</option>
                                    <option value="">2 Room</option>
                                </select>
                            </div> -->  
                            <button type="submit">Check Availability</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/hero/hero-1.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-2.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-3.jpg"></div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Us Section Begin -->
    <section class="aboutus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="section-title">
                            <span>> About Us <</span>
                            <h2>Sona <br />Intercontinental Hotel</h2>
                        </div>
                        <p class="f-para">Welcome to Sona Hotel, where elegance meets comfort. We are 
                            dedicated to providing an exceptional experience for every guest. With 
                            a blend of modern amenities, we cater to both leisure and business travelers. Our 
                            attentive staff is committed to ensuring your stay is relaxing and enjoyable, 
                            offering personalized services that make you feel at home. At Sona, we believe in 
                            creating lasting memories.</p>
                        <p class="s-para">So when it comes to booking the perfect hotel, vacation,
                            apartment, guest house, or club, we’ve got you covered.</p>
                        <a href="./index.php?page=about-us" class="primary-btn about-btn">Read More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-pic">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="img/about/about-1.jpg" alt="">
                            </div>
                            <div class="col-sm-6">
                                <img src="img/about/about-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Section End -->

    <!-- Services Section End -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>> What We Do <</span>
                        <h2>Our Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-036-parking"></i>
                        <h4>Travel Plan</h4>
                        <p>Discover personalized travel itineraries
                             at Sona Hotel, tailored to your unique preferences and interests.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-033-dinner"></i>
                        <h4>Catering Service</h4>
                        <p>Enjoy exquisite catering options at Sona Hotel, perfect for events, 
                            ensuring delicious meals and memorable experiences.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-026-bed"></i>
                        <h4>Lounge</h4>
                        <p>Unwind in our elegant lounge, featuring a relaxing atmosphere,
                             signature cocktails, and attentive service for guests.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-024-towel"></i>
                        <h4>Laundry</h4>
                        <p>Enjoy hassle-free laundry services, ensuring your garments are 
                            cleaned and returned promptly for your convenience.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-044-clock-1"></i>
                        <h4>Night life</h4>
                        <p>Experience vibrant nightlife with live music, drinks, and unforgettable moments, 
                           all within the comfort of our hotel.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-012-cocktail"></i>
                        <h4>Bar & Drink</h4>
                        <p>Indulge in a variety of exquisite cocktails and beverages, crafted to enhance
                            your dining experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

<!-- Home Room Section Begin -->
<section class="hp-room-section">
    <div class="container-fluid">
        <div class="hp-room-items">
            <div class="row">
                <?php
                global $conn;
                $query = "SELECT * FROM room_categories LIMIT 4";
                $result = $conn->query($query);

                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="col-lg-3 col-md-6">
                <div class="hp-room-item set-bg" data-setbg="<?php echo isset($row['cover_img']) ? './assets/img/'.$row['cover_img'] :'' ?>" style="filter: brightness(79%) !important;">
                    <div class="hr-text">
                        <h3><?php echo $row['name']; ?></h3>
                        <h2>&#8358;<?php echo number_format($row['price'], 2); ?><span>/Pernight</span></h2>
                <table> 
                    <tbody>
                        <tr>
                            <td class="r-o">Capacity:</td>
                            <td>Max person <?php echo $row['capacity']; ?></td>
                        </tr>
                        <tr>
                            <td class="r-o">Services:</td>
                            <td><?php echo $row['services']; ?></td>
                        </tr>
                    </tbody>
                </table>
                <!-- <a href="#" class="primary-btn">More Details</a> -->
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    </div>
  </div>
</div>
</section>
<!-- Home Room Section End -->


<!-- Blog Section Begin -->
<section class="blog-section spad">
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="section-title">
                <span>> Hotel News <</span>
                <h2>Blogs & Events</h2>
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="blog-item set-bg" data-setbg="img/blog/blog-1.jpg">
                    <div class="bi-text">
                        <span class="b-tag">Travel Trip</span>
                        <h4><a href="#">Vacation in Canada</a></h4>
                        <div class="b-time"><i class="icon_clock_alt"></i> 15th April, 2019</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item set-bg" data-setbg="img/blog/blog-2.jpg">
                    <div class="bi-text">
                        <span class="b-tag">Camping</span>
                        <h4><a href="#">Choosing A Static Caravan</a></h4>
                        <div class="b-time"><i class="icon_clock_alt"></i> 15th April, 2019</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item set-bg" data-setbg="img/blog/blog-3.jpg">
                    <div class="bi-text">
                        <span class="b-tag">Event</span>
                        <h4><a href="#">Copper Canyon</a></h4>
                        <div class="b-time"><i class="icon_clock_alt"></i> 21th April, 2019</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="blog-item small-size set-bg" data-setbg="img/blog/blog-wide.jpg">
                    <div class="bi-text">
                        <span class="b-tag">Event</span>
                        <h4><a href="#">Trip To Iqaluit In Nunavut A Canadian Arctic City</a></h4>
                        <div class="b-time"><i class="icon_clock_alt"></i> 08th April, 2019</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item small-size set-bg" data-setbg="img/blog/blog-10.jpg">
                    <div class="bi-text">
                        <span class="b-tag">Travel</span>
                        <h4><a href="#">Traveling To Barcelona</a></h4>
                        <div class="b-time"><i class="icon_clock_alt"></i> 12th April, 2019</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>> Testimonials <</span>
                        <h2>What Customers Say?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="testimonial-slider owl-carousel">
                        <div class="ts-item">
                            <p>Our stay at Sona Hotel was absolutely wonderful! The staff was incredibly friendly,
                                 and the amenities exceeded our expectations. We felt truly pampered and will definitely 
                                 return!.</p>
                            <div class="ti-author">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <h5> - Alex Frank</h5>
                            </div>
                        </div>
                        <div class="ts-item">
                            <p>I had a fantastic experience at Sona Hotel. The room was spacious and comfortable, 
                                and the location was perfect for exploring the area. Highly 
                                recommend to anyone visiting!</p>
                            <div class="ti-author">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                                <h5> - Jidenna Kenneth</h5>
                            </div>
                        </div>
                        <div class="ts-item">
                            <p>Sona Hotel provided the perfect getaway for our family. 
                                The service was impeccable, and the dining options were delightful. 
                                We created unforgettable memories here and can't
                                 wait to come back!</p>
                            <div class="ti-author">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <h5> - Joe Kevin</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Footer -->
     <?php
     include('./footer.php')
     ?>
    <!--/ Footer -->
        
    <!-- Search model Begin -->
    <div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch"><i class="icon_close"></i></div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here ..." autocomplete="off">
        </form>
    </div>
</div>
<!-- Search model end -->
 
    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <sc src="js/jquery.magnific-popup.min.js"></sc  ript>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>