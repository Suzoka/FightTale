<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil | FightTale</title>
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
    <header>
        <h1 class="sr-only">FightTale</h1>
        <img src="./img/title.png" alt="" class="title">
    </header>
    <main class="start">
        <div class="selection">
            <img src="./img/sprites/<?php echo $rand1 ?>.png" alt="">
            <h2>Joueur 1</h2>
            <select name="player1" id="player1">
                <?php foreach ($listePersos as $perso) { ?>
                    <option
                        value="<?php echo $perso["id"] ?> <?php echo $perso["id"] == $rand1 ? "selcted=selected" : ""; ?>">
                        <?php echo $perso["nom"] ?>
                    </option>
                <?php } ?>
            </select>
        </div>

    
        <p class="versus">VS</p>
        <input type="submit" value="Start" class="bouton play" lang="en">

        <div class="selection">
            <img src="./img/sprites/<?php echo $rand2 ?>.png" alt="">
            <h2>Joueur 2</h2>
            <select name="player2" id="player2">
                <?php foreach ($listePersos as $perso) { ?>
                    <option
                        value="<?php echo $perso["id"] ?> <?php echo $perso["id"] == $rand2 ? "selcted=selected" : ""; ?>">
                        <?php echo $perso["nom"] ?>
                    </option>
                <?php } ?>
            </select>
        </div>
    </main>
    <footer>
        <a href="./newCharacter" class="bouton plus">Ajouter un personnage</a>
        <a href="./allCharacters" class="bouton liste">Liste des personnages</a>
    </footer>
</body>

</html>