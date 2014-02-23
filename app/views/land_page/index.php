<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->
<head>

<!-- Meta Tags -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title><?php echo $title; ?></title>   

<meta name="description" content="<?php echo $description ?> />

<!-- Mobile Specifics -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="HandheldFriendly" content="true"/>
<meta name="MobileOptimized" content="320"/>   

<!-- Mobile Internet Explorer ClearType Technology -->
<!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

<!-- Bootstrap -->
<?php echo HTML::style('_include/css/bootstrap.min.css'); ?>

<!-- Main Style -->
<?php echo HTML::style('_include/css/main.css'); ?>

<!-- Supersized -->
<?php echo HTML::style('_include/css/supersized.css'); ?>
<?php echo HTML::style('_include/css/supersized.shutter.css'); ?>

<!-- FancyBox -->
<?php echo HTML::style('_include/css/fancybox/jquery.fancybox.css'); ?>

<!-- Font Icons -->
<?php echo HTML::style('_include/css/fonts.css'); ?>

<!-- Shortcodes -->
<?php echo HTML::style('_include/css/shortcodes.css'); ?>

<!-- Responsive -->
<?php echo HTML::style('_include/css/bootstrap-responsive.min.css'); ?>
<?php echo HTML::style('_include/css/responsive.css'); ?>

<!-- Supersized -->
<?php echo HTML::style('_include/css/supersized.css'); ?>
<?php echo HTML::style('_include/css/supersized.shutter.css'); ?>

<!-- Google Font -->
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>

<!-- Fav Icon -->
<link rel="shortcut icon" href="#">

<link rel="apple-touch-icon" href="#">
<link rel="apple-touch-icon" sizes="114x114" href="#">
<link rel="apple-touch-icon" sizes="72x72" href="#">
<link rel="apple-touch-icon" sizes="144x144" href="#">

<!-- Modernizr -->
<?php echo HTML::script('_include/js/modernizr.js'); ?>

<!-- Analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'Insert Your Code']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- End Analytics -->

</head>


<body>

<!-- This section is for Splash Screen -->
<div class="ole">
<section id="jSplash">
	<div id="circle"></div>
</section>
</div>
<!-- End of Splash Screen -->

<!-- Homepage Slider -->
<div id="home-slider">	
    <div class="overlay"></div>

    <div class="slider-text">
    <div class="slide-content">Nenad Development</div>

    </div>
	
	<div class="control-nav">
        <a id="prevslide" class="load-item"><i class="font-icon-arrow-simple-left"></i></a>
        <a id="nextslide" class="load-item"><i class="font-icon-arrow-simple-right"></i></a>
        <ul id="slide-list"></ul>
        
        <a id="nextsection" href="#work"><i class="font-icon-arrow-simple-down"></i></a>
    </div>
</div>
<!-- End Homepage Slider -->

<!-- Header -->
<header>
    <div class="sticky-nav">
    	<a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>
        
        <div id="logo">
        	<a href="#home-slider" title="Brushed | Responsive One Page Template">Brushed Template</a>
        </div>
        
        <nav id="menu">
        	<ul id="menu-nav">
            	<li class="current"><a href="#home-slider"><?php echo Lang::get('pocetna.link_pocetna'); ?></a></li>
                <li><a href="#work"><?php echo Lang::get('pocetna.link_portfolio'); ?></a></li>
                <li><a href="#about"><?php echo Lang::get('pocetna.link_omeni'); ?></a></li>
                <li><a href="#contact"><?php echo Lang::get('pocetna.link_kontakt'); ?></a></li>
				
            </ul>
        </nav>
        
    </div>
</header>
<!-- End Header -->

