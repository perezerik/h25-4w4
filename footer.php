<footer>
  <div class="piedpage global">
    <section class="piedpage__s1">
      <div class="piedpage__s1__externe">
        LIENS SUR LES VOYAGES
        <?php wp_nav_menu(array(
          "menu" => "externe",
          "container" => "nav",
        )); ?>
        
      </div>
      <div class="piedpage__s1__adresse">
        ADRESSE ET RECHERCHE
        <div class="piedpage__s1__adresse__coord">
          5800 Sherbrooke-est Montréal (Québec) H1X 2A2
        </div>
        <div class="piedpage__s1__description">
          Téléphone: (514) 254-7131
        </div>
        <div class="piedpage__s1__adresse__recherche">
          <?php get_search_form(); ?>
        </div>
      </div>
      <div class="piedpage__s1__mission">
        MISSION DU CLUB
        <div class="piedpage__s1_mission_texte">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut fugiat animi, officia minus voluptates commodi. Natus quis expedita veritatis corporis a tempore, modi ipsam, eos, non ut odio facilis cupiditate.
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