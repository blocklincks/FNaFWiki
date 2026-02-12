// Liste des jeux pour le menu déroulant des jeux
let games = [
    [
        ["Serie principale ⏷","jeux-video/SeriePrincipale/",
            [
                ["Five Nights at Freddy's","jeux-video/SeriePrincipale/FNaF1.php"],
                ["Five Nights at Freddy's 2","jeux-video/SeriePrincipale/FNaF2.php"],
                ["Five Nights at Freddy's 3","jeux-video/SeriePrincipale/FNaF3.php"],
                ["Five Nights at Freddy's 4","jeux-video/SeriePrincipale/FNaF4.php"],
                ["Five Nights at Freddy's: Sister Location","jeux-video/SeriePrincipale/FNaF5.php"],
                ["Freddy Fazbear's Pizzeria Simulator","jeux-video/SeriePrincipale/FNaF6.php"],
                ["Ultimate Custom Night","jeux-video/SeriePrincipale/FNaF7.php"],
                ["Five Nights at Freddy's: Help Wanted","jeux-video/SeriePrincipale/FNaF8.php"],
                ["Five Nights at Freddy's: Security Breach ⏷","jeux-video/SeriePrincipale/FNaF9.php", 
                    ["ruin", "jeux-video/SeriePrincipale/FNaF9ruin.php"]
                ],
                ["Five Nights at Freddy's: Help Wanted 2","jeux-video/SeriePrincipale/FNaF10.php"],
                ["Five Nights at Freddy's: Secret of the Mimic","jeux-video/SeriePrincipale/FNaF11.php"],
            ]
        ],
        ["Spin-offs ⏷","jeux-video/SpinOffs/",
            [
                ["FNaF World","jeux-video/FNaFWorld.php"],
                ["FNaF AR: Special Delivery","jeux-video/FNaFAR.php"],
                ["Five Nights at Freddy's: Into the Pit","jeux-video/FNaFIntoThePit.php"],
            ]
        ],
    ]
]
// Liste des livres pour le menu déroulant des livres
let books = [
    [
        ["The Silver Eyes ⏷","livres/SilverEyes/", 
            [
                ["The Silver Eyes","livres/SilverEyes/SilverEyes.php"],
                ["The Twisted Ones","livres/SilverEyes/TwistedOnes.php"],
                ["The Fourth Closet","livres/SilverEyes/FourthCloset.php"],
            ]
        ],
        ["The Freddy Files ⏷","livres/FreddyFiles/",
            [
                ["The Freddy Files","livres/FreddyFiles/FreddyFiles.php"],
                ["The Freddy Files: Updated Version","livres/FreddyFiles/FreddyFilesUpdated.php"],
                ["Ultimate Guide","livres/FreddyFiles/UltimateGuide.php"],
                ["The Security Breach Files","livres/FreddyFiles/SecurityBreachFiles.php"],
                ["The Security Breach Files: Updated Version","livres/FreddyFiles/SecurityBreachFilesUpdated.php"],
                ["Ultimate Guide 2.0","livres/FreddyFiles/UltimateGuide2.php"],
            ]
        ],
        ["Fazbear Frights ⏷","livres/FazbearFrights/", 
            [
                ["Into the Pit","livres/FazbearFrights/IntoThePit.php"],
                ["Fetch","livres/FazbearFrights/Fetch.php"],
                ["1:35AM","livres/FazbearFrights/135AM.php"],
            ]
        ],
        ["Tales from the Pizzaplex ⏷","livres/TalesFromThePizzaplex.php"],
        ["Interactive Novel ⏷","livres/GraphicNovel.php"],
        ["Autres ⏷","livres/Autres.php"],
    ]
]
// Liste des films pour le menu déroulant des films
let movies = [
    [
        ["Five Nights at Freddy's","films/FNaF1.php"],
        ["Five Nights at Freddy's 2","films/FNaF2.php"],
    ]
]
// Categories pour les menus déroulants
let category = [
    ["games", games],
    ["books", books],
    ["movies", movies],
];
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
// Mettre différentes pages dans les menus déroulants
for (let i = 0; i < category.length; i++) {
    let tab = category[i][1];
    for(let j = 0; j < tab[0].length; j++){
        addElement(tab[0][j][0], tab[0][j][1], "dropdown" + category[i][0]);
    }
}
// Fonction pour ajouter des éléments dans les menus déroulants
function addElement(title, url, parentID) {
  const newA = document.createElement("a");
  newA.href = url;
  const newContent = document.createTextNode(title);
  newA.appendChild(newContent);
  const currentDiv = document.getElementById(parentID);
  currentDiv.appendChild(newA);
}
// Animation du menu déroulant des jeux
function toggleDropdown() {
    document.getElementById('dropdowngames').style.animation = "moveDown 0.5s ease forwards";
}
function toggleDropdownOut() {
    document.getElementById('dropdowngames').style.animation = "moveUp 0.5s ease forwards";
}
// Animation du menu déroulant des livres
function toggleDropdownBooks() {
    document.getElementById('dropdownbooks').style.animation = "moveDown 0.5s ease forwards";
}
function toggleDropdownBooksOut() {
    document.getElementById('dropdownbooks').style.animation = "moveUp 0.5s ease forwards";
}
// Animation du menu déroulant des films
function toggleDropdownMovies() {
    document.getElementById('dropdownmovies').style.animation = "moveDown 0.5s ease forwards";
}
function toggleDropdownMoviesOut() {
    document.getElementById('dropdownmovies').style.animation = "moveUp 0.5s ease forwards";
}