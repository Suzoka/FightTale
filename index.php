<?php
include("./scripts/database.php");
session_start();


$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = trim($path, '/');
$segments = explode('/', $path);

$page = explode('?', end($segments))[0];

switch ($page) {
    case "accueil":
    default:
        $manager->resetGame();
        $listePersos = $manager->getAllCharacters();
        $rand1 = $listePersos[rand(0, count($listePersos) - 1)]->getId();
        $rand2 = $listePersos[rand(0, count($listePersos) - 1)]->getId();
        include("./vues/startScreen.php");
        break;
    case "fight":
        if (isset($_GET["j1"]) || isset($_GET["j2"])) {
            if (isset($_GET["j1"])) {
                if (count($_SESSION["historique"]) == 0 || end($_SESSION["historique"])->getJoueur() != 1) {
                    switch ($_GET["j1"]) {
                        case "atk":
                            array_push($_SESSION["historique"], new Historique(1, $_SESSION["joueur1"]->attaque($_SESSION["joueur2"])));
                            break;
                    }
                }
            } else if (isset($_GET["j2"])) {
                if (count($_SESSION["historique"]) == 0 || end($_SESSION["historique"])->getJoueur() != 2) {
                    switch ($_GET["j2"]) {
                        case "atk":
                            array_push($_SESSION["historique"], new Historique(2, $_SESSION["joueur2"]->attaque($_SESSION["joueur1"])));
                            break;
                    }
                }
            }
        }
        if (isset($_POST["player1"]) && isset($_POST["player2"])) {
            $_SESSION["joueur1"] = $manager->getCharacterById($_POST["player1"]);
            $_SESSION["joueur2"] = $manager->getCharacterById($_POST["player2"]);
            $_SESSION["historique"] = [];
            $turn = rand(1, 2);
            include("./vues/fight.php");
        } else {
            if (isset($_SESSION["joueur1"]) && isset($_SESSION["joueur2"])) {
                include("./vues/fight.php");
            } else {
                header("Location: ./accueil");
                exit();
            }
        }
        break;
    case "allCharacters":
        $listePersos = $manager->getAllCharacters();
        include("./vues/allCharacters.php");
        break;
    case "newCharacter":
        include("./vues/newCharacter.php");
        break;
}
?>