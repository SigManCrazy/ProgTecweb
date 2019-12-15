<?php
// Questo abilita l'useo della sessione
session_start();

if (!isUserLogged()) {
    $_SESSION["username"] = null;
    $_SESSION["role"] = null;
}

define("USER_ROLE_USER", 0);
define("USER_ROLE_ADMIN", 1);

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