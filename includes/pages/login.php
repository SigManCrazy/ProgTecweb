<?php

define('SITE_ROOT', getcwd());
include SITE_ROOT."/includes/resources.php";

$username = filter_input(INPUT_POST, "uname");
$password = hashPassword(filter_input(INPUT_POST, "psw"));

// TODO: aggiungere i controlli sul database qui
if (true) {
    setUserSession($username, USER_ROLE_USER);
}

$indexPage = build_default_page("pages/login" , []);
echo $indexPage->render();
?>
