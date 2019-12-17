<?php
// Questo abilita l'uso della sessione
session_start();

if (!isUserLogged()) {
    $_SESSION["username"] = null;
    $_SESSION["role"] = null;
}

define("USER_ROLE_USER", 1);
define("USER_ROLE_ADMIN", 2);

function isUsernameValid($username) {
    return strlen($username) > 3;
}

function isUserLogged() {
    return (array_key_exists("username", $_SESSION)) && (isUsernameValid($_SESSION["username"]));
}

function isUserAdmin() {
    return (array_key_exists("role", $_SESSION)) && ($_SESSION["role"] == USER_ROLE_ADMIN);
}

function setUserSession($username, $role) {
    $_SESSION["username"] = trim($username);
    $_SESSION["role"] = $role;
}

function hashPassword($password) { // Giusto per non salvare le password in chiaro.
    return md5("ju84nc73mf3e0".sha1($password));
}

function checkLogin($username, $password) {
    $db = new Database();
	$result = $db("SELECT account.`type` AS t FROM account WHERE account.username=? AND account.password=?", [
        $username,
        $password
    ])->fetch();

	if ($result == null)
		return false;
    return $result["t"];
}

function logout() {
	session_destroy();
}