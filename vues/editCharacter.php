<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $perso->getNom() ?> | FightTale</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/logos.css">
</head>

<body>
    <header>
        <a href="./allCharacters" class="bouton back">Retour</a>
        <h1>Modifier <?php echo $perso->getNom() ?></h1>
    </header>
    <main>
        <form action="./editCharacterAction" method="POST" enctype="multipart/form-data" class="newCharacter">
            <div class="picture-form">
                <label for="picture" class="rempli">Apparence</label>
                <img src="../img/sprites/<?php echo $perso->getId() ?>.png" alt="" class="dynamique">
                <input type="file" name="sprite" id="picture" accept=".jpg, .jpeg, .png" value="Image" required>
            </div>
            <div class="line">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" required value="<?php echo $perso->getNom() ?>">
                </div>
                <div class="form-group">
                    <label for="atk">Attaque</label>
                    <input type="number" name="atk" id="atk" required value="<?php echo $perso->getAtk() ?>">
                </div>
                <div class="form-group">
                    <label for="pv">Vie</label>
                    <input type="number" name="pv" id="pv" required value="<?php echo $perso->getPv() ?>">
                </div>
            </div>
            <input type="submit" value="Modifier" class="bouton save">
        </form>
    </main>

    <script src="../scripts/newCharacter.js"></script>
</body>

</html>