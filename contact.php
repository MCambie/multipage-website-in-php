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

    <?php include('Partials/header.php'); ?>
        <div class="container">
        <?php 
                                if (isset($_SESSION['msg_send'])) {
                                    echo '<h5 class="send">'.$_SESSION['msg_send'].'<h5>';
                                } 
                            ?>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                <h2>Contacts administration</h2>
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
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nom" required><?php errorName(); ?>   
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
                            <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" required<?php errorMail();?>>
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
                                <textarea class="col-sm-12" name="message" id="message" rows="3" required></textarea>
                            </div>
                        </div>       
                            <div class="form-group">
                                <div class="form-group custom-file">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                    <input type="file" class="custom-file-input" id="customFile" name="import">
                                </div>
                            </div>
                        <div class="form-group row">
                            <legend class="col-form-label col-sm-4 pt-0">Format de réponse souhaité</legend>
                            <div class="col-sm-8">
                                <div class="form-check">
                                    <input type="radio" name="format" value="html">
                                    <label for="format" class="form-check-label">Html</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="format" value="text" checked>
                                    <label for="text" class="form-check-label">text</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <button type="submit" class="btn btn-success">Envoyer</button>

                        </div>
                    </form>
                </div>
                <div class="col-sm-12 col-md-6 address-col">
                    <div class="row vdivide">
                        <div class="col-sm-6">
                            <h5>Adresse du potager :</h5>
                            <address>
                                <strong>Koninkijke Biliothèque Royale</strong><br>
                                        bd de l’empereur 4 <br>
                                        1000 Bruxelles <br>
                                        Accès via la cafétéria au 5ème étage
                                <abbr title="Phone">Tel: +32 (0)2 519 53 11</abbr> 
                            </address>
                        </div>
                        <div class="col-sm-6">
                            <h5>Administration de l’association:</h5>
                            <address>
                                <strong>Le début des haricots ASBL</strong><br>
                                        Rue Van Elewyck 35 <br>
                                        1050 Ixelles <br>       
                                <abbr title="Phone">Tel: +32 (0)2 644 07 77</abbr> 
                            </address>
                        </div>  
                    </div> 
                    <div >
                        <iframe id="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5038.751716762714!2d4.356704760805859!3d50.84272381105844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c47e3e68746d%3A0xb951a4bb3a2a540a!2sBiblioth%C3%A8que+Royale+de+Belgique!5e0!3m2!1sfr!2sbe!4v1533808601298" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>  
        </div>     
    <?php 
   session_destroy();   
    ?>

    <?php include('Partials/footer.php'); ?>

