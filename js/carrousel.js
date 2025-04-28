(function(){
    console.log("caroussel.js")
    let hero__radio__input = document.querySelectorAll(".hero__radio__input")
    let hero__caroussels = document.querySelectorAll(".hero__caroussel");
    let hero__animations = document.querySelectorAll(".hero__animation");

    console.log("hero__radio__input.length : ",hero__radio__input.length);

    let indexActuel = 0;
    const total = hero__radio__input.length;

    function changementAutomatique(index){
        hero__radio__input[index].checked = true;

        // Supprime "active" de toutes les caroussels
        hero__caroussels.forEach(c => c.classList.remove("active"));

        // Ajoute "active" au carrousel correspondant
        if (hero__caroussels[index]) {
            hero__caroussels[index].classList.add("active");
        }

        // Animation du contenu
        alternerAnimations();
    }

    let animationIndex = 0; // 0 pour première animation, 1 pour deuxième

    function alternerAnimations(){
        if (animationIndex % 2 === 0) {
            // Première animation classique
            hero__animations[0].style.display = "block";
            hero__animations[1].style.display = "none";
        } else {
            // Deuxième animation "Slide Up" avec rebond
            hero__animations[1].style.display = "block";
            hero__animations[1].classList.add("hero__animation--slide-up");
            hero__animations[0].style.display = "none";
        }
        animationIndex++;
    }

    // Déclenche une fois au chargement
    changementAutomatique(indexActuel);

    // Change toutes les 5 secondes
    setInterval(() => {
        indexActuel = (indexActuel + 1) % total;
        changementAutomatique(indexActuel);
    }, 5000); 

    // Quand l'utilisateur clique sur un bouton radio
    hero__radio__input.forEach((radio, index) => {
        radio.addEventListener('change', () => {
            indexActuel = index;
            changementAutomatique(index);
        });
    });

})();
