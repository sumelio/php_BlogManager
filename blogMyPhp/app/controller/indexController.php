<?php 
namespace App\Controller;

class IndexController extends BaseController {

	public function getIndex(){
        global $pdo;

		$query =  $pdo->prepare('SELECT * FROM blogDataBase.blog_post ORDER BY id DESC ');
		$query->execute();

		$blogPosts = $query->fetchAll(\PDO::FETCH_ASSOC);
		//return render('../views/index.php', ['blogPosts' => $blogPosts]);
		return $this->render('index.twig', ['blogPosts' => $blogPosts]);
		
	}

}

?>