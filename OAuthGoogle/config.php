<?php
/**
 * Created by PhpStorm.
 * User: kapeesan
 * Date: 10/9/2018
 * Time: 9:38 PM
 */

	session_start();
	require_once "D:/Program/wamp64/www/OAuthGoogle/GoogleAPI/google-api-php-client-2.2.2/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("339053070098-gg4nsmb7fgbj1vqm8nb77qc5c0msmien.apps.googleusercontent.com");
	$gClient->setClientSecret("5PJo6NYdf-CMOxjLjev8EJPm");
	$gClient->setApplicationName("SSD Assignment");
	$gClient->setRedirectUri("http://localhost/OAuthGoogle/call.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
