<?php
session_start();
error_reporting(0);
$ip = $_SERVER['REMOTE_ADDR'];
require ('products/vraag.php');
require ('header.html');

$to = "info@bienivitesse.com";
$subject = "$from" . " " . "PRODUCT RESIN BLUE 01-";

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
?>
<div class="row">
    <div class="itemV col-6">
      <div class="imgItem col-12">
        <a href="products/product3/item.php"><img src="images/resin (5).jpg" alt=""></a>
      </div>
      <div class="itemTextRow col-12">
        <div class="textItem col-10">
          <p><b><?php echo $productName3 ?></b><br />
            <i><?php echo $productDetails3 ?><br />
              <?php echo $productSize3 ?></i><br />
              <b><?php echo $productAuthor3 ?></b>
            </p>
          </div>
          <div class="priceItem col-2">
            <p><?php echo $productPrice3 ?></p>
          </div>
        </div>
      </div><!-- end .item3 -->

      <div class="itemV col-6">
        <div class="imgItem col-12">
          <a href="products/product5/item.php"><img src="images/resin (25).jpg" alt=""></a>
        </div>
        <div class="itemTextRow col-12">
          <div class="textItem col-10">
            <p><b><?php echo $productName5 ?></b><br />
              <i><?php echo $productDetails5 ?><br />
                <?php echo $productSize5 ?></i><br />
                <b><?php echo $productAuthor5 ?></b>
              </p>
            </div>
            <div class="priceItem col-2">
              <p><?php echo $productPrice5 ?></p>
            </div>
          </div>
        </div><!-- end .item5 -->
</div><!-- end .row 2 -->

 <div class="row">
     <div class="itemV col-6">
       <div class="imgItem col-12">
         <a href="products/product4/item.php"><img src="images/resin (32).jpg" alt=""></a>
       </div>
       <div class="itemTextRow col-12">
         <div class="textItem col-10">
           <p><b><?php echo $productName4 ?></b><br />
             <i><?php echo $productDetails4 ?><br />
               <?php echo $productSize4 ?></i><br />
               <b><?php echo $productAuthor4 ?></b>
             </p>
           </div>
           <div class="priceItem col-2">
             <p><?php echo $productPrice4 ?></p>
           </div>
         </div>
       </div><!-- end .item4 -->

       <div class="itemV col-6">
         <div class="imgItem col-12">
           <a href="products/product11/item.php"><img src="images/resin (36).jpg" alt=""></a>
         </div>
         <div class="itemTextRow col-12">
           <div class="textItem col-10">
             <p><b><?php echo $productName11 ?></b><br />
               <i><?php echo $productDetails11 ?><br />
                 <?php echo $productSize11 ?></i><br />
                 <b><?php echo $productAuthor11 ?></b>
               </p>
             </div>
             <div class="priceItem col-2">
               <p><?php echo $productPrice11 ?></p>
             </div>
           </div>
         </div><!-- end .item11 -->
 </div><!-- end .row 1 -->

 <div class="row">
   <div class="itemV col-6">
     <div class="imgItem col-12">
       <a href="products/product12/item.php"><img src="images/resin (41).jpg" alt=""></a>
     </div>
     <div class="itemTextRow col-12">
       <div class="textItem col-10">
         <p><b><?php echo $productName12 ?></b><br />
           <i><?php echo $productDetails12 ?><br />
             <?php echo $productSize12 ?></i><br />
             <b><?php echo $productAuthor12 ?></b>
           </p>
         </div>
         <div class="priceItem col-2">
           <p><?php echo $productPrice12 ?></p>
         </div>
       </div>
     </div><!-- end .item1 -->

   <div class="itemV col-6">
     <div class="imgItem col-12">
       <a href="products/product6/item.php"><img src="images/resin (3).jpg" alt=""></a>
     </div>
     <div class="itemTextRow col-12">
       <div class="textItem col-10">
         <p><b><?php echo $productName6 ?></b><br />
           <i><?php echo $productDetails6 ?><br />
             <?php echo $productSize6 ?></i><br />
             <b><?php echo $productAuthor6 ?></b>
           </p>
         </div>
         <div class="priceItem col-2">
           <p><?php echo $productPrice6 ?></p>
         </div>
       </div>
     </div><!-- end .item6 -->
 </div><!-- end .row 3 -->

 <div class="row">
   <div class="itemV col-6">
     <div class="imgItem col-12">
       <a href="products/product1/item.php"><img src="images/resin (18).jpg" alt=""></a>
     </div>
     <div class="itemTextRow col-12">
       <div class="textItem col-10">
         <p><b><?php echo $productName1 ?></b><br />
           <i><?php echo $productDetails1 ?><br />
             <?php echo $productSize1 ?></i><br />
             <b><?php echo $productAuthor1 ?></b>
           </p>
         </div>
         <div class="priceItem col-2">
           <p><?php echo $productPrice1 ?></p>
         </div>
       </div>
     </div><!-- end .item1 -->

     <div class="itemV col-6">
       <div class="imgItem col-12">
         <a href="products/product8/item.php"><img src="images/resin (10).jpg" alt=""></a>
       </div>
       <div class="itemTextRow col-12">
         <div class="textItem col-10">
           <p><b><?php echo $productName8 ?></b><br />
             <i><?php echo $productDetails8 ?><br />
               <?php echo $productSize8 ?></i><br />
               <b><?php echo $productAuthor8 ?></b>
             </p>
           </div>
           <div class="priceItem col-2">
             <p><?php echo $productPrice8 ?></p>
           </div>
         </div>
       </div><!-- end .item8 -->
 </div>

 <div class="row">
   <div class="itemV col-6">
     <div class="imgItem col-12">
       <a href="products/product10/item.php"><img src="images/resin (30).jpg" alt=""></a>
     </div>
     <div class="itemTextRow col-12">
       <div class="textItem col-10">
         <p><b><?php echo $productName10 ?></b><br />
           <i><?php echo $productDetails10 ?><br />
             <?php echo $productSize10 ?></i><br />
             <b><?php echo $productAuthor10 ?></b>
           </p>
         </div>
         <div class="priceItem col-2">
           <p><?php echo $productPrice10 ?></p>
         </div>
       </div>
     </div><!-- end .item10 -->

     <div class="itemV col-6">
       <div class="imgItem col-12">
         <a href="products/product2/item.php"><img src="images/resin (20).jpg" alt=""></a>
       </div>
       <div class="itemTextRow col-12">
         <div class="textItem col-10">
           <p><b><?php echo $productName2 ?></b><br />
             <i><?php echo $productDetails2 ?><br />
               <?php echo $productSize2 ?></i><br />
               <b><?php echo $productAuthor2 ?></b>
             </p>
           </div>
           <div class="priceItem col-2">
             <p><?php echo $productPrice2 ?></p>
           </div>
         </div>
       </div><!-- end .item2 -->
 </div>

