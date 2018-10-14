        <div class="row">
            <!-- content of the page -->
            <div class="col-sm-8 col-md-9 col-xs-12" id="content">
                <article class="post-blog">
                    <?php
                        $date = $post['modified'];
                        $d = date_parse_from_format("Y-m-d", $date);
                        $monthNum  = $d["month"];
                        $dateObj   = DateTime::createFromFormat('!m', $monthNum);
                        $monthName = $dateObj->format('F');
                    ?>
                    <?php if(!empty($post['featured_image'])):?>
                        <div class="post-img">
                            <a href="#">
									<span data-picture data-alt="image description">
										<span data-src="<?php echo BASE_URI.$post['featured_image']?>" data-width="868" data-height="380"></span>
										<span data-src="<?php echo BASE_URI.$post['featured_image']?>" data-width="868" data-height="380" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
										<img src="<?php echo BASE_URI.$post['featured_image']?>" width="868" height="380" alt="image description" >
									</span>
                                <span class="date-box post" style="width: 100px"><span class="month"><?php echo $monthName; ?></span><?php echo $d["day"]; ?></span>
                            </a>
                        </div>
                    <?php endif;?>

                    <ul class="post-nav list-inline">
                        <li><a href="#"><i class="fa fa-user"></i> Posted by <?php echo $post['create_by'];?></a></li>
                        <!--<li><a href="#"><i class="fa fa-tag"></i> 10 Comments</a></li>-->
                        <li><a href="#"><i class="fa fa-comment"></i>Law</a></li>
                    </ul>
                    <h2><?php echo $post['title'];?></h2>
                    <?php echo $post['body'];?>
                </article>
            </div>

            <aside class="col-sm-4 col-md-3 col-xs-12" id="sidebar">
                <nav class="widget latest-widget">
                    <?php if ($posts): ?>
                    <h2>lATEST Posts</h2>
                    <ul class="latest-post-nav list-unstyled">
                        <?php foreach ($posts as $post): ?>
                        <li>
                            <a href="<?php echo site_url('/')?>read/<?php echo $post['slug']?>"><?php echo $post['title']?></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php else:?>
                    <?php endif;?>
                </nav>
            </aside>
        </div>



