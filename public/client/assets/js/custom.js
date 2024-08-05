function toggleMenu(event) {
    event.preventDefault();
    var menu = document.getElementById('user-menu');
    menu.classList.toggle('show');
}

// Close the menu if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.nav-icon, .nav-icon *')) {
        var menu = document.getElementById('user-menu');
        if (menu.classList.contains('show')) {
            menu.classList.remove('show');
        }
    }
}

