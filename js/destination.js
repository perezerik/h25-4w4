(function () {
    console.log("destination.js");

    const domaine = document.querySelector('base')?.href || location.origin;

    /**
     * Fonction principale pour récupérer des articles.
     * Peut utiliser soit un ID de catégorie, soit un mot-clé de recherche.
     */
    function fetchArticles({ categoryId = null, search = null } = {}) {
        let apiUrl = `${domaine}/wp-json/wp/v2/posts?`;
        if (categoryId) {
            apiUrl += `categories=${categoryId}`;
        } else if (search) {
            apiUrl += `search=${encodeURIComponent(search)}`;
        } else {
            console.warn("Aucune méthode de récupération précisée");
            return;
        }

        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                const destinationList = document.querySelector('.destination__list');
                destinationList.innerHTML = '';

                if (data.length === 0) {
                    destinationList.innerHTML = "<p>Aucune destination trouvée.</p>";
                    return;
                }

                data.forEach(article => {
                    const articleElement = document.createElement('div');
                    articleElement.classList.add('destination__item');

                    const titleWrapper = document.createElement('div');
                    titleWrapper.classList.add('destination__title-wrapper');

                    const title = document.createElement('h3');
                    title.textContent = article.title.rendered;
                    title.classList.add('destination__titre');

                    const toggleButton = document.createElement('button');
                    toggleButton.textContent = '˅';
                    toggleButton.classList.add('destination__toggle-button');

                    const paragraph = document.createElement('div');
                    paragraph.classList.add('destination__texte');
                    paragraph.innerHTML = article.excerpt.rendered;

                    const link = document.createElement('a');
                    link.href = article.link;
                    link.textContent = 'Lire plus';
                    link.style.display = 'none';

                    titleWrapper.appendChild(title);
                    titleWrapper.appendChild(toggleButton);
                    articleElement.appendChild(titleWrapper);
                    articleElement.appendChild(paragraph);
                    articleElement.appendChild(link);
                    destinationList.appendChild(articleElement);

                    // Animation d’accordéon
                    toggleButton.addEventListener('click', () => {
                        paragraph.classList.toggle('open');
                        const isOpen = paragraph.classList.contains('open');
                        toggleButton.textContent = isOpen ? '˄' : '˅';
                        link.style.display = isOpen ? 'inline' : 'none';
                    });
                });
            })
            .catch(error => console.error('Erreur lors de la récupération des articles:', error));
    }

    /**
     * Active les boutons de catégorie (ID WordPress)
     */
    function activerBoutonsCategorie() {
        const boutons = document.querySelectorAll(".categorie__ul__li");
        boutons.forEach(elm => {
            elm.addEventListener('mousedown', (e) => {
                e.preventDefault();
                boutons.forEach(btn => btn.classList.remove('active'));
                e.target.classList.add('active');
                const id = e.target.dataset.category_id;
                fetchArticles({ categoryId: id });
            });
        });
    }

    /**
     * Active les boutons de recherche par pays (basés sur `data-search`)
     */
    function activerBoutonsPays() {
        const boutons = document.querySelectorAll('.menu-pays__bouton');
        const titre = document.querySelector('.destination__titre');

        boutons.forEach(bouton => {
            bouton.addEventListener('click', () => {
                const pays = bouton.dataset.search;

                // Mise à jour du titre
                if (titre) titre.textContent = pays;

                // Mettre le bouton actif
                boutons.forEach(b => b.classList.remove('active'));
                bouton.classList.add('active');

                // Requête par search
                fetchArticles({ search: pays });
            });
        });
        
    }

    // Initialisation
    activerBoutonsCategorie();
    activerBoutonsPays();
    window.fetchArticles = fetchArticles;
})();

