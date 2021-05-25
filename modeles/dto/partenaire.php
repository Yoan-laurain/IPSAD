<?php

class Partenaire
{
    use hydrate;
    private $id;
    private $libelle;
    private $image_;

    public function getId()
    {
        return $this->id;
    }

    public function getLibelle()
    {
        return $this->libelle;
    }

    public function getImage_()
    {
        return $this->image_;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    public function setImage_($image_)
    {
        $this->image_ = $image_;
    }
}

