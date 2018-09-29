<section class="container container-block row services-holder services">
	<?php if(!empty($services)):?>
	<?php foreach($services as $service):?>
		<div class="col-sm-3 col-xs-12 services-col defence">
			<div class="img-box"></div>
			<h2><a href="#"><?php echo $service['name']?></a></h2>
		</div>
		<?php endforeach;?>
	<?php endif;?>
</section>