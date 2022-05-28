<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
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
                    <h4> We have <span>20 years</span> of experience working with the finest face veneers.</h4>
                    <div class="text">Silvic Wood Veneers Pvt. Ltd. is Ahmedabad based organization working towards an excellence in the manufacture of decorative veneers. Our experience and knowledge made us experts in our craft and class.Our veneer face buyer's eye for the best selection of veneers makes us distinct between the ordinary and the exceptional. We are into this business for several years and have valuable clients including many well-known Distributors, Dealers, Architects, Interior Designers, Furniture Manufacturers (OEM), Contractors and Corporate Clients across India. </div>
                    
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
        <div class="row">
            <div class="col-lg-12">
                <div class="text_p">
                    They are the main cause of our existence in the market and we are thankful to them for putting us at the top of their list over our other competitors in terms of trust. Our carefully selected raw materials have allowed us to deliver superior quality products and consistent customer satisfaction over the years. The SKVICS brand has generated unparalleled goodwill and veritable market strength on the basis of our commitment to superlative quality.
                </div>
            </div>
        </div>
    </div>
</section>
<section class="call-to-action" style="background-image: url(<?= base_url('assets/images/4.jpg') ?>);">
  <div class="auto-container">
    <div class="row clearfix">
            <!-- Service Block -->
            <div class="service-block-two col-md-6 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <h3><a href="javascript:;">Vision</a></h3>
                    <div class="text text-justify">To stand out as one of the supreme innovative organization offering customized products standing up to the merit through trendsetting plans in the field of veneer.
                    </div>
                </div>
            </div>
            <!-- Service Block -->
            <div class="service-block-two col-md-6 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <h3><a href="javascript:;">Mission</a></h3>
                    <div class="text text-justify">To offer an uncompromised and unmatched level of character in commodities through an effective market competitive cost, incessant attempt of implementing creativity in designs and quality in services.</div>
                </div>
            </div>
        </div>
  </div>
</section>
<!-- Testmonial Section -->
<section class="testimonial-section style-two alternate">
    <div class="auto-container">
        <div class="sec-titlel">
            <h2 class="review">Silvics Team</h2>
        </div>
        <div class="testimonial-carousel owl-carousel owl-theme">
        <?php foreach($teams as $team): ?>
            <div class="testimonial-block">
                <div class="inner-box">
                    <div class="thumb">
                        <?= img($team['image']) ?>
                    </div>
                    <div class="text">
                        <?= $team['description'] ?>
                    </div>
                    <div class="info">
                        <h3 class="name"><?= $team['t_name'] ?></h3>
                        <span class="designation"><?= $team['position'] ?></span>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
        </div>
    </div>
</section>
<!--End Testmonial Section -->