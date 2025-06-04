function showMenu() {
    const menu = document.querySelector('.menu');
    const display = getComputedStyle(menu).display;

    if (display === 'flex') {
        menu.style.display = 'none';
    } else {
        menu.style.display = 'flex';
    }
}

//TODO
function changeLanguage() {

}

