<?php

require_once('./models/User.php');
require_once('./models/Driver.php');

class AdminUserModel extends Driver
{

    public function getUser()
    {

        $sql = "SELECT * FROM utilisateurs";
        $res = $this->getRequest($sql);
        $rows = $res->fetchAll(PDO::FETCH_OBJ);
        $donnees = [];

        foreach ($rows as $row) {
            $user  = new User();

            $user->setId_user($row->Id_user);
            $user->setLogin($row->Login);
            $user->setEmail($row->Email);
            $user->setDroits($row->Droits);
            $user->Statut = $row->Statut;
            array_push($donnees, $user);
        }
        return $donnees;
    }

    public function addUser(User $user)
    {

        $req = "SELECT * FROM utilisateurs WHERE Email = ?";

        $res2 = $this->getRequest($req, [$user->getEmail()]);

        if ($res2->rowCount() == 0) {
            $sql = "INSERT INTO utilisateurs(Login,Mdp,Email,Droits)
                VALUES(?,?,?,?)";
            $tabUser = [$user->getLogin(), $user->getMdp(), $user->getEmail(), $user->getDroits()];

            $res2 = $this->getRequest($sql, $tabUser);
            
            if ($res2) {
                header('location:index.php?action=list_user');
            }
            return "";
        } else {
            return "Ce compte existe déjà...";
        }
    }

    public function changeStatut($statut, $id)
    {

        $sql = "UPDATE utilisateurs SET statut = ? WHERE Id_user = ?";

        $res = $this->getRequest($sql, [$statut, $id]);

        return $res->rowCount();
    }


    public function signIn($login, $mdp)
    {
        $sql = "SELECT * FROM utilisateurs WHERE (Login = :login OR Email = :login) AND Mdp = :mdp";
        $res = $this->getRequest($sql, ['login' => $login, 'mdp' => $mdp]);
        return $res;
    }
}
