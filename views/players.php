<?php $title = "Players"; ?>
<?php ob_start(); ?>

<div class="container">

    <?php foreach ($listPlayer as $player) { ?>
        <div class="row">

            <p>Nom :<?php echo $player['name']; ?></p>

        </div>
    <?php } ?>

</div>

<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
