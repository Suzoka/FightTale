<?php
function getAllCharacters() {
    global $db;
    $stmt = $db->prepare("SELECT * FROM `personnages`");
    $stmt->execute();
    return $stmt;
}

?>