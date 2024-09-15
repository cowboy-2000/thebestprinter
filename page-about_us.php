<?php
/* Template Name: About Us */
    get_header();
?>
    <main id="primary" class="site-main">
        <section class="site-main__about_us about_us">
            <div class="container about_us__container">
                <div class="row about_us__row">
                    <div class="col-md-12 about_us__col">
                        <h2 class="about_us__title"><?php the_field('about_us_title'); ?></h2>
                        <p class="about_us__text"><?php the_field('about_us_text'); ?></p>
                    </div><!-- .about_us__col -->
                </div><!-- .about_us__row -->
                <div class="row about_us__row">
                    <?php
                        $posts = get_posts( array(
                            'numberposts' => -1,
                            'category' => 3,
                            'orderby' => 'date',
                            'order' => 'ASC',
                            'post_type' => 'post',
                            'suppress_filters' => true,
                        ) );
                        foreach ($posts as $post) {
                            setup_postdata($post); ?>
                            <div class="col-md-3 about_us__col">
                                <div class="about_us__participant participant">
                                    <img class="participant__image" src="<?php the_post_thumbnail_url(); ?>" alt="">
                                    <h5 class="participant__title"><?php the_title(); ?></h5>
                                    <p class="participant__text"><?php the_content(); ?></p>
                                </div><!-- .participant -->
                            </div><!-- .about_us__col -->
                        <?php }
                        wp_reset_postdata();
                    ?>
                </div><!-- .about_us__row -->
            </div><!-- .about_us__container -->
        </section><!-- .about_us -->
    </main>
<?php
    get_footer();
?>