<?php
class Utilisateur{
    use hydrate;
    private  $id;
    private  $nom;
    private  $prenom;
    private  $Mail;
    private  $mdp;
    private  $statut;
    private  $veille;
    private $jeton;
    private $sel;


    public function getJeton()
    {
        return $this->jeton;
    }

    public function setJeton($jeton)
    {
        $this->jeton = $jeton;
    }

    public function getSel()
    {
        return $this->sel;
    }

    public function setSel($sel)
    {
        $this->sel = $sel;
    }
    public function __construct()
    {} 
    
    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getMail()
    {
        return $this->Mail;
    }

    public function getMdp()
    {
        return $this->mdp;
    }

    public function getStatut()
    {
        return $this->statut;
    }

    public function getVeille()
    {
        return $this->veille;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function setMail($Mail)
    {
        $this->Mail = $Mail;
    }

    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }

    public function setStatut($statut)
    {
        $this->statut = $statut;
    }

    public function setVeille($veille)
    {
        $this->veille = $veille;
    }    
}