<!-- Our Work Section -->
<div id="work" class="page">
	<div class="container">
    	<!-- Title Page -->
        <div class="row">
            <div class="span12">
                <div class="title-page">
                    <h2 class="title"><?php echo Lang::get('pocetna.portfolio_lead'); ?></h2>
                    <h3 class="title-description"><?php echo Lang::get('pocetna.portfolio_caption'); ?></h3>
                </div>
            </div>
        </div>
        <!-- End Title Page -->

        <!-- Portfolio Projects -->
        <div class="row">
        	<div class="span3">
            	<!-- Filter -->
                <nav id="options" class="work-nav">
                    <ul id="filters" class="option-set" data-option-key="filter">
                    	<li class="type-work"><?php echo Lang::get('pocetna.portfolio_kat'); ?></li>
                        <li><a href="#filter" data-option-value="*" class="selected"><?php echo Lang::get('pocetna.portfolio_meni'); ?></a></li>

                    </ul>
                </nav>
                <!-- End Filter -->
            </div>

            <div class="span9">
            	<div class="row">
                	<section id="projects">
                    	<ul id="thumbs">

							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 design">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?php echo Lang::get('pocetna.work1') ?>" href="_include/img/work/full/image-01-full.png">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/image-01.png" alt="<?php echo Lang::get('pocetna.work1_caption'); ?>">
                            </li>
                        	<!-- End Item Project -->

							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 design">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?php echo Lang::get('pocetna.work2') ?>" href="_include/img/work/full/image-02-full.png">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/image-02.png" alt="<?php echo Lang::get('pocetna.work2_caption'); ?>">
                            </li>
                        	<!-- End Item Project -->
                            						<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 design">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?php echo Lang::get('pocetna.work3') ?>" href="_include/img/work/full/image-03-full.png">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/work/thumbs/image-03.png" alt="<?php echo Lang::get('pocetna.work3_caption'); ?>">
                            </li>
                        	<!-- End Item Project -->


                        </ul>
                    </section>
                    
            	</div>
            </div>
        </div>
        <!-- End Portfolio Projects -->
    </div>
</div>
<!-- End Our Work Section -->

<!-- About Section -->
<div id="about" class="page-alternate">
<div class="container">
    <!-- Title Page -->
    <div class="row">
        <div class="span12">
            <div class="title-page">
                <h2 class="title"><?php echo Lang::get('pocetna.omeni_lead'); ?></h2>
                <h3 class="title-description"><?php echo Lang::get('pocetna.omeni_caption'); ?></h3>
            </div>
        </div>
    </div>
    <!-- End Title Page -->
    
    <!-- People -->
    <div class="row">
    	
        <!-- Start Profile -->
    	<div class="span4 profile">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb"><?php echo Lang::get('pocetna.omeni1_lead'); ?></span>
                </div>
                <img src="_include/img/profile/profile-01.jpg" alt="Nenad Paic">
            </div>
            <h3 class="profile-name">Nenad Paic</h3>
            <p class="profile-description"><?php echo Lang::get('pocetna.omeni1_caption'); ?></p>

            <div class="social">
            	<ul class="social-icons">
                	<li><a href="https://twitter.com/nenadpaic"><i class="font-icon-social-twitter"></i></a></li>
                    <li><a href="https://www.facebook.com/nenad.paic"><i class="font-icon-social-facebook"></i></a></li>
                    <li><a href="mailto:nenadpaic@gmail.com"><i class="font-icon-social-email"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- End Profile -->
        
        <!-- Start Profile -->
        	<div class="span4 profile">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb"><?php echo Lang::get('pocetna.omeni2_lead'); ?></span>
                </div>
                <img src="_include/img/profile/profile-02.jpg" alt="How i work">
            </div>
            <h3 class="profile-name"><?php echo Lang::get('pocetna.omeni2_lead'); ?></h3>
            <p class="profile-description"><?php echo Lang::get('pocetna.omeni2_caption'); ?></p>

            <div class="social">
            	<ul class="social-icons">

                </ul>
            </div>
        </div>

        <!-- End Profile -->
        	<div class="span4 profile">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb"><?php echo Lang::get('pocetna.omeni3_lead'); ?></span>
                </div>
                <img src="_include/img/profile/profile-03.jpg" alt="Support">
            </div>
            <h3 class="profile-name"><?php echo Lang::get('pocetna.omeni3_lead'); ?></h3>
            <p class="profile-description"><?php echo Lang::get('pocetna.omeni3_caption'); ?></p>

            <div class="social">
            	<ul class="social-icons">

                </ul>
            </div>
        </div>

    </div>
    <!-- End People -->
