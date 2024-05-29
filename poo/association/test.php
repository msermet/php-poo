<?php
require_once 'Auteur.php';
require_once 'Livre.php';

// Créer un auteur
$auteur1 = new Auteur("Georges","Orwell");
// Créer un livre
$livre1 = new Livre("1111","1984","12/03/1940",400);
// Associer le nom de l'auteur de $livre1
$livre1->setAuteur($auteur1);
// Afficher le nom de l'auteur de $livre1
echo $livre1->getAuteur()->getNom();

$auteur2 = new Auteur("Andy","Schiessle");
$livre2 = new Livre("1551","Oui","25/12/2023",652);
$livre2->setCategorie();
