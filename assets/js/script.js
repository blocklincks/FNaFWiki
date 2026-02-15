import{category} from "./save.js"
addElement("", "", "div", "header", "dropdown");
creationNavigation(category, "dropdown");
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
function creationNavigation(category, categoryParent){
    for(let i = 0; i < category.length; i++){
        addElement(category[i][0], category[i][1], "a", categoryParent, "");
        if(typeof category[i][2] !== "undefined"){
            addElement("", "", "div", categoryParent, category[i][0]);
            creationNavigation(category[i][2], category[i][0]);
        }
    }
}
// Fonction pour ajouter des éléments dans les menus déroulants
function addElement(title, url, elementType, parentId, setId) {
  const newA = document.createElement(elementType);
  newA.href = url;
  newA.id = setId;
  const newContent = document.createTextNode(title);
  newA.appendChild(newContent);
  const currentDiv = document.getElementById(parentId);
  if(elementType === "div" && parentId ==! "header"){
    let left = currentDiv.offsetLeft;
    let top = currentDiv.offsetTop + 10;
    newA.style.position = "absolute"
    newA.style.left = left + "px";
    newA.style.top = top + "px";
  }
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