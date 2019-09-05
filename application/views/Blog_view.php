<header class="pt-md-5 header_blog" style="height: 30%!important;">
    <img id="fondgauche" src="<?php echo base_url()?>assets/img/left-leaf.svg">

    <section class="container pt-2 pl-md-5">
        <div class="row mt-5">
            <div class="col-md-12 pt-5">
                <h1 id="titre_team" style="text-align: center">Blog</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1 mx-auto" style="text-align: center">
                <svg height="20" width="55">
                    <line x1="5" y1="7" x2="42" y2="7" stroke-linecap="round"
                          style="stroke:#e7375c; stroke-width: 3"></line>
                </svg>
            </div>
        </div>
    </section>

    <img id="fonddroit" src="<?php echo base_url()?>assets/img/right-leaf.svg">

</header>


<section class="blog container pt-5 mb-5 ">
    <div class="row">
        <div class="col-md-12">
            <?php

            foreach ($article as $item) {
                echo '<img class="img-fluid" src="'.base_url().'assets/images/'.$item->blog_images.'" alt="'.substr($item->blog_images, 0, 4).'">';
                echo '<small>'.$item->blog_tags.'</small> <small class="pl-5">'.$item->blog_date.'</small>';
                echo '<h2 class=" pt-5 ">
                        <svg height="20" width="55">
                        <line x1="5" y1="7" x2="42" y2="7" stroke-linecap="round"
                            style="stroke:#e7375c; stroke-width: 3"></line>
                        </svg>
                        '.$item->blog_titre.'
                        </h2>
                        <br>
                        <p>
                        '.$item->blog_contenu.'
                        </p>
                        
                        <p class="mt-2">
                            The competition’s central rule is that each song needs to be a maximum of three minutes. This is shorter 
                            than most commercial pop songs, but the organisers decided that this limit was necessary so that the entire Grand 
                            Final (including voting) can happen within three hours. While performing the song, there is another rule that the maximum number of people on the stage is six. This includes the singer(s),
                             musicians and dancers. Songs can be in any language, even though most countries choose to sing in English.
                        </p>
                        <p class="mt-2">
                            Are there any Eurovision stars?
                            The competition has certainly had some success stories. The Swedish super-group ABBA won the Eurovision in 1974 and then became
                             huge stars with hits like \'Dancing Queen\' and \'Mamma Mia\'. In 1988, Céline Dion won for Switzerland before finding world fame with 
                             songs like \'My Heart Will Go On\' from the film Titanic. In 2006, Finnish rockers Lordi won the competition and captured the world’s imagination with their metal music and monster suits. 
                             Other winning songs which became international hits were the electro-hit \'Euphoria\' by Swedish singer Loreen (2012) and \'Heroes\' by another Swede, Måns Zelmerlöw (2015).
                        </p>
                        <p class="mt-2">
                            What next?
                            The popularity of the Eurovision has grown more and more each year. Outside of 
                            Europe and Australia, the Grand Final is now also watched by viewers in the USA and many other countries. 
                            Organisations in certain countries like China and Qatar have even expressed an interest in participating in the competition. So, who 
                            knows? Perhaps international unity will finally be achieved not through governments but through three-minute pop songs.
                        </p>
            ';
            }


            ?>



            <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>


        </div>
    </div>
</section>

<!--BLOG-->

<section id="blog" class="container pt-5 pl-md-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <hr>
        </div>
    </div>

    <!--CARDS-->

    <div class="swiper-container mb-5 mt-5">
        <div class="swiper-wrapper">
            <?php

            if (!empty($blog)) {
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
            }
            else {
           //echo '<h3 class="mx-auto mt-5 mb-5"><span style="color: #e7375c">Désolé</span>, aucune donnée a été trouvé.</h3>';

            }
            ?>



        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination mt-5 mb-5"></div>
        <!-- Add Scroll Bar -->
        <div class="swiper-scrollbar mt-5 mb-5"></div>
    </div>

    <!--FIN CARDS-->

</section>


<!--FIN AIDE-->

<section id="insta" class="pt-5">
    <div class="container pt-5 pl-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <h2>
                    <svg height="20" width="55">
                        <line x1="5" y1="7" x2="42" y2="7" stroke-linecap="round"
                              style="stroke:#e7375c; stroke-width: 3"></line>
                    </svg>
                    Instagram
                </h2>
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