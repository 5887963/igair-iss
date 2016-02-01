<?php
//grab DB
require('../../includes/iss_db.inc');
//check session, show proper html
if (session_status() == PHP_SESSION_ACTIVE) {
	include('Hub.html');
} else {
	include('AuthPortal.html');
}
?>