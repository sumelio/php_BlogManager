
<?php
 //var_dump($_POST);
try{


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
				<h2>Post</h2>
				<a href="insert-post.php">New Post</a>

				<div class="blog-post">

					<?php
					try{
						foreach ($blogPosts as $blogPost ) {
 	# code...
							echo '<div class="blog-post">';
							echo '<h2>'. $blogPost['title'] .'</h2>';
							echo  '<p>Jan 1, 2020 by <a href="">ALex</a></p>'; 
							echo  '<div class="blog-port-image">';
							echo  '<img src="image/php7.png" alt="" style="width: 100%">';
							echo  '</div>';
							echo  '<div class="blog-port-content">';
							echo $blogPost['content'];
							echo  '</div>';
							echo '</div>';
						}

					} catch(Exception $ex){
						echo $ex->getMessage();
					}
					?>


				</div>
			</div>

			<div class="col-md-4">
				dlfdfddf dfdf dfdfddlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdf

			</div>

		</div>

		<div class="row">
			<div class="col-md-12">
				<footer>
					This is a footer<br>
					<a href="admin/index.php"  >Admin panel</a>

				</footer>
			</div>
		</div>

	</div>

</body>
</html>

