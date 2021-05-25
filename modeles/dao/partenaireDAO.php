<?php

    class PartenaireDAO
    {
        public static function lesPartenaires()
        {
            $result = [];
            $sql = DBConnex::getInstance()->prepare("SELECT * FROM `partenaires`");
            $sql->execute();
            $liste = $sql->fetchAll(PDO::FETCH_ASSOC);

            if(!empty($liste)){
                foreach($liste as $Parenaire){
                    $Partenaire =new Partenaire();
                    $Partenaire->hydrate($Parenaire);
                    $result[] = $Partenaire;
                }
            }
            return $result;
        }

        public static function supprimer($Libelle)
        {
          $requetePrepa = DBConnex::getInstance()->prepare("DELETE from partenaires where libelle = :libelle");
          $requetePrepa->bindParam( ":libelle",$Libelle);
          $requetePrepa->execute();
        }

        public static function ajouter($libelle,$nom) 
        {
 
          $requetePrepa = DBConnex::getInstance()->prepare("INSERT INTO partenaires(libelle,image_) VALUES(:libelle,:nom)");
     
          $requetePrepa->bindParam( ":libelle",$libelle); 
          $requetePrepa->bindParam( ":nom",$nom); 

          $requetePrepa->execute();
        } 
    }
?>

