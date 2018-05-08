<?php
//$apikey = 'czEgiTo4V5xrq0vJc3J3U7WvGTS7aEcwYQo65WlZ';
$apikey   = '35Xhj5XK3fAsPWJlsrksvu7RTzMQH7bC3xqVozpT';

//$url = "https://bugzilla.mozilla.org/rest/user?names=premnathm@dckap.com";
//$url  = "https://bugzilla.mozilla.org/rest/product/firefox";
//$url = "https://bugzilla.mozilla.org/rest/bug?api_key=$apikey&id=950644";

//$url = "https://bugzilla.mozilla.org/rest/bug/35";
//echo "sfdsf";
$url = "http://52.74.61.12/bugzilla/rest.cgi/bug/1540?api_key=$apikey";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);
//echo "<pre>";
print $result;
//echo "</pre>";
?>
