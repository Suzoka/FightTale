<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FightTale</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/logos.css">
</head>

<body>
    <div class="fight">
        <div class="visualScene">
            <?php
            if (isset($turn)) {
                if ($turn == 1) {
                    include("./vues/components/player1Turn.php");
                } else {
                    include("./vues/components/player2Turn.php");
                }
            } else {
                if (end($_SESSION["historique"])->getJoueur() == 1) {
                    include("./vues/components/player2Turn.php");
                } else {
                    include("./vues/components/player1Turn.php");

                }
            }
            ?>
        </div>
        <div class="historique">
            <ul>
                <?php
                foreach ($_SESSION["historique"] as $key => $value) {
                    echo ("<li>" . $value->getDetail() . "</li>");
                }
                ?>
            </ul>
        </div>
        <div class="objets">

        </div>
    </div>

    <script src="../scripts/fight.js"></script>
</body>

</html>