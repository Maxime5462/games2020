<?php $title = "Teams"; ?>
<?php ob_start(); ?>

<h1 class="mt-3"style="text-transform: uppercase;text-align:center;color:blue;"><br>Liste de jeux vidéos</h1>

<div class="container">
    <div class="row">
        <?php foreach ($listGame as $game) { ?>
            <div class="card mt-3 col-6" style="width: 18rem;">
                <img class="card-img-top" style="height: 300px;weight:50px;"src="<?php echo $game['cover']; ?>" alt="Card image cap">
            </div>
            <div class="card-body col-6">
                <p class="card-title "style="text-align:center;">
                    <a href="?route=game&id=<?php echo $game['id']; ?>">
                        <?php echo $game['name']; ?>
                    </a>
                </p>
                <p class="card-text col-6 ">
                    <p><?php echo $game['description']; ?></p>
                    <p style="font-weight: bold;">Sortie :<?php echo $game['date']; ?></p>
                    <a href="?route=matchs&id=<?php echo $game['id']; ?>" class="btn btn-primary">Jeux</a>
                </p>


            </div>
            <p class =" card col-12 mt-3"style="color:green;background-color: lightgrey;font-weight: bold;text-align:center;"><?php echo $game['review']; ?>/20</p>

        <?php } ?>
    </div>
</div>


<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
