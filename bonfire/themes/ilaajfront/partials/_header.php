<?php 
	Assets::add_css(array(
			'jquery-ui.min.css',
			'animate.css',
			'font-awesome.min.css',
			'blue.css',
			'settings.min.css',
			'slides.css',
			'inline.min.css',
			'custom.css',
			'jquery.fancybox.css'
		));
		
	Assets::add_js(array(
			'jquery.min.js',
			'jquery-ui.min.js',
			'bootstrap.min.js',
			'jquery.themepunch.tools.min.js',
			'jquery.themepunch.revolution.min.js',
			'jquery.scrollUp.min.js',
			'jquery.sticky.min.js',
			'wow.min.js',
			'jquery.flexisel.min.js',
			'jquery.imedica.min.js',
			'custom-imedicajs.min.js',
			'ilaaj.js',
			'jquery.fancybox.js',
			'jssor.slider.js',
			'jssor.js'
		));	
?>

<!DOCTYPE HTML>
<html class="ihome">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title><?php echo isset($toolbar_title) ? $toolbar_title .' : ' : ''; ?> <?php echo $this->settings_lib->item('site.title') ?></title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic' rel='stylesheet' type='text/css'>
    <?php echo Assets::css(); ?>
    <link rel="icon" type="image/png" href="<?php echo Template::theme_url('images/fevicon.png');?>">
</head>
<body>
	
<div id="loader-overlay"><img src="<?php echo Template::theme_url('images/loader.gif');?>" alt="Loading" /></div>
<header>
<div class="header-bg">