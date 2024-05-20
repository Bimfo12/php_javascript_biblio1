<?php 

ob_start() ?>

<table class="table table-center">
    <tr class="table-dark">
        <th>Image</th>
        <th>Titre</th>
        <th>Nombre de Pages</th>
        <th colspan="2">Actions</th>
    </tr>
    
    <?php 
    
    for($i=0; $i<count($livres);$i++) : ?>
    <tr>
        <td class="align-middle"><img src="public/image/<?=$livres[$i]->getImage(); ?>" alt="<?=$livres[$i]->getTitre(); ?>" width="85px"></td>
        <td class="align-middle"><a href="<?= url ?>/livres/l/<?=$livres[$i]->getId();?>"> <?=$livres[$i]->getTitre(); ?></a></td>
        <td class="align-middle"><?=$livres[$i]->getNbpage(); ?></td>
        <td class="align-middle"><a href="" class="btn btn-warning">Modifier</a></td>
        <td class="align-middle"><a href="" class="btn btn-danger">Supprimer</a></td>
        
    </tr>

    <?php endfor; ?>
    
</table>

<a href="<?= url ?>/livres/a" class="btn btn-success d-block">Ajouter</a>

<?php 
$content = ob_get_clean();
$titre   = "Les livre de la Bibliothèque";
require "templete.php";
?>