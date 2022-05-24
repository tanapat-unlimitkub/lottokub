<?php
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://xn--42cau3bvg8cgf2mbb5a6m0a3i.com/api/sagame/1',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$resp = curl_exec($curl);
curl_close($curl);

$resp = str_replace(' {"success":true,"errors":"","data":', '[', $resp);
$resp = str_replace('}}', '}]', $resp);
$resp = str_replace('records', 'data', $resp);
echo $resp;
?>