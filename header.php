<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?php echo esc_url( home_url( '/' ) ); ?>">
    <title>Club de voyage</title>
    <!-- <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css"> -->
    <?php wp_head()?>
    
</head>
<body>
    <header>
        <div class="entete">
            <figure class="entete__logo">
                <?php  
                    if (function_exists('the_custom_logo')) {
                        the_custom_logo();
                    }
                ?>
            </figure>
            <input type="checkbox" id="maCheckbox" aria-label="menu-burger">
            <label for="maCheckbox">
                <div class="trait"></div>
                <div class="trait"></div>
                <div class="trait"></div>
            </label>
            <div class="entete__navigation">
                <?php wp_nav_menu(array(
                    "menu" => "principal",
                    'container' => 'nav',
                    'container_class' => 'entete__menu'
                )); ?>
                <div class="entete__recherche">
                    <?php get_search_form(); ?>
                </div>
                <!-- <form class="recherche">
                    <input type="search" placeholder="Rechercher" class="recherche__input">
                    <img class="recherche__img"  src="https://s2.svgbox.net/hero-outline.svg?ic=search&color=000" width="16" height="16">
                </form> -->
            </div>
        </div>
    </header>