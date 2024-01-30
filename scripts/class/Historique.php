<?php
class Historique
{
    private $joueur = "";
    private $detail = "";

    public function __construct($joueur, $detail)
    {
        $this->joueur = $joueur;
        $this->detail = $detail;
    }

    public function getJoueur()
    {
        return $this->joueur;
    }

    public function getDetail()
    {
        return $this->detail;
    }
}
?>