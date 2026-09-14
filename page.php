<!DOCTYPE html>
<html lang="fr">
    <?php
        if (!isset($_GET['name']) || empty($_GET['name']) || $_GET['name'] === "Accueil") {
            header("Location: index.php");
            exit();
        }
        include 'nav.php';
        if ($_GET['name'] === "Série principale"){
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
    <div class='content card'>
        <a href='./page.php?name=Five Nights at Freddy's'>
            <h2>Five Nights at Freddy's</h2>
            <table >
                <td width='30%'>
                    <img src='assets/img/FreddyLookCam.png' alt='FNaF1.png'>
                </td>
                <td>
                    <p>Five Nights at Freddy's est le premier jeu sortie de la série. Ce qui devait être un jeu d'horreur indépendant comme n'importe quel autres, a finalement explosé sur internet et en est devenu culte</p>
                    <p>Sortie le 8 Aout 2014, le jeu est sortie au moment de la tendance des jeux d'horreur sur internet. Tous les youtubeurs de cette époque se sont arraché pour y jouer et faire des let's play dessus. Que ce soit Squeezie, KaraL, et autre en France, ou même Markiplier au États-Unis. Le jeu a fais le tour du globe</p>
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