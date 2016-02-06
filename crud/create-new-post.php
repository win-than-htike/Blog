<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/style.css">

 </head>
 <body>
 	
 	<div class="container">
 		<h1>Create A New Post</h1><br>
 		<form action="create-post.php" method="POST">
 			<div class="form-group">
 				<label for="title">Post Title</label>
 				<input type="title" class="form-control" id="title" name="title" placeholder="Title">
 			</div>
 			<div class="form-group">
 				<label for="content">Content</label>
 				<textarea class="form-control" name="content" rows="15" placeholder="Enter your content..."></textarea>
 			</div>
 			<button type="submit" class="btn btn-primary">Submit</button>
 		</form>
 	</div>

	<script src="../js/bootstrap.js"></script>
 </body>
 </html>