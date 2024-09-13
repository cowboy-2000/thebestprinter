<?php
/* Template Name: Catalog */
    get_header();
?>
    <main id="primary" class="site-main">
        <section class="site-main__catalog catalog">
            <div class="container catalog__container">
                <div class="row catalog__row">
                    <div class="col-md-12 catalog__col">
                        <h2 class="catalog__title"><?php echo get_the_category_by_ID(5); ?></h2>
                    </div><!-- .catalog__col -->
                </div><!-- .catalog__row -->
                <div class="row catalog__row">
                    <?php
                        $posts = get_posts( array(
                            'numberposts' => -1,
                            'category' => 5,
                            'orderby' => 'date',
                            'order' => 'ASC',
                            'post_type' => 'post',
                            'suppress_filters' => true,
                        ) );
                        foreach ($posts as $post) {
                            setup_postdata($post); ?>
                            <div class="col-md-4 catalog__col">
                                <div class="catalog__product product">
                                    <?php if (get_field('is_discount') == 'Yes') { ?>
                                        <p class="product__discount">Скидка</p>
                                    <?php } ?>
                                    <img class="product__image" src="<?php the_post_thumbnail_url(); ?>" alt="">
                                    <h5 class="product__title"><?php the_title(); ?></h5>
                                    <p class="product__text"><?php the_content(); ?></p>
                                    <?php if (get_field('is_discount') == 'Yes') { ?>
                                        <span class="product__price product__price--old_price"><?php the_field('old_price'); ?></span>
                                    <?php } ?>
                                    <span class="product__price product__price--new_price"><?php the_field('price'); ?></span>
                                </div><!-- .product -->
                            </div><!-- .catalog__col -->
                        <?php }
                        wp_reset_postdata();
                    ?>
                </div><!-- .catalog__row -->
            </div><!-- .catalog__container -->
        </section><!-- .catalog -->
    </main>
<?php
    get_footer();
?>