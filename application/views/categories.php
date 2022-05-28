<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section class="services-section-two">
  <div class="auto-container">
    <div class="row clearfix">
      <?php foreach($cats as $cat): ?>
      <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
        <div class="inner-box">
          <div class="icon-box">
            <span class="icon flaticon-parquet-1"></span>
          </div>
          <h3>
              <?= anchor($cat['slug'], $cat['c_name'], 'class="collection_a"'); ?>
          </h3>
        </div>
      </div>
      <?php endforeach ?>
    </div>
  </div>
</section>