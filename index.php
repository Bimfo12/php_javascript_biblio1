<?php 

    define("url",str_replace("index.php","",(isset($_SERVER['HTTPS']) ? 'https': 'http').
    "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));
     require_once "controlleurs/livresController.controller.php";
     $livresController = new livresController;

     try{
          if(empty($_GET['page'])){
              require "views/accueil.view.php";
          }else{
             $url = explode("/",filter_var($_GET['page']),FILTER_SANITIZE_URL);
             switch($url[0]){
                 case "accueil" : require "views/accueil.view.php";
                 break;
                 case "livres" :
                     if(empty($url[1])) $livresController-> afficherLivres();
                     elseif($url[1]=== 'l'){
                       $livresController->afficherLivre($url[2]);
                     }
                     elseif($url[1]=== 'a'){
                        $livresController->ajoutLivre();
                     }
                     elseif($url[1]=== 'm'){
                         echo "modifier un livres";
                     }
                     elseif($url[1]=== 's'){
                         echo "supprimer un livres";
                     }
                     elseif($url[1]=== 'av'){
                        $livresController->ajoutLivreValidation();
                     }
                     else{
                        throw new Exception("la page n'existe pas" );
                     }
        
                     break;

                     default : throw new Exception("la page n'existe pas" );
                  }


        }
     
     }catch(Exception $e){

        echo $e->getMessage();
    }
?> 