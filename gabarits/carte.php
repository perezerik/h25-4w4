<?php
/*
    *Template-part carte
*/
?>

<article class="carte carte--grande">
  <div class="carte__contenu">
    <?php
      if (has_post_thumbnail()) {
        the_post_thumbnail('thumbnail'); }  
    ?>
    <h4 class="carte__titre">
      <a href="<?php the_permalink() ?>" class="carte__titre__lien">
        <?php the_title(); ?>
      </a>
    </h4>
    <p class="carte__description"><?php echo wp_trim_words(get_the_content(),10, " ... " ); ?></p>
    <?php
      $categories = get_the_category();
      $categorie_actuelle = get_queried_object();

      if (is_category() && $categorie_actuelle) {
        echo '<ul class="post-categories">';
        foreach ($categories as $categorie) {
          if ($categorie->slug != $categorie_actuelle->slug) {
            echo '<li><a href="' . get_category_link($categorie->term_id) . '">' . $categorie->name . '</a></li>';
          }
        }
        echo '</ul>';
      } else {
        the_category();
      }
    ?>
    <p>Température maximum : <?php the_field('temperature_maximum'); ?> C</p>
  </div>
</article>
