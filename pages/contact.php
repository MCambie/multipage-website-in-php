<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
    <form action="../assets/php/traitement.php" method="post">
    <label for="titre">Titre</label><label for="Mme">Mme</label><input type="radio" name="genre" value="mme">
    <label for="Melle">Melle</label><input type="radio" name="genre" value="melle">
    <label for="Mr">Mr</label><input type="radio" name="genre" value="mr"><br>
    <label for="lastname">Nom</label><input type="text" name="lastname"><br>
    <label for="firstname">Prénom</label><input type="text" name="firstname"><br>
    <label for="email">Email</label><input type="email" name="email"><br>
    <label for="objet">Objet</label>
    <select name="object" id="objet">
        <option value="resquest" selected>Demande d'informations</option>
        <option value="admin">Administrateur</option>
        <option value="picture">Envoyer une photo</option>
        <option value="other">Autre</option>
    </select><br>
    <label for="message">Votre message</label><input type="text" name="message"><br>
    <label for="import">Documents</label><input type="file" name="import"><br>
    <label for="">Format de réponse souhaité</label>
    <label for="">Html</label><input type="radio" name="format"><label for="">text</label><input type="radio" name="format"><br>
    <button type="submit">Contactez-Moi</button>

</form>
</body>
</html>

