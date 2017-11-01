
<?php
 //var_dump($_POST);
try{
	require_once  '../config.php';

    $result = false;

if(! empty($_POST)){
	 $sql = 'INSERT INTO blogDataBase.blog_post (title, content ) values (:title, :content)  ';

	 $query = $pdo->prepare($sql);
$result =	 $query->execute([
'title' => $_POST['title'],
'content' => $_POST['content']
	 	]);

}

	


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
				<h2>New Post </h2>
				<p>
				<a class="btn btn-default" href="posts.php">Back</a>
				 </p>
				     <?php
        if ($result) {
            echo '<div class="alert alert-success">Success!!!</div>';
        }
    ?>

				<form action="insert-post.php" method="POST">
					<div class="form-group" >
						<label for="inputTitle">Title</label>
						<input type="text" name="title" class="form-control" id="title"  >

					</div>
                 <textarea class="form-control" name="content" id="inputContent" rows="10"></textarea>
                 <br>
                 <input class="btn btn-primary" type="submit" value="Save" >
				</form>
			</div>

			<div class="col-md-4">
				dlfdfddf dfdf dfdfddlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdfdlfdfddf dfdf dfdf

			</div>

		</div>

		<div class="row">
			<div class="col-md-12">
				<footer>
					This is a footer<br>
					<a href="index.php"  >Admin panel</a>

					</footer>
				</div>
			</div>

		</div>

	</body>
	</html>

