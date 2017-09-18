
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="Base Template for HTML - Just another Templatation Themes playground site">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="http://ttplay.wpengine.com/basewptemplate/xmlrpc.php">
    <title><?php bloginfo('name');?></title>
    <link rel='dns-prefetch' href='//s.w.org' />
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
    <link rel='https://api.w.org/' href='http://ttplay.wpengine.com/basewptemplate/wp-json/' />
    <style type="text/css">
    .recentcomments a {
        display: inline !important;
        padding: 0 !important;
        margin: 0 !important;
    }
    </style>
	
	<style>
	#loader-wrapper {
		position: fixed;
		left: 0;
		top: -100px;
		right: 0;
		bottom: -100px;
		background: #fff;
		z-index: 1000;
	}
    </style>

    <!-- FONTS START-->
    <link href="https://fonts.googleapis.com/css?family=Lobster+Two:700%7COpen+Sans:300i,400i,600,600i,700,700i%7CPacifico%7CRoboto:500,700" rel="stylesheet">
    <!-- FONTS END -->

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/img/favicon.ico" />    
    <?php wp_head();?>
</head>

<body class="home blog hfeed">

    <!-- LOADER START -->
    <div id="loader-wrapper">
	
	</div>
    <!-- LOADER END -->

	<!-- PAGE WRAPPER START -->
    <div id="page" class="hfeed site">
        
        <!-- HEADER START -->
        <div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">
            <a class="skip-link screen-reader-text sr-only" href="#content">Skip to content</a>
            <nav class="navbar navbar-dark site-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
            	<img class="menu-bottom" src="<?php echo get_template_directory_uri();?>/img/menu-bg.png" alt="">
                <div class="container">
                    <div class="navbar-header">
                        
                        <!-- RESPONSIVE MENU START -->
                        <button class="navbar-toggle hidden-lg-up" type="button" data-toggle="collapse" data-target=".exCollapsingNavbar">
                            <span class="sr-only"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- RESPONSIVE MENU END -->

                        <!-- HEADER LOGO START -->
                        <a class="navbar-brand" href="<?php home_url();?>" title="logo" rel="home"><img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt=""></a>
                        <!-- HEADER LOGO END -->
                    </div>

                    <!-- HEADER NAVIGATION START -->
                    <div class="collapse navbar-toggleable-md exCollapsingNavbar">
                        <?php wp_nav_menu( array( 
                            'theme_location' => 'menu222',
                            'container' => 'section', 
                            'menu_class' => 'nav navbar-nav',
                            'menu_id'        => 'main-menu'
                            ) ); ?>
                        <!--<ul id="main-menu" class="nav navbar-nav">
                            <li id="menu-item-1340" class="menu-item menu-item-type-custom menu-item-object-custom nav-item menu-item-1340">    <a title="home" href="#" class="nav-link">Home</a>
                            </li>
                            <li id="menu-item-1341" class="active menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nav-item menu-item-1341 dropdown">
                                <a title="menu" href="#" class="nav-link">menu</a>
                                <i class="fa fa-angle-down"></i>
                                <ul role="menu" class="dropdown-menu">
                                    <li id="menu-item-1344" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children nav-item menu-item-1344 dropdown-submenu">
                                        <a title="level-2" href="#" class="nav-link">level-2</a>
                                        <i class="fa fa-angle-right"></i>
                                        <ul role="menu" class=" dropdown-menu">
                                            <li id="menu-item-1342" class="menu-item menu-item-type-custom menu-item-object-custom nav-item menu-item-1342">
                                                <a title="level-3" href="#" class="nav-link">level-3</a>
                                            </li>
                                            <li id="menu-item-1343" class="menu-item menu-item-type-custom menu-item-object-custom nav-item menu-item-1343">
                                                <a title="level-3-1" href="#" class="nav-link">level-3-1</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li id="menu-item-1401" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nav-item menu-item-1401">
                                <a title="how to order" href="#" class="nav-link">how to order</a>
                            </li>
                            <li id="menu-item-1402" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-has-children nav-item menu-item-1402">
                                <a title="our story" href="#" class="nav-link">our story</a>
                            </li>
                            <li id="menu-item-1403" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-has-children nav-item menu-item-1402">
                                <a title="learn" href="#" class="nav-link">learn</a>
                            </li>
                            <li id="menu-item-1404" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-has-children nav-item menu-item-1402">
                                <a title="blog" href="#" class="nav-link">blog</a>
                            </li>
	                       <li id="menu-item-1405" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-has-children nav-item menu-item-1402">
                                <a title="contact" href="#" class="nav-link">contact</a>
                            </li>
                        </ul>-->
                        <div class="tt-icon-wrapp">
                            <div class="tt-icon-inner">
                                <a href="#"><i class="fa fa-search tt-s-popup-btn" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="tt-amount">3</span></a>
                            </div>
                        </div>
                    </div>
                    <!-- HEADER NAVIGATION END -->








                </div>
            </nav>
        </div>
        <!-- HEADER END -->