<?php
foreach ( $touscontact as $key){
    ?>
    <p><b><?php echo $key->contact_email ?> : </b> <?php echo$key->contact_message ?></p>

    <?php
}
?>