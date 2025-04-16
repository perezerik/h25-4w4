<?php  
    $footer_adresse = get_theme_mod('footer_adresse', 'Default Title');  
    $footer_telephone = get_theme_mod('footer_telephone', 'Default Title');  
    $footer_mission = get_theme_mod('footer_mission', 'Default Title'); 
  ?>
<svg class="vague" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ec880d" fill-opacity="1" d="M0,64L40,106.7C80,149,160,235,240,229.3C320,224,400,128,480,117.3C560,107,640,181,720,229.3C800,277,880,299,960,261.3C1040,224,1120,128,1200,117.3C1280,107,1360,181,1400,218.7L1440,256L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
<footer>
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
        <div class="piedpage__s1_mission_texte">
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