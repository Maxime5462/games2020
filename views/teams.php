<?php $title = "Teams"; ?>
<?php ob_start(); ?>

<h1 class="mt-3"style="text-transform: uppercase;text-align:center;color:blue;"><img style="text-align:center;"src="public/l1.png" alt="L1"class="mb-3"><br>équipes de Ligue 1</h1>

<div class="container">
    <div class="row">
        <?php foreach ($listTeam as $team) { ?>
            <div class="card mt-3 col-3" style="width: 18rem;">
                <img class="card-img-top" src="<?php echo $team['logo']; ?>" alt="Card image cap">
                <div class="card-body">
                    <p class="card-title "style="text-align:center;">
                        <a href="?route=team&id=<?php echo $team['id']; ?>">
                            <?php echo $team['name']; ?>
                        </a>
                    </p>
                    <p class="card-text ">
                        <p>Nom raccourci :<?php echo $team['short_name']; ?></p>
                        <p>Fondé le :<?php echo $team['fundation_date']; ?></p>
                        <p>Président :<?php echo $team['president']; ?></p>
                        <p>Adresse :<?php echo $team['adress']; ?></p>
                        <p>Site web :<?php echo $team['website']; ?></p>
                        <p>Lien :<?php echo $team['link']; ?></p>
                    </p>

                    <a href="?route=matchs&id=<?php echo $team['id']; ?>" class="btn btn-primary">Calendrier</a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>


<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
