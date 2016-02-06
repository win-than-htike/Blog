<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="/Blog/">Home</a></li>
            <li><a href="/Blog/crud/create-new-post.php">Create Post</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="jumbotron" style="background:#fff;">
    	
	 	<div class="container">

      		<div class="container">

			<h1>Blog Posts</h1>

				<?php 

				include 'connectdb.php';

				$sql = "SELECT * FROM posts";

				$result = $mysqli->query($sql);?>

				<?php if ($result): ?>

					<?php if ($result->num_rows > 0): ?>

						<ul>

							<?php while($row = $result->fetch_object()): ?> 

								<h2><?php echo $row->title ?></h2>	
								<p><?php echo $row->content; ?></p>
								<button class="btn btn-primary"><a href="update_post_new.php?id=<?php echo $row->id; ?>" id="edit">Edit</a></button>
								<button class="btn btn-danger"><a href="delete_post.php?id=<?php echo $row->id ?>" id="del">Delete</a></button>
								<hr>

							<?php endwhile; ?> 

						</ul>

				<?php else: ?>

					<?php echo "There's is no data in Database."; ?>

				<?php endif ?>

				<?php else: ?>

					<?php echo $mysqli->error; ?>

				<?php endif ?>

			</div>

    	</div>


    </div>


    

		
	
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.js"></script>

</body>
</html>