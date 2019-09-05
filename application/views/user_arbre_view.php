<?php
/**
 * Created by PhpStorm.
 * User: Arthur
 * Date: 18/06/2019
 * Time: 09:48
 */
?>

<div class="container" id="grocery" style="padding-top: 10%; padding-bottom: 10%;">

<?php foreach ($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file ?>">
<?php endforeach; ?>
<h2>Gestion des membres de mon arbres</h2>


<?php echo $output ?>

<?php foreach ($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
</div>
