<!DOCTYPE html>
<html lang="fr">
    <?php
        include 'nav.php';
    ?>
    <div class="content card">
        <!-- Contenu principal de la page -->
        <h2>Bienvenue sur FNaFWiki</h2>
        <table>
            <td><img src="assets/img/welcome.webp" alt="fnaf welcome" style="width:30dvw;"></td>
            <td>
                <p>Bienvenue sur l'encyclopédie française non-officielle de Five Nights at Freddy's</p>
                <p>La franchise Five Nights at Freddy's a commencée le 8 août 2014 avec la sortie du jeu vidéo d'horreur éponyme développé par Scott Cawthon. Elle contient à ce jour plusieurs séries de jeux, plusieurs séries de livres, et une multitude de produits dérivés.</p>
            </td>
        </table>
    </div>
    <div class="content card">
        <h2>Navigation</h2>
        <table>
            <tr>
                <td>
                    <a class="imgNavCase" href="./page.php?name=Jeux video">
                        <h3>Jeux video</h3>
                        <img class="lien" src="assets/img/game.png" alt="fnaf games" style="max-width: 100%; height: auto; width:35dvw;" >
                    </a>
                </td>
                <td>
                    <a class="imgNavCase" href="./page.php?name=Livres">
                        <h3>Livres</h3>
                        <img class="lien" src="assets/img/book.png" alt="fnaf books" style="max-width: 100%; height: auto; width:35dvw;">
                    </a>
                </td>
                <td>
                    <a class="imgNavCase" href="./page.php?name=Films">
                        <h3>Films</h3>
                        <img class="lien" src="assets/img/movie.png" alt="fnaf movies" style="max-width: 100%; height: auto; width:35dvw;">
                    </a>
                </td>
                <td>
                    <a class="imgNavCase" href="./page.php?name=Theories">
                        <h3>Theories</h3>
                        <img class="lien" src="assets/img/theories.png" alt="fnaf theories" style="max-width: 100%; height: auto; width:35dvw;">
                    </a>
                </td>
            </tr>
        </table>
    </div>
    <?php
        include 'footer.php';
    ?>
    <script src="assets/js/save.js?v=<?php echo(rand(1,1000));?>" type="module"></script>
    <!-- <script src="assets/js/script.js?v=<?php echo(rand(1,1000));?>" type="module"></script> -->
</body>
</html>