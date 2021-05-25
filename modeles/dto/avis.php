<?php

class Avis
{
    use hydrate;
    private $id;
    private $libelle;
    private $entreprise;
    private $logo;
    private $Acitivite;
    private $Actif;
    private $localisation;

    public function getlocalisation()
    {
        return $this->localisation;
    }

    public function setlocalisation($localisation)
    {
        $this->localisation = $localisation;
    }


    public function getActif()
    {
        return $this->Actif;
    }

    public function setActif($Actif)
    {
        $this->Actif = $Actif;
    }

    public function getActivite()
    {
        return $this->Acitivite;
    }

    public function setActivite($Acitivite)
    {
        $this->Acitivite = $Acitivite;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getLibelle()
    {
        return $this->libelle;
    }

    public function getEntreprise()
    {
        return $this->entreprise;
    }

    public function getLogo()
    {
        return $this->logo;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;
    }

    public function setLogo($logo)
    {
        $this->logo = $logo;
    }
 
}