


    <header class="pt-5 mb-5">
        <img id="fondgauche" src="<?php echo base_url()?>assets/img/left-leaf.svg" alt="feuille gauche">
        
        <section class="container pt-md-5 pl-md-5">
            <div class="row mt-5">
                <div class="col-md-5 pt-md-5 pl-md-5">
                    <h1> <?php if (isset($_SESSION['ident'])) {echo $accueil_bienvenue . ' <span style="color: #e7375c">'.$_SESSION['ident'].'</span>, ';} else {echo $accueil_titre;} ?><br><?php echo $accueil_titre_2 ?></h1>
                    <p class="pt-4"><?php echo $accueil_intro ?></p>
                    <?php
                    if (isset($user)) {
                        echo '
                        <a class="lien_menu" href="'.base_url().'Arbre" >
                        <button type="button" class="btn btn-danger mt-3">'.$header_arbre.'</button><br>
                        </a>
                       
                    ';
                    }

                    else  {
                        unset($user);
                        echo '
                        <a class="lien_menu" href="'.base_url().'Inscription" >
                        <button type="button" class="btn btn-danger mt-3">'.$creer_compte.'</button><br>
                         </a>
                        <small>'.$deja_compte.' <a href="'.base_url().'Login">'.$ouvrir_session.'</a></small>
                        ';
                    }
                    ?>


                </div>

                <div class="col-md-6 pl-5 pt-3 pr-5">
                    <img class="img-fluid" src="<?php echo base_url()?>assets/img/img-humans-genealogy.svg" alt="personnages ancestree">
                </div>
            </div>

        </section>

        <img id="fonddroit" src="<?php echo base_url()?>assets/img/right-leaf.svg" alt="feuille droite">

        <section id="section10" class="demo">
            <!--<h1>Scroll Down Button #10</h1>-->
            <a href="#recherche_indi"><span></span></a>
        </section>

    </header>

    <section class="rechercheAide container pt-5 pl-md-5 mb-5 " id="recherche_indi">
        <div class="row">
            <div class="col-md-12">
                <h2> <svg height="20" width="55"><line x1="5" y1="7" x2="42" y2="7" stroke-linecap="round" style="stroke:#e7375c; stroke-width: 3"></line> </svg><?php echo $accueil_decouverte ?></h2>
                <p id="info"><?php echo $accueil_decouverte_soustitre ?></p>
            </div>
        </div>
        <form action="<?php echo base_url()?>Recherche/result" method="post" id="formsearch" class="mt-5">
            <div class="row">
                <div class="col-md-6">
                    <label><?php echo $accueil_prenoms ?></label>
                    <input type="text" class="form-control" id="prenom" placeholder="<?php echo $ouvrir_prenoms_entrez ?>"  name="firstname">
                </div>

                <div class="col-md-6">
                    <label><?php echo $accueil_famille ?>*</label>
                    <input type="text" class="form-control" id="nom" placeholder="<?php echo $accueil_famille_entrez ?>" required name="name">
                </div>
            </div>

            <div class="row mt-5 mb-5">
                <div class="col-md-6">
                    <label><?php echo $accueil_lieu_naissance ?></label>
                    <input type="text" class="form-control" id="lieunai" placeholder="Paris, France" name="l_naissance">
                </div>

                <div class="col-md-6">
                    <label><?php echo $accueil_annee_naissance ?></label>
                    <input type="date" class="form-control" id="datenai" name="d_naissance">
                </div>
            </div>

            <div class="row mt-5 mb-5">
                <div class="col-md-6">
                    <label><?php echo $accueil_lieu_deces ?></label>
                    <input type="text" class="form-control" id="lieumort" placeholder="Paris, France" name="l_deces">
                </div>

                <div class="col-md-6">
                    <label><?php echo $accueil_annee_deces ?></label>
                    <input type="date" class="form-control" id="datemort" name="d_deces">
                </div>
            </div>
            <small>*<?php echo $accueil_obligatoire ?></small><br>
            <button type="submit" class="btn btn-danger mt-3"><?php echo $bouton_rechercher ?></button>
        </form>
    </section>


    <section id="blog" class="container pt-5 pl-md-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <h2> <svg height="20" width="55"><line x1="5" y1="7" x2="42" y2="7" stroke-linecap="round" style="stroke:#e7375c; stroke-width: 3"></line> </svg>Blog</h2>
                <p><?php echo $accueil_blog_soustitre ?></p>
            </div>
        </div>

        <!--CARDS-->

        <div class="swiper-container mb-5 mt-5">
            <div class="swiper-wrapper">

                <?php
                foreach ($blog as $key) {
                    echo '<div class="swiper-slide">
                            <div class="card">
                                <img class="card-img-top" src="';
                    echo base_url().'assets/images/'.$key->blog_images.'" alt="blog photo '.substr($key->blog_images, 0, -4).'">';

                    echo '
                            <div class="card-block">
                                    <small>'.$key->blog_date.'</small>
                                    <h5 class="card-text">'.$key->blog_titre.'</h5>
                                    <p class="comment more">'.$key->blog_contenu.'</p>
                                </div>
                                <div class="card-footer">
                                <a href="'.base_url().'Blog/?id='.$key->blog_id.'">
                                    <button type="button" class="btn btn-danger mt-2">'.$blog_plus.'</button><br>
                                </a>
                                </div>
                            </div>
                        </div>';

                }
                ?>


                <!--
                <div class="swiper-slide mb-5">
                    <div class="card">
                        <img class="card-img-top" src="<?php /*echo base_url()*/?>assets/img/blog/dario-valenzuela-664389-unsplash.jpg" alt="Card image cap">
                        <div class="card-block">
                            <small>29/06/2019</small>
                            <h5 class="card-text">Deux demi-soeur réunies après plus de 34 ans</h5>
                            <p class="comment more"></p>




                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-danger mt-2">En savoir plus…</button><br>
                        </div>
                    </div>
                </div>-->

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination mt-5 mb-5"></div>
            <!-- Add Scroll Bar -->
            <div class="swiper-scrollbar mt-5 mb-5"></div>
        </div>

        <!--FIN CARDS-->

    </section>



    <section id="histoire" class="container pt-5 pl-md-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <h2> <svg height="20" width="55"><line x1="5" y1="7" x2="42" y2="7" stroke-linecap="round" style="stroke:#e7375c; stroke-width: 3"></line> </svg><?php echo $accueil_histoire ?></h2>
                <p><?php echo $accueil_histoire_soustritre ?></p>
            </div>
        </div>

        <div class="row mt-5 placement">
            <div class="col-md-6 photo1">
                <img class="img-fluid" src="<?php echo base_url()?>assets/img/histoire1.jpg" alt="histoire ancestree">
            </div>

            <div class="col-md-8 infohistoire1">
                <p><?php echo $accueil_contenu_1 ?></p>
            </div>
        </div>

        <div class="row mt-5 placement">
            <div class="col-md-8 infohistoire2">
                <p>  <?php echo $accueil_contenu_2 ?></p>
                <a href="<?php echo base_url()?>Contact">
                <button id="btnrejoindre" type="button" class="btn btn-danger mt-2"><?php echo $bouton_contacter ?></button>
                </a>
            </div>

            <div class="col-md-6 photo1 offset-md-6">
                <img class="img-fluid" src="<?php echo base_url()?>assets/img/histoire2.jpg" alt="histoire ancestree">
            </div>
        </div>

    </section>

