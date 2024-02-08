<?php
class ItemManager
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

    public function getFiveRandomItem(){
        $listeItems = [];
        $stmt = $this->db->prepare("SELECT * FROM `items` ORDER BY RAND() LIMIT 5");
        $stmt->execute();
        foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $item) {
            array_push($listeItems, new Item($item));
        }
        return $listeItems;
    }
}

?>