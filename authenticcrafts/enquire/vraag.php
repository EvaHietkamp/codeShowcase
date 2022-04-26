<?php
$land = "NL";
$product = "Authentic";
$from = "MP-nl";
$toemail = "info@bienivitesse.com";

$vraag1 = $_SESSION['vraag1'];
$vraag2 = $_SESSION['vraag2'];
$vraag3 = $_SESSION['vraag3'];

$telefoon = $_SESSION['telefoon'];
$email = $_SESSION['email'];
$voornaam = $_SESSION['voornaam'];
$achternaam = $_SESSION['achternaam'];
$contactmoment = $_SESSION['contactmoment'];
$contactmoment = implode(', ', $contactmoment);
$opmerkingen = $_SESSION['opmerkingen'];

$Tvraag1 = "You're looking for a sculpture:";
$Tvraag2 = "Properties that are important to you:";
$Tvraag3 = "Presentation sculpture:";
$Tvraag6 = "Delivery date";

$valueA1 = "For yourself";
$valueA2 = "As a gift";
$valueA3 = "As decoration for a business";
$valueA4 = "Other";

$valueB1 = "Handmade";
$valueB2 = "Craftmanship";
$valueB3 = "Uniqueness";
$valueB4 = "Other";

$valueC1 = "Inside";
$valueC2 = "Outside";
$valueC3 = "Other";

$valueZ1 = "As quickly as possible";
$valueZ2 = "Within 1 - 3 months";
$valueZ3 = "Within 3 - 6 months";
$valueZ4 = "In consultation";

$Tvraag101 = "Best time to call";

$valueV1 = "Morning";
$valueV2 = "Evening";
$valueV3 = "Weekend";
$valueV4 = "Doesn't matter";

?>