<!--DEBUT AIDE-->

    <section class="rechercheAide container pt-5 pl-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <h2> <svg height="20" width="55"><line x1="5" y1="7" x2="42" y2="7" stroke-linecap="round" style="stroke:#e7375c; stroke-width: 3"></line> </svg><?php echo $accueil_aide ?></h2>
                <p><?php echo $accueil_aide_soustitre ?>
                </p>
            </div>
        </div>
        <div class="mt-5">
            <form action="<?php echo base_url()?>Accueil/ajouterData" method="post">
            <div class="row">
                <div class="col-md-6">
                    <label><?php echo $accueil_statut ?>*</label><br>
                    <span class="radio"><input type="radio" id="deces" checked name="bouton" value="deces"><label for="deces"><?php echo $accueil_deces ?></label></span>
                    <span class="radio"><input type="radio" id="mariage" name="bouton" value="mariage"><label for="mariage"><?php echo $accueil_mariage ?></label></span>
                    <span class="radio"><input type="radio" id="naissance" name="bouton" value="naissance"><label for="naissance"><?php echo $accueil_naissance ?></label></span><br/>





                    <!--DECES ET MAISSANCE-->
                    <div class="aide_deces">
                        <label><?php echo $accueil_nom ?>*</label>
                        <input type="text" class="form-control" id="aide_nom" placeholder="<?php echo $accueil_nom ?>" name="nom" >
                        <label><?php echo $accueil_prenom ?>*</label>
                        <input type="text" class="form-control" id="aide_prenom" placeholder="<?php echo $accueil_prenom ?>" name="prenom" >


                    </div>

                    <!--MARIAGE-->
                    <div class="aide_mariage">
                        <label><?php echo $accueil_nom_marie ?>*</label>
                        <input type="text" class="form-control" id="aide_nom_maire" placeholder="<?php echo $accueil_nom ?>" name="nomhomme" >
                        <label><?php echo $accueil_prenom_marie ?>*</label>
                        <input type="text" class="form-control" id="aide_prenom_marie" placeholder="<?php echo $accueil_prenom ?>" name="prenomhomme" >

                        <label><?php echo $accueil_nom_mariee ?>*</label>
                        <input type="text" class="form-control" id="aide_nom_mairee" placeholder="<?php echo $accueil_nom ?>" name="nomfemme" >
                        <label><?php echo $accueil_prenom_mariee ?>*</label>
                        <input type="text" class="form-control" id="aide_prenom_mariee" placeholder="<?php echo $accueil_prenom ?>" name="prenomfemme" >
                    </div>


                </div>

                <div class="col-md-6">
                    <label><?php echo $accueil_lieu ?>*</label>
                    <input type="text" class="form-control" id="aide_lieu" placeholder="<?php echo $accueil_lieu ?>" name="lieu">
                    <label>Date</label>
                    <input type="date" class="form-control" id="aide_date" name="date" min="1400-01-01" max="1699-12-31">

                    <label><?php echo $accueil_periode ?></label>
                    <input type="text" class="form-control" id="periode" placeholder="<?php echo $accueil_siecle ?>" disabled>

                    <label><?php echo $connexion_sexe ?>*</label><br>
                    <span class="radio"><input type="radio" id="homme" checked name="sexe" value="M"><label for="homme"><?php echo $connexion_homme ?></label></span>
                    <span class="radio"><input type="radio" id="femme" name="sexe" value="F"><label for="femme"><?php echo $connexion_femme ?></label></span><br/>
                </div>



                <div class="mt-5">
                    <small>*<?php echo $accueil_obligatoire ?></small><br>
                    <button type="submit" class="btn btn-danger mt-3"><?php echo $accueil_ajouter ?></button>
                </div>

            </div>
            </form>
        </div>
    </section>

