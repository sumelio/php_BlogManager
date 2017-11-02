<?php 
namespace App\Controller;

use App\Models\BlogPost;
class IndexController extends BaseController {

	public function getIndex(){
         $blogPosts = BlogPost::query()->orderBy('id', 'desc')->get();
     

/*        global $pdo;

		$query =  $pdo->prepare('SELECT * FROM blogDataBase.blog_post ORDER BY id DESC ');
		$query->execute();

		$blogPosts = $query->fetchAll(\PDO::FETCH_ASSOC);*/
		//return render('../views/index.php', ['blogPosts' => $blogPosts]);
		return $this->render('index.twig', ['blogPosts' => $blogPosts]);

	}

}

?>