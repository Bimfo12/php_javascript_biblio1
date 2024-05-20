

<?php ob_start() ?>

<div class="row">
    <div class="col-6">
        <img src="<?= url ?>public/image/<?=$livre->getImage();?> " width="400px">
    </div>
    <div class="col-6">
        <p>Titre: <?=$livre->getTitre();?></p>
        <p>Nombre de page : <?=$livre->getNbpage();?></p>
    </div>

</div>

<?php 
$content = ob_get_clean();
$titre   = $livre->getTitre();
 require "templete.php";
?>
