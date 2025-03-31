<?php
/*
    *Template-part 404
*/
    $page_404_titre = get_theme_mod('page_404_titre', 'Default Title');
    $page_404_message = get_theme_mod('page_404_message', 'Default Title');
    $page_404_suggestions = get_theme_mod('page_404_suggestions', 'Default Title');
    $background_404 = get_theme_mod('background_404', '');

?>
<div class = "page404" style="background-image: url(<?php echo $background_404 ?>)";>
        <h1><?php echo $page_404_titre; ?></h1>
        <h3><?php  echo $page_404_message; ?></h3>
        <p><?php  echo $page_404_suggestions; ?></p>
        <?php wp_nav_menu(array(
          "menu" => "suggestions",
          "container" => "nav",
        )); ?>
        <?php  get_search_form() ?>
        <p><a href="<?php echo home_url(); ?>" class="page404__btn">Retour à l'accueil</a></p>
        <div class= "page404__icones">
          <?php  get_template_part('gabarits/icones'); ?>
        </div>
</div>