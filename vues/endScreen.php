<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winner | FightTale</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/logos.css">
</head>

<body>
    <header>
        <a href="./startScreen" class="bouton home">Accueil</a>
        <h1>Fin de la partie</h1>
    </header>
    <main class="endScreen">
        <h2>victoire de <br><span>
                <?php echo $winner->getNom(); ?>
            </span></h2>
        <img src="../img/sprites/<?php echo $winner->getId(); ?>.png" alt="">
    </main>
    <p>Joueur
        <?php echo $winner == $_SESSION["joueur1"] ? "1" : "2" ?> Félicitation !
    </p>
</body>

</html>