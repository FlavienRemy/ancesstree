<header class="pt-5 mb-5">
    <img id="fondgauche" src="<?php echo base_url()?>assets/img/left-leaf.svg">

    <section class="container pt-md-5 pl-md-5">
        <div class="row mt-md-5">
            <div class="col-md-5 pt-5 pl-md-5">
                <h1><?php echo $recherche_titre ?> <span  style="color: #e7375c"><?php echo $name?></span>.</h1>
                <p class="pt-4"><?php echo $recherche_soustitre ?></p>
                <button type="button" class="btn btn-danger mt-3"><?php echo $recherche_partager ?></button>
            </div>

            <div class="col-md-6 pl-5 pt-3 pr-5">
                <img class="img-fluid" style="width: 85%" src="<?php echo base_url()?>assets/img/search.png">
            </div>
        </div>

    </section>

    <img id="fonddroit" src="<?php echo base_url()?>assets/img/right-leaf.svg">

    <section id="section10" class="demo">
        <!--<h1>Scroll Down Button #10</h1>-->
        <a href="#thanks"><span></span></a>
    </section>

</header>

<section class="rechercheAide container pt-md-5 pl-md-5 mb-5">
    <div class="row result">
        <div class="col-md-12">
            <h2> <svg height="20" width="55"><line x1="5" y1="7" x2="42" y2="7" stroke-linecap="round" style="stroke:#e7375c; stroke-width: 3"></line> </svg><?php echo $recherche_resultats ?></h2>
            <p id="info"><?php echo $recherche_voici ?><span style="color: #e7375c"><?php echo $name?></span>.</p>
        </div>

        <div class="px-5 mt-5 mr-md-4" style="border-right: 1px solid grey">
            <h3><?php echo $name?></h3>
        </div>

        <div class="px-5 px-md-4 mt-5">
            <h3><?php echo count($nbname) ?></h3>
        </div>



    </div>

</section>


<section id="lieu" class="container pt-5 pl-md-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <h2> <svg height="20" width="55"><line x1="5" y1="7" x2="42" y2="7" stroke-linecap="round" style="stroke:#e7375c; stroke-width: 3"></line> </svg><?php echo $recherche_nom.$name.$recherche_nom2 ?>.</h2>
            <p class="mb-5"><?php echo $recherche_region ?></p>

            <div class="row position mt-5">

                <?php
                //var_dump($nbnameville);

                foreach ($nbnameville as $item) {
                    if ($item->indi_l_naissance == 'Troyes' || 'Clerey' || 'Montaulin' ) {
                        $region = 'est.svg';
                    }

                    else {
                        $regien = 'ile-de-franc.png';
                    }
                   if (!empty($item->indi_l_naissance)) {
                       echo '
                        <div class="col-md-4 region">
                            <img class="img-fluid" src="'.base_url().'assets/img/'.$region.'">
                            <h3>'.$item->indi_l_naissance.'</h3>
                            <p>'.$item->num.' '.$recherche_arbre.'</p>
                        </div>
                    ';
                   }

                }
                ?>


            </div>


        </div>
    </div>

</section>


<section id="descendant" class="container pt-5 pl-md-5 mb-1 pb-1">
    <div class="row">
        <div class="col-md-12">
            <h2> <svg height="20" width="55"><line x1="5" y1="7" x2="42" y2="7" stroke-linecap="round" style="stroke:#e7375c; stroke-width: 3"></line> </svg><?php echo $recherche_porter . $name?></h2>
            <p class="mb-5"><?php echo $recherche_resultats2 ?></p>
        </div>

        <div class="container-fluid row">
        <?php
        //echo 'ICI<br>';
        //var_dump($nom_marie);
        //echo $nom_marie[6];



        //var_dump($recherche);
        if (!empty($recherche)) {

            foreach ($recherche as $item) {
                if (empty($item->indi_l_deces) && empty($item->indi_d_deces)) {
                    $deces = '...';
                }

                elseif (empty($item->indi_d_deces)) {
                    $deces='<p>'.$accueil_lieu.' : '.$item->indi_l_deces.'</p>';
                }

                elseif (empty($item->indi_l_deces)) {
                    $deces='<p>Date : '.$item->indi_d_deces.' </p>';
                }

                else {
                    $deces='<p>'.$accueil_lieu.' : '.$item->indi_l_deces.'</p><p>Date : '.$item->indi_d_deces.' </p>';
                }

                // =============

                if (empty($item->indi_l_mariage) && empty($item->indi_d_mariage)) {
                    $mariage = '...';
                }

                elseif (empty($item->indi_d_mariage)) {
                    $mariage='<p>'.$accueil_lieu.' : '.$item->indi_l_mariage.'</p>';
                }

                elseif (empty($item->indi_l_mariage)) {
                    $mariage='<p>'.$accueil_lieu.' : '.$item->indi_d_mariage.' </p>';
                }

                else {
                    $mariage='<p>'.$accueil_lieu.' : '.$item->indi_l_mariage.'</p><p>Date : '.$item->indi_d_mariage.' </p>';
                }


                //=============


                if (empty($item->indi_l_naissance) && empty($item->indi_d_naissance)) {
                    $naissance = '...';
                }

                elseif (empty($item->indi_d_naissance)) {
                    $naissance='<p>'.$accueil_lieu.' : '.$item->indi_l_naissance.'</p>';
                }

                elseif (empty($item->indi_l_naissance)) {
                    $naissance='<p>Date : '.$item->indi_d_naissance.' </p>';
                }

                else {
                    $naissance='<p>'.$accueil_lieu.' : '.$item->indi_l_naissance.'</p><p>Date : '.$item->indi_d_naissance.' </p>';
                }

               /* foreach ($this->Recherche_model->getparents($item->indi_id) as $key) {
                    $nom_marie = $key->indi_prenom.' '. $key->indi_nom;
                }*/

                if (isset($nom_marie)) {


                if (array_key_exists($item->indi_id, $nom_marie)) {
                    $nom_marie_result = $nom_marie[$item->indi_id] ;
                }

                else {
                    $nom_marie_result = '';
                }


                }

                else {
                    $nom_marie_result = '';
                }
                //echo 'test :'.$nom_marie_result;


                echo '<div class="col-md-4">
                        <div class="swiper-slide mb-5">
                            <div class="card">
                                <div class="placementnom">
                                    <img class="card-img-top" src="';
                echo base_url().'assets/img/bg-'.strtolower($item->indi_sexe).'.png" alt="Card image cap">';
                echo '<h4 class="mt-5">'.$item->indi_prenom.' '.$item->indi_nom.'</h4>';
                echo '
                                </div>
                                        <small style="text-align: center!important;">'.substr($item->indi_d_naissance, 0, 4).'</small>
                                        <div class="card-block px-3">
                                            <h5 class="card-text">'.$accueil_naissance.'</h5>
                                            '.$naissance.'
                                            <h5 class="card-text mt-3">'.$accueil_deces.'</h5>
                                            '.$deces.'
                                            <h5 class="card-text mt-3">'.$accueil_mariage.'</h5>
                                            <p>'.$nom_marie_result.'</p>
                                            '.$mariage.'
                                            
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                ';
            }
        }

        else {echo '<h3 class="mx-auto mt-5 mb-5"><span style="color: #e7375c">Désolé</span>, aucune donnée a été trouvé.</h3>';}
        ?>

        </div>



    </div>

</section>
<!--
<section id="blaa" class="container mx-auto mb-5">
    <div class="row">
        <button type="button" class="btn btn-danger mx-auto" id="more">Afficher d'avantage</button>


    </div>

</section>-->