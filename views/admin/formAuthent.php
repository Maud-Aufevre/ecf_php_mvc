<?php

ob_start();
?>

<div class="container">
    <div class="offset-3 col-6">
    <?php
                if(isset($error)){
                    echo"<div class='alert alert-danger text-center'>$error</div>";
                }
            ?>
        <div class="card my-3">
            <div class="card-header text-center">Authentification</div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="login">Identifiant*</label>
                        <input class="form-control" type="text" id="login" name="login" placeholder="Votre email" required/>
                    </div>
                    <div class="form-group">
                        <label for="mdp">Mot de passe*</label>
                        <input class="form-control" type="password" id="mdp" name="mdp" placeholder="Votre mot de passe" required/>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary" name="envoi" type="submit">Connexion</button>
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