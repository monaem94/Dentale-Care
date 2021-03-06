<?php
require_once("../requires/functions.php");
require_once("../requires/datasource.php");
require_once("../requires/config.php");

if (!isLoggedIn()) {
} else {
    redirectTo("../connected/index.php");
}

// check to see if the register information input was previously submitted
// if so, display the submitted information, otherwise display blank inputs

?>

<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from demo.themeamber.com/dentalcare/services/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Aug 2016 22:22:49 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="../xmlrpc.php">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="icon" type="image/png" href="../wp-content/uploads/2016/05/guaranteed.png" >
    <style>
        .pricing-block {
            
            background-color: rgb(215, 225, 229);
        }
        .list-group-item1 {
            background-color: rgb(250, 253, 254);
            border-style: double;
            border-color: rgb(42, 169, 224);
        }
    
    </style>

    <title>Services &#8211; Dental Care</title>
<link rel="alternate" type="application/rss+xml" title="Dental Care &raquo; Feed" href="../feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="Dental Care &raquo; Comments Feed" href="../comments/feed/index.html" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/72x72\/","ext":".png","source":{"concatemoji":"http:\/\/demo.themeamber.com\/dentalcare\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.5.3"}};
			!function(a,b,c){function d(a){var c,d,e,f=b.createElement("canvas"),g=f.getContext&&f.getContext("2d"),h=String.fromCharCode;if(!g||!g.fillText)return!1;switch(g.textBaseline="top",g.font="600 32px Arial",a){case"flag":return g.fillText(h(55356,56806,55356,56826),0,0),f.toDataURL().length>3e3;case"diversity":return g.fillText(h(55356,57221),0,0),c=g.getImageData(16,16,1,1).data,d=c[0]+","+c[1]+","+c[2]+","+c[3],g.fillText(h(55356,57221,55356,57343),0,0),c=g.getImageData(16,16,1,1).data,e=c[0]+","+c[1]+","+c[2]+","+c[3],d!==e;case"simple":return g.fillText(h(55357,56835),0,0),0!==g.getImageData(16,16,1,1).data[0];case"unicode8":return g.fillText(h(55356,57135),0,0),0!==g.getImageData(16,16,1,1).data[0]}return!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i;for(i=Array("simple","flag","unicode8","diversity"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='wp-dentalcare-vc-extend-css'  href='../wp-content/plugins/dentalcare-core/assets/css/vc-extend62d0.css?ver=4.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='wp-dentalcare-font-awesome-css'  href='../wp-content/themes/wp-dentalcare/css/font-awesome.min474a.css?ver=4.4.0' type='text/css' media='all' />
<link rel='stylesheet' id='wp-dentalcare-font-simple-line-css'  href='../wp-content/themes/wp-dentalcare/css/simple-line-icons5152.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='wp-dentalcare-magnific-popup-css'  href='../wp-content/themes/wp-dentalcare/css/magnific-popup.min8a54.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='wp-dentalcare-owl-carousel-css'  href='../wp-content/themes/wp-dentalcare/css/owl.carousel62d0.css?ver=4.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='wp-dentalcare-flexsliders-css'  href='../wp-content/themes/wp-dentalcare/css/flexslider62d0.css?ver=4.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='../wp-content/plugins/contact-form-7/includes/css/stylesc1f9.css?ver=4.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'  href='../wp-content/plugins/revslider/public/assets/css/settings6619.css?ver=5.2.5' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
#rs-demo-id {}
</style>
<link rel='stylesheet' id='woocommerce-layout-css'  href='../wp-content/plugins/woocommerce/assets/css/woocommerce-layout72e6.css?ver=2.6.4' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-smallscreen-css'  href='../wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen72e6.css?ver=2.6.4' type='text/css' media='only screen and (max-width: 768px)' />
<link rel='stylesheet' id='woocommerce-general-css'  href='../wp-content/plugins/woocommerce/assets/css/woocommerce72e6.css?ver=2.6.4' type='text/css' media='all' />
<link rel='stylesheet' id='wp-dentalcare-style-css'  href='../wp-content/themes/wp-dentalcare/style62d0.css?ver=4.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='font-genericons-css'  href='../wp-content/themes/wp-dentalcare/css/font-genericons5589.css?ver=3.4.1' type='text/css' media='all' />
<link rel='stylesheet' id='font-simple-line-css'  href='../wp-content/themes/wp-dentalcare/css/simple-line-icons5152.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='magnific-popup-css'  href='../wp-content/themes/wp-dentalcare/css/magnific-popup.min8a54.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='owl-carousel-css'  href='../wp-content/themes/wp-dentalcare/css/owl.carousel62d0.css?ver=4.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='flexsliders-css'  href='../wp-content/themes/wp-dentalcare/css/flexslider62d0.css?ver=4.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='vc-extend-css'  href='../wp-content/themes/wp-dentalcare/css/vc-extend62d0.css?ver=4.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='js_composer_front-css'  href='../wp-content/plugins/js_composer/assets/css/js_composer.min2720.css?ver=4.11.2' type='text/css' media='all' />
<script type='text/javascript' src='../wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1'></script>
<script type='text/javascript' src='../wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min6619.js?ver=5.2.5'></script>
<script type='text/javascript' src='../wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min6619.js?ver=5.2.5'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/dentalcare\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/dentalcare\/services\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View Cart","cart_url":"http:\/\/demo.themeamber.com\/dentalcare\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min72e6.js?ver=2.6.4'></script>
<script type='text/javascript' src='../wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart2720.js?ver=4.11.2'></script>
<link rel='https://api.w.org/' href='../wp-json/index.html' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.5.3" />
<meta name="generator" content="WooCommerce 2.6.4" />
<link rel="canonical" href="index.php" />
<link rel='shortlink' href='../indexc4f7.html?p=7' />
<link rel="alternate" type="application/json+oembed" href="../wp-json/oembed/1.0/embed5b7d.json?url=http%3A%2F%2Fdemo.themeamber.com%2Fdentalcare%2Fservices%2F" />
<link rel="alternate" type="text/xml+oembed" href="../wp-json/oembed/1.0/embed6455?url=http%3A%2F%2Fdemo.themeamber.com%2Fdentalcare%2Fservices%2F&amp;format=xml" />
		<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
		<meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress."/>
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="http://demo.themeamber.com/dentalcare/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]--><!--[if IE  8]><link rel="stylesheet" type="text/css" href="http://demo.themeamber.com/dentalcare/wp-content/plugins/js_composer/assets/css/vc-ie8.min.css" media="screen"><![endif]--><meta name="generator" content="Powered by Slider Revolution 5.2.5 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
<style type="text/css" title="dynamic-css" class="options-output">a:hover, a:focus, .primary-link a, .primary-color, .primary-hover-color:hover, .primary-link-hover-color a:hover, .entry-header a:hover, .widget ul li a:hover, #site-navigation > div > ul > li.current-menu-item > a, #site-navigation > div > ul > li.current-menu-ancestor > a, #site-navigation > div > ul > li:hover > a, .content-area ul li:before, .main-navigation ul.nav-menu > li:hover > a, .header-transparent .site-header .main-navigation ul.nav-menu > li:hover > a, .ab-feature-box-layout1 .ab-feature-box:hover .ab-feature-box-icon, .ab-feature-box-layout2 .ab-feature-box:hover .ab-feature-box-icon, .owl-theme .owl-controls .owl-nav [class*="owl-"]:hover, .owl-theme .owl-controls .owl-nav [class*="owl-"]:focus, .ab-content-single .entry-meta .author a{color:#00aeef;}.primary-background, .primary-background-hover:hover, .btn-primary, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .st-custom-heading-layout3 .st-heading-title:before, input[type="submit"]:hover, input[type="submit"]:focus, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .widget-area .widget-title:after, .ab-slider-testimonial ul.simpleTabsNavigation li a.current:before, .ab-carousel-layout2 .owl-theme .owl-controls .owl-nav [class*="owl-"]:hover, .ab-carousel-layout2 .owl-theme .owl-controls .owl-nav [class*="owl-"]:focus, .ab-team-layout1 .ab-team-social, .pagination .nav-links a:hover, .pagination .nav-links .page-numbers.current, button:hover, button:focus, input[type="button"]:hover, input[type="button"]:focus, input[type="reset"]:hover, input[type="reset"]:focus, input[type="submit"]:hover, input[type="submit"]:focus, .tagcloud a:hover, .site-page-title, .owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span{background-color:#00aeef;}textarea:focus, input[type="date"]:focus, input[type="datetime"]:focus, input[type="datetime-local"]:focus, input[type="email"]:focus, input[type="month"]:focus, input[type="number"]:focus, input[type="password"]:focus, input[type="search"]:focus, input[type="tel"]:focus, input[type="text"]:focus, input[type="time"]:focus, input[type="url"]:focus, input[type="week"]:focus, .tagcloud a:hover{border-color:#00aeef;}{border-left-color:#00aeef;}.secondary-color, .secondary-hover-color:hover, .secondary-link-hover-color a:hover{color:#24cf5f;}.secondary-border{border-color:#24cf5f;}.secondary-background, .secondary-background-hover:hover, .btn-secondary, .pagination .nav-links a, .pagination .nav-links .page-numbers{background-color:#24cf5f;}hr, abbr, acronym, dfn, table, table > thead > tr > th, table > tbody > tr > th, table > tfoot > tr > th, table > thead > tr > td, table > tbody > tr > td, table > tfoot > tr > td,
                            fieldset, select, textarea, input[type="date"], input[type="datetime"], input[type="datetime-local"], input[type="email"], input[type="month"], input[type="number"], input[type="password"], input[type="search"], input[type="tel"], input[type="text"], input[type="time"], input[type="url"], input[type="week"]{border-color:#eaeaea;}body{background-color:#ffffff;}body.layout-boxed{background-color:#cccccc;}body{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading body,{opacity: 0;}.ie.wf-loading body,{visibility: hidden;}h1{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h1,{opacity: 0;}.ie.wf-loading h1,{visibility: hidden;}h2{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h2,{opacity: 0;}.ie.wf-loading h2,{visibility: hidden;}h3{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h3,{opacity: 0;}.ie.wf-loading h3,{visibility: hidden;}h4{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h4,{opacity: 0;}.ie.wf-loading h4,{visibility: hidden;}h5{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h5,{opacity: 0;}.ie.wf-loading h5,{visibility: hidden;}h6{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading h6,{opacity: 0;}.ie.wf-loading h6,{visibility: hidden;}.footer-top-area{background-color:#2d3e50;}.footer-top-area .widget-title{color:#ffffff;}.footer-top-area{color:#9aacbf;}.footer-top-area a{color:#9aacbf;}.footer-top-area a:hover, .footer-top-area .widget ul li a:hover{color:#00aeef;}.footer-bottom-area{background-color:#2d3e50;}.footer-bottom-area{color:#9aacbf;}.footer-bottom-area a{color:#9aacbf;}.footer-bottom-area a:hover{color:#00aeef;}</style><style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1465812155262{padding-top: 75px !important;}.vc_custom_1465812164519{padding-top: 25px !important;}.vc_custom_1465871387537{padding-top: 80px !important;}.vc_custom_1465873897847{padding-top: 80px !important;padding-bottom: 85px !important;}.vc_custom_1465871970247{padding-top: 42px !important;padding-bottom: 38px !important;}</style><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript></head>

<body class="page page-id-7 page-template-default header-normal visual-composer wpb-js-composer js-comp-ver-4.11.2 vc_responsive">
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

    <header id="masthead" class="site-header">
        <div class="site-header-main clearfix">
            <div class="site-branding left">
                                                    <a href="../index.php"
                       title="Dental Care" rel="home">
                        <img src="../wp-content/themes/wp-dentalcare/images/logo.png" alt="Dental Care" class="site-logo"/>
                    </a>
                            </div><!-- .site-branding -->
            <button id="menu-toggle" class="menu-toggle right">Menu</button>
            <div id="site-header-menu" class="site-header-menu">
                                    <nav id="site-navigation" class="main-navigation right" aria-label="Primary Menu">
                        <div class="menu-main-menu-container"><ul id="menu-main-menu" class="primary-menu"><li id="menu-item-27" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-27"><a href="../index.php">Home</a>
</li>
<li id="menu-item-26" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26"><a href="../about-us/index.php">About Us</a></li>
<li id="menu-item-25" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25"><a href="../services/index.php">Services</a></li>
<li id="menu-item-24" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24"><a href="../doctors/index.php">Doctors</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-430"><a href="#">Features</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20"><a href="../blog/index.php">Blog</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-454"><a href="../gallery/index.php">Gallery</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-454"><a href="../appointment/index.php">Appointment</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-465"><a href="index.php">Price List</a></li>
</ul>
</li>
<li id="menu-item-22" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22"><a href="../contact/index.php">Contact</a></li>
                            <li id="menu-item-430" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-430"><h3><a href="../my_account/login.php" class="w3-btn w3-light-blue"> Sign In </a></h3>
 </li>
</ul></div>                    </nav><!-- .main-navigation -->
                
            </div><!-- #site-navigation -->

            <div class="book-now">
                <a class="btn btn-secondary" href="../appointment/index.php" title="">Book Appointment<i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </header><!-- #masthead -->

            <div class="site-page-title text-left " style="padding:;">
            <div class="site-page-title-main ab-flex">
                <div class="ab-page-title ab-flex-box">
                                                                    <h1 class="page-title"
                            style="color: ;">
                            <span>Treatment pricing list</span>
                        </h1>
                                                                                        <div class="page-subtitle"
                             style="color: ;">
                            <span>Dentalcare’s dental pricing list</span>
                        </div>
                                    </div>
                                    <div class="ab-call-us">
                        <div class="ab-call-us-text montserrat-bold-50">
                            Call Us                        </div>
                        <div class="ab-call-us-number">
                            (+216) 71 25 98 55</div>
                    </div>
                
                            </div>
        </div>
        
    <div id="content" class="site-content">
    <!-- tp breadcrumb --> 
  <div class="tp-main-container"> <!--tp-main-container-->
	<div class="container">
		        <div class="row">
	        <div class="col-md-12 mbtm-2">
    		  <br>
<p>We provide best dental treatment on affordable price sausage tongue frankfurter, biltong ground round filet mignon andouille alcatra ribeye turducken tenderloin. Hamburger tongue shank jowl, spare ribs drumstick doner boudin flank pork belly tri-tip short ribs swine ham pancetta. Strip steak turducken chicken, hamburger andouille porchetta bresaola bacon short loin pancetta salami.</p>
        	</div>
        </div>
              	<div class="row">
      	        <div class="col-md-6">
            <div class="pricing-block mbtm-3"><!-- pricing block -->
                <div class="list-group-item1">
                  <h2 class="price-title">&nbsp;&nbsp;&nbsp;Teeth Whitening</h2>
                  <p>&nbsp;&nbsp;&nbsp;Tooth whitening can make your teeth sparkling white and beautiful!</p>
                                    
                  </div>  
              <ul class="list-group">
                                
                 <li class="list-group-item odd-bg"><span class="price-badge">
								</span>Initial Consult<div><strong class="minits">up to 30 mins</strong></div> </li><span style="color:red">$110</span><li class="list-group-item even-bg"><span class="price-badge">
								</span>Review Consultation<div><strong class="minits">up to 45 mins</strong></div> </li><span style="color:red">$165</span><li class="list-group-item odd-bg"><span class="price-badge">
								</span>Long Consultation<div><strong class="minits">up to 90 mins</strong></div> </li><span style="color:red">$600</span><li class="list-group-item even-bg"><small>Includes initial assessment for special price.</small></li> 
              </ul>
            </div>
            <!-- /.pricing block -->         
        </div>
                <div class="col-md-6">
            <div class="pricing-block mbtm-3"><!-- pricing block -->
                <div class="list-group-item1">
                  <h2 class="price-title">&nbsp;&nbsp;&nbsp;Gum Treatment</h2>
                  <p>&nbsp;&nbsp;&nbsp;Gum disease like gingivitis, periodontitis can cause you to lose teeth.</p>
                                    
                  </div>  
              <ul class="list-group">
                                
                 <li class="list-group-item odd-bg"><span class="price-badge">
								</span>Initial Consult<div><strong class="minits">up to 30 mins</strong></div> </li><span style="color:red">$110</span><li class="list-group-item even-bg"><span class="price-badge">
								</span>Review Consultation<div><strong class="minits">up to 45 mins</strong></div> </li><span style="color:red">$165</span><li class="list-group-item odd-bg"><span class="price-badge">
								</span>Long Consultation<div><strong class="minits">up to 90 mins</strong></div> </li><span style="color:red">$600</span><li class="list-group-item even-bg"><small>Includes initial assessment for special price.</small></li> 
              </ul>
            </div>
            <!-- /.pricing block -->         
        </div>
        </div><div class="row">        
                        <div class="col-md-6">
            <div class="pricing-block mbtm-3"><!-- pricing block -->
                <div class="list-group-item1">
                  <h2 class="price-title">&nbsp;&nbsp;&nbsp;DENTAL CROWNS</h2>
                  <p>&nbsp;&nbsp;&nbsp;A dental crown is a tooth-shaped "cap" that is placed over a tooth to cover the tooth..</p>
                                    
                  </div>  
              <ul class="list-group">
                                
                 <li class="list-group-item odd-bg"><span class="price-badge">
								</span>Initial Consult<div><strong class="minits">up to 30 mins</strong></div> </li><span style="color:red">$110</span><li class="list-group-item even-bg"><span class="price-badge">
								</span>Review Consultation<div><strong class="minits">up to 45 mins</strong></div> </li><span style="color:red">$165</span><li class="list-group-item odd-bg"><span class="price-badge">
								</span>Long Consultation<div><strong class="minits">up to 90 mins</strong></div> </li><span style="color:red">$600</span><li class="list-group-item even-bg"><small>Includes initial assessment for special price.</small></li> 
              </ul>
            </div>
            <!-- /.pricing block -->         
        </div>
                <div class="col-md-6">
            <div class="pricing-block mbtm-3"><!-- pricing block -->
                <div class="list-group-item1">
                  <h2 class="price-title">&nbsp;&nbsp;&nbsp;Restorations</h2>
                  <p>&nbsp;&nbsp;&nbsp;Tooth restorations are the various ways your dentist can replace missing teeth.</p>
                                    
                  </div>  
              <ul class="list-group">
                                
                 <li class="list-group-item odd-bg"><span class="price-badge">
								</span>Initial Consult<div><strong class="minits">up to 30 mins</strong></div> </li><span style="color:red">$110</span><li class="list-group-item even-bg"><span class="price-badge">
								</span>Review Consultation<div><strong class="minits">up to 45 mins</strong></div> </li><span style="color:red">$165</span><li class="list-group-item odd-bg"><span class="price-badge">
								</span>Long Consultation<div><strong class="minits">up to 90 mins</strong></div> </li><span style="color:red">$600</span><li class="list-group-item even-bg"><small>Includes initial assessment for special price.</small></li> 
              </ul>
            </div>
            <!-- /.pricing block -->         
        </div>
        </div><div class="row">
        <div class="col-md-6">
            <div class="pricing-block mbtm-3"><!-- pricing block -->
                <div class="list-group-item1">
                  <h2 class="price-title">&nbsp;&nbsp;&nbsp;EXTRACTIONS OF TEETH</h2>
                  <p>&nbsp;&nbsp;&nbsp;There are a number of reasons why tooth extraction may be neede.</p>
                                    
                  </div>  
              <ul class="list-group">
                                
                 <li class="list-group-item odd-bg"><span class="price-badge">
								</span>Initial Consult<div><strong class="minits">up to 30 mins</strong></div> </li><span style="color:red">$110</span><li class="list-group-item even-bg"><span class="price-badge">
								</span>Review Consultation<div><strong class="minits">up to 45 mins</strong></div> </li><span style="color:red">$165</span><li class="list-group-item odd-bg"><span class="price-badge">
								</span>Long Consultation<div><strong class="minits">up to 90 mins</strong></div> </li><span style="color:red">$600</span><li class="list-group-item even-bg"><small>Includes initial assessment for special price.</small></li> 
              </ul>
            </div>
            <!-- /.pricing block -->         
        </div>
                <div class="col-md-6">
            <div class="pricing-block mbtm-3"><!-- pricing block -->
                <div class="list-group-item1">
                  <h2 class="price-title">&nbsp;&nbsp;&nbsp;Root Canal</h2>
                  <p>&nbsp;&nbsp;&nbsp;A root canal is the anatomic space within the root of a tooth.</p>
                                    
                  </div>  
              <ul class="list-group">
                                
                 <li class="list-group-item odd-bg"><span class="price-badge">
								</span>Initial Consult<div><strong class="minits">up to 30 mins</strong></div> </li><span style="color:red">$110</span><li class="list-group-item even-bg"><span class="price-badge">
								</span>Review Consultation<div><strong class="minits">up to 45 mins</strong></div> </li><span style="color:red">$165</span><li class="list-group-item odd-bg"><span class="price-badge">
								</span>Long Consultation<div><strong class="minits">up to 90 mins</strong></div> </li><span style="color:red">$600</span><li class="list-group-item even-bg"><small>Includes initial assessment for special price.</small></li> 
              </ul>
            </div>
            <!-- /.pricing block -->         
        </div>
        </div><div class="row">        <div class="col-md-6">
            <div class="pricing-block mbtm-3"><!-- pricing block -->
                <div class="list-group-item1">
                  <h2 class="price-title">&nbsp;&nbsp;&nbsp;Implant Dentistry</h2>
                  <p>&nbsp;&nbsp;&nbsp;Tooth restorations are the various ways your dentist can replace missing teeth.</p>
                                    
                  </div>  
              <ul class="list-group">
                                
                 <li class="list-group-item odd-bg"><span class="price-badge">
								</span>Initial Consult<div><strong class="minits">up to 30 mins</strong></div> </li><span style="color:red">$110</span><li class="list-group-item even-bg"><span class="price-badge">
								</span>Review Consultation<div><strong class="minits">up to 45 mins</strong></div> </li><span style="color:red">$165</span><li class="list-group-item odd-bg"><span class="price-badge">
								</span>Long Consultation<div><strong class="minits">up to 90 mins</strong></div> </li><span style="color:red">$600</span><li class="list-group-item even-bg"><small>Includes initial assessment for special price.</small></li> 
              </ul>
            </div>
            <!-- /.pricing block -->         
        </div>
                <div class="col-md-6">
            <div class="pricing-block mbtm-3"><!-- pricing block -->
                <div class="list-group-item1">
                  <h2 class="price-title">&nbsp;&nbsp;&nbsp;Orthodontics</h2>
                  <p>&nbsp;&nbsp;&nbsp;Orthodontics is the anatomic space within the root of a tooth.</p>
                                    
                  </div>  
              <ul class="list-group">
                                
                 <li class="list-group-item odd-bg"><span class="price-badge">
								</span>Initial Consult<div><strong class="minits">up to 30 mins</strong></div> </li><span style="color:red">$110</span><li class="list-group-item even-bg"><span class="price-badge">
								</span>Review Consultation<div><strong class="minits">up to 45 mins</strong></div> </li><span style="color:red">$165</span><li class="list-group-item odd-bg"><span class="price-badge">
								</span>Long Consultation<div><strong class="minits">up to 90 mins</strong></div> </li><span style="color:red">$600</span><li class="list-group-item even-bg"><small>Includes initial assessment for special price.</small></li> 
              </ul>
            </div>
            <!-- /.pricing block -->         
        </div>
        </div>
    </div>
</div><!--/.tp-main-container--></div><!-- #content -->

    <div class="footer-top-area">
                <div class="footer-top-main footer-3-columns clearfix">
                            <div id="footer-1"
                     class="footer-1 footer-column left" role="complementary">
                    <aside id="text-2" class="widget widget_text">          <div class="textwidget"><img src="../images/logo2.png" alt=""></div>
        </aside><aside id="contact-2" class="widget widget_contact">
        <div class="ab-contact-widget">

                            <div class="contact-address ab-flex">
                    <div class ="contact-icon ab-flex-cell"><i class="fa fa-map-marker"></i></div>
                    <div class ="contact-content ab-flex-cell">5, Avenue de la liberté 1000 Tunis Tunisia<br> Tunis 1000</div>
                </div>
            
                            <div class="contact-fax ab-flex">
                    <div class ="contact-icon ab-flex-cell"><i class="fa fa-fax"></i></div>
                    <div class ="contact-content ab-flex-cell">(+216) 71 259 855</div>
                </div>
            
                            <div class="contact-email ab-flex">
                    <div class ="contact-icon ab-flex-cell"><i class="fa fa-envelope"></i></div>
                    <div class ="contact-content ab-flex-cell">contact@dentistetunisie.com</div>
                </div>
            
        </div>

        </aside>                </div>
                                <div id="footer-2"
                     class="footer-2 footer-column left" role="complementary">
                    <aside id="timetable-2" class="widget widget_timetable"><h3 class="widget-title">Working Hours</h3>
        <div class="ab-time-table-widget">

                            <div class="time-table day7 ab-flex">
                                <div class ="time-table-label ab-flex-cell"><span style="color:red">Lunch break</span></div>
                    <div class ="ab-flex-cell">12:00am - 02:00pm</div>
                </div>
            

                            <div class="time-table day2 ab-flex">
                    <div class ="time-table-label ab-flex-cell">Mon</div>
                    <div class ="ab-flex-cell">08:00am - 06:00pm</div>
                </div>
            
                            <div class="time-table day3 ab-flex">
                    <div class ="time-table-label ab-flex-cell">Tue</div>
                    <div class ="ab-flex-cell">08:00am - 06:00pm</div>
                </div>
            
                            <div class="time-table day4 ab-flex">
                    <div class ="time-table-label ab-flex-cell">Wed</div>
                    <div class ="ab-flex-cell">08:00am - 06:00pm</div>
                </div>
            
                            <div class="time-table day5 ab-flex">
                    <div class ="time-table-label ab-flex-cell">Thur</div>
                    <div class ="ab-flex-cell">08:00am - 06:00pm</div>
                </div>
            
                            <div class="time-table day6 ab-flex">
                    <div class ="time-table-label ab-flex-cell">Fri</div>
                    <div class ="ab-flex-cell">08:00am - 06:00pm</div>
                </div>
            
                            <div class="time-table day7 ab-flex">
                    <div class ="time-table-label ab-flex-cell">Sat</div>
                    <div class ="ab-flex-cell">08:00am - 06:00pm</div>
                </div>                            

                            <div class="time-table day1 ab-flex">
                    <div class ="time-table-label ab-flex-cell">Weekend</div>
                    <div class ="ab-flex-cell">Closed</div>
                </div>
            
        </div>

        </aside>                </div>
                                <div id="footer-3"
                     class="footer-3 footer-column left" role="complementary">
                    <aside id="abnewsletterwidget-2" class="widget widget_abnewsletterwidget"><h3 class="widget-title">Newsletter</h3>

<script type="text/javascript">
//<![CDATA[
if (typeof newsletter_check !== "function") {
window.newsletter_check = function (f) {
    var re = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-]{1,})+\.)+([a-zA-Z0-9]{2,})+$/;
    if (!re.test(f.elements["ne"].value)) {
        alert("The email is not correct");
        return false;
    }
    for (var i=1; i<20; i++) {
    if (f.elements["np" + i] && f.elements["np" + i].required && f.elements["np" + i].value == "") {
        alert("");
        return false;
    }
    }
    if (f.elements["ny"] && !f.elements["ny"].checked) {
        alert("You must accept the privacy statement");
        return false;
    }
    return true;
}
}
//]]>
</script>

<div class="newsletter ab-newsletter-widget">

<script type="text/javascript">
//<![CDATA[
if (typeof newsletter_check !== "function") {
window.newsletter_check = function (f) {
    var re = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-]{1,})+\.)+([a-zA-Z0-9]{2,})+$/;
    if (!re.test(f.elements["ne"].value)) {
        alert("The email is not correct");
        return false;
    }
    for (var i=1; i<20; i++) {
    if (f.elements["np" + i] && f.elements["np" + i].required && f.elements["np" + i].value == "") {
        alert("");
        return false;
    }
    }
    if (f.elements["ny"] && !f.elements["ny"].checked) {
        alert("You must accept the privacy statement");
        return false;
    }
    return true;
}
}
//]]>
</script>

