<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FightTale</title>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
    <div class="fight">
        <div class="visualScene">
            <div class="joueur">
                <img src="../img/sprites/<?php echo $_SESSION["joueur1"]->getId() ?>.png" alt="">
                <p class="infoPerso">HP <span class="vie" style="--pct: <?php echo $_SESSION["joueur1"]->getPourcentagePv() ?>%;"></span> <?php echo $_SESSION["joueur1"]->getPv() ?>&nbsp;/&nbsp;<?php echo $_SESSION["joueur1"]->getPvMax()?></p>
            </div>
            <div class="boutons"></div>
            <div class="joueur">
            <img src="../img/sprites/<?php echo $_SESSION["joueur2"]->getId() ?>.png" alt="">
            <p class="infoPerso">HP <span class="vie" style="--pct: <?php echo $_SESSION["joueur2"]->getPourcentagePv() ?>%;"></span> <?php echo $_SESSION["joueur2"]->getPv() ?>&nbsp;/&nbsp;<?php echo $_SESSION["joueur2"]->getPvMax()?></p>
            </div>
        </div>
        <div class="historique">

        </div>
        <div class="objets">

        </div>
    </div>
</body>

</html>