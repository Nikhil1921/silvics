<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?= APP_NAME ?> | <?= ucwords($title) ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?= link_tag('assets/images/favicon.png', 'icon', 'image/png') ?>
        <?= link_tag('assets/images/favicon.png', 'shortcut icon', 'image/png') ?>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <!-- CSS Files -->
        <?= link_tag('assets/back/css/bootstrap.min.css', 'stylesheet', 'text/css') ?>
        <?= link_tag('assets/back/css/paper-dashboard.min1036.css', 'stylesheet', 'text/css') ?>
        <?php if(isset($datatable)): ?>
        <?= link_tag('assets/back/vendor/datatables/css/jquery.dataTables.min.css', 'stylesheet', 'text/css') ?>
        <?= link_tag('assets/back/vendor/sweetalert/css/sweetalert.min.css', 'stylesheet', 'text/css') ?>
        <?php endif ?>
    </head>
    <body>
        <div class="wrapper">
            <div class="sidebar" data-color="default" data-active-color="danger">
                <div class="logo">
                    <?= anchor(admin('dashboard'), '<div class="logo-image-small">
                        '.img('assets/images/favicon.png').'
                    </div>', 'class="simple-text logo-mini"'); ?>
                    <?= anchor(admin('dashboard'), APP_NAME, 'class="simple-text logo-normal"'); ?>
                </div>
                <div class="sidebar-wrapper">
                    <div class="user">
                        <div class="photo">
                            <?= img('assets/images/profile.png') ?>
                        </div>
                        <div class="info">
                            <a href="javascript:;">
                            <span>
                            <?= $this->user->name ?>
                            </span>
                            </a>
                        </div>
                    </div>
                    <ul class="nav">
                        <li <?= $name === 'dashboard' ? 'class="active"' : '' ?>>
                            <?= anchor(admin('dashboard'), '<i class="fa fa-home"></i> <p>Dashboard</p>', 'class="nav-link"'); ?>
                        </li>
                        <li <?= $name === 'banner' ? 'class="active"' : '' ?>>
                            <?= anchor(admin('banner'), '<i class="fa fa-image"></i> banner') ?>
                        </li>
                        <li <?= $name === 'inquiry' ? 'class="active"' : '' ?>>
                            <?= anchor(admin('inquiry'), '<i class="fa fa-users"></i> inquiry') ?>
                        </li>
                        <li <?= $name === 'gallery' ? 'class="active"' : '' ?>>
                            <?= anchor(admin('gallery'), '<i class="fa fa-image"></i> gallery') ?>
                        </li>
                        <li <?= $name === 'category' ? 'class="active"' : '' ?>>
                            <?= anchor(admin('category'), '<i class="fa fa-file-text-o"></i> category') ?>
                        </li>
                        <li <?= $name === 'product' ? 'class="active"' : '' ?>>
                            <?= anchor(admin('product'), '<i class="fa fa-file-text-o"></i> product') ?>
                        </li>
                        <li <?= $name === 'tutorial' ? 'class="active"' : '' ?>>
                            <?= anchor(admin('tutorial'), '<i class="fa fa-file-text-o"></i> tutorial') ?>
                        </li>
                        <li <?= $name === 'team' ? 'class="active"' : '' ?>>
                            <?= anchor(admin('team'), '<i class="fa fa-file-text-o"></i> team') ?>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="main-panel">
                <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                    <div class="container-fluid">
                        <div class="navbar-wrapper">
                            <div class="navbar-minimize">
                                <button id="minimizeSidebar" class="btn btn-icon btn-round">
                                <i class="nc-icon nc-minimal-right text-center visible-on-sidebar-mini"></i>
                                <i class="nc-icon nc-minimal-left text-center visible-on-sidebar-regular"></i>
                                </button>
                            </div>
                            <div class="navbar-toggle">
                                <button type="button" class="navbar-toggler">
                                    <span class="navbar-toggler-bar bar1"></span>
                                    <span class="navbar-toggler-bar bar2"></span>
                                    <span class="navbar-toggler-bar bar3"></span>
                                </button>
                            </div>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navigation">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="javascript:;" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="nc-icon nc-settings-gear-65"></i>
                                        <p>
                                            <span class="d-lg-none d-md-block">Settings</span>
                                        </p>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                        <?= anchor(admin('profile'), '<i class="fa fa-user"></i>&nbsp Profile', 'class="dropdown-item"'); ?>
                                        <?= anchor(admin('logout'), '<i class="fa fa-sign-out"></i> Logout', 'class="dropdown-item"'); ?>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="content">
                <?= $contents ?>
                </div>
                <footer class="footer footer-black  footer-white ">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="credits ml-auto">
                                <span class="copyright">
                                    © <script>
                                    document.write(new Date().getFullYear())
                                    </script>, made by <a href="https://www.densetek.com" class="text-danger" target="_blank">Densetek Infotech</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <input type="hidden" name="error_msg" value="<?= $this->session->error ?>" />
        <input type="hidden" name="success_msg" value="<?= $this->session->success ?>" />
        <input type="hidden" id="base_url" value="<?= base_url(admin()) ?>" />
        <input type="hidden" name="admin" value="<?= ADMIN ?>" />

        <?= script("assets/back/js/core/jquery.min.js") ?>
        <?= script("assets/back/js/core/popper.min.js") ?>
        <?= script("assets/back/js/core/bootstrap.min.js") ?>
        
        <?php if(isset($datatable)): ?>
        <input type="hidden" name="dataTableUrl" value="<?= base_url($datatable) ?>" />
        <?= script("assets/back/js/plugins/jquery.dataTables.min.js") ?>
        <?= script("assets/back/js/datatables.js") ?>
        <?= script("assets/back/js/plugins/sweetalert2.min.js") ?>
        <?php endif ?>

        <?= script("assets/back/js/plugins/perfect-scrollbar.jquery.min.js") ?>
        <?= script("assets/back/js/paper-dashboard.min1036.js") ?>
        <?= script("assets/back/js/plugins/bootstrap-notify.js") ?>
        <?php if(isset($image)): ?>
        <?= script("assets/back/js/plugins/jasny-bootstrap.min.js") ?>
        <?php endif ?>
        <?= script("assets/back/js/script.js") ?>
    </body>
</html>