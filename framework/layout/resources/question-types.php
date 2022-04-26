<!-- Type radio questions-->
<label class="label"><?php echo $Tvraag1 ?><span>*</span></label>
  <?php
    foreach ($vraag1 as $value) {
      echo '<label class="container"><input id="vraag1[]" class="radio" type="radio" name="vraag1[]" value="'.$value.'" /> <p class="p">'.$value.'</p><span class="checkmark"></span></label>
      ';
    }
  ?>
  <div id="required"></div>

<!--Checkbox questions -->
<label class="label"><?php echo $Tvraag1?><span>*</span></label>
  <?php
    foreach ($vraag1 as $value) {
      echo '<label class="container2" ><input class="checkmark2" type="checkbox" name="vraag1[]" value="'.$value.'" id="vraag1"/> <p class="p" >'.$value.'</p><span class="checkmark2" ></span></label>
      ';
    }
  ?>
  <div id="required"></div>

<!-- Type Text input questions-->
<label class="label"><?php echo $Tvraag3 ?><span>*</span></label>
<input class="text" name="vraag3" id="vraag3" type="text" />
<p class="subtitle">TEXT</p>

<div id="required3"></div>

<!-- textarea -->
<label class="label"><?php echo $Tvraag1 ?></label>
<textarea class="text" style="height:100px;" name="vraag1" placeholder=""></textarea>

<!--stap-3 info questions-->
<label class="label">Straat<span>*</span></label>
<input class="text" name="straat" id="straat" type="text" required/>

<label class="label">Huisnummer<span>*</span></label>
<input class="text" name="huisnummer" id="huisnummer" type="text" required/>

<label class="label">Postcode<span>*</span></label>
<input class="text" name="postcode" id="postcode" type="text" required/>

<label class="label">Plaats<span>*</span></label>
<input class="text" name="plaats" id="plaats" type="text" required/>

<label class="label">Telefoon<span>*</span></label>
<input class="text" name="telefoon" id="telefoon" type="text" required/>

<label class="label">E-mail<span>*</span></label>
<input class="text" name="email" id="email" type="email" required/>

<!--Gewenste leverdates -->
<label class="label"><?php echo $Tleverdatum ?><span>*</span></label>
  <?php
    foreach ($leverdatum as $value) {
      echo '<label class="container"><input id="leverdatum[]" class="radio" type="radio" name="leverdatum[]" value="'.$value.'" /> <p class="p">'.$value.'</p><span class="checkmark"></span></label>
      ';
    }
  ?>
    <div id="required2"></div>

<!--Beste contactmoment-->
<label class="label">Beste contactmoment<span>*</span></label>
  <?php
    foreach ($contactmoment as $value) {
      echo '<label class="container2" ><input class="checkmark2" type="checkbox" name="contactmoment[]" value="'.$value.'" id="contactmoment"/> <p class="p" >'.$value.'</p><span class="checkmark2" ></span></label>
      ';
    }
  ?>
  <div id="required3"></div>
