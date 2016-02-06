<?php 

	function read_posts(){

		include 'connectdb.php';

		$sql = "SELECT * FROM posts";

		$result = $mysqli->query($sql);

	}

 ?>