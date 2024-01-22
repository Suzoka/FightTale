<?php
include("./scripts/database.php");
session_start();


$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = trim($path, '/');
$segments = explode('/', $path);

$page = end($segments);

switch ($page) {
    case "accueil":
    default:
        $listePersos = $manager->getAllCharacters();
        $rand1 = $listePersos[rand(0, count($listePersos) - 1)]->getId();
        $rand2 = $listePersos[rand(0, count($listePersos) - 1)]->getId();
        include("./vues/startScreen.php");
        break;
    case "fight":
        var_dump($_POST);
        $_SESSION["joueur1"] = $manager->getCharacterById($_POST["player1"]);
        $_SESSION["joueur2"] = $manager->getCharacterById($_POST["player2"]);
        var_dump($_SESSION);
        break;
    case "allCharacters" :
        $listePersos = $manager->getAllCharacters();
        include("./vues/allCharacters.php");
        break;
    case "newCharacter" :
        include("./vues/newCharacter.php");
        break;
}
?>