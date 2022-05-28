<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <title><?= ucwords($title) ?> | <?= APP_NAME ?></title>
        <?= link_tag('assets/images/favicon.png', 'shortcut icon', 'image/png') ?>
        <?= link_tag('assets/images/favicon.png', 'icon', 'image/png') ?>
        <?= link_tag('assets/css/bootstrap.css', 'stylesheet', 'text/css') ?>
        <?= link_tag('assets/css/style.css', 'stylesheet', 'text/css') ?>
        <?= link_tag('assets/css/responsive.css', 'stylesheet', 'text/css') ?>
        <?= link_tag('assets/css/color-themes/default-theme.css', 'stylesheet', 'text/css') ?>
    </head>
    <body>
        <div class="page-wrapper">
            <!-- Preloader -->
            <!-- <div class="preloader"></div> -->
            <header class="main-header header-style-two">
                <!--Header Top-->
                <div class="header-top">
                    <div class="auto-container">
                        <div class="inner-container clearfix">
                            <div class="top-left">
                                <div>
                                    <?= anchor('', img('assets/images/logo.png')); ?>
                                </div>
                                <div>
                                    <ul class="clearfix">
                                        <li><a href="mailto:<?= $this->config->item('email') ?>"><i class="fa fa-envelope-o clr_white"></i> <?= $this->config->item('email') ?></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="top-right">
                                <ul class="social-icon-one">
                                    <li><a href="<?= $this->config->item('facebook') ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="<?= $this->config->item('twitter') ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="<?= $this->config->item('google-plus') ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="<?= $this->config->item('pinterest') ?>" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="<?= $this->config->item('dribbble') ?>" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Header Top -->

                <!-- Header Lower -->
                <div class="header-lower">
                    <div class="auto-container">
                        <div class="main-box margin clearfix">
                            <!--Logo Box-->
                            <div class="logo-box display_none">
                                <div class="logo">
                                    <?= anchor('', img('assets/images/logo.png')); ?>
                                </div>
                            </div>

                            <!--Nav Outer-->
                            <div class="nav-outer clearfix">
                                <!-- Main Menu -->
                                <nav class="main-menu">
                                    <div class="navbar-header">
                                        <!-- Toggle Button -->
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>

                                    <div class="navbar-collapse collapse clearfix">
                                        <ul class="navigation clearfix">
                                            <li>
                                                <?= anchor('', "Home"); ?>
                                            </li>
                                            <li>
                                                <?= anchor('about', "About Us"); ?>
                                            </li>
                                            <li>
                                                <?= anchor('categories', "Our Products"); ?>
                                            </li>
                                            <li>
                                                <?= anchor('trending-product', "Trending Products"); ?>
                                            </li>
                                            <li>
                                                <?= anchor('tutorials', "Tutorials"); ?>
                                            </li>
                                            <li>
                                                <?= anchor('gallery', "Gallery"); ?>
                                            </li>
                                            <li>
                                                <?= anchor('contact', "Contact us"); ?>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                                <!-- Main Menu End-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Header Lower -->

                <!--Sticky Header-->
                <div class="sticky-header">
                    <div class="auto-container clearfix">
                        <!--Logo-->
                        <div class="logo pull-left">
                            <?= anchor('', img('assets/images/silvics-small.png'), 'class="img-responsive"'); ?>
                        </div>
                        <!--Right Col-->
                        <div class="right-col pull-right">
                            <!-- Main Menu -->
                            <nav class="main-menu">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li>
                                            <?= anchor('', "Home"); ?>
                                        </li>
                                        <li>
                                            <?= anchor('about', "About Us"); ?>
                                        </li>
                                        <li>
                                            <?= anchor('categories', "Our Products"); ?>
                                        </li>
                                        <li>
                                            <?= anchor('trending-product', "Trending Products"); ?>
                                        </li>
                                        <li>
                                            <?= anchor('tutorials', "Tutorials"); ?>
                                        </li>
                                        <li>
                                            <?= anchor('gallery', "Gallery"); ?>
                                        </li>
                                        <li>
                                            <?= anchor('contact', "Contact us"); ?>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                            <!-- Main Menu End-->
                        </div>
                    </div>
                </div>
                <!--End Sticky Header-->
            </header>
            <?php if(isset($bread)):  ?>
            <!--Page Title-->
            <section class="page-title" style="background-image:url(<?= base_url('assets/images/breadcumb.jpg') ?>);">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <h1><?= $bread ?></h1>
                        <ul class="bread-crumb clearfix">
                            <li><?= anchor('', 'Home') ?></li>
                            <li><a href="javascript:;"><?= $bread ?></a></li>
                        </ul>
                    </div>
                </div>
            </section>
            <!--End Page Title-->
            <?php endif  ?>
            <?= $contents ?>
            <!-- Main Footer -->
            <footer class="main-footer">
                <div class="auto-container">
                    <!--Widgets Section-->
                    <div class="widgets-section">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="footer-widget about-widget">
                                    <div class="footer-logo">
                                        <figure>
                                            <?= anchor('', img('assets/images/logo.png')); ?>
                                        </figure>
                                    </div>
                                    <div class="widget-content">
                                        <div class="text">Silvic Wood Veneers Pvt. Ltd. is Ahmedabad based organization working towards an excellence in the manufacture of decorative veneers. Our experience and knowledge made us experts in our craft and class.</div>
                                        <ul class="social-icon-two">
                                            <li><a href="<?= $this->config->item('facebook') ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="<?= $this->config->item('twitter') ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="<?= $this->config->item('linkedin') ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="<?= $this->config->item('google-plus') ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="<?= $this->config->item('pinterest') ?>" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="footer-widget links-widget">
                                    <h2 class="widget-title">Quick Link</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li>
                                                <?= anchor('', "Home"); ?>
                                            </li>
                                            <li>
                                                <?= anchor('about', "About Us"); ?>
                                            </li>
                                            <li>
                                                <?= anchor('categories', "Our Products"); ?>
                                            </li>
                                            <li>
                                                <?= anchor('trending-product', "Trending Products"); ?>
                                            </li>
                                            <li>
                                                <?= anchor('tutorials', "Tutorials"); ?>
                                            </li>
                                            <li>
                                                <?= anchor('gallery', "Gallery"); ?>
                                            </li>
                                            <li>
                                                <?= anchor('contact', "Contact us"); ?>
                                            </li>
                                            <li><a href="javascript:;">Terms & Condition</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="footer-widget contact-widget">
                                    <h2 class="widget-title">Contact us</h2>
                                    <div class="widget-content">
                                        <ul class="contact-list">
                                            <li><span class="fa fa-volume-control-phone clr_white"></span><?= $this->config->item('mobile1') ?></li>
                                            <li><span class="fa fa-envelope clr_white"></span><a href="mailto:<?= $this->config->item('email') ?>"><?= $this->config->item('email') ?></a></li>
                                            <li><span class="fa fa-map-marker clr_white"></span><?= $this->config->item('address1') ?></li>
                                            <li><span class="fa fa-map-marker clr_white"></span><?= $this->config->item('address2') ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Footer Bottom-->
                <div class="footer-bottom">
                    <div class="auto-container">
                        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-up clr_white clr_marun"></span></div>
                        <div class="copyright-text">© <?= date('Y') ?> Silvics All rights reserved Proudly powered by Amaze Web Solution</div>
                    </div>
                </div>
            </footer>
            <!-- End Main Footer -->
            <!-- Phone Stickey -->
            <div class="phone quick-alo-phone">
                <a href="tel:<?= $this->config->item('mobile3') ?>">
                    <div class="quick-alo-ph-img-circle"></div>
                </a>
            </div>
            <!-- Phone Stickey -->
            <!-- Whatsapp Stickey -->
            <a href="https://api.whatsapp.com/send?phone=<?= $this->config->item('mobile3') ?>&text=Hello" class="float" target="_blank">
                <i class="fa fa-whatsapp my-float"></i>
            </a>
            <!-- Whatsapp Stickey -->
        </div>
        <?= script("assets/js/jquery.js") ?>
        <?= script("assets/js/bootstrap.min.js") ?>
        <?php if(isset($owl)):  ?>
        <?= script("assets/js/owl.js") ?>
        <?php endif  ?>
        <?php if(isset($fancybox)):  ?>
        <?= script("assets/js/jquery.fancybox.js") ?>
        <?= script("assets/js/isotope.js") ?>
        <?php endif  ?>
        <?php if(isset($validate)):  ?>
        <?= script("assets/js/validate.js") ?>
        <!-- Modal -->
        <div id="responseModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Response Message</h3>
                    </div>
                    <div class="modal-body">
                        <section class="contact-page-section mt-1">
                            <div class="text-center">
                                <h3 id="responseData"></h3>
                            </div>
                        </section>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="theme-btn btn-style-two" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->
        <?php endif  ?>
        <?= script("assets/js/custom.js") ?>
    </body>
</html>