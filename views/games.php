<?php $title = "Teams"; ?>
<?php ob_start(); ?>

<h1 class="mt-3"style="text-transform: uppercase;text-align:center;color:blue;"><img style="text-align:center;"src="public/l1.png" alt="L1"class="mb-3"><br>Liste de jeux vidéos</h1>

<div class="container">
    <div class="row">
        <?php foreach ($listGame as $game) { ?>
            <div class="card mt-3 col-6" style="width: 18rem;">
                <img class="card-img-top" style="height: 400px;weight:50px;"src="<?php echo $game['cover']; ?>" alt="Card image cap">
            </div>
            <div class="card-body col-6">
                <p class="card-title "style="text-align:center;">
                    <a href="?route=game&id=<?php echo $game['id']; ?>">
                        <?php echo $game['name']; ?>
                    </a>
                </p>
                <p class="card-text col-6 ">
                    <p>Description :<?php echo $game['description']; ?></p>
                    <p>Classification :<?php echo $game['classification']; ?></p>
                    <p>Date de sortie :<?php echo $game['date']; ?></p>
                    <p>Lien :<?php echo $game['link']; ?></p>
                    <a href="?route=matchs&id=<?php echo $game['id']; ?>" class="btn btn-primary">Jeux</a>
                    <p class ="card "style="color:green;font-weight: bold;"><?php echo $game['review']; ?>/20</p>
                </p>


            </div>

        <?php } ?>
    </div>
</div>


<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
