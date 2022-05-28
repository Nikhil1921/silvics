<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section class="projects-section style-two">
    <div class="auto-container">
        <!--MixitUp Galery-->
        <div class="sortable-masonry">
            <div class="inner-container clearfix">
                <!--Filter-->
                <div class="filters text-center clearfix">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="filter active" data-role="button" data-filter=".factory">Factory</li>
                        <li class="filter" data-role="button" data-filter=".office">Corporate Office & Display Gallery</li>
                        <li class="filter" data-role="button" data-filter=".videos">Videos</li>
                    </ul>
                </div>
            </div>
            <div class="items-container row clearfix">
                <?php foreach ($gallery as $g):
                        switch ($g['g_type']) {
                            case 'Factory':
                                $class = 'factory';
                                break;

                            case 'Corporate Office & Display Gallery':
                                $class = 'office';
                                break;
                            
                            default:
                                $class = 'videos';
                                break;
                        }
                if($class !== 'videos'): ?>
                <div class="project-block masonry-item medium-column <?= $class  ?>">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure>
                                <?= img($this->config->item('gallery').$g['image']) ?>
                            </figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="javascript:;"><?= $g['g_type'] ?></a></h3>
                                </div>
                                <div class="icon-box">
                                    <?= anchor($this->config->item('gallery').$g['image'], '<span class="fa fa-arrows-alt"></span>', 'data-fancybox="gallery"') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php else: ?>
                    <div class="filter-video project-block masonry-item medium-column <?= $class  ?>">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <?= img($this->config->item('gallery').$g['image']) ?>
                                    <a href="https://www.youtube.com/watch?v=<?= $g['video_id'] ?>" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-play"></span></a>
                                </figure>
                            </div>
                        </div>
                    </div>
                <?php endif; endforeach ?>
            </div>
        </div>
    </div>
</section>