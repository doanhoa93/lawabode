<!-- footer of the Page -->
<footer id="footer">
	<div class="container holder">
		<div class="row">
			<div class="col-sm-5 col-xs-12 copyrights">
				<p>
					&copy; Law Adobe Global Ltd
					| Developed by <a target="_blank" href="http://waaffsolutions.com/">WAAFF Solutions</a>
				</p>
			</div>
			<div class="col-sm-7 col-xs-12 copyrights">
				<ul class="footer-nav list-inline">
					<?php if ($main_menu_bottom): ?>
						<?php foreach ($main_menu_bottom as $menu_bottom): ?>
							<li><a href="<?php echo site_url('/')?><?php echo $menu_bottom['url']?>"><?php echo $menu_bottom['name']?></a></li>
						<?php endforeach; ?>
					<?php else:?>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</div>
</footer>
