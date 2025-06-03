function showMenu() {
    var menu = document.querySelectorAll('.menu');
    var content = document.querySelectorAll('.content');
    if(menu[0].style.display === 'flex') {
        menu.forEach(p => p.style.display = 'none');
    } else {
        menu.forEach(p => p.style.display = 'flex');
    }
}