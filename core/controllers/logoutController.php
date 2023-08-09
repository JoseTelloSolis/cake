<?php

	unset($_SESSION['user_web']);
	session_destroy();
	header('location: index.html');

?>