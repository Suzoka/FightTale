<?php
class Personnage
{
    private $id = null;
    private $nom;
    private $pv;
    private $atk;
    private $pvMax;

    private $colere = 0;

    private $resiste = 0;

    private $items = [];

    public function getId()
    {
        return $this->id;
    }

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

    public function getPvMax()
    {
        return $this->pvMax;
    }

    public function getPourcentagePv()
    {
        return ($this->pv / $this->pvMax) * 100;
    }

    public function setPv($newPv)
    {
        if (!isset($this->pvMax)) {
            $this->pvMax = $newPv;
        }
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

    public function setId($newId)
    {
        $this->id = $newId;
    }

    public function hydratation(array $data)
    {
        foreach ($data as $key => $value) {
            $method = "set" . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    public function setItem($items)
    {
        $this->items = $items;
    }

    public function __construct(array $data)
    {
        $this->hydratation($data);
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
        $degats = $this->atk;
        if ($this->colere != 0) {
            $degats *= 2;
        }
        if ($cible->resiste != 0) {
            $degats *= 0.5;
        }
        $cible->setPv($cible->pv - $degats);
        return $this->nom . " attaque " . $cible->nom . " et lui inflige " . $degats . " points de dégâts !";
    }

    public function rageMod()
    {
        //Rester en colère pendant 2 tours
        $this->colere = 3;
        return $this->nom. " commence à s'énerver";
    }

    public function resisteMod()
    {
        //Rester protégé pendant 2 tours
        $this->resiste = 2;
        return $this->nom. " se prépare à encaisser les coups";
    }

    public function updateStatus()
    {
        if ($this->colere != 0) {
            $this->colere--;
        }
        if ($this->resiste != 0) {
            $this->resiste--;
        }
    }
}
?>