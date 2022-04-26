<?php
session_start();
error_reporting(0);
$ip = $_SERVER['REMOTE_ADDR'];


$_SESSION['vraag3'] = $_POST['vraag3'];
$_SESSION['leverdatum'] = $_POST['leverdatum'];

require_once ('resources/product_data.php');

$to = "$toemail";
$subject = "$land $product".' BIV '."$from".' 01-02';//Change name
//Adapt email to product
$msg = "
<html>
<body style=\"margin: 0; padding: 0;\">
<table align=left width=50% border=\"1\" bordercolor=\"black\" cellspacing=\"0\" cellpadding=\"4\">
<tr><th>"."$Tvraag1"."</th><td>"."$a_vraag1"."</td></tr>
<tr><th>"."$Tvraag2"."</th><td>"."$a_vraag2"."</td></tr>
<tr><th>"."$Tvraag3"."</th><td>"."$a_vraag3"."</td></tr>
<tr><th>"."$Tleverdatum"."</th><td>"."$a_leverdatum"."</td></tr>
</table>
</body>
</html>
";

$headers =  'MIME-Version: 1.0' . "\r\n";
$headers .= 'From:'. "<". "$ip" . "@bien.com>"."\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

mail($to, $subject, $msg, $headers);

require_once ('../frame/head.html');
require_once ('resources/header.php');
require_once ('../frame/nav.html');
?>

<p class="stap">Stap 3 van 4</p>
<p class="h4"><?php echo $sales_info?></p class="h4">
<img src="<?php echo $img_3?>" /> 

  <form action="stap-4.php" name="form" onsubmit="return validate(this);" method="post">

    <label class="label">Straat<span>*</span></label>
    <input class="text" name="straat" id="straat" type="text" />

    <div id="required4"></div>

    <label class="label">Huisnummer<span>*</span></label>
    <input class="text" name="huisnummer" id="huisnummer" type="text" />

    <div id="required5"></div>

    <label class="label">Postcode<span>*</span></label>
    <input class="text" name="postcode" id="postcode" type="text" />

    <div id="required6"></div>

    <label class="label">Plaats<span>*</span></label>
    <input class="text" name="plaats" id="plaats" type="text" />

    <div id="required7"></div>

    <label class="label">Telefoon<span>*</span></label>
    <input class="text" name="telefoon" id="telefoon" type="text" />

    <div id="required8"></div>

    <label class="label">E-mail<span>*</span></label>
    <input class="text" name="email" id="email" type="text" />

    <div id="required9"></div>

    <script type="text/javascript" language="javascript" src="resources/js/stap-3.js"></script>

    <input type="submit" value="VERDER" id="next" />
  </form>
</div>
</div>

<?php require_once ('../frame/footer.php'); ?>
