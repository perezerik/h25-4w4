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
<script>
    window.addEventListener("DOMContentLoaded", () => {
        fetchArticles({ search: "France" });
    });
</script>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="template__pays">
            <h2><?php the_title(); ?></h2>
            <div><?php the_content(); ?></div>
        </article>
        <?php endwhile; endif; ?>
<?php creer_vague_avec_gradient("#ff9a9e", "#f97316"); ?>
<section class="populaire" style="background-color:#f97316" >

    <div class="global" >
        <div class="evenement">
            <h2><?php the_field('titre_evenement'); ?></h2>
            <h2>Date du prochain événement</h2>
            <p><?php the_field('date_evenement'); ?></p>
            <h2>Coordonnées de l'évènement</h2>
            <p><?php the_field('coordonne_evenement'); ?></p>
        </div>

        <!-- ////////////////////////////////////////////////  section rest-api -->
        
        <section class="destination">
            <h2 class="destination__titre pays__nom">Pays</h2>
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