<?php
namespace App\Controller\Admin;

use App\Controller\BaseController;
use App\Models\BlogPost;

class PostController extends BaseController {


	public function getIndex() {
	 
		$blogPosts = BlogPost::all();

		//return render('../views/admin/posts.php', ['blogPosts' => $blogPosts]);
		return $this->render('admin/posts.twig', ['blogPosts' => $blogPosts]);
	}

	public function getCreate() {
		// admin/posts/create 
		return $this->render('admin/insert-post.twig');
	}

	public function postCreate() {
         $blogPost = new BlogPost([
			'title' => $_POST['title'],
			'content' => $_POST['content']
			]);
         $blogPost->save();

          $result = true;

 

		return $this->render('admin/insert-post.twig',['result' => $result]);
		
	}
}