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
                        <?= form_label('Gallery type') ?>
                        <br />
                        <div class="form-check-radio form-check-inline">
                            <?= form_label(form_radio([
                                'class' => "form-check-input",
                                'name' => "g_type",
                                'value' => "Factory"
                            ], '', true).'<span class="form-check-sign"></span> Factory', '', 'class="form-check-label"') ?>
                        </div>
                        <div class="form-check-radio form-check-inline">
                            <?= form_label(form_radio([
                                'class' => "form-check-input",
                                'name' => "g_type",
                                'value' => "Corporate Office & Display Gallery"
                            ], '', set_value('g_type') ? set_radio('g_type', 'Corporate Office & Display Gallery') : (isset($data['g_type']) && $data['g_type'] === 'Corporate Office & Display Gallery' ? true : false)).'<span class="form-check-sign"></span> Corporate Office & Display Gallery', '', 'class="form-check-label"') ?>
                        </div>
                        <div class="form-check-radio form-check-inline">
                            <?= form_label(form_radio([
                                'class' => "form-check-input",
                                'name' => "g_type",
                                'value' => "Videos"
                            ], '', set_value('g_type') ? set_radio('g_type', 'Videos') : (isset($data['g_type']) && $data['g_type'] === 'Videos' ? true : false)).'<span class="form-check-sign"></span> Videos', '', 'class="form-check-label"') ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <?= form_label('Youtube Video ID', 'video_id') ?>
                        <?= form_input([
                            'class' => "form-control solid",
                            'type' => "text",
                            'id' => "video_id",
                            'name' => "video_id",
                            'maxlength' => 255,
                            'value' => set_value('video_id') ? set_value('video_id') : (isset($data['video_id']) ? $data['video_id'] : '')
                        ]); ?>
                        <?= form_error('video_id') ?>
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