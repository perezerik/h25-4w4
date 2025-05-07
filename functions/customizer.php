<?php   
    function theme_4w4_customize_register($wp_customize) {
        // Le code pour ajouter des sections, des réglages et des contrôles ira ici.
        // Création d'un nouvelle section dans le customizer
      
        // Début de la zone hero
        $wp_customize->add_section('hero_section', array(
          'title' => __('Section Hero', 'theme_4w4'),
          'priority' => 30,
      ));
      ///////////////// ajout de la donnée
      $wp_customize->add_setting('hero_auteur', array(
        'default' => __('Erik Perez', 'theme_4w4'),
        'sanitize_callback' => 'sanitize_text_field'
      ));
      
      ///////////////// ajout du contrôle de la donnée
      $wp_customize->add_control('hero_auteur', array(
        'label' => __('Auteur', 'theme_4w4'),
        'section' => 'hero_section',
        'type' => 'text',
      ));

    
       /////////////////Début du champ couleur
      //////////////// ajout de la donnée couleur 
      $wp_customize->add_setting('hero_couleur', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
      ));
      ///////////////// ajout du contrôle de la donnée
      $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_couleur', array(
        'label' => __('Sélectionner une couleur', 'theme_4w4'),
        'section' => 'hero_section',
      )));

      // ========== Ajout du champ Nombre d'images ==========
      $wp_customize->add_setting('hero_nombre_images', array(
        'default' => 3,
        'sanitize_callback' => 'absint',
      ));

      $wp_customize->add_control('hero_nombre_images', array(
        'label' => __('Nombre d\'images pour le carrousel', 'theme_4w4'),
        'section' => 'hero_section',
        'type' => 'number',
        'input_attrs' => array(
            'min' => 1,
            'max' => 10, // Tu peux changer la limite max
        ),
      ));

      // ========== Ajout dynamique des images ==========
      $nombre_images = get_theme_mod('hero_nombre_images', 3); // Utiliser la valeur enregistrée ou 3 par défaut

      for ($k = 0; $k < $nombre_images; $k++) {
        $wp_customize->add_setting('hero_background_' . $k, array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_' . $k, array(
            'label' => __('Image en arrière-plan ' . ($k + 1), 'theme_4w4'),
            'section' => 'hero_section',
        )));
      }
            
      // Début de la zone footer
      // Création d'un nouvelle section dans le customizer
      $wp_customize->add_section('footer_section', array(
        'title' => __('Section Footer', 'theme_4w4'),
        'priority' => 30,
      ));
      ///////////////// ajout de la donnée
      $wp_customize->add_setting('footer_adresse', array(
        'default' => __('5800 Sherbrooke-est Montréal (Québec) H1X 2A2', 'theme_4w4'),
        'sanitize_callback' => 'sanitize_text_field'
      ));
      
      ///////////////// ajout du contrôle de la donnée
      $wp_customize->add_control('footer_adresse', array(
        'label' => __('Adresse', 'theme_4w4'),
        'section' => 'footer_section',
        'type' => 'text',
      ));
      ///////////////// ajout de la donnée
      $wp_customize->add_setting('footer_telephone', array(
        'default' => __('(514) 254-7131', 'theme_4w4'),
        'sanitize_callback' => 'sanitize_text_field'
      ));
      
      ///////////////// ajout du contrôle de la donnée
      $wp_customize->add_control('footer_telephone', array(
        'label' => __('Téléphone', 'theme_4w4'),
        'section' => 'footer_section',
        'type' => 'text',
      ));
      
      ///////////////// ajout de la donnée
      $wp_customize->add_setting('footer_mission', array(
        'default' => __('Notre mission consiste de...', 'theme_4w4'),
        'sanitize_callback' => 'sanitize_text_field'
      ));
      
      ///////////////// ajout du contrôle de la donnée
      $wp_customize->add_control('footer_mission', array(
        'label' => __('Mission', 'theme_4w4'),
        'section' => 'footer_section',
        'type' => 'text',
      ));

      /////////////////Début du champ couleur
      //////////////// ajout de la donnée couleur 
      $wp_customize->add_setting('footer_couleur', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
      ));
      ///////////////// ajout du contrôle de la donnée
      $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_couleur', array(
        'label' => __('Sélectionner une couleur', 'theme_4w4'),
        'section' => 'footer_section',
      )));

      //////////////Debut ajout image destination
      $wp_customize->add_setting('footer_image_destination', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw', // Pour sécuriser l'URL de l'image
      ));
      
      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_image_destination', array(
        'label' => __('Image de Destination', 'theme_4w4'),
        'section' => 'footer_section',
        'settings' => 'footer_image_destination',
      )));

      /////////////// Page erreur 404
        $wp_customize->add_section('page_404', array(
          'title'    => 'Page 404',
          'priority' => 30,
      ));

      // ///////////////// ajout de la donnée
      $wp_customize->add_setting('page_404_titre', array(
          'default' => __('Oups ! Cette page est introuvable.', 'theme_4w4'),
          'sanitize_callback' => 'sanitize_text_field',
      ));

      // ///////////////// ajout du contrôle de la donnée
      $wp_customize->add_control('page_404_titre', array(
          'label' => __('Titre d’erreur', 'theme_4w4'),
          'section'  => 'page_404',
          'type'     => 'text',
      ));

      $wp_customize->add_setting('page_404_message', array(
          'default' => __('Il semble que le lien que vous avez suivi n`existe pas.', 'theme_4w4'),
          'sanitize_callback' => 'sanitize_text_field',
      ));

      // ///////////////// ajout du contrôle de la donnée
      $wp_customize->add_control('page_404_message', array(
          'label' => __('Message d’erreur', 'theme_4w4'),
          'section'  => 'page_404',
          'type'     => 'text',
      ));

      $wp_customize->add_setting('page_404_suggestions', array(
          'default' => __('Voici quelques suggestions.', 'theme_4w4'),
          'sanitize_callback' => 'sanitize_text_field',
      ));

      // ///////////////// ajout du contrôle de la donnée
      $wp_customize->add_control('page_404_suggestions', array(
          'label' => __('Suggestion d’erreur', 'theme_4w4'),
          'section'  => 'page_404',
          'type'     => 'text',
      ));

      $wp_customize->add_setting('background_404', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
      ));
      ///////////////// ajout du contrôle de la donnée
      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'background_404', array(
        'label' => __('Image en arrière plan', 'theme_4w4'),
        'section' => 'page_404',
      )));

      /////////////// Page erreur 404 Intra
      $wp_customize->add_section('section_404', array(
        'title'    => 'Page 404 Intra',
        'priority' => 30,
    ));

    // ///////////////// ajout de la donnée
    $wp_customize->add_setting('page_404_titre_intra', array(
        'default' => __('Oops, vous avez échoué sur lile 404', 'theme_4w4'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // ///////////////// ajout du contrôle de la donnée
    $wp_customize->add_control('page_404_titre_intra', array(
        'label' => __('Titre d’erreur', 'theme_4w4'),
        'section'  => 'section_404',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('page_404_message_intra', array(
        'default' => __('Pas de panique, cher membre explorateur ! Vous avez dérivé un peu trop loin des destinations de rêve que notre club a soigneusement sélectionnées pour vous. Reprenez votre périple en cliquant sur Accueil pour découvrir à nouveau nos voyages d’exception !', 'theme_4w4'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // ///////////////// ajout du contrôle de la donnée
    $wp_customize->add_control('page_404_message_intra', array(
        'label' => __('Message d’erreur', 'theme_4w4'),
        'section'  => 'section_404',
        'type'     => 'text',
    ));

    /////////////////Début du champ couleur
      //////////////// ajout de la donnée couleur 
      $wp_customize->add_setting('couleur_404', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
      ));
      ///////////////// ajout du contrôle de la donnée
      $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'couleur_404', array(
        'label' => __('Sélectionner une couleur', 'theme_4w4'),
        'section' => 'section_404',
      )));
    
    // Background 404 intra
    $wp_customize->add_setting('background_404_intra', array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    ///////////////// ajout du contrôle de la donnée
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'background_404_intra', array(
      'label' => __('Image en arrière plan', 'theme_4w4'),
      'section' => 'section_404',
    )));
      
      }
      
      add_action('customize_register', 'theme_4w4_customize_register');
?>