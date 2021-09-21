<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 */

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
	<link rel="stylesheet" href="//cdn.jsdelivr.net/jquery.sidr/2.2.1/stylesheets/jquery.sidr.light.min.css">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

    <header class="site-header absolute inset-x-0 top-0 pt-10 white z-50">
        <div class="container inner-wrapper flex items-center">
			<div class="site-branding mr-auto flex-shrink-0"><a href="/" class="gilroybold text-4xl">Payday Loans&trade;</a></div>
			<div class="main-menu sidr-right">
				<ul class="flex items-center">
					<li><a href="#">Home</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">FAQ</a></li>
					<li><a href="#">Privacy Policy</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>
			</div>
			<div class="contact-info flex-shrink-0">
				<a href="#" class="gilroybold gradient-btn">1 (234) 567-89-01</a>
			</div>
			<button id="burger-menu" class="burger-btn-menu xl:hidden" type="button">
				<i class="burger-btn-menu__bars" aria-hidden="true"></i>
			</button>
			<div id="sidr" class="sidr-menu grey">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">FAQ</a></li>
					<li><a href="#">Privacy Policy</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>
			</div>
		</div>
    </header>

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
