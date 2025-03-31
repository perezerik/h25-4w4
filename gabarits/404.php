<?php
/*
    *Template-part 404
*/
    $page_404_titre_intra = get_theme_mod('page_404_titre_intra', 'Default Title');
    $page_404_message_intra = get_theme_mod('page_404_message_intra', 'Default Title');
    $background_404_intra = get_theme_mod('background_404_intra', '');
    $couleur_404 = get_theme_mod('couleur_404', '');

?>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
</style>
<div class = "page404_intra" style="background-image: url(<?php echo $background_404_intra ?>); color: <?php echo $couleur_404?>";>
        <h1><?php echo $page_404_titre_intra; ?></h1>
        <h3><?php  echo $page_404_message_intra; ?></h3>
        <p><a href="<?php echo home_url(); ?>" class="page404_intra__btn">Retour à l'accueil</a></p>
        <?php wp_nav_menu(array(
          "menu" => "suggestions",
          "container" => "nav",
        )); ?>
</div>