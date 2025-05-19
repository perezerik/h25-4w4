<?php
    $default_thumbnail = get_theme_mod('default_post_thumbnail');
?>
<?php get_header();?>
    <section class="populaire">
        <div class="global single-post">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article>
                    <div class="haut-page">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('large'); ?>
                    <?php else : 
                        if ($default_thumbnail): ?>
                            <img src="<?php echo esc_url($default_thumbnail); ?>" alt="Image par défaut">
                        <?php endif; ?>
                    <?php endif; ?>
                            <h2><?php the_title(); ?></h2>
                            <p>Par <?php the_author(); ?> | Publié le <?php the_time('j F Y'); ?></p>
                    </div>
                    
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

