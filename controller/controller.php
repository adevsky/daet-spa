<?php

	require_once '../controller/lib.php';

$action = $_GET['action'];

switch ($action) {
	case 'logout':
		logout();
		break;
	
	default:
		# code...
		break;
}

if (isset($_POST['login'])) {
	login();
	}

if (isset($_POST['upload'])) {
    upload();
}

?>