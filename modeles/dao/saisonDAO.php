<?php

class SaisonDAO
{
    public static function lesSaisons()
    {
        $result = [];
        $sql = DBConnex::getInstance()->prepare("SELECT * FROM `saisons` order by Active DESC");
        $sql->execute();
        $liste = $sql->fetchAll(PDO::FETCH_ASSOC);

        if(!empty($liste)){
            foreach($liste as $Saison){
                $unSaison =new Saison();
                $unSaison->hydrate($Saison);
                $result[] = $unSaison;
            }
        }
        return $result;
    }

   public static function lire($libelle) 
   { 
       $requetePrepa = DBConnex::getInstance()->prepare("select script from saisons where libelle = :libelle");
       $requetePrepa->bindParam( ":libelle", $libelle);       
       $requetePrepa->execute();  

       $liste = $requetePrepa->fetch(); 

       return $liste[0];
   }

   
   public static function SaisonActive() 
   { 
       $requetePrepa = DBConnex::getInstance()->prepare("select script from saisons where Active = 1");    
       $requetePrepa->execute();  

       $liste = $requetePrepa->fetch(); 

       return $liste[0];
   }

   
   public static function supprimer($Libelle)
   {
     $requetePrepa = DBConnex::getInstance()->prepare("DELETE from saisons where libelle = :libelle");
     $requetePrepa->bindParam( ":libelle",$Libelle);
     $requetePrepa->execute();
   }

   
   public static  function ChangerSaisons($libelle) 
   {
       $requetePrepa = DBConnex::getInstance()->prepare("UPDATE saisons SET Active= 0");
       $requetePrepa->execute();

       $requetePrepa2 = DBConnex::getInstance()->prepare("UPDATE saisons SET Active= 1  where libelle = :libelle");
       
       $requetePrepa2->bindParam( ":libelle",$libelle);
       $requetePrepa2->execute();
   }

   public static function ajouter($libelle,$script) 
   {
     $requetePrepa = DBConnex::getInstance()->prepare("INSERT INTO saisons(libelle,script,Active) VALUES(:libelle,:script,0)");

     $requetePrepa->bindParam( ":libelle",$libelle); 
     $requetePrepa->bindParam( ":script",$script); 

     $requetePrepa->execute();
   } 
}