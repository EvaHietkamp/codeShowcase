<?php
session_start();
error_reporting(0);
$ip = $_SERVER['REMOTE_ADDR'];

$_SESSION['voornaam'] = $_POST['voornaam'];
$_SESSION['achternaam'] = $_POST['achternaam'];
$_SESSION['telefoon'] = $_POST['telefoon'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['opmerkingen'] = $_POST['opmerkingen'];

require ('products/vraag.php');
require ('header.html');

$to = "$toemail";
$subject = "$from" . " " . 'CONTACT AUTHENTIC RESIN BLUE';
//Adapt email to product
$msg = "
<html>
<body style=\"margin: 0; padding: 0;\">
<table align=left width=50% border=\"1\" bordercolor=\"black\" cellspacing=\"0\" cellpadding=\"4\">
<tr><th>Voornaam</th><td>"."$voornaam"."</td></tr>
<tr><th>Achternaam</th><td>"."$achternaam"."</td></tr>
<tr><th>Telefoon</th><td>"."$telefoon"."</td></tr>
<tr><th>E-mail</th><td>"."$email"."</td></tr>
<tr><th>Eventuele Opmerkingen</th><td>"."$opmerkingen"."</td></tr>
<tr><th>Ip</th><td>"."$ip"."</td></tr>
</body>
</html>
";

$headers =  'MIME-Version: 1.0' . "\r\n";
$headers .= 'From:'. "<"."$email".">"."\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

mail($to, $subject, $msg, $headers);
session_destroy();
?>

      <div class="form col-12">
      <img id="becheck" src="images/checkbox.png" />
      <div id="bedankt">
        <h3>Thanks for your message.</h3>
        <h4>We will contact you as soon as possible.</h4>
      </div>
      </DIV>


      <div class="foot col-12">
        <a href="algemene.htm">Terms and Conditions /</a>
        <a href="privacy.htm">Privacy Policy /</a>
        <a href="disclaimer.htm">Disclaimer </a>
      </div>
    </div><!-- end .wrapper -->
  </div><!-- end .cont -->
</body>
</html>
