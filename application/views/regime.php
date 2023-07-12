<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dingo</title>
    <link rel="icon" href="<?php echo site_url('img/favicon.png') ?>">
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
</head>

<body>
    <!--::header part start::-->
<?php include("headerclient.php")?>
   
    <!-- Header part end-->

    <!-- food_menu start-->
    <section class="food_menu gray_bg">
        <div class="container">
            <div class="col-lg-6">
            <div class="section_tittle">
                <h2>Activite Journaliere</h2>
            </div>
            </div>
            <div class="row">
                <?php foreach ($regime->regime->activite->detail as $activite) { ?>
                    <div class="col-sm-3 col-lg-3">
                        <div class="single_food_item media">
                            <img src="run.png" class="mr-3" width="110px" height="100px">
                            <div class="media-body align-self-center">
                                <p><?= $activite->type_activite->libelle ?></p>
                                <p><?= $activite->quantite ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            
        </div>


        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="section_tittle">
                        <h2>Regime Alimentaire</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="nav nav-tabs food_menu_nav" id="myTab" role="tablist">
                        <a class="active" id="Special-tab" data-toggle="tab" href="#Special" role="tab" aria-controls="Special" aria-selected="false">Breakfast <img src="<?php echo site_url('assets/img/icon/play.svg') ?>" alt="play"></a>
                        <a id="Launch-tab" data-toggle="tab" href="#Launch" role="tab" aria-controls="Launch" aria-selected="false">Launch <img src="<?php echo site_url('assets/img/icon/play.svg') ?>" alt="play"></a>
                        <a id="Dinner-tab" data-toggle="tab" href="#Dinner" role="tab" aria-controls="Dinner" aria-selected="false">Dinner <img src="<?php echo site_url('assets/img/icon/play.svg') ?>" alt="play"> </a>
                    </div>
                </div>
                <?php if ($regime->regime->plats != null) { ?>
                <div class="col-lg-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active single-member" id="Special" role="tabpanel"
                            aria-labelledby="Special-tab">
                            <div class="row">
                                <div class="col-sm-6 col-lg-6">
                                    
                                    <div class="single_food_item media">
                                        <img src="<?php echo site_url('assets/img/food_menu/single_food_3.png') ?>" class="mr-3" alt="...">
                                        <div class="media-body align-self-center">
                                            <!-- <h3></h3> -->
                                            <?php foreach ($regime->regime->plats as $nourriture) { ?>
                                                <?php if($nourriture->id_day==1) { ?>
                                                <p><?= $nourriture->nourriture->nom ?>: <?= $nourriture->quantite ?></p>
                                                <?php } ?>
                                            <?php } ?>
                                            <!-- <h5>$40.00</h5> -->
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                        <div class="tab-pane fade single-member" id="Launch" role="tabpanel"
                            aria-labelledby="Launch-tab">
                            <div class="row">
                                <div class="col-sm-6 col-lg-6">
                                    
                                    <div class="single_food_item media">
                                        <img src="<?php echo site_url('assets/img/food_menu/single_food_3.png') ?>" class="mr-3" alt="...">
                                        <?php foreach ($regime->regime->plats as $nourriture) { ?>
                                            <?php if($nourriture->id_day==2) { ?>
                                            <p><?= $nourriture->nourriture->nom ?>: <?= $nourriture->quantite ?></p>
                                            <?php } ?>
                                        <?php } ?>
                                    </div>
                                </div>
                              

                            </div>
                        </div>
                        <div class="tab-pane fade single-member" id="Dinner" role="tabpanel"
                            aria-labelledby="Dinner-tab">
                            <div class="row">
                                <div class="col-sm-6 col-lg-6">
                                   
                                    <div class="single_food_item media">
                                        <img src="<?php echo site_url('assets/img/food_menu/single_food_6.png')?>" class="mr-3" alt="...">
                                        <?php foreach ($regime->regime->plats as $nourriture) { ?>
                                            <?php if($nourriture->id_day==3) { ?>
                                            <p><?= $nourriture->nourriture->nom ?>: <?= $nourriture->quantite ?></p>
                                            <?php } ?>
                                        <?php } ?>
                                    </div>
                                </div>
                               

                            </div>
                        </div>

                    </div>
                </div>
                <?php } else { ?>
                    <h3>Votre régime n'a pas encore commencé</h3>
                <?php } ?>

            </div>
        </div>
    </section>
    <!-- food_menu part end-->

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
    <script src="<?php echo site_url('assets/js/jquery-1.12.1.min.js')?>"></script>
    <script src="<?php echo site_url('assets/js/popper.min.js')?>"></script>
    <script src="<?php echo site_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo site_url('assets/js/jquery.magnific-popup.js')?>"></script>
    <script src="<?php echo site_url('assets/js/swiper.min.js')?>"></script>
    <script src="<?php echo site_url('assets/js/masonry.pkgd.js')?>"></script>
    <script src="<?php echo site_url('assets/js/owl.carousel.min.js')?>"></script>
    <script src="<?php echo site_url('assets/js/slick.min.js')?>"></script>
    <script src="<?php echo site_url('assets/js/gijgo.min.js')?>"></script>
    <script src="<?php echo site_url('assets/js/jquery.nice-select.min.js')?>"></script>
    <script src="<?php echo site_url('assets/js/custom.js')?>"></script>
</body>

</html>