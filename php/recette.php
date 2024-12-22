<?php

use Symfony\Component\Yaml\Yaml;
$data=Yaml::parseFile('recette.yaml');
//print_array($data);
$compteurEtape=1;

echo "<h1>".$data["titre"]."</h1>\n";

echo "<h2>Durée</h2>\n";
foreach($data["duree"] AS $uneDuree){
	echo "<p>".ucfirst($uneDuree["nom"])." : ".$uneDuree["duree"]." ".$uneDuree["unite"]."</p>\n";
}

echo "<h2>Indications</h2>";
foreach($data["indications"] AS $uneIndication){
	echo "<p>".ucfirst($uneIndication["nom"])." : ".$uneIndication["valeur"]."</p>\n";
}

echo "<h2>Ingrédients</h2>";
foreach($data["ingredients"] AS $unIngredient){
	echo "<p>".ucfirst($unIngredient["nom"])." : ".$unIngredient["qte"]." ".$unIngredient["unite"]."</p>\n";
}

echo "<h2>Ustensiles</h2>";
foreach($data["ustensiles"] AS $unUstensile){
	echo "<p>".$unUstensile["qte"]." ".ucfirst($unUstensile["nom"])."</p>\n";
}

echo "<h2>Etapes</h2>";
foreach($data["etapes"] AS $uneEtape){
	echo "<h3>Etape $compteurEtape</h3>";
	echo "<p>".$uneEtape."</p>\n";
	$compteurEtape ++;
}

?>