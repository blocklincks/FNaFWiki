<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FNaFWiki</title>
    <link rel="icon" type="image/x-icon" href="assets/img/icon.png">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div id="header" class="card">
        <img src="assets/img/icon.png" alt="FNaF Wiki Icon" id="logo">
        <h1>FNaFWiki</h1>
        <nav>
            <a href="index.php">Accueil</a></li>
            <a href="jeux-video/" id="gameNav" onmouseover="toggleDropdown()" onmouseout="toggleDropdownOut()">Jeux-video <span>⏷</span></a></li>
            <a href="livres/" id="bookNav" onmouseover="toggleDropdownBooks()" onmouseout="toggleDropdownBooksOut()">Livres <span>⏷</span></a></li>
            <a href="films/" id="movieNav" onmouseover="toggleDropdownMovies()" onmouseout="toggleDropdownMoviesOut()">Films <span>⏷</span></a></li>
            <a href="lore.php">Lore</a></li>
        </nav>
        <div id="dropdowngames" class="dropdown" onmouseover="toggleDropdown()" onmouseout="toggleDropdownOut()">
        </div>
        <div id="dropdownbooks" class="dropdown" onmouseover="toggleDropdownBooks()" onmouseout="toggleDropdownBooksOut()">
        </div>
        <div id="dropdownmovies" class="dropdown" onmouseover="toggleDropdownMovies()" onmouseout="toggleDropdownMoviesOut()">
        </div>
    </div>
    <div class="content card">
        <!-- Contenu principal de la page -->
        <h2>Bienvenue sur FNaFWiki</h2>
        <img src="assets/img/welcome.webp" alt="fnaf welcome" style="max-width: 100%; height: auto;">
        <p>Bienvenue sur l'encyclopédie française non-officielle de Five Nights at Freddy's</p>
        <p>La franchise Five Nights at Freddy's a commencée le 8 août 2014 avec la sortie du jeu vidéo d'horreur éponyme développé par Scott Cawthon. Elle contient à ce jour plusieurs séries de jeux, plusieurs séries de livres, et une multitude de produits dérivés.</p>
    </div>
    <div class="content card">
        <h2>Navigation</h2>
        <div class="imgNav">
            <div class="imgNavCase">
                <h3>Jeux video</h3>
                <img src="assets/img/game.png" alt="fnaf games" style="max-width: 100%; height: auto;">
            </div>
            <div class="imgNavCase">
                <h3>Livres</h3>
                <img src="assets/img/book.png" alt="fnaf books" style="max-width: 100%; height: auto;">
            </div>
            <div class="imgNavCase">
                <h3>Films</h3>
                <img src="assets/img/movie.png" alt="fnaf movies" style="max-width: 100%; height: auto;">
            </div>
            <div class="imgNavCase">
                <h3>Lore</h3>
                <img src="assets/img/lore.png" alt="fnaf lore" style="max-width: 100%; height: auto;">
            </div>
        </div>
    </div>
    <footer id="footer" class="card">
        <p>&copy; 2026 FNaF Wiki. Tous droits réservés.</p>
    </footer>
    <script src="assets/js/script.js">
    </script>
</body>
</html>