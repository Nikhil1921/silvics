<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="sidebar-page-container alternate">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="content-side col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-details">
                    <div class="basic-details">
                        <div class="row clearfix">
                            <div class="image-column col-md-4 col-sm-12 col-xs-12">
                                <figure class="image-box">
                                    <?= img($prod->image) ?>
                                </figure>
                            </div>
                            <div class="info-column col-md-8 col-sm-12 col-xs-12">
                                <div class="inner-column">
                                    <div class="details-header">
                                        <h4><?= $prod->p_name ?></h4>
                                        <div class="item-price">
                                           <i class="fa fa-rupee"></i> <?= $prod->rate ?>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="tit_product"><strong class="title_product">Code :</strong> <?= $prod->p_code ?></p>
                                        <p class="tit_product"><strong class="title_product">Stock :</strong> <?= $prod->stock ?></p>
                                        <p class="tit_product"><strong class="title_product">Status :</strong> <?= $prod->status ?></p>
                                    </div>
                                    <div class="clearfix mt-5">
                                        <button type="button" class="theme-btn btn-style-two" data-toggle="modal" data-target="#prodModal">Get Quate</button>
                                        <div class="post-share-options clearfix">
                                            <div class="social-links">
                                                <h4>Share:</h4>
                                                <ul>
                                                    <li>
                                                        <a href="https://www.facebook.com/sharer.php?u=<?= current_url(); ?>" target="_blank">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://twitter.com/share?url=<?= current_url(); ?>" target="_blank">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://api.whatsapp.com/send?text=<?= APP_NAME ?> <?= current_url(); ?>" target="_blank">
                                                            <i class="fa fa-whatsapp"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if($prods): ?>
<div class="sidebar-page-container alternate mt-0">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="content-side col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-top">
                <h2 class="head-detail">Suggested Products</h2>
                <div class="row clearfix">
                    <?php foreach($prods as $p): ?>
                    <div class="shop-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <?= img($p['image']) ?>
                            </div>
                            <div class="lower-content bdr">
                                <h3>
                                    <?= anchor($prod->slug.'/'.$p['slug'], $p['p_name'], 'class="product_h3"'); ?>
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
<?php endif ?>
<!-- Modal -->
<div id="prodModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Product Name : <?= $prod->p_name ?></h3>
            </div>
            <div class="modal-body">
                <section class="contact-page-section mt-1">
                    <div class="auto-container">
                        <h5 class="">Product Code : <?= $prod->p_code ?></h5>
                        <hr />
                        <div class="row clearfix">
                            <div class="form-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="contact-form-two">
                                    <form method="post" id="contact-form">
                                        <input type="hidden" name="prod_id" value="<?= e_id($prod->id) ?>" />
                                        <div class="row clearfix">
                                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                                <input type="text" name="name" maxlength="100" placeholder="Name" required="">
                                            </div>
                                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                                <input type="email" name="email" maxlength="100" placeholder="Email" required="">
                                            </div>
                                            <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                                <input type="text" name="phone" maxlength="10" placeholder="Phone" required="">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                                <textarea name="message" maxlength="255" placeholder="Your Message" required=""></textarea>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                                <button class="theme-btn btn-style-two" type="submit">Submit</button>
                                                <button class="theme-btn btn-style-two" type="button" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<!-- Modal End -->