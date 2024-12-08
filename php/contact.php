<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
</head>

<body>
    <form method="POST" action="/actions/submit.php"> 
        //action here is just a placeholder, put the real one in later

        <label for="nom">Nom :</label>
        <input type="text" id="nom" placeholder="Votre nom">

        <label for="adresseMail">Adresse mail :</label>
        <input type="email" id="adresseMail" placeholder="Votre adresse mail">

        <label for="objet">Objet :</label>
        <input type="text" id="objet" placeholder="L'objet de votre message">

        <label for="message">Message :</label>
        <input type="text" id="message" placeholder="Votre message">

        // captcha here

        <input type="submit" value="Envoyer">

    </form>
</body>

