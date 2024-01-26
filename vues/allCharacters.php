<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des personnages | FightTale</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/logos.css">
</head>

<body>
    <header>
        <a href="./startScreen" class="bouton back">Retour</a>
        <h1>Liste des personnages</h1>
    </header>
    <main class="liste">
        <table>
            <thead>
                <tr>
                    <th scope="col">Apparence</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Attaque</th>
                    <th scope="col">PV</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listePersos as $perso) { ?>
                    <tr>
                        <td><img src="../img/sprites/<?php echo $perso->getId() ?>.png" alt=""></td>
                        <th scope="row"><?php echo $perso->getNom() ?></th>
                        <td><?php echo $perso->getAtk() ?></td>
                        <td><?php echo $perso->getPv() ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>

</body>

</html>