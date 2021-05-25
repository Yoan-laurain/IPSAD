<?php

class AvisDAO
{
    public static function lesAvisActif()
    {
        $result = [];
        $sql = DBConnex::getInstance()->prepare("SELECT * FROM `avis` where actif=1");
        $sql->execute();
        $liste = $sql->fetchAll(PDO::FETCH_ASSOC);

        if(!empty($liste)){
            foreach($liste as $Avis){
                $unAvis =new Avis();
                $unAvis->hydrate($Avis);
                $result[] = $unAvis;
            }
        }
        return $result;
    }

    public static function lesAvisInactif()
    {
        $result = [];
        $sql = DBConnex::getInstance()->prepare("SELECT * FROM `avis`where actif=0");
        $sql->execute();
        $liste = $sql->fetchAll(PDO::FETCH_ASSOC);

        if(!empty($liste)){
            foreach($liste as $Avis){
                $unAvis =new Avis();
                $unAvis->hydrate($Avis);
                $result[] = $unAvis;
            }
        }
        return $result;
    }

    public static function supprimer($id)
    {
      $requetePrepa = DBConnex::getInstance()->prepare("DELETE from avis where id = :id");
      $requetePrepa->bindParam( ":id",$id);
      $requetePrepa->execute();
    }

    public static function ajouter($libelle,$entreprise,$logo,$Activite,$localisation) 
    {

      $requetePrepa = DBConnex::getInstance()->prepare("INSERT INTO avis(libelle,entreprise,logo,activite,Actif,localisation) VALUES(:libelle,:entreprise,:logo,:activite,0,:localisation)");

      $requetePrepa->bindParam( ":libelle",$libelle); 
      $requetePrepa->bindParam( ":entreprise",$entreprise); 
      $requetePrepa->bindParam( ":logo",$logo); 
      $requetePrepa->bindParam( ":activite",$Activite); 
      $requetePrepa->bindParam( ":localisation",$localisation); 

      $requetePrepa->execute();
    } 

    public static  function AccepterAvis($id) 
    {
        $requetePrepa = DBConnex::getInstance()->prepare("UPDATE avis SET Actif= 1 where id =:id");

        $requetePrepa->bindParam( ":id",$id);

        $requetePrepa->execute();
    }

    public static  function RefuserAvis($id) 
    {
        $requetePrepa = DBConnex::getInstance()->prepare("DELETE from avis where id= :id");

        $requetePrepa->bindParam( ":id",$id);

        $requetePrepa->execute();
    }

    
    public static  function RecupImage($id) 
    {
        $requetePrepa = DBConnex::getInstance()->prepare("SELECT logo from avis where id= :id");

        $requetePrepa->bindParam( ":id",$id);
        $requetePrepa->execute();

        $liste = $requetePrepa->fetch(); 

        return $liste[0];
    }
}