

<?php

//code 

class Livre{
    private $_titre;
    private $_nbpages;
    private $_annee;
    private $_prix;
    private $_auteur;
    
    
    function __construct($titre, $nbpages, $annee, $prix, $auteur){
        $this->_titre = $titre;
        $this->_nbpages = $nbpages;
        $this->_annee = $annee;
        $this->_prix = $prix;
        $this->_auteur = $auteur;
        $this->_auteur->addLivre($this);
    }
    public function getTitre(){
        return $this->_titre;
    }
    public function getPages(){
        return $this->_nbpages;
    }
    public function getBirth(){
        return $this->_annee;
    }
    public function getPrix(){
        return $this->_prix;
    }
    public function getAuteur(){
        return $this->_auteur;
    }
    public function __toString()
    {
        return $this->_titre." (".$this->_annee.") : ".$this->_nbpages." pages / ".$this->_prix." €<br>";
    }
}