<footer>
    <div class="container">
        <div class="row">
            <div class="offset-md-5 col-md-2 offset-sm-5 col-sm-2 offset-xm-4 col-xm-4"><p id="footer_ancestree"><img src="<?php echo base_url()?>assets/img/footer/logo-footer-ancestree.svg" alt="logo ancestree"></p>
                <svg height="10" width="120">
                    <line x1="45" y1="5" x2="80" y2="5" id="footer_underline"></line>
                </svg>
            </div>

        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <p class="footer_ancestree2">AncesTree</p>
                <ul>
                    <li>
                        <a href="https://twitter.com/" target="_blank"><img src="<?php echo base_url()?>assets/img/footer/twitter.svg" class="footer_icones" alt="twitter"></a>
                        <a href="https://www.instagram.com/" target="_blank"><img src="<?php echo base_url()?>assets/img/footer/instagram.svg" class="footer_icones" alt="instagram"></a>
                        <a href="https://www.facebook.com/" target="_blank"><img src="<?php echo base_url()?>assets/img/footer/facebook.svg" class="footer_icones" alt="facebook"></a>
                    </li>
                    <li>Copyright © 2019 AncesTree.</li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-4">
                <p class="footer_ancestree2"><?php echo $footer_accueil ?></p>
                <ul>

                    <?php
                    if (isset($_SESSION['ident'])) {
                        echo '
                            <li><a href="'.base_url().'Arbre">'.$header_arbre.'</a></li>
                            <li><a href="'.base_url().'Login/deconnexion">'.$header_deconnexion.'</a></li>';

                    }

                    else {

                        echo '
                            <li><a href="'.base_url().'Login">'.$header_arbre.'</a></li>
                            <li><a href="'.base_url().'Login">'.$header_connexion.'</a></li>
                            <li><a href="'.base_url().'Inscription">'.$footer_inscription.'</a></li>
                        ';
                    }
                    ?>


                </ul>
            </div>
            <div class="col-md-4 col-sm-4">
                <p class="footer_ancestree2">Support</p>
                <ul>
                    <li><a href="<?php echo base_url()?>Contact">Contact</a></li>
                    <li><a href="<?php echo base_url()?>Blog">Blog</a></li>
                    <li><a href="<?php echo base_url()?>Team"><?php echo $footer_recrutement ?></a></li>
                    <li><a href="<?php echo base_url()?>Confidentialite"><?php echo $footer_politique ?></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>






<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
<script src="<?php echo base_url()?>assets/js/<?php echo $javascript?>"></script>


</body>
</html>
