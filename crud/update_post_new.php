<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/style.css">

 </head>
 <body>

 	<?php 

	include 'connectdb.php';

	$id = $_GET['id'];

	$sql = "SELECT * FROM posts WHERE id = $id";

	$result = $mysqli->query($sql);

	if ($result) {
		
		$row = $result->fetch_object();

	}else{

		$mysqli->error;

	}

	?>

 	
 	<div class="container">

 		<h1>Create A New Post</h1><br>

 		<form action="update_post.php" method="POST">
 			<input type="hidden" name="id" value="<?php echo $row->id ?>">

 			<div class="form-group">
 				<label for="title">Post Title</label>
 				<input type="title" class="form-control" id="title" name="title" value="<?php echo $row->title; ?>">
 			</div>

 			<div class="form-group">
 				<label for="content">Content</label>
 				<textarea class="form-control" name="content" rows="15"><?php echo $row->content; ?></textarea>
 			</div>

 			<button type="submit" class="btn btn-primary">Done</button>

 		</form>

 	</div>

	<script src="../js/bootstrap.js"></script>
 </body>
 </html>