<?php

class Domaine
{
    use hydrate;
    private  $id;
    private  $Nom;
    private  $Texte;
    private  $LienImage;

    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->Nom;
    }

    public function getTexte()
    {
        return $this->Texte;
    }

    public function getLienImage()
    {
        return $this->LienImage;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNom($Nom)
    {
        $this->Nom = $Nom;
    }

    public function setTexte($Texte)
    {
        $this->Texte = $Texte;
    }

    public function setLienImage($LienImage)
    {
        $this->LienImage = $LienImage;
    }    
}