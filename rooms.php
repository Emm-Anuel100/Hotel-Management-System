<!DOCTYPE html>
<html lang="en">

<head>
    <title>
      <?= $_SESSION['setting_hotel_name'] . " | Rooms" ?>
    </title>
</head>

<style>
    img.category-img{
        height: 16rem;
        object-fit: cover;
        border-radius: .3rem;

        &:hover{
            transform: scale(1.05);
            transition: ease-in .4s;
            -webkit-transition: ease-in .4s;
        }
    }
    .room-category{
        text-transform: capitalize;
    }
</style>

 <body>
     <?php
	  global $conn;
	  $date_in = isset($_POST['date_in']) ? $_POST['date_in'] : date('Y-m-d');
	  $date_out = isset($_POST['date_out']) ? $_POST['date_out'] : date('Y-m-d',strtotime(date('Y-m-d').' + 3 days'));
	 ?>

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
                                    <li class="active"><a href="./index.php?page=rooms">Rooms</a></li>
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

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Room Categories</h2>
                        <div class="bt-option">
                            <a href="./index.php?page=home">Home</a>
                            <span>Categories</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Rooms Section Begin -->
    <section class="rooms-section spad">
        <div class="container">
            <div class="row">
            <?php 			
            $cat = $conn->query("SELECT * FROM room_categories");
            $cat_arr = array();
            while($row = $cat->fetch_assoc()){
                $cat_arr[$row['id']] = $row;
             }
             $qry = $conn->query("SELECT distinct(category_id),category_id from rooms where id not in (SELECT room_id from checked where '$date_in' BETWEEN date(date_in) and date(date_out) and '$date_out' BETWEEN date(date_in) and date(date_out)  )");
             while($row= $qry->fetch_assoc()):
			 ?>
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                    <img src="assets/img/<?= $cat_arr[$row['category_id']]['cover_img'] ?>" alt="Category image" loading="lazy" class="category-img">
                        <div class="ri-text">
                            <h4 class="room-category"><?= $cat_arr[$row['category_id']]['name'] ?></h4>
                            <h3><?= '&#8358; '.number_format($cat_arr[$row['category_id']]['price'],2) ?><span>/Pernight</span></h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Capacity:</td>
                                        <td>Max. person <?= $cat_arr[$row['category_id']]['capacity'] ?></td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <td><?= $cat_arr[$row['category_id']]['services'] ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="#" class="primary-btn book_now" data-id="<?= $row['category_id'] ?>">Book Now</a>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <!-- <div class="col-lg-12">
                    <div class="room-pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">Next <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- Rooms Section End -->
 
    <!-- Footer -->
     <?php
     include('./footer.php');
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
    <script>
	$('.book_now').click(function(){
		uni_modal('Book','admin/book.php?in=<?php echo $date_in ?>&out=<?php echo $date_out ?>&cid='+$(this).attr('data-id'))
	})
    </script>
</body>
</html>