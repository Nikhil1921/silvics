<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <?= anchor(admin('banner'), '<div class="card card-stats">
            <div class="card-body ">
                <div class="row">
                    <div class="col-5 col-md-4">
                        <div class="icon-big text-center icon-danger">
                            <i class="nc-icon nc-image text-danger"></i>
                        </div>
                    </div>
                    <div class="col-7 col-md-8">
                        <div class="numbers">
                                <p class="card-category">Banners</p>
                                <p class="card-title">'.$this->main->counter('banners', []).'</p><p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer"></div>
        </div>', 'class="text-decoration-none"') ?>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <?= anchor(admin('inquiry'), '<div class="card card-stats">
            <div class="card-body ">
                <div class="row">
                    <div class="col-5 col-md-4">
                        <div class="icon-big text-center icon-danger">
                            <i class="fa fa-users text-danger"></i>
                        </div>
                    </div>
                    <div class="col-7 col-md-8">
                        <div class="numbers">
                                <p class="card-category">Inquiry</p>
                                <p class="card-title">'.$this->main->counter('inquiry', ['is_deleted' => 0]).'</p><p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer"></div>
        </div>', 'class="text-decoration-none"') ?>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <?= anchor(admin('gallery'), '<div class="card card-stats">
            <div class="card-body ">
                <div class="row">
                    <div class="col-5 col-md-4">
                        <div class="icon-big text-center icon-danger">
                            <i class="nc-icon nc-image text-danger"></i>
                        </div>
                    </div>
                    <div class="col-7 col-md-8">
                        <div class="numbers">
                                <p class="card-category">Gallery</p>
                                <p class="card-title">'.$this->main->counter('gallery', ['is_deleted' => 0]).'</p><p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer"></div>
        </div>', 'class="text-decoration-none"') ?>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <?= anchor(admin('category'), '<div class="card card-stats">
            <div class="card-body ">
                <div class="row">
                    <div class="col-5 col-md-4">
                        <div class="icon-big text-center icon-danger">
                            <i class="fa fa-file-text-o text-danger"></i>
                        </div>
                    </div>
                    <div class="col-7 col-md-8">
                        <div class="numbers">
                                <p class="card-category">Category</p>
                                <p class="card-title">'.$this->main->counter('category', ['is_deleted' => 0]).'</p><p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer"></div>
        </div>', 'class="text-decoration-none"') ?>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <?= anchor(admin('product'), '<div class="card card-stats">
            <div class="card-body ">
                <div class="row">
                    <div class="col-5 col-md-4">
                        <div class="icon-big text-center icon-danger">
                            <i class="fa fa-file-text-o text-danger"></i>
                        </div>
                    </div>
                    <div class="col-7 col-md-8">
                        <div class="numbers">
                                <p class="card-category">Product</p>
                                <p class="card-title">'.$this->main->counter('products', ['is_deleted' => 0]).'</p><p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer"></div>
        </div>', 'class="text-decoration-none"') ?>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <?= anchor(admin('tutorial'), '<div class="card card-stats">
            <div class="card-body ">
                <div class="row">
                    <div class="col-5 col-md-4">
                        <div class="icon-big text-center icon-danger">
                            <i class="fa fa-file-text-o text-danger"></i>
                        </div>
                    </div>
                    <div class="col-7 col-md-8">
                        <div class="numbers">
                                <p class="card-category">Tutorials</p>
                                <p class="card-title">'.$this->main->counter('tutorials', ['is_deleted' => 0]).'</p><p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer"></div>
        </div>', 'class="text-decoration-none"') ?>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <?= anchor(admin('team'), '<div class="card card-stats">
            <div class="card-body ">
                <div class="row">
                    <div class="col-5 col-md-4">
                        <div class="icon-big text-center icon-danger">
                            <i class="fa fa-file-text-o text-danger"></i>
                        </div>
                    </div>
                    <div class="col-7 col-md-8">
                        <div class="numbers">
                                <p class="card-category">Teams</p>
                                <p class="card-title">'.$this->main->counter('teams', ['is_deleted' => 0]).'</p><p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer"></div>
        </div>', 'class="text-decoration-none"') ?>
    </div>
</div>
<!-- <div class="card">
    <div class="card-header">
        <h4 class="card-title">DataTables.net</h4>
    </div>
    <div class="card-body">
            ssd
    </div>
</div> -->