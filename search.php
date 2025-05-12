<?php
/**
 * Modèle pour les résultats de recherche
 */
get_header();
?>
<main class="site__main">
    <section class="recherche__section">
        <?php if (have_posts()) : ?>
            <h2 class="recherche__titre">
                <?php
                    global $wp_query;
                    $nombre_resultats = $wp_query->found_posts;
                    echo $nombre_resultats . ' résultat' . ($nombre_resultats > 1 ? 's' : '') . ' trouvé' . ($nombre_resultats > 1 ? 's' : '') . ' pour : "' . get_search_query() . '"';
                ?>
            </h2>
            <?php while (have_posts()) : the_post(); ?>
                <article>
                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <p><?php echo wp_trim_words(get_the_excerpt(), 60); ?></p>
                    <hr>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p>Aucun résultat trouvé pour : "<?php echo get_search_query(); ?>"</p>
        <?php endif; ?>
    </section>
</main>
<?php get_footer(); ?>
