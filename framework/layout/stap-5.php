<?php
session_start();
error_reporting(0);
$ip = $_SERVER['REMOTE_ADDR'];

$_SESSION['voornaam'] = $_POST['voornaam'];
$_SESSION['achternaam'] = $_POST['achternaam'];
$_SESSION['contactmoment'] = $_POST['contactmoment'];
$_SESSION['opmerkingen'] = $_POST['opmerkingen'];

require_once ('resources/product_data.php');

$to = "$toemail";
$subject = "$land $product".' BIV '."$from".' 04';
//Adapt email to product
$msg = "
<html>
<body style=\"margin: 0; padding: 0;\">
<table align=left width=50% border=\"1\" bordercolor=\"black\" cellspacing=\"0\" cellpadding=\"4\">
<tr><th>"."$Tvraag1"."</th><td>"."$a_vraag1"."</td></tr>
<tr><th>"."$Tvraag2"."</th><td>"."$a_vraag2"."</td></tr>
<tr><th>"."$Tvraag3"."</th><td>"."$a_vraag3"."</td></tr>
<tr><th>"."$Tleverdatum"."</th><td>"."$a_leverdatum"."</td></tr>
<tr><th>"."$Tvraag4"."</th><td>"."$vraag4"."</td></tr>
<tr><th>Straat</th><td>"."$straat"."</td></tr>
<tr><th>Huisnummer</th><td>"."$huisnummer"."</td></tr>
<tr><th>Postcode</th><td>"."$postcode"."</td></tr>
<tr><th>Plaats</th><td>"."$plaats"."</td></tr>
<tr><th>Telefoon</th><td>"."$telefoon"."</td></tr>
<tr><th>E-mail</th><td>"."$email"."</td></tr>
<tr><th>Voornaam</th><td>"."$voornaam"."</td></tr>
<tr><th>Achternaam</th><td>"."$achternaam"."</td></tr>
<tr><th>Beste contactmoment</th><td>"."$a_contactmoment"."</td></tr>
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

require_once ('../frame/head.html');
require_once ('resources/header.php');
require_once ('../frame/nav.html');
?>


<img id="becheck" src="../frame/image/checkbox.png" />

<div id="bedankt">
  <h3>Bedankt <?php echo $voornaam . ' ' . $achternaam ?> voor de aanvraag!</h3>
  <h4>We gaan gelijk voor u aan het werk!</h4>
</div>
</div>
</div>

<?php require_once ('../frame/footer.php'); ?>
