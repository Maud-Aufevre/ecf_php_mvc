<?php
ob_start();
?>
<h1 class="h2 text-center">Modifier un article</h1>
<form action="" method="post" enctype="multipart/form-data">
    <div class="row">
    <div class="form-group col">
        <label for="pays">Pays:</label>
        <input type="text" name="pays" id="pays" placeholder="Entrer le pays" class="form-control" value="<?=$row[0]->getPays();?>">
    </div>
    <div class="form-group col">
        <label for="cont">Zone géographique:</label>
        <select name="cont" id="cont" class="form-control">
        <option value="<?=$row[0]->getId_cont();?>"><?=$row[0]->Nom;?></option>
        <?php foreach($datas as $art){ 
            if($row[0]->getId_cont() != $art->getId_cont()){ ?> 
            <option value="<?=$art->getId_cont();?>">
            <?=$art->getNom_cont();?></option>
        <?php }} ?><?php foreach($datas as $art){ ?>  
        <option value="<?=$art->getId_cont();?>"><?=$art->getNom_cont();?></option>
        <?php } ?>
        </select>
    </div>
    </div>
    <div class="form-group col">
        <label for="auteur">Auteur:</label>
        <input type="text" name="auteur" id="auteur" placeholder="Entrer l'auteur du voyage" class="form-control" value="<?=$row[0]->getAuteur();?>">
    </div>
    <div class="form-group col">
        <label for="des">Description:</label>
        <textarea placeholder="Courte description" class="form-control" name="des" id="des" cols="30" rows="3"><?=$row[0]->getType_trip();?></textarea>
    </div>
  
    <div class="form-group col">
        <label for="recit">Récit:</label>
        <textarea placeholder="Résumé du voyage" class="form-control" name="recit" id="recit" cols="30" rows="3"><?=$row[0]->getRecit();?></textarea>
    </div>

    <div class="row">
    <div class="form-group col">
        <label for="image">Image principale:</label>
        <p class="mt-1"><img src="./assets/images/<?=$row[0]->getImage();?>" alt="" width="100"></p>
        <input type="File" name="image" id="image"  class="form-control">
    </div>

    </div>
    <div class="form-group col">
        <label for="recit1">Récit 1:</label>
        <textarea placeholder="Récit 1ère partie" class="form-control" name="recit1" id="recit1" cols="30" rows="10"><?=$row[0]->getRecit1();?></textarea>
    </div>

 
    <div class="form-group col">
        <label for="image1">Image 1:</label>
        <p class="mt-1"><img src="./assets/images/HD/<?=$row[0]->getImageHD1();?>" alt="" width="100"></p>
        <input type="File" name="image1" id="image1"  class="form-control">
    </div>

    <div class="form-group col">
        <label for="recit2">Récit 2:</label>
        <textarea placeholder="Récit 2eme partie" class="form-control" name="recit2" id="recit2" cols="30" rows="10"><?=$row[0]->getRecit2();?></textarea>
    </div>
 

 
    <div class="form-group col">
        <label for="image2">Image 2:</label>
        <p class="mt-1"><img src="./assets/images/HD/<?=$row[0]->getImageHD2();?>" alt="" width="100"></p>
        <input type="File" name="image2" id="image2"  class="form-control">
    </div>

    <div class="form-group col">
        <label for="recit3">Récit 3:</label>
        <textarea placeholder="Récit 3eme partie" class="form-control" name="recit3" id="recit3" cols="30" rows="10"><?=$row[0]->getRecit3();?></textarea>
    </div>



    <div class="form-group col">
        <label for="image3">Image 3:</label>
        <p class="mt-1"><img src="./assets/images/HD/<?=$row[0]->getImageHD3();?>" alt="" width="100"></p>
        <input type="File" name="image3" id="image3"  class="form-control">
    </div>



    <button type="submit" name="soumis" class="btn btn-secondary btn-block">Modifier</button>
</form>
<?php

$content = ob_get_clean();
require_once('./views/template.php');
?>