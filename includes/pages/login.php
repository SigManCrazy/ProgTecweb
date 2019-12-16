<?php

define('SITE_ROOT', getcwd());
include SITE_ROOT."/includes/resources.php";

if (array_key_exists("psw", $_POST)) { // login.php chiama se stessa in POST....
    $username = filter_input(INPUT_POST, "uname");
    $password = hashPassword(filter_input(INPUT_POST, "psw"));

    if (true) {// TODO: aggiungere i controlli sul database qui
        setUserSession($username, USER_ROLE_USER);
    }
}

$indexPage = build_default_page("pages/login" , []);
echo $indexPage->render();
?>
