<?php 
    $id_user = $this->session->userdata('id_user');
?>
<!doctype html>
<html lang="en">

<head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dingo</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo site_url()."assets/css/bootstrap.min.css"?>">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?php echo site_url()."assets/css/animate.css"?>">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?php echo site_url()."assets/css/owl.carousel.min.css"?>">
    <!-- themify CSS -->
    <link rel="stylesheet" href="<?php echo site_url()."assets/css/themify-icons.css"?>">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?php echo site_url()."assets/css/flaticon.css"?>">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?php echo site_url()."assets/css/magnific-popup.css"?>">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="<?php echo site_url()."assets/css/slick.css"?>">
    <link rel="stylesheet" href="<?php echo site_url()."assets/css/gijgo.min.css"?>">
    <link rel="stylesheet" href="<?php echo site_url()."assets/css/nice-select.css"?>">
    <link rel="stylesheet" href="<?php echo site_url()."assets/css/all.css"?>">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?php echo site_url()."assets/css/style.css"?>">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="<?php echo site_url()."assets/img/logo.png"?>" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="food_menu.html">Menu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="chefs.html">Chefs</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Blog
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="blog.html">Blog</a>
                                        <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                        <a class="dropdown-item" href="elements.html">Elements</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="menu_btn">
                            <a href="#regervation" class="btn_1 d-none d-sm-block">S ' inscrire</a>
                        </div>
                        <div class="menu_btn">
                            <a href="#regervation" class="btn_1 d-none d-sm-block">Login</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->
    
    <!-- banner part start-->
    <form action="<?php echo site_url('user/insererDetailsUsers') ?>" method="post">
        <section class="banner_part">
            <div class="container">
                <div class="row ">
                    <input type="hidden" name="iduser" value="<?php echo $id_user;?>">
                    <div class="col-lg-5" style="margin-top: -120px;">
                        <div class="banner_text">
                            <div class="banner_text_iner">
                                <form action="/login" method="POST">
                                <div class="form-group">
                                        <label for="datepoids">Date de pesee</label>
                                        <input type="date" class="form-control" id="username" name="datepoidspoids" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="poids">Poids (kg)</label>
                                        <input type="number" class="form-control" id="username" name="poids" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="taille">Taille (cm)</label>
                                        <input type="number" class="form-control" id="password" name="taille" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="kilo">Kilos à Gagner/Perdre</label>
                                        <input type="number" class="form-control" id="password" name="kilo" required>
                                    </div>

                                
                                    <button type="submit" class="btn_10">Continuer <img src="<?php echo site_url()."assets/img/icon/left_1.svg"?>" alt=""></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</form>
    <!-- banner part start-->





    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-md-3 col-lg-3">
                    <div class="single-footer-widget footer_1">
                        <h4>About Us</h4>
                        <p>Heaven fruitful doesn't over for these theheaven fruitful doe over days
                            appear creeping seasons sad behold beari ath of it fly signs bearing
                            be one blessed after.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-2 col-lg-3">
                    <div class="single-footer-widget footer_2">
                        <h4>Important Link</h4>
                        <div class="contact_info">
                            <ul>
                                <li><a href="#">WHMCS-bridge</a></li>
                                <li><a href="#"> Search Domain</a></li>
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Shopping Cart</a></li>
                                <li><a href="#"> Our Shop</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-3 col-lg-3">
                    <div class="single-footer-widget footer_2">
                        <h4>Contact us</h4>
                        <div class="contact_info">
                            <p><span> Address :</span>Hath of it fly signs bear be one blessed after </p>
                            <p><span> Phone :</span> +2 36 265 (8060)</p>
                            <p><span> Email : </span>info@colorlib.com </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-4 col-lg-3">
                    <div class="single-footer-widget footer_3">
                        <h4>Newsletter</h4>
                        <p>Heaven fruitful doesn't over lesser in days. Appear creeping seas</p>
                        <form action="#">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder='Email Address'
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'">
                                    <div class="input-group-append">
                                        <button class="btn" type="button"><i class="fas fa-paper-plane"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="copyright_part_text">
                <div class="row">
                    <div class="col-lg-8">
                        <p class="footer-text m-0">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script> All rights reserved | This
                            template is made with <i class="ti-heart" aria-hidden="true"></i> by <a
                                href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <div class="copyright_social_icon text-right">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="ti-dribbble"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="<?php echo site_url()."assets/js/jquery-1.12.1.min.js"?>"></script>
    <!-- popper js -->
    <script src="<?php echo site_url()."assets/js/popper.min.js"?>"></script>
    <!-- bootstrap js -->
    <script src="<?php echo site_url()."assets/js/bootstrap.min.js"?>"></script>
    <!-- easing js -->
    <script src="<?php echo site_url()."assets/js/jquery.magnific-popup.js"?>"></script>
    <!-- swiper js -->
    <script src="<?php echo site_url()."assets/js/swiper.min.js"?>"></script>
    <!-- swiper js -->
    <script src="<?php echo site_url()."assets/js/masonry.pkgd.js"?>"></script>
    <!-- particles js -->
    <script src="<?php echo site_url()."assets/js/owl.carousel.min.js"?>"></script>
    <!-- swiper js -->
    <script src="<?php echo site_url()."assets/js/slick.min.js"?>"></script>
    <script src="<?php echo site_url()."assets/js/gijgo.min.js"?>"></script>
    <script src="<?php echo site_url()."assets/js/jquery.nice-select.min.js"?>"></script>
    <!-- custom js -->
    <script src="<?php echo site_url()."assets/js/custom.js"?>"></script>
</body>

</html>