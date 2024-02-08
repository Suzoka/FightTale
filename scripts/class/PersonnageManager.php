<?php
class PersonnageManager
{
    private $db;

    public function __construct($db)
    {
        $this->setDb($db);
    }

    public function setDb(PDO $db)
    {
        $this->db = $db;
    }

    public function getAllCharacters()
    {
        $stmt = $this->db->prepare("SELECT * FROM `personnages` order by `nom` asc");
        $stmt->execute();
        while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $listePersos[] = new Personnage($data);
        }
        return $listePersos;
    }

    public function getCharacterById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM `personnages` WHERE `id` = :id");
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        $perso = new Personnage($data);
        return $perso;
    }

    public function resetGame()
    {
        $_SESSION = array();
        session_destroy();
    }

    public function addPersonnage(Personnage $perso): bool
    {
        $stmt = $this->db->prepare("INSERT INTO `personnages` (`nom`, `pv`, `atk`) values (:nom, :pv, :atk)");
        $stmt->bindValue(':nom', $perso->getNom(), PDO::PARAM_STR);
        $stmt->bindValue(':pv', $perso->getPv(), PDO::PARAM_INT);
        $stmt->bindValue(':atk', $perso->getAtk(), PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function getLastCharacterId()
    {
        $stmt = $this->db->prepare("select id from `personnages` order by id desc limit 1");
        $stmt->execute();
        return $stmt->fetchColumn();
    }

    public function deletePerso($id)
    {
        $stmt = $this->db->prepare("delete from `personnages` where id=:id");
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function updatePerso(Personnage $perso) {
        $stmt = $this->db->prepare("update personnages set nom=:nom, atk=:atk, pv=:pv where id=:id");
        $stmt->bindValue(':nom', $perso->getNom(), PDO::PARAM_STR);
        $stmt->bindValue(':atk', $perso->getAtk(), PDO::PARAM_INT);
        $stmt->bindValue(':pv', $perso->getPv(), PDO::PARAM_INT);
        $stmt->bindValue(':id', $perso->getId(), PDO::PARAM_INT);
        return $stmt->execute();
    }
}

?>