<?php
session_start();
error_reporting(0);
$ip = $_SERVER['REMOTE_ADDR'];


require_once ('resources/product_data.php');

$_SESSION['vraag1'] = $_POST['vraag1'];
$_SESSION['vraag2'] = $_POST['vraag2'];

require_once ('../frame/head.html');
require_once ('resources/header.php');
require_once ('../frame/nav.html');

?>

<p class="stap">Stap 2 van 4</p>
<p class="h4"><?php echo $sales_info?></p class="h4">
  <img src="<?php echo $img_2?>" /> 

  <form action="stap-3.php" name="form" onsubmit="return validate(this);" method="post">

    <label class="label"><?php echo $Tvraag3 ?><span>*</span></label>
    <textarea class="text" style="height:100px;" name="vraag3" placeholder=""></textarea>

    <div id="required"></div>

    <label class="label"><?php echo $Tleverdatum ?><span>*</span></label>
    <?php
    foreach ($leverdatum as $value) {
      echo '<label class="container"><input id="leverdatum[]" class="radio" type="radio" name="leverdatum[]" value="'.$value.'" /> <p class="p">'.$value.'</p><span class="checkmark"></span></label>
      ';
    }
    ?>

    <div id="required2"></div>

    <script type="text/javascript" language="javascript" src="resources/js/stap-2.js"></script>

    <input type="submit" value="VERDER" id="next" />
  </form>
</div>
</div>

<?php require_once ('../frame/footer.php'); ?>
