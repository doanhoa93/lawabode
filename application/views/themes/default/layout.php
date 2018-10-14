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
      <?php if($end_path === 'home' || $end_path === ''){?>
          <main id="main">
              <!-- container-block of the page -->
              <section class="container container-block">
                  <header class="row main-heading">
                      <div class="col-xs-12">
                          <h2>We Provide you with!</h2>
                      </div>
                  </header>
                  <div class="row services-holder">
                      <div class="col-sm-3 col-xs-12 services-col">
                          <div class="img-box"></div>
                          <h2><a href="<?php echo site_url('/read/services')?>">Litigation & Free legal Advice</a></h2>
                          <p class="height-200 text-justify">We provide Litigation support In Supreme Court of Bangladesh, District Courts and Tribunals. <!--We are in process of making network in all districts of Bangladesh.--> We provide litigation support in Labour Tribunal, VAT, Customs Tribunal, Administrative Tribunal and other tribunals.
                              We provide free legal advice to our clients everyday (except Friday and Saturday) from 6pm to 7pm. For free legal advice call- 0088-01613776651</p>
                          <a href="<?php echo site_url('/read/services')?>" class="btn btn-default">Read More +</a>
                      </div>
                      <div class="col-sm-3 col-xs-12 services-col approch">
                          <div class="img-box"></div>
                          <h2><a href="<?php echo site_url('/read/services')?>">Arbitration & Mediation</a></h2>
                          <p class="height-200 text-justify">We advice mediation first, then Arbitration for any dispute resolution. We provide Arbitration support and help in arrangement of ad hoc or institutional arbitration.  </p>
                          <a href="<?php echo site_url('/read/services')?>" class="btn btn-default">Read More +</a>
                      </div>
                      <div class="col-sm-3 col-xs-12 services-col rules">
                          <div class="img-box"></div>
                          <h2><a href="<?php echo site_url('/read/services')?>">Business Negotiation</a></h2>
                          <br>
                          <p class="height-200 text-justify">A good negotiation skill helps your business expansion. We provide training as well as we participate in business negotiations, such as, in International and National Procurement, Sales and in CBA issues etc.</p>
                          <a href="<?php echo site_url('/read/services')?>" class="btn btn-default">Read More +</a>
                      </div>
                      <div class="col-sm-3 col-xs-12 services-col client">
                          <div class="img-box"></div>
                          <h2><a href="<?php echo site_url('/read/services')?>">Consultancy & Client Conferencing</a></h2>
                          <p class="height-200 text-justify">We provide consultancy to FDI and other International Trade and Investments. We also provide consultancy to trade and investment to the national organizations.
                              To give a perfect advice to our client, we arrange client conferencing to find out real merit of the case. Then give advice accordingly.</p>
                          <a href="<?php echo site_url('/read/services')?>" class="btn btn-default">Read More +</a>
                      </div>
                  </div>
              </section>
              <!-- container block practice of the page -->
              <section class="container container-block practice">
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
              <!-- news-block of the page -->
              <section class="container container-block news-block">
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
                      <div class="col-sm-3 col-xs-12">
                          <div class="success-col">
                              <div class="video-block">
                                  <a href="#video-popup1" class="lightbox">
                                      <img class="height-257" src="images/t1.png" alt="iamge description">
                                      <span class="btn-play"><i class="fa fa-play-circle"></i></span>
                                  </a>
                              </div>
                              <h3>CEO at Ain Kanun Ep: 87</h3>
                              <span class="title">Posted by: Admin</span>
                              <p>Live talk show with our CEO about Law & Justice- discussing & answering several questions.</p>
                          </div>
                      </div>
                  </div>
              </section>
              <!-- clients-gallery of the Page -->
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
          </main>
      <?php }
      else{?>
          <main id="main">
              <section class="container container-block">
              <?php echo $content;?>
              </section>
          <main id="main">
      <?php }?>
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
