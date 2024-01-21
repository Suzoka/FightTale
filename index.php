<?php
include("./scripts/database.php");
include("./scripts/Personnage.php");
include("./scripts/script.php");
session_start();


$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = trim($path, '/');
$segments = explode('/', $path);

$page = end($segments);

switch ($page) {
    case "accueil":
    default:
        $listePersos = getAllCharacters()->fetchAll(PDO::FETCH_ASSOC);
        $rand1 = $listePersos[rand(0, count($listePersos) - 1)]["id"];
        $rand2 = $listePersos[rand(0, count($listePersos) - 1)]["id"];
        include("./vues/startScreen.php");
        break;
    case "fight":
        var_dump($_POST);
        break;
    case "allCharacters" :
        $listePersos = getAllCharacters()->fetchAll(PDO::FETCH_ASSOC);
        include("./vues/allCharacters.php");
        break;
}
?>