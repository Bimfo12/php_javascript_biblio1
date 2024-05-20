<?php 
require_once "models/livreManager.class.php";

class livresController{
    private $livreManager;
    public function __construct(){
        $this-> livreManager = new LivreManager;
        $this-> livreManager -> chargementLivre();
    }
    public function afficherLivres(){
        $livres = $this->livreManager-> getLivres();
        require "views/livre.view.php";
    }
    public function afficherLivre($id){
        $livre = $this->livreManager->getLivresById($id);
        require "views/afficherLivre.view.php";
    }
    public function ajoutLivre(){
        require "views/ajoutLivre.view.php";
    }
    public function ajoutLivreValidation(){
        $file = $_FILES['image'];
        
        echo $file;
        
        // $reperoire = "public/image/";
        // $monImageAjout =$this-> ajoutImage($file,$reperoire);
        // $this -> livreManager->ajoutLivreBd($_POST['titre'],$_POST['nbPages'],$monImageAjout);

        // header('Location:'. url ."Livres");
    }
    // private function ajoutImage( $file , $dir){
    //     if(!isset($file['name']) || empty($file['name']))
    //         throw new Exception("vous devez indique une image");
            
    //     if(!file_exists($dir)) mkdir($dir,0777);

    //     $extension = strtolower(pathinfo($file['name'],PATHINFO_EXTENSION));
    //     $target_file = $dir.time().time()."_".$file['name'];

    //     if(!getimagesize($file["tmp_name"]))
    //         throw new  Exception("le fichier ne pas un image");
        
    //     if($extension != "png" && $extension != "jpg" &&  $extension != "jpeg" && $extension != "gif")
    //         throw new Exception("les extension du fichier ne pas reconnu");

    //     if(file_exists($target_file)) throw new Exception("le fichier existe déjà");

    //     if($file['size'] > 500000) throw new Exception("votre fichier est trop gros");

    //     if(!move_uploaded_file($file["tmp_name"],$target_file))
    //         throw new Exception("l'ajout de l'image n'a pas fonctionner");
        
    //     else return(time().time()."_".$file['name']);
    // }
}

?>