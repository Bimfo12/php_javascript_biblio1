<?php 
require_once "model.class.php";
require_once "livre.class.php";
class LivreManager extends model{

    private $livres;
    public  function ajoutLivre($livre){
        $this -> livres[] = $livre;
    }
    
    public function getLivres(){
        return $this->livres;
    }

    public function chargementLivre(){
        $req = $this -> getBdd()->prepare("SELECT * FROM livres");
        $req->execute();
        $mylivres = $req -> fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($mylivres as $livre){
            $li = new Livre($livre["id"],$livre["titre"],$livre["image"],$livre["nbPages"]);
            $this->ajoutLivre($li);
        }
    }

    public function getLivresById($id){
        for($i=0;$i<count($this->livres);$i++){
            if($this->livres[$i]->getId() === $id){
                return $this->livres[$i];
            }
        }
    }

    public function ajoutLivreBd($titre,$nbPages,$image){
        $req = " INSERT INTO livres(titre,nbPages,image) 
                 VALUE (:titre,:nbPages,:image)";
        
        $stmt = $this->getBdd()->prepare($req);
        $stmt ->bindValue(":titre",$titre,PDO::PARAM_STR);
        $stmt ->bindValue(":nbPages",$nbPages,PDO::PARAM_INT);
        $stmt ->bindValue(":image",$image,PDO::PARAM_STR);
        $resultat = $stmt-> execute();
        $stmt->closeCursor();

        if($resultat > 0){
            $livre = new Livre($this->getBdd()->lastInsertId(),$titre,$image,$nbPages);
            $this->ajoutLivre($livre);
        }
    }
  }

    
?>