<?php
session_start();
error_reporting(0);
$ip = $_SERVER['REMOTE_ADDR'];
require_once ('resources/product_data.php');
require_once ('../frame/head.html');
require_once ('resources/header.php');
require_once ('../frame/nav.html');


?>

<p class="stap">Stap 1 van 4</p>
<p class="h4"><?php echo $sales_info?></p class="h4">
<img src="<?php echo $img_1?>" /> 

  <form action="stap-2.php" name="form" onsubmit="return validate(this);" method="post">

    <label class="label"><?php echo $Tvraag1?><span>*</span></label>
    <?php
    foreach ($vraag1 as $value) {
      echo '<label class="container2" ><input class="checkmark2" type="checkbox" name="vraag1[]" value="'.$value.'" id="vraag1"/> <p class="p" >'.$value.'</p><span class="checkmark2" ></span></label>
      ';
    }
    ?>
    <div id="required"></div>

    <label class="label"><?php echo $Tvraag2 ?><span>*</span></label>
    <?php
    foreach ($vraag2 as $value) {
      echo '<label class="container"><input id="vraag2[]" class="radio" type="radio" name="vraag2[]" value="'.$value.'" /> <p class="p">'.$value.'</p><span class="checkmark"></span></label>
      ';
    }
    ?>
    <div id="required2"></div>


    <script type="text/javascript" language="javascript" src="resources/js/stap-1.js"></script>
    <input type="submit" value="VERDER" id="next" />
  </form>
</div>
</div>

<?php require_once ('../frame/footer.php'); ?>
