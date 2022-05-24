<?php
if($_GET['id'] == 1){
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
exit;
}

if($_GET['id'] == 2){
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://xn--42cau3bvg8cgf2mbb5a6m0a3i.com/api/sagame/2',
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
  CURLOPT_URL => 'https://xn--42cau3bvg8cgf2mbb5a6m0a3i.com/api/sagame/3',
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
  CURLOPT_URL => 'https://xn--42cau3bvg8cgf2mbb5a6m0a3i.com/api/sagame/4',
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
  CURLOPT_URL => 'https://xn--42cau3bvg8cgf2mbb5a6m0a3i.com/api/sagame/5',
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
  CURLOPT_URL => 'https://xn--42cau3bvg8cgf2mbb5a6m0a3i.com/api/sagame/6',
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
  CURLOPT_URL => 'https://xn--42cau3bvg8cgf2mbb5a6m0a3i.com/api/sagame/999',
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
  CURLOPT_URL => 'https://xn--42cau3bvg8cgf2mbb5a6m0a3i.com/api/sagame/888',
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

if($_GET['id'] == 9){
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://xn--42cau3bvg8cgf2mbb5a6m0a3i.com/api/sagame/1000',
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

if($_GET['id'] == 10){
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://xn--42cau3bvg8cgf2mbb5a6m0a3i.com/api/sagame/1100',
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
  CURLOPT_URL => 'https://xn--42cau3bvg8cgf2mbb5a6m0a3i.com/api/lobby_sa',
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
$resp1 = $resp[0]->Data;
$resp2 = $resp[1]->Data;
$resp3 = $resp[2]->Data;
$resp4 = $resp[3]->Data;
$resp5 = $resp[4]->Data;
$resp6 = $resp[5]->Data;
$resp7 = $resp[30]->Data;
$resp8 = $resp[31]->Data;
$resp9 = $resp[32]->Data;
$resp10 = $resp[33]->Data;
?>
[{"Room":"BACCARAT-001","Data":"<?=$resp1;?>"},{"Room":"BACCARAT-002","Data":"<?=$resp2;?>"},{"Room":"BACCARAT-003","Data":"<?=$resp3;?>"},{"Room":"BACCARAT-004","Data":"<?=$resp4;?>"},{"Room":"BACCARAT-005","Data":"<?=$resp5;?>"},{"Room":"BACCARAT-006","Data":"<?=$resp6;?>"},{"Room":"BACCARAT-007","Data":"<?=$resp7;?>"},{"Room":"BACCARAT-008","Data":"<?=$resp8;?>"},{"Room":"BACCARAT-009","Data":"<?=$resp9;?>"},{"Room":"BACCARAT-010","Data":"<?=$resp10;?>"}]
<?php
}
exit;
?>