<!--FIN AIDE-->

    <section id="insta" class="pt-5">
        <div class="container pt-5 pl-5 mb-5">
            <div class="row">
                <div class="col-md-12">
                    <h2> <svg height="20" width="55"><line x1="5" y1="7" x2="42" y2="7" stroke-linecap="round" style="stroke:#e7375c; stroke-width: 3"></line> </svg>Instagram</h2>
                </div>
            </div>
        </div>
    <div class="container-fluid" style="padding: 0; overflow-x: hidden">
        <div class="faders">
            <div class="left"></div>
            <div class="right"></div>
        </div>

        <div class="items">
            <div class="entry">
                <img class="img-fluid" src="<?php echo base_url()?>assets/img/blog/golden.jpg" alt="instagram golden">
            </div>
            <div class="entry">
                <img class="img-fluid" src="<?php echo base_url()?>assets/img/blog/dna.jpg" alt="instagram dna">
            </div>
            <div class="entry">
                <img class="img-fluid" src="<?php echo base_url()?>assets/img/blog/tickets.jpg" alt="instagram tickets">
            </div>
            <div class="entry">
                <img class="img-fluid" src="<?php echo base_url()?>assets/img/blog/jesse-orrico-487694-unsplash.jpg" alt="instagram jesse">
            </div>
            <div class="entry">
                <img class="img-fluid" src="<?php echo base_url()?>assets/img/blog/sisters.jpg" alt="instagram sisters">
            </div>
            <div class="entry">
                <img class="img-fluid" src="<?php echo base_url()?>assets/img/blog/golden.jpg" alt="instagram golden">
            </div>
            <div class="entry">
                <img class="img-fluid" src="<?php echo base_url()?>assets/img/blog/tickets.jpg" alt="instagram tickets">
            </div>
            <div class="entry">
                <img class="img-fluid" src="<?php echo base_url()?>assets/img/blog/dna.jpg" alt="instagram dna">
            </div>
        </div>
    </div>

    </section>

