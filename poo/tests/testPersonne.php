<?php
require "../classes/Personne.php";

$personne1 = new Personne("sermet","maxime","06/02/2005");
echo "Identité courante : " . $personne1->getIdentititeCourante();
$personne1->ajouterPrenom("Louis");
$personne1->ajouterPrenom("Paul");
$personne1->ajouterPrenom("Jules");
echo PHP_EOL;
echo "Identité administrative : " . $personne1->getIdentititeAdministrative();
echo PHP_EOL;
echo "Vous êtes né le " . $personne1->retournerDateNaissance();
echo PHP_EOL;
echo "Vous avez " . $personne1->retournerAge() . " ans";