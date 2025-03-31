<?php
/*
    *Template-part 404
*/
    $page_404_titre_intra = get_theme_mod('page_404_titre_intra', 'Default Title');
    $page_404_message_intra = get_theme_mod('page_404_message_intra', 'Default Title');
    $background_404_intra = get_theme_mod('background_404_intra', '');
    $couleur_404 = get_theme_mod('page_404_intra', '');

?>
<div class = "page404_intra" style="background-image: url(<?php echo $background_404_intra ?>)";>
        <h1><?php echo $page_404_titre_intra; ?></h1>
        <h3><?php  echo $page_404_message_intra; ?></h3>
        <p><a href="<?php echo home_url(); ?>" class="page404_intra__btn">Retour à l'accueil</a></p>
        <?php wp_nav_menu(array(
          "menu" => "suggestions",
          "container" => "nav",
        )); ?>
</div>