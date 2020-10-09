<?php

require_once('./models/admin/AdminContinentModel.php');



class AdminContinentController {
    private $driver;

    public function __construct() {
        $this->driver = new AdminContinentModel();

    }

    public function listContinents() {
        AuthController::islogged();
        $donnees = $this->driver->getContinents();
        require_once('./views/admin/continentsList.php');

    }

    public function addContinent() {
        AuthController::islogged();
        if(isset($_POST['ajout']) && !empty($_POST['zone'])){
            $nomCont = trim(htmlspecialchars($_POST['zone']));
            $newCont = new Continent();
            $newCont->setNom_cont($nomCont);
            $res = $this->driver->ajoutCont($newCont);
            if($res) {
                header('location:index.php?action=list_cont');
            }
        }
        require_once('./views/admin/formCont.php');
    }

    public function deleteContinent($id) {
        AuthController::islogged();
        $nb = $this->driver->suppCont($id);
        if($nb) {
            header('location:index.php?action=list_cont');
        }
    }
}

