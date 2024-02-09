<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FightTale</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/logos.css">
    <link rel="shortcut icon" href="../img/fighttale.png" type="image/png">
</head>

<body>
    <div class="fight">
        <div class="visualScene">
            <?php
            $user;
            if (isset($turn)) {
                if ($turn == 1) {
                    include("./vues/components/player1Turn.php");
                    $user = 1;
                } else {
                    include("./vues/components/player2Turn.php");
                    $user = 2;
                }
            } else {
                if (end($_SESSION["historique"])->getJoueur() == 1) {
                    include("./vues/components/player2Turn.php");
                    $user = 2;
                } else {
                    include("./vues/components/player1Turn.php");
                    $user = 1;
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
            <ul>
                <?php
                foreach ($_SESSION["joueur" . $user]->getItems() as $key => $value) {
                    echo ("<li><a href=\"./fight?j" . $user . "=item&item=" . $key . "\">" . $value->getNom() . "</a></li>");
                }
                ?>
            </ul>
        </div>

        <button class="rules">Règles</button>
    </div>

    <div class="regles">
        <div>
            <h2>Règles du jeu</h2>
            <p>Votre but est de vaincre votre adversaire. <br>
                Pour ce faire, plusieurs options s'offrent à vous :</p>
            <ul>
                <li>Attaquer : Inflige des dégâts à votre adversaire</li>
                <li>Colère : Double vos dégâts pour les deux prochains tours</li>
                <li>Résiste : Divise par deux les dégâts infligés par votre adversaire pour les deux prochains tours
                </li>
                <li>Objets : Utilisez un objet afin de vous soigner</li>
            </ul>
            <p>Bonne chance à vous !</p>
            <button class="close">Fermer le popup</button>
        </div>
    </div>

    <script src="../scripts/fight.js"></script>
</body>

</html>