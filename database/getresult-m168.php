<?php
if($_GET['id'] == 1){
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://www.aibacca.com/api/sagame/7',
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
exit;
}

if($_GET['id'] == 2){
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://www.aibacca.com/api/sagame/8',
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
exit;
}

if($_GET['id'] == 3){
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://www.aibacca.com/api/sagame/9',
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
exit;
}

if($_GET['id'] == 4){
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://www.aibacca.com/api/sagame/10',
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
exit;
}

if($_GET['id'] == 5){
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://www.aibacca.com/api/sagame/11',
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
exit;
}

if($_GET['id'] == 6){
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://www.aibacca.com/api/sagame/12',
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
exit;
}

if($_GET['id'] == 7){
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://www.aibacca.com/api/sagame/13',
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
exit;
}

if($_GET['id'] == 8){
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://www.aibacca.com/api/sagame/14',
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
exit;
}


if($_GET['id'] == ""){
	$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://www.aibacca.com/api/lobby_sa',
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
$resp = str_replace(' {"success":true,"errors":"","data":', '', $resp);
$resp = str_replace('}]}', '}]', $resp);
$resp = str_replace('records', 'Data', $resp);
$resp =  json_decode($resp);
$resp1 = $resp[6]->Data;
$resp2 = $resp[7]->Data;
$resp3 = $resp[8]->Data;
$resp4 = $resp[9]->Data;
$resp5 = $resp[10]->Data;
$resp6 = $resp[11]->Data;
$resp7 = $resp[12]->Data;
$resp8 = $resp[13]->Data;
?>
[{"Room":"BACCARAT-001","Data":"<?=$resp1;?>"},{"Room":"BACCARAT-002","Data":"<?=$resp2;?>"},{"Room":"BACCARAT-003","Data":"<?=$resp3;?>"},{"Room":"BACCARAT-004","Data":"<?=$resp4;?>"},{"Room":"BACCARAT-005","Data":"<?=$resp5;?>"},{"Room":"BACCARAT-006","Data":"<?=$resp6;?>"},{"Room":"BACCARAT-007","Data":"<?=$resp7;?>"},{"Room":"BACCARAT-008","Data":"<?=$resp8;?>"}]
<?php
}
exit;
?>
