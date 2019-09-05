

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-col-3 mt-5">

            <form action="<?php echo base_url()?>Recherche/result" method="post">
                <div class="form-group">
                    <label for="titre">Prenom</label>
                    <input type="text" class="form-control" id="titre" placeholder="titre" name="firstname">
                </div>

                <div class="form-group">
                    <label for="titre">Nom</label>
                    <input type="text" class="form-control" id="titre" placeholder="titre" name="name">
                </div>

                <div class="form-group">
                    <label for="titre">date naissance</label>
                    <input type="date" class="form-control" id="titre" placeholder="titre" name="d_naissance">
                </div>

                <div class="form-group">
                    <label for="titre">Lieu naissance</label>
                    <input type="text" class="form-control" id="titre" placeholder="titre" name="l_naissance">
                </div>

                <div class="form-group">
                    <label for="titre">date mort</label>
                    <input type="date" class="form-control" id="titre" placeholder="titre" name="d_deces">
                </div>

                <div class="form-group">
                    <label for="titre">lieu mort</label>
                    <input type="text" class="form-control" id="titre" placeholder="titre" name="l_deces">
                </div>


                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>

        </div>
    </div>

</div>




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>



<?php
/*foreach ($recherche as $item) {
    echo $item->indi_prenom.' ';
    echo $item->indi_nom;
    echo '<br>';
}
echo '<hr>';*/
/*foreach ($recherche2 as $item) {
    echo $item->indi_prenom.' ';
    echo $item->indi_nom;
    echo '<br>';
}*/
?>



