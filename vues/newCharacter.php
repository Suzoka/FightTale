<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau personnage | FightTale</title>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
    <header>
        <a href="./startScreen" class="bouton back">Retour</a>
        <h1>Ajouter un nouveau personnage</h1>
    </header>
    <main>
        <form action="./newCharacterAction" method="POST">
            <div class="picture-form">
                <label for="picture">Apparence</label>
                <input type="file" name="sprite" id="picture" accept=".jpg, .jpeg, .png" value="Image">
            </div>
            <div class="line">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" required>
                </div>
                <div class="form-group">
                    <label for="attaque">Attaque</label>
                    <input type="number" name="attaque" id="attaque" required>
                </div>
                <div class="form-group">
                    <label for="vie">Vie</label>
                    <input type="number" name="vie" id="vie" required>
                </div>
            </div>
            <input type="submit" value="Créer" class="bouton plus">
        </form>
    </main>

</body>

</html>