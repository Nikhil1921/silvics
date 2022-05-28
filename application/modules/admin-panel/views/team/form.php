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
                        <?= form_label('Name', 't_name', 'class="col-form-label"') ?>
                        <?= form_input([
                            'class' => "form-control",
                            'id' => "t_name",
                            'name' => "t_name",
                            'maxlength' => 100,
                            'required' => "",
                            'value' => set_value('t_name') ? set_value('t_name') : (isset($data['t_name']) ? $data['t_name'] : '')
                        ]); ?>
                        <?= form_error('t_name') ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <?= form_label('Position', 'position', 'class="col-form-label"') ?>
                        <?= form_input([
                            'class' => "form-control",
                            'id' => "position",
                            'name' => "position",
                            'maxlength' => 20,
                            'required' => "",
                            'value' => set_value('position') ? set_value('position') : (isset($data['position']) ? $data['position'] : '')
                        ]); ?>
                        <?= form_error('position') ?>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <?= form_label('Message', 'description', 'class="col-form-label"') ?>
                        <?= form_textarea([
                            'class' => "form-control",
                            'id' => "description",
                            'name' => "description",
                            'maxlength' => 255,
                            'required' => "",
                            'value' => set_value('description') ? set_value('description') : (isset($data['description']) ? $data['description'] : '')
                        ]); ?>
                        <?= form_error('description') ?>
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