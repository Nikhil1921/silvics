<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="card">
    <div class="card-header">
        <h4 class="card-title"><?= $operation ?> <?= $title ?></h4>
    </div>
    <div class="card-body">
        <?= form_open_multipart('', '', ['t_pdf' => isset($data['t_pdf']) ? $data['t_pdf'] : '']) ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <?= form_label('Title', 't_name') ?>
                        <?= form_input([
                            'class' => "form-control solid",
                            'type' => "text",
                            'id' => "t_name",
                            'name' => "t_name",
                            'maxlength' => 100,
                            'value' => set_value('t_name') ? set_value('t_name') : (isset($data['t_name']) ? $data['t_name'] : '')
                        ]); ?>
                        <?= form_error('t_name') ?>
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
                            <span class="fileinput-new">Select PDF</span>
                            <span class="fileinput-exists">Change</span>
                            <?= form_input([
                                'id' => "t_pdf",
                                'name' => "t_pdf",
                                'type' => "file",
                                'accept' => "application/pdf",
                                isset($data['t_pdf']) ? 'required' : '',
                            ]); ?>
                            </span>
                            <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                        </div>
                    </div>
                </div>
                <?php if(isset($data['t_pdf'])): ?>
                    <div class="col-md-3">
                        <iframe src="<?= base_url($this->path.$data['t_pdf']) ?>" width="100%" height="170px"></iframe>
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