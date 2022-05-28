<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!--Main Slider-->
<section class="main-slider">
    <div id="carousel-banners" class="carousel slide" data-ride="carousel" data-interval="2000">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php foreach($banners as $k => $banner): ?>
            <li data-target="#carousel-banners" data-slide-to="<?= $k ?>" <?= $k === 0 ? 'class="active"' : '' ?>></li>
            <?php endforeach ?>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <?php foreach($banners as $k => $banner): ?>
            <div class="item <?= $k === 0 ? 'active' : 'after' ?>">
                <?= img($banner['banner']) ?>
            </div>
            <?php endforeach ?>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-banners" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-banners" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<!--End Main Slider-->

<!-- About Us -->
<section class="about-us">
    <div class="auto-container">
        <div class="row clearfix">
            <!-- Content Column -->
            <div class="content-column col-md-6 col-sm-12 col-xs-12">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="title">Welcome to</span>
                        <h2>Silvics Wood Veneers Pvt. Ltd.</h2>
                    </div>
                    <div class="text1">SILVICS veneer is a unique material sliced from logs that is influenced by an individual tree’s reaction to its soil composition, geographic location and other growing conditions throughout the duration of its growth. The intrinsic
                        patterns and markings in natural veneers aren’t altered or enhanced in any way, making each natural veneer from a tree an individual work of art.Natural wood veneer covers three most influence things which is ...</div>
                    <ul>
                        <li><strong>Gives Royal look to your furniture</strong></li>
                        <li><strong>Gives natural touch to your furniture</strong></li>
                        <li><strong>Gives  variety of textures for your furniture</strong></li>
                    </ul>
                    <div class="text">and SILVICS give you creative products Because <strong>"CREATIVITY IS RUNS IN OUR BLOOD".</strong></div>
                    <div class="link-box">For More Details <?= anchor('about', "Click Here!"); ?></div>
                </div>
            </div>
            <!-- Video Column -->
            <div class="video-column col-md-6 col-sm-12 col-xs-12">
                <div class="inner-column">
                    <figure class="image">
                        <?= img('assets/images/about-us.jpg') ?>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Us -->
<!-- Call Back Section -->
<section class="call-back-section">
    <div class="outer-box">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="content-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <h3>You are 10 minitues away from the Help you need</h3>
                    </div>
                </div>
                <div class="form-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="appointment-form">
                            <h3>Start inquiry</h3>
                            <form method="post" id="contact-form">
                                <div class="form-group">
                                    <input type="text" name="name" maxlength="100" placeholder="Name" required="">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" maxlength="100" placeholder="Email" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" maxlength="100" placeholder="Subject" required="">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" maxlength="255" placeholder="Your Message" required=""></textarea>
                                </div>
                                <div class="form-group">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form">Submit Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Call Back Section -->