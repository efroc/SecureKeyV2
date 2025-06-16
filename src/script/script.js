/*============= AFFICHER LE MENU =============*/
function showMenu() {
    const menu = document.querySelector('.menu');
    const formulaire = document.querySelector('.formulaire');
    const display = getComputedStyle(menu).display;

    if (display === 'flex') {
        menu.style.display = 'none';
        formulaire.style.display = 'none';
    } else {
        menu.style.display = 'flex';
        formulaire.style.display = 'flex';
    }
}

/*============= CHANGER DE LANGUE =============*/
document.getElementById("language-button").addEventListener("click", function() {
    var frenchContent = document.querySelectorAll(".fr");
    var englishContent = document.querySelectorAll(".en");
  
    if (frenchContent[0].style.display === 'none') {
        frenchContent.forEach(p => p.style.display = 'block');
        englishContent.forEach(p => p.style.display = 'none');
    } else {
        frenchContent.forEach(p => p.style.display = 'none');
        englishContent.forEach(p => p.style.display = 'block');
    }
});



