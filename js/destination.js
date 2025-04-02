/*
    Script js permettant d'extraire des destinations de voyage
*/ 
// (function(){
//     console.log("destination.js");
//     const categoryId = 3; // Remplacez par l'ID de la catégorie souhaitée
//     const domaine = window.location.href;
//     const apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
//     console.log(apiUrl);
// function parcourrir_bouton(){
//     const categorie__ul__li = document.querySelectorAll(".categorie__ul__li")
//     categorie__ul__li.forEach(elm => {
        
//     })
// }
//     fetch(apiUrl)
//         .then(response => response.json())
//         .then(data => {
//             const destinationList = document.querySelector('.destination__list');
//             data.forEach(article => {
//                 const articleElement = document.createElement('div');
//                 console.log(article.title.rendered)
//                 // <div>${article.excerpt.rendered}</div>
//                 articleElement.innerHTML = `
//                     <h3>${article.title.rendered}</h3>
                    
//                     <a href="${article.link}">Lire plus</a>
//                 `;
//                 destinationList .appendChild(articleElement);
//             });
//         })
//         .catch(error => console.error('Erreur lors de la récupération des articles:', error));
// })()
(function(){
    console.log("destination.js");
    const categoryId = 3; // Remplacez par l'ID de la catégorie souhaitée
    const domaine = window.location.href;
    const apiUrl = `${domaine}/wp-json/wp/v2/posts?categories=${categoryId}`;
    console.log(apiUrl);
 
    function parcourir_bouton(){
        const categorie__ul__li = document.querySelectorAll(".categorie__ul__li");
        categorie__ul__li.forEach(elm => {
            elm.addEventListener('click', (e) => {
                // Empêche l'événement de propagation si nécessaire
                e.preventDefault();
 
                // Logique de filtrage selon la catégorie ou une action spécifique
                const categorieId = e.target.dataset.categoryId;
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
                    articleElement.innerHTML = `
                        <h3>${article.title.rendered}</h3>
                        <a href="${article.link}">Lire plus</a>
                    `;
                    destinationList.appendChild(articleElement);
                });
            })
            .catch(error => console.error('Erreur lors de la récupération des articles:', error));
    }
 
    // Charger les articles au chargement de la page
    fetchArticles(categoryId);
 
    // Activer les événements de clic sur les boutons ou liens de catégories
    parcourir_bouton();
})();