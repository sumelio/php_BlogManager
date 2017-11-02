<?php
namespace App\Controller\Admin;

use App\Controller\BaseController;

class IndexController extends BaseController {

	public function getIndex(){ 
		return $this->render('admin/index.twig');
	}
}