
<!-- Footer Section Begin -->
<footer class="footer-section" style="position: relative; top: 3rem;">
    <div class="container">
        <div class="footer-text">
            <div class="row">
                <div class="col-lg-4">
                    <div class="ft-about">
                        <div class="logo">
                            <a href="#">
                                <img src="img/footer-logo.png" alt="">
                            </a>
                        </div>
                        <p>We inspire and connect with countless <br />travelers from all over the country.</p>
                        <div class="fa-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="ft-contact">
                        <h6>Contact Us</h6>
                        <ul>
                            <li><?= $_SESSION['setting_contact'] ?></li>
                            <li><?= $_SESSION['setting_email'] ?></li>
                            <li>Plot DD34, kings Avenue Wuse Abuja Nigeria.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="ft-newslatter">
                        <h6>Newsletter</h6>
                        <p>Get the latest updates and offers.</p>
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING']); ?>" method="post" class="fn-form">
                            <input type="email" name="email" placeholder="Email ..." required>
                            <button type="submit"><i class="fa fa-send"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <ul>
                        <li><a href="./index.php?page=contact">Contact</a></li>
                        <li><a href="#">Terms of use</a></li>
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="./admin/">Admin</a></li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="co-text"><p>
                      <!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>-->
                     Copyright &copy;<script>document.write(new Date().getFullYear());</script> made with <i class="fa fa-heart" aria-hidden="true"></i> 
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->


<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
    // Get the submitted email
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    // Prepare the SQL statement to insert the email
    $sql = "INSERT INTO news_letter (email) VALUES (?)";

    // Prepare statement to prevent SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email); // "s" stands for string (email)

    // Execute the statement
    if ($stmt->execute()) {
        // Success: Show SweetAlert for success
        echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: 'You have successfully subscribed to our newsletter!',
                confirmButtonText: 'OK'
            });
        </script>";
    } else {
        // Error: Show SweetAlert for error
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: 'There was an error subscribing. Please try again.',
                confirmButtonText: 'OK'
            });
        </script>";
    }

    // Close statement 
    $stmt->close();
}
?>

