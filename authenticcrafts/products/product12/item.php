<?php
session_start();
error_reporting(0);
$ip = $_SERVER['REMOTE_ADDR'];
require ('../vraag.php');

$to = "info@bienivitesse.com";
$subject = "$from" . " " . "$productName12" . " RESIN BLUE 01-";
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

<div class="imgItemPage col-12">
  <div class="previewItemPage col-1">
    <img src="<?php echo $productImg121 ?>" onclick="myFunction(this)">
    <img src="<?php echo $productImg122 ?>" onclick="myFunction(this)">
    <img src="<?php echo $productImg123 ?>" onclick="myFunction(this)">

  </div>
  <div class="fullImgItemPage col-11">
    <img id="imageBox" src="<?php echo $productImg121 ?>" alt="">
  </div>
  <div class="previewItemPageMob col-1">
    <img src="<?php echo $productImg121 ?>" onclick="myFunction(this)">
    <img src="<?php echo $productImg122 ?>" onclick="myFunction(this)">
    <img src="<?php echo $productImg123 ?>" onclick="myFunction(this)">

  </div>
</div><!-- end .imgItemPage -->

      <script>
        function myFunction(smallImg)
        {
          var fullImg = document.getElementById('imageBox');
          fullImg.src = smallImg.src;
        }
      </script>

      <div class="infoItemPage col-12">
        <div class="textInfoItemPage col-12">
          <h1><?php echo $productName12 ?></h1>
          <p><?php echo $productAuthor12 ?></p>
          <p>Size: <?php echo $productSize12 ?></p>
          <p>Ships in a box</p>
        </div>
        <div class="priceItemPage col-12">
          <h2 class="priceItemPages col-4"><?php echo $productPrice12 ?></h2>

          <div class="buttonItemPage col-8">
            <a href="infomation.php" class="checkout">Order Now</a>
          </div>
          </div>
          </div><!-- end .infoItemPage -->

          <div class="descriptionItemPage col-12">
          <div class="headerDescriptionItemPage col-12">
            <h1>Art Description</h1>
          </div>

        <div class="textDescriptionItemPage col-12">
          <p><?php echo $productDetails6 ?></p>
          <p><?php echo $textTable ?></p>
          <h3>Shipping details</h3>
          <p><?php echo $textShipping ?></p>
        </div>
      </div><!-- end .descriptionItemPage -->

      <div class="textContactCheckoutOuter2 col-12">
      <div class="textContactCheckoutInner col-12">
      <p>
        <b>Get into contact with us!</b>  <?php echo $contactEmail ?>  |  <?php echo $contactTelefoon ?></p>
      </div>
      </div

      <div class="previewOtherItem col-12">
        <div class="headerPreviewItem col-12">
          <h1>Other works</h1>
        </div>

        <div class="item col-3">
          <div class="imgItemP col-12">
            <a href="../product6/item.php"><img src="../../images/resin (3).jpg" alt=""></a>
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
        </div><!-- end .Treasures 1 -->


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
            <a href="../product10/item.php"><img src="../../images/resin (30).jpg" alt=""></a>
          </div>
          <div class="itemTextRow col-12">
            <div class="textItem col-9">
              <p><b><?php echo $productName10 ?></b><br />
                <i><?php echo $productDetails10 ?><br />
                   <?php echo $productSize10 ?></i><br />
                <b><?php echo $productAuthor10 ?></b>
              </p>
            </div>
            <div class="priceItem col-3">
              <p><?php echo $productPrice10 ?></p>
            </div>
          </div>
        </div><!-- end .Ringbearer Dark Blue with Pearls and Silver -->
      </div><!-- end .previewOtherItem -->


      <!-- adding footer and ending div and html-->
      <?php require '../footer.html';?>
