<header class="mt-5" id="inscript" style="margin-top: 5.5rem!important;">
    <section class="mt-md-6 ">
        <div class="">


            <img id="left-leaf" src="<?php echo base_url() ?>assets/img/left-leaf.svg">
            <img id="right-leaf" src="<?php echo base_url() ?>assets/img/right-leaf.svg">
            <div class="limiter">
                <div class="container-login100">
                    <div class="wrap-login1000 mb-5">
                        <form class="login100-form validate-form" method="post" action="<?php echo base_url() ?>Inscription/new_user">
                                <span class="login100-form-title p-b-48">
                                    <img id="logo" src="<?php echo base_url() ?>assets/img/logo.svg">
                                </span>
                            <span class="login100-form-title p-b-26">
                                    <?php echo $bouton_inscription ?>
                                </span>

                            <div class="wrap-input100 validate-input" data-validate = "Veillez entrer un nom valide">
                                <input class="input100" type="text" name="nom">
                                <span class="focus-input100" data-placeholder="<?php echo $accueil_nom ?>*"></span>
                            </div>

                            <div class="wrap-input100 validate-input" data-validate="Veillez entrer un prénom valide">
                                <input class="input100" type="text" name="prenom">
                                <span class="focus-input100" data-placeholder="<?php echo $accueil_prenom ?>*"></span>
                            </div>

                            <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                                <input class="input100" type="text" name="email">
                                <span class="focus-input100" data-placeholder="Email*"></span>
                            </div>

                            <div class="wrap-input100 validate-input" data-validate="Enter username">
                                <input class="input100" type="text" name="username">
                                <span class="focus-input100" data-placeholder="Username*"></span>
                            </div>

                            <div class="wrap-input100 validate-input" data-validate="Enter password">
                                    <span class="btn-show-pass">
                                        <i class="zmdi zmdi-eye"></i>
                                    </span>
                                <input class="input100" type="password" name="pass*">
                                <span class="focus-input100" data-placeholder="<?php echo $connexion_co ?>"></span>
                            </div>
                            <div class="wrap-input100 validate-input" data-validate="Enter password">
                                <span class="btn-show-pass">
                                    <i class="zmdi zmdi-eye"></i>
                                </span>
                                <input class="input100" type="password" name="pass*">
                                <span class="focus-input100" data-placeholder="<?php echo $connexion_co_confirmation ?>"></span>
                            </div>
                            <label><?php echo $connexion_sexe ?>*</label><br>
                            <span class="radio"><input type="radio" id="homme" checked name="sexe" value="M"><label for="homme"><?php echo $connexion_homme ?></label></span>
                            <span class="radio"><input type="radio" id="femme" name="sexe" value="F"><label for="femme"><?php echo $connexion_femme ?></label></span><br/>
                            <p id="obligatoire"><?php echo $accueil_obligatoire ?>* </p>

                            <div class="container-login100-form-btn">
                                <div class="wrap-login100-form-btn">
                                    <div class="login100-form-bgbtn"></div>
                                    <button class="login100-form-btn">
                                        <?php echo $connexion_inscrire ?>
                                    </button>
                                </div>
                            </div>

                            <div class="text-center p-t-115">
                                    <span class="txt1">
                                        <?php echo $deja_compte ?>
                                    </span>
                                <br/>
                                <a class="txt2" href="<?php echo base_url()?>Login">
                                    <?php echo $ouvrir_session ?>
                                </a>
                            </div>
                        </form>
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
