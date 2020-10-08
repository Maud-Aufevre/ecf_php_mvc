<?php

ob_start();
?>

<div class="container">

    <h1>Blog-Trotteurs / admin</h1>
    <h2 id="titreArticles">Liste des articles</h2>
    <form action="" method="post">
        <div class="input-group justify-content-end">
            <input type="search" class="form-control col-4 text-center" name="search" placeholder="Recherche">
            <button type="submit">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </form>
    <table class="table">
        <thead id="entetes">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Auteur</th>
                <th scope="col">Photo</th>
                <th scope="col">Pays</th>
                <th scope="col">Description</th>
                <th scope="col">Récit</th>
                <th colspan="3" scope="col">Actions</th>
            </tr>
        </thead>
        <tbody id="articlesBlog">

            <div class="text-right">
                <a id="bAdd" class="btn btn-warning" href="index.php?action=add_art"><i class="fa fa-plus"></i> Ajouter</a>
            </div>

            <?php foreach($rows as $key=>$data) { ?>
            <tr>
                <td><?=$data->getId_art(); ?></td>
                <td class="contenuArt"><?=$data->getAuteur(); ?></td>
                <td>
                    <img src="./assets/images/<?=$data->getImage(); ?>" width="120" alt={e.image}/>
                </td>
                <td class="contenuArt"><?=$data->getPays(); ?></td> 
                <td class="contenuArt"><?=$data->getType_trip(); ?></td>
                <td class="contenuArt"><?=$data->getRecit(); ?></td>

                <td>
                    <a class="btn btn-success" href="index.php?action=detail_art&id=<?=$data->getId_art(); ?>"><i class="fas fa-info"></i> Détail</a>
                </td>
                <td>
                    <a class="btn btn-warning" href="index.php?action=edit_art&id=<?=$data->getId_art(); ?>"><i class="fas fa-pen"></i> Editer</a>
                </td>
                <td>
                    <a class = "btn btn-danger" onclick="return confirm('êtes vous sûr de vouloir supprimer cet article?')" href="index.php?action=delete_art&id=<?=$data->getId_art();?>&image=<?=$data->getImage();?>"><i class="fa fa-trash"></i> Supprimer</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php
define('ROOT', dirname(__DIR__));
$content = ob_get_clean();
require_once(ROOT.'./template.php');
?>


        