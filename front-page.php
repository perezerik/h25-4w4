<?php get_header();?>
    <section class = "hero">
            <div class="hero__contenu global">
                <h1 class="hero__titre">Voyagez dans le monde avec Voyages du Monde</h1>
                <p class="hero__description">
                    Découvrez des destinations uniques et inoubliables avec Voyages du Monde. Nous vous offrons des expériences authentiques, des paysages à couper le souffle et des aventures sur mesure. Partez à la découverte du monde avec nous et créez des souvenirs impérissables.
                </p>
                <p class="hero__courriel">
                    <a href="#">info@cmaisonneuve.qc.ca</a>
                </p>
                <p class="hero__adresse">
                    5800 Sherbrooke-est Montréal (Québec) H1X 2A2
                </p>
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
    <section class="galerie">
        <h3>Nos destinations favorites</h3>
        <div class="galerie global">
            <figure class="galerie__figure">
                <img class ="galerie__img" src="images/paysage1.jpg" alt="paysage1" class="galerie__img">
            </figure>
            <figure class="galerie__figure">
                <img class ="galerie__img" src="images/paysage2.jpg" alt="paysage2" class="galerie__img">
            </figure>
            <figure class="galerie__figure">
                <img class ="galerie__img" src="images/paysage3.jpg" alt="paysage3" class="galerie__img">
            </figure>
            <figure class="galerie__figure">
                <img class ="galerie__img" src="images/paysage4.jpg" alt="paysage4" class="galerie__img">
            </figure>
            <figure class="galerie__figure">
                <img class ="galerie__img" src="images/paysage5.jpg" alt="paysage5" class="galerie__img">
            </figure>
            <figure class="galerie__figure">
                <img class ="galerie__img" src="images/paysage6.jpg" alt="paysage6" class="galerie__img">
            </figure>
            <figure class="galerie__figure">
                <img class ="galerie__img" src="images/paysage7.jpg" alt="paysage7" class="galerie__img">
            </figure>
            <figure class="galerie__figure">
                <img class ="galerie__img" src="images/paysage8.jpg" alt="paysage8" class="galerie__img">
            </figure>
            <figure class="galerie__figure">
                <img class ="galerie__img" src="images/paysage9.jpg" alt="paysage9" class="galerie__img">
            </figure>
            <figure class="galerie__figure">
                <img class ="galerie__img" src="images/paysage10.jpg" alt="paysage10" class="galerie__img">
            </figure>
        </div>
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

