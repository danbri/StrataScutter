<?php
$u = ($_POST['u']) ? $_POST['u'] : $_GET['u'];

// Open the Curl session
$session = curl_init($u);

// Don't return HTTP headers. Do return the contents of the call
curl_setopt($session, CURLOPT_HEADER, false);
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

// Make the call
$xml = curl_exec($session);

// The web service returns XML. Set the Content-Type appropriately
header("Content-Type: text/plain"); // debuggy
//
header("Content-Type: text/xml");

echo $xml;
curl_close($session);

?>
