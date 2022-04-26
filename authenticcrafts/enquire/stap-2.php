<?php
session_start();
error_reporting(0);
$ip = $_SERVER['REMOTE_ADDR'];
require_once ('vraag.php');

$_SESSION['vraag1'] = $_POST['vraag1'];
$_SESSION['vraag2'] = $_POST['vraag2'];

$to = "$toemail";
$subject = "$land $product".' BIV '."$from".' 01';
//Adapt email to product
$msg = "
<html>
<body style=\"margin: 0; padding: 0;\">
<table align=left width=50% border=\"1\" bordercolor=\"black\" cellspacing=\"0\" cellpadding=\"4\">
<tr><th>"."$Tvraag1"."</th><td>"."$vraag1"."</td></tr>
<tr><th>"."$Tvraag2"."</th><td>"."$vraag2"."</td></tr>
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

      <img class="col-12" src="../images/resin (5).jpg" /> <!--images-->

      <div class="col-2">
        <p></p>
      </div>

      <div class="form col-8">
        <p class="stap">Step 2 of 3</p>


        <form action="stap-3.php" name="form" onsubmit="return validate(this);" method="post">

          <label class="label"><?php echo $Tvraag3 ?><span>*</span></label>
          <label class="container"><input id="vraag3" class="radio" type="radio" name="vraag3" value="<?php echo $valueC1 ?>" /> <p class="p"><?php echo $valueC1 ?></p><span class="checkmark"></span></label>
          <label class="container"><input id="vraag3" class="radio" type="radio" name="vraag3" value="<?php echo $valueC2 ?>" /> <p class="p"><?php echo $valueC2 ?></p><span class="checkmark"></span></label>
          <label class="container"><input id="vraag3" class="radio" type="radio" name="vraag3" value="<?php echo $valueC3 ?>" /> <p class="p"><?php echo $valueC3 ?></p><span class="checkmark"></span></label>

          <div id="required"></div>

          <label class="label">Special wishes</label>
          <textarea class="text" style="height:100px;" name="opmerkingen" placeholder=""></textarea>

          <script type="text/javascript" language="javascript" src="js/stap-2.js"></script>
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
