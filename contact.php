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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <form enctype="multipart/form-data" method="post" action="function/php/traitement.php">
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Titre</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input type="radio" name="genre" value="mme" checked>
                                <label for="Mme" class="form-check-label">Mme</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="genre" value="melle">
                                <label for="Melle" class="form-check-label">Melle</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="genre" value="mr">
                                <label for="Mr" class="form-check-label">Mr</label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Nom</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nom"<?php errorName(); ?>>
                        <?php
                            if (isset($_SESSION['error_name'])) {
                                echo '<p class="error">'.$_SESSION['error_name'].'<p>';
                            }
                        ?>  
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email"<?php errorMail();?>>
                        <?php
                            if (isset($_SESSION['error_mail'])) {
                                echo '<p class="error">'.$_SESSION['error_mail'].'<p>';
                            }if (isset($_SESSION['msg_no_send'])) {
                                echo '<p class="error">'.$_SESSION['msg_no_send'].'<p>';
                            }
                        ?>
                    </div> 
                </div>
                <div class="form-group row">
                    <label for="objet" class="col-sm-2 col-form-label">Objet</label>
                    <div class="col-sm-8">
                        <select name="object" id="objet" class="custom-select">
                            <option value="info" selected>Demande d'informations</option>
                            <option value="administration">Administrateur</option>
                            <option value="photo">Envoyer une photo</option>
                            <option value="autre">Autre</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="message" class="col-sm-2 col-form-label">Votre message</label>
                    <div class="col-sm-8">
                        <textarea class="col-sm-12" name="message" id=""  rows="3"></textarea>
                    </div>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile" name="import">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
  
                <div class="form-group row">
                    <label for="format" class="col-sm-2 col-form-label">Format de réponse souhaité</label>
                    <label for="format" class="col-sm-2 col-form-label">Html</label>
                    <input type="radio" name="format" value="html">
                    <label for="text" class="col-sm-2 col-form-label">text</label>
                    <input type="radio" name="format" value="text" checked>
                </div>
                <div class="form-group row">
                    <button type="submit" class="btn btn-primary">Contactez-Moi</button>
                    <?php 
                        if (isset($_SESSION['msg_send'])) {
                            echo '<p class="send">'.$_SESSION['msg_send'].'<p>';
                        } 
                    ?>
                </div>
                </form>
            </div>
        </div>        
    </body>
<?php 
    session_destroy(); 
?>
</html>

