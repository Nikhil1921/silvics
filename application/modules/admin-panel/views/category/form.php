<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="card">
    <div class="card-header">
        <h4 class="card-title"><?= $operation ?> <?= $title ?></h4>
    </div>
    <div class="card-body">
        <?= form_open_multipart('', '', ['image' => isset($data['image']) ? $data['image'] : '']) ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <?= form_label('Category Name', 'c_name', 'class="col-form-label"') ?>
                        <?= form_input([
                            'class' => "form-control",
                            'id' => "c_name",
                            'name' => "c_name",
                            'maxlength' => 100,
                            'onkeyup' => "document.getElementById('slug').value = this.value.trim().replaceAll(' ', '-')",
                            'required' => "",
                            'value' => set_value('c_name') ? set_value('c_name') : (isset($data['c_name']) ? $data['c_name'] : '')
                        ]); ?>
                        <?= form_error('c_name') ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <?= form_label('Category Slug', 'slug', 'class="col-form-label"') ?>
                        <?= form_input([
                            'class' => "form-control",
                            'type' => "text",
                            'id' => "slug",
                            'name' => "slug",
                            'maxlength' => 100,
                            'readonly' => 'readonly',
                            'required' => "",
                            'value' => set_value('slug') ? set_value('slug') : (isset($data['slug']) ? $data['slug'] : '')
                        ]); ?>
                        <?= form_error('slug') ?>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <?= form_label('Category details', 'details', 'class="col-form-label"') ?>
                        <?= form_textarea([
                            'class' => "form-control",
                            'id' => "details",
                            'name' => "details",
                            'required' => "",
                            'value' => set_value('details') ? set_value('details') : (isset($data['details']) ? $data['details'] : '')
                        ]); ?>
                        <?= form_error('details') ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail">
                            <?= img('assets/images/image-placeholder.jpg') ?>
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                        <div>
                            <span class="btn btn-rose btn-round btn-file">
                            <span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span>
                            <?= form_input([
                                'id' => "image",
                                'name' => "image",
                                'type' => "file",
                                'accept' => "image/jpg, image/jpeg, image/png",
                                isset($data['image']) ? 'required' : '',
                            ]); ?>
                            </span>
                            <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                        </div>
                    </div>
                </div>
                <?php if(isset($data['image'])): ?>
                    <div class="col-md-3">
                        <?= img($this->path.$data['image'], '', 'height="170" width="100%"') ?>
                    </div>
                <?php endif ?>
                <div class="col-12"></div>
                <div class="col-6 col-md-3">
                    <?= form_button([
                        'type'    => 'submit',
                        'class'   => 'btn btn-outline-primary btn-round btn-block col-12',
                        'content' => 'SAVE'
                    ]); ?>
                </div>
                <div class="col-6 col-md-3">
                    <?= anchor("$url", 'CANCEL', 'class="btn btn-outline-danger btn-round btn-block col-12"'); ?>
                </div>
            </div>
        <?= form_close() ?>
    </div>
</div>