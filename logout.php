<?php
// quite simple
	session_start();
	session_destroy();
	header("Location: index.php");