<form action="http://demo.themeamber.com/dentalcare/?na=s" onsubmit="return newsletter_check(this)" method="post"><input type="hidden" name="nr" value="widget"/><div class="ab-newsletter-email"><input class="newsletter-email" type="email" required name="ne" value="Email" onclick="if (this.defaultValue==this.value) this.value=''" onblur="if (this.value=='') this.value=this.defaultValue"/></div><div class="ab-newsletter-submit"><input class="newsletter-submit secondary-background" type="submit" value="GO"/></div></form></div></aside><aside id="ab_social_widget-2" class=" widget widget_ab_social_widget"><div class='ab-widget-social default text-left'><a class="ab-content-social" target="_blank" data-rel="tooltip" data-placement="top" data-original-title="Facebook" href="#"><i class="fa fa-facebook"></i></a><a class="ab-content-social" target="_blank" data-rel="tooltip" data-placement="top" data-original-title="Twitter" href="#"><i class="fa fa-twitter"></i></a><a class="ab-content-social" target="_blank" data-rel="tooltip" data-placement="top" data-original-title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a><a class="ab-content-social" target="_blank" data-rel="tooltip" data-placement="top" data-original-title="Google" href="#"><i class="fa fa-google-plus"></i></a></div></aside>                </div>
                        </div>
    </div>

