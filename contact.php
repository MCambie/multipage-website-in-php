<?php
    session_start();
    echo "<pre>";
    print_r($_SESSION['error']);
    echo "</pre>";





?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/form.css" />
</head>
<body>
    
    <form enctype="multipart/form-data" method="post" action="function/php/traitement.php">
        <label for="titre">Titre</label><label for="Mme">Mme</label><input type="radio" name="genre" value="mme"><label for="Melle">Melle</label><input type="radio" name="genre" value="melle"><label for="Mr">Mr</label><input type="radio" name="genre" value="mr"><br>
        <label for="lastname">Nom</label><input type="text" name="lastname"><br>
        <label for="firstname">Prénom</label><input type="text" name="firstname"><br>
        <label for="email">Email</label><input type="text" name="email"><br>
        <label for="objet">Objet</label>
        <select name="object" id="objet">
            <option value="info" selected>Demande d'informations</option>
            <option value="administration">Administrateur</option>
            <option value="photo">Envoyer une photo</option>
            <option value="autre">Autre</option>
        </select><br>
        <label for="message">Votre message</label><input type="text" name="message"><br>
        <label for="import">Documents</label><input type="file" name="import"><br>
        <label for="format">Format de réponse souhaité</label>
        <label for="format">Html</label>
        <input type="radio" name="format" value="html">
        <label for="text">text</label>
        <input type="radio" name="format" value="text"><br>
        <button type="submit">Contactez-Moi</button>
    </form>
</body>

<?php 
    session_destroy(); 
?>
</html>

