<?php
session_start();
error_reporting(0);
$ip = $_SERVER['REMOTE_ADDR'];

$_SESSION['vraag4'] = $_POST['vraag4'];
$_SESSION['straat'] = $_POST['straat'];
$_SESSION['huisnummer'] = $_POST['huisnummer'];
$_SESSION['postcode'] = $_POST['postcode'];
$_SESSION['plaats'] = $_POST['plaats'];
$_SESSION['telefoon'] = $_POST['telefoon'];
$_SESSION['email'] = $_POST['email'];

require_once ('resources/product_data.php');

$to = "$toemail";
$subject = 'YES! '."$land $product".' BIV '."$from".' 03';
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
<tr><th>Ip</th><td>"."$ip"."</td></tr>
</body>
</html>
";

$headers =  'MIME-Version: 1.0' . "\r\n";
$headers .= 'From:'. "<"."$email".">"."\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

mail($to, $subject, $msg, $headers);

require_once ('../frame/head.html');
require_once ('resources/header.php');
require_once ('../frame/nav.html');
?>

<p class="stap">Stap 4 van 4</p>

<img src="<?php echo $img_4?>" /> <!--images-->

<form action="stap-5.php" name="form" onsubmit="return validate(this);" method="post">

  <label class="label">Voornaam<span>*</span></label>
  <input class="text" name="voornaam" id="voornaam" type="text" />

  <div id="required"></div>

  <label class="label">Achternaam<span>*</span></label>
  <input class="text" name="achternaam" id="achternaam" type="text" />

  <div id="required2"></div>

  <label class="label">Beste contactmoment<span>*</span></label>
  <?php
    foreach ($contactmoment as $value) {
      echo '<label class="container2" ><input class="checkmark2" type="checkbox" name="contactmoment[]" value="'.$value.'" id="contactmoment"/> <p class="p" >'.$value.'</p><span class="checkmark2" ></span></label>
      ';
    }
  ?>

  <div id="required3"></div>

  <label class="label">Eventuele Opmerkingen </label>
  <textarea class="text" style="height:100px;" name="opmerkingen" placeholder=""></textarea>

  <script type="text/javascript" language="javascript" src="js/stap-4.js"></script>

  <input type="submit" value="VERDER" id="next" />
</form>
</div>
</div>

<?php require_once ('../frame/footer.php'); ?>
