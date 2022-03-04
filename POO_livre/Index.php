
<h1>POO Livre</h1>  
<p>Vous êtes chargé(e) de créer un projet PHP orienté objet permettant de gérer des livres et leurs auteurs respectifs <br>
Les livres sont caractérisés par un titre, un nombre de pages, une année de parution, un prix et un auteur. Un auteur est identifié par un nom et un prénom.<br>
Une méthode toString sera appréciée dans chacune de vos classes. <br>
Vous implémenterez une méthode afficherBibliographie qui permettra d’afficher la bibliographie d’un auteur :</p>

<?php

require "Auteur.php";
require "Livre.php";

$a1 = new Auteur ("KING", "Stephen");
$a2 = new Auteur ("MUSSO", "Guillaume");

$l1 = new Livre ("Ca", 1138, 1986, 20, $a2);
$l2 = new Livre ("Simetierre", 374, 1983, 15, $a1);
$l3 = new Livre ("Le Fléau",823,1978,14,$a1);
$l4 = new Livre ("Shining", 447,1977,16,$a1);

 // public function __afficherBibliographie();

// echo $a1, "<br>";
// echo $l1;   
// echo $l2;
// echo $l3;
// echo $l4;

$a1->afficherLivres();
$a2->afficherLivres();
