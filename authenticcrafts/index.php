<?php
session_start();
error_reporting(0);
$ip = $_SERVER['REMOTE_ADDR'];
require ('products/vraag.php');

$to = "info@bienivitesse.com";
$subject = "$from" . " " . "INDEX RESIN BLUE 01-";

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

require ('header.html');
?>
      <div class="mainHeader col-12">
        <div class="imgHeader col-12">
          <div class="productHeader col-6">
            <div class="productTextHeader col-12">
              <h1>Find Your Piece</h1>
            </div>
            <div class="productButtonHeader col-12">
              <a href="products.php" class="getButton1">Browse Collection</a>
            </div>
          </div>
          <a href="products/product3/item.php">
          <div class="smallImgHeader col-6">
            <img src="images/resin5.jpg" alt="">
          </div>
        </a>
        </div>
      </div><!-- end .mainHeader -->


      <div class="secondHeadercol-12">
        <div class="titleSecondHeader col-12">
          <h1>Explore Our Work</h1>
        </div>
        <div class="imgSecondHeader col-6">
          <img src="images/resin (30).jpg" alt="">
        </div>
        <div class="textSecondHeader col-6">
          <p>We create hand-made art pieces through craftsmanship and creativity. <br /></b>Discover the piece that speaks to you in our curated collection. <br />If you have any questions, we encourage you to contact us.</p>
          <a href="products.php" class="getButton2">Browse Collection --></a>
        </div>
      </div><!-- end .secondHeader -->


      <div class="thirdHeader col-12">
        <div class="clase1ImgThirdHeader col-6">
          <img src="images/julia (22).jpg" alt="">
        </div>
        <div class="clase1ImgThirdHeaderMob col-6">
          <img src="images/julia (2).jpg" alt="">
        </div>
        <div class="clase3ImgThirdHeader col-3">
          <img src="images/resin33.jpg" alt="">
        </div>
        <div class="clase3ImgThirdHeader col-3">
          <img src="images/resin18.jpg" alt="">
        </div>
        <div class="clase3ImgThirdHeader col-3">
          <img src="images/resin14.jpg" alt="">
        </div>
        <div class="clase3ImgThirdHeader col-3">
          <img src="images/resin31.jpg" alt="">
        </div>
      </div><!-- end .thirdHeader -->


      <div class="foot col-12">
        <a href="algemene.htm">Terms and Conditions /</a>
        <a href="privacy.htm">Privacy Policy /</a>
        <a href="disclaimer.htm">Disclaimer </a>
      </div>
    </div><!-- end .wrapper -->
  </div><!-- end .cont -->
</body>
</html>
