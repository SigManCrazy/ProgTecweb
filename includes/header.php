<?php

function getLogInOutHref() {
	if ( isUserLogged() )
		return "logout.php";
	return "login.php";
}


function getLogInOutText() {
	if ( isUserLogged() )
		return "Logout";
	return "Login";
}

?>