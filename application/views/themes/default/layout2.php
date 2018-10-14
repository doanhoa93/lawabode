<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: quanghoa
 * Date: 28/07/2018
 * Time: 16:05
 */
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Quang Hoa">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?php echo $page_title?></title>
	  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	  <!-- include the site stylesheet -->
	  <link rel="stylesheet" href="<?php echo $base_assets_url_web;?>css/font-awesome.min.css">
	  <link rel="stylesheet" href="<?php echo $base_assets_url_web;?>css/bootstrap.css">
	  <link rel="stylesheet" href="<?php echo $base_assets_url_web;?>css/fancybox.css">
	  <link rel="stylesheet" href="<?php echo $base_assets_url_web;?>css/all.css">
	  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic%7cRoboto:400,100italic,100,300,300italic,400italic,500,500italic,700,700italic,900,900italic%7cOpen+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div id="wrapper">
	  <?php echo $header;?>
	  <?php echo $slider;?>
	  <main id="main">
		  <section class="container container-block pOur Clientsractice practice2 about news-posts news-block services team">
	  		<?php echo $content;?>
		  </section>
		  <?php if($end_path === 'home' || $end_path === ''){?>
			  <div class="clients-gallery">
				  <section class="container container-block gallery">
					  <div class="row">
						  <div class="col-xs-12">
							  <header class="main-heading">
								  <h2>What Our Client Say</h2>
							  </header>
						  </div>
					  </div>
					  <div class="row">
						  <div class="col-xs-12">
							  <div class="quotes-gallery">
								  <ul class="quotes-pagination list-inline">
									  <li class="pagerslide">
										  <a href="#">
												<span data-picture data-alt="image description">
													<span data-src="http://placehold.it/79x73" data-width="79" data-height="73"></span>
													<span data-src="http://placehold.it/79x73" data-width="79" data-height="73" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
													<!--[if (lt IE 9) & (!IEMobile)]>
													<span data-src="http://placehold.it/79x73"></span>
													<![endif]-->
													<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
													<noscript><img src="http://placehold.it/79x73" width="79" height="73" alt="image description" ></noscript>
												</span>
										  </a>
									  </li>
									  <li class="pagerslide">
										  <a href="#">
												<span data-picture data-alt="image description">
													<span data-src="http://placehold.it/79x73" data-width="79" data-height="73"></span>
													<span data-src="http://placehold.it/79x73" data-width="79" data-height="73" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
													<!--[if (lt IE 9) & (!IEMobile)]>
													<span data-src="http://placehold.it/79x73"></span>
													<![endif]-->
													<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
													<noscript><img src="http://placehold.it/79x73" width="79" height="73" alt="image description" ></noscript>
												</span>
										  </a>
									  </li>
									  <li class="pagerslide">
										  <a href="#">
												<span data-picture data-alt="image description">
													<span data-src="http://placehold.it/79x73" data-width="79" data-height="73"></span>
													<span data-src="http://placehold.it/79x73" data-width="79" data-height="73" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
													<!--[if (lt IE 9) & (!IEMobile)]>
													<span data-src="http://placehold.it/79x73"></span>
													<![endif]-->
													<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
													<noscript><img src="http://placehold.it/79x73" width="79" height="73" alt="image description" ></noscript>
												</span>
										  </a>
									  </li>
									  <li class="pagerslide">
										  <a href="#">
												<span data-picture data-alt="image description">
													<span data-src="http://placehold.it/79x73" data-width="79" data-height="73"></span>
													<span data-src="http://placehold.it/79x73" data-width="79" data-height="73" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
													<!--[if (lt IE 9) & (!IEMobile)]>
													<span data-src="http://placehold.it/79x73"></span>
													<![endif]-->
													<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
													<noscript><img src="http://placehold.it/79x73" width="79" height="73" alt="image description" ></noscript>
												</span>
										  </a>
									  </li>
									  <li class="pagerslide">
										  <a href="#">
												<span data-picture data-alt="image description">
													<span data-src="http://placehold.it/79x73" data-width="79" data-height="73"></span>
													<span data-src="http://placehold.it/79x73" data-width="79" data-height="73" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
													<!--[if (lt IE 9) & (!IEMobile)]>
													<span data-src="http://placehold.it/79x73"></span>
													<![endif]-->
													<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
													<noscript><img src="http://placehold.it/79x73" width="79" height="73" alt="image description" ></noscript>
												</span>
										  </a>
									  </li>
									  <li class="pagerslide">
										  <a href="#">
												<span data-picture data-alt="image description">
													<span data-src="http://placehold.it/79x73" data-width="79" data-height="73"></span>
													<span data-src="http://placehold.it/79x73" data-width="79" data-height="73" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:1.5dppx)" ></span> <!-- retina 2x desktop -->
													<!--[if (lt IE 9) & (!IEMobile)]>
													<span data-src="http://placehold.it/79x73"></span>
													<![endif]-->
													<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
													<noscript><img src="http://placehold.it/79x73" width="79" height="73" alt="image description" ></noscript>
												</span>
										  </a>
									  </li>
								  </ul>
								  <div class="quotes-mask">
									  <div class="quotes-slideset">
										  <div class="quotes-slide">
											  <blockquote class="gallery-quotes">
												  <i class="fa fa-quote-left"></i>
												  <p>We have always been looking for honest legal advices. Law Abode gave us honest best advices with the objective of resolving the dispute expeditiously, thus saving our time and cost.</p>
												  <footer><cite title="Source Title">signature</cite></footer>
											  </blockquote>
											  <ul class="slide-social-networks list-inline">
												  <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
												  <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
												  <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
												  <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
											  </ul>
										  </div>
										  <div class="quotes-slide">
											  <blockquote class="gallery-quotes">
												  <i class="fa fa-quote-left"></i>
												  <p>Law and order exist for the purpose of establishing justice and when they fail in this purpose they become the dangerously structured dams that block the flow of social progress.</p>
												  <footer><cite title="Source Title">signature</cite></footer>
											  </blockquote>
											  <ul class="slide-social-networks list-inline">
												  <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
												  <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
												  <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
												  <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
											  </ul>
										  </div>
										  <div class="quotes-slide">
											  <blockquote class="gallery-quotes">
												  <i class="fa fa-quote-left"></i>
												  <p>Law and order exist for the purpose of establishing justice and when they fail in this purpose they become the dangerously structured dams that block the flow of social progress.</p>
												  <footer><cite title="Source Title">signature</cite></footer>
											  </blockquote>
											  <ul class="slide-social-networks list-inline">
												  <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
												  <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
												  <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
												  <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
											  </ul>
										  </div>
										  <div class="quotes-slide">
											  <blockquote class="gallery-quotes">
												  <i class="fa fa-quote-left"></i>
												  <p>Law and order exist for the purpose of establishing justice and when they fail in this purpose they become the dangerously structured dams that block the flow of social progress.</p>
												  <footer><cite title="Source Title">signature</cite></footer>
											  </blockquote>
											  <ul class="slide-social-networks list-inline">
												  <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
												  <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
												  <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
												  <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
											  </ul>
										  </div>
										  <div class="quotes-slide">
											  <blockquote class="gallery-quotes">
												  <i class="fa fa-quote-left"></i>
												  <p>Law and order exist for the purpose of establishing justice and when they fail in this purpose they become the dangerously structured dams that block the flow of social progress.</p>
												  <footer><cite title="Source Title">signature</cite></footer>
											  </blockquote>
											  <ul class="slide-social-networks list-inline">
												  <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
												  <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
												  <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
												  <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
											  </ul>
										  </div>
										  <div class="quotes-slide">
											  <blockquote class="gallery-quotes">
												  <i class="fa fa-quote-left"></i>
												  <p>Law and order exist for the purpose of establishing justice and when they fail in this purpose they become the dangerously structured dams that block the flow of social progress.</p>
												  <footer><cite title="Source Title">signature</cite></footer>
											  </blockquote>
											  <ul class="slide-social-networks list-inline">
												  <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
												  <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
												  <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
												  <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
											  </ul>
										  </div>
									  </div>
								  </div>
								  <a class="pager-prev" href="#"><i class="fa fa-chevron-left"></i></a>
								  <a class="pager-next" href="#"><i class="fa fa-chevron-right"></i></a>
							  </div>
						  </div>
					  </div>
				  </section>
				  <div class="parallax-holder">
					  <div class="parallax-frame">
						  <img src="http://placehold.it/1280x854" height="854" width="1280" alt="image description">
					  </div>
				  </div>
			  </div>
			  <section class="container container-block clients2">
				  <div class="row">
					  <div class="col-xs-12">
						  <header class="main-heading">
							  <h2>Our Clients</h2>
						  </header>
					  </div>
				  </div>
				  <?php
				  $countCust = count($customers);
				  $sliderCount = ceil($countCust/5);
				  ?>
				  <!-- our-clients of the Page -->
				  <div class="row our-clients">
					  <div class="col-xs-12">
						  <!-- clients-carousel of the page -->
						  <div class="clients-carousel">
							  <div class="clients-mask">
								  <div class="clients-slideset">
									  <?php
									  		for($i = 1 ;$i <= $sliderCount ; $i++){?>
									  <div class="clients-slide">
										  <?php
										  for($j = ($i*5)-5 ;$j <= ($i*5) ; $j++){
										  	if($j === count($customers)){
										  		break;
											}
										  	?>
										  <a href="#" class="img-holder">
											  <img src="<?php echo site_url("/")?>/<?php echo $customers[$j]['featured_image'];?>" style="width: 134px;height: 85px">
										  </a>
										  <?php }?>
									  </div>
									<?php }?>
								  </div>
							  </div>
							  <a class="btn-prev2" href="#"><i class="fa fa-angle-left"></i></a>
							  <a class="btn-next2" href="#"><i class="fa fa-angle-right"></i></a>
						  </div>
					  </div>
				  </div>
			  </section>
		  <?php }?>
	  </main>
	  <?php echo $footer;?>
  </div>


  <!-- include jQuery -->
  <script type="text/javascript" src="<?php echo $base_assets_url_web;?>js/jquery-1.11.2.min.js"></script>
  <script type="text/javascript" src="<?php echo $base_assets_url_web;?>js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo $base_assets_url_web;?>js/jquery.main.js"></script>
  <script type="text/javascript" src="<?php echo $base_assets_url_web;?>js/jquery.datepicker.js"></script>
  <script type="text/javascript">
	  if (navigator.userAgent.match(/IEMobile\/10\.0/) || navigator.userAgent.match(/MSIE 10.*Touch/)) {
		  var msViewportStyle = document.createElement('style')
		  msViewportStyle.appendChild(
			  document.createTextNode(
				  '@-ms-viewport{width:auto !important}'
			  )
		  )
		  document.querySelector('head').appendChild(msViewportStyle)
	  }

      document.addEventListener("DOMContentLoaded", function() {
          var elements = document.getElementsByTagName("INPUT");
          for (var i = 0; i < elements.length; i++) {
              elements[i].oninvalid = function(e) {
                  e.target.setCustomValidity("");
                  if (!e.target.validity.valid) {
                      e.target.setCustomValidity("This field cannot be left blank");
                  }
              };
              elements[i].oninput = function(e) {
                  e.target.setCustomValidity("");
              };
          }

          var elements1 = document.getElementsByTagName("TEXTAREA");
          for (var i = 0; i < elements.length; i++) {
              elements1[i].oninvalid = function(e) {
                  e.target.setCustomValidity("");
                  if (!e.target.validity.valid) {
                      e.target.setCustomValidity("This field cannot be left blank");
                  }
              };
              elements1[i].oninput = function(e) {
                  e.target.setCustomValidity("");
              };
          }
      })
  </script>
  </body>
</html>
