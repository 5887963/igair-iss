<?php
//grab DB
require "psl-config.php";
//check session, show proper html
if (session_status() == PHP_SESSION_ACTIVE) {
	include('Hub.html');
} else {
	include('AuthPortal.html');
}
?>