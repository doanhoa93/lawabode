<div class="main-gallery beans-gallery">
	<div class="beans-mask">
		<div class="beans-slideset">

            <?php if(!empty($sliders)):?>
                <?php foreach($sliders as $slider):?>
                    <div class="beans-slide  win-height">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 slide-content  win-min-height">
                                    <header class="slide-heading2">
                                        <h1><?php echo $slider['title']?></h1>
                                    </header>
                                </div>
                            </div>
                        </div>
                        <div class="bg-stretch">
                            <img src="<?php echo BASE_URI.$slider['featured_image']?>" alt="image description">
                        </div>
                    </div>
                <?php endforeach;?>
            <?php else:?>
                <div class="beans-slide win-height">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 slide-content  win-min-height">
                                <header class="slide-heading2">
                                    <h1>We are a registered Law firm providing legal assistance to global clients</h1>
                                </header>
                            </div>
                        </div>
                    </div>
                    <div class="bg-stretch">
                        <img src="<?php echo $base_assets_url_web;?>images/slider/1.jpg" alt="image description">
                    </div>
                </div>
                <div class="beans-slide  win-height">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 slide-content  win-min-height">
                                <header class="slide-heading2">
                                    <h1>We protect International Investment and ease International Trade for the global clients</h1>
                                </header>
                            </div>
                        </div>
                    </div>
                    <div class="bg-stretch">
                        <img src="<?php echo $base_assets_url_web;?>images/slider/2.jpg" alt="image description">
                    </div>
                </div>

                <div class="beans-slide  win-height">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 slide-content  win-min-height">
                                <header class="slide-heading2">
                                    <h1>WTO laws and Bangladesh perspective</h1>
                                </header>
                            </div>
                        </div>
                    </div>
                    <div class="bg-stretch">
                        <img src="<?php echo $base_assets_url_web;?>images/slider/s1.jpg" alt="image description">
                    </div>
                </div>
            <?php endif;?>
		</div>
	</div>
	<div class="btn-box">
		<a class="btn-prev" href="#"><i class="fa fa-angle-left"></i></a>
		<a class="btn-next" href="#"><i class="fa fa-angle-right"></i></a>
	</div>
</div>
