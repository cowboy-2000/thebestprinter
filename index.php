<?php
<<<<<<< HEAD
// Silence is golden.
=======
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package the_best_printer
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section class="site-main__description description">
			<div class="container description__container">
				<div class="row description__row">
					<div class="col-md-12 description__col">
						<h2 class="description__title"><?php the_field('title_content'); ?></h2>
						<p class="description__text"><?php the_field('text_content'); ?></p>
					</div><!-- .description__col -->
				</div><!-- .description__row -->
			</div><!-- .description__container -->
		</section><!-- .description -->
		<section class="site-main__reviews reviews">
			<div class="container reviews__container">
				<div class="row reviews__row">
					<div class="col-md-12 reviews__col">
						<h2 class="reviews__title"><?php echo get_the_category_by_ID(4); ?></h2>
					</div><!-- .reviews__col -->
				</div><!-- .reviews__row -->
				<div class="row reviews__row">
					<?php
						$posts = get_posts( array(
							'numberposts' => 2,
							'category' => 4,
							'orderby' => 'date',
                            'order' => 'DESC',
                            'post_type' => 'post',
                            'suppress_filters' => true,
						) );
						foreach ($posts as $post) {
							setup_postdata($post); ?>
							<div class="col-md reviews__col">
								<article class="reviews__review review">
									<h5 class="review__title"><?php the_title(); ?></h5>
									<p class="review__text"><?php the_content(); ?></p>
									<time class="review__date" datetime="<?php echo get_the_date('Y-m-d'); ?>">
										<?php echo get_the_date('Y-m-d'); ?>
									</time>
								</article>
							</div><!-- .reviews__col -->
						<?php }
						wp_reset_postdata();
					?>
				</div><!-- .reviews__row -->
			</div><!-- .reviews__container -->
		</section><!-- .reviews -->

	</main><!-- #main -->

<?php
get_footer();
>>>>>>> 28de462c9f05cdd61efca00522c8a6a726287711
