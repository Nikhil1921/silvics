<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="card card-testimonial p-5">
    <div class="card-body mt-5">
        <div class="icon icon-primary">
            <h1 class="error-text font-weight-bold">404</h1>
        </div>
    </div>
    <div class="card-footer mb-5">
        <h4 class="card-title"><i class="fa fa-exclamation-triangle text-warning"></i> The page you were looking for is not found!</h4>
        <p>You may have mistyped the address or the page may have moved.</p>
        <div class="card-avatar">
            <?= anchor(admin(), 'Back to Home', 'class="btn btn-outline-primary btn-round"') ?>
        </div>
    </div>
</div>