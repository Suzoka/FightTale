<?php
class PersonnageManager
{
    private $db;

    public function __construct($db)
    {
        $this->setDb = $db;
    }

    public function setDb(PDO $db)
    {
        $this->db = $db;
    }

    public function getAllCharacters() {
        global $db;
        $stmt = $db->prepare("SELECT * FROM `personnages`");
        $stmt->execute();
        while ($data = $stmt->fetch(PDO::FETCH_ASSOC)){
            $listePersos[] = new Personnage($data);
        }
        return $listePersos;
    }

    public function getCharacterById($id){
        global $db;
        $stmt = $db->prepare("SELECT * FROM `personnages` WHERE `id` = :id");
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        $perso = new Personnage($data);
        return $perso;
    }

    public function resetGame() {
        $_SESSION = array();
        session_destroy();
    }

    public function addPersonnage (Personnage $perso) :bool {
        global $db;
        $stmt = $db->prepare("INSERT INTO `personnages` (`nom`, `pv`, `atk`) values (:nom, :pv, :atk)");
        $stmt->bindValue(':nom', $perso->getNom(), PDO::PARAM_STR);
        $stmt->bindValue(':pv', $perso->getPv(), PDO::PARAM_INT);
        $stmt->bindValue(':atk', $perso->getAtk(), PDO::PARAM_INT);
        return $stmt->execute();
    }
}

?>