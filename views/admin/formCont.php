<?php

ob_start();
?>

    <h2 class="text-center">Ajouter une zone géographique</h2>
    <div id="formCont" class="row justify-content-center">
        <div class="col-4">
        <form method="post" action="" class="">
            <div class="form-group">
            <label for="zone">Zone : </label>
            <input type="text" id="zone" name="zone" placeholder="Entrer la zone géographique" class="form-control">
            </div>
            <button type="submit" name="ajout" class="btn btn-secondary btn-block">Ajouter</button>
        
        </form>
        </div>
    </div>

<?php
$content = ob_get_clean();
require_once('./views/template.php');
?>