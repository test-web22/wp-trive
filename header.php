<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trive, explore the world with us</title>
	<?php wp_head(); ?>
</head>

<body>
	<div class="wrapper">
		<header class="header">
			<div class="header__container">
				<?php echo get_custom_logo(); ?>
				<nav class="header__menu menu">
					<div class="menu__body">
						<ul class="menu__list">
							<li class="menu__item">
								<a href="" class="menu__link">Home</a>
							</li>
							<li class="menu__item">
								<a href="#" class="menu__link">About</a>
							</li>
							<li class="menu__item">
								<a href="#" class="menu__link">Features</a>
							</li>
							<li class="menu__item">
								<a href="#trending" class="menu__link">Blog</a>
							</li>
							<li class="menu__item">
								<a href="contact" class="menu__link">Contact</a>
							</li>
						</ul>
					</div>
				</nav>
				<a href="#" class="header__button button">Sign up</a>
				<button class="icon-menu" type="button">
					<span></span>
				</button>
			</div>
		</header>