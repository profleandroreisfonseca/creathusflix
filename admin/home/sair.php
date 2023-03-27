<?php 
	session_start(); 
	session_destroy(); 
	echo "<script> window.location.href='https://creathusflix.herokuapp.com.com/admin';</script>";
	exit;
?>