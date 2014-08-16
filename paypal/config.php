<?php
//start session in all pages
if (session_status() == PHP_SESSION_NONE) { session_start(); } //PHP >= 5.4.0
//if(session_id() == '') { session_start(); } //uncomment this line if PHP < 5.4.0 and comment out line above

$PayPalMode 			= 'sandbox'; // sandbox or live
$PayPalApiUsername 		= 'cjando_api4.abv.bg'; //PayPal API Username
$PayPalApiPassword 		= '1406266214'; //Paypal API password
$PayPalApiSignature 	= 'A1oFRha8n2siiYXotpx3rf9sHRiHAMIZp-otgClosK50z6tTu6kyEIlT'; //Paypal API Signature
$PayPalCurrencyCode 	= 'USD'; //Paypal Currency Code
$PayPalReturnURL 		= 'http://localhost/TouristSite/paypal/process.php'; //Point to process.php page
$PayPalCancelURL 		= 'http://localhost/TouristSite/paypal/cancel_url.php'; //Cancel URL if user clicks cancel
?>

