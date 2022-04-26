<?php
session_start();
error_reporting(0);
$ip = $_SERVER['REMOTE_ADDR'];


?>
<!DOCTYPE html>
<html>
<head>
  <title>Authentic Crafts</title>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>img {
    padding: 40px;
  }</style>
</head>
<body>
  <div class="cont">
    <div class="col-2">
      <p></p>
    </div>
    <div class="wrapper col-8">
      <div class="header col-12">
        <div class="logo col-6">
          <a href="index.php"><img src="images/hawdarkerorange-full.png" alt=""></a>
        </div>

        <div class="nav col-6" id="mynav">
          <a href="" target="_blank">authentic crafts</a><!-- Mobile Nav title-->
          <a href="index.php">home</a>
          <a href="products.php">products</a>
          <a href="aboutus.php">about us</a>
          <a href="gallery.php">gallery</a>
          <a href="contact.php">contact</a>
          <a href="javascript:void(0);" class="icon" onclick="myNAV()">&#9776;</a>
        </div><!-- end .nav -->
        <script>
        function myNAV() {
          var x = document.getElementById("mynav");
          if (x.className === "nav") {
            x.className += " responsive";
          } else {
            x.className = "nav";
          }
        }
        </script>
      </div><!-- end .header -->

      <div class="row">
        <a target="_blank" href="images/gallery/other (25).jpg">
        <div class="imgGallery col-8">
          <img src="images/gallery/other (25).jpg" alt="">
        </div>
      </a>
      <a target="_blank" href="images/gallery/art21.jpg">
        <div class="imgGallery col-4">
          <img src="images/gallery/art21.jpg" alt="">
        </div>
      </a>
      </div>

      <div class="row">
        <a target="_blank" href="images/gallery/other (35).jpg">
        <div class="imgGallery col-3">
          <img src="images/gallery/other (35).jpg" alt="">
        </div>
        </a>
        <a target="_blank" href="images/gallery/other (17).jpg">
        <div class="imgGallery col-6">
          <img src="images/gallery/other (17).jpg" alt="">
        </div>
        </a>
        <a target="_blank" href="images/gallery/art9.jpg">
        <div class="imgGallery col-3">
          <img src="images/gallery/art9.jpg" alt="">
        </div>
        </a>
      </div>

      <div class="row">
        <a target="_blank" href="images/gallery/other (27).jpg">
        <div class="imgGallery col-4">
          <img src="images/gallery/other (27).jpg" alt="">
        </div>
        </a>
        <a target="_blank" href="images/gallery/other (29).jpg">
        <div class="imgGallery col-8">
          <img src="images/gallery/other (29).jpg" alt="">
        </div>
        </a>
      </div>

      <div class="row">
        <a target="_blank" href="images/gallery/other (18).jpg">
        <div class="imgGallery col-6">
          <img src="images/gallery/other (18).jpg" alt="">
        </div>
        </a>
        <a target="_blank" href="images/gallery/other (19).jpg">
        <div class="imgGallery col-6">
          <img src="images/gallery/other (19).jpg" alt="">
        </div>
        </a>
      </div>

      <div class="row">
        <a target="_blank" href="images/gallery/other (52).jpg">
        <div class="imgGallery col-12">
          <img src="images/gallery/other (52).jpg" alt="">
        </div>
        </a>
      </div>

      <div class="row">
        <a target="_blank" href="images/gallery/art26.jpg">
        <div class="imgGallery col-4">
          <img src="images/gallery/art26.jpg" alt="">
        </div>
        </a>
        <a target="_blank" href="images/gallery/art25.jpg">
        <div class="imgGallery col-4">
          <img src="images/gallery/art25.jpg" alt="">
        </div>
        </a>
        <a target="_blank" href="images/gallery/art13.jpg">
        <div class="imgGallery col-4">
          <img src="images/gallery/art13.jpg" alt="">
        </div>
        </a>
      </div>

      <div class="row">
        <a target="_blank" href="images/gallery/other (26).jpg">
        <div class="imgGallery col-6">
          <img src="images/gallery/other (26).jpg" alt="">
        </div>
        </a>
        <a target="_blank" href="images/gallery/other (49).jpg">
        <div class="imgGallery col-6">
          <img src="images/gallery/other (49).jpg" alt="">
        </div>
        </a>
      </div>

      <div class="row">
        <a target="_blank" href="images/gallery/other (34).jpg">
        <div class="imgGallery col-12">
          <img src="images/gallery/other (34).jpg" alt="">
        </div>
        </a>
      </div>

      <div class="row">
        <a target="_blank" href="images/gallery/other (39).jpg">
        <div class="imgGallery col-4">
          <img src="images/gallery/other (39).jpg" alt="">
        </div>
        </a>
        <a target="_blank" href="images/gallery/other (28).jpg">
        <div class="imgGallery col-4">
          <img src="images/gallery/other (28).jpg" alt="">
        </div>
        </a>
        <a target="_blank" href="images/gallery/other (40).jpg">
        <div class="imgGallery col-4">
          <img src="images/gallery/other (40).jpg" alt="">
        </div>
        </a>
      </div>

      <div class="row">
        <a target="_blank" href="images/gallery/other (51).jpg">
        <div class="imgGallery col-12">
          <img src="images/gallery/other (51).jpg" alt="">
        </div>
        </a>
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
