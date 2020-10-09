<?php

ob_start();
?>

<div class="container">
    <h1>Blog-Trotteurs / admin</h1>
    <h2 id="titreArticles">Liste des utilisateurs</h2>

            <div class="text-right">
                <a id="bAdd" class="btn btn-warning" href="index.php?action=add_user"><i class="fa fa-plus"></i> Ajouter</a>
            </div>
    <table class="table">
        <thead id="entetes">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Login</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody id="articlesBlog">

            
            <?php foreach($datas as $user){ ?>
                <tr>
                    <td><?=$user->getId_user(); ?></td>
                    <td><?=$user->getLogin(); ?></td>
                    <td><?=$user->getEmail(); ?></td>
                    <td>
                        <?php 
                            if($user->getDroits()==1){
                                echo"Adiministrateur";
                            }else{
                                echo "Utilisateur";
                            } 
                        ?>
                    </td>
                    <?php 
                    if($_SESSION['Auth']->Droits == 1){
                         if($user->Statut == 1){ ?>
                        <td>
                            <a class="btn btn-success" href="index.php?action=status&id=<?=$user->getId_user();?>&statut=<?=$user->Statut?>">Désactiver</a>
                        </td>
                        <?php }else{ ?>
                            <td>
                            <a class="btn btn-secondary" href="index.php?action=status&id=<?=$user->getId_user();?>&statut=<?=$user->Statut?>">Activer</a>
                        </td>
                <?php }} ?>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php

$content = ob_get_clean();
require_once('./views/template.php');
?>