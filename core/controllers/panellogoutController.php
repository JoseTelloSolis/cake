<?php

	unset($_SESSION['id'], $_SESSION['user']);
	session_destroy();
	header('location: admin');

?>