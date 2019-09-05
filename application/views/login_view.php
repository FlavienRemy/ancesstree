
<header class="mt-5 mb-4" style="margin-top: 5.5rem!important;     margin-bottom: 2.5rem!important;">
	<section class="mt-md-6 ">
		<div class="">

				<img id="left-leaf" src="<?php echo base_url() ?>assets/img/left-leaf.svg">
			<img id="right-leaf" src="<?php echo base_url() ?>assets/img/right-leaf.svg">
			<div class="limiter">
				<div class="container-login100">
					<div class="wrap-login100">
						<form class="login100-form validate-form" method="POST" action="<?php echo base_url()?>login/verif">
							<span class="login100-form-title p-b-48">
								<img id="logo" src="<?php echo base_url() ?>assets/img/logo.svg">
							</span>
							<span class="login100-form-title p-b-26">
								<?php echo $header_connexion ?>
							</span>

                            <p class="mx-auto mb-3 mt-3" style="color: darkgreen">
								<?php if (isset($_GET['txt'])) {echo $_GET['txt'];}?>
							</p>

							<div class="wrap-input100 validate-input" data-validate = "Username required">
								<input class="input100" type="text" name="mail">
								<span class="focus-input100" data-placeholder="Username"></span>
							</div>

							<div class="wrap-input100 validate-input" data-validate="Enter password">
								<span class="btn-show-pass">
									<i class="zmdi zmdi-eye"></i>
								</span>
								<input class="input100" type="password" name="mdp">
								<span class="focus-input100" data-placeholder="<?php echo $connexion_co ?>"></span>
							</div>

							<div class="container-login100-form-btn">
								<div class="wrap-login100-form-btn">
									<div class="login100-form-bgbtn"></div>
									<button class="login100-form-btn">
                                        <?php echo $header_connexion ?>
									</button>
								</div>
							</div>

							<div class="text-center p-t-115">
								<span class="txt1">
									<?php echo $connexion_compte ?>
								</span>
								<br/>
								<a class="txt2" href="<?php echo base_url()?>Inscription">
                                    <?php echo $connexion_inscription ?>
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
