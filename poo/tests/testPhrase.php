<?php
require "../classes/Phrase.php";

$phrase1 = new Phrase("Yo, c'est Maxime et je suis en SIO!");
echo $phrase1->getPhrase();
echo PHP_EOL;
echo "Il y a " . $phrase1->calculNombreMots() . " mots dans la phrase";
echo PHP_EOL;
echo "Il y a " . $phrase1->calculNombreCaracteres() . " caractères dans la phrase";
echo PHP_EOL;
echo "Le mot à la position est " . $phrase1->getMotPosition(1);
echo PHP_EOL;
echo $phrase1->getTypePhrase();
echo PHP_EOL;
echo "Le mot apparaît " . $phrase1->getOccurenceMot("sio") . " fois";
echo PHP_EOL;
echo "La nouvelle phrase est : " . $phrase1->remplacerMot("Maxime","Andy");

$phrase2 = new Phrase("coucou les petits loups c'est danielou");
echo PHP_EOL;
echo $phrase2->reformaterPhrase();
echo PHP_EOL;
echo $phrase2->getNombreVoyelles();



