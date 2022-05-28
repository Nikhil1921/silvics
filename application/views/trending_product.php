<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="sidebar-page-container alternate">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="content-side col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-top">
                <h2 class="head-detail">Trending Products</h2>
                <div class="row clearfix">
                    <?php foreach($prods as $prod): ?>
                    <div class="shop-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <?= img($prod->image) ?>
                            </div>
                            <div class="lower-content bdr">
                                <h3>
                                    <?= anchor($prod->slug, $prod->p_name, 'class="product_h3"'); ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</div>