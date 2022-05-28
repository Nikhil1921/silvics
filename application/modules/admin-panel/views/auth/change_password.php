<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?= form_open() ?>
    <div class="card card-login">
        <div class="card-header">
            <div class="card-header">
                <h3 class="header text-center"><?= ucwords($title) ?></h3>
            </div>
        </div>
        <div class="card-body">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="nc-icon nc-key-25"></i>
                    </span>
                </div>
                <?= form_input([
                    'class' => "form-control solid",
                    'type' => "password",
                    'id' => "password",
                    'name' => "password",
                    'maxlength' => 255,
                    'placeholder' => "Enter new passwprd",
                    'required' => ""
                ]); ?>
            </div>
            <?= form_error('password') ?>
        </div>
        <div class="card-footer">
            <?= form_button([
                'type'    => 'submit',
                'class'   => 'btn btn-outline-warning btn-round btn-block mb-3',
                'content' => 'Change Password'
            ]); ?>
        </div>
    </div>
<?= form_close() ?>