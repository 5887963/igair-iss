<?php
$password="password";
$salt="salt";
$hash=crypt($password,$salt);
echo $hash; 
?>
<br><br><br>
<?php
if (session_status() == PHP_SESSION_ACTIVE) {
	echo "session: yes";
} else {
	echo "session: no";
}
?>