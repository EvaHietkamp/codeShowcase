<?php
session_start();
error_reporting(0);
$ip = $_SERVER['REMOTE_ADDR'];

$_SESSION['voornaam'] = $_POST['voornaam'];//Number vraag
$_SESSION['achternaam'] = $_POST['achternaam'];
$_SESSION['contactmoment'] = $_POST['contactmoment'];
$_SESSION['telefoon'] = $_POST['telefoon'];
$_SESSION['email'] = $_POST['email'];
require ('vraag.php');

$to = "$toemail";
$subject = 'YES! '."$land $product".' BIV '."$from".' 03';
//Adapt email to product
$msg = "
<html>
<body style=\"margin: 0; padding: 0;\">
<table align=left width=50% border=\"1\" bordercolor=\"black\" cellspacing=\"0\" cellpadding=\"4\">
<tr><th>"."$Tvraag1"."</th><td>"."$vraag1"."</td></tr>
<tr><th>"."$Tvraag2"."</th><td>"."$vraag2"."</td></tr>
<tr><th>"."$Tvraag3"."</th><td>"."$vraag3"."</td></tr>
<tr><th>Eventuele Opmerkingen</th><td>"."$opmerkingen"."</td></tr>
<tr><th>Voornaam</th><td>"."$voornaam"."</td></tr>
<tr><th>Achternaam</th><td>"."$achternaam"."</td></tr>
<tr><th>Beste contactmoment</th><td>"."$contactmoment"."</td></tr>
<tr><th>Telefoon</th><td>"."$telefoon"."</td></tr>
<tr><th>E-mail</th><td>"."$email"."</td></tr>
<tr><th>Ip</th><td>"."$ip"."</td></tr>
</body>
</html>
";

$headers =  'MIME-Version: 1.0' . "\r\n";
$headers .= 'From:'. "<"."$email".">"."\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

mail($to, $subject, $msg, $headers);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Authentic Crafts</title>
  <link rel="stylesheet" type="text/css" href="../css/style-2.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div class="cont">
    <div class="col-3">
      <p></p>
    </div>
    <div class="wrapper col-6">
      <div class="header col-12">
        <div class="logo col-4">
          <img src="../images/hawdarkerorange-temp.jpg" alt="">
        </div>
        <div class="nav col-8">
          <a href="../index.php">home</a>
          <a href="../aboutus.php">about us</a>
          <a href="../contact.php">contact</a>
        </div>

      </div>

      <img class="col-12" src="../images/resin9.jpg" /> <!--images-->

      <div class="col-2">
        <p></p>
      </div>

      <div class="form col-8">
        <img id="becheck" src="../images/checkbox.png" />

        <div id="bedankt">
          <h3>Thank you <?php echo $voornaam . ' ' . $achternaam ?> for your application!</h3>
          <h3>We will start working for you immediately!</h3>
        </div>

          </div>

          <div class="foot col-12">
            <a href="../algemene.htm">Terms and Conditions /</a>
            <a href="../privacy.htm">Privacy Policy /</a>
            <a href="../disclaimer.htm">Disclaimer </a>
          </div>
        </div><!-- end .wrapper -->
      </div><!-- end .cont -->
    </body>
    </html>
