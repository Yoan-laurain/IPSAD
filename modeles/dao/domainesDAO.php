<?php

    class DomainesDAO
    {
        public static function lesDomaines()
        {
            $result = [];
            $sql = DBConnex::getInstance()->prepare("SELECT * FROM `domaines`");
            $sql->execute();
            $liste = $sql->fetchAll(PDO::FETCH_ASSOC);

            if(!empty($liste)){
                foreach($liste as $Domaine){
                    $unDomaine =new Domaine();
                    $unDomaine->hydrate($Domaine);
                    $result[] = $unDomaine;
                }
            }
            return $result;
        }
    }
?>

