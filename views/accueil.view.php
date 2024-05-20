<?php ob_start() ?>


<?php 
$content = ob_get_clean();
$titre   = "Bibliothèque Malagasy";
 require "templete.php";
?>