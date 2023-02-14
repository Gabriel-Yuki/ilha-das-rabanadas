let cards = document.querySelectorAll(".animation-cards");
let cardBodies = document.querySelectorAll(".card-body");
cards.forEach(card => {
    card.addEventListener('mouseover',
        () => {
            cardBodies.forEach(cardBody => {
                cardBody.classList.replace('d-none', 'd-flex')
                cardBody.classList.replace('d-none', 'd-flex')
                
            });


        })

});