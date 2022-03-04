<?php

class Auteur{
    private $_nom;
    private $_prenom;
    private $_livres;

    function __construct($nom, $prenom){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_livres = [];
    }
    public function getNom(){
        return $this->_nom;
    }
    public function getSurname(){
        return $this->_prenom;
    }
    public function addLivre(Livre $livre) {
        array_push($this->_livres, $livre);

        // $this->_livres[] = $livre;
    }
    
    public function afficherLivres(){
        if(count($this->_livres) > 0){
            echo "<h1>$this</h1>";
             foreach($this->_livres as $livre)
                echo $livre;
        }else{
            echo "<h1>$this</h1><br>Auteur sans livres";
        }
    }
    
    public function __toString()
    {
        return $this->_prenom." ".$this->_nom."<br>";
    }
}



