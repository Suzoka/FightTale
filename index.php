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
                    $_SESSION["joueur1"]->updateStatus();
                    switch ($_GET["j1"]) {
                        case "atk":
                            array_push($_SESSION["historique"], new Historique(1, $_SESSION["joueur1"]->attaque($_SESSION["joueur2"])));
                            break;
                        case "colere":
                            array_push($_SESSION["historique"], new Historique(1, $_SESSION["joueur1"]->rageMod()));
                            break;
                        case "resiste":
                            array_push($_SESSION["historique"], new Historique(1, $_SESSION["joueur1"]->resisteMod()));
                            break;
                        case "item":
                            break;
                    }
                }
            } else if (isset($_GET["j2"])) {
                if (count($_SESSION["historique"]) == 0 || end($_SESSION["historique"])->getJoueur() != 2) {
                    $_SESSION["joueur2"]->updateStatus();
                    switch ($_GET["j2"]) {
                        case "atk":
                            array_push($_SESSION["historique"], new Historique(2, $_SESSION["joueur2"]->attaque($_SESSION["joueur1"])));
                            break;
                        case "colere":
                            array_push($_SESSION["historique"], new Historique(2, $_SESSION["joueur2"]->rageMod()));
                            break;
                        case "resiste":
                            array_push($_SESSION["historique"], new Historique(2, $_SESSION["joueur2"]->resisteMod()));
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
    case "newCharacterAction":
        if (isset($_POST["nom"]) && isset($_POST["atk"]) && isset($_POST["pv"]) && ($_FILES["sprite"]["name"] != '') && !empty($_FILES)) {
            $manager->addPersonnage(new Personnage(["nom" => $_POST["nom"], "atk" => $_POST["atk"], "pv" => $_POST["pv"]]));
            move_uploaded_file($_FILES["sprite"]["tmp_name"], "./img/sprites/{$manager->getLastCharacterId()}.png");
            header("Location: ./allCharacters");
        } else {
            header("Location: ./newCharacter?error=true");
        }
        break;
    case "deleteCharacter":
        if (isset($_GET["id"])) {
            if ($manager->deletePerso($_GET["id"])){
                header("Location: ./allCharacters");
            }
            else {
                header("Location: ./allCharacters?error=true");
            }
        } else {
            header("Location: ./allCharacters");
        }
        break;
    case "editCharacter":
        if (isset($_GET["id"])){
            $perso = $manager->getCharacterById($_GET["id"]);
            include("./vues/editCharacter.php");
        }
        else {
            header("Location: ./allCharacters");
        }
}
?>