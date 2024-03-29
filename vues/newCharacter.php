<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau personnage | FightTale</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/logos.css">
    <link rel="shortcut icon" href="../img/fighttale.png" type="image/png">
</head>

<body>
    <header>
        <a href="./startScreen" class="bouton back">Retour</a>
        <h1>Ajouter un nouveau personnage</h1>
    </header>
    <main>
        <form action="./newCharacterAction" method="POST" enctype="multipart/form-data" class="newCharacter">
            <div class="picture-form">
                <label for="picture">Apparence</label>
                <img src="" alt="" class="dynamique">
                <input type="file" name="sprite" id="picture" accept=".jpg, .jpeg, .png" value="Image" required>
            </div>
            <div class="line">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" required>
                </div>
                <div class="form-group">
                    <label for="atk">Attaque</label>
                    <input type="number" name="atk" id="atk" required>
                </div>
                <div class="form-group">
                    <label for="pv">Vie</label>
                    <input type="number" name="pv" id="pv" required>
                </div>
            </div>
            <input type="submit" value="Créer" class="bouton plus">
        </form>
    </main>

    <script src="../scripts/newCharacter.js"></script>
</body>

</html>