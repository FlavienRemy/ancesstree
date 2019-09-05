<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $titre?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Appel feuille de style-->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/gestion.css">

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          crossorigin="anonymous">

    <!--Appel font google-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <!--Swiper-->
    <link rel="stylesheet" href="https://idangero.us/swiper/dist/css/swiper.min.css">
    <link href="<?php echo base_url() ?>assets/img/logo.svg" rel="shortcut icon">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="<?php echo base_url() ?>Accueil"><img id="logonav" src="<?php echo base_url() ?>assets/img/logo-nav-ancestree.svg" alt="logo AncesTree"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()?>Accueil/#recherche_indi"><?php echo $header_recherche ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()?>Arbre"><?php echo $header_arbre ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()?>Gestion_account"><img src="<?php echo base_url() ?>assets/img/profil.png" alt="éditer le profil" class="profilnav"> </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"  href='#' id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $header_langue ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href='<?php echo base_url(); ?>LangSwitch/switchLanguage/english'>English</a></a>
                        <a class="dropdown-item" href='<?php echo base_url(); ?>LangSwitch/switchLanguage/french'>French</a></a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()?>Login/deconnexion">
                        <button><?php echo $header_deconnexion ?></button>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>