</div>
</div>
<!-- End About Section -->


<!-- Contact Section -->
<div id="contact" class="page">
<div class="container">
    <!-- Title Page -->
    <div class="row">
        <div class="span12">
            <div class="title-page">
                <h2 class="title"><?php echo Lang::get('pocetna.kontakt_lead'); ?></h2>
                <h3 class="title-description"><?php echo Lang::get('pocetna.kontakt_caption'); ?></h3>
            </div>
        </div>
    </div>
    <!-- End Title Page -->
    
    <!-- Contact Form -->
    <div class="row">
    	<div class="span9">

        	<?php echo Form::open(array('url' => 'send_message', 'class' => 'contact-form', 'id' => 'contact-form'));      ?>
            	<p class="contact-name">
            		<?php echo Form::text('ime', null, array('placeholder' => 'Your name...'));
                     echo  $errors->first('ime'); ?>
                </p>
                <p class="contact-email">
                   <?php echo Form::text('email', null, array('placeholder' => 'Your email...'));
                   echo $errors->first('email'); ?>

                </p>
                <p class="contact-message">
                	<?php echo Form::textarea('poruka', null, array('placeholder' => 'Write something to me...'));
                    echo  $errors->first('poruka'); ?>
                </p>
                <p class="contact-submit">
                	<input type='submit' id="contact-submit" class="submit" value="<?php echo Lang::get('pocetna.submit'); ?>" />
                </p>
                
                <div id="response">

                </div>
            <?php echo Form::close();?>
         
        </div>
        
        <div class="span3">
        	<div class="contact-details">
        		<h3><?php echo Lang::get('pocetna.kontakt'); ?></h3>
                <ul>
                    <li><a href="mailto:nenadpaic@gmail.com">nenadpaic@gmail.com</a></li>
                    <li>(+381)65-812-6235</li>
                    <li>
                        Nenad development

                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Contact Form -->
</div>
</div>
<!-- End Contact Section -->



<!-- Socialize -->
<div id="social-area" class="page">
	<div class="container">
    	<div class="row">
            <div class="span12">
                <nav id="social">
                    <ul>
                        <li><a href="https://twitter.com/nenadpaic" title="Follow Me on Twitter" target="_blank"><span class="font-icon-social-twitter"></span></a></li>

                        <li><a href="https://www.facebook.com/nenad.paic" title="Follow Me on Facebook" target="_blank"><span class="font-icon-social-facebook"></span></a></li>
                        <li><a href="https://plus.google.com/u/0/107722138449211983684/posts" title="Follow Me on Google Plus" target="_blank"><span class="font-icon-social-google-plus"></span></a></li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Socialize -->

<!-- Footer -->
<footer>
	<p class="credits">&copy;2014 Nenad Paic.
</footer>
<!-- End Footer -->

<!-- Back To Top -->
<a id="back-to-top" href="#">
	<i class="font-icon-arrow-simple-up"></i>
</a>
<!-- End Back to Top -->


<!-- Js -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> <!-- jQuery Core -->
<?php echo HTML::script('_include/js/bootstrap.min.js'); ?>
<?php echo HTML::script('_include/js/supersized.3.2.7.min.js'); ?> <!-- Slider -->
<?php echo HTML::script('_include/js/waypoints.js'); ?> <!-- WayPoints -->
<?php echo HTML::script('_include/js/waypoints-sticky.js'); ?><!-- Waypoints for Header -->
<?php echo HTML::script('_include/js/jquery.isotope.js'); ?> <!-- Isotope Filter -->
<?php echo HTML::script('_include/js/jquery.fancybox.pack.js'); ?> <!-- Fancybox -->
<?php echo HTML::script('_include/js/jquery.fancybox-media.js'); ?> <!-- Fancybox for Media -->
<?php echo HTML::script('_include/js/jquery.tweet.js'); ?><!-- Tweet -->
<?php echo HTML::script('_include/js/plugins.js'); ?> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
<?php echo HTML::script('_include/js/main.js'); ?>  <!-- Default JS -->
<!-- End Js -->

</body>
</html>