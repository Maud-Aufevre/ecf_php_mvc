<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/font-awesome.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/adminx.css">
    <link rel="stylesheet" href="./assets/css/accueil.css">
    <title>Blog-trotteurs</title>
   
  </head>
  <body>
    <header>
    <ul id="réseauxSociaux">
        <li><a href="#"><img src="./assets/images/facebook.png" alt="facebook"/></a></li>
        <li><a href="#"><img src="./assets/images/instagram.png" alt="instagram"/></a></li>
        <li><a href="#"><img src="./assets/images/twiter.png" alt="twiter"/></a></li>
    </ul>
    
    <ul id="logoEntete">
        <li><a href="index.php?action=list_art"><img src="./assets/images/logo-blog-trotteurs.jpg" alt="logo blog trotteurs"/></a></li>
        <li>le plein d'idées et d'expériences pour créer vos propres voyages ...</li>
    </ul>

    </header>
        <main id="bandeau">
            <div id="texteBandeau">
                <p>Et vous, vous partez où ?...</p>
            </div>
        </main>
        <nav>
            <ul id="menu">
            
                <li><a id="navAccueil" activeClass="active" href="../admin/index.php">Accueil</a></li>
                <li><a id="navContact"  activeClass="active" href="../admin/index_admin.php">Administration</a></li>
                <li class="nav-item dropdown ml-auto">
                    <a class="nav-link dropdown-toggle text-body" href="#" id="navbardrop" data-toggle="dropdown" ><NavLink activeClassName="active"><i class="fa fa-power-off" style="font-size:24px"></i></NavLink>
                    </a>
                
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="index.php?action=admin">Connexion</a>
                    <a class="dropdown-item" href="index.php?action=logout">Déconnexion</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <div id="root" class="container">
        <?=$content;?>
    </div>
    <footer id="piedPage">
        <main id="piedPageBlanc">
            <div id="logoPied">
                <a href="index.php?action=list_art"><img src="./assets/images/logo-blog-trotteurs.jpg" alt="logo blog-trotteurs"/></a>
            </div>
            <p>suivez-nous sur :</p>
            <ul id="réseauxSociauxPied">
                <li><a href="#"><img src="./assets/images/facebook.png" alt="facebook"/></a></li>
                <li><a href="#"><img src="./assets/images/instagram.png" alt="instagram"/></a></li>
                <li><a href="#"><img src="./assets/images/twiter.png" alt="twiter"/></a></li>
            </ul>
        </main>
        <footer id="liensMentions">
            <p id="droits">Tous droits réservés &emsp;-</p>
            <p id="mentions"><a href="#">Mentions légales &emsp;-</a></p>
            <p id="cont"><a href="#">Contact</a></p>
        </footer>
    </footer>
    
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>