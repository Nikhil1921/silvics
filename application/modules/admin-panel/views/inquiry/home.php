<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="card">
    <div class="card-header">
        <h4 class="card-title"><?= $title ?> <?= $operation ?></h4>
    </div>
    <div class="card-body">
        <table class="datatables table table-striped table-bordered" width="100%">
            <thead>
                <tr>
                    <th class="target">SR. NO.</th>
                    <th>NAME</th>
                    <th>mobile</th>
                    <th>email</th>
                    <th>product</th>
                    <th class="target">ACTION</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
<div class="modal fade" id="inquiryModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="nc-icon nc-simple-remove"></i>
                </button>
                <h4 class="title title-up">Inquiry Details</h4>
            </div>
            <div class="modal-body" id="inquiry-details"></div>
            <div class="modal-footer">
                <div class="right-side">
                    <button type="button" class="btn btn-primary btn-link" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>