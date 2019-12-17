<?php

define('SITE_ROOT', getcwd());
include SITE_ROOT."/includes/resources.php";

if ( isUserLogged() ) { // errcheck
	header("Location: index.php");
} else if (array_key_exists("psw", $_POST)) {
    $username = filter_input(INPUT_POST, "uname");
    $password = filter_input(INPUT_POST, "psw");
    $password2 = filter_input(INPUT_POST, "psw2");
    $email = filter_input(INPUT_POST, "email");
	if ($password != $password2 or
		!isUsernameValid($username) or
		!isPasswordValid($password) or
		!isEmailValid($email) or
		isUser($username) ) {
		echo !isUsernameValid($username);
		echo !isPasswordValid($password);
		echo !isEmailValid($email);
		echo isUser($username);
		header("Location: register.php");
	} else {
		$password = hashPassword($password);
		addUser($username, $password, $email);
		header("Location: login.php");
	}
}

$indexPage = build_default_page("pages/register" , []);

echo $indexPage->render();

?>
