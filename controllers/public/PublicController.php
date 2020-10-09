<?php

require_once('./models/admin/AdminContinentModel.php');
require_once('./models/admin/AdminArticleModel.php');

class PublicController{

    private $driver1;
    private $driver2;


    public function __construct()
    {
        $this->driver1 = new AdminContinentModel(); 
        $this->driver2 = new AdminArticleModel(); 

    }

    public function getData(){
        $datasCont = $this->driver1->getContinents();
        $datasArt = $this->driver2->listArt();
        require_once('./views/public/listData.php');
    }

    public function detailArticle() {

        $datas = $this->driver1->getContinents();

    if(isset($_GET['id'])) {
            $id = (int)$_GET['id'];
            $row = $this->driver2->listArt($id,null);
            require_once('./views/public/detailArticle.php');
        }else {
            $row = $this->driver2->listArt(null,null);
            require_once('./views/public/listData.php');
        }
    }
}