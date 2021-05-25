<?php

class Region
{
    use hydrate;
    private $id;
    private $libelle;

    public function getlibelle()
    {
        return $this->libelle;
    }

    public function setlibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
}