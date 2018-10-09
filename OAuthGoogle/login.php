<?php
/**
 * Created by PhpStorm.
 * User: kapeesan
 * Date: 10/9/2018
 * Time: 9:13 PM
 */
    require_once "D:\Program\wamp64\www\OAuthGoogle\config.php";
//
//	if (isset($_SESSION['access_token'])) {
//		header('Location: index.php');
//		exit();
//	}
//
	$loginURL = $gClient->createAuthUrl();
//?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login With Google</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top: 100px">
        <div class="row justify-content-center">
            <div class="col-md-6 col-offset-3" align="center">

                <img src="logo/logo.jpg"><br><br>

                <form >
                    <input type="button" value="log in with Google" class="btn btn-info btn-lg" align="center" onclick="window.location = '<?php echo $loginURL ?>';" value="Log In With Google" class="btn btn-danger">
                </form>

            </div>
        </div>
    </div>
</body>
</html>