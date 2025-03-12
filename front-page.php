<?php get_header();?>
<?php  
    $hero_auteur = get_theme_mod('hero_auteur', 'Default Title'); 
    $hero_background = get_theme_mod('hero_background', '');
    $hero_couleur = get_theme_mod('hero_couleur', '');
?>
    <section class = "hero" style="background-image: url(<?php echo $hero_background ?>);  color: <?php echo $hero_couleur?>";>
            <div class="hero__contenu global">
                <?php  get_template_part('gabarits/informations'); ?>
                <div class="hero__icone">
                    <?php  get_template_part('gabarits/icones'); ?>
                </div>
            </div>
    </section>
    <section class="inscription">
        <form class="inscription__form">
            <div class="inscription__info">
                <label for="nom">Nom</label>
                <input type="text" placeholder="Écrivez votre nom" id="nom" name="nom">
            </div>
            <div class="inscription__info">
                <label for="prenom">Prénom</label>
                <input type="text" placeholder="Écrivez votre prénom" id="prenom" name="prenom">
            </div>
            <div class="inscription__info">
                <label for="courriel">Courriel</label>
                <input type="text" placeholder="Écrivez votre courriel" id="courriel" name="courriel">
            </div>
            <div class="inscription__info">
                <label for="telephone">Téléphone</label>
                <input type="text" placeholder="Écrivez votre téléphone" id="telephone" name="telephone">
            </div>
            <div class="inscription__info">
                <input  class="inscription__boutton" type="submit" value="S'inscrire">
            </div>
        </form>
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
    <footer></footer>
    <?php get_footer()?>
</body>
</html>

