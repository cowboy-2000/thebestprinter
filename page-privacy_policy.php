<?php
/* Template Name: Privacy Policy */
    get_header();
?>
    <main id="primary" class="site-main">
        <section class="site-main__privacy_policy privacy_policy">
            <div class="container privacy_policy__container">
                <div class="row privacy_policy__row">
                    <div class="col-md-12 privacy_policy__col">
                        <h2 class="privacy_policy__title"><?php echo get_the_category_by_ID(6); ?></h2>
                        <?php
                            $posts = get_posts( array(
                                'numberposts' => -1,
                                'category' => 6,
                                'orderby' => 'date',
                                'order' => 'ASC',
                                'post_type' => 'post',
                                'suppress_filters' => true,
                            ) );
                            foreach ($posts as $post) {
                                setup_postdata($post); ?>
                                <div class="privacy_policy__block block">
                                    <h5 class="block__title"><?php the_title(); ?></h5>
                                    <p class="block block__text"><?php the_content(); ?></p>
                                </div><!-- .block -->
                            <?php }
                            wp_reset_postdata();
                        ?>
                    </div><!-- .privacy_policy__col -->
                </div><!-- .privacy_policy__row -->
            </div><!-- .privacy_policy__container -->
        </section><!-- .privacy_policy -->
    </main>
<?php
    get_footer();
?>