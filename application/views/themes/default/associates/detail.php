<main id="main">
    <div class="container news-posts">
        <!-- team-details-block of the page -->
        <div class="row team-details-block">
            <div class="col-xs-12">
                <article class="team-details">
                    <div class="alignleft">
                        <a href="#">
                            <span data-picture data-alt="image description">
                                <span data-src="<?php echo BASE_URI.$associate['featured_image']?>" data-width="468" data-height="436"></span>
                                <span data-src="<?php echo BASE_URI.$associate['featured_image']?>" data-width="468" data-height="468" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
                                <noscript><img src="<?php echo BASE_URI.$associate['featured_image']?>" width="468" height="436" alt="image description" ></noscript>
                            </span>
                        </a>
                    </div>
                    <div class="team-txt">
                        <header class="team-heading">
                            <h2><?php echo $associate['name']?></h2>
                            <ul class="team-socials list-inline">
                                <li><a href="<?php echo $associate['facebook_link']?>"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="<?php echo $associate['twiter_link']?>"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="<?php echo $associate['googleplus_link']?>"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="<?php echo $associate['instagram_link']?>"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </header>
                        <ul class="team-nav list-inline">
                            <li><a href="mailto:kawsar@lawabode.com"><i class="fa fa-envelope"></i><?php echo $associate['mail']?></a></li>
                            <li><a href="#"><i class="fa fa-briefcase"></i> <?php echo $associate['position']?></a></li>
                        </ul>
                        <ul class="team-nav list-inline">
                            <li><a class="tel" href="tel:0088 01911121288"><i class="fa fa-fax"></i><?php echo $associate['tel']?></a></li>
                            <li><a class="tel" href="tel:0088 01911121288"><i class="fa fa-phone-square"></i><?php echo $associate['phone']?></a></li>
                        </ul>
                        <p><?php echo $associate['describe']?></p>
                    </div>
                </article>
            </div>
        </div>
</main>