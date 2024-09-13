<?php
/* Template Name: Contacts */
    get_header();
?>
    <main id="primary" class="site-main">
        <section class="site-main__contacts contacts">
            <div class="container contacts__container">
                <div class="row contacts__row">
                    <div class="col-md-12 contacts__col">
                        <h2 class="contacts__title"><?php the_field('contacts_title'); ?></h2>
                        <p class="contacts__text">Адрес: <?php the_field('address'); ?></p>
                        <p class="contacts__text">Телефон: <?php the_field('telephone'); ?></p>
                        <p class="contacts__text">E-mail: <?php the_field('email'); ?></p>
                        <p class="contacts__text">Рабочее время: <?php the_field('work_time'); ?></p>
                        <?php echo do_shortcode('[contact-form-7 id="45" title="Reviews"]'); ?>
                        <div class="wrapper" id="wrapper"></div>
                        <div class="popup" id="popup">
                            <p class="popup__text">Благодарим за ваши отзыв</p>
                        </div>
                    </div><!-- .contacts__col -->
                </div><!-- .contacts__row -->
            </div><!-- .contacts__container -->
        </section><!-- .contacts -->
    </main>
<?php
    get_footer();
?>