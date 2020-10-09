<?php

class AdminArticleModel extends Driver {

    public function listArt($id=null, $search=null) {
        if(!empty($search)){
            $sql = "SELECT * FROM articles a 
                    INNER JOIN continent c 
                    ON a.Id_continent = c.Id_continent
                    WHERE Pays LIKE ? OR Type_trip LIKE ? OR Auteur LIKE ? OR Recit LIKE ?";
                    $tabSearch = ["%$search%","%$search%","%$search%","%$search%"];
                    $res = $this->getRequest($sql,$tabSearch);

      
        }else if(!empty($id)){

                $sql = "SELECT*FROM articles WHERE Id = ?"; 
                $res = $this->getRequest($sql,[$id]);

        }else{

            $sql = "SELECT * FROM articles";
            $res = $this->getRequest($sql);


        }
        $lines = $res->fetchAll(PDO::FETCH_OBJ);

        // echo'<pre>';
        // var_dump($lines); die;
        // echo'</pre>';

        $donnees = [];

        foreach($lines as $line) {
            $art = new Article();
            $art->setId_art($line->Id);
            $art->setPays($line->Pays);
            $art->setType_trip($line->Type_trip);
            $art->setAuteur($line->Auteur);
            $art->setRecit($line->Recit);
            $art->setRecit1($line->Recit1);
            $art->setRecit2($line->Recit2);
            $art->setRecit3($line->Recit3);
            $art->setImage($line->Image);
            $art->setImageHD1($line->ImageHD1);
            $art->setImageHD2($line->ImageHD2);
            $art->setImageHD3($line->ImageHD3);
            $art->setId_cont($line->Id_continent);
            $art->Nom = $this->getNameCont($line->Id_continent)->getNom_cont();
            
            array_push($donnees, $art);
        }
// var_dump($donnees); die;
        return $donnees;
        
    }

    public function getNameCont($id){

        $sql = "SELECT * FROM continent WHERE id_continent = ?";
        $res = $this->getRequest($sql,[$id]);
        $data = $res->fetch(PDO::FETCH_OBJ);

        $cont = new Continents();
        if($res->rowCount()){
            $cont->setId_cont($data->Id_continent);
            $cont->setNom_cont($data->Nom);
        }
        return $cont;
    }

    public function deleteArticle($id){
        $sql = "DELETE FROM articles WHERE Id = ?";
        $res = $this->getRequest($sql,[$id]);
        $nb = $res->rowCount();
        return $nb;
    }

    public function plusArticle(Article $art){

        $sql = "INSERT INTO articles(Pays, Type_trip, Auteur, Recit, Recit1, Recit2, Recit3, Image, ImageHD1, ImageHD2, ImageHD3, Id_continent)
                VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";

        $tabParam = [$art->getPays(),$art->getType_trip(),$art->getAuteur(),$art->getRecit(),$art->getRecit1(),$art->getRecit2(),$art->getRecit3(),
        $art->getImage(),$art->getImageHD1(),$art->getImageHD2(),$art->getImageHD3(),
        $art->getId_cont()];
        $res = $this->getRequest($sql,$tabParam);

        return $res;

    }

    public function updateArticle(Article $art){
        $id = $art->getId_art();
        $image = $art->getImage();
        if($art->getImage() === "") {
            $image = $this->listArt($id)[0]->getImage();
        }
        $imageHD1 = $art->getImageHD1();
        if($art->getImageHD1() === "") {
            $imageHD1 = $this->listArt($id)[0]->getImageHD1();
        }
        $imageHD2 = $art->getImageHD2();
        if($art->getImageHD2() === "") {
            $imageHD2 = $this->listArt($id)[0]->getImageHD2();
        }
        $imageHD3 = $art->getImageHD3();
        if($art->getImageHD3() === "") {
            $imageHD3 = $this->listArt($id)[0]->getImageHD3();
        }

            $sql = "UPDATE articles
                    SET Pays=?, Type_trip=?, Auteur=?, Recit=?, Recit1=?, Recit2=?, Recit3=?, Image=?, ImageHD1=?, ImageHD2=?, ImageHD3=?, Id_continent=?
                    WHERE Id = ?";
            $tabArt = [$art->getPays(),$art->getType_trip(),$art->getAuteur(),$art->getRecit(),$art->getRecit1(),$art->getRecit2(),$art->getRecit3(),$image,$imageHD1,$imageHD2,$imageHD3,$art->getId_cont(),$art->getId_art()];

        $res = $this->getRequest($sql,$tabArt);
        return $res->rowCount();
    }
}