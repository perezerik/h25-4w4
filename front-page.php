<?php get_header();?>
<?php  
    $hero_auteur = get_theme_mod('hero_auteur', 'Default Title'); 
    $hero_background = get_theme_mod('hero_background', '');
    $hero_couleur = get_theme_mod('hero_couleur', '');
?>
    <section class = "hero" style="background-image: url(<?php echo $hero_background ?>);  color: <?php echo $hero_couleur?>";>
            <div class="hero__contenu global">
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
                <div class="hero__icone">
                    <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
                    <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="20" height="20">
                    <img src="https://s2.svgbox.net/social.svg?ic=wordpress&color=000000" width="20" height="20">
                    <img src="https://s2.svgbox.net/social.svg?ic=snapchat&color=000000" width="20" height="20">
                    <img src="https://s2.svgbox.net/social.svg?ic=discord&color=000000" width="20" height="20">
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

