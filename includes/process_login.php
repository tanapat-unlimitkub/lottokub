<?php
session_start(); 
/*
 * Copyright (C) 2013 peredur.net
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

include_once 'db_connect.php';

function sec_session_start() {
    $session_name = 'sec_session_id';   // Set a custom session name 
    $secure = SECURE;

    // This stops JavaScript being able to access the session id.
    $httponly = true;

	
	ini_set('session.use_only_cookies', true);
if(ini_get('session.use_only_cookies') === false) {
    header("Location: ../error.php?err=Could%20not%20initiate%20a%20safe%20session%20%28ini_set%29");
    exit();
}

    // Gets current cookies params.
    $cookieParams = session_get_cookie_params();
    session_set_cookie_params($cookieParams["lifetime"], $cookieParams["path"], $cookieParams["domain"], $secure, $httponly);

    // Sets the session name to the one set above.
    session_name($session_name);

               // Start the PHP session 

}

if (isset($_POST['email']) && isset($_POST['password'])) {
$con = @mysqli_connect('localhost', 'viphack1_vip', 'dBf4HLqd5B', 'viphack1_vip');
if (!$con) {
    echo "Error: " . mysqli_connect_error();
	exit();
}

	$categorysql33 = "SELECT * FROM members WHERE email = '".$_POST['email']."' LIMIT 1";
$Query33 = mysqli_query($con,$categorysql33);
while($objResult33 = mysqli_fetch_array($Query33))
{
	$checkpass = $objResult33['password'];
	$user_id = $objResult33['id'];
	$username = $objResult33['username'];
}
    
    if ( md5($_POST['password']) == $checkpass) {
        $_SESSION['user_id'] = $user_id;
		$_SESSION['username'] = $username;
        header("Location: ../code_page");
        exit();
    } else {
        // Login failed 
    		echo ("<script LANGUAGE='JavaScript'>
window.alert('ข้อมูลไม่ถูกต้อง! กรุณาลองใหม่อีกครั้ง');
    window.location.href='/admin';
    </script>");
        exit();
    }
} else {
    // The correct POST variables were not sent to this page. 
   echo ("<script LANGUAGE='JavaScript'>
    window.alert('ขอมูลว่างเปล่า ระบบจะนำท่านกลับหน้าหลัก!');
    window.location.href='/admin';
    </script>");
        exit();
}