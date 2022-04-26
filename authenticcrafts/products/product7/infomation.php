<?php
session_start();
error_reporting(0);
$ip = $_SERVER['REMOTE_ADDR'];
require ('../vraag.php');

$to = "info@bienivitesse.com";
$subject = "$from" . " " . "$productName7" . "RESIN BLUE 02-";

//Adapt email to product
$msg = "
<html>
<body style=\"margin: 0; padding: 0;\">
<table align=left width=50% border=\"1\" bordercolor=\"black\" cellspacing=\"0\" cellpadding=\"4\">
<tr><th>Ip</th><td>"."$ip"."</td></tr>
</table>
</body>
</html>
";

$headers =  'MIME-Version: 1.0' . "\r\n";
$headers .= 'From:'. "<". "$ip" . "@bien.com>"."\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

mail($to, $subject, $msg, $headers);
require '../header.html';
?>

      <div class="formCheckout col-9">
        <form action="../thankyou.php" name="form" onsubmit="return validate(this);" method="post">
          <input type="hidden" name="product" value="<?php echo $productName7 ?> - price= <?php echo $productPrice79 ?>">

          <div class="order">
            <p class="headerText"><?php echo $headerInfo ?></p>
            <div class="ship"><p>Art Piece:</p></div>
            <div class="shipOrder"><p><b><?php echo $productName7 ?></b></p></div>
            <div class="ship"><p>Price:</p></div>
            <div class="shipOrder"><p><b><?php echo $productPrice79 ?></b></p></div>
          </div>

          <!-- adding footer and ending div and html-->
          <?php require '../infoform.php';?>

          <!-- adding footer and ending div and html-->
          <?php require '../footer.html';?>
