<?php

ob_start();
?>

<div class="container">
    <div class="offset-3 col-6">
        <?php if (isset($error)) { ?>
            <div class="alert alert-danger"><?= $error; ?></div>
        <?php } ?>
        <div class="card my-3">
            <div class="card-header text-center">Inscription d'un nouvel utilisateur</div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                    <label for="login">Login*: </label>
                    <input type="text" id="login" name="login" placeholder="Entrer le login" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email*: </label>
                        <input type="email" id="email" name="email" placeholder="Entrer l' email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="mdp">Mot de passe*: </label>
                        <input type="password" id="mdp" name="mdp" placeholder="Choisissez un mot de passe" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="admin">Administrateur: </label>
                        <input type="checkbox" value="1" id="admin" name="admin" class="form-check">
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary" name="envoi" type="submit">Inscrire</button>
                    </div>
                </form>
            </div>
          
        </div>
    </div>
</div>

<?php
    $content = ob_get_clean();
    require_once('./views/template.php');
?>