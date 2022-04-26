<p class="headerText">Shipping address</p>

<div class="textParts col-8">
  <label class="label">Street<span>*</span></label>
  <input class="text" name="straat" id="straat" type="text" />

  <div id="required4"></div>
</div>

<div class="textParts col-4">
  <label class="label">House nr.<span>*</span></label>
  <input class="text" name="huisnummer" id="huisnummer" type="text" />

  <div id="required5"></div>
</div>

<div class="textParts col-12">
  <label class="label">Postal code<span>*</span></label>
  <input class="text" name="postcode" id="postcode" type="text" />

  <div id="required6"></div>
</div>

<div class="textParts col-12">
  <label class="label">City<span>*</span></label>
  <input class="text" name="plaats" id="plaats" type="text" />

  <div id="required7"></div>
</div>

<p class="headerText">Infomation</p>

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

<script type="text/javascript" language="javascript" src="../js/stap-1.js"></script>

<input type="submit" value="SEND" id="next" />
</form>
</div><!-- end .formCheckout -->

<div class="textContactCheckoutOuter col-3">
<div class="textContactCheckoutInner col-12">
<h3>Contact</h3>
<p>
  <?php echo $contactEmail ?><br />
  --<br />
  <?php echo $contactTelefoon ?></p>
</div>
</div>

<div class="textContactCheckoutOuter2 col-12">
<div class="textContactCheckoutInner col-12">
<h3>Contact</h3>
<p>
  <?php echo $contactEmail ?>  |  <?php echo $contactTelefoon ?></p>
</div>
</div>
