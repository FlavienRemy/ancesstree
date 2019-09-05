<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $titre ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Appel feuille de style-->

    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/gestion.css">

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">

    <!--Appel font google-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <!--Swiper-->
    <link rel="stylesheet" href="https://idangero.us/swiper/dist/css/swiper.min.css">
    <link href="<?php echo base_url()?>assets/img/logo.svg" rel="shortcut icon">

    <?php
    if ($titre == 'Sign in' || $titre == 'Contact' || $titre == 'Sign up' ) {
            echo '
            <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="'.base_url().'assets/images/icons/favicon.ico"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
        <!--===============================================================================================-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="'.base_url().'assets/fonts/iconic/css/material-design-iconic-font.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="'.base_url().'assets/vendor/animate/animate.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="'.base_url().'assets/vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="'.base_url().'assets/vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="'.base_url().'assets/vendor/select2/select2.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="'.base_url().'assets/vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="'.base_url().'assets/css/util.css">
        <link rel="stylesheet" type="text/css" href="'.base_url().'assets/css/main.css">
            ';
    }

    else {
//        echo '<link rel="stylesheet" href="'.base_url().'assets/css/style.css">';
    }
    ?>

</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="<?php echo base_url()?>Accueil"><img id="logonav" src="<?php echo base_url()?>assets/img/logo-nav-ancestree.svg" alt="logo AncesTree"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="#recherche_indi"><?php echo $header_recherche ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php base_url()?>Login"><?php echo $header_creer_arbre ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()?>Login"><?php echo $header_connexion ?></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"  href='#' id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $header_langue ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href='<?php echo base_url(); ?>LangSwitch/switchLanguage/english'>English</a>
                        <a class="dropdown-item" href='<?php echo base_url(); ?>LangSwitch/switchLanguage/french'>French</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>Inscription"><button><?php echo $bouton_inscription ?></button></a>
                </li>
            </ul>
        </div>
    </div>
</nav>