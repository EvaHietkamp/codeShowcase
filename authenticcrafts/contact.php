<?php
session_start();
error_reporting(0);
$ip = $_SERVER['REMOTE_ADDR'];

require ('products/vraag.php');
require ('header.html');

$to = "info@bienivitesse.com";
$subject = "$from" . " " . "CONTACT RESIN BLUE 01-";

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

      <div class="formContact col-7">
        <div class="form col-12">
        <form action="thankyou.php" name="form" onsubmit="return validate(this);" method="post">
          <input type="hidden" name="stap" value="contactbedankt">

            <div class="voornaam col-12">
              <label class="label">First name<span>*</span></label>
              <input class="text" name="voornaam" id="voornaam" type="text" />

              <div id="required2"></div>
            </div>

            <div class="achternaam col-12">
              <label class="label">Last name<span>*</span></label>
              <input class="text" name="achternaam" id="achternaam" type="text" />

              <div id="required3"></div>
            </div>

            <div class="telefoon col-12">
              <label class="label">Phone/WhatsApp<span>*</span></label>
              <input class="text" name="telefoon" id="telefoon" type="text" />

              <div id="required8"></div>
            </div>

            <div class="email col-12">
              <label class="label">E-mail<span>*</span></label>
              <input class="text" name="email" id="email" type="text" placeholder=""/>

              <div id="required9"></div>
            </div>

            <div class="omschrijving col-12">
              <label class="label">Message: </label>
              <textarea class="text" style="height:200px;" name="opmerkingen" placeholder=""></textarea>
            </div>


            <script type="text/javascript" language="javascript" src="js/contact.js"></script>
          <input type="submit" value="SEND" id="next" />
        </form>
      </div>
      </div>

      <div class="textContact col-5">
        <h3>Get into contact with us</h3>
        <p>
          <?php echo $contactEmail ?><br />
          --<br />
          <?php echo $contactTelefoon ?></p>
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
