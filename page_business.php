<?php
/* Template Name: Business */
    get_header();
?>
    <main id="primary" class="site-main">
        <section class="site-main__business business">
            <div class="container business__container">
                <div class="row business__row">
                    <div class="col-md-12 business__col">
                        <h2 class="business__title"><?php echo get_the_category_by_ID(9); ?></h2>
                        <?php
                            $posts = get_posts( array(
                                'numberposts' => -1,
                                'category' => 9,
                                'orderby' => 'date',
                                'order' => 'ASC',
                                'post_type' => 'post',
                                'suppress_filters' => true,
                            ) );
                            foreach ($posts as $post) {
                                setup_postdata($post); ?>
                                <div class="business__block block">
                                    <h5 class="block__title"><?php the_title(); ?></h5>
                                    <p class="block block__text"><?php the_content(); ?></p>
                                </div><!-- .block -->
                            <?php }
                            wp_reset_postdata();
                        ?>
                    </div><!-- .business__col -->
                </div><!-- .business__row -->
            </div><!-- .business__container -->
        </section><!-- .business -->
    </main>
<?php
    get_footer();
?>