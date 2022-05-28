<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!--Page Title-->
<section class="page-title" style="background-image:url(<?= base_url('assets/images/breadcumb.jpg') ?>);">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <h1>Error 404</h1>
            <ul class="bread-crumb clearfix">
                <li><?= anchor('', 'Home') ?></li>
                <li><a href="javascript:;">Error 404</a></li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->
<!--Error Page Section-->
<section class="error-section">
    <div class="auto-container">
        <div class="error-image">
            <div class="image">
                <?= img("assets/images/404.png") ?>
            </div>
        </div>
        <h2>Page not found</h2>
        <div class="text">The page you are Looking for was Moved, Removed, Renamed or Might Never Existed</div>
        <?= anchor('', 'Back to Home', 'class="theme-btn btn-style-six"') ?>
        <!-- Bottom Image -->
    </div>
</section>
<!--End Error Section-->