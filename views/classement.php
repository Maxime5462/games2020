<?php $title = "Classement"; ?>
<?php ob_start(); ?>

<div class="container">
    <table class="table table-dark">
        <thead>
            <tr>

                <th scope="col">#</th>
                <th scope="col">Equipe</th>
                <th scope="col">pts</th>
                <th scope="col">J.</th>
                <th scope="col">G.</th>
                <th scope="col">N.</th>
                <th scope="col">P.</th>
                <th scope="col">p.</th>
                <th scope="col">c.</th>
                <th scope="col">+/-</th>
            </tr>
        </thead>
        <?php foreach ($classement as $champ) { ?>
            <tbody>
                <tr>

                    <td> <?php echo $champ['p']; ?> </td>
                    <td> <?php echo $champ['short_name']; ?> </td>
                    <td> <?php echo $champ['pts']; ?> </td>
                    <td> <?php echo $champ['gp']; ?> </td>
                    <td> <?php echo $champ['w']; ?> </td>
                    <td> <?php echo $champ['d']; ?> </td>
                    <td> <?php echo $champ['l']; ?> </td>
                    <td> <?php echo $champ['gf']; ?> </td>
                    <td> <?php echo $champ['ga']; ?> </td>
                    <td> <?php echo $champ['gd']; ?> </td>
                </tr>
            </tbody>
        <?php } ?>
    </table>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
