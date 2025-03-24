<?php get_header();?>
<?php
    $page_404_message = get_theme_mod('page_404_message', 'Default Title');
?>
    <div class="container text-center">
        <h1><?php echo $page_404_message; ?></h1>
        <p>Il semble que le lien que vous avez suivi n'existe pas.</p>
        
        <?php  get_search_form() ?>

        <p><a href="<?php echo home_url(); ?>" class="btn">Retour à l'accueil</a></p>
    </div>
<?php get_footer()?>
</body>
</html>

