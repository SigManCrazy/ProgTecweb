<?php

function getHeaderContentArray() {
	$login_status = isUserLogged();
	return [ "loginouthref" => $login_status ? "logout.php" : "login.php",
			 "loginouttext" => $login_status ? "Logout" : "Login" ];
}

?>