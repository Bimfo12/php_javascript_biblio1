<?php
  class Livre{

        private $id;
        private $titre;
        private $image;
        private $nbpage;

     

        public function __construct($id, $titre, $image, $nbpage){
        
        $this->id     = $id;
        $this->titre  = $titre;
        $this->image  = $image;
        $this->nbpage = $nbpage;
   
    }

        public function getId(){return $this->id;}
        public function setId($id){$this->id = $id;}
        
        public function getTitre(){return $this->titre;}
        public function setTitre($titre){$this->titre = $titre;}

        public function getImage(){return $this->image;}
        public function setImage($image){$this->image = $image;}

        public function getNbpage(){return $this->nbpage;}
        public function setNbpage($nbpage){$this->nbpage = $nbpage;}

  }
?>