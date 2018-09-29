<div class="row">
	<!-- content of the page -->
	<div class="col-sm-8 col-md-9 col-xs-12" id="content">
		<article class="post-blog">
			<div class="post-img">
				<a href="#">
									<span data-picture data-alt="image description">
										<span data-src="images/lawabode_news_img/n1.jpg" data-width="868" data-height="380"></span>
										<span data-src="images/lawabode_news_img/n1.jpg" data-width="868" data-height="380" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
										<!--[if (lt IE 9) & (!IEMobile)]>
										<span data-src="http://placehold.it/868x380"></span>
										<![endif]-->
										<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
										<noscript><img src="images/lawabode_news_img/n1.jpg" width="868" height="380" alt="image description" ></noscript>
									</span>
					<span class="date-box post"><span class="month">April</span>18</span>
				</a>
			</div>
			<ul class="post-nav list-inline">
				<li><a href="#"><i class="fa fa-user"></i> Posted by Admin</a></li>
				<!--<li><a href="#"><i class="fa fa-tag"></i> 10 Comments</a></li>-->
				<li><a href="#"><i class="fa fa-comment"></i>Law</a></li>
			</ul>
			<h2>Law Abode Global Ltd has entered into an MoU with Seraj and Associates</h2>
			<p>Law Abode Global Ltd has entered into an MoU with Seraj and Associates to work in partnership with more than Thirty (30) scheduled banks of Bangladesh.</p>
			<p>A part of the associates of Law Abode Global Ltd in a relaxed mode after attending a hearing.</p>
		</article>
	</div>
	<!-- sidebar of the page -->
	<aside class="col-sm-4 col-md-3 col-xs-12" id="sidebar">
		<nav class="widget latest-widget">
			<h2>lATEST Posts</h2>
			<ul class="latest-post-nav list-unstyled">
				<?php if ($last_record): ?>
					<?php foreach ($last_record as $last): ?>
						<li>
							<a href="<?php echo site_url('/')?>read/<?php echo $last['slug']?>"><?php echo $last['title']?></a>
						</li>
					<?php endforeach; ?>
				<?php else:?>
				<?php endif; ?>

			</ul>
		</nav>
	</aside>
</div>
