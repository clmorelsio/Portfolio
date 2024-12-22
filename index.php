<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Portfolio</title>
	<link rel="stylesheet" href="./portfolio.css">
</head>

<body>
    <nav class="menuList">
        <ul>
            <li class="menuList"><a href="#accueil">ACCUEIL</a></li>
            <li class="menuList"><a href="#competences">COMPETENCES</a></li>
            <li class="menuList"><a href="#realisations">REALISATIONS</a></li>
            <li class="menuList"><a href="#formation">FORMATION</a></li>
            <li class="menuList"><a href="#contact">CONTACT</a></li>
        </ul>
    </nav>

    <main>
        <?php

            include_once("./php/accueil.php");
            include_once("./php/competences.php");
            include_once("./php/realisations.php");
            include_once("./php/formation.php");
            include_once("./php/contact.php");
            include_once("./php/recette.php");

        ?>
    </main>

    <footer>
        <p>Clotilde Morel</p>    
    </footer>

</body>
</html>