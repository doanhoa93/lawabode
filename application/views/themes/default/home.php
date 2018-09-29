<section>
	<header class="row main-heading">
		<div class="col-xs-12">
			<h2>We Provide you with!</h2>
		</div>
	</header>
	<!-- services-holder of the page -->
	<div class="row services-holder">
		<?php if ($services): ?>
			<?php foreach ($services as $service): ?>
				<div class="col-sm-3 col-xs-12 services-col defence">
					<div class="img-box"></div>
					<h2><a href="services.html"><?php echo $service['name']; ?></a></h2>
					<p class="height-200 text-justify"><?php echo $service['content']; ?></p>
					<a href="<?php echo site_url('/read/services')?>" class="btn btn-default">Read More +</a>
				</div>
			<?php endforeach; ?>
		<?php else:?>
		<?php endif; ?>
	</div>
</section>
<!-- container block practice of the page -->
<section>
	<header class="row main-heading">
		<div class="col-xs-12">
			<h2>INDUSTRIES WE SERVE</h2>
		</div>
	</header>
	<!-- practice-block of the page -->

			<div class="row practice-block">
				<?php if ($industries): ?>
				<?php foreach ($industries as $industry): ?>
				<div class="col-sm-4 col-xs-12 practice-col">
					<a href="#">
                        <img src="<?php echo site_url("/")?>/<?php echo $industry['featured_image'];?>" width="532" height="409" alt="image description" >
						<h3><?php echo $industry['name']; ?></h3>
						<div class="over">
							<div class="box">
								<div class="block">
									<div class="frame">
										<strong class="title"><?php echo $industry['name']; ?></strong>
										<!-- <p>Curabitur mollis neque vel ligula congue convallis id tristique</p>
                                        <span class="btn-read">[+]</span> -->
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
					<?php endforeach; ?>
				<?php else:?>
				<?php endif; ?>
			</div>


</section>
<section>
	<div class="row">
        <?php if ($last_record): ?>
		    <header class="main-heading news">
			    <h2>Latest Updates</h2>
		    </header>
		    <div class="col-sm-9 col-xs-12 latest-news">

                <?php foreach ($last_record as $last): ?>
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
                <?php endif; ?>
			</nav>
		</aside>
	</div>
</section>

