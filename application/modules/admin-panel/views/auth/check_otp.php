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
                        <i class="nc-icon nc-single-02"></i>
                    </span>
                </div>
                <?= form_input([
                    'class' => "form-control solid",
                    'type' => "text",
                    'id' => "otp",
                    'name' => "otp",
                    'maxlength' => 6,
                    'required' => "",
                    'value' => set_value('otp')
                ]); ?>
            </div>
            <?= form_error('otp') ?>
        </div>
        <div class="card-footer">
            <?= form_button([
                'type'    => 'submit',
                'class'   => 'btn btn-outline-warning btn-round btn-block mb-3',
                'content' => 'verify OTP'
            ]); ?>
        </div>
    </div>
<?= form_close() ?>