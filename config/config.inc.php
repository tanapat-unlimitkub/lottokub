<?php

if (!$con) {
    echo "Error: " . mysqli_connect_error();
	exit();
}

//Title
$sql = "SELECT * FROM setting ";
$Query = mysqli_query($con,$sql);
while($Result = mysqli_fetch_array($Query))
{
$ving = $Result["ving"];
$banner = $Result["banner"];
$lineb = $Result["lineb"];
$lineid = $Result["lineid"];
$linel = $Result["linel"];
$r_banner = $Result["r_banner"];
$l_banner = $Result["l_banner"];
$r_bannerlink = $Result["r_bannerlink"];
$l_bannerlink = $Result["l_bannerlink"];
$credit22 = $Result["credit"];
$credit77 = $Result["creditslot"];
$credit88 = $Result["vipdownload"];
$credit99 = $Result["pok"];
$credit1010 = $Result["spin"];
$creditbc = $Result["bc"];
$sodd = $Result["sod"];
}
date_default_timezone_set("Asia/Bangkok");

?>
