<?php

require_once('./models/Continents.php');
require_once('./models/Article.php');
require_once('./models/Driver.php');
require_once('./models/admin/AdminArticleModel.php');
require_once('./models/admin/AdminContinentModel.php');
// require_once('./controllers/admin/AuthController.php');

class AdminArticleController {
    private $driver;
    private $driver2;

    public function __construct() {
        $this->driver = new AdminArticleModel();
        $this->driver2 = new AdminContinentModel();
    }

    public function listArticles() {
        if(isset($_POST['search'])){
            $search = trim(htmlentities(addslashes($_POST['search'])));
            $rows = $this->driver->listArt(null,$search);
            require_once('./views/admin/articlesList.php');
        }elseif(isset($_GET['id'])) {
            $id = (int)$_GET['id'];
            $rows = $this->driver->listArt($id,null);
            require_once('./views/admin/articlesList.php');
        }else {
            $rows = $this->driver->listArt(null,null);
            require_once('./views/admin/articlesList.php');
        }
    }

    public function suppArticle(){
        // var_dump($_GET); die;
        if(isset($_GET['image']) && isset($_GET['id'])){
            $image = $_GET['image'];
            $id = (int)$_GET['id'];
            $n = $this->driver->deleteArticle($id);
            if($n){
                $fichier = './assets/images/'.$image;
                unlink($fichier);
                header('location:index.php?action=list_art');
             }
            }
        
    }

    public function addArticle(){

        if(isset($_POST['soumis']) && !empty($_POST['pays']) && !empty($_POST['auteur'])){
            $pays = trim(htmlentities(addslashes($_POST['pays'])));
            $continent = trim(htmlentities(addslashes($_POST['cont'])));
            $auteur = trim(htmlentities(addslashes($_POST['auteur'])));
            $des = trim(htmlentities(addslashes($_POST['des'])));
            $recit = trim(htmlentities(addslashes($_POST['recit'])));
            $recit1 = trim(htmlentities(addslashes($_POST['recit1'])));
            $recit2 = trim(htmlentities(addslashes($_POST['recit2'])));
            $recit3 = trim(htmlentities(addslashes($_POST['recit3'])));
            $image = $_FILES['image']['name'];
            $image1 = $_FILES['image1']['name'];
            $image2 = $_FILES['image2']['name'];
            $image3 = $_FILES['image3']['name'];
            $destination = './assets/images/';
            $destination2 = './assets/images/HD';
            move_uploaded_file($_FILES['image']['tmp_name'], $destination.$image);
            move_uploaded_file($_FILES['image1']['tmp_name'], $destination2.$image1);
            move_uploaded_file($_FILES['image2']['tmp_name'], $destination2.$image2);
            move_uploaded_file($_FILES['image3']['tmp_name'], $destination2.$image3);
        
            $art = new Article();
            
            $art->setPays($pays);
            $art->setAuteur($auteur);
            $art->setType_trip($des);
            $art->setRecit($recit);
            $art->setRecit1($recit1);
            $art->setRecit2($recit2);
            $art->setRecit3($recit3);
            $art->setId_cont($continent);
            $art->setImage($image);
            $art->setImageHD1($image1);
            $art->setImageHD2($image2);
            $art->setImageHD3($image3);
        
            $nb = $this->driver->plusArticle($art);
        
            if($nb){
                header('location:index.php?action=list_art');
            }else{
                echo "Echec l'ors de l'insertion";
            }
        
        }
        $datas = $this->driver2->getContinents();
        require_once('./views/admin/formArt.php');
    
    }


    public function editArticle(){
        if(isset($_GET['id'])){
            $id = (int)$_GET['id'];
            $row = $this->driver->ListArt($id);

            if(isset($_POST['soumis']) && !empty($_POST['pays']) && !empty($_POST['auteur'])){
            
                $pays = trim(htmlentities(addslashes($_POST['pays'])));
                $continent = trim(htmlentities(addslashes($_POST['cont'])));
                $auteur = trim(htmlentities(addslashes($_POST['auteur'])));
                $des = trim(htmlentities(addslashes($_POST['des'])));
                $recit = trim(htmlentities(addslashes($_POST['recit'])));
                $recit1 = trim(htmlentities(addslashes($_POST['recit1'])));
                $recit2 = trim(htmlentities(addslashes($_POST['recit2'])));
                $recit3 = trim(htmlentities(addslashes($_POST['recit3'])));
                $image = $_FILES['image']['name'];
                $image1 = $_FILES['image1']['name'];
                $image2 = $_FILES['image2']['name'];
                $image3 = $_FILES['image3']['name'];
                $destination = './assets/images/';
                $destination2 = './assets/images/HD';
                move_uploaded_file($_FILES['image']['tmp_name'], $destination.$image);
                move_uploaded_file($_FILES['image1']['tmp_name'], $destination2.$image1);
                move_uploaded_file($_FILES['image2']['tmp_name'], $destination2.$image2);
                move_uploaded_file($_FILES['image3']['tmp_name'], $destination2.$image3);
        
            //$veh = new Vehicule();
            
            $row[0]->setPays($pays);
            $row[0]->setAuteur($auteur);
            $row[0]->setType_trip($des);
            $row[0]->setRecit($recit);
            $row[0]->setRecit1($recit1);
            $row[0]->setRecit2($recit2);
            $row[0]->setRecit3($recit3);
            $row[0]->setId_cont($continent);
            $row[0]->setImage($image);
            $row[0]->setImageHD1($image1);
            $row[0]->setImageHD2($image2);
            $row[0]->setImageHD3($image3);

            $nb = $this->driver->updateArticle($row[0]);
            if($nb){
                header('location:index.php?action=list_art');
            }
            }
    
            //render edit form
                $datas = $this->driver2->getContinents();
                require_once('./views/admin/editFormArt.php');
        }
    
    }
}