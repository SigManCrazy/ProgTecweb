<?php

define('SITE_ROOT', getcwd());
include SITE_ROOT."/includes/resources.php";

logout();

if (isset($_SERVER["HTTP_REFERER"])) {
    header("Location: " . $_SERVER["HTTP_REFERER"]);
} else {
	header("Location: index.php");
}

?>
