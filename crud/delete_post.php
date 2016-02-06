<?php 

	include 'connectdb.php';

	$id = $_GET['id'];

	$sql = "DELETE FROM posts WHERE id = $id";

	$result = $mysqli->query($sql);

	if ($result) {
		header("location: read-posts.php");
	}else{
		echo $mysqli->error;
	}

	$mysqli->close();


	
 ?>