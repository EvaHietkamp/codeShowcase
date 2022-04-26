<?php
session_start();
error_reporting(0);
$ip = $_SERVER['REMOTE_ADDR'];
require ('../vraag.php');

$to = "info@bienivitesse.com";
$subject = "$from" . " " . "$productName6" . " RESIN BLUE 01-";
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

<div class="imgItemPage col-8">
  <div class="previewItemPage col-1">
    <img src="<?php echo $productImg61 ?>" onclick="myFunction(this)">
    <img src="<?php echo $productImg62 ?>" onclick="myFunction(this)">
    <img src="<?php echo $productImg63 ?>" onclick="myFunction(this)">
    <img src="<?php echo $productImg64 ?>" onclick="myFunction(this)">
  </div>
  <div class="fullImgItemPage col-11">
    <img id="imageBox" src="<?php echo $productImg61 ?>" alt="">
  </div>
  <div class="previewItemPageMob col-1">
    <img src="<?php echo $productImg61 ?>" onclick="myFunction(this)">
    <img src="<?php echo $productImg62 ?>" onclick="myFunction(this)">
    <img src="<?php echo $productImg63 ?>" onclick="myFunction(this)">
    <img src="<?php echo $productImg64 ?>" onclick="myFunction(this)">
  </div>
</div><!-- end .imgItemPage -->

      <script>
        function myFunction(smallImg)
        {
          var fullImg = document.getElementById('imageBox');
          fullImg.src = smallImg.src;
        }
      </script>

      <div class="infoItemPage col-4">
        <div class="textInfoItemPage col-12">
          <h1><?php echo $productName6 ?></h1>
          <p><?php echo $productAuthor6 ?></p>
          <p>Size: <?php echo $productSize6 ?></p>
          <p>Ships in a box</p>
        </div>
        <div class="priceItemPage col-12">
          <h2 class="priceItemPages col-4"><?php echo $productPrice6 ?></h2>

          <!-- adding button, contact us and art description-->
          <?php require '../buttoncontact.php';?>

        <div class="textDescriptionItemPage col-12">
          <p><?php echo $productDetails6 ?></p>
          <p><?php echo $textTable ?></p>
          <h3>Shipping details</h3>
          <p><?php echo $textShipping ?></p>
        </div>
      </div><!-- end .descriptionItemPage -->

      <div class="previewOtherItem col-12">
        <div class="headerPreviewItem col-12">
          <h1>Other works</h1>
        </div>

        <div class="item col-3">
          <div class="imgItemP col-12">
            <a href="../product12/item.php"><img src="../../images/resin (41).jpg" alt=""></a>
          </div>
          <div class="itemTextRow col-12">
            <div class="textItem col-9">
              <p><b><?php echo $productName12 ?></b><br />
                <i><?php echo $productDetails12 ?><br />
                   <?php echo $productSize12 ?></i><br />
                <b><?php echo $productAuthor12 ?></b>
              </p>
            </div>
            <div class="priceItem col-3">
              <p><?php echo $productPrice12 ?></p>
            </div>
          </div>
        </div><!-- end .Casted Treasures 2 -->

        <div class="item col-3">
          <div class="imgItemP col-12">
            <a href="../product3/item.php"><img src="../../images/resin (5).jpg" alt=""></a>
          </div>
          <div class="itemTextRow col-12">
            <div class="textItem col-9">
              <p><b><?php echo $productName3 ?></b><br />
                <i><?php echo $productDetails3 ?><br />
                   <?php echo $productSize3 ?></i><br />
                <b><?php echo $productAuthor3 ?></b>
              </p>
            </div>
            <div class="priceItem col-3">
              <p><?php echo $productPrice3 ?></p>
            </div>
          </div>
        </div><!-- end .Lair -->

        <div class="item col-3">
          <div class="imgItemP col-12">
            <a href="../product11/item.php"><img src="../../images/resin (36).jpg" alt=""></a>
          </div>
          <div class="itemTextRow col-12">
            <div class="textItem col-9">
              <p><b><?php echo $productName11 ?></b><br />
                <i><?php echo $productDetails11 ?><br />
                   <?php echo $productSize11 ?></i><br />
                <b><?php echo $productAuthor11 ?></b>
              </p>
            </div>
            <div class="priceItem col-3">
              <p><?php echo $productPrice11 ?></p>
            </div>
          </div>
        </div><!-- end .Encased Medusa -->

        <div class="item col-3">
          <div class="imgItemP col-12">
            <a href="../product8/item.php"><img src="../../images/resin (10).jpg" alt=""></a>
          </div>
          <div class="itemTextRow col-12">
            <div class="textItem col-9">
              <p><b><?php echo $productName8 ?></b><br />
                <i><?php echo $productDetails8 ?><br />
                   <?php echo $productSize8 ?></i><br />
                <b><?php echo $productAuthor8 ?></b>
              </p>
            </div>
            <div class="priceItem col-3">
              <p><?php echo $productPrice8 ?></p>
            </div>
          </div>
        </div><!-- end .Iceberg Transparent Gold -->

      </div><!-- end .previewOtherItem -->


      <!-- adding footer and ending div and html-->
      <?php require '../footer.html';?>
