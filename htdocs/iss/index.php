<?php
//grab DB
include_once 'db_connect.php';
include_once 'functions.php';
//check session, show proper html
if (login_check($mysqli) == true) {
	include('Hub.html');
} else {
	header('Location: login.php');
}
?>