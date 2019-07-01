<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact - Arnaud PIZZETTA</title>
    <meta name="Portfolio" content="Portfolio of a Computer Science student in France.">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/style.css" >
    <script src="./js/main.js"></script>
</head>

<!--Header -->
<body>
    <div id="over"></div>

    <div class="menu_container">
    <div id="logo"><a href="index.php">Arnaud PIZZETTA</a></div>
        <nav>
            <ul>
                <div class="menu_box">
                    <li><a href="index.php">Home</a></li>
                </div>
                <div class="menu_box">
                    <li><a href="./work.php">Work</a></li>
                </div>
                <div class="menu_box">
                    <li><a href="./about.php">About</a></li>
                </div>
                <div class="menu_box">
                    <li><a href="./contact.php">Contact</a></li>
                </div>
            </ul>
        </nav>
    </div>

    <!--Content -->

    <?php require_once(__DIR__.'/../src/contact_form.php');?>
</body>
<?php
$fname ="";
$lname ="";
$email ="";
$subject ="";
$message ="";

if (isset($_POST['send'])) {
//On récupère les valeurs entrées par l'utilisateur :
$fname =($_POST['fname']);
$lname =($_POST['lname']);
$email =($_POST['email']);
$subject =($_POST['subject']);
$message =($_POST['message']);


$bdd = new PDO('mysql:host=localhost;dbname=form;charset=utf8', 'root', '');   

$statement = $bdd->prepare('INSERT INTO form (lname, fname, email, subject, message) VALUES ("'.$lname.'", "'.$fname.'", "'.$email.'","'.$subject.'","'.$message.'")');       
$statement->execute();     
}

//SwiftMailer
require_once(__DIR__.'/../vendor/nfo.php');
require_once(__DIR__.'/../vendor/autoload.php');


// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.googlemail.com', 465, 'ssl'))
  ->setUsername($mailAdmin)
  ->setPassword($passAdmin)
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Message depuis Portfolio'))
  ->setFrom([$email => 'From CV'])
  ->setTo([$mailAdmin => 'My Mail'])
  ->setBody($message)
  ;

// Send the message
$result = $mailer->send($message);
?>