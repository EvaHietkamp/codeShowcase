<?php
session_start();
error_reporting(0);
$ip = $_SERVER['REMOTE_ADDR'];
require ('../vraag.php');

$to = "info@bienivitesse.com";
$subject = "$from" . " " . "$productName1" . " RESIN BLUE 01-";

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
          <img src="<?php echo $productImg11 ?>" onclick="myFunction(this)">
          <img src="<?php echo $productImg12 ?>" onclick="myFunction(this)">
          <img src="<?php echo $productImg13 ?>" onclick="myFunction(this)">
        </div>
        <div class="fullImgItemPage col-11">
          <img id="imageBox" src="<?php echo $productImg11 ?>" alt="">
        </div>
        <div class="previewItemPageMob col-1">
          <img src="<?php echo $productImg11 ?>" onclick="myFunction(this)">
          <img src="<?php echo $productImg12 ?>" onclick="myFunction(this)">
          <img src="<?php echo $productImg13 ?>" onclick="myFunction(this)">
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
          <h1><?php echo $productName1 ?></h1>
          <p><?php echo $productAuthor1 ?></p>
          <p>Size: <?php echo $productSize1 ?></p>
          <p>Ships in a box</p>
        </div>
        <div class="priceItemPage col-12">
          <h2 class="priceItemPages col-4"><?php echo $productPrice1 ?></h2>

          <!-- adding button, contact us and art description-->
          <?php require '../buttoncontact.php';?>

        <div class="textDescriptionItemPage col-12">
          <p><?php echo $productDetails1 ?></p>
          <p><?php echo $textJulia ?></p>
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

        <div class="item col-3">
          <div class="imgItemP col-12">
            <a href="../product9/item.php"><img src="../../images/resin (13).jpg" alt=""></a>
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
        </div><!-- end .Treasures -->

        <div class="item col-3">
          <div class="imgItemP col-12">
            <a href="../product5/item.php"><img src="../../images/resin (25).jpg" alt=""></a>
          </div>
          <div class="itemTextRow col-12">
            <div class="textItem col-9">
              <p><b><?php echo $productName5 ?></b><br />
                <i><?php echo $productDetails5 ?><br />
                   <?php echo $productSize5 ?></i><br />
                <b><?php echo $productAuthor5 ?></b>
              </p>
            </div>
            <div class="priceItem col-3">
              <p><?php echo $productPrice5 ?></p>
            </div>
          </div>
        </div><!-- end .Ringbearer Turquoise -->
      </div><!-- end .previewOtherItem -->

      <!-- adding footer and ending div and html-->
      <?php require '../footer.html';?>
