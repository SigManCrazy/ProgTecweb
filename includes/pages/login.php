<?php

define('SITE_ROOT', getcwd());
include SITE_ROOT."/includes/resources.php";

if ( isUserLogged() ) { // errcheck
	header("Location: index.php");
} else if (array_key_exists("psw", $_POST)) {
    $username = filter_input(INPUT_POST, "uname");
    $password = hashPassword(filter_input(INPUT_POST, "psw"));
	
	if (checkLogin($username, $password)) {
        setUserSession($username, checkLogin($username, $password));
		if ( isUserLogged() )
			header("Location: index.php");
    } else {
		logout();
	}
}

$indexPage = build_default_page("pages/login" , []);
echo $indexPage->render();
?>
