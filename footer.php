<footer>
  <div class="piedpage global">
    <section class="piedpage__s1">
      <div class="piedpage__s1__externe">
        <?php wp_nav_menu(array(
          "menu" => "externe",
          "container" => "nav",
        )); ?>
      </div>
      <div class="piedpage__s1__adresse">
        <div class="piedpage__s1_adresse__coord">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum commodi molestias debitis nemo, culpa id, magnam similique dolor optio temporibus laborum. Inventore quasi quibusdam dicta rem harum quos amet non?
        </div>
        <div class="piedpage__s1_adresse__recherche">
          <?php get_search_form(); ?>
        </div>
      </div>
      <div class="piedpage__s1__description">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum, nostrum sint deserunt architecto dolorem nisi delectus pariatur odit eius! Maiores dolore provident soluta culpa minus nesciunt doloremque vero incidunt accusamus!
      </div>
    </section>
    <section class="piedpage__s2">
      <div class="">
        
      </div>
    </section>
    <section class="piedpage__s3"></section>
  </div>
</footer>

<?php wp_footer() ?>