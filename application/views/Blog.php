

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-col-3 mt-5">

            <form action="<?php echo base_url()?>Blog/add" method="post">
                <div class="form-group">
                    <label for="titre">Titre</label>
                    <input type="text" class="form-control" id="titre" placeholder="titre" name="titre">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Texte</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"></textarea>
                </div>

                <div class="form-group">
                    <label for="titre">Tags (séparé par une virgule)</label>
                    <input type="text" class="form-control" id="titre" placeholder="titre" name="tags">
                </div>

                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>

        </div>
    </div>

    <div class="row">
        <div class="col-md-6 offset-col-3 mt-5">
            <p style="color: darkgreen"> <?php
               if (isset($msg)) {
                   echo $msg;
               }
                ?></p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 offset-col-3 mt-5">
            <p style="color: darkgreen"> <?php
                foreach ($blog as $article) {
                    echo '<h2>'.$article->blog_titre.'</h2><br>';
                    echo $article->blog_contenu.'<br>';
                    echo $article->blog_date.'<br>';
                    echo $article->blog_tags.'<br>';

                }
                ?></p>
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