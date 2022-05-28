<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="sidebar-page-container alternate">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="two-column">
                <div class="title_detail">
                    <h2><?= $cat['c_name'] ?></h2>
                </div>
                <div class="row clearfix">
                    <div class="info-column col-md-7 col-sm-7 col-xs-12">
                        <p>
							<?= $cat['details'] ?>
						</p>
                    </div>
                    <div class="image-column col-md-5 col-sm-5 col-xs-12">
                        <div class="image">
							<?= anchor($cat['image'], img($cat['image']), 'class="lightbox-image"'); ?>
                        </div>
                    </div>
                </div>
            </div>
			<?php if($prods): ?>
            <div class="content-side col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-top">
                <h2 class="head-detail">Available Group</h2>
                <div class="row clearfix">
					<?php foreach($prods as $prod): ?>
                    <div class="shop-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <?= img($prod['image']) ?>
                            </div>
                            <div class="lower-content bdr">
                                <h3>
									<?= anchor($cat['slug'].'/'.$prod['slug'], $prod['p_name'], 'class="product_h3"'); ?>
                                </h3>
                            </div>
                        </div>
                    </div>
					<?php endforeach ?>
                </div>
            </div>
			<?php endif ?>
        </div>
    </div>
</div>