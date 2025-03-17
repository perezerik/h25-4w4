<?php get_header();?>
<h1 class="categorie__titre"><?php  single_cat_title(); ?></h1>
<div class="categorie__description"><?php  echo category_description(); ?></div>
    <section class="populaire">
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php get_template_part('gabarits/carte'); ?>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <?php get_footer()?>
</body>
</html>

