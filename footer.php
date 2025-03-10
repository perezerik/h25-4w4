<?php  
    $footer_adresse = get_theme_mod('footer_adresse', 'Default Title');  
    $footer_telephone = get_theme_mod('footer_telephone', 'Default Title');  
    $footer_mission = get_theme_mod('footer_mission', 'Default Title'); 
  ?>
<footer>
  <div class="piedpage global">
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
        <div class="piedpage__s1_mission_texte">
          <?php  echo $footer_mission; ?>
        </div>
      </div>
    </section>
    <section class="piedpage__s2">
      <div class="hero__icone">
              <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
              <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="20" height="20">
              <img src="https://s2.svgbox.net/social.svg?ic=wordpress&color=000000" width="20" height="20">
              <img src="https://s2.svgbox.net/social.svg?ic=snapchat&color=000000" width="20" height="20">
              <img src="https://s2.svgbox.net/social.svg?ic=discord&color=000000" width="20" height="20">
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