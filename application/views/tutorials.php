<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section>
	<div class="container">
		<div class="row">
            <?php foreach($tuts as $tut): ?>
			<div class="col-lg-4 mt">
                <div class="sidebar-side">
                    <aside class="sidebar service-sidebar">
                        <div class="sidebar-widget download-links">
                            <div class="link-box">
                                <?= anchor($tut['t_pdf'], '<span class="fa fa-file-pdf-o"></span> '.$tut['t_name'], 'target="_blank"'); ?>
                            </div>
                        </div>
                    </aside>
                </div>
			</div>
            <?php endforeach ?>
		</div>
	</div>
</section>