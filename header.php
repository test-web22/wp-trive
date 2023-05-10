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
					<?php wp_nav_menu(array(
					'theme_location' => 'top',
					'container' => null,
					'menu_class' => 'menu__list'//<ul>....</ul>
				)); ?>
					</div>
				</nav>
				<a href="#" class="header__button button">Sign up</a>
				<button class="icon-menu" type="button">
					<span></span>
				</button>
			</div>
		</header>