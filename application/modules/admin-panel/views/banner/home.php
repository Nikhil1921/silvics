<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-6"><h4 class="card-title"><?= $title ?> <?= $operation ?></h4></div>
            <div class="col-6">
                <?= form_open_multipart("$url/upload") ?>
                    <?= form_label("<i class='fa fa-upload'></i> Upload", 'image', 'class="btn btn-outline-success btn-round btn-sm float-right"'); ?>
                    <?= form_input([
                        'style' => "display:none;",
                        'type' => "file",
                        'id' => "image",
                        'accept' => "image/jpeg, image/jpg, image/png",
                        'name' => "image",
                        'onchange' => 'this.form.submit()'
                    ]); ?>
                <?= form_close() ?>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="datatables table table-striped table-bordered" width="100%">
            <thead>
                <tr>
                    <th class="target">SR. NO.</th>
                    <th class="target">IMAGE</th>
                    <th class="target">ACTION</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>