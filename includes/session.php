<?php
// Questo abilita l'uso della sessione
session_start();

if (!isUserLogged()) {
    $_SESSION["username"] = null;
    $_SESSION["permissions"] = null;
}

define("P_USER", 1);
define("P_ADMIN", 2);

function isUsernameValid($username) {
    return strlen($username) > 3;
}

function isPasswordValid($password) {
    return strlen($password) > 3;
}

function isEmailValid($email) {
    return strlen($email) > 3;
}

function isUser($username) {
	$db = new Database();
	return $db("SELECT count(*) AS c FROM account WHERE account.username=?", [$username])->fetch()["c"];
}

function isUserLogged() {
    return (array_key_exists("username", $_SESSION)) && (isUsernameValid($_SESSION["username"]));
}

function isUserAdmin() {
    return (array_key_exists("permissions", $_SESSION)) && ($_SESSION["permissions"] == P_ADMIN);
}

function setUserSession($username, $permissions) {
    $_SESSION["username"] = trim($username);
    $_SESSION["permissions"] = $permissions;
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

function addUser($username, $password, $email) {
	$db = new Database;
	$db("INSERT INTO account (username, password, email, `type`)
		VALUES (?, ?, ?, 1)", 
		[ $username, $password, $email]);
}

function logout() {
	session_destroy();
}