
<header class="mt-5 mb-4" style="margin-top: 6.5rem!important;  margin-bottom: 8.5rem!important;">
    <section class="mt-md-6 ">
        <div class="">

            <img id="left-leaf" src="<?php echo base_url() ?>assets/img/left-leaf.svg" alt="image de feuille en fond gauche">
            <img id="right-leaf" src="<?php echo base_url() ?>assets/img/right-leaf.svg" alt="une autre image de feuille en fond droit">
            <div class="limiter">
                <div class="container-login100">
                    <div class="wrap-login1001">


                        <div class="row">
                            <div class="login100-form validate-form">
                                    <span class="login100-form-title p-b-48">
                                        <img id="logo" src="<?php echo base_url() ?>assets/img/logo.svg" alt="le logo Ancestree">
                                    </span>
                                <span class="login100-form-title p-b-26">
                                        <?php echo $contact_contact ?>
                                    </span>
                            </div>
                        </div>


                        <form class="login100-form validate-form" method="POST" action="<?php echo base_url()?>Contact/new_contact">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="wrap-input100 validate-input" data-validate = "Vous devez mettre un nom valide">
                                        <input class="input100" type="text" name="nom">
                                        <span class="focus-input100" data-placeholder="<?php echo $accueil_nom ?>*"></span>
                                    </div>

                                    <div class="wrap-input100 validate-input" data-validate="Vous devez mettre un prénom valide">
                                        <input class="input100" type="text" name="prenom">
                                        <span class="focus-input100" data-placeholder="<?php echo $accueil_prenom ?>*"></span>
                                    </div>
                                    <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                                        <input class="input100" type="text" name="email">
                                        <span class="focus-input100" data-placeholder="Email*"></span>
                                    </div>
                                </div>


                                <div class="col-md-5 offset-md-2">
                                    <div class="wrap-input100 validate-input" data-validate = "vous devez mettre un numéro de téléphone">
                                        <input class="input100" type="text" name="phone">
                                        <span class="focus-input100" data-placeholder="Telephone*"></span>
                                    </div>

                                    <div class="wrap-input100 validate-input" data-validate="Vous devez entrer l'objet de la demande">
                                        <input class="input100" type="text" name="sujet">
                                        <span class="focus-input100" data-placeholder="<?php echo $contact_objet ?>*"></span>
                                    </div>
                                    <div class="wrap-input100 validate-input" data-validate="Ce champ doit etre remplis">
                                        <textarea class="input1001" name="message" rows="10" cols="50"></textarea>
                                        <span class="focus-input1001" data-placeholder="<?php echo $contact_demande ?>*"></span>
                                    </div>
                                </div>
                                <p id="obligatoire">*<?php echo $accueil_obligatoire ?></p>
                            </div>
                            <div class="row">
                                <div class="col-md-4 offset-md-4">
                                    <div class="container-login100-form-btn">
                                        <div class="wrap-login100-form-btn">
                                            <div class="login100-form-bgbtn"></div>
                                            <button class="login100-form-btn">
                                                <?php echo $contact_envoyer ?>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <p class="mx-auto mb-3 mt-3" style="color: darkgreen">
                            <?php if (isset($_GET['txt'])) {echo $_GET['txt'];}?>
                        </p>


                    </div>
                </div>
            </div>


            <div id="dropDownSelect1"></div>
        </div>
    </section>
</header>

<!--===============================================================================================-->
<script src="<?php echo base_url() ?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url() ?>assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/popper.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url() ?>assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url() ?>assets/vendor/daterangepicker/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url() ?>assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url() ?>assets/js/main.js"></script>
