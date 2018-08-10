<?php


$errors = [];
if(!array_key_exists('firstName', $_POST) || $_POST['firstName'] == ''){
  $errors['firstName'] = "Vous n'avez pas renseigné votre prénom";
}
if(!array_key_exists('lastName', $_POST) || $_POST['lastName'] == ''){
  $errors['lastName'] = "Vous n'avez pas renseigné votre nom";
}
if(!array_key_exists('mail', $_POST) || $_POST['mail'] == '' || !filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) ){
  $errors['mail'] = "Vous n'avez pas renseigné un email valide";
}
if(!array_key_exists('message', $_POST) || $_POST['message'] == ''){
  $errors['message'] = "Vous n'avez pas renseigné votre message";
}

session_start();

if(!empty($errors)){

  $_SESSION['errors'] = $errors;
  $_SESSION['inputs'] = $_POST;
  header('Location: contact.php');
}


else {
$_SESSION['success'] = 1;
  $message = $_POST['message'];
  $headers = 'FROM : cambie.marie@gmail.com';
  mail('cambie.marie@gmail.com', 'Formulaire de contact', $message, $headers );
  header('Location: contact.php');

};

var_dump($errors);
die();

 ?>
