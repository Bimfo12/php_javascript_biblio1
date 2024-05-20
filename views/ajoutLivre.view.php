<?php ob_start() ?>

<form method=" POST" action="<?= url ?>/livres/av" enctype="multipart/form-data">
    <div class="form-group" >
        <label for="Titre">Titre</label>
        <input type="text" class="form-control" name="titre" id="titre">
        <label for="Titre">Nombre de pages</label>
        <input type="text" class="form-control" name="nbPages" id="nbPages"><br>
        <input type="file" name="image" id="image">
    </div><br>
    <button type="submit" class="btn btn-primary">Valider</button>
</form>

<?php 
$content = ob_get_clean();
$titre   = "Ajout un livre";
 require "templete.php";
?>