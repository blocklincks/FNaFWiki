<!DOCTYPE html>
<html lang="fr">
    <?php
        if (!isset($_GET['name']) || empty($_GET['name']) || $_GET['name'] === "Accueil") {
            header("Location: index.php");
            exit();
        }
        include 'nav.php';
    ?>
    <?php
        include 'footer.php';
    ?>
    <!-- <script src="assets/js/save.js?v=<?php echo(rand(1,1000));?>" type="module"></script> -->
    <!-- <script src="assets/js/script.js?v=<?php echo(rand(1,1000));?>" type="module"></script> -->
</body>
</html>