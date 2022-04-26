<?php
session_start();
error_reporting(0);
$ip = $_SERVER['REMOTE_ADDR'];
require ('../vraag.php');

$to = "info@bienivitesse.com";
$subject = "$from" . " " . "$productName3" . " RESIN BLUE 01-";

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

<div class="videoItemPage col-12">
<video width="100%;" height="100%;" controls autoplay loop muted>
<source src="../../images/Lair For Looping.mp4" type="video/mp4">
</video>
</div><!-- end .imgItemPage -->


<div class="infoItemPage col-12">
  <div class="textInfoItemPage col-6">
    <h1><?php echo $productName3 ?></h1>
    <p><?php echo $productAuthor3 ?></p>
    <p>Size: <?php echo $productSize3 ?></p>
  </div>
  <div class="priceItemPage col-12">
    <h2 class="priceItemPages col-4"><?php echo $productPrice3 ?></h2>

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
      <p><?php echo $productDetails3 ?></p>
      <p><?php echo $textAqua ?></p>
      <h3>Shipping details</h3>
      <p><?php echo $textShipping ?></p>
    </div>
  </div><!-- end .descriptionItemPage -->

  <div class="imgJulia col-5">
   <img src="../../images/julia (3).jpg" />
  </div>

  <div class="itemVideo col-7">
    <h2>The Making Of The Ringbearer's Lair</h2>
    <iframe width="100%" height="330" src="https://www.youtube.com/embed/GRsPCxl9DK4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

  <div class="textContactCheckoutOuter3 col-3">
  <div class="textContactCheckoutInner col-12">
  <h3>Contact</h3>
  <p>
    <?php echo $contactEmail ?><br />
    --<br />
    <?php echo $contactTelefoon ?></p>
  </div>
  </div>

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
        <a href="../product7/item.php"><img src="../../images/resin (24).jpg" alt=""></a>
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

          </div><!-- end .previewOtherItem -->

          <!-- adding footer and ending div and html-->
          <?php require '../footer.html';?>
