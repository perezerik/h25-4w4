<?php
/*
    *Template-part information dans hero
*/
?>
<h1 class="hero__titre"> <?php  bloginfo('name'); ?></h1>
<p class="hero__description">
    <?php  bloginfo('description'); ?>
</p>
<p class="hero__courriel">
    <?php  bloginfo('admin_email'); ?>
</p>
<p class="hero__adresse">
    5800 Sherbrooke-est Montréal (Québec) H1X 2A2
</p>
<p class="hero__auteur">Auteur: <?php  echo $hero_auteur ?></p>
<button class="hero__button">S'inscrire</button>