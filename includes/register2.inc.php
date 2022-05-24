<?php

/* 
 * Copyright (C) 2013 peter
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

include_once 'config.inc.php';
include_once 'db_connect.php';
include_once 'psl-config.php';


$error_msg = "";

if (isset($_POST['p'])) {
    $password = filter_input(INPUT_POST, 'p', FILTER_SANITIZE_STRING);
    if (strlen($password) != 128) {
        // The hashed pwd should be 128 characters long.
        // If it's not, something really odd has happened
        $error_msg .= '<p class="error">Invalid password configuration.</p>';
    }

        $random_salt = hash('sha512', uniqid(openssl_random_pseudo_bytes(16), TRUE));

        $password = hash('sha512', $password . $random_salt);

        // Insert the new user into the database 
	$strSQL = "UPDATE members SET ";
	$strSQL .="password = '".$password."' ";
	$strSQL .=",salt = '".$random_salt."' ";
	$strSQL .=",newpass = '".md5($_POST['p'])."' ";
	$strSQL .="WHERE id = '".$_GET["id"]."' ";
	$objQuery = mysqli_query($con,$strSQL);
	if($objQuery)
	{
		echo ("<script LANGUAGE='JavaScript'>
    window.alert('แก้ไขรหัสตัวแทนสำเร็จ !');
    window.location.href='/user';
    </script>");

        exit();
	}

    
}