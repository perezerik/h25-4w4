<?php get_header();?>
    <section class="populaire">
        <div class="global single__post">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article>
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('large'); ?>
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/default.jpg" alt="Image par défaut">
                    <?php endif; ?>
                        <h2><?php the_title(); ?></h2>

                        <div class="categories">
                            <?php the_category(); ?>
                        </div>
                        

                        <div class="description">
                            <div><?php the_content() ?>
                        </div>

                        <div class="temperatures">
                            <p>Température maximum : <?php  the_field('temperature_maximum'); ?> C&#176; </p>
                            <p>Température minimum : <?php  the_field('temperature_minimum'); ?> C&#176;</p>
                            <p>Température moyenne : <?php  the_field('temperature_moyenne'); ?> C&#176;</p>
                        </div>
                </article>
            <?php endwhile; endif; ?>
        </div>
    </section>
<?php get_footer()?>
</body>
</html>

