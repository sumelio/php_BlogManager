<?php
namespace App\Controller\Admin;

use App\Controller\BaseController;


class PostController extends BaseController {


	public function getIndex() {
		// admin/posts or admin/posts/index
		global $pdo;

		$query =  $pdo->prepare('SELECT * FROM blogDataBase.blog_post ORDER BY id DESC ');
		$query->execute();
		$blogPosts = $query->fetchAll(\PDO::FETCH_ASSOC);

		//return render('../views/admin/posts.php', ['blogPosts' => $blogPosts]);
		return $this->render('admin/posts.twig', ['blogPosts' => $blogPosts]);
	}

	public function getCreate() {
		// admin/posts/create 
		return $this->render('admin/insert-post.twig');
	}

	public function postCreate() {
		global $pdo;

		$sql = 'INSERT INTO blogDataBase.blog_post (title, content ) values (:title, :content)  ';

		$query = $pdo->prepare($sql);
		$result =  $query->execute([
			'title' => $_POST['title'],
			'content' => $_POST['content']
			]);

		return $this->render('admin/insert-post.twig',['result' => $result]);
		
	}
}