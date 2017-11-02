<?php
namespace App\Controller\Admin;

class IndexController {

	public function getIndex(){
		return render('../views/admin/index.php');
	}
}