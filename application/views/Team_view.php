<header class="pt-5">
    <img id="fondgauche" src="<?php echo base_url() ?>assets/img/left-leaf.svg">

    <section class="container pt-md-5 pl-md-5">
        <div class="row mt-5">
            <div class="col-md-12">
                <h1 id="titre_team"><?php echo $team_team ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1 mx-auto ligne">
                <svg height="20" width="55"><line x1="5" y1="7" x2="42" y2="7" stroke-linecap="round" style="stroke:#e7375c; stroke-width: 3"></line> </svg>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-8 mx-auto photoequipe">
                <picture>
                    <source class="img-fluid mx-auto" media="(max-width: 500px)" srcset="<?php echo base_url() ?>assets/img/teamwork.jpg">
                    <img class="img-fluid mx-auto" src="<?php echo base_url() ?>assets/img/Rectangle.png" alt="photo de l'equipe">
                </picture>
            </div>
        </div>

    </section>

    <img id="fonddroit" src="<?php echo base_url() ?>assets/img/right-leaf.svg">

</header>

<section class="rechercheAide container mt-md-5  pl-md-5 mb-5">
    <div class="row">
        <div class="col-md-12 mb-5">
            <h2> <svg height="20" width="55"><line x1="5" y1="7" x2="42" y2="7" stroke-linecap="round" style="stroke:#e7375c; stroke-width: 3"></line> </svg><?php echo $team_equipe ?></h2>
            <p id="info"><?php echo $team_equipe_soustitre ?></p>
        </div>
    </div>
        <div class="row">
            <div class="col-md-4 offset-md-1 mb-5 equipe">
                <img class="equipe_nom" src="<?php echo base_url() ?>assets/img/1.png"/>
                <p class="equipe_nom">Pierre Chandelier</p>
                <p class="equipe_fonction"><?php echo $team_secretaire ?></p>
                <p><?php echo $team_secretaire_texte ?></p>
                <img class="equipe_logo mr-5" src="<?php echo base_url() ?>assets/img/footer/twitter.svg"><img class="equipe_logo" src="<?php echo base_url() ?>assets/img/footer/instagram.svg">
            </div>

            <div class="col-md-4 offset-md-2 mb-5 equipe">
                <img class="equipe_nom" src="<?php echo base_url() ?>assets/img/2.png"/>
                <p class="equipe_nom">Lucie Mouton</p>
                <p class="equipe_fonction"><?php echo $team_tresoriere ?></p>
                <p><?php echo $team_tresoriere_texte ?></p>
                <img class="equipe_logo mr-5 mb-5" src="<?php echo base_url() ?>assets/img/footer/twitter.svg"><img class="equipe_logo mb-5" src="<?php echo base_url() ?>assets/img/footer/instagram.svg">
            </div>
        </div>

    <div class="row mt-md-5">
        <div class="col-md-4 offset-md-1 mb-5 equipe">
            <img class="equipe_nom" src="<?php echo base_url() ?>assets/img/3.png"/>
            <p class="equipe_nom">Arthur Jeanne</p>
            <p class="equipe_fonction"><?php echo $team_genealogiste ?></p>
            <p><?php echo $team_genealogiste_texte ?>
            </p>
            <img class="equipe_logo mr-5" src="<?php echo base_url() ?>assets/img/footer/twitter.svg"><img class="equipe_logo" src="<?php echo base_url() ?>assets/img/footer/instagram.svg">
        </div>

        <div class="col-md-4 offset-md-2 mb-5 equipe">
            <img class="equipe_nom" src="<?php echo base_url() ?>assets/img/4.png"/>
            <p class="equipe_nom">Rose Poussin</p>
            <p class="equipe_fonction"><?php echo $team_etude ?></p>
            <p><?php echo $team_etude_texte ?>
            </p>
            <img class="equipe_logo mr-5 mb-5" src="<?php echo base_url() ?>assets/img/footer/twitter.svg"><img class="equipe_logo mb-5" src="<?php echo base_url() ?>assets/img/footer/instagram.svg">
        </div>
    </div>

    <div class="row mt-md-5">
        <div class="col-md-4 offset-md-4 mb-5 equipe">
            <img class="equipe_nom" src="<?php echo base_url() ?>assets/img/5.png"/>
            <p class="equipe_nom">Francis Pignon</p>
            <p class="equipe_fonction"><?php echo $team_president ?></p>
            <p><?php echo $team_president_texte ?></p>
            <img class="equipe_logo mr-5" src="<?php echo base_url() ?>assets/img/footer/twitter.svg"><img class="equipe_logo" src="<?php echo base_url() ?>assets/img/footer/instagram.svg">
        </div>
    </div>


</section>


<section id="rejoindre" class="container pt-5 pl-md-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <h2> <svg height="20" width="55"><line x1="5" y1="7" x2="42" y2="7" stroke-linecap="round" style="stroke:#e7375c; stroke-width: 3"></line> </svg><?php echo $team_rejoindre ?></h2>
            <p><?php echo $team_equipe_soustitre ?></p>
        </div>
    </div>

    <!--REJOINDRE-->
    <div class="row mt-5">
        <div class="col-md-12">
            <a target="_blank" class="rejoindre_titre mb-1" href="https://www.linkedin.com/feed/"><?php echo $team_developpeur ?></a>
            <p class="rejoindre_lieu mb-4">Caen,France</p>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a target="_blank"  class="rejoindre_titre mb-1" href="https://www.linkedin.com/feed/"><?php echo $team_genealogiste ?></a>
            <p class="rejoindre_lieu mb-4">Caen,France</p>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a target="_blank" class="rejoindre_titre mb-1" href="https://www.linkedin.com/feed/"><?php echo $team_admin ?></a>
            <p class="rejoindre_lieu mb-4">Paris,France</p>
            <hr>
        </div>
    </div>


    <!--FIN REJOINDRE-->

</section>



<section id="team_images" class="container pt-5 pl-md-5 mb-5">
    <div class="row">
        <div class="col-md-5 mb-5">
            <img class="img-fluid" src="<?php echo base_url() ?>assets/img/bureau.png"/>
        </div>
        <div class="col-md-5 offset-md-2 mb-5">
            <img class="img-fluid" src="<?php echo base_url() ?>assets/img/bureau2.png"/>
        </div>
    </div>
</section>
