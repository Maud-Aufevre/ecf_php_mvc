<?php
ob_start();
?>

<div id="corpsPage">

    <h1>Blog-Trotteurs / admin</h1>


    <?php  foreach($datasArt as $art){ ?>
                <a href="index.php?action=detail_article&id=<?=$art->getId_art(); ?>"><article class="art">
                        <div class="continent"><?=$art->Nom;?></div>
                        <div class="image">
                            <img src=./assets/images/<?=$art->getImage();?> alt=Visuel/>
                        </div>
                        <ul class="légende">
                            <li class="pays"><?=$art->getPays();?></li>
                            <li class="typeTrip"><?=$art->getType_trip();?></li>
                            <li class="auteur">- par  <?=$art->getAuteur();?>  -</li>
                            <li class="récit"><?=$art->getRecit();?></li>
                        </ul> 
                </article></a>
    
    <?php } ?>
</div>



<?php
$content = ob_get_clean();
require_once('./views/template.php');
?>