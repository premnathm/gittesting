<?php
$headers    = array( '63ce89cba77a5f02f3b6', '6c2fef4c906ff0e4188ef2a1d4ac3b8a903230c0' );

$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_URL => 'https://api.assembla.com/v1/spaces/riddell-redesign/tickets.json',
    CURLOPT_HTTPHEADER => $headers
));

curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
$response = curl_exec($ch);

print_r('1 '.$response);

?>