<?php
/*
    *Template-part information dans hero
*/
    $hero_auteur = get_theme_mod('hero_auteur', 'Default Title'); 
    $hero_couleur = get_theme_mod('hero_couleur', '');
    for($k=0; $k<3; $k++){
        $hero_background[$k] = get_theme_mod('hero_background_'. $k, '');
    }
?>
<section class = "hero" style="color: <?php echo $hero_couleur; ?>">
            <div class="hero__caroussel active" style="background-image: url(<?php echo $hero_background[0] ?>);"></div>
            <div class="hero__caroussel" style="background-image: url(<?php echo $hero_background[1] ?>);"></div>
            <div class="hero__caroussel" style="background-image: url(<?php echo $hero_background[2] ?>);"></div>
            <div class="hero__radio">
                <input class="hero__radio__input" data-id_radio="0" type="radio" name="carrousel" checked="checked">
                <input class="hero__radio__input" data-id_radio="1" type="radio" name="carrousel">
                <input class="hero__radio__input" data-id_radio="2" type="radio" name="carrousel">
            </div>
            <div class="hero__contenu global">
                <div class="hero__animation"> 
                    <h1 class="hero__titre"> <?php  bloginfo('name'); ?></h1>
                    <p class="hero__description"><?php  bloginfo('description'); ?></p>
                </div>
                <div class="hero__animation"> 
                    <h1 class="hero__titre"> <?php  bloginfo('name'); ?></h1>
                    <p class="hero__description"><?php  bloginfo('description'); ?></p>
                </div>
                
                <p class="hero__courriel">
                    <?php  bloginfo('admin_email'); ?>
                </p>
                <p class="hero__adresse">
                    5800 Sherbrooke-est Montréal (Québec) H1X 2A2
                </p>
                <p class="hero__telephone">
                    (514) 254-7131
                </p>
                <p class="hero__auteur">Auteur: <?php  echo $hero_auteur ?></p>
                <button class="hero__button">S'inscrire</button>
                <div class="hero__icone">
                    <?php  get_template_part('gabarits/icones'); ?>
                </div>
            </div>
    </section>
