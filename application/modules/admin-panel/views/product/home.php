<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-6"><h4 class="card-title"><?= $title ?> <?= $operation ?></h4></div>
            <div class="col-6">
                <?= anchor("$url/add-update", '<span class="fa fa-plus"></span> Add new', 'class="btn btn-outline-success btn-round text-center float-right"'); ?>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="datatables table table-striped table-bordered" width="100%">
            <thead>
                <tr>
                    <th class="target">SR. NO.</th>
                    <th>name</th>
                    <th>code</th>
                    <th>rate</th>
                    <th>stock</th>
                    <th>status</th>
                    <th>category</th>
                    <th class="target">ACTION</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>