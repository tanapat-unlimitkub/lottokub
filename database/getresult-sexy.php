<?php
session_start();
if (empty($_SESSION['mb_id'])) {
exit;
}

$aContext = array(
    'http' => array(
	    'method' => 'GET',
		'header'=>"Accept-language: en\r\n"            
  ),
);
$cxContext = stream_context_create($aContext);
$sFile = file_get_contents("https://xn--42cau3bvg8cgf2mbb5a6m0a3i.com/api/lobby_sexxy", False, $cxContext);

$first_step = explode( 'b_data":"' , $sFile );
$second_step = explode('",' , $first_step[1] );
$message1 = trim($second_step[0]);
$message1 = str_replace('"', '', $message1);
$message1 = str_replace(',', '', $message1);
$message1 = str_replace('B', 'r', $message1);
$message1 = str_replace('P', 'b', $message1);
$message1 = str_replace('T', 'g', $message1);
$reversed1 = $message1;

$second_step2 = explode('",' , $first_step[2] );
$message2 = trim($second_step2[0]);
$message2 = str_replace('"', '', $message2);
$message2 = str_replace(',', '', $message2);
$message2 = str_replace('B', 'r', $message2);
$message2 = str_replace('P', 'b', $message2);
$message2 = str_replace('T', 'g', $message2);
$reversed2 = $message2;

$second_step3 = explode('",' , $first_step[3] );
$message3 = trim($second_step3[0]);
$message3 = str_replace('"', '', $message3);
$message3 = str_replace(',', '', $message3);
$message3 = str_replace('B', 'r', $message3);
$message3 = str_replace('P', 'b', $message3);
$message3 = str_replace('T', 'g', $message3);
$reversed3 = $message3;

$second_step4 = explode('",' , $first_step[4] );
$message4 = trim($second_step4[0]);
$message4 = str_replace('"', '', $message4);
$message4 = str_replace(',', '', $message4);
$message4 = str_replace('B', 'r', $message4);
$message4 = str_replace('P', 'b', $message4);
$message4 = str_replace('T', 'g', $message4);
$reversed4 = $message4;

$second_step5 = explode('",' , $first_step[5] );
$message5 = trim($second_step5[0]);
$message5 = str_replace('"', '', $message5);
$message5 = str_replace(',', '', $message5);
$message5 = str_replace('B', 'r', $message5);
$message5 = str_replace('P', 'b', $message5);
$message5 = str_replace('T', 'g', $message5);
$reversed5 = $message5;

$second_step6 = explode('",' , $first_step[6] );
$message6 = trim($second_step6[0]);
$message6 = str_replace('"', '', $message6);
$message6 = str_replace(',', '', $message6);
$message6 = str_replace('B', 'r', $message6);
$message6 = str_replace('P', 'b', $message6);
$message6 = str_replace('T', 'g', $message6);
$reversed6 = $message6;

$second_step7 = explode('",' , $first_step[7] );
$message7 = trim($second_step7[0]);
$message7 = str_replace('"', '', $message7);
$message7 = str_replace(',', '', $message7);
$message7 = str_replace('B', 'r', $message7);
$message7 = str_replace('P', 'b', $message7);
$message7 = str_replace('T', 'g', $message7);
$reversed7 = $message7;

$second_step8 = explode('",' , $first_step[8] );
$message8 = trim($second_step8[0]);
$message8 = str_replace('"', '', $message8);
$message8 = str_replace(',', '', $message8);
$message8 = str_replace('B', 'r', $message8);
$message8 = str_replace('P', 'b', $message8);
$message8 = str_replace('T', 'g', $message8);
$reversed8 = $message8;

$second_step9 = explode('",' , $first_step[9] );
$message9 = trim($second_step9[0]);
$message9 = str_replace('"', '', $message9);
$message9 = str_replace(',', '', $message9);
$message9 = str_replace('B', 'r', $message9);
$message9 = str_replace('P', 'b', $message9);
$message9 = str_replace('T', 'g', $message9);
$reversed9 = $message9;

$second_step10 = explode('",' , $first_step[10] );
$message10 = trim($second_step10[0]);
$message10 = str_replace('"', '', $message10);
$message10 = str_replace(',', '', $message10);
$message10 = str_replace('B', 'r', $message10);
$message10 = str_replace('P', 'b', $message10);
$message10 = str_replace('T', 'g', $message10);
$reversed10 = $message10;

?>
[{"Room":"BACCARAT-001","Data":"<?php echo $reversed1; ?>"},{"Room":"BACCARAT-002","Data":"<?php echo $reversed2; ?>"},{"Room":"BACCARAT-003","Data":"<?php echo $reversed3; ?>"},{"Room":"BACCARAT-004","Data":"<?php echo $reversed4; ?>"},{"Room":"BACCARAT-005","Data":"<?php echo $reversed5; ?>"},{"Room":"BACCARAT-006","Data":"<?php echo $reversed6; ?>"},{"Room":"BACCARAT-007","Data":"<?php echo $reversed7; ?>"},{"Room":"BACCARAT-008","Data":"<?php echo $reversed8; ?>"},{"Room":"BACCARAT-009","Data":"<?php echo $reversed9; ?>"},{"Room":"BACCARAT-010","Data":"<?php echo $reversed10; ?>"}]