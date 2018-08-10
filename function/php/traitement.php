<?php
    session_start();

    //initialisation des variable et verification formulaire:
    $error = [
        'mail'=>'Email invalide',
        'name' => 'Nom invalide',
        'list' => 'Selectionner envoyer une photo pour Upload',
        'request' => 'Erreur message non envoyer (Request method)',
        'name_or_mail' => 'Veuillez entrer votre nom et adresse e-mail'
    ];
    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST['name']) && !empty($_POST['email'])) {
            $email = test_input($_POST["email"]);// fonction test email
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $_SESSION['error_mail'] = $error['mail'];
                logs($_SESSION['error_mail']);
                $email = $_POST['email'];
            }
            if (strlen($_POST['name']) >= 2 && strlen($_POST['name']) <= 25 && !is_numeric($_POST['name'])){
                $name = $_POST['name'];
            }else {
                $_SESSION['error_name'] = $error['name'];
            }
            ifmsg();
            if (isset($_POST['genre'])) {
                $genre = $_POST['genre'];
            }
            if (isset($_POST['object'])){
                $list = $_POST['object'];
            }
            if (isset($_POST['import'])) {
                $import_file = $_POST['import'];
            }
            if (isset($_POST['format'])){
                $text_of_Html = $_POST['format'];
            }  

        }else {
            $_SESSION['msg_no_send'] = $error['name_or_mail'];
            logs($_SESSION['msg_no_send']);

        }
    } else {
        $_SESSION['error_req'] = "Error REQUEST_METHOD";
        logs($_SESSION['error_req']);
    }

    require 'src/class.upload.php';
    $handle = new upload($_FILES['import']);
    if ($handle->uploaded) {
        $handle->file_new_name_body   = 'image';
        $handle->image_resize         = false;
        $handle->image_x              = 100;
        $handle->image_ratio_y        = true;
        $handle->process('upload');
        if ($handle->processed) {
            echo 'image send';
            $photo = $handle->file_dst_pathname;
            $handle->clean();
        } else {
            echo 'error : ' . $handle->error;
        }
    }

    function ifmsg(){
        if (isset($_POST["message"])) {
            return $msg = $_POST["message"];
        }
    }   

    function logs($info){
        $date = date('l j/m/Y - G:i:s');
        $file_log = fopen('log.txt', 'a+');
        fputs($file_log, "\n".$date." ".$info." / message: ".ifmsg());
        fclose($file_log);
    };      



    // phpMailer
    require '../../vendor/autoload.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

   
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'hautecoeurludovic@gmail.com';  // SMTP username
        $mail->Password = 'ludo20196565';                 
        //require 'mdp.php';                        // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('hautecoeurludovic@gmail.com', 'test');
        $mail->addAddress('hautecoeurludovic@gmail.com', 'Ludovic');     // Add a recipient
        //$mail->addAddress('ellen@example.com');               // Name is optional
        $mail->addReplyTo('hautecoeurludovic@gmail.com', 'Information');
        $mail->addCC($email);
        //$mail->addBCC('bcc@example.com');

        //Attachments
        if (isset($photo)) {
            $mail->addAttachment($photo); 
        }      
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = " Message de ".$name." au sujet: ".$list ;
        if ( isset($_POST["message"])) {
            $mail->Body    = ifmsg();
        }

        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $_SESSION['msg_progress'] = "Envoi en progression ...";
        $mail->send();
        $_SESSION['msg_send'] = "Message envoyé";
        logs($_SESSION['msg_send'] );

    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
    header('Location: ' .$_SERVER['HTTP_REFERER']);
?>