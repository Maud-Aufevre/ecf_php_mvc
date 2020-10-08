<?php

require_once('./models/Continents.php');
require_once('./models/Driver.php');


class AdminContinentModel extends Driver {

    public function getContinents(){
        $sql = "SELECT * FROM continent";
        $res = $this->getRequest($sql);
        $rows = $res->fetchAll(PDO::FETCH_OBJ);

        $continents = [];

        foreach($rows as $row) {
            $cont = new Continents();
            $cont->setId_cont($row->Id_continent);
            $cont->setNom_cont($row->Nom);
            array_push($continents,$cont);
            
        }
        return $continents;  
    }

    public function ajoutCont(Continent $cont) {
        $sql = "INSERT INTO continent(Nom) VALUES(?)";
        $res = $this->getRequest($sql,[$cont->getNom_cont()]);
        return $res;
    }

    public function suppCont($id) {
        $sql = "DELETE FROM continent WHERE Id_continent = ?";
        $res = $this->getRequest($sql,[$id]);
        $nb = $res->rowCount();
        return $nb;
    }
}
