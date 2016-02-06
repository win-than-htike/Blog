<?php 

	$mysqli = new mysqli('localhost','root','root','blog');

	if ($mysqli->connect_error) {
		die(var_dump($mysqli->connect_error));
	}

 ?>