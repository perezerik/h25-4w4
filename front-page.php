<?php get_header();?>
<?php  
    
    $hero_background = get_theme_mod('hero_background', '');
    $hero_couleur = get_theme_mod('hero_couleur', '');
?>
    <section class = "hero" style="background-image: url(<?php echo $hero_background ?>);  color: <?php echo $hero_couleur?>";>
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

