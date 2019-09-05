
<section class="rechercheAide container pt-5 pl-md-5 mb-5 pb-5">
    <div class="row pt-5 mt-5 ">
        <div class="col-md-12">
            <h2>
                <svg height="20" width="55">
                    <line x1="5" y1="7" x2="42" y2="7" stroke-linecap="round"
                          style="stroke:#e7375c; stroke-width: 3"></line>
                </svg>
                <?php echo $compte_compte ?>
            </h2>
            <p id="info"><?php echo $compte_modifier ?></p>
            <p class="mx-auto mb-3 mt-3" style="color: darkgreen">
                <?php if (isset($_GET['txt'])) {echo $_GET['txt'];}?>
            </p>
        </div>
    </div>
<?php foreach ($user as $key) {

echo '
        
            <form action="'.base_url().'Gestion_account/updateData?id='.$key->user_id.'" method="post" id="formsearch" class="mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <label>'.$accueil_prenoms.'</label>
                        <input type="text" class="form-control"  name="user_prenom" placeholder="Entrez votre prenom" value="'.$key->user_prenom.'">
                    </div>
        
                    <div class="col-md-6">
                        <label>'.$accueil_famille.'</label>
                        <input type="text" class="form-control" name="user_nom" placeholder="Entrez votre nom" value="'.$key->user_nom.'"
                               required>
                    </div>
                </div>
        
                <div class="row mt-5 mb-5">
                    <div class="col-md-6">
                        <label>Email</label>
                        <input type="email" class="form-control" name="user_email" placeholder="Entrez votre email" value="'.$key->user_mail.'">
                    </div>
                    <div class="col-md-6">
                        <label>'.$compte_pseudo.'</label>
                        <input type="text" class="form-control" name="user_pseudo" disabled placeholder="Entrez votre pseudo" value="'.$key->user_pseudo.'">
                    </div>
        
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col-md-6">
                        <label>'.$compte_naissance.'</label>
                        <input type="date" class="form-control"  name="user_date" value="'.$key->user_date.'">
                    </div>
                    <div class="col-md-6">
                        <label>'.$accueil_lieu_naissance.'</label>
                        <input type="text" class="form-control"  name="user_lieu" placeholder="Paris, France" value="'.$key->user_lieu.'">
                    </div>
        
                </div>
        
                <div class="row mt-5 mb-5">
                    <div class="col-md-6">
                        <label>'.$connexion_co.'</label>
                        <input type="password" class="form-control"  placeholder="Entrez votre mot de passe">
                    </div>
        
                    <div class="col-md-6">
                        <label>'.$connexion_co_confirmation.'</label>
                        <input type="password" class="form-control" placeholder="Confirmer votre mot de passe" name="mdp">
                    </div>
                </div>
      
        
                <br>
                <button type="submit" class="btn btn-danger mt-3">'.$compte_modifier2.'</button>
            </form>
            
                                                                  

';

}?>




</section>