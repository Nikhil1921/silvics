<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= ucwords($title) ?> | <?= APP_NAME ?></title>
        <?= link_tag('assets/images/favicon.png', 'icon', 'image/png') ?>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <!-- CSS Files -->
		<?= link_tag('assets/back/css/bootstrap.min.css', 'stylesheet', 'text/css') ?>
		<?= link_tag('assets/back/css/paper-dashboard.min1036.css', 'stylesheet', 'text/css') ?>
    </head>

    <body class="login-page">
        <div class="wrapper wrapper-full-page ">
            <div class="full-page section-image" data-image="<?= base_url('assets/images/bg/fabio-mangione.jpg') ?>">
                <div class="content">
                    <div class="container">
                        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                            <?= $contents ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <input type="hidden" name="error_msg" value="<?= $this->session->error ?>" />
        <input type="hidden" name="success_msg" value="<?= $this->session->success ?>" />
        <?= script("assets/back/js/core/jquery.min.js") ?>
        <?= script("assets/back/js/plugins/bootstrap-notify.js") ?>
        <?= script("assets/back/js/script.js") ?>
    </body>

</html>