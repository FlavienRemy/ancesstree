<div class="container" id="grocery">

<?php foreach ($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file ?>">
<?php endforeach; ?>

<header class="pt-5 mb-5">
    <section class="pt-md-5 pl-md-5">
        <div class="row mt-5">
            <?php echo $output ?>
        </div>
    </section>
</header>
<?php foreach ($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
</div>

