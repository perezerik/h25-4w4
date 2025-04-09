(function() {
    console.log("destination.js");
    const categoryId = 3; // Remplacez par l'ID de la catégorie souhaitée
    const domaine = window.location.href;
    const apiUrl = `${domaine}/wp-json/wp/v2/posts?categories=${categoryId}`;
    console.log(apiUrl);
 
    function parcourir_bouton() {
        const categorie__ul__li = document.querySelectorAll(".categorie__ul__li");
        categorie__ul__li.forEach(elm => {
            elm.addEventListener('mousedown', (e) => {
                // Empêche l'événement de propagation si nécessaire
                e.preventDefault();
                
                categorie__ul__li.forEach(button => {
                    button.classList.remove('active');
                });

                e.target.classList.add('active');
                
                // Logique de filtrage selon la catégorie ou une action spécifique
                const categorieId = e.target.dataset.category_id;
                console.log(`Catégorie cliquée: ${categorieId}`);
               
                // Pour l'exemple, je recharge la liste des articles selon la catégorie
                fetchArticles(categorieId);
            });
        });
    }
 
    function fetchArticles(categoryId) {
        const apiUrl = `${domaine}/wp-json/wp/v2/posts?categories=${categoryId}`;
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                const destinationList = document.querySelector('.destination__list');
                destinationList.innerHTML = ''; // Réinitialiser la liste des destinations
 
                data.forEach(article => {
                    const articleElement = document.createElement('div');
                    articleElement.classList.add('destination__item');

                    // Crée le titre clickable
                    const titleWrapper = document.createElement('div');
                    titleWrapper.classList.add('destination__title-wrapper'); // Wrapper pour le titre et le bouton

                    const title = document.createElement('h3');
                    title.textContent = article.title.rendered;
                    title.classList.add('destination__titre');

                    const toggleButton = document.createElement('button');
                    toggleButton.textContent = '...';
                    toggleButton.classList.add('destination__toggle-button');

                    // Crée le paragraphe masqué
                    const paragraph = document.createElement('div');
                    paragraph.classList.add('destination__texte');
                    paragraph.innerHTML = article.excerpt.rendered;
                    paragraph.style.display = 'none'; // Texte caché au début

                    // Crée le lien "Lire plus"
                    const link = document.createElement('a');
                    link.href = article.link;
                    link.textContent = 'Lire plus';
                    link.style.display = 'none'; // Ne pas ... le lien au départ

                    // Ajoute les éléments à leur wrapper
                    titleWrapper.appendChild(title);
                    titleWrapper.appendChild(toggleButton);
                    articleElement.appendChild(titleWrapper);
                    articleElement.appendChild(paragraph);
                    articleElement.appendChild(link);
                    destinationList.appendChild(articleElement);

                    toggleButton.addEventListener('click', () => {
                        const isVisible = paragraph.style.display === 'block';
                        if (isVisible) {
                            paragraph.style.display = 'none'; // Cache le texte
                            toggleButton.textContent = '...'; // Change le texte du bouton
                            link.style.display = 'none'; // Cache le lien "Lire plus"
                        } else {
                            paragraph.style.display = 'block'; // Affiche le texte
                            toggleButton.textContent = '...'; // Change le texte du bouton
                            link.style.display = 'inline'; // Affiche le lien "Lire plus"
                        }
                    });

                });
            })
            .catch(error => console.error('Erreur lors de la récupération des articles:', error));
    }
 
    // Charger les articles au chargement de la page
    fetchArticles(categoryId);
 
    // Activer les événements de clic sur les boutons ou liens de catégories
    parcourir_bouton();
})();
