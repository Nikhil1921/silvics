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
                        <?= form_label('Category', 'cat_id', 'class="col-form-label"') ?>
                        <select name="cat_id" id="cat_id" class="form-control" required="">
                            <option value="">Select category</option>
                            <?php foreach($this->cats as $cat): ?>
                                <option value="<?= e_id($cat['id']) ?>" <?= set_value('cat_id') ? set_select('cat_id', e_id($cat['id'])) : (isset($data['cat_id']) && $data['cat_id'] === $cat['id'] ? 'selected' : '') ?>><?= $cat['c_name'] ?></option>
                            <?php endforeach ?>
                        </select>
                        <?= form_error('cat_id') ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <?= form_label('Code', 'p_code', 'class="col-form-label"') ?>
                        <?= form_input([
                            'class' => "form-control",
                            'id' => "p_code",
                            'name' => "p_code",
                            'maxlength' => 20,
                            'required' => "",
                            'value' => set_value('p_code') ? set_value('p_code') : (isset($data['p_code']) ? $data['p_code'] : '')
                        ]); ?>
                        <?= form_error('p_code') ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <?= form_label('Name', 'p_name', 'class="col-form-label"') ?>
                        <?= form_input([
                            'class' => "form-control",
                            'id' => "p_name",
                            'name' => "p_name",
                            'maxlength' => 100,
                            'onkeyup' => "document.getElementById('slug').value = this.value.trim().replaceAll(' ', '-')",
                            'required' => "",
                            'value' => set_value('p_name') ? set_value('p_name') : (isset($data['p_name']) ? $data['p_name'] : '')
                        ]); ?>
                        <?= form_error('p_name') ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <?= form_label('Slug', 'slug', 'class="col-form-label"') ?>
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
                <div class="col-md-6">
                    <div class="form-group">
                        <?= form_label('Rate', 'rate', 'class="col-form-label"') ?>
                        <?= form_input([
                            'class' => "form-control",
                            'id' => "rate",
                            'name' => "rate",
                            'maxlength' => 9,
                            'required' => "",
                            'value' => set_value('rate') ? set_value('rate') : (isset($data['rate']) ? $data['rate'] : '')
                        ]); ?>
                        <?= form_error('rate') ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <?= form_label('Stock', 'stock', 'class="col-form-label"') ?>
                        <?= form_input([
                            'class' => "form-control",
                            'id' => "stock",
                            'name' => "stock",
                            'maxlength' => 9,
                            'required' => "",
                            'value' => set_value('stock') ? set_value('stock') : (isset($data['stock']) ? $data['stock'] : '')
                        ]); ?>
                        <?= form_error('stock') ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <?= form_label('Status') ?>
                        <br />
                        <div class="form-check-radio form-check-inline">
                            <?= form_label(form_radio([
                                'class' => "form-check-input",
                                'name' => "status",
                                'value' => "Available"
                            ], '', true).'<span class="form-check-sign"></span> Available', '', 'class="form-check-label"') ?>
                        </div>
                        <div class="form-check-radio form-check-inline">
                            <?= form_label(form_radio([
                                'class' => "form-check-input",
                                'name' => "status",
                                'value' => "Hold"
                            ], '', set_value('status') ? set_radio('status', 'Hold') : (isset($data['status']) && $data['status'] === 'Hold' ? true : false)).'<span class="form-check-sign"></span> Hold', '', 'class="form-check-label"') ?>
                        </div>
                        <div class="form-check-radio form-check-inline">
                            <?= form_label(form_radio([
                                'class' => "form-check-input",
                                'name' => "status",
                                'value' => "Sold"
                            ], '', set_value('status') ? set_radio('status', 'Sold') : (isset($data['status']) && $data['status'] === 'Sold' ? true : false)).'<span class="form-check-sign"></span> Sold', '', 'class="form-check-label"') ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <?= form_label('Show in trending?') ?>
                        <br />
                        <div class="form-check-radio form-check-inline">
                            <?= form_label(form_radio([
                                'class' => "form-check-input",
                                'name' => "is_tranding",
                                'value' => 0
                            ], '', true).'<span class="form-check-sign"></span> No', '', 'class="form-check-label"') ?>
                        </div>
                        <div class="form-check-radio form-check-inline">
                            <?= form_label(form_radio([
                                'class' => "form-check-input",
                                'name' => "is_tranding",
                                'value' => 1
                            ], '', set_value('is_tranding') ? set_radio('is_tranding', 1) : (isset($data['is_tranding']) && $data['is_tranding'] === 1 ? true : false)).'<span class="form-check-sign"></span> Yes', '', 'class="form-check-label"') ?>
                        </div>
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