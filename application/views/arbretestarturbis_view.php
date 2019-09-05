<!--<script src="//cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script>-->


<header class="pt-4 mb-5" style="height: 100%">
    <img id="fondgauche" src="<?php echo base_url()?>assets/img/left-leaf.svg" alt="feuille gauche">

    <section class="container pt-md-5 pl-md-5">
        <div class="row mt-5">
            <div class="col-md-5 pt-md-5 pl-md-5">
                <h1><?php echo $arbre_titre ?></h1>
                <p class="pt-4"><?php echo $arbre_soustitre ?></p>
                <button type="button" class="btn btn-danger mt-3"><?php echo $arbre_continuer ?></button><br>



            </div>

            <div class="col-md-6 pl-5 pt-3 pr-5">
                <img style="width: 80%" class="img-fluid" src="<?php echo base_url()?>assets/img/image-arbre.svg" alt="personnages ancestree">
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
            <h2> <svg height="20" width="55"><line x1="5" y1="7" x2="42" y2="7" stroke-linecap="round" style="stroke:#e7375c; stroke-width: 3"></line> </svg><?php echo $arbre_arbre ?></h2>
            <p id="info"><?php echo $arbre_propre ?></p>
        </div>
    </div>
</section>

<div id="sample" class="container">
	<div id="myDiagramDiv" style="border: solid 1px black; width:100%; height:600px">

	</div>

</div>
<div class="container">
    <a href="<?php echo base_url().'Arbre_gestion/Indiarbre'?>"><button style="    border-color: #e7375c!important;
    border-radius: 24px;
    padding: 1%;
    border: 0;
    color: white;" class="mt-5"><?php echo $arbre_gerer ?></button></a>

    <button style="border-color: #e7375c!important;
    border-radius: 24px;
    padding: 1%;
    border: 0;
    color: white;" class="float-right mt-5" id="download"><?php echo $arbre_telecharger ?></button>
</div>



<table class="table col-md-3 mx-auto mt-3">
    <thead class="thead-dark">
        <tr><th><?php echo $arbre_membres ?></th></tr>
    </thead>
    <tbody>
	<?php
	foreach ($infosarbre as $valtableau) {
		echo "<tr><td>". $valtableau->arbre_nom."</td></tr>";
	}

	?>
    </tbody>
</table>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>


<script src="//cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script>

<script>
    $(document).ready(function () {
        var canvas = document.getElementsByTagName("canvas")[0];
        var context = canvas.getContext('2d');


        download.addEventListener("click", function () {
            // only jpeg is supported by jsPDF

            var imgData = canvas.toDataURL("image/png", 1.0);
            var pdf = new jsPDF("l", "px", [canvas.width,canvas.height]);
            var width = pdf.internal.pageSize.width;
            var height =  pdf.internal.pageSize.height;
            pdf.addImage(imgData, 'PNG', 0, 0, width, height);
            pdf.save("monArbreAncestree.pdf");
        }, false);
    });
</script>


</body>
</html>
