<?php

abstract class Driver {
    private static $bd;

    protected function getRequest($sql, $params = null){
        $resultat = self::getBd()->prepare($sql);
        $resultat->execute($params);
        return $resultat;
    }

    private static function getBd(){
        if(self::$bd == null){
            self::$bd = new PDO('mysql:host=localhost;dbname=ecf_php_maud','root');
            self::$bd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        return self::$bd;
    }
}