<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dingo</title>
    <link rel="icon" href="img/favicon.png">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/animate.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/themify-icons.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/flaticon.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/magnific-popup.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/slick.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/gijgo.min.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/nice-select.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/all.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/Code.css') ?>">
</head>

<body>
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="img/logo.png" alt="logo"> </a>
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
                            <a href="#regervation" class="btn_1 d-none d-sm-block"><?= formatMoney($user->argent) ?> Ariary</a>
                        </div>
                        <div class="menu_btn">
                            <a href="Login.html" style="border:1px orange;" class="btn_1 d-none d-sm-block">Deconnection</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>




<style type="text/css">

    .card {
        box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: rgb(224, 224, 224);
        background-clip: border-box;
        border: 0 solid rgba(0, 0, 0, .125);
        border-radius: 1rem;
    }

    .card-body {
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 1.5rem 1.5rem;
    }
</style>
</head>

<body>
    <div class="container" style="margin-top: 200px;background-color: rgb(235, 235, 235);">
        <div class="row">

            <div class="col-lg-9">
                <div class="accordion" id="accordionPayment">

                    <div class="accordion-item mb-3">
                        <h2 class="h5 px-4 py-3 accordion-header d-flex justify-content-between align-items-center">
                            <div class="form-check w-100 collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseCC" aria-expanded="false">
                                <label class=" pt-1" for="payment1">
                                   Votre Solde : <?= formatMoney($user->argent) ?> AR
                                </label>
                            </div>
                            <span>
                                <svg width="34" height="25" xmlns="http://www.w3.org/2000/svg">
                                    <g fill-rule="nonzero" fill="#333840">
                                        <path
                                            d="M29.418 2.083c1.16 0 2.101.933 2.101 2.084v16.666c0 1.15-.94 2.084-2.1 2.084H4.202A2.092 2.092 0 0 1 2.1 20.833V4.167c0-1.15.941-2.084 2.102-2.084h25.215ZM4.203 0C1.882 0 0 1.865 0 4.167v16.666C0 23.135 1.882 25 4.203 25h25.215c2.321 0 4.203-1.865 4.203-4.167V4.167C33.62 1.865 31.739 0 29.418 0H4.203Z">
                                        </path>
                                        <path
                                            d="M4.203 7.292c0-.576.47-1.042 1.05-1.042h4.203c.58 0 1.05.466 1.05 1.042v2.083c0 .575-.47 1.042-1.05 1.042H5.253c-.58 0-1.05-.467-1.05-1.042V7.292Zm0 6.25c0-.576.47-1.042 1.05-1.042H15.76c.58 0 1.05.466 1.05 1.042 0 .575-.47 1.041-1.05 1.041H5.253c-.58 0-1.05-.466-1.05-1.041Zm0 4.166c0-.575.47-1.041 1.05-1.041h2.102c.58 0 1.05.466 1.05 1.041 0 .576-.47 1.042-1.05 1.042H5.253c-.58 0-1.05-.466-1.05-1.042Zm6.303 0c0-.575.47-1.041 1.051-1.041h2.101c.58 0 1.051.466 1.051 1.041 0 .576-.47 1.042-1.05 1.042h-2.102c-.58 0-1.05-.466-1.05-1.042Zm6.304 0c0-.575.47-1.041 1.051-1.041h2.101c.58 0 1.05.466 1.05 1.041 0 .576-.47 1.042-1.05 1.042h-2.101c-.58 0-1.05-.466-1.05-1.042Zm6.304 0c0-.575.47-1.041 1.05-1.041h2.102c.58 0 1.05.466 1.05 1.041 0 .576-.47 1.042-1.05 1.042h-2.101c-.58 0-1.05-.466-1.05-1.042Z">
                                        </path>
                                    </g>
                                </svg>
                            </span>
                        </h2>
                        <div id="collapseCC" class="accordion-collapse collapse show" data-bs-parent="#accordionPayment"
                            style>
                            <div class="accordion-body">
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="text" class="form-control" placeholder>
                                </div>
                            </div>
                        </div>
                        <h4 style="color: red;" id="error"> Paiement impossible frais manquant</h4>
                        <a href="<?php echo site_url('code/form')?>">Insérer un code</a>
                    </div>

                    <div class="accordion-item mb-3 border">
                        <div id="collapsePP" class="accordion-collapse collapse" data-bs-parent="#accordionPayment"
                            style>
                            <div class="accordion-body">
                                <div class="px-2 col-lg-6 mb-3">
                                    <label class="form-label">Email address</label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card position-sticky top-0">
                    <div class="p-3 bg-light bg-opacity-10">
                        <h6 class="card-title mb-3">Order Summary</h6>
                        <div class="d-flex justify-content-between mb-1 small">
                            <span><?= $regime->nom ?></span> <span><?= formatMoney($regime->prix_total) ?> Ariary</span>
                        </div>
                       
                        <hr>
                        <div class="d-flex justify-content-between mb-4 small">
                            <span>TOTAL</span> <strong class="text-dark"><?= formatMoney($regime->prix_total) ?> Ariary</strong>
                        </div>
                        <div class="form-check mb-1 small">
                            <input class="form-check-input" type="checkbox" value id="tnc">
                            <label class="form-check-label" for="tnc">
                                I agree to the <a href="#">terms and conditions</a>
                            </label>
                        </div>
                        <div class="form-check mb-3 small">
                            <input class="form-check-input" type="checkbox" value id="subscribe">
                            <label class="form-check-label" for="subscribe">
                                Get emails about product updates and events. If you change your mind, you can
                                unsubscribe at any time. <a href="#">Privacy Policy</a>
                            </label>
                        </div>
                        <a href="<?php echo site_url('regime/paiement/'.$regime->id) ?>" id="paiement"><button class="btn btn-primary w-100 mt-2">Place order</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<br>

    
<footer class="footer-area" style="bottom: 0;">
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
                    <form action="<?php echo site_url('regime/paiement/'.$regime->id) ?>">
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
                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script> All rights reserved | This template
                        is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                            target="_blank">Colorlib</a>
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

    <script src="js/jquery-1.12.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/masonry.pkgd.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        var p = document.getElementById('paiement');
        var e = document.getElementById('error');
        if (<?php echo $regime->prix_total ?> > <?= $user->argent ?>) {
            p.hidden = true;
            e.hidden = false;
        } else {
            p.hidden = false;
            e.hidden = true;
        }
    </script>
</body>

</html>