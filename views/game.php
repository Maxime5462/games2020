<?php $title = "Game"; ?>
<?php ob_start(); ?>
<div class="card mt-3 col-6" style="width: 18rem;">
    <img class="card-img-top" style="height: 300px;weight:50px;"src="<?php echo $games['cover']; ?>" alt="Card image cap">
</div>
<div class="card-body col-6">
    <p class="card-title "style="text-align:center;">
        <a href="?route=game&id=<?php echo $games['id']; ?>">
            <?php echo $games['name']; ?>
        </a>
    </p>
    <p class="card-text col-6 ">
        <p><?php echo $game['description']; ?></p>
        <p style="font-weight: bold;">Sortie :<?php echo $game['date']; ?></p>
        <a href="?route=matchs&id=<?php echo $game['id']; ?>" class="btn btn-primary">Jeux</a>
    </p>


</div>
<p class =" card col-12 mt-3"style="color:green;background-color: lightgrey;font-weight: bold;text-align:center;"><?php echo $game['review']; ?>/20</p>

<div class="container">
    <table class="table ">
        <thead>
            <tr>
                <th scope="col">Editeur(s)/Développeur(s)</th>
                <th scope="col">Sortie</th>
                <th scope="col">Classification</th>
                <th scope="col">Jeux.Video.com</th>

            </tr>
        </thead>
        <?php foreach ($players as $player) { ?>
            <tbody>
                <tr>
                    <td><img src="<?php echo $games['name_editor']; ?>" alt="p"></td>
                    <td><?php echo $games['dates']; ?></td>
                    <td><?php echo $games['birthday_date']; ?></td>
                    <td><a href="<?php echo $games['link']; ?>">En savoir plus
                    </a></td>

                </tr>
            </tbody>
        <?php } ?>
    </table>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
