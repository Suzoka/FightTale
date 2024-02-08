<?php
class Item
{
    private $id;
    private $nom;
    private $pvRestoration;

    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getPvRestoration()
    {
        return $this->pvRestoration;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setPvRestoration($pvRestoration)
    {
        $this->pvRestoration = $pvRestoration;
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

    public function __construct($data)
    {
        $this->hydratation($data);
    }
}
?>