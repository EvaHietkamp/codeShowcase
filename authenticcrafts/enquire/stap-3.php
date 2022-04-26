<?php
session_start();
error_reporting(0);
$ip = $_SERVER['REMOTE_ADDR'];
require_once ('vraag.php');

$_SESSION['vraag3'] = $_POST['vraag3'];
$_SESSION['opmerkingen'] = $_POST['opmerkingen'];

$to = "$toemail";
$subject = "$land $product".' BIV '."$from".' 01-02';
//Adapt email to product
$msg = "
<html>
<body style=\"margin: 0; padding: 0;\">
<table align=left width=50% border=\"1\" bordercolor=\"black\" cellspacing=\"0\" cellpadding=\"4\">
<tr><th>"."$Tvraag1"."</th><td>"."$vraag1"."</td></tr>
<tr><th>"."$Tvraag2"."</th><td>"."$vraag2"."</td></tr>
<tr><th>"."$Tvraag3"."</th><td>"."$vraag3"."</td></tr>
<tr><th>Eventuele Opmerkingen</th><td>"."$opmerkingen"."</td></tr>
<tr><th>Ip</th><td>"."$ip"."</td></tr>
</body>
</html>
";

$headers =  'MIME-Version: 1.0' . "\r\n";
$headers .= 'From:'. "<". "$ip" . "@bien.com>"."\r\n";
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

      <img class="col-12" src="../images/julia (6).jpg" /> <!--images-->

      <div class="col-2">
        <p></p>
      </div>

      <div class="form col-8">
        <p class="stap">Step 3 of 3</p>


        <form action="stap-4.php" name="form" onsubmit="return validate(this);" method="post">
          <label class="label">First name<span>*</span></label>
          <input class="text" name="voornaam" id="voornaam" type="text" />

          <div id="required"></div>

          <label class="label">Last name<span>*</span></label>
          <input class="text" name="achternaam" id="achternaam" type="text" />

          <div id="required2"></div>

          <label class="label">Best contact moment<span>*</span></label>
          <label class="container2" ><input class="checkmark2" type="checkbox" name="contactmoment[]" value="<?php echo $valueV1 ?>" id="contactmoment"/> <p class="p" ><?php echo $valueV1 ?></p><span class="checkmark2" ></span></label>
          <label class="container2" ><input class="checkmark2" type="checkbox" name="contactmoment[]" value="<?php echo $valueV2 ?>" id="contactmoment"/> <p class="p" ><?php echo $valueV2 ?></p><span class="checkmark2" ></span></label>
          <label class="container2" ><input class="checkmark2" type="checkbox" name="contactmoment[]" value="<?php echo $valueV3 ?>" id="contactmoment"/> <p class="p" ><?php echo $valueV3 ?></p><span class="checkmark2" ></span></label>
          <label class="container2" ><input class="checkmark2" type="checkbox" name="contactmoment[]" value="<?php echo $valueV4 ?>" id="contactmoment"/> <p class="p" ><?php echo $valueV4 ?></p><span class="checkmark2" ></span></label>

          <div id="required3"></div>

          <div class="textParts col-12">
            <label class="label">Phone<span>*</span></label>
            <input class="text" name="telefoon" id="telefoon" type="text" />

            <div id="required8"></div>
          </div>

          <div class="textParts col-12">
            <label class="label">E-mail<span>*</span></label>
            <input class="text" name="email" id="email" type="text" placeholder=""/>

            <div id="required9"></div>

          <script type="text/javascript" language="javascript" src="js/stap-3.js"></script>
          <input type="submit" value="NEXT" id="next" />
          </form>


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
