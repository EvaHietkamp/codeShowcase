<?php
session_start();
error_reporting(0);
$ip = $_SERVER['REMOTE_ADDR'];
require ('products/vraag.php');
require ('header.html');

$to = "info@bienivitesse.com";
$subject = "$from" . " " . "ABOUT US RESIN BLUE 01-";

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

<div class="textHeaderAbout col-12">
  <h1 >About us</h1>

  <div class="textAboutUsJ col-8">
    <h2>Julia Hietkamp</h2>

    <div class="imgAboutUsMob col-4">
      <img src="images/studio/julias (5).jpg" alt="">
    </div>


    <p>Julia has studied sculpting for over a decade, honing her skill and creativity at a variety of workshops, courses and schools all over the world. With a strong passion for improvement and pushing herself to new heights, she often works for hours on end, redoing a certain part over and over until it matches her exacting standards. Even then, if a piece she's been working on isn't good enough, she'd rather start again from scratch than continue working on it.</p>
    <p>That same focus on detail has translated perfectly into her work with resin, where combined with her sister's equally honed artistic talent, she now creates collaborative art pieces. Julia makes the resin sculptures, which Eva then elevates to an even higher level by carefully encasing them in clear resin, using small resin pieces as backdrop.</p>
  </div>

  <div class="imgAboutUs col-4">
    <img src="images/studio/julias (5).jpg" alt="">
  </div>

</div>

<div class="textHeaderAbout row">

  <div class="imgAboutUs col-4">
    <img src="images/studio/eva (11).jpg" alt="">
  </div>

  <div class="textAboutUsE col-8">
  <h2>Eva Hietkamp</h2>

  <div class="imgAboutUsMob col-4">
    <img src="images/studio/eva (11).jpg" alt="">
  </div>

    <p>Eva has been painting and drawing since a young age and has developed her skill under the tutelage of incredible artists and schools around the world. A versatile artist as well as a skilled one, she's managed to create stunning paintings even while traveling with her family for years. She's sold paintings to people all over the world, with her works now hanging in homes in countries such as the Netherlands, Germany, Spain, Switzerland, Egypt, Colombia and America.</p>
    <p>That extensive knowledge is now focused on working together with her sister to create highly technical and unique pieces of art that take full advantage of both their skills. Years of study have ensured that she know how to better bring out the details in Julia's works, while her patience and iron will means she doesn't rush her work, carefully layering the clear resin to create a cohesive, stunning artwork.</p>
  </div>

</div>

<div class="col-2">
  <p></p>
</div>

<div class="formAboutUs col-8">
  <form action="thanks.php" name="form" onsubmit="return validate(this);" method="post">

    <p class="headerText">Yes, I would like more information about Authentic Crafts</p>

    <div class="pay">
      <label class="label">You're looking for a sculpture:<span>*</span></label>
      <label class="container"><input id="vraag1" class="radio" type="radio" name="vraag1" value="For yourself" /> <p class="p">For yourself</p><span class="checkmark"></span></label>
      <label class="container"><input id="vraag1" class="radio" type="radio" name="vraag1" value="As a gift" /> <p class="p">As a gift</p><span class="checkmark"></span></label>
      <label class="container"><input id="vraag1" class="radio" type="radio" name="vraag1" value="As decoration for a business" /> <p class="p">As decoration for a business</p><span class="checkmark"></span></label>
      <label class="container"><input id="vraag1" class="radio" type="radio" name="vraag1" value="Other" /> <p class="p">Other</p><span class="checkmark"></span></label>

      <div id="required"></div>
    </div>

    <div class="pay">
      <label class="label">Properties that are important to you:<span>*</span></label>
      <label class="container"><input id="vraag2" class="radio" type="radio" name="vraag2" value="Handmade" /> <p class="p">Handmade</p><span class="checkmark"></span></label>
      <label class="container"><input id="vraag2" class="radio" type="radio" name="vraag2" value="Craftmanship" /> <p class="p">Craftmanship</p><span class="checkmark"></span></label>
      <label class="container"><input id="vraag2" class="radio" type="radio" name="vraag2" value="Uniqueness" /> <p class="p">Uniqueness</p><span class="checkmark"></span></label>
      <label class="container"><input id="vraag2" class="radio" type="radio" name="vraag2" value="Other" /> <p class="p">Other</p><span class="checkmark"></span></label>

      <div id="required4"></div>
    </div>

    <div class="pay">
      <label class="label">Presentation sculpture:<span>*</span></label>
      <label class="container"><input id="vraag3" class="radio" type="radio" name="vraag3" value="Inside" /> <p class="p">Inside</p><span class="checkmark"></span></label>
      <label class="container"><input id="vraag3" class="radio" type="radio" name="vraag3" value="Outside" /> <p class="p">Outside</p><span class="checkmark"></span></label>
      <label class="container"><input id="vraag3" class="radio" type="radio" name="vraag3" value="Other" /> <p class="p">Other</p><span class="checkmark"></span></label>

      <div id="required5"></div>
    </div>

    <div class="textParts col-6">
      <label class="label">First name<span>*</span></label>
      <input class="text" name="voornaam" id="voornaam" type="text" />

      <div id="required2"></div>
    </div>


    <div class="textParts col-6">
      <label class="label">Last name<span>*</span></label>
      <input class="text" name="achternaam" id="achternaam" type="text" />

      <div id="required3"></div>
    </div>

    <div class="textParts col-12">
      <label class="label">Phone<span>*</span></label>
      <input class="text" name="telefoon" id="telefoon" type="text" />

      <div id="required8"></div>
    </div>

    <div class="textParts col-12">
      <label class="label">E-mail<span>*</span></label>
      <input class="text" name="email" id="email" type="text" placeholder=""/>

      <div id="required9"></div>
    </div>

    <div class="omschrijving col-12">
      <label class="label">Message: </label>
      <textarea class="text" style="height:200px;" name="opmerkingen" placeholder=""></textarea>
    </div>

    <script type="text/javascript" language="javascript" src="js/about.js"></script>

    <input type="submit" value="SEND" id="next" />
  </form>
</div>

<div class="thirdAbout row">
  <div class="img2thirdAbout col-12">
    <img src="images/studio/julias (3).jpg" alt="">
  </div>
</div>

<div class="thirdAbout row">
  <div class="img2thirdAbout col-6">
    <img src="images/studio/julia (14).jpg" alt="">
  </div>
  <div class="img2thirdAbout col-6">
    <img src="images/studio/julia (13).jpg" alt="">
  </div>
</div>

<div class="thirdAbout row">
  <div class="img2thirdAbout col-12">
    <img src="images/studio/eva (7).jpg" alt="">
  </div>
</div>

<div class="thirdAbout row">
  <div class="img2thirdAbout col-3">
    <img src="images/studio/eva (3).jpg" alt="">
  </div>
  <div class="img2thirdAbout col-3">
    <img src="images/studio/eva (9).jpg" alt="">
  </div>
  <div class="img2thirdAbout col-3">
    <img src="images/studio/eva (13).jpg" alt="">
  </div>
  <div class="img2thirdAbout col-3">
    <img src="images/studio/studio (1).jpg" alt="">
  </div>
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
