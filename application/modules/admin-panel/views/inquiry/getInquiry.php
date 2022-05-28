<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <?= form_label('Name') ?>
            <?= form_input([
                'class' => "form-control",
                'readonly' => "",
                'value' => isset($name) ? $name : ''
            ]); ?>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <?= form_label('Mobile') ?>
            <?= form_input([
                'class' => "form-control",
                'readonly' => "",
                'value' => isset($mobile) ? $mobile : ''
            ]); ?>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <?= form_label('Email') ?>
            <?= form_input([
                'class' => "form-control",
                'readonly' => "",
                'value' => isset($email) ? $email : ''
            ]); ?>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <?= form_label('Product') ?>
            <?= form_input([
                'class' => "form-control",
                'readonly' => "",
                'value' => isset($p_name) ? $p_name : ''
            ]); ?>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <?= form_label('Subject') ?>
            <?= form_input([
                'class' => "form-control",
                'readonly' => "",
                'value' => isset($subject) ? $subject : ''
            ]); ?>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <?= form_label('Message') ?>
            <?= form_textarea([
                'class' => "form-control",
                'readonly' => "",
                'value' => isset($message) ? $message : ''
            ]); ?>
        </div>
    </div>
</div>