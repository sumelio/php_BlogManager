
<?php
 //var_dump($_POST);
try{
	require_once  '../config.php';


	$query =  $pdo->prepare('SELECT * FROM blogDataBase.blog_post ORDER BY id DESC ');
	$query->execute();

	$blogPosts = $query->fetchAll(PDO::FETCH_ASSOC);



} catch(Exception $ex){
	echo $ex->getMessage();
}

?>



<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BLog with Php7</title>


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body> 
	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<h1>Blog Title</h1>


			</div>
		</div>

		<div class="row">
			<div class="col-md-8">
				<h2>Posts </h2>
				<a class="btn btn-primary" href="insert-post.php">New Post</a>
				<table class="table">
					<tr><th>
						Title
					</th><th>Edit</th><th>Delete</th></tr>
					<?php
					try{
						foreach ($blogPosts as $blogPost ) {
							echo '<tr>';
							echo '<td>'. $blogPost['title'].'</td>';
							echo '<td>Edit '. $blogPost['title'].'</td>';
							echo '<td>Delete'. $blogPost['title'].'</td>';
							echo '</tr>';

						}
					} catch(Exception $ex){
						echo $ex->getMessage();
					}
					?>
				</table>
			</div>

			<div class="col-md-4">
				dlfdfddf dfdf dfdfddlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdf

			</div>

		</div>

		<div class="row">
			<div class="col-md-12">
				<footer>
					This is a footer<br>
					<a href="admin/index.php"  >Admin panel/a>

					</footer>
				</div>
			</div>

		</div>

	</body>
	</html>