<footer id="colophon" class="site-footer footer-bottom-area">
    <div class="site-footer-main clearfix">
        <div class="site-info left">
            &copy; 2016 Dental Care - by &copy; &nbsp;<a href="https://www.facebook.com/abdelmonaem.gzayel" target="_blank">Abdelmonaem Gzayel</a>        </div><!-- .site-info -->

        <div id="footer-menu" class="site-footer-menu">
                            <nav class="footer-navigation right" aria-label="Footer Menu">
                    <div class="menu-main-menu-container"><ul id="menu-main-menu-1" class="footer-menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-27"><a href="../index.php">Home</a>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26"><a href="../about-us/index.php">About Us</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25"><a href="./services/index.html">Services</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24"><a href="../doctors/index.php">Doctors</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-parent menu-item-has-children menu-item-430"><a href="#">Features</a>
<ul class="sub-menu">
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20"><a href="../blog/index.php">Blog</a></li>
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-454"><a href="../gallery/index.php">Gallery</a></li>
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-465"><a href="../appointment/index.php">Appointment</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-13 current_page_item menu-item-22"><a href="../contact/index.php">Contact</a></li>
</ul></div>                </nav><!-- .main-navigation -->
                    </div><!-- #site-navigation -->

    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

    <!-- scroll to top  -->
    <a href="#" class="scroll_top scroll-top"><i class="fa fa-angle-up fa-2x"></i></a>

