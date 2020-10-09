<?php

require_once('./models/admin/AdminUserModel.php');

class AdminUserController
{

    private $driver;

    public function __construct()
    {
        $this->driver = new AdminUserModel();
    }

    public function listUsers()
    {
        AuthController::islogged();
        $datas = $this->driver->getUser();
        require_once('./views/admin/userList.php');
    }

    public function insertUser()
    {
        AuthController::islogged();
        if (isset($_POST['envoi']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            // var_dump($_POST); die;

            $login = trim(htmlentities(addslashes($_POST['login'])));
            $email = trim(htmlentities(addslashes($_POST['email'])));
            $mdp = md5(trim(htmlentities(addslashes($_POST['mdp']))));
            if (isset($_POST['admin'])) {
                $droits = 1;
            } else {
                $droits = 2;
            }


            $user = new User();

            $user->setLogin($login);
            $user->setEmail($email);
            $user->setMdp($mdp);
            $user->setDroits($droits);

            $error = $this->driver->addUser($user);


        }


        require_once('./views/admin/formAddUser.php');
    }
    public function updateStatus()
    {
        AuthController::islogged();
        // var_dump($_GET); die;
        if (isset($_GET['id']) && isset($_GET['statut'])) {
            $id = (int)$_GET['id'];
            $statut = (bool)$_GET['statut'];

            if ($statut == 1) {
                $statut = 0;
            } else {
                $statut = 1;
            }
            $this->driver->changeStatut($statut, $id);

            header('location:index.php?action=list_user');
        }
    }
    public function login()
    {

        if (isset($_POST['envoi']) && strlen($_POST['mdp']) >= 4 && !empty($_POST['login'])) {
            $login = trim(htmlentities(addslashes($_POST['login'])));
            $mdp = md5(trim(htmlentities(addslashes($_POST['mdp']))));
            $res = $this->driver->signIn($login, $mdp);
            if ($res->rowCount()) {
                $rows = $res->fetch(PDO::FETCH_OBJ);
                // var_dump($rows); die;
                if ($rows->Statut == 1) {
                    session_start();
                    $_SESSION['Auth'] = $rows;
                    header('location:index.php?action=list_art');
                } else {
                    $error = "Ce compte a été suspendu";
                }
            } else {
                $error =  "Identifiant et mot de passe ne correspondent pas";
            }
        }
        require_once('./views/admin/formAuthent.php');
    }
}
