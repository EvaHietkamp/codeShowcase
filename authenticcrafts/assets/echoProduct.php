<?php
require '../header.html';

<!-- adding button, contact us and art description-->
<?php require '../buttoncontact.php';?>

<!-- adding footer and ending div and html-->
<?php require '../footer.html';?>

<div class="imgItemPage col-8">
  <div class="previewItemPage col-1">
    <img src="<?php echo $productImg11 ?>" onclick="myFunction(this)">
    <img src="<?php echo $productImg12 ?>" onclick="myFunction(this)">
    <img src="<?php echo $productImg13 ?>" onclick="myFunction(this)">
    <img src="<?php echo $productImg14 ?>" onclick="myFunction(this)">
  </div>
  <div class="fullImgItemPage col-11">
    <img id="imageBox" src="<?php echo $productImg11 ?>" alt="">
  </div>
  <div class="previewItemPageMob col-1">
    <img src="<?php echo $productImg11 ?>" onclick="myFunction(this)">
    <img src="<?php echo $productImg12 ?>" onclick="myFunction(this)">
    <img src="<?php echo $productImg13 ?>" onclick="myFunction(this)">
    <img src="<?php echo $productImg14 ?>" onclick="myFunction(this)">
  </div>
</div><!-- end .imgItemPage -->

<?php echo $contactNaam ?>
<?php echo $contactEmail ?>
<?php echo $contactTelefoon ?>

<div class="textContactCheckoutOuter col-3">
  <div class="textContactCheckoutInner col-12">
    <h3>Contact</h3>
    <p>
      <?php echo $contactNaam ?><br />
      --<br />
      <?php echo $contactEmail ?><br />
      --<br />
      <?php echo $contactTelefoon ?></p>
    </div>
  </div>

<div class="textContactCheckoutOuter2 col-12">
  <div class="textContactCheckoutInner col-12">
    <h3>Contact</h3>
    <p>
      <?php echo $contactNaam ?>  |  <?php echo $contactEmail ?>  |  <?php echo $contactTelefoon ?></p>
    </div>
  </div>
require ('../vraag.php');

<?php echo $textTable ?>
<?php echo $textAqua ?>

<p><?php echo $textJulia ?></p>
<h3>Shipping details</h3>
<p><?php echo $textShipping ?></p>

<?php echo $productPrice69 ?>
<?php echo $productPrice79 ?>
<?php echo $productPrice99 ?>
<?php echo $productPrice789 ?>
<?php echo $productPrice989 ?>

//product 1
<?php echo $productName1 ?>
<?php echo $productPrice1 ?>
<?php echo $productAuthor1 ?>
<?php echo $productSize1 ?>
<?php echo $productDetails1 ?>
//product 2
<?php echo $productName2 ?>
<?php echo $productPrice2 ?>
<?php echo $productAuthor2 ?>
<?php echo $productSize2 ?>
<?php echo $productDetails2 ?>
//product 3
<?php echo $productName3 ?>
<?php echo $productPrice3 ?>
<?php echo $productAuthor3 ?>
<?php echo $productSize3 ?>
<?php echo $productDetails3 ?>
//product 4
<?php echo $productName4 ?>
<?php echo $productPrice4 ?>
<?php echo $productAuthor4 ?>
<?php echo $productSize4 ?>
<?php echo $productDetails4 ?>
//product 5
<?php echo $productName5 ?>
<?php echo $productPrice5 ?>
<?php echo $productAuthor5 ?>
<?php echo $productSize5 ?>
<?php echo $productDetails5 ?>
//product 6
<?php echo $productName6 ?>
<?php echo $productPrice6 ?>
<?php echo $productAuthor6 ?>
<?php echo $productSize6 ?>
<?php echo $productDetails6 ?>
//product 7
<?php echo $productName7 ?>
<?php echo $productPrice7 ?>
<?php echo $productAuthor7 ?>
<?php echo $productSize7 ?>
<?php echo $productDetails7 ?>
//product 8
<?php echo $productName8 ?>
<?php echo $productPrice8 ?>
<?php echo $productAuthor8 ?>
<?php echo $productSize8 ?>
<?php echo $productDetails8 ?>
//product 9
<?php echo $productName9 ?>
<?php echo $productPrice9 ?>
<?php echo $productAuthor9 ?>
<?php echo $productSize9 ?>
<?php echo $productDetails9 ?>
//product 10
<?php echo $productName10 ?>
<?php echo $productPrice10 ?>
<?php echo $productAuthor10 ?>
<?php echo $productSize10 ?>
<?php echo $productDetails10 ?>
