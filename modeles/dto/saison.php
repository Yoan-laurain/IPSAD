<?php
class Saison
{
    use hydrate;
    private $idSaison;
    private $libelle;
    private $script;

    public function getIdSaison()
    {
        return $this->idSaison;
    }

    public function getLibelle()
    {
        return $this->libelle;
    }

    public function getScript()
    {
        return $this->script;
    }

    public function setIdSaison($idSaison)
    {
        $this->idSaison = $idSaison;
    }

    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    public function setScript($script)
    {
        $this->script = $script;
    }
}
?>