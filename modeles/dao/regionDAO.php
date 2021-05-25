<?php

class RegionDAO
{
    public static function lesRegions()
    {
        $result = [];
        $sql = DBConnex::getInstance()->prepare("SELECT * FROM `region`");
        $sql->execute();
        $liste = $sql->fetchAll(PDO::FETCH_ASSOC);

        if(!empty($liste)){
            foreach($liste as $Region){
                $uneRegion =new Region();
                $uneRegion->hydrate($Region);
                $result[] = $uneRegion;
            }
        }
        return $result;
    }
}