<div class="row">
  <div class="itemV col-6">
    <div class="imgItem col-12">
      <a href="products/product7/item.php"><img src="images/resin (24).jpg" alt=""></a>
    </div>
    <div class="itemTextRow col-12">
      <div class="textItem col-10">
        <p><b><?php echo $productName7 ?></b><br />
          <i><?php echo $productDetails7 ?><br />
            <?php echo $productSize7 ?></i><br />
            <b><?php echo $productAuthor7 ?></b>
          </p>
        </div>
        <div class="priceItem col-2">
          <p><?php echo $productPrice7 ?></p>
        </div>
      </div>
    </div><!-- end .item7 -->

      <div class="itemV col-6">
        <div class="imgItem col-12">
          <a href="products/product9/item.php"><img src="images/resin (13).jpg" alt=""></a>
        </div>
        <div class="itemTextRow col-12">
          <div class="textItem col-10">
            <p><b><?php echo $productName9 ?></b><br />
              <i><?php echo $productDetails9 ?><br />
                <?php echo $productSize9 ?></i><br />
                <b><?php echo $productAuthor9 ?></b>
              </p>
            </div>
            <div class="priceItem col-2">
              <p><?php echo $productPrice9 ?></p>
            </div>
          </div>
        </div><!-- end .item9 -->
</div>
                      <div class="foot col-12">
                        <a href="algemene.htm">Terms and Conditions /</a>
                        <a href="privacy.htm">Privacy Policy /</a>
                        <a href="disclaimer.htm">Disclaimer </a>
                      </div>
                    </div><!-- end .wrapper -->
                  </div><!-- end .cont -->
                </body>
                </html>
