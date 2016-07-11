<?php
    session_start();
	$_SESSION = array();
	session_destroy();
	header('Status: 301 Moved permantly', false, 301);
	header('Location:formLogin.php');
	exit();
?>