<!DOCTYPE html>
<html lang="fr">
    <?php
        if (!isset($_GET['p']) || empty($_GET['p']) || $_GET['p'] === "Accueil") {
            header("Location: index.php");
            exit();
        }
        include 'nav.php';
        if ($_GET['p'] === "Série principale"){
            echo "<div class='content card'>
        <h2>La série principale</h2>
        <table>
            <td width='20%'>
                <img width='30%' src='assets/img/FNaF1.png' alt='FNaF1.png'>
                <img width='30%' src='assets/img/FNaF2.png' alt='FNaF2.png'>
                <img width='30%' src='assets/img/FNaF3.png' alt='FNaF3.png'>
                <img width='30%' src='assets/img/FNaF4.png' alt='FNaF4.png'>
                <img width='30%' src='assets/img/FNaFSL.png' alt='FNaFSL.png'>
                <img width='30%' src='assets/img/FFPS.png' alt='FFPS.png'>
                <img width='30%' src='assets/img/UCN.png' alt='UCN.png'>
                <img width='30%' src='assets/img/FNaFHP.png' alt='FNaFHP.png'>
                <img width='30%' src='assets/img/FNaFSB.png' alt='FNaFSB.png'>
                <img width='30%' src='assets/img/FNaFHP2.png' alt='FNaFHP2.png'>
                <img width='30%' src='assets/img/FNaFSotM.png' alt='FNaFSotM.png'>
            </td>
            <td><p>Five Nights at Freddy's a 11 jeux considéré comme 'principale'. Ce sont les jeux qui suivent l'histoire du premier jeu</p></td>
        </table>
    </div>
    <div class='content card' style='background-color: black;'>
        <a href=".'"./page.php?p=Five Nights at Freddy'."'".'s"'."style='color: white;'>
            <h2>Five Nights at Freddy's</h2>
            <table >
                <td width='30%'>
                    <img src='assets/img/FreddyLookCam.png' alt='FNaF1.png' style='width:30dvw;'>
                </td>
                <td>
                    <p>Five Nights at Freddy's est le premier jeu sortie de la série. Ce qui devait être un jeu d'horreur indépendant comme n'importe quel autres, a finalement explosé sur internet et en est devenu culte</p>
                    <p>Sortie le 8 Aout 2014, le jeu est sortie au moment de la tendance des jeux d'horreur sur internet. Tous les youtubeurs de cette époque se sont arraché pour y jouer et faire des let's play dessus. Que ce soit Squeezie, KaraL, et autre en France, ou même Markiplier au États-Unis. Le jeu a fais le tour du globe</p>
                    <p>Cliqué pour en savoir plus ...</p>
                </td>
            </table>
        </a>
    </div>
    <div class='content card' style='background-color: darkred;'>
        <a href=".'"./page.php?p=Five Nights at Freddy'."'".'s 2"'."style='color: red;'>
            <h2>Five Nights at Freddy's 2</h2>
            <table >
                <td width='70%'>
                    <div>
                        <p>Five Nights at Freddy's 2 est le second jeu sortie de la série.</p>
                        <p>Cliqué pour en savoir plus ...</p>
                    </div>
                </td>
                <td width='30%'>
                    <img src='assets/img/fnaf2.png' alt='FNaF2.png' style='width:30dvw;'>
                </td>
            </table>
        </a>
    </div>
    <div class='content card' style='background-color: darkgreen;'>
        <a href=".'"./page.php?p=Five Nights at Freddy'."'".'s 3"'." style='color: lime;'>
            <h2>Five Nights at Freddy's 3</h2>
            <table >
                <td width='30%'>
                    <img src='assets/img/fnaf3.png' alt='FNaF3.png' style='width:30dvw;'>
                </td>
                <td>
                    <p>Five Nights at Freddy's 3 est le troisième jeu sortie de la série.</p>
                    <p>Cliqué pour en savoir plus ...</p>
                </td>
            </table>
        </a>
    </div>
    <div class='content card' style='background-color: darkred;'>
        <a href=".'"./page.php?p=Five Nights at Freddy'."'".'s 4"'."style='color: red;'>
            <h2>Five Nights at Freddy's 4</h2>
            <table >
                <td width='70%'>
                    <div>
                        <p>Five Nights at Freddy's 4 était sensé être le dernier chapitre, le dernier jeu de la série. Mais ceci n'était pas le cas</p>
                        <p>Cliqué pour en savoir plus ...</p>
                    </div>
                </td>
                <td width='30%'>
                    <img src='assets/img/fnaf4.png' alt='FNaF2.png' style='width:30dvw;'>
                </td>
            </table>
        </a>
    </div>
    <div class='content card' style='background-color: darkblue;'>
        <a href=".'"./page.php?p=Five Nights at Freddy'."'".'s Sister Location"'." style='color: blue;'>
            <h2>Five Nights at Freddy's Sister Location</h2>
            <table >
                <td width='30%'>
                    <img src='assets/img/fnafsl.png' alt='FNaF3.png' style='width:30dvw;'>
                </td>
                <td>
                    <p>Five Nights at Freddy's Sister Location sort un peu du coté, surnaturel pour un coté plus science-fiction</p>
                    <p>Cliqué pour en savoir plus ...</p>
                </td>
            </table>
        </a>
    </div>
    <div class='content card' style='background-color: orange;'>
        <a href=".'"./page.php?p=Freddy Fazbear Pizza Simulator"'."style='color: brown;'>
            <h2>Freddy Fazbear Pizza Simulator</h2>
            <table >
                <td width='70%'>
                    <div>
                        <p>Freddy Fazbear Pizza Simulator est un jeu tycoon, toujours accompagné du style de survie des ancien jeux</p>
                        <p>Cliqué pour en savoir plus ...</p>
                    </div>
                </td>
                <td width='30%'>
                    <img src='assets/img/ffps.png' alt='FNaF2.png' style='width:30dvw;'>
                </td>
            </table>
        </a>
    </div>
    <div class='content card' style='background-color: black;'>
        <a href=".'"./page.php?p=Ultimate Custom Night"'." style='color: white;'>
            <h2>Ultimate Custom Night</h2>
            <table >
                <td width='30%'>
                    <img src='assets/img/ucn.png' alt='ucn.png' style='width:30dvw;'>
                </td>
                <td>
                    <p>Ultimate Custom Night n'a plus qu'une seul nuit, ou le joueur choisie la difficulté de 50 animatroniques</p>
                    <p>Cliqué pour en savoir plus ...</p>
                </td>
            </table>
        </a>
    </div>
    <div class='content card' style='background-color: cyan;'>
        <a href=".'"./page.php?p=Five Nights at Freddy'."'".'s Help Wanted"'."style='color: blue;'>
            <h2>Five Nights at Freddy's Help Wanted</h2>
            <table >
                <td width='70%'>
                    <div>
                        <p>Five Nights at Freddy's Help Wanted est un jeu en réalité vistuel (VR), ou tu joue aux 3 premier jeu et du contenu additionel</p>
                        <p>Cliqué pour en savoir plus ...</p>
                    </div>
                </td>
                <td width='30%'>
                    <img src='assets/img/fnafhp.png' alt='FNaFHP.png' style='width:30dvw;'>
                </td>
            </table>
        </a>
    </div>
    <div class='content card' style='background-color: black;'>
        <a href=".'"./page.php?p=Five Nights at Freddy'."'s".' Security Breach"'." style='color: red;'>
            <h2>Five Nights at Freddy's Security Breach</h2>
            <table >
                <td width='30%'>
                    <img src='assets/img/fnafsb.png' alt='fnafsb.png' style='width:30dvw;'>
                </td>
                <td>
                    <p>Dans Five Nights at Freddy's Security Breach tu joue Gregory, un enfant qui a était enfermé dans le pizzaplex. Ton but sera de surivre jusqu'a 6 heure du matin.</p>
                    <p>Cliqué pour en savoir plus ...</p>
                </td>
            </table>
        </a>
    </div>
    <div class='content card' style='background-color: black;'>
        <a href=".'"./page.php?p=Five Nights at Freddy'."'".'s Help Wanted 2"'."style='color: pink;'>
            <h2>Five Nights at Freddy's Help Wanted 2</h2>
            <table >
                <td width='70%'>
                    <div>
                        <p>Five Nights at Freddy's Help Wanted 2 est dans le même style que le premier Help Wanted mais avec les autre jeu que les 3 premier</p>
                        <p>Cliqué pour en savoir plus ...</p>
                    </div>
                </td>
                <td width='30%'>
                    <img src='assets/img/fnafhp2.png' alt='FNaFHP2.png' style='width:30dvw;'>
                </td>
            </table>
        </a>
    </div>
    <div class='content card' style='background-color: black;'>
        <a href=".'"./page.php?p=Five Nights at Freddy'."'s".' Secret of the Mimic"'." style='color: orange;'>
            <h2>Five Nights at Freddy's Secret of the Mimic</h2>
            <table >
                <td width='30%'>
                    <img src='assets/img/fnafsotm.png' alt='fnafsotm.png' style='width:30dvw;'>
                </td>
                <td>
                    <p>Dans Five Nights at Freddy's Secret of the Mimic On se retrouve dans les années 70. Avant tout les événement de la série.</p>
                    <p>Cliqué pour en savoir plus ...</p>
                </td>
            </table>
        </a>
    </div>";
        }
        else{
            echo "<h1>Error 404: page not found</h1>";
        }
    ?>
    
    <?php
        include 'footer.php';
    ?>
    <!-- <script src="assets/js/save.js?v=<?php echo(rand(1,1000));?>" type="module"></script> -->
    <!-- <script src="assets/js/script.js?v=<?php echo(rand(1,1000));?>" type="module"></script> -->
</body>
</html>