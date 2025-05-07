
<?php   
/**
 * Génére une liste de sous-catégories
 * @param string $parent_slug Le slug de la catégorie parente
 */
function categories_liste($parent_slug){
    $parent_category = get_category_by_slug($parent_slug);

    if ($parent_category) {
        $parent_id = $parent_category->term_id;
        $sous_categories = get_categories(array(
            'parent' => $parent_id, // Filtrer par le parent "destination"
            'hide_empty' => true, // Ne pas afficher les catégories vides
        ));
    
        if (!empty($sous_categories)) {
            echo '<ul class="categorie__ul">';
            foreach ($sous_categories as $categorie) {
                // Afficher le nom de chaque sous-catégorie
                echo '<li  data-category_id ="' . esc_html($categorie->term_id) . '" class="categorie__ul__li">' . esc_html($categorie->name) . '</li>';
            }
            echo '</ul>';
        }else {
            echo 'Aucune sous-catégorie trouvée pour "destination".';
        }
    }else {
        echo 'La catégorie "destination" n\'existe pas.';
    }
}

function genere_vague($couleur){ ?>
    <svg class="vague" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="<?php echo $couleur ?>" fill-opacity="1">
            <animate attributeName="d" dur="6s" repeatCount="indefinite"
                values="
                M0,256L20,229.3C40,203,80,149,120,144C160,139,200,181,240,208C280,235,320,245,360,234.7C400,224,440,192,480,165.3C520,139,560,117,600,133.3C640,149,680,203,720,229.3C760,256,800,256,840,229.3C880,203,920,149,960,133.3C1000,117,1040,139,1080,170.7C1120,203,1160,245,1200,245.3C1240,245,1280,203,1320,186.7C1360,171,1400,181,1420,186.7L1440,192L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z;

                M0,64L20,101.3C40,139,80,213,120,250.7C160,288,200,288,240,288C280,288,320,288,360,250.7C400,213,440,139,480,128C520,117,560,171,600,181.3C640,192,680,160,720,154.7C760,149,800,171,840,202.7C880,235,920,277,960,266.7C1000,256,1040,192,1080,170.7C1120,149,1160,171,1200,181.3C1240,192,1280,192,1320,160C1360,128,1400,64,1420,32L1440,0L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z;

                M0,256L20,229.3C40,203,80,149,120,144C160,139,200,181,240,208C280,235,320,245,360,234.7C400,224,440,192,480,165.3C520,139,560,117,600,133.3C640,149,680,203,720,229.3C760,256,800,256,840,229.3C880,203,920,149,960,133.3C1000,117,1040,139,1080,170.7C1120,203,1160,245,1200,245.3C1240,245,1280,203,1320,186.7C1360,171,1400,181,1420,186.7L1440,192L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z" />
        </path>
    </svg>
<?php }

function categorie_par_destination($cat_a_retirer = '') {
    $categories = get_the_category();
    $cat_slug_retirer = is_object($cat_a_retirer) ? $cat_a_retirer->slug : $cat_a_retirer;

    if (!empty($categories)) {
        echo '<ul class="post-categories">';
        foreach ($categories as $cat) {
            if ($cat->slug !== $cat_slug_retirer) {
                echo '<li><a href="' . get_category_link($cat->term_id) . '">' . esc_html($cat->name) . '</a></li>';
            }
        }
        echo '</ul>';
    }
}