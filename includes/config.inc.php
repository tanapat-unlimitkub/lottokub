<?php

//Title
$sql = "SELECT * FROM coupon ";
$Query = mysqli_query($con,$sql);
while($Result = mysqli_fetch_array($Query))
{
$dealer = $Result["dealer"];
$user = $Result["user"];
$gen_date = $Result["gen_date"];
$gen_time = $Result["gen_time"];
$use_date = $Result["use_date"];
$use_time = $Result["use_time"];
$ip = $Result["IP"];
$amount = $Result["amount"];
$activate = $Result["activate"];
$STATUS = $Result["STATUS"];
$member_ip = $Result["member_ip"];

}
date_default_timezone_set("Asia/Bangkok");
?>
