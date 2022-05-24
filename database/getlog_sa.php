<?php
$curl = curl_init();
$agent = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.aibacca.com/api/sagame/1",
  CURLOPT_RETURNTRANSFER => 1,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_USERAGENT => $agent,
  CURLOPT_TIMEOUT => 3,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_CONNECTTIMEOUT => 5,  
));
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Accept: application/json'));
curl_setopt($curl, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
$response = curl_exec($curl);
curl_close($curl);
$message1 = str_replace('data":{', 'data":[{', $response);
$message1 = str_replace('"}}', '"}]}', $message1);
  echo $message1;
?>