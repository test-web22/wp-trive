<?php
/*
Template Name: home
*/
?>
<?php get_header(); ?>
		<main class="page">
			<section class="page__main main">
				<div class="main__container">
					<div class="main__search search">
						<h1 id="home" class="search__title">Travel more, create more memories.</h1>
						<div class="search__text">
							<p>A Tram of devoted and experienced tourism professionssionals will provide you with the best
								advice and tips.</p>
						</div>
						<form action="#" class="search__form form-search">
							<div class="form-search__body">
								<div class="form-search__item">
									<div class="form-search__label">Tour Name</div>
									<select class="form-search__select">
										<option value="-" selected>-</option>
										<option value="Adventure">Adventure</option>
										<option value="Recreational">Recreational</option>
										<option value="Cultural">Cultural</option>
									</select>
								</div>
								<div class="form-search__item">
									<div class="form-search__label">Popular Tour</div>
									<select class="form-search__select">
										<option value="-" selected>-</option>
										<option value="The Colosseum">The Colosseum, Rome</option>
										<option value="Eiffel Tower">Eiffel Tower, Paris</option>
										<option value="Machu Picchu">Machu Picchu, Peru</option>
										<option value="Pyramids of Giza">Pyramids of Giza, Egypt</option>
									</select>
								</div>
								<div class="form-search__item">
									<div class="form-search__label">Average Price</div>
									<select class="form-search__select">
										<option value="-" selected>-</option>
										<option value="from 100$ to 200$">100$ - 200$</option>
										<option value="from 200$ to 400$">200$ - 400$</option>
										<option value="from 400$ to 800$">400$ - 800$</option>
										<option value="from 800$ to">from 800$ to</option>
									</select>
								</div>
							</div>
							<button type="submit" class="form-search__button button">Search</button>
						</form>
					</div>
					<div class="main__images images-main">
						<div class="images-main__column">
							<div class="images-main__img images-main__img--1">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/main/01.jpg" alt="images-main">
							</div>
							<div class="images-main__img images-main__img--2">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/main/02.jpg" alt="images-main">
							</div>
						</div>
						<div class="images-main__column">
							<div class="images-main__img images-main__img--3">
								<img src="<?php bloginfo('template_url'); ?>/assets/img/main/03.jpg" alt="images-main">
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="page__partners partners-page">
				<div class="partners-page__container">
					<div class="partners-page__item">
						<img src="<?php bloginfo('template_url'); ?>/assets/img/partners/01.svg" alt="partners">
					</div>
					<div class="partners-page__item">
						<img src="<?php bloginfo('template_url'); ?>/assets/img/partners/02.svg" alt="partners">
					</div>
					<div class="partners-page__item">
						<img src="<?php bloginfo('template_url'); ?>/assets/img/partners/03.svg" alt="partners">
					</div>
					<div class="partners-page__item">
						<img src="<?php bloginfo('template_url'); ?>/assets/img/partners/04.svg" alt="partners">
					</div>
				</div>
			</section>
			<section class="page__explore explore-page">
				<div class="explore-page__container">
						<?php echo do_shortcode('[smartslider3 slider="2"]');?>
					<div class="explore-page__content">
						<div class="explore-page__title">A new way to explore the world </div>
						<div class="explore-page__text">
							<p>
								For decades travellers have reached for Lonely Planet books when looking to plan and execute
								their perfect
								trip, but now, they can also let Lonely Planet Experiences lead the way
							</p>
						</div>
						<a href="#" class="explore-page__button button">Learn more</a>
					</div>
				</div>
			</section>
			<section class="page__destinations destinations-page">
				<div class="destinations-page__container">
					<div class="destinations-page__content">
						<h2 class="destinations-page__title">Popular destinations</h2>
						<a href="#" class="destinations-page__button button">View all</a>
					</div>
					<div class="destinations-page__popular">
						<div class="destinations-page__items">
							<div class="destinations-page__column">
								<div class="destinations-page__image">
									<img src="<?php bloginfo('template_url'); ?>/assets/img/destinations/01.jpg"
										alt="popular-destinations">
								</div>
								<a href="#" class="destinations-page__rating rating">
									<h3 class="rating__title">Bali, Indonesia</h3>
									<div class="rating__body">
										<div class="rating__stars">
											<img src="<?php bloginfo('template_url'); ?>/assets/img/destinations/star.png" alt="star">
											<div class="rating__value">5.0 Superb</div>
										</div>
										<div class="rating__price">$360</div>
									</div>
								</a>
							</div>
							<div class="destinations-page__column">
								<div class="destinations-page__image">
									<img src="<?php bloginfo('template_url'); ?>/assets/img/destinations/02.jpg"
										alt="popular-destinations">
								</div>
								<a href="#" class="destinations-page__rating rating">
									<h3 class="rating__title">Tokya, Japan</h3>
									<div class="rating__body">
										<div class="rating__stars">
											<img src="<?php bloginfo('template_url'); ?>/assets/img/destinations/star.png" alt="star">
											<div class="rating__value">3.9 Good</div>
										</div>
										<div class="rating__price">$429</div>
									</div>
								</a>
							</div>
							<div class="destinations-page__column">
								<div class="destinations-page__image">
									<img src="<?php bloginfo('template_url'); ?>/assets/img/destinations/03.jpg"
										alt="popular-destinations">
								</div>
								<a href="#" class="destinations-page__rating rating">
									<h3 class="rating__title">Dylan, Turkey</h3>
									<div class="rating__body">
										<div class="rating__stars">
											<img src="<?php bloginfo('template_url'); ?>/assets/img/destinations/star.png" alt="star">
											<div class="rating__value">5.0 Superb</div>
										</div>
										<div class="rating__price">$490</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="page__testimonials testimonials-page">
				<div class="testimonials-page__container">
					<div class="testimonials-page__content">
						<h2 class="testimonials-page__title">Testimonials</h2>
						<div class="testimonials-page__text">
							<p>
								“Quisque in lacus a urna fermentum euismod. Integer mi nibh, dapibus ac scelerisque eu,
								facilisis quis purus. Morbi
								blandit sit amet turpis nec”
							</p>
						</div>
						<div class="testimonials-page__who">Benjamin Noah.</div>
						<div class="testimonials-page__position">Founder Circle</div>
					</div>
					<div class="testimonials-page__image">
						<img src="<?php bloginfo('template_url'); ?>/assets/img/testimonials/image.png" alt="image">
					</div>
				</div>
			</section>
			<section class="page__trending trending-page">
				<div class="trending-page__container">
					<div class="trending-page__content">
						<h2 id="trending" class="trending-page__title">Trending stories</h2>
						<a href="#" class="trending-page__button button button--nb">View all</a>
					</div>
					<div class="trending-page__items items-trending-page">
						<?php
						global $post;
						$myposts = get_posts([ 
							'numberposts' => 4,
							'category'		=> 2
						]);

						if( $myposts ){
							foreach( $myposts as $post ){
								setup_postdata( $post );
								?>
							<div class="items-trending-page__item">
							<?php the_post_thumbnail(); ?>
							<div class="items-trending-page__body">
								<div class="items-trending-page__location">
									<span><?php the_content(); ?></span>
								</div>
								<h3 class="items-trending-page__title"><?php the_title(); ?></h3>
							</div>
						</div>
						<?php }} wp_reset_postdata(); ?>
					</div>
				</div>
			</section>
			<section class="page__subscribe subscribe-page">
				<div class="subscribe-page__container">
					<div class="subscribe-page__content">
						<div class="subscribe-page__title">Subscribe to Our Newsletter! To get Latest News of Us.</div>
					</div>
					<form action="#" class="subscribe-page__subscribe subscribe">
						<div id="subform" class="subscribe__body">
							<div class="subscribe__inputbox">
								<input type="text" id="email" onkeydown="validation()" name=""
									placeholder="Type Email Address Here" class="subscribe__input">
							</div>
							<button type="submit" class="subscribe__button button">Subscribe</button>
						</div>
						<span id="subscribe_text" class="subscribe__text"></span>
					</form>
				</div>
			</section>
		</main>
		<?php get_footer(); ?>