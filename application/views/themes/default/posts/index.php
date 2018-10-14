<section>
    <div class="row">
        <?php if ($posts): ?>
            <header class="main-heading news">
                <h2>Latest Updates</h2>
            </header>
            <div class="col-sm-9 col-xs-12 latest-news">

                <?php foreach ($posts as $last): ?>
                    <div class="news-post">
                        <div class="alignleft">
                            <a href="<?php echo site_url('/')?>read/<?php echo $last['slug']?>">
                                            <span data-picture data-alt="image description">
                                                <span data-src="<?php echo BASE_URI.$last['featured_image']?>" data-width="270" data-height="210"></span>
                                            </span>
                                <?php
                                $date = $last['modified'];
                                $d = date_parse_from_format("Y-m-d", $date);
                                $monthNum  = $d["month"];
                                $dateObj   = DateTime::createFromFormat('!m', $monthNum);
                                $monthName = $dateObj->format('F');
                                ?>
                                <span class="date-box"  style="width: 100px"><span class="month"><?php echo $monthName; ?></span><?php echo $d["day"]; ?></span>
                            </a>
                        </div>
                        <div class="txt-box">
                            <h3><a href="<?php echo site_url('/')?>read/<?php echo $last['slug']?>"><?php echo $last['title']?></a></h3>
                            <ul class="post-nav list-inline">
                                <li><a href="#"><i class="fa fa-user"></i> <?php echo $last['create_by']?></a></li>
                                <li><a href="#"><i class="fa fa-tag"></i> News</a></li>
                                <!--<li><a href="#"><i class="fa fa-comment"></i>2 Comments</a></li>-->
                            </ul>
                            <p><?php echo $last['body']?>...<a href="<?php echo site_url('/')?>read/<?php echo $last['slug']?>">See more</a></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php echo $pagination;?>
        <?php else:?>
        <?php endif; ?>
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
</section>
