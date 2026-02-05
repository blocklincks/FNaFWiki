document.getElementById('logo').onclick = function() {
    window.location.href = 'index.php';
};
document.getElementById('logo').onmouseover = function() {
    document.getElementById('logo').style.cursor = 'pointer';
};
// si l'utilisateur a une écran de moins de 600px de large, afficher un menu déroulant au lieu de la barre de navigation avec &#10006 et &#9662;
function adjustMenu() {
    var nav = document.querySelector('nav');
    if (window.innerWidth < 600) {
        //transformer les a en display block et les empiler verticalement
        
        nav.innerHTML = '<p id="menu-toggle" style="font-size: 24px; cursor: pointer;">&#9776; Menu</p><div id="dropdown" style="display: none;"><a href="index.php" style="display: block;" >Accueil</a><a href="jeux.php" style="display: block;">Jeux</a><a href="livres.php" style="display: block;">Livres</a><a href="films.php" style="display: block;">Films</a><a href="personnages.php" style="display: block;">Personnages</a><a href="lore.php" style="display: block;">Lore</a></div>';
        nav.querySelector('#menu-toggle').onclick = function() {
            var dropdown = document.getElementById('dropdown');
            if (dropdown.style.display === 'none') {
                dropdown.style.display = 'block';
            } else {
                dropdown.style.display = 'none';
            }
        };
    } else {
        nav.innerHTML = '<a href="index.php">Accueil</a><a href="jeux.php">Jeux</a><a href="livres.php">Livres</a><a href="films.php">Films</a><a href="personnages.php">Personnages</a><a href="lore.php">Lore</a>';
    }
}
window.onload = adjustMenu;
window.onresize = adjustMenu;

// mettre le titre de la page au millieu de l'écran
var header = document.getElementById('header');
header.style.textAlign = 'center';