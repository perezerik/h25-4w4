<?php
/*
    *Template-part information dans hero
*/

// Récupérer les données
$hero_auteur = get_theme_mod('hero_auteur', 'Default Title'); 
$hero_couleur = get_theme_mod('hero_couleur', '');
$hero_nombre_images = get_theme_mod('hero_nombre_images', 3);

// Charger toutes les images du carrousel
$hero_background = array();
for ($k = 0; $k < $hero_nombre_images; $k++) {
    $hero_background[$k] = get_theme_mod('hero_background_' . $k, '');
}
?>

<section class="hero" style="color: <?php echo esc_attr($hero_couleur); ?>">
    <?php foreach ($hero_background as $index => $background_url) : ?>
        <?php if (!empty($background_url)) : ?>
            <div class="hero__caroussel <?php echo ($index === 0) ? 'active' : ''; ?>" style="background-image: url(<?php echo esc_url($background_url); ?>);"></div>
        <?php endif; ?>
    <?php endforeach; ?>

    <div class="hero__radio">
        <?php foreach ($hero_background as $index => $background_url) : ?>
            <?php if (!empty($background_url)) : ?>
                <input class="hero__radio__input" data-id_radio="<?php echo esc_attr($index); ?>" type="radio" name="carrousel" <?php echo ($index === 0) ? 'checked="checked"' : ''; ?>>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>

    <div class="hero__contenu global">
        <div class="hero__animation hero__animation--active">
            <h1 class="hero__titre"><?php bloginfo('name'); ?></h1>
            <p class="hero__description"><?php bloginfo('description'); ?></p>
        </div>
        <div class="hero__animation">
            <h1 class="hero__titre">lorem</h1>
            <p class="hero__description">lorem ?></p>
        </div>
        <div class="hero__animation">
            <h1 class="hero__titre"><?php bloginfo('name'); ?></h1>
            <p class="hero__description"><?php bloginfo('description'); ?></p>
        </div>

        <p class="hero__courriel"><?php bloginfo('admin_email'); ?></p>
        <p class="hero__adresse">5800 Sherbrooke-est Montréal (Québec) H1X 2A2</p>
        <p class="hero__telephone">(514) 254-7131</p>
        <p class="hero__auteur">Auteur: <?php echo esc_html($hero_auteur); ?></p>
        <button class="hero__button">S'inscrire</button>
        <div class="hero__icone">
            <?php get_template_part('gabarits/icones'); ?>
        </div>
    </div>
</section>
