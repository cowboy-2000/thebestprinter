<?php
/* Template Name: Terms */
    get_header();
?>
    <main id="primary" class="site-main">
        <section class="site-main__terms terms">
            <div class="container terms__container">
                <div class="row terms__row">
                    <div class="col-md-12 terms__col">
                        <h2 class="terms__title"><?php echo get_the_category_by_ID(8); ?></h2>
                        <?php
                            $posts = get_posts( array(
                                'numberposts' => -1,
                                'category' => 8,
                                'orderby' => 'date',
                                'order' => 'ASC',
                                'post_type' => 'post',
                                'suppress_filters' => true,
                            ) );
                            foreach ($posts as $post) {
                                setup_postdata($post); ?>
                                <div class="terms__block block">
                                    <h5 class="block__title"><?php the_title(); ?></h5>
                                    <p class="block block__text"><?php the_content(); ?></p>
                                </div><!-- .block -->
                            <?php }
                            wp_reset_postdata();
                        ?>
                    </div><!-- .terms__col -->
                </div><!-- .terms__row -->
            </div><!-- .terms__container -->
        </section><!-- .terms -->
    </main>
<?php
    get_footer();
?>