<script type='text/javascript' src='../wp-content/themes/wp-dentalcare/js/libs62d0.js?ver=4.5.3'></script>
<script type='text/javascript' src='../wp-content/plugins/contact-form-7/includes/js/jquery.form.mind03d.js?ver=3.51.0-2014.06.20'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"http:\/\/demo.themeamber.com\/dentalcare\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","recaptchaEmpty":"Please verify that you are not a robot.","sending":"Sending ..."};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/contact-form-7/includes/js/scriptsc1f9.js?ver=4.4.2'></script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/dentalcare\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/dentalcare\/services\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min72e6.js?ver=2.6.4'></script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/jquery-cookie/jquery.cookie.min330a.js?ver=1.4.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/dentalcare\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/dentalcare\/services\/?wc-ajax=%%endpoint%%","fragment_name":"wc_fragments"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min72e6.js?ver=2.6.4'></script>
<script type='text/javascript' src='../wp-content/themes/wp-dentalcare/js/jquery.fitvids62d0.js?ver=4.5.3'></script>
<script type='text/javascript' src='../wp-content/themes/wp-dentalcare/js/jquery.parallax62d0.js?ver=4.5.3'></script>
<script type='text/javascript' src='../wp-content/themes/wp-dentalcare/js/navigation62d0.js?ver=4.5.3'></script>
<script type='text/javascript' src='../wp-content/themes/wp-dentalcare/js/skip-link-focus-fix62d0.js?ver=4.5.3'></script>
<script type='text/javascript' src='../wp-content/themes/wp-dentalcare/js/main62d0.js?ver=4.5.3'></script>
<script type='text/javascript' src='../wp-includes/js/wp-embed.min62d0.js?ver=4.5.3'></script>
<script type='text/javascript' src='../wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min2720.js?ver=4.11.2'></script>

</body>

<!-- Mirrored from demo.themeamber.com/dentalcare/services/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Aug 2016 22:23:04 GMT -->
</html>
