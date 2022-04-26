<?php
$header_info = "TTILE + HEADER";
$sales_info = "Deze Maand: Div. Proctuct Akties.<br />Vraag Nu De Beste Prijzen Aan.";
$img_1 = "resources/image/image1.jpg";
$img_2 = "resources/image/image2.jpg";
$img_3 = "resources/image/image3.jpg";
$img_4 = "resources/image/image4.jpg";

$land = "NL";
$product = "PRODUCT";
$from = "GOOGLE";
$toemail = "info@email.com";


$a_vraag1 = isset($_SESSION['vraag1']) && is_array($_SESSION['vraag1']) ? $_SESSION['vraag1'] : [];
$a_vraag1 = implode(',', $a_vraag1);

$a_vraag2 = isset($_SESSION['vraag2']) && is_array($_SESSION['vraag2']) ? $_SESSION['vraag2'] : [];
$a_vraag2 = implode(',', $a_vraag2);

$a_vraag3 = $_SESSION['vraag3'];

//standaard
$a_leverdatum = isset($_SESSION['leverdatum']) && is_array($_SESSION['leverdatum']) ? $_SESSION['leverdatum'] : [];
$a_leverdatum = implode(',', $a_leverdatum);
$straat = $_SESSION['straat'];
$huisnummer = $_SESSION['huisnummer'];
$postcode = $_SESSION['postcode'];
$plaats = $_SESSION['plaats'];
$telefoon = $_SESSION['telefoon'];
$email = $_SESSION['email'];
$voornaam = $_SESSION['voornaam'];
$achternaam = $_SESSION['achternaam'];
$a_contactmoment = isset($_SESSION['contactmoment']) && is_array($_SESSION['contactmoment']) ? $_SESSION['contactmoment'] : [];
$a_contactmoment = implode(',', $a_contactmoment);
$opmerkingen = $_SESSION['opmerkingen'];


//vraag1
$Tvraag1 = "VRAAG 1";

$vraag1 = array(
  "ANTWOORD 1", "ANTWOORD 2", "ANTWOORD 3", "ANTWOORD 4",
);

//vraag2
$Tvraag2 = "VRAAG 2";

$vraag2 = array(
    "ANTWOORD 1", "ANTWOORD 2", "ANTWOORD 3", "ANTWOORD 4",
);

//vraag3
$Tvraag3 = "VRAAG 3";


//leverdatum
$Tleverdatum = "Gewenste Leverdatum";

$leverdatum = array(
  "Zo snel mogelijk", "Binnen 1 - 3 maanden", "Binnen 3 - 6 maanden", "In overleg",
);

//contact
$contactmoment = array(
  "Voor de middag", "Na de middag", "'s Avonds", "Maakt niet uit",
);

?>
