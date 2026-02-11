let game = [
    [
        ["Five Nights at Freddy's","jeux-video/FNaF1.php"],
        ["Five Nights at Freddy's 2","jeux-video/FNaF2.php"],
        ["Five Nights at Freddy's 3","jeux-video/FNaF3.php"],
        ["Five Nights at Freddy's 4","jeux-video/FNaF4.php"],
        ["Five Nights at Freddy's: Sister Location","jeux-video/FNaF5.php"],
        ["Freddy Fazbear's Pizzeria Simulator","jeux-video/FNaF6.php"],
        ["Five Nights at Freddy's: Help Wanted","jeux-video/FNaF7.php"],
        ["Five Nights at Freddy's: Security Breach","jeux-video/FNaF8.php"],
        ["Five Nights at Freddy's: Help Wanted 2","jeux-video/FNaF9.php"],
        ["Five Nights at Freddy's: Secret of the Mimic","jeux-video/FNaF10.php"],
    ]
]
document.getElementById('logo').onclick = function() {
    window.location.href = 'index.php';
};
document.getElementById('logo').onmouseover = function() {
    document.getElementById('logo').style.cursor = 'pointer';
};
// Navigation par images sur la page d'accueil
document.getElementsByClassName('imgNavCase')[0].onclick = function() {
    window.location.href = 'jeux.php';
};
document.getElementsByClassName('imgNavCase')[0].onmouseover = function() {
    document.getElementsByClassName('imgNavCase')[0].style.cursor = 'pointer';
};
// Navigation par images sur la page des livres
document.getElementsByClassName('imgNavCase')[1].onclick = function() {
    window.location.href = 'livres.php';
};
document.getElementsByClassName('imgNavCase')[1].onmouseover = function() {
    document.getElementsByClassName('imgNavCase')[1].style.cursor = 'pointer';
};
// Navigation par images sur la page des films
document.getElementsByClassName('imgNavCase')[2].onclick = function() {
    window.location.href = 'films.php';
};
document.getElementsByClassName('imgNavCase')[2].onmouseover = function() {
    document.getElementsByClassName('imgNavCase')[2].style.cursor = 'pointer';
};
// Navigation par images sur la page du lore
document.getElementsByClassName('imgNavCase')[3].onclick = function() {
    window.location.href = 'lore.php';
};
document.getElementsByClassName('imgNavCase')[3].onmouseover = function() {
    document.getElementsByClassName('imgNavCase')[3].style.cursor = 'pointer';
};
// Mettre différentes pages dans le menu déroulant
for (let i = 0; i < game[0].length; i++) {
    addElement(game[0][i][0], game[0][i][1], "dropdown");
}
function addElement(title, url, parentID) {
  const newA = document.createElement("a");
  newA.href = url;
  const newContent = document.createTextNode(title);
  newA.appendChild(newContent);
  const currentDiv = document.getElementById(parentID);
  currentDiv.appendChild(newA);
}
// changer l'id du menu déroulant pour l'animer
document.getElementById('gameNav').onmouseover = function() {
    document.getElementById('dropdown').style.animation = "moveDown 0.3s ease forwards";
};
document.getElementById('gameNav').onmouseout = function() {
    if (document.getElementById('dropdown').onmouseout === true) {
        document.getElementById('dropdown').style.animation = "moveUp 0.3s ease forwards";
    }
};
document.getElementById('dropdown').onmouseover = function() {
    document.getElementById('dropdown').style.animation = "moveDown 0.3s ease forwards";
};
document.getElementById('dropdown').onmouseout = function() {
    document.getElementById('dropdown').style.animation = "moveUp 0.3s ease forwards";
};
