<?php
session_start();
error_reporting(0);
$ip = $_SERVER['REMOTE_ADDR'];
require_once ('vraag.php');

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

       <div class="videoItemPage col-12">
       <video width="100%;" height="100%;" controls autoplay loop muted>
       <source src="../images/Lair For Looping.mp4" type="video/mp4">
       </video>
       </div><!-- end .imgItemPage -->

      <div class="col-2">
        <p></p>
      </div>

      <div class="form col-8">
        <h3 class="enquire">Enquire now about The Ringbearer's Lair</h3>
        <p class="stap">Step 1 of 3</p>


        <form action="stap-2.php" name="form" onsubmit="return validate(this);" method="post">

          <label class="label"><?php echo $Tvraag1 ?><span>*</span></label>
          <label class="container"><input id="vraag1" class="radio" type="radio" name="vraag1" value="<?php echo $valueA1 ?>" /> <p class="p"><?php echo $valueA1 ?></p><span class="checkmark"></span></label>
          <label class="container"><input id="vraag1" class="radio" type="radio" name="vraag1" value="<?php echo $valueA2 ?>" /> <p class="p"><?php echo $valueA2 ?></p><span class="checkmark"></span></label>
          <label class="container"><input id="vraag1" class="radio" type="radio" name="vraag1" value="<?php echo $valueA3 ?>" /> <p class="p"><?php echo $valueA3 ?></p><span class="checkmark"></span></label>
          <label class="container"><input id="vraag1" class="radio" type="radio" name="vraag1" value="<?php echo $valueA4 ?>" /> <p class="p"><?php echo $valueA4 ?></p><span class="checkmark"></span></label>

          <div id="required"></div>

          <label class="label"><?php echo $Tvraag2 ?><span>*</span></label>
          <label class="container"><input id="vraag2" class="radio" type="radio" name="vraag2" value="<?php echo $valueB1 ?>" /> <p class="p"><?php echo $valueB1 ?></p><span class="checkmark"></span></label>
          <label class="container"><input id="vraag2" class="radio" type="radio" name="vraag2" value="<?php echo $valueB2 ?>" /> <p class="p"><?php echo $valueB2 ?></p><span class="checkmark"></span></label>
          <label class="container"><input id="vraag2" class="radio" type="radio" name="vraag2" value="<?php echo $valueB3 ?>" /> <p class="p"><?php echo $valueB3 ?></p><span class="checkmark"></span></label>
          <label class="container"><input id="vraag2" class="radio" type="radio" name="vraag2" value="<?php echo $valueB4 ?>" /> <p class="p"><?php echo $valueB4 ?></p><span class="checkmark"></span></label>

          <div id="required2"></div>

          <script type="text/javascript" language="javascript" src="js/stap-1.js"></script>
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
