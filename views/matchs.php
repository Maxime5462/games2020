<?php $title = "Matchs"; ?>
<?php ob_start(); ?>

<div class="container">
    <table class="table table-dark">
        <thead>
            <tr>

                <th scope="col">Equipe Domicile</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col">Equipe extérieure</th>
                <th scope="col">Journée</th>
            </tr>
        </thead>
        <?php foreach ($listMatch as $match) { ?>
            <tbody>
                <tr>

                    <td> <?php echo $match['HOME']; ?> </td>
                    <td><?php echo $match['score_home']; ?></td>
                    <td><?php echo $match['score_away']; ?></td>
                    <td><?php echo $match['AWAY']; ?></td>
                    <td><?php echo $match['day']; ?></td>
                </tr>
            </tbody>
        <?php } ?>
    </table>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
