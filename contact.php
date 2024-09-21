<!DOCTYPE html>
<html lang="en">

<head>
    <title>
      <?= $_SESSION['setting_hotel_name'] . " | Contact Us" ?>
    </title>
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
                <li><a href="./index.php?page=home">Home</a></li>
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
                <li class="active"><a href="./index.php?page=contact">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="top-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        <ul class="top-widget">
            <li><i class="fa fa-phone"></i> <?= $_SESSION['setting_contact'] ?></li>
            <li><i class="fa fa-envelope"></i> <?= $_SESSION['setting_email'] ?></li>
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
                            <li><i class="fa fa-phone"></i> <?= $_SESSION['setting_contact'] ?></li>
                            <li><i class="fa fa-envelope"></i> <?= $_SESSION['setting_email'] ?></li>
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
                                <img src="img/logo.png" alt="logo image">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li><a href="./index.php?page=home">Home</a></li>
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
                                    <li class="active"><a href="./index.php?page=contact">Contact</a></li>
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

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-text">
                        <h2>Contact Info</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="c-o">Address:</td>
                                    <td>Plot DD34, kings Avenue Wuse Abuja Nigeria.</td>
                                </tr>
                                <tr>
                                    <td class="c-o">Phone:</td>
                                    <td><?= $_SESSION['setting_contact'] ?></td>
                                </tr>
                                <tr>
                                    <td class="c-o">Email:</td>
                                    <td><?= $_SESSION['setting_email'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-7 offset-lg-1 contact-form-wrapper" style="bottom: 1.4rem; position:relative">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING']); ?>" method="post" class="contact-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="name" placeholder="Your Name ..." autocomplete="off" required>
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="email" placeholder="Your Email ..." autocomplete="off" required>
                            </div>
                            <div class="col-lg-12">
                                <textarea name="message" placeholder="Your Message ..." required></textarea>
                                <button type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="map">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3447.453724039318!2d7.463476309913093!3d9.068582890956748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0b1df05c451b%3A0x37e4050547e1366b!2sWuse%20Market%20Rd%2C%20Wuse%2C%20Abuja%20904101%2C%20Federal%20Capital%20Territory!5e1!3m2!1sen!2sng!4v1726952348722!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

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
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>


<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'])) {

    // Get the submitted form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Prepare the SQL statement to insert the form data into the contact_messages table
    $sql = "INSERT INTO contact (name, email, message) VALUES (?, ?, ?)";

    // Prepare statement to prevent SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $message); 

    // Execute the statement
    if ($stmt->execute()) {
        // Success: Show SweetAlert for success
        echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: 'Your message has been sent successfully!',
                confirmButtonText: 'OK'
            });
        </script>";
    } else {
        // Error: Show SweetAlert for error
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: 'There was an error sending your message. Please try again.',
                confirmButtonText: 'OK'
            });
        </script>";
    }

    // Close statement 
    $stmt->close();
}
?>
