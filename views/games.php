<?php $title = "Games"; ?>
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
                </p>


            </div>
            <p class =" card col-12 mt-3"style="color:green;background-color: lightgrey;font-weight: bold;text-align:center;"><?php echo $game['review']; ?>/20</p>

        <?php } ?>
    </div>
</div>

<?php
    
$page = (!empty($_GET['page']) ? $_GET['page'] : 1);
// Partie "Liens"
$nombredElementsTotal=194;
$limite=20;
/* On calcule le nombre de pages */
$nombreDePages = ceil($nombredElementsTotal / $limite);

/* Si on est sur la première page, on n'a pas besoin d'afficher de lien
* vers la précédente. On va donc l'afficher que si on est sur une autre
* page que la première */
if ($page > 1):
    ?><a href="?page=<?php echo $page - 1; ?>">Page précédente</a> — <?php
endif;

/* On va effectuer une boucle autant de fois que l'on a de pages */
for ($i = 1; $i <= $nombreDePages; $i++):
    ?><a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a> <?php
endfor;

/* Avec le nombre total de pages, on peut aussi masquer le lien
* vers la page suivante quand on est sur la dernière */
if ($page < $nombreDePages):
    ?>— <a href="?page=<?php echo $page + 1; ?>">Page suivante</a><?php
endif;
?>

<?php $content = ob_get_clean(); ?>
<?php require('public/index.php'); ?>
