<?php
/*
Template Name: Pays
*/
get_header();
$pays = [
    'France', 'États-Unis', 'Canada', 'Argentine', 'Chili', 'Italie',
    'Islande', 'Chine', 'Grèce', 'Suisse', 'Japon', 'Maroc', 'Belgique', 'Mexique'
  ];
?>
<section class="populaire">
    <div class="global">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <h2><?php the_title(); ?></h2>
            <div><?php the_content() ?>
        <?php endwhile; endif; ?>
        <h2><?php the_field('titre_evenement'); ?></h2>
        <h2>Date de l'événement :</h2>
        <?php the_field('date_evenement'); ?></p>
        <h2>Description de l'événement</h2>
         <p><?php the_field('description_evenement'); ?></p>
        <!-- ////////////////////////////////////////////////  section rest-api -->
        <section class="destination">
            <h2 class="destination__titre">Articles de la catégorie</h2>
            <div class="menu-pays">
            <?php foreach ($pays as $nom): ?>
                <button class="menu-pays__bouton" data-search="<?= esc_attr($nom) ?>">
                <?= esc_html($nom) ?>
                </button>
            <?php endforeach; ?>
            </div>
            <div class="destination__list"></div>
        </section>
    </div>
</section>

<?php get_footer(); ?>