<?php

class MessageDAO
{
    public static function lire() 
    { 
        $requetePrepa = DBConnex::getInstance()->prepare("select libelle from message_ where id=1");
        $requetePrepa->execute();   
        $liste = $requetePrepa->fetch(); 
 
        return $liste[0];
    }

    public static function lire2() 
    { 
        $requetePrepa = DBConnex::getInstance()->prepare("select libelle from message_ where id=2");
        $requetePrepa->execute();   
        $liste = $requetePrepa->fetch(); 
 
        return $liste[0];
    }

    public static  function ChangerMessage($libelle) 
    {
        $requetePrepa = DBConnex::getInstance()->prepare("UPDATE message_ SET libelle= :libelle where id=1");

        $requetePrepa->bindParam( ":libelle",$libelle);

        $requetePrepa->execute();
    }

    public static  function ChangerMessage2($libelle) 
    {
        $requetePrepa = DBConnex::getInstance()->prepare("UPDATE message_ SET libelle= :libelle where id=2");

        $requetePrepa->bindParam( ":libelle",$libelle);

        $requetePrepa->execute();
    }
}
