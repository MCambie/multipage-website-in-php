<?php
    session_start();
    function errorName(){
        if (isset($_SESSION['error_name'])){
            echo 'class="errorInput"';
        } 
    }
    function errorMail(){
        if (isset($_SESSION['error_mail'])){
            echo 'class="errorInput"';
        } 
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="Assets/css/form.css" />
</head>
<body>
    
    <form enctype="multipart/form-data" method="post" action="function/php/traitement.php">
        <label for="titre">Titre</label>
        <label for="Mme">Mme</label>
        <input type="radio" name="genre" value="mme" checked>
        <label for="Melle">Melle</label>
        <input type="radio" name="genre" value="melle">
        <label for="Mr">Mr</label>
        <input type="radio" name="genre" value="mr"><br>
        <label for="name">Nom</label>
        <input type="text" name="name" <?php errorName(); ?>>
        <br>
        <?php
            if (isset($_SESSION['error_name'])) {
                echo '<p class="error">'.$_SESSION['error_name'].'<p>';
            }
        ?>  
        <label for="email">Email</label>
        <input type="text" name="email" <?php errorMail();?>>
        <br>
        <?php
            if (isset($_SESSION['error_mail'])) {
                echo '<p class="error">'.$_SESSION['error_mail'].'<p>';
            }if (isset($_SESSION['msg_no_send'])) {
                echo '<p class="error">'.$_SESSION['msg_no_send'].'<p>';
            }
        ?>
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
        <input type="radio" name="format" value="text" checked><br>
        <button type="submit">Contactez-Moi</button>
        <?php 
            if (isset($_SESSION['msg_send'])) {
                echo '<p class="send">'.$_SESSION['msg_send'].'<p>';
            }
        
             
        
        ?>
    </form>

</body>

<?php 


    session_destroy(); 
?>
</html>

