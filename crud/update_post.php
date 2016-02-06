<?php 

	include 'connectdb.php';

	$id = $_POST['id'];

	$title = $_POST['title'];

	$content = $_POST['content'];

	$sql = "UPDATE posts SET title = '$title',content = '$content' WHERE id = $id";

	$result = $mysqli->query($sql);

	header("location: read-posts.php");

	// if ($result) {
		
	// }else{
	// 	echo $mysqli->error;
	// }

	$mysqli->close();

 ?>