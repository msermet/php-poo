<?php
require "../classes/Rectangle.php";
// Utilisateur de la classe Rectangle

// Instanciation de la classe Rectangle
$rectangle1 = new Rectangle(12,10,"rouge");
$surface = $rectangle1->calculerSurface();
echo $surface;
echo PHP_EOL;
$rectangle1 = new Rectangle(15,9,"vert");
echo $rectangle1->calculerSurface();
echo PHP_EOL;
echo "Dimensions du rectangle : ".$rectangle1->getLongueur() . "," . $rectangle1->getLargeur();
$rectangle1->setLongueur(20);
echo PHP_EOL;
echo $rectangle1->calculerSurface();
echo PHP_EOL;
echo $rectangle1;
echo PHP_EOL;
echo "Périmètre du rectangle : ".$rectangle1->calculerPerimetre();
echo PHP_EOL;
$rectangle1->setCouleur("bleu");
echo "Le rectangle est de couleur ".$rectangle1->getCouleur();
echo PHP_EOL;
echo $rectangle1->dessinerRectangle("*");
echo PHP_EOL;
echo $rectangle1->dessinerRectangle2("*");