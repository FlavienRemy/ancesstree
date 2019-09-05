<header class="pt-5 mb-5">

    <section class="container pt-md-5 pl-md-5">
        <div class="row mt-5">
            <div class="col-md-5 pt-5 pl-md-5">
                <h1><?php echo $gestion_titre1 ?><br><?php echo $gestion_titre2 ?><br><?php echo $gestion_titre3 ?></h1>
                <p class="pt-4"><?php echo $gestion_soustitre ?></p>
                <a class="lien_menu" href="<?php echo base_url()?>Gestion/individus"> <button type="button" class="btn btn-danger mt-3 mr-3"><?php echo $gestion_individu ?></button></a>
                <a class="lien_menu" href="<?php echo base_url()?>Gestion/blog"><button type="button" class="btn btn-danger mt-3"><?php echo $gestion_blog ?></button></a>
                <br>
            </div>

            <div class="col-md-6 pl-5 pt-3 pr-5">
                <img class="img-fluid" src="<?php echo base_url() ?>assets/img/gestion-illustration.svg">
            </div>
        </div>

    </section>
</header>