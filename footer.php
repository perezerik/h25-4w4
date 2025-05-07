<?php  
    $footer_adresse = get_theme_mod('footer_adresse', 'Default Title');  
    $footer_telephone = get_theme_mod('footer_telephone', 'Default Title');  
    $footer_mission = get_theme_mod('footer_mission', 'Default Title'); 
    $footer_couleur = get_theme_mod('footer_couleur', 'Default Title');

    $footer_image_destination = get_theme_mod('footer_image_destination');

    genere_vague($footer_couleur);
?>

<footer style="background-color: <?= $footer_couleur ?>">
  <div class="piedpage">
    <section class="piedpage__s1">
      <div class="piedpage__s1__externe">
        <h4>LIENS SUR LES VOYAGES</h4>
        <?php wp_nav_menu(array(
          "menu" => "externe",
          "container" => "nav",
        )); ?>
        
      </div>
      <div class="piedpage__s1__adresse">
        <h4>ADRESSE ET RECHERCHE</h4>
        <div class="piedpage__s1__adresse__coord">
          <?php  echo $footer_adresse; ?>
        </div>
        <div class="piedpage__s1__description">
          Téléphone: <?php  echo $footer_telephone; ?>
        </div>
        <div class="piedpage__s1__adresse__recherche">
          <?php get_search_form(); ?>
        </div>
      </div>
      <div class="piedpage__s1__mission">
         <h4>MISSION DU CLUB</h4>
        <div class="piedpage__s1__mission__background" style="background-image: url(<?php echo esc_url($footer_image_destination); ?>);"></div>
        <div class="piedpage__s1__mission__texte">
          <?php  echo $footer_mission; ?>
        </div>
      </div>
    </section>

    <section class="piedpage__s2">
      <div class="piedpage__s2__icone">
        <?php  get_template_part('gabarits/icones'); ?>
      </div>
      <?php wp_nav_menu(array(
                    "menu" => "principal",
                    'container' => 'nav',
                    'container_class' => 'entete__menu'
                )); ?>
    </section>
  </div>
</footer>

<?php wp_footer() ?>