<?php get_header();?>
<?php  
    $hero_couleur = get_theme_mod('hero_couleur', '');
    for($k=0; $k<3; $k++){
        $hero_background[$k] = get_theme_mod('hero_background_'. $k, '');
    }
?>
    <section class = "hero" style="color: <?php echo $hero_couleur; ?>">
            <div class="hero__caroussel" style="background-image: url(<?php echo $hero_background[0] ?>);"></div>
            <div class="hero__caroussel" style="background-image: url(<?php echo $hero_background[1] ?>);"></div>
            <div class="hero__caroussel" style="background-image: url(<?php echo $hero_background[2] ?>);"></div>
            <div class="hero__radio">
                <input class="hero__radio__input" data-id_radio="0" type="radio" name="carrousel" checked="checked">
                <input class="hero__radio__input" data-id_radio="1" type="radio" name="carrousel">
                <input class="hero__radio__input" data-id_radio="2" type="radio" name="carrousel">
            </div>
            <div class="hero__contenu global">
                <?php  get_template_part('gabarits/hero'); ?>
                <div class="hero__icone">
                    <?php  get_template_part('gabarits/icones'); ?>
                </div>
            </div>
    </section>
    <section class="inscription">
        <?php  get_template_part('gabarits/inscription'); ?>
    </section>
    <section class="populaire">
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); 
            if(in_category("galerie")) {
                the_content();
            }else{  ?>
            <?php get_template_part('gabarits/carte'); ?>
            <?php } ?>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <!-- ///////////////////Section rest API -->
    <section class="destination">
        <?php categories_liste("destination") ?>
        <h2 class="destination__titre">Articles de la catégorie</h2>
        <div class="destination__list"></div>
    </section>
    <footer></footer>
    <?php get_footer()?>
</body>
</html>

