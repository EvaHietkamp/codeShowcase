<?php
session_start();
error_reporting(0);
$ip = $_SERVER['REMOTE_ADDR'];


$_SESSION['vraag1'] = $_POST['vraag1'];
$_SESSION['vraag2'] = $_POST['vraag2'];
$_SESSION['vraag3'] = $_POST['vraag3'];
$_SESSION['voornaam'] = $_POST['voornaam'];
$_SESSION['achternaam'] = $_POST['achternaam'];
$_SESSION['telefoon'] = $_POST['telefoon'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['opmerkingen'] = $_POST['opmerkingen'];

require ('products/vraag.php');

$to = "$toemail";
$subject = 'YES! '."$land $productName3".' ABOUT US '."$from".' HURRA!!';
//Adapt email to product
$msg = "
<html>
<body style=\"margin: 0; padding: 0;\">
<table align=left width=50% border=\"1\" bordercolor=\"black\" cellspacing=\"0\" cellpadding=\"4\">
<tr><th>You're looking for a sculpture:</th><td>"."$vraag1"."</td></tr>
<tr><th>Properties that are important to you:</th><td>"."$vraag2"."</td></tr>
<tr><th>Presentation sculpture:</th><td>"."$vraag3"."</td></tr>
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
require ('header.html');
?>

      <div class="row">
        <div class="col-2">
          <p></p>
        </div>
        <div id="bedankt col-8">
          <div class="becheck col-2">
            <img id="becheck col-12" src="images/checkbox.png" />
          </div>
          <div class="bedanktText col-6">
            <h3>Thank you <?php echo $voornaam . ' ' . $achternaam ?> for your message!</h3>
            <p>We will contact you as soon as possible.</p>
          </div>
        </div>
      </div>

      <div class="previewOtherItem col-12">
        <div class="headerPreviewItem col-12">
          <h1>Other works</h1>
        </div>

        <div class="item col-3">
          <div class="imgItemP col-12">
            <a href="products/product1/item.php"><img src="images/resin (18).jpg" alt=""></a>
          </div>
          <div class="itemTextRow col-12">
            <div class="textItem col-9">
              <p><b><?php echo $productName1 ?></b><br />
                <i><?php echo $productDetails1 ?><br />
                   <?php echo $productSize1 ?></i><br />
                <b><?php echo $productAuthor1 ?></b>
              </p>
            </div>
            <div class="priceItem col-3">
              <p><?php echo $productPrice1 ?></p>
            </div>
          </div>
        </div><!-- end .Iceberg White and Gold -->

        <div class="item col-3">
          <div class="imgItemP col-12">
            <a href="products/product7/item.php"><img src="images/resin (24).jpg" alt=""></a>
          </div>
          <div class="itemTextRow col-12">
            <div class="textItem col-9">
              <p><b><?php echo $productName7 ?></b><br />
                <i><?php echo $productDetails7 ?><br />
                   <?php echo $productSize7 ?></i><br />
                <b><?php echo $productAuthor7 ?></b>
              </p>
            </div>
            <div class="priceItem col-3">
              <p><?php echo $productPrice7 ?></p>
            </div>
          </div>
        </div><!-- end .Ringbearer Turquoise and Silver -->

        <div class="item col-3">
          <div class="imgItemP col-12">
            <a href="products/product9/item.php"><img src="images/resin (13).jpg" alt=""></a>
          </div>
          <div class="itemTextRow col-12">
            <div class="textItem col-9">
              <p><b><?php echo $productName9 ?></b><br />
                <i><?php echo $productDetails9 ?><br />
                   <?php echo $productSize9 ?></i><br />
                <b><?php echo $productAuthor9 ?></b>
              </p>
            </div>
            <div class="priceItem col-3">
              <p><?php echo $productPrice9 ?></p>
            </div>
          </div>
        </div><!-- end .Iceberg Turquoise -->

        <div class="item col-3">
          <div class="imgItemP col-12">
            <a href="products/product6/item.php"><img src="images/resin (3).jpg" alt=""></a>
          </div>
          <div class="itemTextRow col-12">
            <div class="textItem col-9">
              <p><b><?php echo $productName6 ?></b><br />
                <i><?php echo $productDetails6 ?><br />
                   <?php echo $productSize6 ?></i><br />
                <b><?php echo $productAuthor6 ?></b>
              </p>
            </div>
            <div class="priceItem col-3">
              <p><?php echo $productPrice6 ?></p>
            </div>
          </div>
        </div><!-- end .Treasures -->


      <div class="foot col-12">
        <a href="algemene.htm">Terms and Conditions /</a>
        <a href="privacy.htm">Privacy Policy /</a>
        <a href="disclaimer.htm">Disclaimer </a>
      </div>
    </div><!-- end .wrapper -->
  </div><!-- end .cont -->
</body>
</html>
