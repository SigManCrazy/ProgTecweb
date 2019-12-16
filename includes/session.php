<?php
// Questo abilita l'useo della sessione
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

function hashPassword($password) { // Giusto per non salvare le password in chiaro. Se uno dovesse fare le cose fatte bene dovrebbe preoccuparsi di usare un algoritmo non facile di cui fare il reverse in GPU e che impiega un tempo costante.
    return md5("ju84nc73mf3e0".sha1($password));
}

function checkLogin($username, $password) {
    $db = new Database();
	$result = $db("select account.username, account.password, account.type where account.username=? and account.password=?", [
        $username,
        $password
    ]);

    $result = $result->fetch();

    //TODO: non ho PDO. ritornati 0 per nessun utente ed 1 o 2 a seconda del ruolo.
    return $result[2]; // <= questo ritorna il ruolo, ma lo fa solo in caso di successo.
}