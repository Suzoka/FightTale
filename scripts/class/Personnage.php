<?php
class Personnage
{
    private $id;
    private $nom;
    private $pv;
    private $atk;
    private $pvMax;

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
        $this->setPv($cible->pv -= $this->atk);
    }
}
?>