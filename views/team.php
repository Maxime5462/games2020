<?php $title = "Team"; ?>
<?php ob_start(); ?>

<div class="container">
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Photo</th>
                <th scope="col">Name</th>
                <th scope="col">Nationality</th>
                <th scope="col">Né le </th>
                <th scope="col">Poste</th>
            </tr>
        </thead>
        <?php foreach ($players as $player) { ?>
            <tbody>
                <tr>
                    <td><img src="<?php echo $player['photo']; ?>" alt="p"></td>
                    <td><a href="?route=team&id=<?php echo $team['id']; ?>&idplayer=<?php echo $player['id']; ?>">
                        <?php echo $player['name']; ?>
                    </a></td>
                    <td><?php echo $player['nationality']; ?></td>
                    <td><?php echo $player['birthday_date']; ?></td>
                    <td><?php echo $player['poste']; ?></td>
                </tr>
            </tbody>
        <?php } ?>
    </table>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
