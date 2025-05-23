<?php get_header();?>
    <section class="populaire">
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article>
                <h2><?php the_title(); ?></h2>
                <div><?php the_content() ?>
            </article>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <?php creer_vague_avec_gradient("#ff9a9e", "#f97316"); ?>
    <?php get_footer()?>
</body>
</html>

