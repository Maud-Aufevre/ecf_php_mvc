<?php

ob_start();
?>

<div class="container">
    <h1>Blog-Trotteurs / admin</h1>
    <h2 id="titreArticles">Liste des continents</h2>

            <div class="text-right">
                <a id="bAdd" class="btn btn-warning" href="index.php?action=add_cont"><i class="fa fa-plus"></i> Ajouter</a>
            </div>
    <table class="table">
        <thead id="entetes">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody id="articlesBlog">

        <?php 
            
            foreach($donnees as $key=>$data) { ?>
            <tr>
                <td><?=$donnees[$key]->getId_cont(); ?></td>
                <td><?=$donnees[$key]->getNom_cont(); ?></td>

                <td class="text-center">
                    <a class = "btn btn-danger" onclick="return confirm('êtes vous sûr de vouloir supprimer cet article?')" href="index.php?action=delete_cont&id=<?=$donnees[$key]->getId_cont()?>"><i class="fa fa-trash"></i> Supprimer</a>
                </td>
            </tr>
            
        <?php } ?>
        </tbody>
    </table>
</div>

<?php
define('ROOT', dirname(__DIR__));
$content = ob_get_clean();
// var_dump(ROOT.'/template.php'); die;
require_once(ROOT.'./template.php');
// require_once('./views/template.php');
?>
