<?php
session_start();
include('Partials/header.php'); ?>

<?php if (array_key_exists('errors', $_SESSION)): ?>

<div class="alert alert-danger">
<?= implode('<br>', $_SESSION['errors']); ?>
</div>

<?php  endif;  ?>

<?php if (array_key_exists('success', $_SESSION)): ?>

<div class="alert alert-success">
Votre mail à bien été envoyé
</div>

<?php  endif;  ?>


<form action="post_contact.php"
      method="POST">
      <div class="form-group">
        <div class="row container">

          <div class="col-sm-6 col-md-6 col-lg-6">
            <label for="inputprenom">Prénom</label>
            <input type="text" name="firstName" value="" class="form-control" id="inputprenom">
          </div>
          <div class="col-sm-6 col-md-6 col-lg-6">
            <label for="inputnom">Nom</label>
            <input type="text" name="lastName" value="" class="form-control" id="inputnom">
          </div>
          <div class="col-sm-12 col-md-12 col-lg-12">
            <label for="inputmail">E-Mail</label>
            <input type="text" name="_replyto" value="" class="form-control" id="inputmail">
          </div>

          <div class="col-sm-12 col-md-12 col-lg-12">
          <label for="objet">Objet</label>
            <select name="object" id="objet">
                <option value="info" selected>Demande d'informations</option>
                <option value="administration">Administrateur</option>
                <option value="photo">Envoyer une photo</option>
                <option value="autre">Autre</option>
            </select><br>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-12">
                <label for="import">Documents</label><input type="file" name="import"><br>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-12">
              <label for="format">Format de réponse souhaité</label>
              <label for="format">Html</label>
              <input type="radio" name="format" value="html">
              <label for="text">text</label>
              <input type="radio" name="format" value="text"><br>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-12">
            <label for="inputmessage">Message</label>
            <textarea name="message" rows="8" class="form-control" id="inputmessage" ><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?></textarea>
              <button type="submit" name="button" class="btn btn-success">Envoyer</button>
          </div>
        </div>
      </div>
</form>

<?php include('Partials/footer.php'); ?>
<?php
unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']);
 ?>
