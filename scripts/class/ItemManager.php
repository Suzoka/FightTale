<?php
class ItemManager
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

    public function getFiveRandomItem(){
        
    }
}

?>