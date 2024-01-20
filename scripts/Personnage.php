<?php
class Personnage
{
    private $nom;
    private $pv;
    private $atk;
    private $pvMax;

    public function getNom()
    {
        return $this->nom;
    }

    public function getPv()
    {
        return $this->pv;
    }

    public function getAtk()
    {
        return $this->atk;
    }

    public function setPv($newPv)
    {
        if ($newPv < 0) {
            $this->pv = 0;
            return;
        }
        if ($newPv > $this->pvMax) {
            $this->pv = $this->pvMax;
            return;
        }
        $this->pv = $newPv;
    }

    public function setAtk($newAtk)
    {
        if ($newAtk < 0) {
            $this->atk = 0;
            return;
        }
        $this->atk = $newAtk;
    }

    public function setNom($name)
    {
        $this->nom = $name;
    }

    public function __construct($nom, $vie, $atk)
    {
        $this->setNom($nom);
        $this->pvMax = $vie;
        $this->setPv($vie);
        $this->setAtk($atk);
    }

    public function crier()
    {
        return "Vous ne passerez pas !!!";
    }

    public function regenerer(int $x = null)
    {
        if (is_null($x)) {
            $this->setPv($this->pv = $this->pvMax);
            return;
        }
        $this->setPv($this->pv += $x);
    }

    public function is_alive()
    {
        return ($this->pv > 0) ? true : false;
    }

    public function attaque(Personnage $cible)
    {
        $this->setPv($cible->pv -= $this->atk);
    }
}
?>