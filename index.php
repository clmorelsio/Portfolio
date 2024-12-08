<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
	<link rel="stylesheet" href="./portfolio.css">
</head>

<body>
    <header>
	<ul>
		<li><a href="#accueil">ACCUEIL</a></li>
		<li><a href="#competences">COMPETENCES</a></li>
		<li><a href="#realisations">REALISATIONS</a></li>
		<li><a href="#formation">FORMATION</a></li>
		<li><a href="#contact">CONTACT</a></li>
	</ul>
    </header>

    <main>
        <?php

            echo "<h1>Welcome to my site</h1>";

            include_once("./php/accueil.php");
            include_once("./php/competences.php");
            include_once("./php/realisations.php");
            include_once("./php/formation.php");
            include_once("./php/contact.php");

        ?>
    </main>

</body>
</html>