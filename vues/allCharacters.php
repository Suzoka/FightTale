<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des personnages | FightTale</title>
    <link rel="stylesheet" href="../style/style.css">
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
                    <th scope="column">Apparence</th>
                    <th scope="column">Nom</th>
                    <th scope="column">Attaque</th>
                    <th scope="column">PV</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listePersos as $perso) { ?>
                    <tr>
                        <td><img src="../img/sprites/<?php echo $perso["id"] ?>.png" alt=""></td>
                        <th scope="row"><?php echo $perso["nom"] ?></th>
                        <td><?php echo $perso["attaque"] ?></td>
                        <td><?php echo $perso["vie"] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>

    <!-- <script src="../scripts/charactersList.js"></script> -->
</body>

</html>