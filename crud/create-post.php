<?php 

	require_once ('connectdb.php');

	$title = $_POST['title'];
	$content = $_POST['content'];

	$sql = 'INSERT INTO posts (title, content, author) VALUES ("' . $title . '","' . $content .'", "win than")';

	$result = $mysqli->query($sql);

	if ($result) {
		header("location: read-posts.php");	
	}else{
		echo $mysqli->error;
	}

	$mysqli->close();


 ?>

 