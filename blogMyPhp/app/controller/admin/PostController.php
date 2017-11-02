<?php
namespace App\Controller\Admin;

class PostController{


	public function getIndex() {
		// admin/posts or admin/posts/index
		global $pdo;

		$query =  $pdo->prepare('SELECT * FROM blogDataBase.blog_post ORDER BY id DESC ');
		$query->execute();
		$blogPosts = $query->fetchAll(\PDO::FETCH_ASSOC);

		return render('../views/admin/posts.php', ['blogPosts' => $blogPosts]);
	}

	public function getCreate() {
		// admin/posts/create 
		return render('../views/admin/insert-post.php');
	}

	public function postCreate() {
		global $pdo;
		
		$sql = 'INSERT INTO blogDataBase.blog_post (title, content ) values (:title, :content)  ';

		$query = $pdo->prepare($sql);
		$result =  $query->execute([
			'title' => $_POST['title'],
			'content' => $_POST['content']
			]);

		return render('../views/admin/insert-post.php',['result' => $result]);
		
	}
}