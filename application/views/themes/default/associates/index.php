<div class="container container-block team">
    <!-- our-team of the page -->
    <div class="row our-team add">
        <?php if(!empty($associates)):?>
            <?php foreach($associates as $associate):?>
                <article class="col-sm-3 col-xs-12 team-col">
            <div class="img-box">
                <a class="over" href="<?php echo site_url('/associates/detail/'.$associate['id'])?>">
                    <span data-picture data-alt="image description">
                        <span data-src="<?php echo BASE_URI.$associate['featured_image']?>" class="team-image" data-width="268" data-height="218"></span>
                        <span data-src="<?php echo BASE_URI.$associate['featured_image']?>" class="team-image" data-width="268" data-height="218" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
                        <noscript>
                        <img class="team-image" src="<?php echo BASE_URI.$associate['featured_image']?>" width="268" height="218" alt="image description"/>
                        </noscript>
                    </span>
                    <span class="btn btn-default"><i class="fa fa-search"></i> View profile </span>
                </a>
            </div>
            <ul class="divider-nav list-inline">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <div class="team-info">
                <div class="team-title">
                    <h2><a href="<?php echo site_url('/associates/detail/'.$associate['id'])?>"><?php echo $associate['name']?></a></h2>
                    <span class="designation"><?php echo $associate['position']?></span>
                </div>
                <p><?php echo $associate['describe']?></p>
                <ul class="post-socials list-inline">
                    <li><a href="<?php echo $associate['facebook_link']?>"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="<?php echo $associate['twiter_link']?>"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="<?php echo $associate['googleplus_link']?>"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="<?php echo $associate['instagram_link']?>"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </article>
            <?php endforeach;?>
        <?php endif;?>
    </div>
</div>