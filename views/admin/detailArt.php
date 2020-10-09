<?php 

ob_start();?>

<br/>
<div class="container mx-6">
    <h1>Détail</h1>
    <div class="text-right">
    <a class= "btn" href="index.php?action=list_art"><i class="fas fa-arrow-alt-circle-left" style="font-size:36px"></i> Retour</a>
    </div>
    <h2 class="h3 text-center">Un voyage en <?=$row[0]->Nom;?> ...</h2>
    <br/>
    <div class="row shadow p-3 mb-5 bg-white rounded mt-6">
        <div class="col-8">
            <img src="./assets/images/HD/<?=$row[0]->getImageHD1();?>" alt="" class="img-thumbnail"/>
        </div>
        <div class="col-4">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <strong>Pays : </strong><?=$row[0]->getPays();?>
                </li>
                <li class="list-group-item">
                    <strong>Trip : </strong><?=$row[0]->getType_trip();?>
                </li>
                <li class="list-group-item text-right">
                    <i>Par - </i><i><?=$row[0]->getAuteur();?></i><i> -</i>
                </li>
            </ul>
        </div>
    </div>
    <br/>
    <div class="mb-3">
    <?=$row[0]->getRecit1();?>
    </div>
    <div>
    <img class="img-fluid mb-6" src="./assets/images/HD/<?=$row[0]->getImageHD1();?>" alt="visuel 1"/>
    </div>
    <br/>
    <div class="mb-3">
    <?=$row[0]->getRecit2();?>
    </div>
    <div>
    <img class="img-fluid mb-6" src="./assets/images/HD/<?=$row[0]->getImageHD2();?>" alt="visuel 2"/>
    </div>
    <br/>
    <div class="mb-3">
    <?=$row[0]->getRecit3();?>
    </div>
    <div>
    <img class="img-fluid mb-6" src="./assets/images/HD/<?=$row[0]->getImageHD3();?>" alt="visuel 3"/>
    </div>
    <div class="text-right">
    <a class= "btn" href="index.php?action=list_art"><i class="fas fa-arrow-alt-circle-left" style="font-size:36px"></i> Retour</a>
    </div>
</div>
<br/>

<?php
$content = ob_get_clean();
require_once('./views/template.php');
?>