<html>
<body>
<div id="wrapper">
<?php
echo $ip = '120.50.27.34';
echo var_export(unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip)));

$apikey = "c618b496af1902b0533464363e3c958bd5f9c76fbad5526a18f925ce661bf3fe";


$url = json_decode(file_get_contents("http://api.ipinfodb.com/v3/ip-city/?key=$apikey&ip=".$ip."&format=json"));
 
//print the array to see the fields if you wish.
//print_r($url);
 
echo "<table border='1' width='50%' align='center'><tr><td>COUNTRY:</td><td>";
echo $url->countryName;
echo "</td></tr><tr><td>CITY:</td><td>";
echo $url->cityName;
echo "</td></tr><tr><td>STATE OR REGION:</td><td>";
echo $url->regionName;
echo "</td></tr><tr><td>IP ADDRESS:</td><td>";
echo $url->ipAddress;
echo "</td></tr><tr><td>COUNTRY CODE:</td><td>";
echo $url->countryCode;
echo "</td></tr><tr><td>LATITUTE:</td><td>";
echo $url->latitude;
echo "</td></tr><tr><td>LONGITUDE:</td><td>";
echo $url->longitude;
echo "</td></tr><tr><td>TIMEZONE:</td><td>";
echo $url->timeZone;
echo "</td></tr><tr></table>";

?>
</div>
</body>
</html>